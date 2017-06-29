@extends('layout.master')

@section('title','Lista de Posts')

@section('content')
<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
	<div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
		


		<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
			<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric"><h4 class="mdl-cell mdl-cell--12-col">Lista de Posts</h4></th>
					<th class="mdl-data-table__cell--non-numeric">Autor</th>
					<th class="mdl-data-table__cell--non-numeric">  

						{{link_to_action('EntryController@create', 'Novo Post', 
						array('class' => 'mdl-button mdl-js-button'))}}   
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($posts as $post)
				<tr>
					<td class="mdl-data-table__cell--non-numeric">
						{{link_to_action('EntryController@show', $post->title , $post->id) }}
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						{{ $post->user->name }}
					</td>
					<td class="mdl-data-table__cell--non-numeric">
						<div class="mdl-card__actions">

							{{ Form::open(array('method' 
							=> 'DELETE', 'route' => array('entry.destroy', $post->id))) }}  

							<a href="{{ url('/entry') }}/{{$post->id}}/edit" class="mdl-button mdl-js-button " >
								Edit
							</a>  
							
							{{ Form::submit('Delete',
							array('class' => 'mdl-button  mdl-js-button ')) }}
							{{ Form::close() }}
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</section>
@endsection
