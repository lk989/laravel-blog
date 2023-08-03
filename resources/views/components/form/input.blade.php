@props(['name'])

<x-form.field>
    <x-form.label name="{{$name}}"/>

    <input class="border border-gray-200 rounded p-2 w-full"
        name="{{$name}}"
        id="{{$name}}"
        {{-- required --}}
        {{$attributes(['value' => old($name), 'required' => true])}}
    >

    <x-form.error name="{{$name}}"/>
</x-form.field>
