@php
    $baseClasses = "py-3 px-6 text-xs font-medium uppercase shadow-md transition duration-150 ease-in-out focus:outline-none focus:shadow-lg";
    $colorClass = $outline ? "border-2 border-{$color}-500 bg-white text-{$color}-500 hover:bg-gray-100" : "bg-{$color}-500 text-{$color} hover:bg-{$color}-800";
    $roundedClass = $rounded ? 'rounded-full' : 'rounded';
@endphp

<button class="{{ $baseClasses }} {{ $colorClass }} {{ $roundedClass }}">
    {{ $label }}
</button>
