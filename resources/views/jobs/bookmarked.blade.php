<x-layout>
    <h2 class="mb-4 border border-gray-300 p-3 text-center text-3xl font-bold">
        Bookmarked Jobs
    </h2>
    <div class="mb-3 grid grid-cols-1 gap-4 md:grid-cols-3">
        @forelse($bookmarks as $bookmark)
            <x-job-card :job="$bookmark" />
        @empty
            <p class="text-center text-gray-500">You have no bookmarked jobs</p>
        @endforelse
    </div>
</x-layout>
