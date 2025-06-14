@props(['posts', 'trendingPosts'])
<div class="container mx-auto items-center px-6 space-y-6 md:space-y-6">
    <div class="container mx-auto flex space-x-3 font-medium">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M17 4C16.7348 4 16.4804 3.89464 16.2929 3.70711C16.1054 3.51957 16 3.26522 16 3C16 2.73478 16.1054 2.48043 16.2929 2.29289C16.4804 2.10536 16.7348 2 17 2H21C21.2652 2 21.5196 2.10536 21.7071 2.29289C21.8946 2.48043 22 2.73478 22 3V7C22 7.26522 21.8946 7.51957 21.7071 7.70711C21.5196 7.89464 21.2652 8 21 8C20.7348 8 20.4804 7.89464 20.2929 7.70711C20.1054 7.51957 20 7.26522 20 7V5.414L14.207 11.207C14.0195 11.3945 13.7652 11.4998 13.5 11.4998C13.2348 11.4998 12.9805 11.3945 12.793 11.207L10 8.414L4.707 13.707C4.5184 13.8892 4.2658 13.99 4.0036 13.9877C3.7414 13.9854 3.49059 13.8802 3.30518 13.6948C3.11977 13.5094 3.0146 13.2586 3.01233 12.9964C3.01005 12.7342 3.11084 12.4816 3.293 12.293L9.293 6.293C9.48053 6.10553 9.73484 6.00021 10 6.00021C10.2652 6.00021 10.5195 6.10553 10.707 6.293L13.5 9.086L18.586 4H17ZM5 18V21C5 21.2652 4.89464 21.5196 4.70711 21.7071C4.51957 21.8946 4.26522 22 4 22C3.73478 22 3.48043 21.8946 3.29289 21.7071C3.10536 21.5196 3 21.2652 3 21V18C3 17.7348 3.10536 17.4804 3.29289 17.2929C3.48043 17.1054 3.73478 17 4 17C4.26522 17 4.51957 17.1054 4.70711 17.2929C4.89464 17.4804 5 17.7348 5 18ZM10 14C10 13.7348 9.89464 13.4804 9.70711 13.2929C9.51957 13.1054 9.26522 13 9 13C8.73478 13 8.48043 13.1054 8.29289 13.2929C8.10536 13.4804 8 13.7348 8 14V21C8 21.2652 8.10536 21.5196 8.29289 21.7071C8.48043 21.8946 8.73478 22 9 22C9.26522 22 9.51957 21.8946 9.70711 21.7071C9.89464 21.5196 10 21.2652 10 21V14ZM14 15C14.2652 15 14.5196 15.1054 14.7071 15.2929C14.8946 15.4804 15 15.7348 15 16V21C15 21.2652 14.8946 21.5196 14.7071 21.7071C14.5196 21.8946 14.2652 22 14 22C13.7348 22 13.4804 21.8946 13.2929 21.7071C13.1054 21.5196 13 21.2652 13 21V16C13 15.7348 13.1054 15.4804 13.2929 15.2929C13.4804 15.1054 13.7348 15 14 15ZM20 11C20 10.7348 19.8946 10.4804 19.7071 10.2929C19.5196 10.1054 19.2652 10 19 10C18.7348 10 18.4804 10.1054 18.2929 10.2929C18.1054 10.4804 18 10.7348 18 11V21C18 21.2652 18.1054 21.5196 18.2929 21.7071C18.4804 21.8946 18.7348 22 19 22C19.2652 22 19.5196 21.8946 19.7071 21.7071C19.8946 21.5196 20 21.2652 20 21V11Z"
                fill="#FF4820"/>
        </svg>
        <h1 class="">TRENDING</h1>
    </div>
    @if ($posts->count())
    <div class="space-y-6">
        <div class="flex flex-col items-center space-y-6 justify-between md:flex-row">

            <!--trending post 1-->
            <div class="flex space-x-6">
                @if($trendingPosts[0])
                <h1 class="font-bold text-5xl text-gray-200">01</h1>
                <div>
                    <div class="mb-2">
                        <a href="/?author={{ $trendingPosts[0]->author->username }}">
                        <div class="flex items-center space-x-3">
                            <img src="/images/user.png" class="w-10 h-10 rounded-full object-cover"
                                 alt="avatar"/>
                            <div>
                                <h5 class="text-base font-medium text-lightGray">{{$trendingPosts[0]->author->name}}</h5>
                            </div>
                        </div>
                        </a>

                        <a href="/posts/{{ $trendingPosts[0]->slug }}">
                            <h3 class="text-base font-semibold text-lightGray">
                                {{$trendingPosts[0]->title}}
                            </h3>
                        </a>
                    </div>
                    <div class="flex space-x-3">
                        <h5 class="text-sm text-lightGray">{{$trendingPosts[0]->created_at->format('F j')}} . 16 min read</h5>
                    </div>
                </div>
                @else
                <p> </p>
                @endif
            </div>

            <!--trending post 2-->
            <div class="flex space-x-6">
                @if($trendingPosts[1])
                <h1 class="font-bold text-5xl text-gray-200">02</h1>
                <div>
                    <div class="mb-2">
                        <a href="/?author={{ $trendingPosts[1]->author->username }}">
                            <div class="flex items-center space-x-3">
                                <img src="http://i.pravatar.cc/60?u={{ $trendingPosts[1]->author->username }}" class="w-10 h-10 rounded-full object-cover"
                                     alt="avatar"/>
                                <div>
                                    <h5 class="text-base font-medium text-lightGray">{{$trendingPosts[1]->author->name}}</h5>
                                </div>
                            </div>
                        </a>

                        <a href="/posts/{{ $trendingPosts[1]->slug }}">
                            <h3 class="text-base font-semibold text-lightGray">
                                {{$trendingPosts[1]->title}}
                            </h3>
                        </a>
                    </div>
                    <div class="flex space-x-3">
                        <h5 class="text-sm text-lightGray">{{$trendingPosts[1]->created_at->format('F j')}} . 16 min read</h5>
                    </div>
                </div>
                @else
                <p> </p>
                @endif
            </div>

            <!--trending post 3-->
            <div class="flex space-x-6">
                @if($trendingPosts[2])
                <h1 class="font-bold text-5xl text-gray-200">03</h1>
                <div>
                    <div class="mb-2">
                        <a href="/?author={{ $trendingPosts[2]->author->username }}">
                            <div class="flex items-center space-x-3">
                                <img src="http://i.pravatar.cc/60?u={{ $trendingPosts[2]->author->username }}" class="w-10 h-10 rounded-full object-cover"
                                     alt="avatar"/>
                                <div>
                                    <h5 class="text-base font-medium text-lightGray">{{$trendingPosts[2]->author->name}}</h5>
                                </div>
                            </div>
                        </a>

                        <a href="/posts/{{ $trendingPosts[2]->slug }}">
                            <h3 class="text-base font-semibold text-lightGray">
                                {{$trendingPosts[2]->title}}
                            </h3>
                        </a>
                    </div>
                    <div class="flex space-x-3">
                        <h5 class="text-sm text-lightGray">{{$trendingPosts[2]->created_at->format('F j')}} . 16 min read</h5>
                    </div>
                </div>
                @else
                <p> </p>
                @endif
            </div>
        </div>
        <div class="flex flex-col items-center space-y-6 justify-between md:flex-row">

            <!--trending post 4-->
            <div class="flex space-x-6">
                @if($trendingPosts[3])
                <h1 class="font-bold text-5xl text-gray-200">04</h1>
                <div>
                    <div class="mb-2">
                        <a href="/?author={{ $trendingPosts[3]->author->username }}">
                            <div class="flex items-center space-x-3">
                                <img src="http://i.pravatar.cc/60?u={{ $trendingPosts[3]->author->username }}" class="w-10 h-10 rounded-full object-cover"
                                     alt="avatar"/>
                                <div>
                                    <h5 class="text-base font-medium text-lightGray">{{$trendingPosts[3]->author->name}}</h5>
                                </div>
                            </div>
                        </a>

                        <a href="/posts/{{ $trendingPosts[3]->slug }}">
                            <h3 class="text-base font-semibold text-lightGray">
                                {{$trendingPosts[3]->title}}
                            </h3>
                        </a>
                    </div>
                    <div class="flex space-x-3">
                        <h5 class="text-sm text-lightGray">{{$trendingPosts[3]->created_at->format('F j')}} . 16 min read</h5>
                    </div>
                </div>
                @else
                <p> </p>
                @endif
            </div>

            <!--trending post 5-->
            <div class="flex space-x-6">
                @if($trendingPosts[4])
                <h1 class="font-bold text-5xl text-gray-200">05</h1>
                <div>
                    <div class="mb-2">
                        <a href="/?author={{ $trendingPosts[4]->author->username }}">
                            <div class="flex items-center space-x-3">
                                <img src="http://i.pravatar.cc/60?u={{ $trendingPosts[4]->author->username }}" class="w-10 h-10 rounded-full object-cover"
                                     alt="avatar"/>
                                <div>
                                    <h5 class="text-base font-medium text-lightGray">{{$trendingPosts[4]->author->name}}</h5>
                                </div>
                            </div>
                        </a>

                        <a href="/posts/{{ $trendingPosts[4]->slug }}">
                            <h3 class="text-base font-semibold text-lightGray">
                                {{$trendingPosts[4]->title}}
                            </h3>
                        </a>
                    </div>
                    <div class="flex space-x-3">
                        <h5 class="text-sm text-lightGray">{{$trendingPosts[4]->created_at->format('F j')}} . 16 min read</h5>
                    </div>
                </div>
                @else
                <p> </p>
                @endif
            </div>

            <!--trending post 6-->
            <div class="flex space-x-6">
                @if($trendingPosts[5])
                <h1 class="font-bold text-5xl text-gray-200">06</h1>
                <div>
                    <div class="mb-2">
                        <a href="/?author={{ $trendingPosts[5]->author->username }}">
                            <div class="flex items-center space-x-3">
                                <img src="http://i.pravatar.cc/60?u={{ $trendingPosts[5]->author->username }}" class="w-10 h-10 rounded-full object-cover"
                                     alt="avatar"/>
                                <div>
                                    <h5 class="text-base font-medium text-lightGray">{{$trendingPosts[5]->author->name}}</h5>
                                </div>
                            </div>
                        </a>

                        <a href="/posts/{{ $trendingPosts[5]->slug }}">
                            <h3 class="text-base font-semibold text-lightGray">
                                {{$trendingPosts[5]->title}}
                            </h3>
                        </a>
                    </div>
                    <div class="flex space-x-3">
                        <h5 class="text-sm text-lightGray">{{$trendingPosts[5]->created_at->format('F j')}} . 16 min read</h5>
                    </div>
                </div>
                @else
                <p> </p>
                @endif
            </div>
        </div>
    </div>
    @else
        <p class="max-w-md text-4xl font-bold text-center text-white md:text-5xl md:text-left">
            No posts yet. Please check back later.
        </p>
    @endif
</div>
