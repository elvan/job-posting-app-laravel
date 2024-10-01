@props(['title' => 'Find Your Dream Job'])

<section class="hero relative flex h-80 items-center bg-cover bg-center bg-no-repeat">
    <div class="overlay"></div>
    <div class="container z-10 mx-auto text-center">
        <h2 class="mb-8 text-4xl font-bold text-white md:text-5xl">
            {{ $title }}
        </h2>

        <x-search />
    </div>
</section>
