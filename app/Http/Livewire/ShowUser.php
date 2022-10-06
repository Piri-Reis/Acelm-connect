<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowUser extends Component
{
    public $user;
    public $lastname;
    public $firstname;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;
    public $role;

    public $rules = [
        'lastname' => 'required',
        'firstname' => 'required',
        'phone' =>  'required',
        'email' => 'required|unique:users,email',
        'role' => 'required',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',

    ];

    protected $messages = [
        'lastname.required' => '* Vous devez renseigner un nom de famille.',
        'firstname.required' => '* Vous devez renseigner un prénom.',
        'phone.required' => '* Vous devez renseigner un numéro de télèphone.',
        'password.required' => '* Vous devez renseigner un mot de passe.',
        'password_confirmation.required' => '* Vous devez confirmer le mot de passe ',
        'password.confirmed' => '* Les mots de passes ne correspondent pas ',
        'email.required' => '* Vous devez renseigner une adresse email.',
        'role.required' => '* Vous devez choisir un role.',
        'email.email' => '* The Email Address format is not valid.',
    ];
    public function mount($user)
    {
        $this->lastname = $user->lastname;
    }

    public function render()
    {
        return view('livewire.show-user');
    }
}
