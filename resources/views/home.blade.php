@extends('layouts.app')

@section('content')
<p><a href="{{ route('t.create') }}" class="btn btn-warning">Отправить сообщение</a></p>
    @if(count($tts) > 0)
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Отправитель</th>
                <th>Email</th>
                <th>Тема</th>
                <th>Дата отправки</th>
                <th>Текст сообщения</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tts as $t)
                <tr>
                    <td>{{ $t->author }}</td>
                    <td>{{ $t->user->email }}</td>
                    <td>{{ $t->title }}</td>
                    <td>{{ $t->created_at }}</td>
                    <td>{{ $t->text }}</td>
                    <td>
                        <a href="{{ route('t.edit', ['t' => $t->id]) }}" class="btn btn-outline-success">Редактировать</a>
                    </td>
                    <td>
                        <a href="{{ route('t.delete', ['t' => $t->id]) }}" class="btn btn-outline-danger">Удалить</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
