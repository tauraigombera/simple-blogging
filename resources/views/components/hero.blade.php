
@props(['posts'])
<div class="relative overflow-hidden min-h-screen-minus-header flex items-center justify-center -z-50">
    <!-- Background Image -->
    <img 
        src="/images/post-image-3.jpg"
        class="absolute inset-0 w-full h-full object-cover opacity-30"
        alt="Blog writing and publishing background"
    />

    <!-- Content -->
    <div class="container mx-auto relative flex flex-col items-center justify-center px-6 lg:px-24">
        <div class="flex flex-col space-y-12 pt-12 pb-20 w-full items-center justify-center">
            <!-- @if ($posts->count())
                <h1 class="max-w-md text-4xl font-bold text-center text-white md:text-5xl">
                    {{$posts[0]->title}}
                </h1>
                <p class="max-w-sm text-center text-white">
                    {{$posts[0]->excerpt}}
                </p>
            @else -->
                <p class="max-w-md text-4xl font-bold text-center text-white md:text-5xl">
                    <!-- No posts yet. Please check back later. -->
                    Lembani nkhani pano kuti mugawire mzeru amzanu.
                </p>
            <!-- @endif -->
            <div class="flex justify-center">
                <a href="/register" class="p-3 px-6 pt-2 text-white bg-orange rounded baseline hover:bg-lightOrange">
                    Join ZaMzeru
                </a>
            </div>
        </div>
    </div>
</div>