@extends('masters.Layouts')
@section('title')
    Congres-data
@endsection
@section('contenu')
<link rel="stylesheet" href="{{ asset('css/styleregister.css') }}">
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css'>

<img src="{{ asset('uploads/'. $event->image_slide) }}" style="width:100%">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 10px;">
    <a class="navbar-brand" href="#" style="font-weight: 600;
    font-family: system-ui;">
    <i class="fa-solid fa-copyright"></i> User Inscription
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav" style="margin: 0px;">
        <a class="nav-item nav-link" href="" style="color: black;"><i class="fa-solid fa-house-user"></i> Accueil <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#" style="color: black;"><i class="fa-solid fa-right-from-bracket"></i> connexion </a>
      </div>
    </div>
  </nav>

  <div class="alert alert-success" style="text-align: center;
  padding: 35px;">
    <strong>Success!</strong> veuillez vérifier votre boîte de réception pour 
    activeé votre compte
  </div>

@endsection
