<div>
    <div class="flex justify-center">
        <button x-data="{}" x-on:click="window.livewire.emitTo ('user-form-modal', 'show')" class="btn">
            <span class="text-white">
               <i class="fa-solid fa-plus"></i> Ajouter
            </span>
        </button>
        @livewire('user-form-modal')
    </div>
    @livewire('users-table')
</div>
