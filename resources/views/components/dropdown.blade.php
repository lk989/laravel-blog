@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false" class="relative">

<!-- trigger -->
    <div @click="show = !show">
        {{$trigger}}
    </div>

<!-- dropdown links -->
    <div
        class="py-2 absolute bg-gray-100 w-full rounded-xl mt-2 z-50 overflow-auto max-h-52" style="display: none"
        x-show="show">
            {{$slot}}
    </div>
</div>
