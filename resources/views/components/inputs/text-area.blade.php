@props(['id', 'name', 'label' => null, 'value' => '', 'placeholder' => '', 'rows' => '7', 'cols' => '30'])

<div class="mb-4">
    @if ($label)
        <label class="block text-gray-700" for="{{ $id }}">{{ $label }}</label>
    @endif
    <textarea class="@error($name) border-red-500 @enderror w-full rounded border px-4 py-2 focus:outline-none"
        id="{{ $id }}" cols="{{ $cols }}" rows="{{ $rows }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}">{{ old($name, $value) }}</textarea>
    @error($name)
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
