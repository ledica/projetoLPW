@extends('layout.master')

@section('content')
	<h1>Criando novo Usuário</h1>
	{{ Form::open(array('action' => 'UserController@store')) }}

		
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, array('placeholder'=>'Digite seu nome aqui')) }}<br />	
		
		{{ Form::label('username', 'User name:') }}
		{{ Form::text('username', null, array('placeholder'=>'Digite seu nome de usuário aqui')) }}<br />

		{{ Form::label('about', 'Sobre: ') }}<br />
		{{Form::textarea('about')}}<br />


		
		{{ Form::label('email', 'E-mail:') }}
		{{ Form::text('email', null, array('placeholder'=>'exemplo@seudominio.com')) }}<br />
		{{ Form::label('password', 'Senha:') }}
		{{ Form::text('password', null, array('placeholder'=>'Digite senha')) }}<br />	
		
		

		{{Form::submit('Enviar')}}
		{{link_to_action('UserController@index', 'Banco de Dados')}}
	{{ Form::close()}}
@endsection
