<div>
{{--------------------Rules settings-----------------------}}
     <div class="rounded bg-white p-4 font-semibold text-gray-900 ">
         <span class="border-b border-blue-500">Paramétrages des rôles</span>
         <form wire:submit.prevent="createRule" class="mt-4 flex flex-col">
             <label for="name">Ajouter un rôle</label>
             <input wire:model.debounce.500ms="newRuleName" id="newRuleName" type="text" class="form-input">
             @error('newRuleName') <span class="error">{{ $message }}</span> @enderror
             <button type="submit" class="btn-save mt-4">Enregistrer</button>
         </form>
{{-------------------- Rules table -----------------------}}
     @livewire('rule-table')
     </div>

{{--------------------Permission settings-----------------------}}
    <div class="rounded bg-white mt-4 p-4 font-semibold text-gray-900 ">
        <span class="border-b border-blue-500">Paramétrages des permissions</span>
        <form wire:submit.prevent="createPermission" class="mt-4 flex flex-col">
            <label for="permissionName">Ajouter une permission </label>
            <input wire:model.debounce.500ms="newPermissionName" id="newPermissionName" type="text" class="form-input">
            @error('newPermissionName') <span class="error">{{ $message }}</span> @enderror
            <button type="submit" class="btn-save mt-4">Enregistrer</button>
        </form>
{{---------------------- permissions table----------------------}}
        @livewire('permission-table')
    </div>
</div>


