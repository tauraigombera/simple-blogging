<x-layout>
    <x-navbar/>
    <!-- single blog post section -->
    <section id="post">
        <!--Flex Container-->
        <div class="container mx-auto flex flex-col mb-16 space-x-6 lg:flex-row">
            <!--Left items-->
            <section class="lg:w-2/3">
                <div class="px-6 mt-12 text-gray-700 text-lg">
                    <div class="flex items-center space-x-6 pb-6">
                        <img src="http://i.pravatar.cc/60?u={{ $post->author->username }}" class="w-16 h-16 rounded-full object-cover" alt=""/>
                        <div class="space-y-1">
                            <div>
                                <h5 class="font-medium text-lightGray">
                                    <a href="/?author={{ $post->author->username }}"> {{ $post->author->name }}</a>
                                </h5>
                            </div>
                            <div class="flex space-x-3">
                                <h5 class="text-lightGray">{{ $post->created_at->diffForHumans() }} . 16 min read</h5>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-4xl font-semibold text-lightGray leading-tight mb-6">
                        {{ $post->title }}
                    </h2>
                    <div class="text-center mb-6">
                        <img src="{{ asset('../storage/' . $post->thumbnail ) }}" class="w-full object-cover lg:rounded pb-3"
                             style="height: 20em;" alt="post-image" />
                        <p a class="text-sm text-lightGray">
                            Photo by <a
                                href="https://unsplash.com/@michaelfousert?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Michael
                                Fousert</a> on <a
                                href="https://unsplash.com/s/photos/electric-car?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                        </p>
                    </div>

                    <p class="pb-6">
                        {!! $post->body !!}
                    </p>

                    <!--comments-->
                    <section class="pt-6 px-6">
                        <h1 class="text-lightGray font-medium pb-6">COMMENTS({{$post->comments->count()}})</h1>
                            @auth
                            <div class="flex mx-auto items-center justify-center shadow-lg mx-8 mb-4 max-w-lg">
                                <form method="POST" action="/posts/{{ $post->slug }}/comments"
                                      class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                                    @csrf
                                    <div class="flex flex-wrap -mx-3 mb-6 p-3">
                                        <div class="px-4 pt-3 pb-2 flex items-center space-x-3 pb-3">
                                            <img src="http://i.pravatar.cc/60?u={{ auth()->user()->username }}" class="w-10 h-10 rounded-full object-cover"
                                                 alt="avatar"/>
                                            <div>
                                                <h5 class="font-medium text-lightGray">
                                                    <a href="/?author={{ $post->author->username }}"> {{ auth()->user()->name }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="w-full md:w-full px-3 mb-2 mt-2">
                                            <textarea name="body"
                                                      class="rounded border border-gray-200 leading-normal resize-none w-full h-20 py-2 px-3
                                                      text-lightGray text-sm placeholder-gray-500 focus:outline-none focus:bg-white"
                                                      placeholder='Type Your Comment' required></textarea>
                                            @error('body')
                                            <span class="text-xs text-red-500">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="w-full md:w-full flex items-start md:w-full px-3">
                                            <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                                                <p class="text-xs md:text-sm pt-px"></p>
                                            </div>
                                            <div class="-mr-1">
                                                <button type='submit'
                                                        class="bg-orange text-white font-medium py-1 px-4 border rounded-lg tracking-wide mr-1 hover:bg-lightOrange">
                                                    Post
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @else
                                <a href="/register" type='submit'
                                   class="bg-orange text-white font-medium py-1 px-4 border rounded-lg tracking-wide mr-1 hover:bg-lightOrange">
                                    Write your comment
                                </a>
                            @endauth

                        <div class="pt-6">
                            @foreach($post->comments as $comment)
                                <x-post-comment :comment="$comment"/>
                            @endforeach
                        </div>
                    </section>
                    <!--end of comments-->
                </div>
            </section>
            <!--End left items-->

            <!--More articles-->
            <aside class="lg:w-1/3">
                <div class=" hidden lg:flex lg:sticky lg:top-36 mt-12">
                    <div class="space-y-6">
                        <div class="hidden lg:flex">
                            <div>
                                <div class="flex items-center space-x-3 pb-3">
                                    <img src="http://i.pravatar.cc/60?u={{ $post->author->username }}" class="w-16 h-16 rounded-full object-cover"
                                         alt="avatar"/>
                                    <div class="space-y-1">
                                        <div>
                                            <h5 class="font-medium text-lightGray">
                                                <a href="/?author={{ $post->author->username }}"> {{ $post->author->name }}</a>
                                            </h5>
                                        </div>
                                        <div class="flex space-x-3">
                                            <a href="#" class="text-lightGray">1.6K Followers</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-lightGray text-sm">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit.
                                    Iste recusandae numquam itaque animi harum. Ex molestiae nostrum cum consectetur
                                    aperiam?</p>
                            </div>
                        </div>

                        <section class="px-6 space-y-6">
                            <h1 class="font-medium text-lightGray">MORE FROM SIMPLE BLOG</h1>
                                @foreach($posts as $post)
                                <div class="flex items-center justify-between space-x-12">
                                    <div>
                                        <a href="/?author={{ $post->author->username }}">
                                            <div class="flex items-center space-x-3">
                                                <img src="http://i.pravatar.cc/60?u={{ $post->id }}" class="w-10 h-10 rounded-full object-cover"
                                                     alt="avatar"/>
                                                <div>
                                                     {{ $post->author->name }}
                                                </div>
                                            </div>
                                        </a>
                                        <h3 class="font-medium text-lightGray">
                                            <a href="/posts/{{ $post->slug }}">
                                                {{$post->title}}
                                            </a>
                                        </h3>
                                    </div>
                                    <img src="{{ asset('../storage/' . $post->thumbnail ) }}" class="w-16 h-16 rounded object-cover" alt=""/>
                                </div>
                                @endforeach
                        </section>
                    </div>
                </div>
            </aside>
        </div>
        <!--End flex Container-->
    </section>
    <!-- End single posts section -->
</x-layout>
