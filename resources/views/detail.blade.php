@extends('layouts.app')

@section('title', $t->title)

@section('content')
   <div class="mb-3">
       <label for="txtAuthor" class="form-label">Автор:</label>
       <input type="text" name="author" id="txtAuthor" class="form-control" value="{{ $t->author }}" readonly>
   </div>
   <div class="mb-3">
       <label for="txtTitle" class="form-label">Тема:</label>
       <input type="text" name="title" id="txtTitle" class="form-control" value="{{ $t->title }}" readonly>
   </div>
   <div class="mb-3">
       <label for="txtTitle" class="form-label">Текст сообщения:</label>
       <textarea name="text" id="txtContent" cols="30" rows="10" class="form-control" readonly>{{ $t->text }}</textarea>
   </div>
   <p>Дата отправки: {{ $t->created_at }}</p>
   <a href="{{ route('index') }}" class="btn btn-outline-secondary">Назад</a>
@endsection('content')
