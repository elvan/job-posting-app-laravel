@props([
    'heading' => ' Unlock Your Career Potential',
    'subheading' => 'Discover the perfect job opportunity for you.',
])

<section class="bg-blue-900 py-6 text-center text-white">
    <div class="container mx-auto">
        <h2 class="text-3xl font-semibold">
            {{ $heading }}
        </h2>
        <p class="mt-2 text-lg">
            {{ $subheading }}
        </p>
    </div>
</section>
