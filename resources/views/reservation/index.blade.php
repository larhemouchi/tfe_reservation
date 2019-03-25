@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-ms-12">
			<h1> La liste des reservations</h1>
				  <div class="pull-left">
            <a href="{{url('reservations/create')}}" class="btn btn-warning"> Créer une reservation </a>
        
        </div> 
<table class="table">
	
<head>
	<tr>
		<th>Id representation</th>
		
		<th>Tarif Total</th>
		<th>Nombre de place Reservé</th>
		<th>Id paiement</th>
		<th>Date de Réservation </th>
		<th>Action </th>
	</tr>
</head>
<body>
	
	@foreach($reservations as $reservation)
	<tr>
		<td>{{$reservation->id_representation}}</td>
		<td>{{$reservation->tarif_total}}</td>
		<td>{{$reservation->nbre_place_reserve}}</td>
		<td>{{$reservation->id_paiement}}</td>
		<td>{{$reservation->date_reservation}}</td>
		<td>


			

<form action="{{url('reservations/'.$reservation->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">

			{{csrf_field()}}
			{{method_field('DELETE')}}

			<a href="{{url('reservations',$reservation->id)}}" class="btn btn-primary">Afficher  </a>

			
			
		<a href="{{url('reservations/'.$reservation->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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