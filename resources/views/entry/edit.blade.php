@extends('layout.master')

@section('title', 'Editando Post no Blog')

@section('content')

	<h1>Editando Post no Blog</h1>

	{{ Form::model($post, ['method' => 'PATCH','action' => ['EntryController@update', $post->id]]) }}

		{{ Form::label('title', 'Title do Post') }}
		{{ Form::text('title', null, array('placeholder'=>'Digite seu texto aqui')) }}<br />
		{{ Form::label('is_private', 'Post Privado?') }}
		{{ Form::checkbox('is_private', '1') }}<br />
		{{ Form::label('content', 'Conteúdo: ') }}<br />
		{{Form::textarea('content')}}<br />
		{{ Form::label('tag', 'Tag') }}
		{{ Form::text('tag', null, array('placeholder'=>'Digite sua Tag')) }}<br /><br />
		{{Form::submit('Enviar')}}
	{{ Form::close()}}

@endsection
