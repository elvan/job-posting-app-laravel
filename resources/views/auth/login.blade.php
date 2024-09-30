<x-layout>
    <div class="mx-auto mt-12 w-full rounded-lg bg-white p-8 py-12 shadow-md md:max-w-xl">
        <h2 class="mb-4 text-center text-4xl font-bold">Login</h2>
        <form method="POST" action="{{ route('login.authenticate') }}">
            @csrf
            <x-inputs.text id="email" name="email" type="email" placeholder="Email address" />
            <x-inputs.text id="password" name="password" type="password" placeholder="Password" />

            <button class="w-full rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600 focus:outline-none"
                type="submit">
                Login
            </button>

            <p class="mt-4 text-gray-500">
                Don't have an account?
                <a class="text-blue-900" href="{{ route('register') }}">Register</a>
            </p>
        </form>
    </div>
</x-layout>
