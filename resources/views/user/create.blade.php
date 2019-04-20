@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			

<form action="{{url('users')}}" method="post">
	 {{csrf_field()}}

	<div class="form-group  @if($errors->get('login'))has-error @endif">
		<label for="">Login :</label>
			
	<input type="text" name="login" class="form-control" value="{{old('login')}}">

	            @if($errors->get('login'))
            @foreach($errors->get('login') as $message)

             {{$message}}
            @endforeach

            @endif
</div>

<div class="form-group @if($errors->get('password'))has-error @endif">
		<label for="">Password :</label>
		<input type="text" name="password" class="form-control" value="{{old('password')}}">

		            @if($errors->get('password'))
            @foreach($errors->get('password') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>

<div class="form-group  @if($errors->get('role_id'))has-error @endif">
        <label for="">Role :</label>
        <input type="text" name="role_id" class="form-control" value="{{old('role_id')}}">

                    @if($errors->get('role_id'))
            @foreach($errors->get('role_id') as $message)

             {{$message}}
            @endforeach

            @endif
            
</div>

<div class="form-group  @if($errors->get('nom'))has-error @endif">
		<label for="">Nom :</label>
		<input type="text" name="nom" class="form-control" value="{{old('nom')}}">

		            @if($errors->get('nom'))
            @foreach($errors->get('nom') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>

<div class="form-group  @if($errors->get('prenom'))has-error @endif">
		<label for="">Prenom :</label>
		<input type="text" name="prenom" class="form-control" value="{{old('prenom')}}">

		            @if($errors->get('prenom'))
            @foreach($errors->get('prenom') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>
<div class="form-group  @if($errors->get('sex'))has-error @endif">
		<label for="">sex :</label>
		<input type="text" name="sex" class="form-control" value="{{old('sex')}}">

		            @if($errors->get('sex'))
            @foreach($errors->get('sex') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>

<div class="form-group  @if($errors->get('email'))has-error @endif">
		<label for="">E-mail :</label>
		<input type="text" name="email" class="form-control" value="{{old('email')}}">

		            @if($errors->get('email'))
            @foreach($errors->get('email') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>
<div class="form-group  @if($errors->get('telephone'))has-error @endif">
		<label for="">Telephone :</label>
		<input type="text" name="telephone" class="form-control" value="{{old('telephone')}}">

		            @if($errors->get('telephone'))
            @foreach($errors->get('telephone') as $message)

             {{$message}}
            @endforeach

            @endif
			
</div>


<div class="form-group">
		<label for=""></label>
			
	<input type="submit" value="Enregistrer" class="form-control btn btn-primary">
</div>
<a href="{{url('users')}}" class="form-control btn btn-warning">Retour</a>
</form>



		</div>
	</div>
</div>




@endsection