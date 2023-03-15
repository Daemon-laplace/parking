<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Parking') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="user">
                        <button class="bg-blue-500 h-20 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                            Réserver une place
                        </button>
                        <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Mes places
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
