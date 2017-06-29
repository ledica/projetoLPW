@extends('layout.master')

@section('title','Criando entrada no Blog')

@section('content')

	<p>Criando entrada no Blog.</p>
	{{ Form::open(array('action' => 'EntryController@store')) }}


	    {{ Form::label('user_id', 'User:') }}
		{{ Form::text('user_id', null, array('placeholder'=>'Digite user_id aqui')) }}<br />	

		
		{{Form::label('title','Título do Post:')}}
		{{Form::text('title','xxx')}}
		{{Form::label('is_private','Post privado?')}}
		{{Form::checkbox('is_private', 1, true) }}
		{{Form::label('content','Conteúdo:')}}
</br>
		{{Form::textarea('content')}}
		{{ Form::label('tag', 'Tag') }}
		{{ Form::text('tag', null, array('placeholder'=>'Digite sua Tag')) }}<br /><br />
		{{Form::submit('Enviar!')}}
		{{link_to_action('EntryController@index','Entry')}}
	{{ Form::close()}}
@endsection
