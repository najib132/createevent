@extends('masters.layouts')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<link rel="stylesheet" href="{{ asset('css/hebergement.css') }}">    
<link href="dist/css/component-custom-switch.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://get.mavo.io/stable/mavo.es5.min.js"></script>
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
    <style>
        #hovero1:hover {
  background-color: #6761b9;
  color: white;
}
#hovero2:hover {
  background-color: #6761b9;
  color: white;
}
#hovero3:hover {
  background-color: #6761b9;
  color: white;
}
#hovero4:hover {
  background-color: #6761b9;
  color: white;
}
#hovero5:hover {
  background-color: #6761b9;
  color: white;
}
    </style>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" id="hovero1" href="{{route('congres')}}" style="color: black;"><i class="fa-solid fa-house-user" style="color: #1e1e72;"></i> Accueil <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" id="hovero2" href="#" style="color: black;"><i class="fas fa-hand-holding-usd" style="color: #1e1e72;"></i> Finance et Marketing </a>
        <a class="nav-item nav-link" id="hovero3" href="{{route('hebergementadmin', $event->id)}}" style="color: black;"><i class="fas fa-hotel" style="color: #1e1e72;"></i> Hébergement </a>
        <a class="nav-item nav-link" id="hovero4" href="#" style="color: black;"><i class="fa-solid fa-list" style="color: #1e1e72;"></i> Liste globale </a>
        <a class="nav-item nav-link" id="hovero5" href="#" style="color: black;"><i class="fa-solid fa-file-excel" style="color: #1e1e72;"></i> Exportation Excel de la liste globale </a>
    </div>
    </div>
  </nav>
  <!--end navbar event apk-->

 
  <section class="py-5 header">
    <div class="container py-4">


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Société information</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Indiv information</span></a>

                    {{-- <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Reviews</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Confirm booking</span></a> --}}
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                      <table class="styled-table">
                        <thead>
                            <tr>
                                <th>name Société</th>
                                <th>Info Société</th>
                                <th>show possibilité</th>
                               {{--  <th>Confirmation</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($societe as $societeitem)
                            <tr>
                                <td>
                                  <button type="button" class="btn btn-outline-success btn-lg">   {{$societeitem->Nm_societe}}</button>
                               </td>
                                <td>
                                 <p>Nom & Prénom:{{$societeitem->nom}} {{$societeitem->prenom}}</p>
                                <p> Email : {{$societeitem->email}}</p>
                                 <p>Responssable : {{$societeitem->responssable}}</p>
                                </td>
                                <td>
                                  <button class="btn btn-success btn-circle btn-circle-sm m-1" style="border-radius: 27px;" data-toggle="modal" data-target="#myModal">
                                  <i class="fa fa-eye" style="margin-left: -3px;"></i>
                                </button>
                                </td>
                               {{--  <td><p style="color: red">Non confirmer</p></td> --}}
                                @endforeach 
                            </tr>
                            
                            <!-- and so on... -->
                        </tbody>
                    </table>
                    
                       
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <h4 class="modal-title" id="myModalLabel">Possibilité société</h4>
                      </div>
                      <div class="modal-body">
                        <table class="styled-table">
                          <thead>
                              <tr>
                                  <th>name Société</th>
                                  <th>Possibilité Société</th>
                                  <th>show possibilité</th>
                                 {{--  <th>Confirmation</th> --}}
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($possibilites as $possibilitesitem)
                              <tr>
                                  <td>
                                    <button type="button" class="btn btn-outline-success btn-lg">   {{$societeitem->Nm_societe}}</button>
                                 </td>
                                  <td>
                                  <p>Pack:{{$possibilitesitem->pack->type}} </p>
                                    <select class="form-control">
                                    {{--  <option value="{{$possibilitesitem->nombre->nombre}}">{{$possibilitesitem->nombre->nombre}}</option> --}}
                                      <?php for ($nombre = $possibilitesitem->nombre->nombre; $nombre <=100; $nombre++): ?>
                                      <option value="<?= $nombre ?>">
                                          <?= $nombre ?>
                                      </option>
                                      <?php endfor ?>
                                    </select>
                                  </td>
                                  <td>
                                  <form method="post" action="{{url('store')}}">
                                  @csrf
                                    <div class="custom-control custom-switch">
                                      <label class="checkbox-inline">
                                        <input type="checkbox" name="confirmation[]" value="confirmer">
                                        Option
                                    </label>
                                    </div>
                                  </td>
                                  {{--  <td><p style="color: red">Non confirmer</p></td> --}}
                                  @endforeach 
                              </tr>
                              
                              <!-- and so on... -->
                          </tbody>
                      </table>
                      </div>
                      <div class="modal-footer">
                        
                      <button type="submit" class="btn btn btn-info" data-dismiss="">save</button>
                      </form>

                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4">Bookings</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                    {{-- <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h4 class="font-italic mb-4">Reviews</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="font-italic mb-4">Confirm booking</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>