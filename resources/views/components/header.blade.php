<header class="bg-blue-900 p-4 text-white">
    <div class="container mx-auto flex items-center justify-between">
        <h1 class="text-3xl font-semibold">
            <a href="{{ url('/') }}">Workopia</a>
        </h1>
        <nav class="hidden items-center space-x-4 md:flex">
            <x-nav-link url="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link url="/jobs" :active="request()->is('jobs')">All Jobs</x-nav-link>
            <x-nav-link url="/jobs/saved" :active="request()->is('jobs/saved')">Saved Jobs</x-nav-link>
            <x-nav-link url="/login" :active="request()->is('login')">Login</x-nav-link>
            <x-nav-link url="/register" :active="request()->is('register')">Register</x-nav-link>
            <x-nav-link url="/dashboard" :active="request()->is('dashboard')" icon="gauge">Dashboard</x-nav-link>
            <a class="rounded bg-yellow-500 px-4 py-2 text-black transition duration-300 hover:bg-yellow-600 hover:shadow-md"
                href="{{ url('/jobs/create') }}">
                <i class="fa fa-edit"></i> Create Job
            </a>
        </nav>
        <button class="flex items-center text-white md:hidden" id="hamburger">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav class="mt-5 hidden space-y-2 bg-blue-900 pb-4 text-white md:hidden" id="mobile-menu">
        <a class="block px-4 py-2 hover:bg-blue-700" href="{{ url('/jobs') }}">All Jobs</a>
        <a class="block px-4 py-2 hover:bg-blue-700" href="{{ url('/jobs/saved') }}">Saved Jobs</a>
        <a class="block px-4 py-2 hover:bg-blue-700" href="{{ url('/login') }}">Login</a>
        <a class="block px-4 py-2 hover:bg-blue-700" href="{{ url('/register') }}">Register</a>
        <a class="block py-2 text-white hover:underline" href="{{ url('/dashboard') }}">
            <i class="fa fa-gauge mr-1"></i> Dashboard
        </a>
        <a class="block bg-yellow-500 px-4 py-2 text-black hover:bg-yellow-600" href="{{ url('/jobs/create') }}">
            <i class="fa fa-edit"></i> Create Job
        </a>
    </nav>
</header>
