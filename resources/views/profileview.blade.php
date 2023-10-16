<x-app-layout>
    <div class="prfileview">
        <p>Автора темы:</p>
        <hr>
        <p>Имя: {{ $user->name }}</p>
        <p>Почта: {{ $user->email }}</p>
        <p>Дата создания профиля: {{ $user->created_at }}</p>
    </div>
</x-app-layout>