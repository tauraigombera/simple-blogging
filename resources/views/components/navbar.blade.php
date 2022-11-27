
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
        <div>
            <ul class="hidden text-sm text-gray-500 space-x-3 md:flex">
                <li class=" {{ Request::is('about') ? 'active_md' : '' }}">
                    <a href="/about" class="hover:text-gray-700">About Us</a>
                </li>

                <li class=" {{ Request::is('membership') ? 'active_md' : '' }}">
                    <a href="/membership" class="hover:text-gray-700">Membership</a>
                </li>

                <li class=" {{ Request::is('author/posts') ? 'active_md' : '' }}">
                    @auth
                        <a href="/author/posts" class="hover:text-gray-700">My Posts</a>
                    @endauth
                </li>

                <li class=" {{ Request::is('/author/posts/create') ? 'active_md' : '' }}">
                    <a href="/author/posts/create" class="hover:text-gray-700">Write</a>
                </li>

                @guest
                <li class=" {{ Request::is('/login') ? 'active_md' : '' }}">
                    <a href="/login" class="hover:text-gray-700">Sign in</a>
                </li>
                @endguest
            </ul>

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
                    <div id="profile-avatar" class="hidden block cursor-pointer md:flex focus:outline-none">
                        <img src="http://i.pravatar.cc/60?u={{ auth()->user()->username }}"
                             class="w-10 h-10 rounded-full object-cover"
                             alt="avatar"/>
                    </div>

                    <!-- dropdown menu-->
                    <div id="profile-dropdown" class="hidden absolute right-0 z-10 mt-2  origin-top-right rounded-md bg-white
                         shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu"
                         aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
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
            <div id="menu-btn" class="block md:hidden cursor-pointer focus:outline-none">
                <img src="http://i.pravatar.cc/60?u={{ auth()->user()->username }}"
                     class="w-10 h-10 rounded-full object-cover"
                     alt="avatar"/>
            </div>
        @else
            <button id="menu-btn" class="block hamburger cursor-pointer md:hidden focus:outline-none">
                    <span class="hamburger-top"></span>
                    <span class="hamburger-middle"></span>
                    <span class="hamburger-bottom"></span>
            </button>
        @endauth
    </div>

    <!--Search bar-->
    <div class="container mx-auto px-6 justify-center hidden md:flex">
        <div id="search-bar" class="hidden">
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
    </div>

    <!--Mobile Menu-->
    <div>
        <ul id="menu" class="hidden pb-6 relative text-white bg-darkBlue gradient__bg container mx-auto px-6 md:hidden">
            <li>
                @auth
                    <div class="block py-2 px-4">
                        <div class="flex flex-col">
                            <a href="#" class="text-white font-medium"> {{auth()->user()->name}} </a>
                            <a href="#" class="text-sm font-sm text-lightGray"> {{auth()->user()->email}} </a>
                        </div>
                    </div>
                @endauth
            </li>
            <li class=" {{ Request::is('about') ? 'active_sm' : '' }}">
                <a href="/about" class="block py-2 px-4 text-sm hover:bg-lightOrange">About Us</a>
            </li>
            <li class=" {{ Request::is('membership') ? 'active_sm' : '' }}">
                <a href="/membership" class="block py-2 px-4 text-sm hover:bg-lightOrange">Membership</a>
            </li>

            @auth
            <li class=" {{ Request::is('author/posts') ? 'active_sm' : '' }}">
                <a href="/author/posts" class="block py-2 px-4 text-sm hover:bg-lightOrange">My Posts</a>
            </li>
            @endauth

            <li class=" {{ Request::is('author/posts/create') ? 'active_sm' : '' }}">
                <a href="/author/posts/create" class="block py-2 px-4 text-sm hover:bg-lightOrange">Write</a>
            </li>

            @auth
            <li class=" {{ Request::is('/logout') ? 'active_sm' : '' }}">
                <form method="POST" action="/logout" class="block py-2 px-4 text-sm hover:bg-lightOrange">
                    @csrf
                    <button type="submit">Sign out</button>
                </form>
            </li>
            @else
                <li class=" {{ Request::is('/login') ? 'active_sm' : '' }}">
                    <a href="/login" class="block py-2 px-4 text-sm hover:bg-lightOrange">Sign in</a>
                </li>

                <li>
                    <a href="/register" class="block py-2 px-4 text-sm hover:bg-lightOrange">Get started</a>
                </li>
            @endauth

        </ul>
    </div>
</nav>
