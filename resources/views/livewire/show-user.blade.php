<div>
    <button x-data="{}" x-on:click="window.livewire.emitTo ('user-form-modal', 'show')" class="btn">
            <span class="text-white">
               <i class="fa-solid fa-plus"></i> Ajouter
            </span>
    </button>
    <form wire:submit.prevent="updateUser">
        <div class="relative pt-4">
            <label for="lastname" class="label-class">Nom</label>
            <input wire:model="lastname"
                   type="text" id="lastname" name="lastname" value="kdn" class="form-input">
            @error('lastname') <span class="error">{{ $message }}</span> @enderror
        </div>
        @livewire('user-form-modal')
        <button class="btn-save"> Enregistrer </button>
    </form>

</div>
