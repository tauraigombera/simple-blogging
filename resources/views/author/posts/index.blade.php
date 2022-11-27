<x-layout>
    <!--navbar-->
    <section class="sticky top-0">
        <x-navbar />
    </section>

    <div class="container mx-auto px-6 p-6">
        <h1 class="text-darkBlue font-medium pb-6">MY POSTS</h1>
        @if($posts->count())
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($posts as $post)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                        <div class="text-sm font-medium text-darkBlue">
                                            <a href="/posts/{{$post->slug}}">
                                                {{ $post->title }}
                                            </a>
                                        </div>
                                </div>
                            </td>

{{--                            <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">--}}
{{--                              Published--}}
{{--                            </span>--}}
{{--                            </td>--}}
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="/author/posts/{{$post->id}}/edit" class="text-darkBlue hover:text-gray-500">Edit</a>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <form
                                    action="/author/posts/{{$post->id}}"
                                    method="POST"
                                    class="mb-0"
                                    x-data="{conf: false, check: false}"
                                    @submit.prevent="if(conf == false) return;$el.submit()"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="text-red-500"
                                        @click="check = confirm('are you sure want delete: {{$post->title}}?'); conf = check;"
                                        type="submit"
                                    >Delete</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @else
            <p>You currently don't have any posts.
                <a href="/author/posts/create" class="text-orange hover:text-lightOrange">Start writing</a>
            </p>
        @endif
    </div>
</x-layout>

