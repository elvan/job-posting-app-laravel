@props([
    'heading' => 'Looking to hire?',
    'subheading' => 'Post your job listing now and find the perfect
candidate.',
])

<section class="container mx-auto my-6">
    <div class="flex flex-col items-center justify-between gap-4 rounded bg-blue-800 p-4 text-white md:flex-row">
        <div>
            <h2 class="text-xl font-semibold">{{ $heading }}</h2>
            <p class="mt-2 text-lg text-gray-200">
                {{ $subheading }}
            </p>
        </div>
        <x-button-link url="/jobs/create" icon="edit">Create Job</x-button-link>
    </div>
</section>
