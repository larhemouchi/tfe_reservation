@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-ms-12">
			<h1> La liste des users</h1>
				
<table class="table">
	
<head>
	<tr>
		<th>Login</th>
		<th>password</th>
		<th>Id de Role</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>E-mail</th>
		<th>Telephone</th>
		<th>Action </th>
	</tr>
</head>
<body>
	 
	@foreach($users as $user)
	<tr>
		<td>{{$user->login}}</td>
		<td>{{$user->password}}</td>
		<td>{{$user->id_role}}</td>
		<td>{{$user->nom}}</td>
         <td>{{$user->prenom}}</td>
		<td>{{$user->email}}</td>
		<td>{{$user->telephone}}</td>
		<td>


			

<form action="{{url('users/'.$user->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">

			{{csrf_field()}}
			{{method_field('DELETE')}}

			<a href="{{url('users',$user->id)}}" class="btn btn-primary">Afficher  </a>

			
			
		<a href="{{url('users/'.$user->id.'/edit')}}" class="btn btn-success">Modifier  </a>


			<button type="submit" class="btn btn-danger">Supprimer  </a>
          </form>

		</td>
	</tr>
	@endforeach
</body>

</table>


		</div>
	</div>
</div>

@endsection