<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\CustomerSocialLogin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Carbon\Carbon;
use Validator;
use Laravolt\Avatar\Facade as Avatar;


class ProviderController extends Controller
{
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider){
        $SocialUser =  Socialite::driver($provider)->user();

        $user = Customer::where('email', $SocialUser->getEmail())->first();
        if(!$user){

            $avatar = $SocialUser->getEmail();
            if (! Storage::disk('public')->exists('customer_profile_picture')) {
                Storage::disk('public')->makeDirectory('customer_profile_picture', 0775, true);
            }

            $avatarimage = Avatar::create($SocialUser->getName())->save(storage_path('app/public/customer_profile_picture/'.$avatar.'.png'));

            $user = Customer::create([
                'name' => $SocialUser->getName(),
                'email' => $SocialUser->getEmail(),
                'email_verified_at' => now(),
                'photo' => $avatar.'.png',
            ]);

            $user->socialAccounts()->create([
                'provider_name' => $provider,
                'provider_id' => $SocialUser->getId(),
            ]);
             Auth::guard('customer')->login($user);
             return redirect()->route('home');

        }
        $socialAccount = $user->socialAccounts()->where('provider_name', $provider)
        ->where('provider_id', $SocialUser->getId())
        ->first();
        if (!$socialAccount) {
            // Create a new social account record if one doesn't exist
            $user->socialAccounts()->create([
                'provider_name' => $provider,
                'provider_id' => $SocialUser->getId(),
            ]);

                $user->email_verified_at = now();
                $user->update();

        }else{
            $user->email_verified_at = now();
            $user->update();
        }


            Auth::guard('customer')->login($user);
            return redirect()->route('home');

    }
}
