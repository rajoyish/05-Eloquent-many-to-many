<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">{{ __('Roles') }}</h2>
            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                href="#">
                {{ __('New Role') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Content --}}
                    <div class="relative overflow-x-auto">

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-2">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        Roles
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        Users Count
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        Created at
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-2">
                                            {{ $role->id }}
                                        </td>
                                        <td scope="row"
                                            class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $role->name }}
                                        </td>
                                        <td class="px-6 py-2">
                                            <span
                                                class="bg-green-100 px-2 mx-1 py-0.5 text-green-600 font-medium text-xs rounded-lg">
                                                {{ $role->users->count() }}
                                            </span>

                                        </td>
                                        <td class="px-6 py-2">
                                            {{ $role->created_at }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- Ende of Content --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
