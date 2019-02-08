@extends('layout')


@section('content')

  {{-- <div>
        <table>
                <tr>
                <th>title</th>
                  <th>body</th> 
                  <th>date</th>
                  <th>status</th>
                </tr>
                <tr>
                 @foreach ($todos as $todo) 
                  <td> <a href="/todos/{{ $todo->id }}">{{$todo->title}} </a></td>
                  <td> {{$todo->body}} </td>
                  <td> {{ $todo->date}}</td> 
                  <td> {{$todo->status }} </td>
                 @endforeach
                </tr>
        </table>
  </div> --}}

<div>
  <ul>
    @foreach ($todos as $todo)
    <li> <a href="/todos/ {{ $todo->id }}"> {{ $todo->title}}</a>  {{$todo->date}}  {{$todo->status}} </li>

    @endforeach
  </ul>
</div>

@endsection