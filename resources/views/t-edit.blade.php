@extends('layouts.app')

@section('title','Редактирование :: Телеграф')

@section('content')
    <form action="{{ route('t.update', ['t' => $t->id]) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="txtAuthor" class="form-label">Автор:</label>
            <input type="text" name="author" id="txtAuthor" class="form-control" value="{{ $t->author }}">
        </div>
        <div class="mb-3">
            <label for="txtTitle" class="form-label">Тема:</label>
            <input type="text" name="title" id="txtTitle" class="form-control" value="{{ $t->title }}">
        </div>
        <div class="mb-3">
            <label for="txtTitle" class="form-label">Текст сообщения:</label>
            <textarea name="text" id="txtContent" cols="30" rows="10" class="form-control">{{ $t->text }}</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Сохранить">
    </form>
@endsection('content')
