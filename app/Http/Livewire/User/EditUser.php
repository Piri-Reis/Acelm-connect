<?php

namespace App\Http\Livewire\User;

use App\Http\Livewire\AlertModels;
use App\http\Livewire\On;
use App\http\Livewire\Rule;
use App\Models\Role;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditUser extends AlertModels
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.User.edit-user');
    }

    public $user;
    public $lastname;
    public $firstname;
    public $email;
    public $phone;
    public $password ='';
    public $password_confirmation ='';
    public $role;
    public $allRules;

    #[Rule('required')]
    public $newEmail;
    #[Rule('required')]
    public $newPhone;
    #[Rule('required')]
    public $newLastname;
    #[Rule('required')]
    public $newFirstname;

    protected $listeners = ['confirmed'];

    public function mount()
    {
        $this->allRules = Role::all();
        $user = Users::findOrFail($this->user->id);
        $this->newEmail = $user->email;
        $this->newPhone = $user->phone;
        $this->newLastname = $user->lastname;
        $this->newFirstname = $user->firstname;
    }

    public $rules = [
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',
        'newEmail' => 'required',
        'newPhone' => 'required',
        'newLastname' => 'required',
        'newFirstname' => 'required',

    ];

    protected $messages = [

        'password.required' => '* Vous devez renseigner un mot de passe.',
        'password_confirmation.required' => '* Vous devez confirmer le mot de passe ',
        'password.confirmed' => '* Les mots de passes ne correspondent pas ',
        'newEmail.required' => '* Vous devez renseigner une adresse email',
        'newPhone.required' => '* Vous devez renseigner le numéro de téléphone',
        'newLastname.required' => '* Vous devez renseigner une adresse le nom',
        'newFirstname.required' => '* Vous devez renseigner une adresse le prénnom',

    ];

    public function updatePassword()
    {
        $this->validate();
        $newPassword = Hash::make($this->password);
        $this->user->password = $newPassword;
        $this->user->save();
        $this->SuccesAlert('Mot de passe modifié avec succès !');
        $this->reset();
    }

    public function updateUser()
    {
        $datas = $this->validate(
            [
                'newEmail' => 'required',
                'newPhone' => 'required',
                'newLastname' => 'required',
                'newFirstname' => 'required'
            ],
            [
                'newEmail.required' => 'The :attribute cannot be empty.',
                'newPhone.required' => 'The :attribute cannot be empty.',
                'newLastname.required' => 'The :attribute cannot be empty.',
                'newFirstname.required' => 'The :attribute cannot be empty.',
            ],
        );
        $this->user->email = $this->newEmail;
        $this->user->phone = $this->newPhone;
        $this->user->lastname = $this->newLastname;
        $this->user->firstname = $this->newFirstname;
        if($this->role){
            $roleId = DB::table('roles')->where('name', $this->role)->value('id');
            $this->user->syncRoles($roleId);
        }
        $this->user->save();
        $this->SuccesAlert('Utilisateur modifié avec succès !');
    }

    public function delete()
    {

    }

}
