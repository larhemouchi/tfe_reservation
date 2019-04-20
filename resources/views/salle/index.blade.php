@extends('layouts.master')


@section('content')

<h1> La liste des roles</h1>
<button type="button" class="btn btn-primary " id="ajouter" data-toggle="modal" data-target="#myModal">
  Ajouter nouveau Role
</button>
<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
         
                <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">Nom de role</th>


                <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
                
              </tr>
            </thead>
            <tbody>
            @foreach ($roles as $role)
                <tr role="row" class="odd">
                  
                  <td class="sorting_1">{{ $role->role }}</td>
                
                  <td>
                   

<button class="btn btn-info" data-toggle="modal" data-myrole="{{$role->role}}" data-roleid="{{$role->id}}"  data-target="#edit">Edit</button>

<button class="btn btn-danger" data-toggle="modal"  data-roleid="{{$role->id}}"  data-target="#delete">Delete</button>

                 
                  </td>
       
              </tr>
            @endforeach
            </tbody>
         
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Afficher de 1 à {{count($roles)}} de {{count($roles)}} entrees</div>
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
        <h4 class="modal-title" id="myModalLabel">Nouveau Role</h4>
      </div>
      <form method="post" action="{{route('roles.store')}}">
{{csrf_field()}}

      <div class="modal-body">
    @include('role.form')

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
        <h4 class="modal-title" id="myModalLabel">Editer Role</h4>
      </div>
      <form method="post" action="{{url('roles/'.$role->id)}}">
        {{method_field('patch')}}
{{csrf_field()}}

      <div class="modal-body">
    <input type="hidden" name="roleid" id="roleid" value="">
@include('role.form')



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
      <form action="{{url('roles/'.$role->id)}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
        <div class="modal-body">
        <p class="text-center">
          Are you sure you want to delete this?
        </p>
            <input type="hidden" name="roleid" id="roleid" value="">

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