@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'shadow-sm focus:ring-gray-600 focus:border-gray-600 mt-1 block w-full sm:text-sm border border-gray-300']) !!}>
