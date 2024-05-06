<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav class="flex justify-between p-5">

            <p>logo</p>

            <div class="flex justify-center gap-4">
                <a href="" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
                <a href="{{route('home')}}" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
                <a href="{{route('register')}}" class="text-sm font-semibold leading-6 text-gray-900">Register</a>
            </div>
            <div>
                <a href="" class="text-sm font-semibold leading-6 text-gray-900">Login</a>
            </div>
        </nav>
    </header>


    <main class="py-6 px-4">
        {{ $slot }}
    </main>
</body>
</html>
