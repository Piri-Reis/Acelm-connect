<div>
@if($show)
        <div class="fixed inset-0 z-40 overflow-y-auto ">
            <form wire:submit.prevent="createUser" class="overflow-y-auto flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
               <div class="flex justify-end">
                    <i wire:click="show" class="fa-solid fa-xmark cursor-pointer"></i>
               </div>
                <div class="relative pt-4">
                    <label for="lastname" class="label-class">Nom</label>
                    <input wire:model.debounce.500ms="lastname"
                           type="text" id="lastname" name="lastname" placeholder="Nom" class="form-input">
                    @error('lastname') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="relative pt-4">
                    <label for="firstname" class="text-base leading-7 text-blueGray-500">Prénom</label>
                    <input wire:model.debounce.500ms="firstname"
                           type="text" id="firstname" name="firstname" placeholder="Prénom" class="form-input">
                    @error('firstname') <span class="error">{{ $message }}</span> @enderror

                </div>
                <div class="relative pt-4">
                    <label for="email" class="label-class">Email</label>
                    <input wire:model.debounce.500ms="email"
                           type="text" id="email" name="email" placeholder="email" class= "form-input">
                    @error('email') <span class="error">{{ $message }}</span> @enderror

                </div>
                <div class="relative pt-4">
                    <label for="role" class="label-class">Role</label>
                    <select wire:model.debounce.500ms="role"
                            type="text" id="role" name="role" class= "form-input">
                        <option value="">-- Choisir un role --</option>
                        <option value="super-admin">Super admin</option>
                        <option value="admin">Admin</option>
                        <option value="teacher">Enseignent</option>
                    </select>
                    @error('role') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="relative pt-4">
                    <label for="phone" class="label-class">Tél</label>
                    <input  wire:model.debounce.500ms="phone"
                            type="text" id="phone" name="phone" placeholder="" class="form-input">
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="relative pt-4">
                    <label for="password" class="label-class">Mot de passe</label>
                    <input wire:model.debounce.500ms="password"
                           type="password" id="password" name="password" placeholder="" class="form-input">
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="relative pt-4">
                    <label for="password_confirmation" class="label-class">Confirmez le mot de passe</label>
                    <input wire:model.debounce.500ms="password_confirmation"
                           type="password" id="password_confirmation" name="password_confirmation" placeholder="" class="form-input">
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex justify-center w-full pt-4 mb-4">
                    <button type="submit" class="btn-save"> Enregistrer </button>
                </div>
            </form>
        </div>
    @endif
</div>
