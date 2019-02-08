@extends('layout')

@section('content')

<ul>
   <li> {{ $todo->id}} </li>
   <li> {{ $todo->title}} </li>
   <li> {{ $todo->body}}</li>
   <li> {{ $todo->date }} </li>
   <li> {{ $todo->status}}</li>
</ul>

@endsection