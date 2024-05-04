<div>
    <div class="bg-white p-4 flex justify-between border-b-2 border-blue-600">
        <h1 class="md:text-2xl">@yield('title')</h1>
        <div class="flex flex-row space-x-1">
            <p>{{ Auth()->user()->firstname }} /</p>
            <a href="{{ route('logout') }}" class="">
                Déconnexion
            </a>
        </div>
    </div>
</div>
