@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			

<form action="{{url('representations')}}" method="post">
	 {{csrf_field()}}

	<div class="form-group  @if($errors->get('id_piece_theatre'))has-error @endif">
		<label for="">Id piece theatre :</label>
			
	<input type="text" name="id_piece_theatre" class="form-control" value="{{old('id_piece_theatre')}}">

	            @if($errors->get('id_piece_theatre'))
            @foreach($errors->get('id_piece_theatre') as $message)

             {{$message}}
            @endforeach

            @endif
</div>



     <div class="form-group @if($errors->get('date_rep')) has-error @endif">
            <label for="">Date de representation :</label>        
        <input type="date" name="date_rep" class="form-control" value="{{old('date_rep')}}">
        @if($errors->get('date_rep'))
            @foreach($errors->get('date_rep') as $message)

             {{$message}}
            @endforeach

            @endif

     	
     </div>
     <div class="form-group @if($errors->get('heure_rep')) has-error @endif">
            <label for="">Heure de representation :</label>        
        <input type="time" name="heure_rep" class="form-control" value="{{old('heure_rep')}}">
        @if($errors->get('heure_rep'))
            @foreach($errors->get('heure_rep') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
     <div class="form-group  @if($errors->get('id_salle'))has-error @endif">
        <label for="">Id salle :</label>
        <input type="text" name="id_salle" class="form-control" value="{{old('id_salle')}}">

             @if($errors->get('id_salle'))
            @foreach($errors->get('id_salle') as $message)

             {{$message}}
            @endforeach

            @endif

    </div>


<div class="form-group">
		<label for=""></label>
			
	<input type="submit" value="Enregistrer" class="form-control btn btn-primary">
</div>
<a href="{{url('representations')}}" class="form-control btn btn-warning">Retour</a>
</form>



		</div>
	</div>
</div>




@endsection