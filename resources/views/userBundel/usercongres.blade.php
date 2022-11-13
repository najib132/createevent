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

        @if(session()->has('succuess'))
        <div class="alert alert-success" style="text-align: center;
        padding: 35px;font-weight: 600;font-size: 25px;">
        {{ session()->get('succuess') }}
        </div>
        @endif

        @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
        <form method="post" action="{{ url('login-User') }}">
            @csrf
            <div id="mainButton1">
                <div class="modal">
                    <div class="close-button" onclick="closeForm1()">x</div>
                    <div class="form-title"></div>
                    <div class="input-group">
                        <input type="hidden" name="eventId" value="{{$event->id}}" >
                        <input type="text" name="email" id="name" onblur="checkInput1(this)" />
                        <label for="name">Email</label>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" id="password" onblur="checkInput1(this)" />
                        <label for="password">Mot de passe</label>
                    </div>
                   <!-- <div class="form-button" onclick="closeForm()">Go</div>-->
                   <button type="submit">Sign In</button>
                    <div class="codepen-by">CodePen by Cole Waldrip</div>
                </div>
            
            </div>
        </form>
        <!------------------------------------------------------------------------------------------->
        <form method="post" action="">
            @csrf
        <div id="mainButton2">
            <div class="modal">
                <div class="close-button" onclick="closeForm2()">x</div>
                <div class="form-title"></div>
                <div class="input-group">
                    <input type="text" name="email" id="name2" onblur="checkInput2(this)" />
                    <label for="name2">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="password2" onblur="checkInput2(this)" />
                    <label for="password2">Password</label>
                </div>
               <!-- <div class="form-button" onclick="closeForm2()">Go</div>-->
               <button type="submit">Sign In</button>
                <div class="codepen-by">CodePen by Cole Waldrip</div>
            </div>
        
        </div>
        </form>


<div class="container" id="container">
<div class="codepen-by">Codeen by sublimevent</div>

    <!-- Sign Up form code goes here -->
    <div class="form-container sign-up-container">
        <form action="{{url('store-indiv')}}" method="post">
            @csrf
            <h3>inscription Indiv</h3>
            <div class="form-group" style="margin-bottom: 15px;">
                <input type="hidden" name="eventId" value="{{$event->id}}" >
                </div>
            <span style="color: red;font-weight:500">Vous voulez effectuer une inscription individuelle</span>
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="nom" placeholder="Nom" />
                </div>
                <div class="col-sm-6">
                    <input type="text" name="prenom" placeholder="Prenom" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="gsm" placeholder="GSM" />
                </div>
                <div class="col-sm-6">
                    <input type="email" name="email" placeholder="Email" />
                </div>
            </div>
              <input type="password" name="password" placeholder="Password" />

            <button>Inscription</button>
        </form>
    </div>

<div class="form-container sign-in-container">
    <!-- Sign In form code goes here -->
    
        <form action="{{url('store-usersociete')}}" method="post">
            @csrf
            <h3>inscription société</h3>

            <div class="form-group" style="margin-bottom: 15px;">
                <input type="hidden" name="eventId" value="{{$event->id}}" >
                </div>
                
            <span style="color: red;font-weight:500">Vous êtes une société qui souhaite inscrire ses participants pris en charge</span>

            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="nom" placeholder="Nom" />
                </div>
                <div class="col-sm-6">
                    <input type="text" name="prenom" placeholder="Prenom" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="gsm" placeholder="GSM" />
                </div>
                <div class="col-sm-6">
                    <input type="email" name="email" placeholder="Email" />
                </div>
            </div>
              <input type="password" name="password" placeholder="Password" />
              <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="Nm_societe" placeholder="Nom de la société" />
                </div>
                <div class="col-sm-6">
                    <input type="text" name="ice"  placeholder="ICE" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="adressePh" placeholder="Adresse physique" />
                </div>
                <div class="col-sm-6">
                    <input type="text" name="responssable" placeholder="Responsabilité" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="game" placeholder="Gamme" />
                </div>
                <div class="col-sm-6">
                   <!-- <input type="text" placeholder="Service" />-->
                    <select id="service" name="service" placeholder="Service">
                        <option value="">--- Select Service --</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Comptabilite">Comptabilité</option>
                        <option value="Finance">Finance</option>
                        <option value="Commeriale">Commeriale</option>
                        <option value="Achat">Achat</option>
                        <option value="Autre">Autre</option>
                      </select>
                </div>

            </div>
            <button>Inscription</button>
        </form>
    
</div>
<div class="overlay-container">
    <!-- The overlay code goes here -->
    
    <div class="overlay">
        <div class="overlay-panel overlay-left">
            <h1>inscription société</h1>
            <p>
                Vous êtes une société qui souhaite inscrire ses participants pris en charge
            </p>
            <button class="ghost" id="signIn">S'enregistrer</button>
            <div id="mainButton1">
            <div class="btn-text" onclick="openForm1()">Connexion société</div></div>
        </div>
        <div class="overlay-panel overlay-right">
            <h1>inscription Indiv</h1>
            <p>Vous voulez effectuer une inscription individuelle</p>
            <button class="ghost" id="signUp">S'enregistrer</button>
            <div id="mainButton2">
            <div class="btn-text2" onclick="openForm2()">Connexion Indiv</div></div>
        </div>
    </div>
 
</div>
</div>

<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add('right-panel-active');
});

signInButton.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
});
/*******************************************************/
var button = document.getElementById('mainButton1');

var openForm1 = function() {
	button.className = 'active';
};

var checkInput1 = function(input) {
	if (input.value.length > 0) {
		input.className = 'active';
	} else {
		input.className = '';
	}
};

var closeForm1 = function() {
	button.className = '';
};

document.addEventListener1("keyup", function(e) {
	if (e.keyCode == 27 || e.keyCode == 13) {
		closeForm();
	}
});
</script>




<!--second script form-->
<script>
var button2 = document.getElementById('mainButton2');

var openForm2 = function() {
	button2.className = 'active';
};

var checkInput2 = function(input) {
	if (input.value.length > 0) {
		input.className = 'active';
	} else {
		input.className = '';
	}
};

var closeForm2 = function() {
	button2.className = '';
};

document.addEventListener2("keyup", function(e) {
	if (e.keyCode == 27 || e.keyCode == 13) {
		closeForm2();
	}
});
</script>

@endsection
