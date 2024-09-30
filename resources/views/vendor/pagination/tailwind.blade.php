@if ($paginator->hasPages())
    <nav class="flex justify-center" role="navigation">
        {{-- Prev link --}}
        @if ($paginator->onFirstPage())
            <span class="rounded-l-lg bg-gray-300 px-4 py-2 text-gray-500">Previous</span>
        @else
            <a class="rounded-l-lg bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
                href="{{ $paginator->previousPageUrl() }}">
                Previous
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="bg-gray-300 px-4 py-2 text-gray-500">{{ $element }}</span>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="bg-blue-500 px-4 py-2 text-white">{{ $page }}</span>
                    @else
                        <a class="bg-gray-200 px-4 py-2 text-gray-700 hover:bg-blue-600 hover:text-white"
                            href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next link --}}
        @if ($paginator->hasMorePages())
            <a class="rounded-r-lg bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
                href="{{ $paginator->nextPageUrl() }}">
                Next
            </a>
        @else
            <span class="rounded-r-lg bg-gray-300 px-4 py-2 text-gray-500">Next</span>
        @endif
    </nav>
@else
@endif
