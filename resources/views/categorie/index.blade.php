@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-ms-12">
			<h1> La liste des categories</h1>
				<div class="pull-left">
			<a href="{{url('categories/create')}}" class="btn btn-warning"> Créer un categorie </a>
		
		</div>
<table class="table">
	
<head>
	<tr>
		
		<th>Nom de Categorie</th>
     	<th>Prix de Categorie</th>
    
		<th>Action </th>
	</tr>
</head>
<body>
	
	@foreach($categories as $categorie)
	<tr>
		
		<td>{{$categorie->nom_categorie}}</td>
		<td>{{$categorie->prix_categorie}}</td>
	

		<td>


			

<form action="{{url('categories/'.$categorie->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">

			{{csrf_field()}}
			{{method_field('DELETE')}}

			<a href="{{url('categories',$categorie->id)}}" class="btn btn-primary">Afficher  </a>

			
			
		<a href="{{url('categories/'.$categorie->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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