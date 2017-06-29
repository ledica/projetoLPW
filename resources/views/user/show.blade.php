@extends('layout.master')

@section('title', 'Exibindo Usuário')

@section('sidebar')

@endsection

@section('content')
<div class="mdl-grid">
	<div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
		<div class="mdl-card__title">
			<h2 class="mdl-card__title-text">ID: {{$user->id}} Nome: {{$user->name}}</h2>
		</div>
		<div class="mdl-card__supporting-text">
			<p>Userame: {{$user->username}}</p>
			About me: {{$user->about}}
		</div>
	</div>

	<table  class="mdl-cell mdl-cell--6-col">
		<thead>

			<tr>

				<th>Post</th>
				<th></th>
				<th></th>
				<th><a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">

					{{link_to_action('EntryController@create', 'Add Post')}}
				</a>
			</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($user->posts as $post)
		<tr>

			<td>{{ $post->title }}</td>

			<td>{{link_to_action('EntryController@show', 'Show', $post->id) }}</td>

			<td>{{link_to_action('EntryController@edit', 'Editar', $post->id) }}</td>

			<td>{{ Form::open(array('method' 
				=> 'DELETE', 'route' => array('entry.destroy', $post->id))) }}                       
				{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
		@endforeach
	</tbody>

</table>
@endsection


