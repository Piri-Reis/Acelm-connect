<div>
    <div class="flex justify-center">
        <button x-data="{}" wire:click="$dispatch('show')" class="btn info btn-l">
            <span class="text-white">
               <i class="fa-solid fa-plus"></i> Ajouter
            </span>
        </button>
            @livewire('User.user-form-modal')
    </div>
    @livewire('User.users-table')
</div>
