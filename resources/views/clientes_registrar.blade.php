<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registar Clientes') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    
                <form method="POST" action="/clientes/guardar">
                    @csrf
                    <label class="mt-3">Nombre</label>
                    <input type="text" name="contactFistName" class="form-control">

                    <label class="mt-3">Apellidos</label>
                    <input type="text" name="contactLastName" class="form-control">

                    <label class="mt-3">Teléfono</label>
                    <input type="text" name="phone" class="form-control">

                    <label class="mt-3">Ciudad</label>
                    <input type="text" name="city" class="form-control">

                    <button type="submit" class="btn btn-primary mt-4">Registrar </button>
                </form>
                
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
