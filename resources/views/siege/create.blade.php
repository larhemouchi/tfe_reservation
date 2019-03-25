@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			
<form action="{{url('sieges')}}" method="post" enctype="multipart/form-data" >
	 {{csrf_field()}}

	<div class="form-group  @if($errors->get('id_salle'))has-error @endif">
		<label for="">Id Salle :</label>
			
	<input type="text" name="id_salle" class="form-control" value="{{old('id_salle')}}">

	            @if($errors->get('id_salle'))
            @foreach($errors->get('id_salle') as $message)

             {{$message}}
            @endforeach

            @endif
</div>

<div class="form-group @if($errors->get('nom_siege'))has-error @endif">
		<label for="">Nom siege :</label>
		<input type="text" name="nom_siege" class="form-control" value="{{old('nom_siege')}}">

		            @if($errors->get('nom_siege'))
            @foreach($errors->get('nom_siege') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>

<div class="form-group  @if($errors->get('type_siege'))has-error @endif">
        <label for="">Type de siege :</label>
        <input type="text" name="type_siege" class="form-control" value="{{old('type_siege')}}">

                    @if($errors->get('type_siege'))
            @foreach($errors->get('type_siege') as $message)

             {{$message}}
            @endforeach

            @endif
            
</div>

<div class="form-group  @if($errors->get('prix_siege'))has-error @endif">
		<label for="">Prix de siege :</label>
		<input type="text" name="prix_siege" class="form-control" value="{{old('prix_siege')}}">

		            @if($errors->get('prix_siege'))
            @foreach($errors->get('prix_siege') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>



<div class="form-group">
		<label for=""></label>
			
	<input type="submit" value="Enregistrer" class="form-control btn btn-primary">
</div>
<a href="{{url('sieges')}}" class="form-control btn btn-warning">Retour</a>
</form>



		</div>
	</div>
</div>




@endsection