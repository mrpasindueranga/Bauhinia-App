@props(['active'])

@php
$classes = $active ?? false ? 'inline-flex items-center px-1 mt-2 py-2 rounded shadow pt-1 bg-green-400 text-sm font-medium leading-5 fill-current text-white focus:outline-none focus:bg-green-800 transition duration-150 ease-in-out' : 'inline-flex items-center px-1 mt-2 py-2 pt-1 border-transparent text-sm font-medium leading-5 text-white fill-current hover:text-gray-700 hover:border-gray-100 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';

$styles = $active ?? false ? 'background-color: #11af39;' : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} {{ $attributes->merge(['style' => $styles]) }}>
    <div class="flex" style="align-items:flex-end">
        {{ $slot }}
    </div>
</a>
