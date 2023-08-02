@props(['comment'])

<x-panel class="bg-gray-50">
    <article class="flex space-x-4">
        <div class="shrink-0">
            <img src="https://i.pravatar.cc/60?id={{$comment->id}}" alt="" width="60" height="60" class="rounded-xl min-w-64 min-h-64">
        </div>
        <div>
            <h3 class="font-bold text-md">{{$comment->author->name}}</h3>
            <p class="text-xs text-gray-400">Posted <time>{{$comment->created_at->diffForHumans()}}</time></p>
            <p class="text-s mt-4 text-justify">{{$comment->body}}</p>
        </div>
    </article>
</x-panel>
