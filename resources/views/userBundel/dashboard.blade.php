@extends('masters.Layouts')
@section('title')
    Congres-data
@endsection
@section('contenu')
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/dashbordstyle.css') }}">
    <img src="{{ asset('uploads/' . $event->image_slide) }}" style="width:100%">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 10px;">
        <a class="navbar-brand" href="#" style="font-weight: 600;
                                font-family: system-ui;">
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
            </div>
        </div>
    </nav>

    <div class="demo" style="margin: 25px;">
        <form method="post" action="{{ url('choixsociete') }}">
            @csrf
            @foreach ($societe as $societeItem)
                <input type="hidden" name="comptesociete_id" value="{{ $societeItem->id }}">
            @endforeach

            <div class="container">
                <div class="row">
                    @foreach ($possibilites as $possibiliteItem)
                        <div class="col-md-3 col-sm-6">
                            <div class="pricingTable">
                                <div class="pricingTable-header">
                                    <div class="price-value">
                                        <input type="hidden" name="pack_id[]" value="{{ $possibiliteItem->pack->id }}">
                                        Pack {{ $possibiliteItem->pack->num }}
                                        <span class="month">{{ $possibiliteItem->mantant }} MAD</span>
                                    </div>
                                </div>
                                <h3 class="heading">
                                    Type {{ $possibiliteItem->pack->type }}
                                </h3>
                                <div class="pricing-content">
                                    <ul>
                                        @if ($possibiliteItem->hotel)
                                            <li>
                                                <b> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                                                    </svg></b> hotel_name :
                                                <input type="hidden" name="hotel_id[]"
                                                    value="{{ $possibiliteItem->hotel->id }}">
                                                {{ $possibiliteItem->hotel->hotel_name }}
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
                                            {{ $possibiliteItem->pack->checkIn }}</li>

                                        <li><b><svg class="icon" style="width:24px;height:24px"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
                                                </svg></b> checkOut:

                                            {{ $possibiliteItem->pack->checkOut }}<br>

                                           {{--  {{ $possibiliteItem->role->role }} --}}
                                        </li>

                                        <li><b><svg class="icon" style="width:24px;height:24px"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
                                        </svg></b> statut:
                                        <input type="hidden" name="role_id[]"
                                         value="{{ $possibiliteItem->role->id}}">
                                    {{ $possibiliteItem->role->role }}
                                </li>

                                    </ul>
                                </div>


                                <div class="pricingTable-signup">
                                    <label for="sel1" style="color: black;font-weight: 500;">Nombre:</label>
                                    <select name="nombre[]" class="pricingTable-signup"
                                        style="width: 35%;padding: 1px;background: #80808014;">
                                        <option value="" selected></option>
                                        <?php for ($nombre = 1; $nombre <=100; $nombre++): ?>
                                        <option value="<?= $nombre ?>">
                                            <?= $nombre ?>
                                        </option>
                                        <?php endfor ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <input type="hidden"  name="eventId" value="{{ $event->id }}">

            </div>
            <div class="col text-center" style="margin: 10px">
                <button class="btn btn-success" style="width: 20%;padding: 10px;border-radius: 8px;">
                    confirmer-choix
                </button>
            </div>
        </form>
    </div>
@endsection
