<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FormCreateUser extends Component
{
    public $lastname;
    public $firstname;
    public $email;
    public $phone;
    public $password;

    public $rules = [
        'lastname' => 'required',
        'firstname' => 'required',
        'phone' =>  'required',
        'email' => 'required',
        'password' => 'required'

    ];
    public function createUser(){
        User::create($this->validate());
        $this->reset();
    }

    public function render()
    {
        return view('livewire.form-create-user');
    }
}
