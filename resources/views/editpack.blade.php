@extends('masters.layouts')
<img src="../uploads/Slide-Beyond-Com.jpeg" class="img-fluid" alt="Responsive image">
<!--navbar event apk-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 10px;">
    <a class="navbar-brand" href="#" style="font-weight: 600;
    font-family: system-ui;">
    <i class="fa-solid fa-copyright"></i> Plateform d'inscription
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="{{route('congres')}}" style="color: black;"><i class="fa-solid fa-house-user"></i> Accueil <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#" style="color: black;"><i class="fa-solid fa-right-from-bracket"></i> Déconnexion </a>
      </div>
    </div>
  </nav>
  <!--end navbar event apk-->
@section('title')
    ConfigEvent
@endsection
<link href="event-global/public/css/style.css" rel="stylesheet" type="text/css">


<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row justify-content-between align-items-center border-bottom pb-1" style="justify-content: center!important;">
                                <h3 class="text-secondary">
                                    <i class="fas fa-clipboard-list"></i> Packs
                                </h3>
                                
                            </div>
                            
                <div class="forms" style="width: 102%;">
        <h3 style="font-size: 24px;">Modif / Suppression pack</h3>

</div>

<form method="post" action="{{ url('update_pack', $pack->id) }}" class="forms" style="min-height: 20px;
    ">
@csrf
@method('PUT')

<div class="form-group" style="margin-bottom: 15px;">
    <label for="exampleFormControlSelect1">Numéro_pack</label>
    <select class="form-control" name="num" id="exampleFormControlSelect1">
        <?php 
        for($i=1; $i<=10; $i++)
        {
            echo "<option value=".$i.">".$i."</option>";
        }
        ?> 
    </select>
  </div>

<div class="form-group" style="margin-bottom: 15px;">
    <label for="exampleFormControlSelect1">Type_inscription</label>
    <select class="form-control" name="type" id="exampleFormControlSelect1">
      <option value="inscription">inscription</option>
      <option value="Single">Single</option>
      <option value="Double">Double</option>
      <option value="Double_inscri">Double (2 inscrits)</option>
    </select>
  </div>

        <div class="form-group" style="margin-bottom: 15px;">
        <label for="checkIn">checkIn</label>
        <input type="date" name="checkIn" class="form-control" id="checkIn" value="{{$pack->checkIn}}">
        </div> 

            <div class="form-group" style="margin-bottom: 15px;">
            <label for="checkOut">checkOut</label>
            <input type="date" name="checkOut" class="form-control" id="checkOut" value="{{$pack->checkOut}}">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="exampleFormControlSelect1">nbTicketsRepas</label>
                    <select class="form-control" name="nbTicketsRepas">
                        <?php 
                        for($i=0; $i<=30; $i++)
                        {
                            echo "<option value=".$i.">".$i."</option>";
                        }
                        ?> 
                        </select> 
            </div>

            
            <div class="form-group" style="margin-bottom: 15px;">
                
                <label for="exampleFormControlSelect1">Contenu</label>
                <select class="form-control" name="contenu" id="exampleFormControlSelect1">
                <option value="{{$pack->contenu}}">{{$pack->contenu}}</option>
                
                </select>
                
            </div>

<button type="submit" class="btn btn-info" ><i class="fa fa-plus"></i> Ajout-Pack</button>
</form>
</div>
</div>

                <div class="my-3 d-flex justify-content-center align-items-center">
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>

