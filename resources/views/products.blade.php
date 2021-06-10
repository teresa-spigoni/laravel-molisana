@extends('layout')

@section('content')

{{-- main --}}
<div class="products-main">

    {{-- container --}}

    @php
    $prod = $idProduct - 1;
    @endphp

    <div id="pre" onclick="precedent({{$prod}})"><i class="fas fa-chevron-left"></i></div>
    <div class="container">
        <h2>{{$pastaArray[$prod]['titolo']}}</h2>
        <img src="{{$pastaArray[$prod]['src-h']}}" alt="">
        <img src="{{$pastaArray[$prod]['src-p']}}" alt="">
        <p class="productDescription">{!!$pastaArray[$idProduct - 1]['descrizione'];!!}</p>
    </div>
    <div id="next"><i class="fas fa-chevron-right"></i></div>


    {{-- container --}}

</div>
{{-- main --}}

@endsection
