@extends('layouts.app')
@section('titolo-pagina', "DC COMICS - Comics")
@section ('main-content')
<!-- QUI è DOVE ANDRANNO I FUMETTI -->
<div class="container">
    <div class="card " style="width: 10rem;">
         <img src="{{ $singolo_elemento['thumb'] }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-uppercase">{{ $singolo_elemento['title'] }}</h5>
            <p>{{ $singolo_elemento['price'] }}</p>
        </div>
    </div>
</div>
@endsection