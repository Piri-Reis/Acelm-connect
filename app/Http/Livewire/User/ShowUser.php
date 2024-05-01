<?php

namespace App\Http\Livewire\User;
use App\Http\Livewire\Rule;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowUser extends Component
{
    use LivewireAlert;

    public $user;
    public $lastname;
    public $firstname;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;
    public $role;

    #[Rule('required')]
    public $newEmail;
    #[Rule('required')]
    public $newPhone;
    #[Rule('required')]
    public $newLastname;
    #[Rule('required')]
    public $newFirstname;
    public $fieldDisabled = true;
    protected $listeners = ['confirmed'];

  #[On('confirmed')]
    public function confirmed()
    {
        dd('helle');
//        $this->user->delete();
//        $this->reset();
        $this->dispatch('successDeletedUser');
//        return redirect('user');

    }

    public function mount()
    {
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
        $datas = $this->validate();
        $newPassword = Hash::make($this->password);
        $this->user->password = $newPassword;
        $this->user->save();
        session()->flash('message', 'Post successfully updated.');
        $this->alert('info', 'Utilisateur mis à jour !', [
          'position'=>"top-end",
          'icon'=> "success",
          'title'=> "Your work has been saved",
          'showConfirmButton'=> false,
          'timer'=> 1500
        ]);

        $this->reset(['password', 'password_confirmation']);
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
        $this->user->save();
        $this->alert('info', 'Utilisateur mis à jour !', [
            'position'=>"top-end",
            'icon'=> "success",
            'title'=> "Your work has been saved",
            'showConfirmButton'=> false,
            'timer'=> 1500
        ]);
    }

    public function delete()
    {
        $this->alert('warning', 'Confirmez la suppression !', [
            'position' => 'center',
            'timer' => '',
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,1,
            'onDismissed' => '',
        ]);
    }

    public function render()
    {
        return view('livewire.User.show-user');
    }
}
