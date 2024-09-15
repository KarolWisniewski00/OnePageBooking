<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dodaj Mieszkanie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <!--WIDGET FLAT-->
                <div class=" bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-300 focus:bg-gray-700 dark:focus:bg-gray-300 active:bg-gray-900 dark:active:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            <i class="fa-solid fa-chevron-left mr-2"></i>Powrót
                        </a>
                        <div class="flex flex-row justify-between items-center">
                            <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900 dark:text-gray-100">
                                Edytuj {{$set->place}}
                            </h1>
                        </div>

                        <!-- Formularz tworzenia mieszkania -->
                        <form action="{{route('setting.update', $set)}}" method="POST">
                            @csrf <!-- Ochrona CSRF -->
                            @method('PUT')
                            <!-- Nazwa mieszkania -->
                            <div class="mb-4">
                                <label for="value" class="block text-gray-700 dark:text-gray-300">Zawartość</label>
                                <input type="text" id="value" name="value" value="{{$set->value}}" class="w-full px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-gray-300 dark:border-gray-800" required>
                            </div>

                            <!-- Przycisk zapisu -->
                            <div class="mt-8 flex justify-end space-x-4">
                                <!-- Green button for marking as completed -->
                                <button type="summit" class="inline-flex items-center px-4 py-2 bg-green-600 dark:bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 dark:hover:bg-green-400 focus:bg-green-700 dark:focus:bg-green-400 active:bg-green-800 dark:active:bg-green-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    <i class="fa-solid fa-check mr-2"></i>Zapisz
                                </button>

                                <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 bg-red-600 dark:bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 dark:hover:bg-red-400 focus:bg-red-700 dark:focus:bg-red-400 active:bg-red-800 dark:active:bg-red-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    <i class="fa-solid fa-trash mr-2"></i>Anuluj
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--END WIDGET TASK-->
            </div>
        </div>
    </div>
</x-app-layout>