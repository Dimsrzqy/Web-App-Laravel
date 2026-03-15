@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Task List</h1>
        <a href="{{url('/task/create')}}">Create New Task</a>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <h3>{{$task->name}}</h3>
                    <p>{{$task->description}}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection