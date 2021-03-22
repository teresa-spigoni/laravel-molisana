@extends('layout')

@section('content')

        {{-- main --}}
        <div class="homepage-main">

            {{-- container --}}
            <div class="container">

                @php

                    $pastas = [
                        'LE LUNGHE',
                        'LE CORTE',
                        'LE CORTISSIME'
                    ];

                @endphp

                @foreach ($pastas as $pasta)

                    <section>

                        <h2>{{$pasta}}</h2>
                        <div class="pasta-container">
                            @foreach ($pastaArray as $item => $value)

                                @if (($pasta === 'LE LUNGHE' && $value['tipo'] === 'lunga') ||
                                    ( $pasta === 'LE CORTE' && $value['tipo'] === 'corta') ||
                                    ($pasta === 'LE CORTISSIME' && $value['tipo'] === 'cortissima'))

                                    <a href="/product/{{$item + 1}}">
                                        <img src='{{$value['src']}}'' alt="" class="pasta-poster">
                                    </a>

                                @endif


                            @endforeach
                        </div>

                    </section>

                @endforeach

            </div>
            {{-- container --}}

        </div>
        {{-- main --}}

@endsection
