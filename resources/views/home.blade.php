<x-guest-layout>
    <div class="flex items-center justify-center bg-transparent">
        <div class="w-full max-w-md p-6 bg-transparent">
            <h1 class="text-3xl font-semibold text-center text-gray-800 dark:text-white mb-6">
                Student Management System
            </h1>

            @if (Route::has('login'))
            <div class="text-center">
                @auth
                <a href="{{ url('/dashboard') }}"
                   class="block w-full py-2 mb-3 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                   Go to Dashboard
                </a>
                @else
                <a href="{{ route('login') }}"
                   class="block w-full py-2 mb-3 text-white bg-gray-800 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                   Log in
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class=" rounded-lg block w-full py-2 text-black bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                   Register
                </a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
</x-guest-layout>