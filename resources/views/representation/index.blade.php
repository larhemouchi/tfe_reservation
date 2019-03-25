@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-ms-12">
			<h1> La liste des representations</h1>
						<div class="pull-left">
			<a href="{{url('representations/create')}}" class="btn btn-warning"> Créer une representation  </a>
		
		</div>	
<table class="table">
	
<head>
	<tr>
		<th>Id piece theatre</th>
		<th>Date de representation </th>
		<th>Id Salle</th>
	
		<th>Action </th>
	</tr>
</head>
<body>
	
	@foreach($representations as $representation)
	<tr>
		<td>{{$representation->id_piece_theatre}}</td>
		<td>{{$representation->date_representation}}</td>
		<td>{{$representation->id_salle}}</td>
	
		
		<td>


			

<form action="{{url('representations/'.$representation->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">

			{{csrf_field()}}
			{{method_field('DELETE')}}

			<a href="{{url('representations',$representation->id)}}" class="btn btn-primary">Afficher  </a>

			
			
		<a href="{{url('representations/'.$representation->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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