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
        'newPermissionName.required' => '* vous devez indiquer un nom de permission',
        'unique' => 'Le rôle existe déja !'
    ];

    public function createRule()
    {
        $ruleDatas = $this->validate(['newRuleName' => 'required|min:2|unique:App\Models\Role,name']);

        Role::create([
            'name' => $ruleDatas['newRuleName'],
            'guard_name' => 'web',
        ]);

        $this->alert(
            'success',
            'Enregistrement du rôle effectué'
        );
        return redirect()->route('settings.index');

        }


    public function createPermission()
    {

        $permissionDatas = $this->validate(['newPermissionName' => 'required|min:2|required|min:2|unique:App\Models\Permission,name']);

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

        return redirect()->route('settings.index');

    }

    public function render()
    {
        return view('livewire.settings.settings');
    }
}

