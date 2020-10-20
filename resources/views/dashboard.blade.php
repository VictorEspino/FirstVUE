<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Solo Front End') }}
        </h2>
    </x-slot>

    
    <div id="app">
        <pensamiento-master></pensamiento-master>
    </div>
    <script src="{!! asset('js/app.js') !!}"></script>
</x-app-layout>
