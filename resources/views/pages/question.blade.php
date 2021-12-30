@extends('layouts.masters.main')

@section('page-content')

  <div class="container">

      @include('layouts.partials.nav')

      @include('layouts.partials.form_errors')

      {!! Form::open(['id' => 'post-question-form']) !!}

        {!! Form::label('title', 'Заголовок') !!}
        {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-control', 'placeholder' => 'title', 'required']) !!}
        <br/>
        {!! Form::label('category', 'Категория') !!}
        <select name="category" class="form-control">

          @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }} </option>
          @endforeach
        </select>
        <br/>
        {!! Form::label('body', 'Вопрос') !!}
        {!! Form::textarea('body', null, ['id' => 'body', 'class' => 'form-control', 'placeholder' => 'Расскажите нам о своем вопросе', 'required']) !!}
        <br/>
        {!! Form::button('Опубликовать', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}

      {!! Form::close() !!}

  </div> <!-- /container -->
@stop