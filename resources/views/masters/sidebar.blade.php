 @extends('masters.layouts')
 <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
<div class="box">
    <h2>nav bar</h2>
    <ul class="list-group mb-3">
       <a class=" list-group-item-action list-group-item-light" href="{{route('congres.configevent', $event->id) }}"> <li><span>1</span><i class="fas fa-th-list"></i>Contenu</li></a>
       <a class=" list-group-item-action list-group-item-light" href="{{route('pack', $event->id) }}"> <li><span>2</span><i class="fas fa-clipboard-list"></i>Packs</li></a>
       <a class=" list-group-item-action list-group-item-light" href="{{route('role', $event->id) }}"> <li><span>3</span><i class="fas fa-chair"></i>Role</li></a>
       <a class=" list-group-item-action list-group-item-light" href="{{route('hotel', $event->id) }}"> <li><span>4</span><i class="fas fa-hotel"></i>Hotels</li></a>
       <a class=" list-group-item-action list-group-item-light" href="{{route('possibilite', $event->id) }}"> <li><span>6</span><i class="fas fa-calculator"></i>Possibilité</li></a>
       <a class=" list-group-item-action list-group-item-light" href="{{route('sponsor', $event->id) }}"> <li><span>7</span><i class="fas fa-handshake"></i>Sponsoring</li></a>
       <a class=" list-group-item-action list-group-item-light" href="{{route('atelier', $event->id) }}"> <li><span>8</span><i class="fas fa-person-booth"></i>Atelier</li></a>
       <a class=" list-group-item-action list-group-item-light" href="{{route('major', $event->id) }}"> <li><span>9</span><i class="fas fa-balance-scale-left"></i>Majoration</li></a>
    </ul>
</div>
<style>

</style>

