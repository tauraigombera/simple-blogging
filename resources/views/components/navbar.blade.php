
<!--Navbar-->
<nav class="bg-darkBlue mx-auto gradient__bg">
    <!--Flex container-->
    <div class="relative container px-6 p-6 mx-auto flex items-center justify-between">
        <!--Logo-->
        <div class="pt-2">
            <h1>
                <a href = "/" class="font-bold text-4xl text-white">Simple<span class="text-orange">Blog</span></a>
            </h1>
        </div>
        <!--Menu items-->
        <div class="hidden space-x-6 md:flex">
            <a href="#" class="text-white hover:text-lightGray">About Us</a>
            <a href="#" class="text-white hover:text-lightGray">Membership</a>
            @auth
            <a href="/author/posts" class="text-white hover:text-lightGray">My Articles</a>
            @endauth
            <a href="/author/posts/create" class="text-white hover:text-lightGray">Write</a>
        </div>
        <div class="hidden space-x-6 md:flex items-center">
            <button id="search-btn">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="white" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                </svg>
            </button>
            @auth
                <div class="relative inline-block text-left">

                    <!--avatar-->
                    <div id="profile-avatar" class="block cursor-pointer hidden md:flex focus:outline-none">
                        <img src="http://i.pravatar.cc/60?u={{ auth()->user()->username }}"
                             class="w-10 h-10 rounded-full object-cover"
                             alt="avatar"/>
                    </div>

                    <!-- dropdown menu-->
                    <div id="profile-dropdown" class="hidden absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white
                         shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu"
                         aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                               id="menu-item-0">{{auth()->user()->name}} </a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                               id="menu-item-1">{{auth()->user()->email}} </a>
                            <form method="POST" action="/logout" role="none">
                                @csrf
                                <button type="submit" class="text-gray-700 block px-4 py-2 text-sm"
                                        role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                            </form>
                        </div>
                    </div>
                </div>

            @else
                <a href="/register" class="p-3 px-6 pt-2 text-white bg-orange rounded hover:bg-lightOrange">Get started</a>
            @endauth
        </div>

        <!--Hamburger Icon-->
        @auth
            <div id="menu-btn-open" class="block cursor-pointer md:hidden focus:outline-none">
                <img src="http://i.pravatar.cc/60?u={{ auth()->user()->username }}"
                     class="w-10 h-10 rounded-full object-cover"
                     alt="avatar"/>
            </div>

            <div id="menu-btn-close" class="hidden block cursor-pointer md:hidden focus:outline-none">
                <img src="http://i.pravatar.cc/60?u={{ auth()->user()->username }}"
                     class="w-10 h-10 rounded-full object-cover"
                     alt="avatar"/>
            </div>
        @else
            <button id="menu-btn-open" class="block cursor-pointer md:hidden focus:outline-none">
                <svg width="48" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 32H0V26.6667H24V32ZM48 18.6667H0V13.3333H48V18.6667ZM48 5.33333H24V0H48V5.33333Z" fill="#0C2853"/>
                </svg>
            </button>
        @endauth
    </div>

    <!--Search bar-->
    <div id="search-bar" class="hidden flex justify-center">
        <div class="mb-3 xl:w-96">
            <form method="GET" action="#" class="input-group relative flex items-stretch w-full ">
                <input type="text" name="search" value="{{request('search')}}" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal
                    text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700
                    focus:bg-white focus:border-orange focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
                <button type="submit" class="btn inline-block px-6 py-2 border-2 border-white text-white font-medium text-xs leading-tight
                    uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150
                    ease-in-out" type="button" id="button-addon3">
                    Search
                </button>
            </form>
        </div>
    </div>

    <!--Mobile Menu-->

    <div id="menu" class="hidden pb-6 relative bg-gray-50 shadow-2xl container mx-auto px-6 md:hidden">
        @auth
            <div class="block py-2 px-4 hover:bg-gray-200">
               <div class="flex flex-col">
                   <a href="#" class="text-darkBlue font-medium"> {{auth()->user()->name}} </a>
                   <a href="#" class="text-sm text-darkBlue"> {{auth()->user()->email}} </a>
               </div>
            </div>
        @endauth
        <a href="#" class="block py-2 px-4 text-sm text-darkBlue hover:bg-gray-200">About Us</a>
        <a href="#" class="block py-2 px-4 text-sm text-darkBlue hover:bg-gray-200">Membership</a>
        <a href="author/posts/create" class="block py-2 px-4 text-sm text-darkBlue hover:bg-gray-200">Write</a>
        @auth
        <a href="/author/posts" class="block py-2 px-4 text-sm text-darkBlue hover:bg-gray-200">My Posts</a>
            <form method="POST" action="/logout" class="block py-2 px-4 text-sm text-darkBlue hover:bg-gray-200">
                @csrf
                <button type="submit">Sign out</button>
            </form>
        @else
            <a href="/register" class="block py-2 px-4 text-sm text-darkBlue hover:bg-gray-200">Get started</a>
        @endauth

    </div>

</nav>
