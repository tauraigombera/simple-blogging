@props(['posts'])
<div class="bg-darkBlue gradient__bg">
    <div class="container mx-auto flex flex-col-reverse items-center px-6 lg:px-24  md:flex-row">
        <div class="flex flex-col space-y-12 pt-12 pb-20 md:w-1/2">
            @if ($posts->count())
                <h1 class="max-w-md text-4xl font-bold text-center text-white md:text-5xl md:text-left">
                    {{$posts[0]->title}}
                </h1>
                <p class="max-w-sm text-center text-white md:text-left">
                    {{$posts[0]->excerpt}}
                </p>
            @else
                <p class="max-w-md text-4xl font-bold text-center text-white md:text-5xl md:text-left">
                    No posts yet. Please check back later.
                </p>
            @endif
            <div class="flex justify-center md:justify-start">
                <a href="/register"
                   class="p-3 px-6 pt-2 text-white bg-orange rounded baseline hover:bg-lightOrange">Start
                    reading</a>
            </div>
        </div>
        {{--                <div class="md:w-1/2">--}}
        {{--                    <img src="images/hero.jpg" class="rounded-lg" alt="hero-image">--}}
        {{--                </div>--}}
        <div class="md:w-1/2 px-6">
            {{--                        <div id="three-container"></div>--}}
            <img class="h-48 w-48 lg:h-64 lg:w-64 rounded float-right hidden kenburns-top md:flex"
                src="/images/DALL·E 2022-11-06 13.17.36 - Morden scene signifying blog writing and publishing .png">
        </div>
    </div>
</div>
