
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
            <a href="/admin/posts/create" class="text-white hover:text-lightGray">Write</a>
        </div>
        <div class="hidden space-x-6 md:flex items-center">
            <button id="search-btn">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="white" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                </svg>
            </button>
            @auth
                <a href="#" class="text-orange font-bold uppercase"> {{auth()->user()->name}} </a>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="p-3 px-6 pt-2 text-white bg-orange rounded hover:bg-lightOrange">Sign out</button>
                </form>
            @else
                <a href="/register" class="p-3 px-6 pt-2 text-white bg-orange rounded hover:bg-lightOrange">Get started</a>
            @endauth
        </div>
        <!--Hamburger Icon-->
        @auth
            <div id="menu-btn-open" class="block humburger md:hidden focus:outline-none">
                <img src="http://i.pravatar.cc/60?u={{ auth()->user()->username }}"
                     class="w-10 h-10 rounded-full object-cover"
                     alt="avatar"/>
            </div>
        @else
            <button id="menu-btn-open" class="block humburger md:hidden focus:outline-none">
                <svg width="48" height="32" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 32H0V26.6667H24V32ZM48 18.6667H0V13.3333H48V18.6667ZM48 5.33333H24V0H48V5.33333Z" fill="#0C2853"/>
                </svg>
            </button>
        @endauth

{{--        <button id="menu-btn-close" class="hidden block humburger md:hidden focus:outline-none">--}}
{{--            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                <path d="M16.5 0.25C13.2861 0.25 10.1443 1.20305 7.47199 2.98862C4.79969 4.77419 2.71689 7.31209 1.48697 10.2814C0.257041 13.2507 -0.0647633 16.518 0.562247 19.6702C1.18926 22.8224 2.73692 25.7179 5.00952 27.9905C7.28213 30.2631 10.1776 31.8108 13.3298 32.4378C16.482 33.0648 19.7493 32.743 22.7186 31.513C25.6879 30.2831 28.2258 28.2003 30.0114 25.528C31.797 22.8557 32.75 19.7139 32.75 16.5C32.75 14.366 32.3297 12.2529 31.5131 10.2814C30.6964 8.30985 29.4994 6.51847 27.9905 5.00952C26.4815 3.50056 24.6902 2.3036 22.7186 1.48696C20.7471 0.670319 18.634 0.25 16.5 0.25ZM20.9038 18.5963C21.0561 18.7473 21.177 18.927 21.2595 19.1251C21.342 19.3231 21.3844 19.5355 21.3844 19.75C21.3844 19.9645 21.342 20.1769 21.2595 20.3749C21.177 20.573 21.0561 20.7527 20.9038 20.9038C20.7527 21.0561 20.573 21.177 20.3749 21.2594C20.1769 21.3419 19.9645 21.3844 19.75 21.3844C19.5355 21.3844 19.3231 21.3419 19.1251 21.2594C18.927 21.177 18.7473 21.0561 18.5963 20.9038L16.5 18.7913L14.4038 20.9038C14.2527 21.0561 14.073 21.177 13.8749 21.2594C13.6769 21.3419 13.4645 21.3844 13.25 21.3844C13.0355 21.3844 12.8231 21.3419 12.6251 21.2594C12.427 21.177 12.2473 21.0561 12.0963 20.9038C11.9439 20.7527 11.8231 20.573 11.7406 20.3749C11.6581 20.1769 11.6156 19.9645 11.6156 19.75C11.6156 19.5355 11.6581 19.3231 11.7406 19.1251C11.8231 18.927 11.9439 18.7473 12.0963 18.5963L14.2088 16.5L12.0963 14.4038C11.7903 14.0978 11.6184 13.6827 11.6184 13.25C11.6184 12.8173 11.7903 12.4022 12.0963 12.0963C12.4023 11.7903 12.8173 11.6184 13.25 11.6184C13.6827 11.6184 14.0978 11.7903 14.4038 12.0963L16.5 14.2088L18.5963 12.0963C18.9023 11.7903 19.3173 11.6184 19.75 11.6184C20.1827 11.6184 20.5978 11.7903 20.9038 12.0963C21.2098 12.4022 21.3817 12.8173 21.3817 13.25C21.3817 13.6827 21.2098 14.0978 20.9038 14.4038L18.7913 16.5L20.9038 18.5963Z" fill="#0C2853"/>--}}
{{--            </svg>--}}
{{--        </button>--}}
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
        <a href="admin/posts/create" class="block py-2 px-4 text-sm text-darkBlue hover:bg-gray-200">Write</a>
        @auth
            <form method="POST" action="/logout" class="block py-2 px-4 text-sm text-darkBlue hover:bg-gray-200">
                @csrf
                <button type="submit">Sign out</button>
            </form>
        @else
            <a href="/register" class="block py-2 px-4 text-sm text-darkBlue hover:bg-gray-200">Get started</a>
        @endauth
        <!--Search bar-->
        <!--<div id="search-bar" class="block py-2 px-4 text-sm text-darkBlue hover:bg-gray-200">
            <div class="mb-3 xl:w-96">
                <div class="input-group relative flex items-stretch w-full ">
                    <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal
                        text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700
                        focus:bg-white focus:border-orange focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
                    <button class="btn inline-block px-6 py-2 border-2 border-orange text-orange font-medium text-xs leading-tight
                        uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150
                        ease-in-out" type="button" id="button-addon3">
                        Search
                    </button>
                </div>
            </div>
        </div>-->
    </div>

</nav>
