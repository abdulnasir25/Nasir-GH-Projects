@extends('layouts.app')


@section('content')
	<h2>Upload Photo</h2>
	{!! Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    	{{ Form::text('title', '', ['placeholder' => 'Album Name']) }}
    	{{ Form::textarea('description', '', ['placeholder' => 'Photo Description']) }}
    	{{ Form::hidden('album_id', $album_id) }}
    	{{ Form::file('photo') }}
    	{{ Form::submit('submit') }}
	{!! Form::close() !!}
@endsection