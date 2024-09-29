@props(['type', 'message', 'timeout' => '5000'])

@if (session()->has($type))
    <div class="{{ $type == 'success' ? 'bg-green-500' : 'bg-red-500' }} mb-4 rounded p-4 text-sm text-white"
        x-data="{ show: true }" x-init="setTimeout(() => show = false, {{ $timeout }})" x-show="show">
        {{ $message }}
    </div>
@endif
