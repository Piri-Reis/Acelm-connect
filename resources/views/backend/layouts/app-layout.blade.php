<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js"></script>

    <script src="https://kit.fontawesome.com/35da025e0b.js" crossorigin="anonymous"></script>

    <link  href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    @livewireStyles
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />

    <title>@yield('title')</title>
</head>
<body>
    <main>
        <!-- component -->
            <div class="md:flex  bg-gray-200 min-h-screen min-w-screen">
                <!-- sidebar  -->
                @auth
                    <div class="md:flex flex-col md:flex-row">
                        @include('backend.layouts.sidebar')
                    </div>
                @endauth
                <!-- content -->
                <div class="w-full flex flex-col">
                    @if(Auth()->user())
                        @livewire('Layout.header')
                    @endif
                    <div class="p-4">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>
    @livewireScripts
{{--    @component('livewire-notification::components.toast')@endcomponent--}}
</body>
</html>
