@props(['comment'])
<div>
    <div class="flex items-center space-x-3 pb-3">
        <img src="/images/user.png" class="w-10 h-10 rounded-full object-cover"
             alt="avatar" />
        <div class="space-y-1">
            <div>
                <h3 class="font-medium text-lightGray">
                   {{$comment->author->name}}
                </h3>
            </div>
            <div class="flex space-x-3">
                <time class="text-sm text-lightGray">{{$comment->created_at->format('F j, Y, g:i a')}}</time>
            </div>
        </div>
    </div>
    <p class="text-lightGray text-sm">
        {{ $comment->body }}
    </p>
</div>

<!--Horizontal rule-->
<div class="py-6">
    <div class="flex-grow border-t border-veryLightGray"></div>
</div>
<!--End horizontal rule-->

