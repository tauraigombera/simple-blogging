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
            <div class="container mx-auto items-center px-6 space-y-6 md:space-y-6">
                <div class="container mx-auto flex space-x-3 font-medium">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17 4C16.7348 4 16.4804 3.89464 16.2929 3.70711C16.1054 3.51957 16 3.26522 16 3C16 2.73478 16.1054 2.48043 16.2929 2.29289C16.4804 2.10536 16.7348 2 17 2H21C21.2652 2 21.5196 2.10536 21.7071 2.29289C21.8946 2.48043 22 2.73478 22 3V7C22 7.26522 21.8946 7.51957 21.7071 7.70711C21.5196 7.89464 21.2652 8 21 8C20.7348 8 20.4804 7.89464 20.2929 7.70711C20.1054 7.51957 20 7.26522 20 7V5.414L14.207 11.207C14.0195 11.3945 13.7652 11.4998 13.5 11.4998C13.2348 11.4998 12.9805 11.3945 12.793 11.207L10 8.414L4.707 13.707C4.5184 13.8892 4.2658 13.99 4.0036 13.9877C3.7414 13.9854 3.49059 13.8802 3.30518 13.6948C3.11977 13.5094 3.0146 13.2586 3.01233 12.9964C3.01005 12.7342 3.11084 12.4816 3.293 12.293L9.293 6.293C9.48053 6.10553 9.73484 6.00021 10 6.00021C10.2652 6.00021 10.5195 6.10553 10.707 6.293L13.5 9.086L18.586 4H17ZM5 18V21C5 21.2652 4.89464 21.5196 4.70711 21.7071C4.51957 21.8946 4.26522 22 4 22C3.73478 22 3.48043 21.8946 3.29289 21.7071C3.10536 21.5196 3 21.2652 3 21V18C3 17.7348 3.10536 17.4804 3.29289 17.2929C3.48043 17.1054 3.73478 17 4 17C4.26522 17 4.51957 17.1054 4.70711 17.2929C4.89464 17.4804 5 17.7348 5 18ZM10 14C10 13.7348 9.89464 13.4804 9.70711 13.2929C9.51957 13.1054 9.26522 13 9 13C8.73478 13 8.48043 13.1054 8.29289 13.2929C8.10536 13.4804 8 13.7348 8 14V21C8 21.2652 8.10536 21.5196 8.29289 21.7071C8.48043 21.8946 8.73478 22 9 22C9.26522 22 9.51957 21.8946 9.70711 21.7071C9.89464 21.5196 10 21.2652 10 21V14ZM14 15C14.2652 15 14.5196 15.1054 14.7071 15.2929C14.8946 15.4804 15 15.7348 15 16V21C15 21.2652 14.8946 21.5196 14.7071 21.7071C14.5196 21.8946 14.2652 22 14 22C13.7348 22 13.4804 21.8946 13.2929 21.7071C13.1054 21.5196 13 21.2652 13 21V16C13 15.7348 13.1054 15.4804 13.2929 15.2929C13.4804 15.1054 13.7348 15 14 15ZM20 11C20 10.7348 19.8946 10.4804 19.7071 10.2929C19.5196 10.1054 19.2652 10 19 10C18.7348 10 18.4804 10.1054 18.2929 10.2929C18.1054 10.4804 18 10.7348 18 11V21C18 21.2652 18.1054 21.5196 18.2929 21.7071C18.4804 21.8946 18.7348 22 19 22C19.2652 22 19.5196 21.8946 19.7071 21.7071C19.8946 21.5196 20 21.2652 20 21V11Z"
                            fill="#FF4820"/>
                    </svg>
                    <h1 class="">TRENDING</h1>
                </div>
                <div class="space-y-6">
                    <div class="flex flex-col items-center space-y-6 justify-between md:flex-row">
                        <div class="flex space-x-6">
                            <h1 class="font-bold text-5xl text-gray-200">01</h1>
                            <div>
                                <div class="mb-2">
                                    <div class="flex items-center space-x-3">
                                        <img src="/images/avatar-3.jpg" class="w-10 h-10 rounded-full object-cover"
                                             alt="avatar"/>
                                        <div>
                                            <h5 class="text-base font-medium text-lightGray">John Doe</h5>
                                        </div>
                                    </div>
                                    <a href="post.html">
                                        <h3 class="text-base font-semibold text-lightGray">One Step to the Future</h3>
                                    </a>
                                </div>
                                <div class="flex space-x-3">
                                    <h5 class="text-sm text-lightGray">25 Aug . 16 min read</h5>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-6">
                            <h1 class="font-bold text-5xl text-gray-200">02</h1>
                            <div>
                                <div class="mb-2">
                                    <div class="flex items-center space-x-3">
                                        <img src="/images/avatar-3.jpg" class="w-10 h-10 rounded-full object-cover"
                                             alt="avatar"/>
                                        <div>
                                            <h5 class="text-base font-medium text-lightGray">John Doe</h5>
                                        </div>
                                    </div>
                                    <a href="post.html">
                                        <h3 class="text-base font-semibold text-lightGray">One Step to the Future</h3>
                                    </a>
                                </div>
                                <div class="flex space-x-3">
                                    <h5 class="text-sm text-lightGray">25 Aug . 16 min read</h5>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-6">
                            <h1 class="font-bold text-5xl text-gray-200">03</h1>
                            <div>
                                <div class="mb-2">
                                    <div class="flex items-center space-x-3">
                                        <img src="/images/avatar-3.jpg" class="w-10 h-10 rounded-full object-cover"
                                             alt="avatar"/>
                                        <div>
                                            <h5 class="text-base font-medium text-lightGray">John Doe</h5>
                                        </div>
                                    </div>
                                    <a href="post.html">
                                        <h3 class="text-base font-semibold text-lightGray">One Step to the Future</h3>
                                    </a>
                                </div>
                                <div class="flex space-x-3">
                                    <h5 class="text-sm text-lightGray">25 Aug . 16 min read</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center space-y-6 justify-between md:flex-row">
                        <div class="flex space-x-6">
                            <h1 class="font-bold text-5xl text-gray-200">04</h1>
                            <div>
                                <div class="mb-2">
                                    <div class="flex items-center space-x-3">
                                        <img src="/images/avatar-3.jpg" class="w-10 h-10 rounded-full object-cover"
                                             alt="avatar"/>
                                        <div>
                                            <h5 class="text-base font-medium text-lightGray">John Doe</h5>
                                        </div>
                                    </div>
                                    <a href="post.html">
                                        <h3 class="text-base font-semibold text-lightGray">One Step to the Future</h3>
                                    </a>
                                </div>
                                <div class="flex space-x-3">
                                    <h5 class="text-sm text-lightGray">25 Aug . 16 min read</h5>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-6">
                            <h1 class="font-bold text-5xl text-gray-200">05</h1>
                            <div>
                                <div class="mb-2">
                                    <div class="flex items-center space-x-3">
                                        <img src="/images/avatar-3.jpg" class="w-10 h-10 rounded-full object-cover"
                                             alt="avatar"/>
                                        <div>
                                            <h5 class="text-base font-medium text-lightGray">John Doe</h5>
                                        </div>
                                    </div>
                                    <a href="post.html">
                                        <h3 class="text-base font-semibold text-lightGray">One Step to the Future</h3>
                                    </a>
                                </div>
                                <div class="flex space-x-3">
                                    <h5 class="text-sm text-lightGray">25 Aug . 16 min read</h5>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-6">
                            <h1 class="font-bold text-5xl text-gray-200">06</h1>
                            <div>
                                <div class="mb-2">
                                    <div class="flex items-center space-x-3">
                                        <img src="/images/avatar-3.jpg" class="w-10 h-10 rounded-full object-cover"
                                             alt="avatar"/>
                                        <div>
                                            <h5 class="text-base font-medium text-lightGray">John Doe</h5>
                                        </div>
                                    </div>
                                    <a href="post.html">
                                        <h3 class="text-base font-semibold text-lightGray">One Step to the Future</h3>
                                    </a>
                                </div>
                                <div class="flex space-x-3">
                                    <h5 class="text-sm text-lightGray">25 Aug . 16 min read</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <section>
                <div class="flex flex-col items-center justify-between space-y-12">
                    @if($posts->count())

                    @endif
                    @foreach($posts as $post)
                        <div class="flex items-center space-x-6">
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
                                    <h5 class="text-sm text-lightGray">{{$post->created_at->diffForHumans()}} . 16 min read</h5>

                                    <a href="/?category={{ $post->category->slug }}"
                                       class="hidden px-1 text-lightGray bg-middleLightGray rounded hover:bg-veryLightGray md:flex">
                                        {{$post->category->name}}
                                    </a>

                                </div>
                            </div>
                            <img src="/images/post-image-2.jpg" class="rounded-lg h-32 w-48 object-cover"
                                 alt="hero-image">
                        </div>
                    @endforeach
                </div>
            </section>

            <!--End left items-->

            <!--Horizontal rule-->
            <div class="py-8">
                <div class="flex-grow border-t border-veryLightGray"></div>
            </div>
            <!--End horizontal rule-->

            <!--Post categories-->
            <aside class="lg:w-2/5">
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

