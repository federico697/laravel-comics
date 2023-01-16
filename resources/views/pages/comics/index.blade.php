@extends('layouts.app')
@section('titolo-pagina', "DC COMICS - Comics")
@section ('main-content')
<!-- QUI è DOVE ANDRANNO I FUMETTI -->
<div class="container">
    <div class="row">
        @foreach ($comics as $id => $elem)
        <div class="col-2 my-4">
            <div class="card " style="width: 10rem;">
                <img src="{{$elem['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$elem['title']}}</h5>
                  <p class="card-text">{{$elem['price']}}</p>
                  <a href="{{route('show.comics', compact('id') )}}" class="btn btn-primary">Apri Fumetto</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection