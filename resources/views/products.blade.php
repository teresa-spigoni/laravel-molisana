@extends('layout')

@section('content')

        {{-- main --}}
        <div class="products-main">

            {{-- container --}}
            <div class="container">
                <h2>{{$pastaArray[$idProduct - 1]['titolo']}}</h2>
                <img src="{{$pastaArray[$idProduct - 1]['src-h']}}" alt="">
                <img src="{{$pastaArray[$idProduct - 1]['src-p']}}" alt="">
                <p class="productDescription">{!!$pastaArray[$idProduct - 1]['descrizione'];!!}</p>
            </div>
            {{-- container --}}

        </div>
        {{-- main --}}

@endsection
