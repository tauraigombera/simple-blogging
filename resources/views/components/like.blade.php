@props(['post'])
<div class="flex justify-between">
    <div class="flex space-x-4">
        @auth()
        @if(!$post->likedBy(auth()->user()))
        <div>
            <form method="POST" action="/posts/{{ $post->id }}/likes">
                @csrf
                <button class="text-gray-400"> like </button>
            </form>
        </div>
        @else
        <div>
            <form method="POST" action="/posts/{{ $post->id }}/likes">
                @csrf
                @method('DELETE')
                <button class="text-gray-400"> unlike </button>
            </form>
        </div>
        @endif
        @endauth
        <span class="text-gray-400">{{ $post->likes->count() }} {{ Str::plural('like',
                $post->likes->count()) }} </span>
    </div>
    <div>
        <h1 class="text-gray-400 pb-6">{{$post->comments->count()}}
            {{ Str::plural('comment', $post->comments->count()) }}</h1>
    </div>
</div>
