<div>
    <div class="bg-white p-3 shadow-sm rounded-sm">
        <div class="flex justify-between gap-3">
            <div class="w-1/2">
              <div class="block text-xs font-semibold text-gray-600 uppercase">Prénom</div>
                <div class="form-input">{{$user->firstname}}</div>
            </div>
            <div class="w-1/2">
                <div for="lastname" class="block text-xs font-semibold text-gray-600 uppercase">Nom</div>
                <div class="form-input">{{$user->lastname}}</div>
            </div>
        </div>
        <div class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail</div>
        <div class="form-input">{{$user->email}}</div>
        <div class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Téléphone</div>
        <div class="flex-col">
            <div class="form-input">{{$user->phone}}</div>
        </div>
        <div class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Rôle</div>
        <div class="flex-col">
            <div class="form-input">{{$user->getRoleNames()->first()}}</div>
        </div>
        <div class="flex-col mt-4">
            <a class="btn warning btn-l cursor-pointer" href="{{ route('user.edit', $user->id) }}">Modifier</a>
        </div>
    </div>
</div>
