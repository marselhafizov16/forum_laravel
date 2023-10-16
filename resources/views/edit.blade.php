<x-app-layout>
    <div class="edit">
        <div class="now">
            <p> Категория: {{ $topic->category }} </p>
            <p> Ваша тема: {{ $topic->topic }}</p>
        </div>
        <form action=" {{ route('editstore', ['id' => $topic->id]) }}" method="GET" class="formparrent">
        <p>Изменить категорию:</p>
            <select name="category" class="inputchild inputchild1">
                <option value="Автомобили">Автомобили</option>
                <option value="Компьютеры">Компьютеры</option>
                <option value="Квартиры">Квартиры</option>
                <option value="Города">Города</option>
                <option value="Путешествия">Путешествия</option>
                <option value="Игры">Игры</option>
                <option value="Антиквариат">Антиквариат</option>
                <option value="Новинки">Новинки</option>
            </select>
            <p>Изменить тему:</p>
            <textarea type="text" name="topic" class="inputchild inputchild2" cols="20" rows="5"></textarea>
            <input type="submit" class="inputchild4">
        </form>
    </div>
</x-app-layout>