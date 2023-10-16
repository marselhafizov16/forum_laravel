<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Выберите категорию и тему и обсуждайте ее с другими участниками!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 container">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg block1">
                <button class="child active" onclick='window.location.href="{{ route('rules') }}";'>Правила форума</button>
                <button class="child" onclick='window.location.href="{{ route('category', ['category' => 'Автомобили']) }}";'>Автомобили</button>
                <button class="child" onclick='window.location.href="{{ route('category', ['category' => 'Компьютеры']) }}";'>Компьютеры</button>
                <button class="child" onclick='window.location.href="{{ route('category', ['category' => 'Квартиры']) }}";'>Квартиры</button>
                <button class="child" onclick='window.location.href="{{ route('category', ['category' => 'Города']) }}";'>Города</button>
                <button class="child" onclick='window.location.href="{{ route('category', ['category' => 'Путешествия']) }}";'>Путешествия</button>
                <button class="child" onclick='window.location.href="{{ route('category', ['category' => 'Игры']) }}";'>Игры</button>
                <button class="child" onclick='window.location.href="{{ route('category', ['category' => 'Антиквариат']) }}";'>Антиквариат</button>
                <button class="child" onclick='window.location.href="{{ route('category', ['category' => 'Новинки']) }}";'>Новинки</button>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg block2">
                    <ul>
                        <li>Темы постов должны совпадать с категориями.</li>
                        <li>Запрещена какая-либо коммерческая реклама в постах и комментариях.</li>
                        <li>Запрещено оскорблять других пользователей.</li>
                        <li>Приветствуется адекватная и обоснованная криритка.</li>
                        <li>Запрещен флуд в комментариях.</li>
                        <li>Форум является бесплатным, за размещение тем плата не взимается.</li>
                        <li>Все пользователи имеют равные права.</li>
                        <li>Правила распространияюся на всех пользователей.</li>
                        <li>За нарушение правил пользователь будет забанен.</li>
                        <li>Личная информация пользователей не распространяется</li>
                        <li>Создавайте только актуальные темы и актуальные ответы в комментариях.</li>
                    </ul>
            </div>
        </div>
    </div>
</x-app-layout>
