@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-ms-12">
			<h1> La liste des sieges</h1>
				<div class="pull-left">
			<a href="{{url('sieges/create')}}" class="btn btn-warning"> Créer un siege </a>
		
		</div>
<table class="table">
	
<head>
	<tr>
		<th>Id Salle</th>
		<th>Nom de siege</th>
		<th>Type de siege</th>
		<th>Prix de siege</th>
		<th>Action </th>
	</tr>
</head>
<body>
	
	@foreach($sieges as $siege)
	<tr>
		<td>{{$siege->id_salle}}</td>
		<td>{{$siege->nom_siege}}</td>
		<td>{{$siege->type_siege}}</td>
		<td>{{$siege->prix_siege}}</td>

		<td>


			

<form action="{{url('sieges/'.$siege->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">

			{{csrf_field()}}
			{{method_field('DELETE')}}

			<a href="{{url('sieges',$siege->id)}}" class="btn btn-primary">Afficher  </a>

			
			
		<a href="{{url('sieges/'.$siege->id.'/edit')}}" class="btn btn-success">Modifier  </a>


			<button type="submit" class="btn btn-danger">Supprimer  </a>
          </form>

		</td>
	</tr>
	@endforeach
</body>

</table>


		</div>
	</div>
</div>

@endsection