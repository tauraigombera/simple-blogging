<x-layout>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px] px-6 py-6 bg-white shadow-2xl rounded-2xl">
            <a href={{'/'}} class="float-right">
                <svg width="24" height="24" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.5 0.25C13.2861 0.25 10.1443 1.20305 7.47199 2.98862C4.79969 4.77419 2.71689 7.31209 1.48697 10.2814C0.257041 13.2507 -0.0647633 16.518 0.562247 19.6702C1.18926 22.8224 2.73692 25.7179 5.00952 27.9905C7.28213 30.2631 10.1776 31.8108 13.3298 32.4378C16.482 33.0648 19.7493 32.743 22.7186 31.513C25.6879 30.2831 28.2258 28.2003 30.0114 25.528C31.797 22.8557 32.75 19.7139 32.75 16.5C32.75 14.366 32.3297 12.2529 31.5131 10.2814C30.6964 8.30985 29.4994 6.51847 27.9905 5.00952C26.4815 3.50056 24.6902 2.3036 22.7186 1.48696C20.7471 0.670319 18.634 0.25 16.5 0.25ZM20.9038 18.5963C21.0561 18.7473 21.177 18.927 21.2595 19.1251C21.342 19.3231 21.3844 19.5355 21.3844 19.75C21.3844 19.9645 21.342 20.1769 21.2595 20.3749C21.177 20.573 21.0561 20.7527 20.9038 20.9038C20.7527 21.0561 20.573 21.177 20.3749 21.2594C20.1769 21.3419 19.9645 21.3844 19.75 21.3844C19.5355 21.3844 19.3231 21.3419 19.1251 21.2594C18.927 21.177 18.7473 21.0561 18.5963 20.9038L16.5 18.7913L14.4038 20.9038C14.2527 21.0561 14.073 21.177 13.8749 21.2594C13.6769 21.3419 13.4645 21.3844 13.25 21.3844C13.0355 21.3844 12.8231 21.3419 12.6251 21.2594C12.427 21.177 12.2473 21.0561 12.0963 20.9038C11.9439 20.7527 11.8231 20.573 11.7406 20.3749C11.6581 20.1769 11.6156 19.9645 11.6156 19.75C11.6156 19.5355 11.6581 19.3231 11.7406 19.1251C11.8231 18.927 11.9439 18.7473 12.0963 18.5963L14.2088 16.5L12.0963 14.4038C11.7903 14.0978 11.6184 13.6827 11.6184 13.25C11.6184 12.8173 11.7903 12.4022 12.0963 12.0963C12.4023 11.7903 12.8173 11.6184 13.25 11.6184C13.6827 11.6184 14.0978 11.7903 14.4038 12.0963L16.5 14.2088L18.5963 12.0963C18.9023 11.7903 19.3173 11.6184 19.75 11.6184C20.1827 11.6184 20.5978 11.7903 20.9038 12.0963C21.2098 12.4022 21.3817 12.8173 21.3817 13.25C21.3817 13.6827 21.2098 14.0978 20.9038 14.4038L18.7913 16.5L20.9038 18.5963Z"
                        fill="#adb2bd" />
                </svg>
            </a>

            <h1 class="pb-6 text-2xl font-medium text-orange">Publish New Post</h1>
            <form method="POST" action="/author/posts" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label
                        for="title"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Title
                    </label>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        value="{{old('title')}}"
                        placeholder="Write your title"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6
                        text-base font-medium text-[#6B7280] outline-none focus:border-orange focus:shadow-md"
                    />
                    @error('title')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label
                        for="slug"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Slug
                    </label>
                    <input
                        type="text"
                        name="slug"
                        id="slug"
                        value="{{old('slug')}}"
                        placeholder="Write your slug"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6
                        text-base font-medium text-[#6B7280] outline-none focus:border-orange focus:shadow-md"
                    />
                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label
                        for="thumbnail"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Image
                    </label>
                    <input
                        type="file"
                        name="thumbnail"
                        id="thumbnail"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6
                        text-base font-medium text-[#6B7280] outline-none focus:border-orange focus:shadow-md"
                    />
                    @error('thumbnail')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label
                        for="excerpt"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Excerpt
                    </label>
                    <textarea
                        rows="2"
                        type="text"
                        name="excerpt"
                        id="excerpt"
                        placeholder="Write your excerpt"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-orange focus:shadow-md"
                    >{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label
                        for="body"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Body
                    </label>
                    <textarea
                        rows="4"
                        name="body"
                        id="body"
                        placeholder="Write your body"
                        class="w-full  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-orange focus:shadow-md"
                    >{{ old('body') }}</textarea>
                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <div class="mb-5">
                        <label
                            for="excerpt"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Category
                        </label>
                        <select
                            type="text"
                            name="category_id"
                            id="category_id"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium
                            text-[#6B7280] outline-none focus:border-orange focus:shadow-md">
                            <option value="" disabled selected>Please Select</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}"
                                    {{old('category_id') == $category->id ? 'selected' : ''}}>
                                    {{ ucwords($category->name) }}
                                </option>
                            @endforeach
                        </select>
                        @error('category')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="hover:shadow-form rounded-md bg-orange py-3 px-8 text-base font-semibold text-white outline-none"
                    >
                        Publish
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>

