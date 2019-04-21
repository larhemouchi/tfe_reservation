@extends('layouts.master')


@section('content')

<h1> La liste des Réservations</h1>
<button type="button" class="btn btn-primary " id="ajouter" data-toggle="modal" data-target="#myModal">
  Ajouter nouveau Reservation
</button>
<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
         
                <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">ID representation</th>
            <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">id user</th>
                        <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">Id paiement</th>
         <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">Tarif total</th>
            <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">nbre_place_reserve</th>
                        <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">date_reservation</th>

                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
                
              </tr>
            </thead>
            <tbody>
            @foreach ($reservations as $reservation)
                <tr role="row" class="odd">
                  
                 <td class="sorting_1">{{ $reservation->id_representation }}</td>
                <td class="sorting_1">{{ $reservation->id_user }}</td>
                <td class="sorting_1">{{ $reservation->id_paiement }}</td>
                <td class="sorting_1">{{ $reservation->tarif_total }}</td>
              <td class="sorting_1">{{ $reservation->nbre_place_reserve }}</td>
                <td class="sorting_1">{{ $reservation->date_reservation }}</td>
        
                  <td>

                   

<button class="btn btn-info" data-toggle="modal" data-idreservation="{{$reservation->id}}" data-idrepresentation="{{$reservation->id_representation}}"
 data-iduser="{{$reservation->id_user}}" data-idpaiement="{{$reservation->id_paiement}}" data-tariftotal="{{$reservation->tarif_total}}"
 data-nbreplacereserve="{{$reservation->nbre_place_reserve}}" data-datereservation="{{$reservation->date_reservation}}"	data-target="#edit">Edit</button>

<button class="btn btn-danger" data-toggle="modal"  data-idreservation="{{$reservation->id}}"  data-target="#delete">Delete</button>

                 
                  </td>
       
              </tr>
            @endforeach
            </tbody>
         
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Afficher de 1 à {{count($reservations)}} de {{count($reservations)}} entrees</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
          
          </div>
        </div>
      </div>
    </div>



<!-- Modal nouveau -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouveau reservation</h4>
      </div>
      <form method="post" action="{{route('reservations.store')}}">
{{csrf_field()}}

      <div class="modal-body">
    @include('reservation.form')

          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

      </form>
    </div>
  </div>
</div>



<!-- Modal editer -->

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editer reservations</h4>
      </div>
      <form method="post" action="{{url('reservations/'.$reservation->id)}}">
        {{method_field('patch')}}
{{csrf_field()}}

      <div class="modal-body">
    <input type="hidden" name="idreservation" id="idreservation" value="">
@include('reservation.form')



          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Save Change</button>
      </div>

      </form>
    </div>
  </div>
</div>



<!-- Modal delete -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{url('reservations/'.$reservation->id)}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Etes vous sur de supprimer ?
        </p>
            <input type="hidden" name="idreservation" id="idreservation" value="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
          <button type="submit" class="btn btn-warning">Yes, Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>




@endsection