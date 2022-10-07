<?php

namespace App\Http\Livewire;

use App\Models\Users;
use Illuminate\Support\Facades\Hash;
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
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',

    ];

    protected $messages = [

        'password.required' => '* Vous devez renseigner un mot de passe.',
        'password_confirmation.required' => '* Vous devez confirmer le mot de passe ',
        'password.confirmed' => '* Les mots de passes ne correspondent pas ',

    ];

    public function update()
    {
        $datas = $this->validate();
        $newPassword = Hash::make($this->password);
        $user = Users::findOrFail($this->user->id);
        $user->password = $newPassword;
        $user->save();
        $this->alert(
            'success',
            'Mise à jour du mot de passe  de  effectué'
        );
        $this->reset(['password', 'password_confirmation']);
    }

    public function render()
    {
        return view('livewire.show-user');
    }
}
