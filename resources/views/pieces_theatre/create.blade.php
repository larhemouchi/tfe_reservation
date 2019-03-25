@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			

<form action="{{url('pieces_theatres')}}" method="post" enctype="multipart/form-data" >
	 {{csrf_field()}}

	<div class="form-group  @if($errors->get('slug'))has-error @endif">
		<label for="">Slug :</label>
			
	<input type="text" name="slug" class="form-control" value="{{old('slug')}}">

	            @if($errors->get('slug'))
            @foreach($errors->get('slug') as $message)

             {{$message}}
            @endforeach

            @endif
</div>

<div class="form-group @if($errors->get('titre'))has-error @endif">
		<label for="">Titre :</label>
		<input type="text" name="titre" class="form-control" value="{{old('titre')}}">

		            @if($errors->get('titre'))
            @foreach($errors->get('titre') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>
    <div class="form-group @if($errors->get('image_poster'))has-error @endif">
            <label for="">Image poster :</label>       
        <input type="file" name="image_poster" width="304" height="236" >
        

            @if($errors->get('image_poster'))
            @foreach($errors->get('image_poster') as $message)

             {{$message}}
            @endforeach

            @endif

     </div> 

<div class="form-group  @if($errors->get('description'))has-error @endif">
		<label for="">Description :</label>
		<input type="text" name="description" class="form-control" value="{{old('description')}}">

		            @if($errors->get('description'))
            @foreach($errors->get('description') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>



<div class="form-group">
		<label for=""></label>
			
	<input type="submit" value="Enregistrer" class="form-control btn btn-primary">
</div>
<a href="{{url('pieces_theatres')}}" class="form-control btn btn-warning">Retour</a>
</form>



		</div>
	</div>
</div>










@endsection