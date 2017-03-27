@extends('layout.layout')


@section('content')
<form action="/store" method="post">
    {{csrf_field()}}
    Title:<br>
    <input type="text" name="title"><br>
    Body:<br>
    <input type="text" name="body"><br><br>
    <button type="submit" >Add</button>
</form>


    <div class="alert alert-error">
      <ul>
          @foreach($errors->all() as $er)
          <li>{{$er}}</li>
              @endforeach
      </ul>
    </div>
    @endsection