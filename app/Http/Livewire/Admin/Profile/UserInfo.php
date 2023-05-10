<?php

namespace App\Http\Livewire\Admin\Profile;

use Livewire\Component;

class UserInfo extends Component
{
    public $action;

    public $selectedItem;
    public function render()
    {

        return view('livewire.admin.profile.user-info');
    }

    public function selectItem( $action)
    {
        if ($action == 'change_photo') {
            $this->dispatchBrowserEvent('openChangePhotoModal');
        } elseif ($action == 'edit_info') {
            $this->dispatchBrowserEvent('openEditInfoModal');
        }
        $this->action = $action;
    }
}
