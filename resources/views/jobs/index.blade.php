<x-layout>
    <div class="mb-4 flex h-24 items-center justify-center rounded bg-blue-900 px-4">
        <x-search />
    </div>

    {{-- Back button --}}
    @if (request()->has('keywords') || request()->has('location'))
        <a class="mb-4 inline-block rounded bg-gray-700 px-4 py-2 text-white hover:bg-gray-600"
            href="{{ route('jobs.index') }}">
            <i class="fa fa-arrow-left mr-1"></i> Back
        </a>
    @endif

    <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-3">
        @forelse($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p>No jobs available</p>
        @endforelse
    </div>

    {{-- Pagination Links --}}
    {{ $jobs->links() }}
</x-layout>
