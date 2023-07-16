@props(['value'])
<label {{ $attributes->merge(['class' => 'block text-sm font-medium leading-6 text-gray-900 dark:text-gray-50']) }}>
    {{ $value ?? $slot }}
</label>
