@extends('layouts.master')

@section('content')
	<div class="ml-3">
		<h3>Detail Article</h3>
		<p>Judul : {{$article->judul}} </p>
		<p>Isi : {{$article->isi}} </p>
		<p>slug : {{ $article->slug }} </p>
		<p>Tag : {{$article->tag}} </p>
	</div>
	 <a href="/article" class="btn btn-primary">
		Back
	</a>
@endsection