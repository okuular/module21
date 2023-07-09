@extends('layouts.app')

@section('title','Отправка сообщения :: Телеграф')

@section('content')
    <form action="{{ route('t.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="txtAuthor" class="form-label">Автор:</label>
            <input type="text" name="author" id="txtAuthor" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtTitle" class="form-label">Тема:</label>
            <input type="text" name="title" id="txtTitle" class="form-control">
        </div>
        <div class="mb-3">
            <label for="txtTitle" class="form-label">Текст сообщения:</label>
            <textarea name="text" id="txtContent" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Отправить">
    </form>
@endsection('content')
