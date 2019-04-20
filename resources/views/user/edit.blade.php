@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            

    <form action="{{url('users/'.$user->id)}}" method="post"> 

    <input type="hidden" name="_method" value="PUT">
     {{csrf_field()}}

    <div class="form-group  @if($errors->get('login'))has-error @endif">
        <label for="">Login :</label>
            
    <input type="text" name="login" class="form-control" value="{{$user->login}}">

                @if($errors->get('login'))
            @foreach($errors->get('login') as $message)

             {{$message}}
            @endforeach

            @endif
</div>
<div class="form-group  @if($errors->get('password'))has-error @endif">
        <label for="">password :</label>
        <input type="text" name="password" class="form-control" value="{{$user->password}}">

                    @if($errors->get('password'))
            @foreach($errors->get('password') as $message)

             {{$message}}
            @endforeach

            @endif
            
</div>


<div class="form-group @if($errors->get('id_role'))has-error @endif">
        <label for="">Role user :</label>
        <input type="text" name="id_role" class="form-control" value="{{$user->id_role}}">

                    @if($errors->get('id_role'))
            @foreach($errors->get('id_role') as $message)

             {{$message}}
            @endforeach

            @endif
            
</div>


<div class="form-group  @if($errors->get('nom'))has-error @endif">
        <label for="">Nom :</label>
        <input type="text" name="nom" class="form-control" value="{{$user->nom}}">

                    @if($errors->get('nom'))
            @foreach($errors->get('nom') as $message)

             {{$message}}
            @endforeach

            @endif
            
</div>

<div class="form-group  @if($errors->get('prenom'))has-error @endif">
        <label for="">Prenom :</label>
        <input type="text" name="prenom" class="form-control" value="{{$user->prenom}}">

                    @if($errors->get('prenom'))
            @foreach($errors->get('prenom') as $message)

             {{$message}}
            @endforeach

            @endif
            
</div>

<div class="form-group  @if($errors->get('sex'))has-error @endif">
        <label for="">Sex :</label>
        <input type="text" name="sex" class="form-control" value="{{$user->sex}}">

                    @if($errors->get('sex'))
            @foreach($errors->get('sex') as $message)

             {{$message}}
            @endforeach

            @endif
            
</div>
<div class="form-group  @if($errors->get('email'))has-error @endif">
        <label for="">E-mail :</label>
        <input type="text" name="email" class="form-control" value="{{$user->email}}">

                    @if($errors->get('email'))
            @foreach($errors->get('email') as $message)

             {{$message}}
            @endforeach

            @endif
            
</div>

<div class="form-group  @if($errors->get('telephone'))has-error @endif">
        <label for="">Téléphone :</label>
        <input type="number" name="telephone" class="form-control" value="{{$user->telephone}}">

                    @if($errors->get('telephone'))
            @foreach($errors->get('telephone') as $message)

             {{$message}}
            @endforeach

            @endif
            
</div>


<div class="form-group">
                    
        <input type="submit" value="Modifier" class="form-control btn btn-success">
     </div>
<a href="{{url('users')}}" class="form-control btn btn-warning">Retour</a>
     </form>



        </div>
    </div>
</div>










@endsection