@auth
    <x-panel>
        <form class="space-x-4" action="/posts/{{$post->slug}}/comments" method="POST">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?id={{auth()->id()}}" alt="" width="40" height="40" class="rounded-xl">
                <h2 class="ml-3">Want to participate?</h2>
            </header>
            <div class="mt-6">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" cols="30" rows="5" placeholder="Quick, think of something you want to say" required></textarea>
                @error('body')
                    <span class="text-red-500 text-xs">{{$message}}</span>
                @enderror
            </div>
            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <x-submit-button>
                    Post
                </x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold text-blue-500">
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Login</a> to leave a comment
    </p>
@endauth
