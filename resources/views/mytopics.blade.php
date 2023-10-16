<x-app-layout>
    <div class="mytopics">
        @if ($count == 0)
            <div class="category">
                <p>У вас нет созданных тем для обсуждения!</p>
            </div>
        @else
            @foreach ($topics as $topic)
                <div class="mytopic"> 
                    <span>{{ $topic->topic }}</span> <a href="{{ route('thistopic', ['id' => $topic->id]) }}" class="child1"> - перейти к теме</a>
                    <p class="child2">{{ $topic->author}} - {{$topic->created_at}}</p>
                    <a href=" {{ route('edit', ['id' => $topic->id]) }}" class="child3">Редактировать</a>
                </div>
            @endforeach
        @endif
    </div>
</x-app-layout>