@extends('layout')

@section('content')

  <form action="/todo" method='post'>
    <div>
        <input type='text' name='title'>
    </div>
    <div>
        <input type='text' name='body'>
    </div>
    <div>
        <input type='text' name='title'>
    </div>

    <button>Submit</button>
     <button>Reset</button>
  </form>