@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            

    <form action="{{url('reservations/'.$reservation->id)}}" method="post"> 

    <input type="hidden" name="_method" value="PUT">
     {{csrf_field()}}

    <div class="form-group  @if($errors->get('id_representation'))has-error @endif">
        <label for="">Id representation :</label>
            
    <input type="text" name="id_representation" class="form-control" value="{{$reservation->id_representation}}">

                @if($errors->get('id_representation'))
            @foreach($errors->get('id_representation') as $message)

             {{$message}}
            @endforeach

            @endif
</div>
<!--
<div class="form-group @if($errors->get('id_user'))has-error @endif">
        <label for="">Id user :</label>
        <input type="text" name="id_user" class="form-control" value="{{$reservation->id_user}}">

                    @if($errors->get('id_user'))
            @foreach($errors->get('id_user') as $message)

             {{$message}}
            @endforeach

            @endif
            
</div>
-->

<div class="form-group  @if($errors->get('tarif_total'))has-error @endif">
        <label for="">Tarif Total :</label>
        <input type="text" name="tarif_total" class="form-control" value="{{$reservation->tarif_total}}">

                    @if($errors->get('tarif_total'))
            @foreach($errors->get('tarif_total') as $message)

             {{$message}}
            @endforeach

            @endif
            
</div>
<div class="form-group  @if($errors->get('nbre_place_reserve'))has-error @endif">
        <label for="">Nombre de place réserver :</label>
        <input type="text" name="nbre_place_reserve" class="form-control" value="{{$reservation->nbre_place_reserve}}">

                    @if($errors->get('nbre_place_reserve'))
            @foreach($errors->get('nbre_place_reserve') as $message)

             {{$message}}
            @endforeach

            @endif
            
</div>
<div class="form-group  @if($errors->get('id_paiement'))has-error @endif">
        <label for="">Id Paiement :</label>
        <input type="text" name="id_paiement" class="form-control" value="{{$reservation->id_paiement}}">

             @if($errors->get('id_paiement'))
            @foreach($errors->get('id_paiement') as $message)

             {{$message}}
            @endforeach

            @endif

    </div>

     <div class="form-group @if($errors->get('date_reservation')) has-error @endif">
            <label for="">Date de réservation :</label>        
        <input type="date" name="date_reservation" class="form-control" value="{{$reservation->date_reservation}}">
        @if($errors->get('date_reservation'))
            @foreach($errors->get('date_reservation') as $message)

             {{$message}}
            @endforeach

            @endif

        
     </div>
   


<div class="form-group">
                    
        <input type="submit" value="Modifier" class="form-control btn btn-success">
     </div>
<a href="{{url('reservations')}}" class="form-control btn btn-warning">Retour</a>
     </form>



        </div>
    </div>
</div>










@endsection