<div>
    <!-- component -->
    <section class="container px-4 mx-auto">
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 mt-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                    NOM
                                </th> <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                    PRENOM
                                </th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                    EMAIL
                                </th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                    ACTION
                                </th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                </th>
                            </tr>
                            </thead>
                            @foreach($users as $user)
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $user->lastname }}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $user->firstname }}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $user->email }}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap"><a href="{{ route('user.show', $user->id) }}">voir</a></td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap"><button class="btn danger" wire:click="delete({{ $user->id }})"><i class="fa-solid fa-trash"></i></button></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{ $users->links('vendor.livewire.tailwind') }}
    </section>
</div>
<!-- component -->
<!-- component -->
