<x-layout>

    <div class="flex min-w-0 flex-1 flex-col overflow-hidden">
        <div class="sm:mx-auto sm:w-full sm:max-w-[480px]">
            <div class="bg-white px-5 py-5 shadow-lg sm:rounded-lg sm:px-12">
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register your account</h2>
                </div>
                <form class="space-y-6" action="{{ route('register') }}" method="post">
                    @csrf
                    <div>
                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                        <div class="mt-1">
                            <input id="username" name="username" type="text" autocomplete="username" value="{{ old('username')}}" placeholder="username"  class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 @error('username') ring-red-500 @enderror">
                            @error('username')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="text" autocomplete="email" value="{{ old('email')}}" placeholder="email"  class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 @error('email') ring-red-500 @enderror">
                            @error('email')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="password"  placeholder="password"  class=" p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 @error('password') ring-red-500 @enderror">
                            @error('password')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                        <div class="mt-1">
                            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="confirm password" autocomplete="current-password"  class=" p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6 @error('password') ring-red-500 @enderror" >
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
