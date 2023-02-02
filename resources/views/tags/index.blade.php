<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">{{ __('Projects') }}</h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Content --}}
                    <section class="bg-white dark:bg-gray-900">
                        <div class="mx-auto px-6 py-10">
                            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                                @foreach ($tags as $tag)
                                    {{-- Tags Component --}}
                                    <div>
                                        <div class="mt-8">
                                            <h1
                                                class=" text-xl font-semibold text-gray-800 dark:text-white text-center">
                                                {{ $tag->name }}
                                            </h1>
                                            <p class="mb-4  text-blue-500 text-center">
                                                {{ $tag->created_at->format('m-d-Y') }}
                                            </p>
                                            {{-- Article Table --}}
                                            <div class="relative overflow-x-auto">
                                                <table
                                                    class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                                                    <thead
                                                        class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">ID</th>
                                                            <th scope="col" class="px-6 py-3">Articles</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($tag->articles as $article)
                                                            <tr
                                                                class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                                                <td class="px-6 py-4">
                                                                    {{ $article->id }}
                                                                </td>
                                                                <td scope="row"
                                                                    class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                                                    {{ $article->title }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            {{-- / Article Table --}}
                                        </div>
                                    </div>
                                    {{-- / Project Component --}}
                                @endforeach
                            </div>
                        </div>
                    </section>
                    {{-- Ende of Content --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
