@extends('layout.master')

@section('title', 'Exibindo Post')

@section('sidebar')

@endsection

@section('content')
<div class="mdl-grid">
	<div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
		<div class="mdl-card__title">
			<h2 class="mdl-card__title-text">Nome: {{$post->title}}</h2>
		</div>
		<div class="mdl-card__supporting-text">
			<p>{{$post->content}}</p>

			<p>Tag: {{$post->tag}} By: {{$post->user->name}} </p>
		</div>
	</div>
@endsection


