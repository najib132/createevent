<!DOCTYPE html>
<html>
 <head>
  <title>Laravel - How to Generate Dynamic PDF from HTML using DomPDF</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">facture proforma</h3><br />
   
   <div class="row">
    <div class="col-md-7" align="right">
     {{-- <h4>facture proforma</h4> --}}
    </div>
    <div class="col-md-5" align="right">
     <a href="{{url('userBundel/dynamic_pdf',['download'=>'pdf'])}}" class="btn btn-danger">Convert into PDF</a>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <thead>
      <tr>
        {{-- <th>Sociéte</th> --}}
       <th>Designation</th>
       <th>Hotel</th>
       <th>Nombre</th>
       <th>Prix(MAD)</th>
       <th>Total(MAD)</th>
      
      </tr>
     </thead>
     <tbody>
     @foreach($possibilites as $possibilitesItem)
      <tr>
        {{--   <td>{{$possibilitesItem->comptesociete->Nm_societe}}</td> --}}
       <td>Pack{{ $possibilitesItem->pack->num }} : {{$possibilitesItem->pack->type}}</td>
       <td>{{ $possibilitesItem->hotel->hotel_name }}</td>
       <td>{{ $possibilitesItem->nombre->nombre }}</td>
       <td> 
       {{$possibilitesItem->mantant}}
        </td>
       <td>
    <?php 
    echo $possibilitesItem->nombre->nombre * $possibilitesItem->mantant
    ?>
       </td>
     
      </tr>
     @endforeach
     
     </tbody>
    </table>
   </div>
  </div>

 </body>
</html>