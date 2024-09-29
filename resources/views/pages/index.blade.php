<x-layout>
    <h2 class="mb-4 border border-gray-300 p-3 text-center text-3xl font-bold">Welcome To Workopia</h2>
    <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-3">
        @forelse($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p>No jobs available</p>
        @endforelse
    </div>
    <a class="block text-center text-xl" href="{{ route('jobs.index') }}">
        <i class="fa fa-arrow-alt-circle-right"></i> Show All Jobs
    </a>

    <x-bottom-banner />
</x-layout>
