<x-layout>
    <!--navbar-->
    <section class="sticky top-0">
        <x-navbar />
    </section>

    @guest
    <!--Hero Section-->
    <section id="hero">
        <x-hero :posts="$posts" />
    </section>

    <!-- trending-posts section -->
    <section class="mt-6" id="trending-posts">
        <x-trending-posts :posts="$posts" :trendingPosts="$trendingPosts"/>
    </section>

    <!--Horizontal rule-->
    <div class="py-8">
        <div class="flex-grow border-t border-veryLightGray"></div>
    </div>
    <!--End horizontal rule-->
    @endguest

    @auth
    <!--Horizontal rule-->
    <div class="py-8">
        <div></div>
    </div>
    <!--End horizontal rule-->
    @endauth

    <!-- all posts section -->
    <section id="posts">
        <div class="container mx-auto min-h-screen flex flex-col-reverse px-6 mb-16 lg:space-x-6 lg:flex-row">
            <!--Left items-->
            <section class="lg:w-2/3">
                <div class="flex flex-col space-y-12">
                    @if($posts->count())
                        @foreach($posts as $post)
                            <div class="flex items-center justify-between space-x-12">
                                <div class="space-y-3">
                                    <div>
                                        <a href="/?author={{ $post->author->username }}">
                                        <div class="flex items-center space-x-3 mb-3">
                                            <img src="http://i.pravatar.cc/60?u={{ $post->author->username }}"
                                                 class="w-10 h-10 rounded-full object-cover"
                                                 alt="avatar"/>
                                            <div>
                                                <h5 class="text-base font-medium text-lightGray
                                                max-w-md text-center md:text-left">
                                                    {{$post->author->name}}
                                                </h5>
                                            </div>
                                        </div>
                                        </a>

                                        <h3 class="text-base font-semibold text-lightGray
                                        max-w-md md:text-left">
                                            <a href="/posts/{{ $post->slug }}">
                                                {{$post->title}}
                                            </a>
                                        </h3>

                                        <p class="hidden text-base text-lightGray md:flex
                                        max-w-md text-center md:text-left">
                                            <a href="/posts/{{ $post->slug }}">
                                                {{ $post->excerpt }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="flex space-x-3">
                                        <time class="text-sm text-lightGray">{{$post->created_at->format('F j')}} . 16 min read</time>

                                        <a href="/?category={{ $post->category->slug }}"
                                           class="hidden px-1 text-lightGray bg-middleLightGray rounded hover:bg-veryLightGray md:flex">
                                            {{$post->category->name}}
                                        </a>

                                    </div>
                                </div>
                                <div>
                                    <!-- <a href="/posts/{{ $post->slug }}">
                                        <img src="{{ asset('storage/' . $post->thumbnail ) }}" class="rounded-lg h-24 w-24 md:h-32 md:w-48 object-cover"
                                             alt="post-image">
                                    </a> -->
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p> </p>
                    @endif
                </div>
            </section>
            <!--End left items-->

            <!--Horizontal rule-->
            <div class="py-8 hidden lg:flex">
                <div class="flex-grow border-t border-veryLightGray"></div>
            </div>
            <!--End horizontal rule-->

            <!--Post categories-->
            <aside class="lg:w-1/3">
                <div class="hidden lg:flex lg:top-40">
                    <div>
                        <h1 class="font-medium">DISCOVER MORE OF YOUR INTEREST </h1>

                        <div class="flex-wrap space-y-3">
                            @foreach($categories as $category)
                                <button class=" px-2 py-1 space-x-2 text-sm text-gray-600
                                border rounded-lg  dark:border-gray-200">
                                    <a href="/?category={{ $category->slug }}">{{$category->name}}</a>
                                </button>
                            @endforeach
                        </div>
                        <!--End post categories-->

                        <!--Horizontal rule-->
                        <div class="py-6 hidden lg:flex">
                            <div class="flex-grow border-t border-veryLightGray"></div>
                        </div>
                        <!--End horizontal rule-->

                        <div>
                            <a href="#" class=" px-2 py-1 space-x-2 text-sm text-gray-600
                        dark:border-gray-200">About</a>

                            <a href="#" class="  px-2 py-1 space-x-2 text-sm text-gray-600
                        dark:border-gray-200">Help</a>

                            <a href="#" class="px-2 py-1 space-x-2 text-sm text-gray-600
                              dark:border-gray-200">Terms</a>

                            <a href="#" class=" px-2 py-1 space-x-2 text-sm text-gray-600
                          dark:border-gray-200">Privacy</a>
                        </div>
                    </div>
                </div>

            </aside>
            <!-- End all posts section -->
        </div>
        <!--End flex Container-->
    </section>
    <!-- End all posts section -->
    <x-footer/>
</x-layout>

