<x-app-layout>
    <div class="thistopic">
        <div class="topictext"> 
            <p>{{ $topic->topic }}</p>
            <span><a href="{{ route('profileview', ['user_id' => $topic->user_id]) }}">{{ $topic->author }}</a> - {{ $topic->created_at }}</span>
        </div>
        <div class="topiccomments">
            <div class="createcomment">
                <form action="{{ route('commentcreate') }}" method="get">
                    <textarea class="commentarea" name="comment" cols="30" rows="3"></textarea>
                    <input type="hidden" name="id" value="{{ $topic->id }}">
                    <input class="commentbutton" type="submit" value="Оставить свой комментарий">
                </form>
            </div>
            <div class="allcomments">            
            @if ($count == 0)
                <div class="category">
                    <p>Здесь пока нет комментариев!</p>
                </div>
            @else
            <p>Все комментарии:</p>
                @foreach ($comments as $comment)
                    <div class="comment">
                        <p class="child1">{{ $comment->comment }}</p>
                        <p class="child2">{{ $comment->author}} - {{$comment->created_at}}</p>
                    </div>
                @endforeach
                <div class="commentlink">
                    {{ $comments->links() }}
                </div>
            @endif
            </div>
        </div>
    </div>
</x-app-layout>