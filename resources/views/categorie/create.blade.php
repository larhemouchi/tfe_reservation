@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			
<form action="{{url('categories')}}" method="post" enctype="multipart/form-data" >
	 {{csrf_field()}}

	<div class="form-group  @if($errors->get('nom_categorie'))has-error @endif">
		<label for="">Nom de categorie:</label>
			
	<input type="text" name="nom_categorie" class="form-control" value="{{old('nom_categorie')}}">

	            @if($errors->get('nom_categorie'))
            @foreach($errors->get('nom_categorie') as $message)

             {{$message}}
            @endforeach

            @endif
</div>

<div class="form-group @if($errors->get('prix_categorie'))has-error @endif">
		<label for="">Prix categorie:</label>
		<input type="text" name="prix_categorie" class="form-control" value="{{old('prix_categorie')}}">

		            @if($errors->get('prix_categorie'))
            @foreach($errors->get('prix_categorie') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>



<div class="form-group">
		<label for=""></label>
			
	<input type="submit" value="Enregistrer" class="form-control btn btn-primary">
</div>
<a href="{{url('categories')}}" class="form-control btn btn-warning">Retour</a>
</form>



		</div>
	</div>
</div>




@endsection