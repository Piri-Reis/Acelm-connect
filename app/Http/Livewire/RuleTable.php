<?php

namespace App\http\Livewire;

use App\Models\Permission;
use App\Models\Role;
use Livewire\WithPagination;

class RuleTable extends AlertModels
{
    public $rules;
    public $allPermissions ;
    use WithPagination;

    public function deleteRule($id)
    {
        Role::destroy($id);
        $this->dispatch('userDeleted','Rôle supprimé');
    }

    public function render()
    {
        return view('livewire.settings.rule-table', [
            'roles' => Role::paginate(5),
            'permissions' => Permission::all(),
        ]);
    }
}
