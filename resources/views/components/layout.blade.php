<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}}</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100">
    <header>
        <nav class="flex justify-between p-5 shadow bg-slate-50">
            <img class="inline-flex h-24 w-24 sm:h-11 sm:w-11 items-center justify-center rounded-full bg-gray-500 ring-4 ring-white" src="images/glamore_icon.jpg" alt="company">
            <div class="flex justify-center gap-4">
                <a href="#" class="text-sm font-semibold leading-9 text-gray-900">Product</a>
                <a href="{{route('renter.index')}}" class="text-sm font-semibold leading-9 text-gray-900">Home</a>

            </div>

            @auth
            <div class="relative inline-block text-left"
            x-data="{ open: false }">
                <div>
                    <button @click="open = !open" type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="false" aria-haspopup="true">
                    {{ auth()->user()->username}}
                    <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                    </button>
                </div>
                <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                x-show="open" @click.outside="open = false">
                    <div class="py-1" role="none">
                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                    <a href="{{route('dashboard')}}" class="text-gray-700 block px-4 py-2 text-sm hover:bg-zinc-100 " role="menuitem" tabindex="-1" id="menu-item-0">Dashboard</a>
                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-zinc-100 " role="menuitem" tabindex="-1" id="menu-item-1">Account Settings</a>
                    <form method="POST" action="{{route('logout')}}" role="none">
                        @csrf
                        <button type="submit" class="text-gray-700 block w-full px-4 hover:bg-zinc-100  py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                    </form>
                    </div>
                </div>
            </div>
            @endauth

            @guest
            <div class="flex justify-center gap-4">
                <a href="{{route('register')}}" class="text-sm font-semibold leading-9 text-gray-900">Register</a>
                <a href="{{route('login')}}" class="text-sm font-semibold leading-9 text-gray-900">Login</a>
            </div>
            @endguest
        </nav>
    </header>

    <main class="py-6 px-4">
        {{ $slot }}
    </main>




    <script>


    </script>
</body>
</html>
