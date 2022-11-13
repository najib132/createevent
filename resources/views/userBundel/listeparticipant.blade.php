@foreach ($choixsociete as $choixsocieteitem)
   {{ $choixsocieteitem->participant->nom}}
@endforeach