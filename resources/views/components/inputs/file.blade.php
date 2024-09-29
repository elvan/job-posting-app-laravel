@props(['id', 'name', 'label' => null])

<div class="mb-4">
    @if ($label)
        <label class="block text-gray-700" for="{{ $id }}">{{ $label }}</label>
    @endif
    <input class="@error($name) border-red-500 @enderror w-full rounded border px-4 py-2 focus:outline-none"
        id="{{ $id }}" type="file" name="{{ $name }}" />
    @error($name)
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
