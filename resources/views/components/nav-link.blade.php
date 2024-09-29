@props(['url' => '/', 'active' => false, 'icon' => null, 'mobile' => false])

@if ($mobile)
    <a class="{{ $active ? 'text-yellow-500' : '' }} block px-4 py-2 hover:bg-blue-700" href="{{ $url }}">
        @if ($icon)
            <i class="fa fa-{{ $icon }}" mr-1"></i>
        @endif
        {{ $slot }}
    </a>
@else
    <a class="{{ $active ? 'text-yellow-500' : '' }} py-2 text-white hover:underline" href="{{ $url }}">
        @if ($icon)
            <i class="fa fa-{{ $icon }}" mr-1"></i>
        @endif
        {{ $slot }}
    </a>
@endif
