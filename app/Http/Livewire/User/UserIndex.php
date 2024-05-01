<?php

namespace App\Http\Livewire\User;

use Livewire\Attributes\On;
use Livewire\Component;

class UserIndex extends Component
{


    #[On('successDeletedUser')]
    public function successDeletedUser()
    {
        dd('helle');
        $this->alert('info', 'Utilisateur suppression !', [
            'position' => 'top',
            'timer' => '3000',
            'toast' => true,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'showCancelButton' => true,1,
            'onDismissed' => '',
        ]);
    }

    public function render()
    {
        return view('livewire.User.user-index');
    }
}
