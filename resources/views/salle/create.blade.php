@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			

<form action="{{url('salles')}}" method="post" enctype="multipart/form-data" >
	 {{csrf_field()}}

	<div class="form-group  @if($errors->get('num_salle'))has-error @endif">
		<label for="">Numero salle :</label>
			
	<input type="text" name="num_salle" class="form-control" value="{{old('num_salle')}}">

	            @if($errors->get('num_salle'))
            @foreach($errors->get('num_salle') as $message)

             {{$message}}
            @endforeach

            @endif
</div>

<div class="form-group @if($errors->get('nbre_place'))has-error @endif">
		<label for="">Nombre de place :</label>
		<input type="text" name="nbre_place" class="form-control" value="{{old('nbre_place')}}">

		            @if($errors->get('nbre_place'))
            @foreach($errors->get('nbre_place') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>

<div class="form-group  @if($errors->get('images_salle'))has-error @endif">
		<label for="">Image de salle :</label>
		  <input type="file" name="images_salle" width="304" height="236" >

		            @if($errors->get('images_salle'))
            @foreach($errors->get('images_salle') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>

  

<div class="form-group">
		<label for=""></label>
			
	<input type="submit" value="Enregistrer" class="form-control btn btn-primary">
</div>
<a href="{{url('salles')}}" class="form-control btn btn-warning">Retour</a>
</form>




		</div>
	</div>
</div>










@endsection