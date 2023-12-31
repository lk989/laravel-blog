@props(['heading'])

<section class="px-6 py-8 max-w-4xl mx-auto">
        <h1 class="text-lg font-bold mb-6 pb-2 border-b">
            {{$heading}}
        </h1>

        <div class="flex">

            <aside class="w-48">
                <h3 class="font-bold mb-4">Links</h3>
                <ul>
                    <li>
                        <a href="/admin/posts" class="{{request()->is('admin/posts')? 'text-pink-800' : 'text-white'}}">All Posts</a>
                    </li>
                    <li>
                        <a href="/admin/posts/create" class="{{request()->is('admin/posts/create')? 'text-pink-800' : 'text-white'}}">New Post</a>
                    </li>
                </ul>
            </aside>

            <main class="flex-1">
                <x-panel>
                    {{$slot}}
                </x-panel>
            </main>
        </div>
</section>
