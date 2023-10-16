<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Создайте новую тему и обсуждайте ее с другими участниками!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 container">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg block1">
                <button class="child {{request()->is('rules') ? 'active' : ''}}" onclick='window.location.href="{{ route('rules') }}";'>Правила форума</button>
                <button class="child {{request()->is('category/Автомобили') ? 'active' : ''}}"  onclick='window.location.href="{{ route('category', ['category' => 'Автомобили']) }}";'>Автомобили</button>
                <button class="child {{request()->is('category/Компьютеры') ? 'active' : ''}}" onclick='window.location.href="{{ route('category', ['category' => 'Компьютеры']) }}";'>Компьютеры</button>
                <button class="child {{request()->is('category/Квартиры') ? 'active' : ''}}" onclick='window.location.href="{{ route('category', ['category' => 'Квартиры']) }}";'>Квартиры</button>
                <button class="child {{request()->is('category/Города') ? 'active' : ''}}" onclick='window.location.href="{{ route('category', ['category' => 'Города']) }}";'>Города</button>
                <button class="child {{request()->is('category/Путешествия') ? 'active' : ''}}" onclick='window.location.href="{{ route('category', ['category' => 'Путешествия']) }}";'>Путешествия</button>
                <button class="child {{request()->is('category/Игры') ? 'active' : ''}}" onclick='window.location.href="{{ route('category', ['category' => 'Игры']) }}";'>Игры</button>
                <button class="child {{request()->is('category/Антиквариат') ? 'active' : ''}}" onclick='window.location.href="{{ route('category', ['category' => 'Антиквариат']) }}";'>Антиквариат</button>
                <button class="child {{request()->is('category/Новинки') ? 'active' : ''}}" onclick='window.location.href="{{ route('category', ['category' => 'Новинки']) }}";'>Новинки</button>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg block2">
                    {{ $slot }}
            </div>
        </div>
    </div>
</x-app-layout>
