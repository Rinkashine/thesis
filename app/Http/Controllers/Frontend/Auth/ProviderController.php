<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\CustomerSocialLogin;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Carbon\Carbon;
use Validator;


class ProviderController extends Controller
{
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider){
        $SocialUser =  Socialite::driver($provider)->user();

        $user = Customer::where('email', $SocialUser->getEmail())->first();
        if(!$user){
            $user = Customer::create([
                'name' => $SocialUser->getName(),
                'email' => $SocialUser->getEmail(),
                'email_verified_at' => now(),
            ]);

            $user->socialAccounts()->create([
                'provider_name' => $provider,
                'provider_id' => $SocialUser->getId(),
            ]);
             Auth::guard('customer')->login($user);
             return redirect()->intended('/');

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
            return redirect()->intended('/');

    }
}
