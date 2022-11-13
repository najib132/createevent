 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="{{ asset('css/config.css') }}">
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
                         <div class="col-md-4">
                             @include('masters.sidebar')
                         </div>
                         <div class="col-md-8">

                             @if(session()->has('message'))
                             <div class="alert alert-success" style="width: 80%;margin: 20px auto;display: flex;">
                            {{ session()->get('message') }}
                             </div>
                             @endif
 
                 <div class="forms" style="width: 105%;">
           
 
 
 
             <div class="container-xl">
                 <div class="table-responsive">
                     <div class="table-wrapper">
                         <div class="table-title">
                             <div class="row">
                                 <div class="col-sm-6">
                                <h2>Modif / Suppression pack</h2>
                                 </div>
                                 <div class="col-sm-4">
                                     <a href="#addEmployeeModal" class="btn btn-info" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Pack</span></a>						
                                 </div>
                             </div>
                         </div>
                         <table class="table table-striped table-hover">
                             <thead>
                                 
                                 <tr>
 
                                     <th>Num°</th>
                                     <th>Type</th>
                                     <th>In</th>
                                     <th>Out</th>
                                     <th>nb°</th>
                                     <th>contenu</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($pack as $Packitem)
                                 <tr>
 
                                     <td>{{$Packitem->num}}</td>
                                     <td>{{$Packitem->type}}</td>
                                     <td>{{$Packitem->checkIn}}</td>
                                     <td>{{$Packitem->checkOut}}</td>
                                     <td>{{$Packitem->nbTicketsRepas}}</td>
                                     <td>{{$Packitem->contenu}}</td>
                                     <td>
                                         <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                         <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                     </td>
                                 </tr>
             
                                 @endforeach
                             </tbody>
                         </table>
 
                     </div>
                 </div>        
             </div>
             <!-- Edit Modal HTML -->
             <div id="addEmployeeModal" class="modal fade">
                 <div class="modal-dialog">
                     <div class="modal-content">
 
                  <form method="post" action="{{ url('store-pack') }}" class="forms" style="min-height: 20px;">
 @csrf
 
 <div class="form-group" style="margin-bottom: 15px;">
     <input type="hidden" name="eventId" value="{{$event->id}}" >
     </div> 
 
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
         <input type="date" name="checkIn" class="form-control" id="checkIn" >
         </div> 
 
             <div class="form-group" style="margin-bottom: 15px;">
             <label for="checkOut">checkOut</label>
             <input type="date" name="checkOut" class="form-control" id="checkOut" >
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
                     @foreach ($contenu as $contenuItem)
                 <option value="{{$contenuItem->contenu}}">{{$contenuItem->contenu}}</option>
                 @endforeach
                 </select>
                 
             </div>
 
 <button type="submit" class="btn btn-info" ><i class="fa fa-plus"></i> Ajout-Pack</button>
 </form>
                     </div>
                 </div>
             </div>
             <!-- Edit Modal HTML -->
             <div id="editEmployeeModal" class="modal fade">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <form>
                             <div class="modal-header">						
                                 <h4 class="modal-title">Edit Employee</h4>
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                             </div>
                             <div class="modal-body">					
                                 <div class="form-group">
                                     <label>Name</label>
                                     <input type="text" class="form-control" required>
                                 </div>
                                 <div class="form-group">
                                     <label>Email</label>
                                     <input type="email" class="form-control" required>
                                 </div>
                                 <div class="form-group">
                                     <label>Address</label>
                                     <textarea class="form-control" required></textarea>
                                 </div>
                                 <div class="form-group">
                                     <label>Phone</label>
                                     <input type="text" class="form-control" required>
                                 </div>					
                             </div>
                             <div class="modal-footer">
                                 <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                 <input type="submit" class="btn btn-info" value="Save">
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
             <!-- Delete Modal HTML -->
             <div id="deleteEmployeeModal" class="modal fade">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <form>
                             <div class="modal-header">						
                                 <h4 class="modal-title">Delete Employee</h4>
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                             </div>
                             <div class="modal-body">					
                                 <p>Are you sure you want to delete these Records?</p>
                                 <p class="text-warning"><small>This action cannot be undone.</small></p>
                             </div>
                             <div class="modal-footer">
                                 <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                 <input type="submit" class="btn btn-danger" value="Delete">
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
 
     </tbody>
 
 </table>
 </div>
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

                     <script>
                         $(document).ready(function(){
                             // Activate tooltip
                             $('[data-toggle="tooltip"]').tooltip();
                             
                             // Select/Deselect checkboxes
                             var checkbox = $('table tbody input[type="checkbox"]');
                             $("#selectAll").click(function(){
                                 if(this.checked){
                                     checkbox.each(function(){
                                         this.checked = true;                        
                                     });
                                 } else{
                                     checkbox.each(function(){
                                         this.checked = false;                        
                                     });
                                 } 
                             });
                             checkbox.click(function(){
                                 if(!this.checked){
                                     $("#selectAll").prop("checked", false);
                                 }
                             });
                         });
                         </script>