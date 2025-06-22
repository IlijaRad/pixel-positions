@props(['tag', 'size' => 'base'])

@php
$classes = "bg-white/10 rounded-xl font-bold hover:bg-white/25 transition-colors";

if ($size === 'base') {
$classes .= " px-4 py-1 text-sm";
}

if ($size === 'small') {
$classes .= " px-2.5 py-1 text-xs";
}
@endphp
<a href="/tags/{{strtolower($tag->name)}}" class="{{ $classes }}">
    {{$tag->name}}
</a>