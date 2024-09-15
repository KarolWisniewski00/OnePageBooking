<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mieszkania') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <!--WIDGET FLAT-->
                <div class="mb-8 bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                        <div class="flex flex-row justify-between items-center">
                            <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900 dark:text-gray-100">
                                Mieszkania
                            </h1>
                            <a href="{{route('flat.create')}}" class="mt-8 mb-4 inline-flex items-center justify-center w-10 h-10 mr-2 text-green-100 transition-colors duration-150 bg-green-500 rounded-full focus:shadow-outline hover:bg-green-600">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Nazwa
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Adres
                                        </th>
                                        <!--
                                        <th scope="col" class="px-6 py-3">
                                            Edycja
                                        </th>
                                        -->
                                        <th scope="col" class="px-6 py-3">
                                            Usuwanie
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($flats as $flat)
                                    <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                        <td class="px-6 py-4">
                                            {{$flat->name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$flat->adress}}
                                        </td>
                                        <!--
                                        <td class="px-6 py-4">
                                            <a href="" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                        -->
                                        <td class="px-6 py-4">
                                            <form action="{{route('flat.delete', $flat)}}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć to mieszkanie?');">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Paginacja -->
                        <div class="mt-4">
                        </div>
                        <div class="flex flex-row justify-between items-center">
                            <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900 dark:text-gray-100">
                                Ustawienia zawartości
                            </h1>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Uuid
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Miejsce
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Typ
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Zawartość
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Edycja
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sets as $set)
                                    @if($set->type == 'photo')
                                    <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                        <td class="px-6 py-4">
                                            {{$set->uuid}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$set->place}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$set->type}}
                                        </td>
                                        <td class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4">
                                            <!--
                                            <a href="{{route('setting.edit',$set)}}" class="text-white bg-emerald-500 hover:bg-emerald-600 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>-->
                                        </td>
                                    </tr>
                                    @else
                                    <tr class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                                        <td class="px-6 py-4">
                                            {{$set->uuid}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$set->place}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$set->type}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$set->value}}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{route('setting.edit',$set)}}" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--END WIDGET TASK-->
            </div>
        </div>
    </div>
</x-app-layout>