<div>
    <div class="flex justify-center">
        <form wire:submit.prevent="createUser" class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
            <div class="relative pt-4">
                <label for="lastname" class="text-base leading-7 text-blueGray-500">Nom</label>
                <input wire:model.debounce.500ms="lastname" type="text" id="lastname" name="lastname" placeholder="Nom" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            </div>
            <div class="relative pt-4">
                <label for="firstname" class="text-base leading-7 text-blueGray-500">Prénom</label>
                <input wire:model.debounce.500ms="firstname" type="text" id="firstname" name="firstname" placeholder="Prénom" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            </div>
            <div class="relative pt-4">
                <label for="email" class="text-base leading-7 text-blueGray-500">Email</label>
                <input wire:model.debounce.500ms="email" type="text" id="email" name="email" placeholder="email" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            </div>
            <div class="relative pt-4">
                <label for="phone" class="text-base leading-7 text-blueGray-500">Tél</label>
                <input  wire:model.debounce.500ms="phone" type="text" id="phone" name="phone" placeholder="" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            </div>
            <div class="relative pt-4">
                <label for="password" class="text-base leading-7 text-blueGray-500">Mot de passe</label>
                <input wire:model.debounce.500ms="password" type="password" id="password" name="password" placeholder="" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            </div>
            <div class="relative pt-4">
                <label for="conf_password" class="text-base leading-7 text-blueGray-500">Confirmez le mot de passe</label>
                <input type="password" id="conf_password" name="" placeholder="" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-gray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            </div>
            <div class="flex items-center w-full pt-4 mb-4">
                <button type="submit" class="w-full py-3 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Enregistrer </button>
            </div>
        </form>
    </div>
</div>
