@extends('layouts.app')

@section('title-page')
Laravel Comics | Home
@endsection

@section('content')

<!-- start: jumbotron -->
<div class="jumbotron debug mb-3">

    <div class="current-series">
        Current Series
    </div>

</div>
<!-- end: jumbotron -->

<!-- start: comics -->
<div class="container">

    <div class="row debug align-it-center just-cont-center">

        @foreach( $dcComics as $elem )
        <div class="card mb-3 mr-5 padd-5" style="width: 18rem; height: 35rem;">
            <img src="{{$elem['thumb']}}" class="card-img-top" alt="{{$elem['series']}}">
            <div class="card-body">

                <h5 class="card-title">{{$elem['series']}}</h5>

                <p class="card-text">
                    {{$elem['price']}}
                </p>

            </div>
        </div>
        @endforeach

    </div>

</div>
<!-- end: comics -->

@endsection