
@extends('layouts.masters.main')

@section('page-content')

    <div class="container">

    @include('layouts.partials.nav')

        @forelse($posts as $post)
            <div class="well">
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading"><a href="http://localhost/forumApple/public/question/{{$post->slug}}">{{ $post->title}}</a></h4>
                        <p class="text-right">By: {{ $post->user->name ?? 'None' }}</p>
                        <p>{{ $post->body }}</p>
                        <ul class="list-inline list-unstyled">
                            <li><span><i class="glyphicon glyphicon-calendar"></i> {{ $post->created_at->diffForHumans()}}</span></li>
                            <li>|</li>

                            @if( $post->replies->count() > 0)

                                <li> {{ $post->replies->count() }} Коментария</li>
                            
                            @else

                                <li>Будьте первым кто ответит</li>
                                
                            @endif

                            <li>|</li>

                            @if( $currentUser && $currentUser->id == $post->user_id )

                                <li><span><i class="glyphicon glyphicon-pencil"></i> <a href="{{ URL::route('get_edit_post', ['id' => $post->id]) }}">Редактировать</a></span></li>

                            @endif

                        </ul>
                    </div>

                    @if( $currentUser && $currentUser->id == $post->user_id )

                        {!! Form::open(['route' => 'delete_question', 'id' => 'delete-question-form', 'method' => 'DELETE', 'class' => 'text-right']) !!}

                            {!! Form::hidden('post_id', $post->id) !!}

                            {!! Form::button('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}

                        {!! Form::close() !!}

                    @endif

                </div>
            </div>
        @empty
            <p>Вопросы не найдены</p>
        @endforelse

        {!! $posts->appends(Request::all())->render() !!}

    </div> <!-- /container -->
@stop