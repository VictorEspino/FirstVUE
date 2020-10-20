<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Con conexion a DB') }}
        </h2>
    </x-slot>

    
    <div id="app">
        <db_pensamiento-master></db_pensamiento-master>
    </div>
    <script src="{!! asset('js/app.js') !!}"></script>
</x-app-layout>
