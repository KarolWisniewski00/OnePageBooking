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
                <div class="mb-8 bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-300 focus:bg-gray-700 dark:focus:bg-gray-300 active:bg-gray-900 dark:active:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            <i class="fa-solid fa-chevron-left mr-2"></i>Powrót
                        </a>
                        <div class="flex flex-row justify-between items-center">
                            <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900 dark:text-gray-100">
                                Dodaj nowe mieszkanie
                            </h1>
                        </div>

                        <!-- Formularz tworzenia mieszkania -->
                        <form action="{{ route('flat.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- Ochrona CSRF -->

                            <!-- Nazwa mieszkania -->
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 dark:text-gray-300">Nazwa</label>
                                <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-gray-300 dark:border-gray-800" required>
                            </div>

                            <!-- Link -->
                            <div class="mb-4">
                                <label for="link" class="block text-gray-700 dark:text-gray-300">Link</label>
                                <input type="url" id="link" name="link" class="w-full px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-gray-300 dark:border-gray-800" required>
                            </div>

                            <!-- Adres -->
                            <div class="mb-4">
                                <label for="adress" class="block text-gray-700 dark:text-gray-300">Adres</label>
                                <input type="text" id="adress" name="adress" class="w-full px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-gray-300 dark:border-gray-800" required>
                            </div>

                            <!-- Opis -->
                            <div class="mb-4">
                                <label for="description" class="block text-gray-700 dark:text-gray-300">Opis</label>
                                <textarea id="description" name="description" class="w-full px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-gray-300 dark:border-gray-800" rows="4" required></textarea>
                            </div>

                            <!-- Zdjęcia -->
                            <div class="grid gap-5 grid-cols-5">
                                @for($i = 1; $i <= 22; $i++)
                                
                                    <div class="mb-4">
                                    <label for="foto{{ $i }}" class="block text-gray-700 dark:text-gray-300">Zdjęcie {{ $i }}</label>
                                    <input type="file" id="foto{{ $i }}" name="foto{{ $i }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-gray-300 dark:border-gray-800" accept="image/*" @if($i < 5) {{'required'}} @endif>
                            </div>
                            <script>
                                document.getElementById('foto{{ $i }}').addEventListener('change', function(event) {
                                    var file = event.target.files[0];
                                    if (file && file.size > 2048 * 1024) { // 2048 KB to 2 MB
                                        alert('Plik jest za duży! Maksymalny rozmiar to 2 MB.');
                                        event.target.value = ''; // Czyści wybrany plik
                                    }
                                });
                            </script>
                            @endfor
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