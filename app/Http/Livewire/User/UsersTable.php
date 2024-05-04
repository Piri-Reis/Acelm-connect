<?php

namespace App\Http\Livewire\User;
use Livewire\Component;
use App\http\Livewire\AlertModels;
use Illuminate\Foundation\Auth\User;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UsersTable extends AlertModels
{
    use WithPagination;
    use LivewireAlert;
    public $user;
    protected $listeners = ['confirmed'];

    #[On('confirmed')]
    public function confirmed()
    {
        User::destroy($this->user);
        $this->dispatch('userDeleted','Utilisateur supprimé');
    }
    public function render()
    {
        return view('livewire.User.user-table', [
            'users' => User::paginate(10)
        ]);
    }

    public function delete($user)
    {
        $this->user = $user;
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

}


