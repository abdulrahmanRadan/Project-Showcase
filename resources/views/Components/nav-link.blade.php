@props(['active' =>false , 'class'=>''])
@php
$classes = $active ? 'text-white bg-gray-800' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
$classes .= ' ' . $class; // دمج الكلاسات
@endphp
<a {{ $attributes}} class="rounded-md px-3 py-2 text-sm font-medium {{$classes}}"
    aria-current="{{$active ? 'page':'false'}}">
    {{$slot}}
</a>