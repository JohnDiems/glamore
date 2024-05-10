<x-layout>

    @auth
        <h1>logged in</h1>
    @endauth

    @guest
        <h1>home</h1>
    @endguest

</x-layout>
