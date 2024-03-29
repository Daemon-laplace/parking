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
                    <div class="admin">
                        <button class="bg-blue-500 h-20 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                            Liste d'attente
                        </button>
                        <button class="bg-blue-500 h-20 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                            Utilisateurs
                        </button>


                    </div>

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
