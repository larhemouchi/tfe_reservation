@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-ms-12">
			<h1> La liste des pieces de theatre</h1>
				
						<div class="pull-left">
			<a href="{{url('pieces_theatres/create')}}" class="btn btn-warning"> Créer une pieéces de theatres </a>
		
		</div>	
</br>
<div class="row">
	</br>
	@foreach($pieces_theatres as $pieces_theatre)
  <div class="col-sm-6 col-md-4">  
      <div class="thumbnail">
    	<div class='panel panel-primary' >
      <img src="{{asset('storage/'.$pieces_theatre->image_poster)}}"class='img-responsive center-block' width='330' height='300'alt="picture">
      <div class="caption">
        <h3>Title: {{$pieces_theatre->titre}}</h3>
       
        <p><center><form action="{{url('pieces_theatres/'.$pieces_theatre->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">
			{{csrf_field()}}
			{{method_field('DELETE')}}	
		<a href="{{url('pieces_theatres/',$pieces_theatre->id)}}" class="btn btn-primary">Afficher</a>

		@if( Auth::check() )
			@if( Auth::user()->id_role == 1 )
			<a href="{{url('pieces_theatres/'.$pieces_theatre->id.'/edit')}}" class="btn btn-success">Modifier</a>


			<input type="submit" class="btn btn-danger" value="Supprimer"> 
		
@endif
		@endif
          </form></center>
        </p>
      </div>
    </div>
  </div> </div>
  @endforeach
</div>





		</div>
	</div>
</div>

@endsection