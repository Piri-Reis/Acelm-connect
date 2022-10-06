<div>
    <!-- component -->
    <div class="h-screen bg-gradient-to-br from-blue-600 to-indigo-600 flex justify-center items-center w-full">
        <form wire:submit.prevent="login">
            <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
                <div class="space-y-4">
                    <h1 class="text-center text-2xl font-semibold text-gray-600">Connexion</h1>
                    <div>
                        <label for="email" class="label-class">Email</label>
                        <input wire:model.debounce.500ms="email"
                              type="text" name="email" id="email" class="form-input" />
                        @error('email') <span class="error">{{ $message }}</span> @enderror

                    </div>
                    <div>
                        <label for="password" class="label-class">Mot de Passe</label>
                        <input wire:model.debounce.500ms="password"
                               type="password" name="password" id="password" class="form-input" />
                        @error('password') <span class="error">{{ $message }}</span> @enderror

                    </div>
                </div>
                <button type="submit"
                    class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide">Connecter</button>
            </div>
        </form>
    </div>
</div>
