@extends('layouts.app')

@section('title-page')
Laravel Comics | Home
@endsection

@section('content')

<!-- start: jumbotron -->

<!-- end: jumbotron -->

<!-- start: comics -->
<div class="container">

    <div class="row debug align-it-center just-cont-center">

        @foreach( $dcComics as $elem )
        <div class="card mb-3 mr-5 debug" style="width: 18rem;">
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