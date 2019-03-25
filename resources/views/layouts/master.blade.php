<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Réservation theatre</title>
</head>
<link rel="stylesheet"  href="{{asset('assets/css/bootstrap.min.css')}}">


<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('accueil')}}">Accueil</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       

        <li><a href="{{url('users')}}">Users</a></li>
        <li><a href="{{url('roles')}}">Roles</a></li>
        <li><a href="{{url('reservations')}}">Réservations</a></li>
        <li><a href="{{url('representations')}}">Representation</a></li>
        <li><a href="{{url('paiements')}}">Paiement</a></li>
        <li><a href="{{url('pieces_theatres')}}">Theatre</a></li>
        <li><a href="{{url('salles')}}">Salle</a></li>
        <li><a href="{{url('siege')}}">Siége</a></li>
   
     
     
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Rechercher">
        </div>
        <button type="submit" class="btn btn-primary">Rechercher</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
    
         <ul class="nav navbar-nav navbar-right">
      <li><a href="{{url('acceuil')}}"><span class="glyphicon glyphicon-user"></span> Se deconnecter</a></li>
      <li><a href="{{url('login')}}"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
    </ul>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

  
  </div>
</nav>
@yield('content')



<script src="{{ asset('assets/js/jquery.min.js')}}"  ></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"  ></script>
</body>
</html>