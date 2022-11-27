<x-layout>
    <!--navbar-->
    <section class="sticky top-0">
        <x-navbar />
    </section>

    <div class="container mx-auto px-6 p-6">
        <h1 class="text-darkBlue font-medium">POST CATEGORIES</h1>
        <a href="/admin/categories/create" class="text-orange font-medium pb-6">Create New</a>
        @if($categories->count())
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($categories as $category)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm font-medium text-darkBlue">
                                                <a href="">
                                                    {{ $category->name }}
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
                                        <a href="/admin/categories/{{$category->id}}/edit" class="text-darkBlue hover:text-gray-500">Edit</a>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <form
                                            action="/admin/categories/{{$category->id}}"
                                            method="POST"
                                            class="mb-0"
                                            x-data="{conf: false, check: false}"
                                            @submit.prevent="if(conf == false) return;$el.submit()"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="text-red-500"
                                                @click="check = confirm('are you sure want delete: {{$category->name}}?'); conf = check;"
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
            <p>You currently don't have any categories.
                <a href="/admin/categories/create" class="text-orange hover:text-lightOrange">Create a category</a>
            </p>
        @endif
    </div>
</x-layout>

