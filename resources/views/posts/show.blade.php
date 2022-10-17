@extends('layout')

@section('content')

    <!-- single blog post section -->
    <section id="post">
        <!--Flex Container-->
        <div class="container mx-auto flex flex-col mb-16 space-x-6 lg:flex-row">
            <!--Left items-->
            <section class="lg:w-2/3">
                <div class="px-6 mt-12 text-gray-700 text-lg">
                    <div class="flex items-center space-x-6 pb-6">
                        <img src="/images/avatar-1.jpg" class="w-16 h-16 rounded-full object-cover" alt="avatar" />
                        <div class="space-y-1">
                            <div>
                                <h5 class="font-medium text-darkBlue">
                                    <a href="/?author={{ $post->author->username }}"> {{ $post->author->name }}</a>
                                </h5>
                            </div>
                            <div class="flex space-x-3">
                                <h5 class="text-lightGray">25 Aug . 16 min read</h5>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-4xl font-semibold text-orange leading-tight mb-6">
                        {{ $post->title }}
                    </h2>
                    <div class="text-center mb-6">
                        <img src="/images/post-image-2.jpg" class="w-full object-cover lg:rounded pb-3"
                             style="height: 20em;" alt="hero-image">
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
                    <div class="pt-6 px-6">
                        <div class="flex items-center space-x-3 pb-3">
                            <img src="/images/avatar-1.jpg" class="w-10 h-10 rounded-full object-cover"
                                 alt="avatar" />
                            <div class="space-y-1">
                                <div>
                                    <!-- <h3 class="font-bold text-orange">ONE STEP TO THE FUTURE</h3> -->
                                    <h5 class="font-medium text-darkBlue">
                                        <a href="#"> Frank Doe</a>
                                    </h5>
                                </div>
                                <div class="flex space-x-3">
                                    <a href="#" class="text-sm text-lightGray">6 days ago</a>
                                </div>
                            </div>
                        </div>
                        <p class="text-lightGray text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Iste recusandae numquam itaque animi harum. Ex molestiae nostrum cum consectetur
                            aperiam?</p>
                    </div>
                </div>


                <!--end of comments-->
            </section>
            <!--End left items-->

            <!--More articles-->
            <aside class="lg:w-1/3">
                <div class="lg:sticky lg:top-36">
                    <div class="space-y-6">
                        <div>
                            <div class="flex items-center space-x-3 pb-3">
                                <img src="/images/avatar-1.jpg" class="w-16 h-16 rounded-full object-cover"
                                     alt="avatar" />
                                <div class="space-y-1">
                                    <div>
                                        <!-- <h3 class="font-bold text-orange">ONE STEP TO THE FUTURE</h3> -->
                                        <h5 class="font-medium text-darkBlue">
                                            <a href="/?author={{ $post->author->username }}"> {{ $post->author->name }}</a>
                                        </h5>
                                    </div>
                                    <div class="flex space-x-3">
                                        <a href="#" class="text-lightGray">1.6K Followers</a>
                                    </div>
                                </div>
                            </div>
                            <p class="text-lightGray text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Iste recusandae numquam itaque animi harum. Ex molestiae nostrum cum consectetur
                                aperiam?</p>
                        </div>

                        <h1 class="font-medium">More from Simple Blog</h1>
                        <div class="flex items-center space-x-12">
                            <div>
                                <div class="flex items-center space-x-3">
                                    <img src="/images/avatar-2.jpg" class="w-10 h-10 rounded-full object-cover"
                                         alt="avatar" />

                                    <div>
                                        <h5 class="font-medium text-darkBlue">Jane Doe</h5>
                                    </div>
                                </div>
                                <h3 class="font-bold text-orange">Lorem Ipsum Dolor Sit Amet.</h3>
                            </div>
                            <img src="/images/post-image-1.jpg" class="w-16 h-16 rounded object-cover" alt="avatar" />
                        </div>

                        <div class="flex items-center space-x-12">
                            <div>
                                <div class="flex items-center space-x-3">
                                    <img src="/images/avatar-2.jpg" class="w-10 h-10 rounded-full object-cover"
                                         alt="avatar" />

                                    <div>
                                        <h5 class="font-medium text-darkBlue">Jane Doe</h5>
                                    </div>

                                </div>
                                <h3 class="font-bold text-orange">Lorem Ipsum Dolor Sit Amet.</h3>
                            </div>
                            <img src="/images/post-image-2.jpg" class="w-16 h-16 rounded object-cover" alt="avatar" />
                        </div>

                        <div class="flex items-center space-x-12">
                            <div>
                                <div class="flex items-center space-x-3">
                                    <img src="/images/avatar-2.jpg" class="w-10 h-10 rounded-full object-cover"
                                         alt="avatar" />

                                    <div>
                                        <h5 class="font-medium text-darkBlue">Jane Doe</h5>
                                    </div>

                                </div>
                                <h3 class="font-bold text-orange">Lorem Ipsum Dolor Sit Amet.</h3>
                            </div>
                            <img src="/images/post-image-3.jpg" class="w-16 h-16 rounded object-cover" alt="avatar" />
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <!--End flex Container-->
    </section>
    <!-- End single posts section -->

@endsection




