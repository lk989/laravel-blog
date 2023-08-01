@props(['comment'])

<article class="flex space-x-4 bg-gray-100 border border-gray-200 rounded-xl p-4">
    <div class="shrink-0">
        <img src="https://i.pravatar.cc/60?id={{$comment->id}}" alt="" width="60" height="60" class="rounded-xl">
    </div>
    <div>
        <h3 class="font-bold text-md">{{$comment->author->name}}</h3>
        <p class="text-xs text-gray-400">Posted <time>{{$comment->created_at}}</time></p>
        <p class="text-s mt-4 text-justify">{{$comment->body}}</p>
    </div>
</article>
