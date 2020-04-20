@extends('layouts.app')
@section('content')
<div class="container">
    <h3>{{ $photo->title }}</h3>
    <p>{{ $photo->description }}</p>
    <small>Size: {{ $photo->size }} bytes</small>
    {{ Form::open (['action' => ['PhotosController@destroy', $photo->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger ml-1 float-right'])}}
    {{ Form::hidden ('_method', 'DELETE') }}
    <div>
        <a href="{{ route('album-show', $photo->album_id)}}" class="btn btn-info">Go Back</a>

    </div>
    {{ Form::close()}}

    <hr>
    <img src="../storage/albums/{{ $photo->album->id }}/{{ $photo->photo }}" alt="{{ $photo->photo }}" width="100%">
    <hr>
</div>

@endsection