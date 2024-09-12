@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-[#186f65] focus:ring-[#186f65] rounded-md shadow-sm']) !!}>
