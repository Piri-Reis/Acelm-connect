<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public $rules = [
        'email' => 'required',
        'password' => 'required'
    ];

    protected $messages = [
        'email.required' => '* email'
    ];

    public function login(){

        if (Auth::attempt($this->validate())) {
            return redirect('/');
        }else{
            return $this->alert(
                'error',
                'identifiant ou mot de passe incorrect'
            );
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
