@extends('layouts.app')

@section('content')

 <h1>タスクの詳細ページ</h1>

    <p>タスク:<a href="mailto:"></a>{{ $task->content }}</p>
     <p>ステータス:<a href="mailto:"></a>{{ $task->status }}</p>
    
      {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id]) !!}
       {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}


@endsection