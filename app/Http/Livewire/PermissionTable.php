<?php

namespace App\Http\Livewire;

use App\Models\Permission;
use App\Models\Users;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class PermissionTable extends Component
{
    public $model = Permission::class;

    public function columns()
    {
        return[
            Column::name('name')
                ->label('Nom')
                ->editable(),
        ];

    }
}
