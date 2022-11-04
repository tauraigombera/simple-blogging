<x-layout>
    <section class="sticky top-0">
        <x-navbar/>
    </section>
    <!--Hero Section-->
    @guest
        <section id="hero">
            <div
                class="container mx-auto flex flex-col-reverse items-center px-6 mt-5 space-y-0 md:space-y-0 md:flex-row">
                <div class="flex flex-col space-y-12 md:w-1/2">
                    @if ($posts->count())
                        <h1 class="max-w-md text-4xl font-bold text-center text-darkBlue md:text-5xl md:text-left">
                            {{$posts[0]->title}}
                        </h1>
                        <p class="max-w-sm text-center text-darkBlue md:text-left">
                            {{$posts[0]->excerpt}}
                        </p>
                    @else
                        <p class="max-w-md text-4xl font-bold text-center text-darkBlue md:text-5xl md:text-left">
                            No posts yet. Please check back later.
                        </p>
                    @endif
                    <div class="flex justify-center md:justify-start">
                        <a href="/register"
                           class="p-3 px-6 pt-2 text-white bg-orange rounded baseline hover:bg-lightOrange">Start
                            reading</a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="images/hero.jpg" class="rounded-lg" alt="hero-image">
                </div>
            </div>
        </section>
        <!--End hero Section-->

        <!--Horizontal rule-->
        <div class="py-8">
            <div class="flex-grow border-t border-veryLightGray"></div>
        </div>
        <!--End horizontal rule-->

        <!-- trending-posts section -->
        <section id="trending-posts">
            <x-trending-posts/>
        </section>
        <!-- End trending-posts section -->

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
        <div class="container mx-auto flex flex-col-reverse px-6 mb-16 lg:space-x-6 lg:flex-row">
            <!--Left items-->
            <section class="lg:w-2/3">
                <div class="flex flex-col space-y-12">
                    @if($posts->count())
                        @foreach($posts as $post)
                            <div class="flex items-center justify-between space-x-12">
                                <div class="space-y-3">
                                    <div>
                                        <div class="flex items-center space-x-3 mb-3">
                                            <img src="http://i.pravatar.cc/60?u={{ $post->id }}"
                                                 class="w-10 h-10 rounded-full object-cover"
                                                 alt="avatar"/>
                                            <div>
                                                <h5 class="text-base font-medium text-lightGray">
                                                    <a href="authors/{{ $post->author->username }}">
                                                        {{$post->author->name}}
                                                    </a>
                                                </h5>
                                            </div>
                                        </div>

                                        <h3 class="text-base font-semibold text-lightGray">
                                            <a href="/posts/{{ $post->slug }}">
                                                {{$post->title}}
                                            </a>
                                        </h3>

                                        <p class="hidden text-base text-lightGray md:flex">
                                            {{ $post->excerpt }}
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
                                <img src="/images/post-image-2.jpg" class="rounded-lg h-32 w-48 object-cover "
                                     alt="hero-image">
                            </div>
                        @endforeach
                    @else
                        <p> </p>
                    @endif
                </div>
            </section>
            <!--End left items-->

            <!--Horizontal rule-->
            <div class="py-8">
                <div class="flex-grow border-t border-veryLightGray"></div>
            </div>
            <!--End horizontal rule-->

            <!--Post categories-->
            <aside class="lg:w-1/3">
                <div class="lg:sticky lg:top-40">
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

                    <div class="hidden lg:flex">
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
            </aside>
            <!-- End all posts section -->
        </div>
        <!--End flex Container-->
    </section>
    <!-- End all posts section -->
    <x-footer/>
</x-layout>

