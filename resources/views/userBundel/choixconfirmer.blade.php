@extends('masters.Layouts')
@section('title')
    Congres-data
@endsection
@section('contenu')
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/dashbordstyle.css') }}">
    @if ($event && $event->image_slide)
        <img src="{{ asset('uploads/' . $event->image_slide) }}" style="width:100%">
    @endif
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 10px;">
        <a class="navbar-brand" href="#" style="font-weight: 600;font-family: system-ui;">
            <i class="fa-solid fa-copyright" style="color:#141470"></i> User Inscription
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="margin: 0px;">
                @foreach ($societe as $societeItem)
                    <a class="nav-item nav-link" href="" style="color: black;"><i class="fa-solid fa-house-user"
                            style="color:#141470"></i> Accueil <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#" style="color: black;"><i class="fa-solid fa-id-card"
                            style="color:#141470"></i> {{ $societeItem->email }} </a>
                @endforeach

                <a class="nav-item nav-link" href="" style="color: black;">
                    <i class="fa fa-table" aria-hidden="true" style="color:#141470"></i> Aperçu - Facutre proforma </a>
            </div>
        </div>
    </nav>
    @if (session()->has('message'))
        <div class="alert alert-success" style="width: 80%;margin: 20px auto;display: flex;">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="demo" style="margin: 25px;">

            @foreach ($societe as $societeItem)
                <input type="hidden" name="comptesociete_id" value="{{ $societeItem->id }}">
            @endforeach

            <div class="container">
                <div class="row">
                    @foreach ($choixsociete as $choixsocieteItem)
                        <div class="col-md-3 col-sm-6">
                            <div class="pricingTable">
                                <div class="pricingTable-header">
                                    <div class="price-value">
                                        <input type="hidden" name="pack_id[]" value="{{ $choixsocieteItem->pack->id }}">
                                        Pack {{ $choixsocieteItem->pack->num }}
                                        <span class="month">{{ $choixsocieteItem->mantant }} MAD</span>
                                    </div>
                                </div>
                                <h3 class="heading">
                                    Type {{ $choixsocieteItem->pack->type }}
                                </h3>
                                <div class="pricing-content">
                                    <ul>
                                        @if ($choixsocieteItem->hotel)
                                            <li>
                                                <b> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                                                    </svg></b> hotel_name :
                                                <input type="hidden" name="hotel_id"
                                                    value="{{ $choixsocieteItem->hotel->id }}">
                                                {{ $choixsocieteItem->hotel->hotel_name }}
                                            </li>
                                        @else
                                        <li>
                                            <b> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                                                </svg></b> Sans Hotel
                                        </li>
                                        @endif
                                        <li><b> <svg class="icon" style="width:24px;height:24px"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
                                                </svg></b> checkIn:
                                            {{ $choixsocieteItem->pack->checkIn }}</li>

                                        <li><b><svg class="icon" style="width:24px;height:24px"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
                                                </svg></b> checkOut:

                                            {{ $choixsocieteItem->pack->checkOut }}<br>
                                            
                                            Statut:{{ $choixsocieteItem->role->role }}
                                        </li>

                                        <?php if ($choixsocieteItem->confirmation == 'confirmer') {
                                            echo '<b style="color: green"> confirmer</b>';
                                        } else {
                                            echo ' <b style="color: red"> Non confirmer</b>';
                                        }
                                        ?>

                                        @if ($choixsocieteItem->pack->type == 'Double_inscri')
                                            <li>
                                                <p> ce pack contient deux inscriptions pour deux médecin </p>
                                            </li>
                                        @endif


                                    </ul>
                                </div>

                                <div class="pricingTable-signup">
                                    <label for="sel1" style="color: black;font-weight: 500;">Nombre:</label>
                                    {{ $choixsocieteItem->nombre }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        
    </div>

    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="background-color: #c5c0c02e;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8" style="margin: 20px auto;">

                    <div class="forms" style="width: 102%;">
                        <h3 style="font-size: 24px;">Liste des participants</h3>
                                    <hr>
                            <!--Table PARTICIPANTS AFFICHER-->
                            <table class="table table-striped table-hover">
                                <thead>
                                    
                                    <tr>
    
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Rôle dans le congrès</th>
                                        <th>Pack</th>
                                        <th>Hébergement</th>
                                        <th>nb_ticket</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($participants as $participantsItem)
                                    <tr>
    
                                        <td>{{$participantsItem->nom}}</td>
                                        <td>{{$participantsItem->prenom}}</td>
                                        <td>{{$participantsItem->role->role}}</td>
                                        <td>{{$participantsItem->pack->num}}</td>
                                        <td>
                                            @if ($participantsItem->hotel == null )
                                                Sans hotel
                                          @else
                                            {{$participantsItem->hotel->hotel_name}}
                                            @endif
                                        </td>
                                        
                                        <td>{{$participantsItem->nb_ticketsrepas}}</td>
                                       
                                        <td>
                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                        </td>
                                    </tr>
                
                                    @endforeach
                                </tbody>
                            </table>
                                </div>
                                <h3>Saisissez vos inscrits un par un</h3>
                               {{--  @if ($choixsocieteItem->confirmation == "confirmer") --}}
                                <form method="post" action="{{url('participantInscri')}}" class="forms" style="min-height: 20px;">
                                    @csrf
                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <input type="hidden" name="codebare" value="{{$event->perefix}}1010101">
                                    </div>
                                    
                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <input type="hidden" name="event_id" value="{{ $event->id }}">
                                    </div>

                                    <div class="form-group" style="margin-bottom: 15px;">
                                        @foreach ($societe as $societeItem)
                                        <input type="hidden" name="comptesociete_id" value="{{ $societeItem->id }}">
                                    @endforeach    
                                    </div>

                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <label for="montant">Nom (*)</label>
                                        <input type="text" name="nom" class="form-control" id="montant">
                                    </div>

                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <label for="montant">Prénom (*)</label>
                                        <input type="text" name="prenom" class="form-control" id="montant">
                                    </div>


                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <label for="montant">Email (*)</label>
                                        <input type="text" name="mail" class="form-control" id="montant">
                                    </div>


                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <label for="montant">CIN (*)</label>
                                        <input type="text" name="cin" class="form-control" id="montant">
                                    </div>


                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <label for="montant">Gsm (*)</label>
                                        <input type="text" name="gsm" class="form-control" id="montant">
                                    </div>

                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <label for="montant">Ville(*)</label>
                                        <input type="text" name="ville" class="form-control" id="montant">
                                    </div>

                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <label for="exampleFormControlSelect1">Statut du participant</label>
                                        <select class="form-control" name="role_id" id="exampleFormControlSelect1">
                                            <option value=""></option>
                                              <option value="{{ $choixsocieteItem->role_id }}">
                                                {{ $choixsocieteItem->role->role }}</option>  
                                        </select>
                                    </div>

                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <label for="exampleFormControlSelect1">Hébergement</label>
                                        <select class="form-control" name="hotel_id" id="exampleFormControlSelect1">
                                            <option value="">Sans Hotel</option>
                                            @foreach ($choixsociete as $choixsocieteItem)
                                            @if ($choixsocieteItem->hotel_id != null)
                                            <option  value="{{ $choixsocieteItem->hotel_id}}">
                                                {{ $choixsocieteItem->hotel->hotel_name}}
                                            </option>
                                            
                                            @endif
                                                
                                            @endforeach  
                                           
                                        </select>
                                    </div>


                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <label for="Pack">Pack</label>
                                        <select class="form-control" name="pack_id" id="exampleFormControlSelect1">
                                            <option value=""></option>
                                            @foreach ($choixsociete as $choixsocieteItem)
                                                <option value="{{ $choixsocieteItem->pack_id }}">
                                                    {{ $choixsocieteItem->pack->num }}</option>
                                            @endforeach 
                                        </select>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-warning"
                                            style="width: 20%;font-size: larger;font-weight: 500;"><i
                                                class="fa fa-plus"></i>
                                            Ajouter</button>
                                    </div>
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
@endsection
