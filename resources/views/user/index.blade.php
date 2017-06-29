@extends('layout.master')

@section('title','Exibindo Usuário')


@section('content')
		<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
			<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric"><h4 class="mdl-cell mdl-cell--12-col">Lista de Usuários</h4></th>
					<th class="mdl-data-table__cell">
						<a href="{{ url('/user/create') }}" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add">
							<i class="material-icons" role="presentation">add</i>
							<span class="visuallyhidden">Criar novo user</span>
						</a>  
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
				<tr>
					<td class="mdl-data-table__cell--non-numeric">{{ $user->name }}</td>

					<td class="mdl-data-table__cell--non-numeric">
						{{ Form::open(array('method' 
							=> 'DELETE', 'route' => array('user.destroy', $user->id))) }}  
						<a href="{{ url('/user') }}/{{$user->id}}" class="mdl-button mdl-js-button " >
							Show
						</a>


						<a href="{{ url('/user') }}/{{$user->id}}/edit" class="mdl-button mdl-js-button " >
							Edit
						</a>  

						<a href="#" class="mdl-button mdl-js-button " >
						

							{{ Form::submit('Delete', array('class' => 'mdl-button mdl-js-button ')) }}

							{{ Form::close() }}
						</a>  
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</section>
@endsection

