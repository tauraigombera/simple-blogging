<x-layout>
    <div class="flex items-center justify-center p-12">

        <div class="mx-auto w-full max-w-[550px]">
            <h1 class="pb-6 text-2xl font-medium text-[#07074D]">Edit Post</h1>
            <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <!-- title-->
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
                        value="{{$post->title}}"
                        placeholder="Write your title"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6
                        text-base font-medium text-[#6B7280] outline-none focus:border-orange focus:shadow-md"
                    />
                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <!-- slug-->
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
                        value="{{$post->slug}}"
                        placeholder="Write your slug"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6
                        text-base font-medium text-[#6B7280] outline-none focus:border-orange focus:shadow-md"
                    />
                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <!-- thumbnail-->
                <div class="mb-5">
                    <label
                        for="thumbnail"
                        class="mb-3 block text-base font-medium text-[#07074D]"
                    >
                        Thumbnail
                    </label>
                    <div class="flex">
                        <input
                            type="file"
                            name="thumbnail"
                            id="thumbnail"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6
                        text-base font-medium text-[#6B7280] outline-none focus:border-orange focus:shadow-md"
                        />
                        <img src="{{asset('storage/' . $post->thumbnail)}}" width="200">
                    </div>
                    @error('thumbnail')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <!-- excerpt-->
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
                    >{{ $post->excerpt }}</textarea>
                    @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <!-- body-->
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
                    >{{ $post->body }}</textarea>
                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <!-- category-->
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
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>

