@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステイタス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                   <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to tasklist</h1>
             {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection