@props(['active' => false])

@php
    $classes = 'block text-left px-3 leading-6 text-pink-800 hover:bg-pink-800 hover:text-white focus:pink-800 focus:text-white';

    // if($active) $classes .= ' bg-pink-800 text-white ';

@endphp

<a {{$attributes(['class' => $classes])}}>
    {{$slot}}
</a>
