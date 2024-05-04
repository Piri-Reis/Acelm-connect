<?php

namespace App\Http\Livewire\User;

use App\http\Livewire\AlertModels;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;

class UserIndex extends AlertModels
{
    use LivewireAlert;


    public function render()
    {
        return view('livewire.User.user-index');
    }
}
