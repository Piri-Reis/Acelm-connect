<?php

namespace App\http\Livewire;

use App\Models\Permission;
use Livewire\Component;

class PermissionTable extends Component
{
    public $permissions;

    public function deletePermission($id){
        Permission::destroy($id);
        $this->dispatch('userDeleted','Permission supprimée');
    }

    public function render()
    {
        return view('livewire.settings.permission-table', [
            'apermissions' => Permission::all()
        ]);
    }
}
