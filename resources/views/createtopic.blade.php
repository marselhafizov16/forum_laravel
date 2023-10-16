<x-app-layout>
    <div class="createtopic">
        <form action=" {{ route('storetopic') }}" method="GET" class="formparrent">
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
            <textarea type="text" name="topic" class="inputchild inputchild2" cols="20" rows="5"></textarea>
            <input type="text" name="author" class="inputchild inputchild3" disabled value="{{ $name }}">
            <input type="submit" class="inputchild4">
        </form>
    </div>
</x-app-layout>