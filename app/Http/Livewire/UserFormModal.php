<?php

namespace App\Http\Livewire;


use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UserFormModal extends Modal
{
    public $show = false;

    public $lastname;
    public $firstname;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;
    public $role;

    protected $listeners = [
        'show' => 'show'
    ];

    public function  show(){

        $this->show ?  $this->show = false  : $this->show = true;
    }

    public function render()
    {
        return view('livewire.user-form-modal');
    }


    public $rules = [
        'lastname' => 'required',
        'firstname' => 'required',
        'phone' =>  'required',
        'email' => 'required',
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

    public function createUser()
    {
        $datas = $this->validate();
        $datas['password'] = Hash::make($this->password);
        $role = $datas['role'];
        unset($datas['role'], $datas['password_confirmation']);
        $user = Users::create($datas);
        $user->assignRole($role);

        $this->alert(
            'success',
            'Enregistrement de ' . $user->firstname . ' ' . $user->lastname . ' effectué'
        );
        $this->reset();

        return $this->redirect('user');
    }

}
