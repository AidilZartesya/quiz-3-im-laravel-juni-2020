@extends('layouts.master')

@section('content')

<div class="ml-3">
	<h1> ARTICLE </h1>

	<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Tag</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($articles as $key => $article)
      <tr>
        <td> {{ $key + 1 }} </td>
        <td> {{ $article->judul }} </td>
        <td> {{ $article->isi }} </td>
        <td> {{ $article->tag }} </td>
        <td>
        	<a href="/article/{{$article->id}}" class="btn btn-sm btn-info">show</a>
        	<a href="/article/{{$article->id}}/edit" class="btn btn-sm btn-success">edit</a>
        	<form action="/article/{{$article->id}}" method="post" style="display: inline">
        		@csrf
        		@method('DELETE')
        		<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  	<a href="/article/create" class="btn btn-primary">
		Create new Article
	</a>
</div>

@endsection

@push('scripts')

    <script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
    </script>

@endpush