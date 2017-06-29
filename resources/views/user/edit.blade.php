@extends('layout.master')

@section('title', 'Editando User')

@section('content')

	<h1>Editando User no Blog</h1>

	{{ Form::model($user, ['method' => 'PATCH','action' => ['UserController@update', $user->id]]) }}
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, array('placeholder'=>'Digite seu nome aqui')) }}<br />	
		{{ Form::label('username', 'username:') }}
		{{ Form::text('username', null, array('placeholder'=>'Digite seu usernome aqui')) }}<br />	
		

		{{ Form::label('about', 'Sobre: ') }}<br />
		{{Form::textarea('about')}}<br />


		
		{{ Form::label('email', 'E-mail:') }}
		{{ Form::text('email', null, array('placeholder'=>'exemplo@seudominio.com')) }}<br />
		{{ Form::label('password', 'Senha:') }}
		{{ Form::text('password', null, array('placeholder'=>'Digite senha')) }}<br />	
		

		{{Form::submit('Enviar')}}
		{{link_to_action('UserController@index', 'Lista de Users')}}
	{{ Form::close()}}

@endsection
