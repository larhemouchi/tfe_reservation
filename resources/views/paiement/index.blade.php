@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-ms-12">
			<h1> La liste des paiements</h1>
						<div class="pull-left">
			<a href="{{url('paiements/create')}}" class="btn btn-warning"> Créer un paiement </a>
		
		</div>	
<table class="table">
	
<head>
	<tr>
		
		
		<th>Numéro de compte</th>
		<th>Numéro de carte</th>
		<th>Nom</th>
		<th>Prénom</th>
		<th>Date d'expiration</th>
		<th>Type de carte</th>
		<th>Action </th>
	</tr>
</head>
<body>
	
	@foreach($paiements as $paiement)
	<tr>
		
		<td>{{$paiement->numero_compte}}</td>
		<td>{{$paiement->numero_carte}}</td>
		<td>{{$paiement->nom}}</td>
		<td>{{$paiement->prenom}}</td>
		<td>{{$paiement->date_expiration}}</td>
		<td>{{$paiement->type_carte}}</td>
		<td>


			

<form action="{{url('paiements/'.$paiement->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">

			{{csrf_field()}}
			{{method_field('DELETE')}}

			<a href="{{url('paiements',$paiement->id)}}" class="btn btn-primary">Afficher  </a>

			
			
		<a href="{{url('paiements/'.$paiement->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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