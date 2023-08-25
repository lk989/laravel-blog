@if (session()->has('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="bg-pink-800 bottom-3 fixed px-4 py-2 right-3 rounded-xl text-white">
        {{ session()->get('success') }}
    </div>
@endif
