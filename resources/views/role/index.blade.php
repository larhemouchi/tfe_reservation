@extends('layouts.app')


@section('content')


<div class="container">
	<div class="row">
		<div class="col-ms-12">
			<h1> La liste des roles</h1>
					<div class="pull-left">
			<a href="{{url('roles/create')}}" class="btn btn-warning"> Créer un role </a>
		
		</div>		
<table class="table">
	
<head>
	<tr>
		<th>Role</th>
	
		<th>Action </th>
	</tr>
</head>
<body>
	
	@foreach($roles as $role)
	<tr>
		<td>{{$role->role}}</td>

		<td>


			

<form action="{{url('roles/'.$role->id)}}" method="post"
				onsubmit="return confirm('Etes vous sur de supprimer ?');">

			{{csrf_field()}}
			{{method_field('DELETE')}}

			<a href="{{url('roles',$role->id)}}" class="btn btn-primary">Afficher  </a>

			
			
		<a href="{{url('roles/'.$role->id.'/edit')}}" class="btn btn-success">Modifier  </a>


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