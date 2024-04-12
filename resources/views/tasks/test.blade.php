@extends('layouts.app')
 
@section('content')

@foreach($tasks as $task)

{{ $task->name}}
{{ $task->user_id }}
{{ $task->user->name }}
{{ $task->user->email }}
<br>

@endforeach
@endsection
