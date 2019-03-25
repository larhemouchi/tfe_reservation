@extends('layouts.app')

@section('content')







<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            
     <form action="{{url('paiements')}}" method="post" enctype="multipart/form-data">
   {{csrf_field()}}

  <!--      <div class="form-group @if($errors->get('id_user'))has-error @endif">
            <label for="">ID user :</label>        
        <input type="text" name="id_user" class="form-control" value="{{old('id_user')}}">
        

            @if($errors->get('id_user'))
            @foreach($errors->get('id_user') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>-->
     <div class="form-group @if($errors->get('numero_compte'))has-error @endif">
            <label for="">Numéro de compte :</label>       
        <input type="text" name="numero_compte" class="form-control" value="{{old('numero_compte')}}">
        

            @if($errors->get('numero_compte'))
            @foreach($errors->get('numero_compte') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
       <div class="form-group @if($errors->get('numero_carte'))has-error @endif">
            <label for="">Numéro de carte :</label>       
        <input type="text" name="numero_carte" class="form-control" value="{{old('numero_carte')}}">
        

            @if($errors->get('numero_carte'))
            @foreach($errors->get('numero_carte') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
 
     <div class="form-group @if($errors->get('nom'))has-error @endif">
            <label for="">Nom :</label>       
        <input type="text" name="nom" class="form-control" value="{{old('nom')}}">
        

            @if($errors->get('nom'))
            @foreach($errors->get('nom') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
     <div class="form-group @if($errors->get('prenom'))has-error @endif">
            <label for="">Prenom :</label>       
        <input type="text" name="prenom" class="form-control" value="{{old('prenom')}}">
        

            @if($errors->get('prenom'))
            @foreach($errors->get('prenom') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
<div class="form-group @if($errors->get('date_expiration')) has-error @endif">
            <label for="">Date expiration :</label>        
        <input type="date" name="date_expiration" class="form-control" value="{{old('date_expiration')}}">
        @if($errors->get('date_expiration'))
            @foreach($errors->get('date_expiration') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>
<div class="form-group @if($errors->get('type_carte')) has-error @endif">
            <label for="">Type de carte :</label>       
        <input type="text" name="type_carte" class="form-control" value="{{old('type_carte')}}">
        @if($errors->get('type_carte'))
            @foreach($errors->get('type_carte') as $message)

             {{$message}}
            @endforeach

            @endif

     </div>

<div class="form-group">
                    
        <input type="submit" value="Enregistrer" class="form-control btn btn-primary">
     </div>

     </form>




        </div>
    </div>
</div>


@endsection