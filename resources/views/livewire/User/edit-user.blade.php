<div>
    <div class="text-gray-700">
        <form wire:submit="updateUser">
            <div class="bg-white p-3 shadow-sm rounded-sm">
                <div class="flex justify-between gap-3">
                    <span class="w-1/2">
                      <label for="firstname" class="block text-xs font-semibold text-gray-600 uppercase">Prénom</label>
                      <input type="text"  wire:model="newLastname" name="newLastname" class="form-input" value="{{$lastname}}">
                      @error('newLastname') <span class="error">{{ $message }}</span> @enderror
                    </span>
                    <span class="w-1/2">
                        <label for="lastname" class="block text-xs font-semibold text-gray-600 uppercase">Nom</label>
                        <input type="text" wire:model="newFirstname" name="newFirstname" class="form-input">
                        @error('newFirstname') <span class="error">{{ $message }}</span> @enderror
                    </span>
                </div>
                <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                <input type="text" wire:model="newEmail" name="newEmail" class="form-input">
                @error('newEmail') <span class="error">{{ $message }}</span> @enderror
                <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Téléphone</label>
                <div class="flex-col">
                    <input type="text"  wire:model="newPhone" name="newPhone" class="form-input">
                    @error('newPhone') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Rôle</div>
                <div class="flex-col">
                    <div class="form-input">{{$user->getRoleNames()->first()}}</div>
                </div>
                <select class="select" wire:model="role">
                    <option value="{{$user->getRoleNames()->first()}}">--- Choisir un rôle ---</option>
                    @foreach($allRules as $rule)
                        <option value="{{$rule->name}}">{{$rule->name}}</option>
                    @endforeach
                </select>
                @error('role') <span class="error">{{ $message }}</span> @enderror
                <button class="btn info btn-l mt-4" type="submit"> Enregistrer </button>

            </div>
        </form>
        @if($user->id == Auth::user()->id)
        <div class="bg-white mt-4 p-3 shadow-sm rounded-sm">
            <form wire:submit="updatePassword">
                <span class="font-semibold text-red-500">Changer mon mot de passe</span>
                <div class="relative pt-4">
                    <label for="lastname" class="label-class">Nouveau mot de passe</label>
                    <input wire:model="password"
                           type="text" id="password" name="password" class="form-input">
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                </div>

                    <div class="pt-4">
                        <label for="password_confirmation" class="label-class">Confirmez le nouveau mot de passe</label>
                        <input wire:model.debounce.500ms="password_confirmation" type="password" id="password_confirmation" name="password_confirmation" class="form-input">
                        @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
                    </div>
                <button class="btn info btn-l mt-4" type="submit"> Enregistrer </button>
            </form>
        </div>
        @endif
    </div>
</div>
