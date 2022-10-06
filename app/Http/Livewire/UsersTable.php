<?php

namespace App\Http\Livewire;

use App\Models\Users;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class UsersTable extends LivewireDatatable
{
    public $model = Users::class;

    public function columns()
    {
        return[
            NumberColumn::name('id')
                ->label('ID')
                ->linkTo('user', 2),

            Column::name('lastname')
                ->label('Nom')
                ->editable(),

            Column::name('firstname')
                ->label('Prénom')
                ->editable(),

            Column::name('email')
                ->label('Email')
                ->editable(),

            Column::name('phone')
                ->label('Télèphone')
                ->editable(),

            Column::callback(['id', 'lastname'], function ($id, $name) {
                return view('livewire.datatables.table-actions', ['id' => $id, 'lastname' => $name]);
            })->unsortable()

        ];


    }

}
