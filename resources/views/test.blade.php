@extends('masters.layouts')

@extends('masters.side')

@section('contenu')
<div class="col md-8 ">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>

    @endif
        </div>

        
   
@endsection