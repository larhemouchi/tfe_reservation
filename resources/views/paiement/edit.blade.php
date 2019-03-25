@extends('layouts.app')



@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            
     <form action="{{url('paiements/'.$paiement->id)}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">


   {{csrf_field()}}
<!--
        <div class="form-group">
            <label for="">Id user :</label>        
        <input type="text" name="id_user" class="form-control" value="{{$paiement->id_user}}">
     @if($errors->get('id_user'))
            @foreach($errors->get('id_user') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>-->


    <div class="form-group">
            <label for="">Numero de compte :</label>       
        <input type="text" name="numero_compte" class="form-control" value="{{$paiement->numero_compte}}">
     @if($errors->get('numero_compte'))
            @foreach($errors->get('numero_compte') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

            <div class="form-group">
            <label for="">Numero de carte :</label>       
        <input type="text" name="numero_carte" class="form-control" value="{{$paiement->numero_carte}}">
     @if($errors->get('numero_carte'))
            @foreach($errors->get('numero_carte') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>
      

            <div class="form-group">
            <label for="">Nom :</label>       
<input type="text" name="nom" class="form-control" value="{{$paiement->nom}}">
     @if($errors->get('nom'))
            @foreach($errors->get('nom') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

                    <div class="form-group">
            <label for="">Prenom :</label>       
<input type="text" name="prenom" class="form-control" value="{{$paiement->prenom}}">
     @if($errors->get('prenom'))
            @foreach($errors->get('prenom') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>

    
          <div class="form-group">
            <label for="">Date d'expiration :</label>       
        <input type="date" name="date_expiration" class="form-control" value="{{$paiement->date_expiration}}">
     @if($errors->get('date_expiration'))
            @foreach($errors->get('date_expiration') as $message)

             {{$message}}
            @endforeach

            @endif
        </div>
            <div class="form-group">
            <label for="">Type carte :</label>       
        <input type="text" name="type_carte" class="form-control" value="{{$paiement->type_carte}}">
     @if($errors->get('type_carte'))
            @foreach($errors->get('type_carte') as $message)

             {{$message}}
            @endforeach

            @endif



     </div>

<div class="form-group">
        <input type="submit" value="Modifier" class="form-control btn btn-success"></br>
                    
     
     </div>
     <a href="{{url('paiements')}}" class="form-control btn btn-primary">Retour</a>

     </form>




        </div>
    </div>
</div>




@endsection