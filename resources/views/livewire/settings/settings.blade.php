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
{{----------------------Dropdown rules liste----------------------}}
         <div @click.away="open = false" class="relative" x-data="{ open: false }">
             <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none">
                 <span>Voir tout les Roles</span>
                 <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
             </button>
             <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                 <div class="relative z-50 px-2 py-2 bg-white rounded-md shadow">
                     @foreach($allRules as $rule)
                         <div>{{ $rule->name }}</div>
                     @endforeach
                 </div>
             <livewire:permission-table hide-header hide-pagination />
             </div>
         </div>
{{----------------------End Dropdown rules list----------------------}}
     </div>
{{--------------------X End Rules settings X-----------------------}}

{{--------------------Permission settings-----------------------}}
    <div class="rounded bg-white mt-4 p-4 font-semibold text-gray-900 ">
        <span class="border-b border-blue-500">Paramétrages des permissions</span>
        <form wire:submit.prevent="createPermission" class="mt-4 flex flex-col">
            <label for="permissionName">Ajouter une permission </label>
            <input wire:model.debounce.500ms="newPermissionName" id="newPermissionName" type="text" class="form-input">
            @error('newPermissionName') <span class="error">{{ $message }}</span> @enderror
            <button type="submit" class="btn-save mt-4">Enregistrer</button>
        </form>
{{----------------------Dropdown permissions liste----------------------}}
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none">
                <span>Voir les toutes les permissions</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                <div class="px-2 py-2 bg-white rounded-md shadow">
                    @foreach($allPermissions as $permission)
                        <div>{{ $permission->name }}</div>
                    @endforeach
                </div>
            </div>
        </div>
{{----------------------End Dropdown permissions list----------------------}}
    </div>
{{--------------------X End Permission settings X-----------------------}}

</div>


