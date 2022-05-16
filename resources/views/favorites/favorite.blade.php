@if (Auth::user()->is_favorite($micropost->id))
    {{-- アンフォローボタンのフォーム --}}
    {!! Form::open(['route' => ['micropost.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfollow', ['class' => "btn btn-danger btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {{-- フォローボタンのフォーム --}}
    {!! Form::open(['route' => ['micropost.favorite', $micropost->id]]) !!}
        {!! Form::submit('Follow', ['class' => "btn btn-primary btn-sm"]) !!}
    {!! Form::close() !!}
@endif