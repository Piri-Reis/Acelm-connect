<?php

namespace App\Http\Livewire;

use Illuminate\Foundation\Auth\User;


use Livewire\Component;
use Livewire\WithPagination;


class UsersTable extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.user-table', [
            'users' => User::paginate(10)
        ]);
    }
}


