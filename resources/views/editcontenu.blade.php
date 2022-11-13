@extends('masters.layouts')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<img src="../uploads/Slide-Beyond-Com.jpeg" class="img-fluid" alt="Beyondcom_congres">
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
    EditContenu
@endsection
<link href="event-global/public/css/style.css" rel="stylesheet" type="text/css">


<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row justify-content-between align-items-center border-bottom pb-1">
                                <h3 class="text-secondary">
                                    <i class="fas fa-th-list"></i> Contenu
                                </h3>
                            </div>
                            
                <div class="forms" style="min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #f5f5f5;
                border: 1px solid #e3e3e3;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%);
                box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%);
                width: 80%;
                margin: 20px auto;">
        <h3 style="text-align: center">Update /Contenu</h3>
</div>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

<form method="post" action="{{ url('update_contenu', $contenu->id) }}" class="forms" style="min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 5%);
    width: 80%;
    margin: 20px auto;">
@csrf
@method('PUT')

<div class="form-group" style="margin-bottom: 15px;">
<label for="contenu">Contenu-Congrés</label>
<input type="text" name="contenu" class="form-control" id="contenu" value="{{$contenu->contenu}}">
</div> 

<button type="submit" class="btn btn-info" ><i class="fa fa-plus"></i> Update-Contenu</button>
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

