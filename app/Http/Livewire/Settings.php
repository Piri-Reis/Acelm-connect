<?php

namespace App\Http\Livewire;

use App\Models\Permission;
use App\Models\Role;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Settings extends AlertModels
{
    public $newRuleName;
    public $newPermissionName;
    public $permissionName;


    protected $messages = [
        'newRuleName.required' => '* vous devez indiquer un nom de rôle',
        'newPermissionName.required' => '* vous devez indiquer un nom de permission'
    ];

    public function createRule(){
        $ruleDatas = $this->validate(['newRuleName' => 'required|min:2']);

        Role::create([
            'name' => $ruleDatas['newRuleName'],
            'guard_name' => 'web',
        ]);

        $this->alert(
            'success',
            'Enregistrement du rôle effectué'
        );
        $this->reset('newRuleName');
    }


    public function createPermission(): void
    {

        $permissionDatas = $this->validate(['newPermissionName' => 'required|min:2']);

        Permission::create([
            'name' => $permissionDatas['newPermissionName'],
            'guard_name' => 'web',
            'description' => 'null'
        ]);

        $this->allPermissions = Permission::all();

        $this->alert(
            'success',
            'Enregistrement de la permission effectué !'
        );

        $this->reset('newPermissionName');

    }

    public function render()
    {
        return view('livewire.settings.settings');
    }
}

