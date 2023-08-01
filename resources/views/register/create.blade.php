<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 border border-gray-200 bg-gray-100 rounded-xl p-8">
            <h1 class="text-xl font-bold text-center">Register!</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                            for="name">
                                Name
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Name"
                            required
                            value="{{old('name')}}">
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="username">
                        Username
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="text"
                           id="username"
                           name="username"
                           placeholder="Username"
                           required
                           value="{{old('username')}}">
                    @error('username')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="email">
                        Username
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="email"
                           id="email"
                           name="email"
                           placeholder="Email Address"
                           required
                           value="{{old('email')}}">

                    @error('email')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="password">
                        Password
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="password"
                           id="password"
                           name="password"
                           placeholder="********"
                           required>
                    @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>

                {{-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{ $error}}</li>
                        @endforeach
                    </ul>
                @endif --}}
            </form>
        </main>
    </section>
</x-layout>
