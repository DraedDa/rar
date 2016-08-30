@extends('main')

@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>Les terrains</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('fields.create') }}" class="btn btn-lg btn-blog btn-primary btn-h1-spacing">Ajouter un terrain</a>
		</div>
		
		<hr>

		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>Titre</th>
						<th>Taille</th>
						<th>Adresse</th>
						<th>Actions</th>
					</thead>
						@foreach($fields as $field)
							
						@endforeach
					<tbody>
						<tr>
							<td>
								{{ $field->title }}
							</td>
							<td>
								{{ $field->size }}
							</td>
							<td>
								{{ $field->address }}
							</td>
							<td>
								Boutons Boutons
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection