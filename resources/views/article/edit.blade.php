@extends('layouts.master')

@section('content')

<div class="ml-3">
    <form action="/article/{{$article->id}}" method="POST">
    @csrf
    @method('PUT')
      <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" value="{{$article->judul}}" placeholder="Enter judul" id="judul">
      </div>
      <div class="form-group">
        <label for="isi">Isi:</label>
        <input type="text" class="form-control" placeholder="Enter isi" name="isi" value="{{$article->isi}}" id="isi">
      </div>
      <div class="form-group">
        <label for="tag">Tag:</label>
        <input type="text" class="form-control" placeholder="Enter tag" name="tag" value="{{$article->tag}}" id="tag">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div> 

@endsection