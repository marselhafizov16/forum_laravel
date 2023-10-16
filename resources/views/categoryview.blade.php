<x-main>
    @if ($count == 0)
        <div class="category">
            <p>По данной категории пока нет тем для обсуждения. Будьте первым!</p>
            <a class="link" href="{{ route('createtopic')}}">Создайте тему для обсуждения</a>
        </div>
    @else
        @foreach ($topics as $topic)
            <div class="topic">
                <a href="{{ route('thistopic', ['id' => $topic->id]) }}" class="topicmain">{{ $topic->topic }}</a>
                <p>{{ $topic->author}} - {{$topic->created_at}}</p>
            </div>
        @endforeach
        <div class="topiclink">
            {{ $topics->links() }}
        </div>
    @endif
</x-main>