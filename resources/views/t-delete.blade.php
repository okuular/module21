@extends('layouts.app')

@section('title', 'Удаление :: Телеграф')

@section('content')
   <p>Автор: {{ $t->author }}</p>
   <p>Тема: {{ $t->title }}</p>
   <form action="{{ route('t.destroy', ['t' => $t->id]) }}" method="post">
       @csrf
       @method('DELETE')
       <input type="submit" class="btn btn-danger" value="Удалить">
   </form>
@endsection('content')
