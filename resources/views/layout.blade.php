<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" class="favicon">
    <title>Molisana</title>
</head>

<body>

    {{-- general container --}}
    <div class="big-container">

        <header>

            @php
            $nav = [
            [
            'titolo' => 'Home',
            'src' => '/'

            ],
            [
            'titolo' => 'Prodotti',
            'src' => '/'

            ],
            [
            'titolo' => 'News',
            'src' => '/'

            ]
            ];
            @endphp

            {{-- container --}}
            <div class="container">

                {{-- logo --}}
                <img class="logo" src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png"
                    alt="">
                {{-- logo --}}

                {{-- navbar --}}
                <nav class="header-nav">
                    @foreach ($nav as $navItem => $value)
                    <div class="header-nav-item"><a href='{{$value['src']}}'>{{$value['titolo']}}</a></div>
                    @endforeach
                </nav>
                {{-- navbar --}}
                <div class="menu"><i class="fas fa-bars"></i></div>

            </div>
            {{-- container --}}

        </header>

        <main>
            @yield('content')
        </main>

        <footer>

            @php
            $pastificioLinks = [
            [
            'titolo' => 'Il Pastificio'
            ],
            [
            'titolo' => 'Grano decorticato a pietra'
            ],
            [
            'titolo' => 'Il Molise c\'è'
            ],
            [
            'titolo' => 'Filiera Integrata'
            ],
            [
            'titolo' => '100 anni di pasta'
            ],
            [
            'titolo' => 'Sartoria della pasta'
            ],
            [
            'titolo' => 'Spaghetto Quadrato'
            ],
            [
            'titolo' => 'Le persone'
            ]
            ];
            $prodottiLinks = [
            [
            'titolo' => 'Le Classiche'
            ],
            [
            'titolo' => 'Le Integrali'
            ],
            [
            'titolo' => 'Le Speciali'
            ],
            [
            'titolo' => 'Le Biologiche'
            ],
            [
            'titolo' => 'Le Gluten-Free'
            ],
            [
            'titolo' => 'Le Semole'
            ],
            [
            'titolo' => 'Le Extra Lusso'
            ]
            ];
            $collezioneDaChefLinks = [
            [
            'titolo' => 'Collezione da Chef'
            ],
            [
            'titolo' => 'Grandi Cucine'
            ],
            [
            'titolo' => 'Biologiche'
            ],
            [
            'titolo' => 'Quadrate'
            ]
            ];
            @endphp

            {{-- container --}}
            <div class="container footer-container">

                {{-- footer left --}}
                <div class="left footer-container-box">
                    <div>
                        <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="">
                    </div>
                    Ragione sociale: La Molisana S.P.A. <br>
                    Sede Legale: Contrada Colle delle Api, 100/A <br>
                    86100 - Campobasso (CB) <br>
                    Pec: lamolisana@pec.it <br>
                    Tel: +39 0874 4981 <br>
                    Fax: +39 0874 629584 <br>
                    info@lamolisana.it (per segnalazioni degli utenti) <br>
                    commerciale@lamolisana.it <br>
                    export@lamolisana.it <br>
                    numero verde 8000818081 <br>
                    telefono 3801292455
                </div>
                {{-- footer left --}}

                {{-- footer center --}}
                <div class="center footer-container-box">
                    <h2>PASTIFICIO</h2>
                    @foreach ($pastificioLinks as $link => $value)
                    <div class="link">
                        <a href="#">{{$value['titolo']}}</a>
                    </div>
                    @endforeach

                    <h2>PRODOTTI</h2>
                    @foreach ($prodottiLinks as $link => $value)
                    <div class="link">
                        <a href="#">{{$value['titolo']}}</a>
                    </div>
                    @endforeach
                </div>
                {{-- footer center --}}

                {{-- footer right --}}
                <div class="right footer-container-box">
                    <h2>COLLEZIONE DA CHEF</h2>
                    @foreach ($collezioneDaChefLinks as $link => $value)
                    <div class="link">
                        <a href="#">{{$value['titolo']}}</a>
                    </div>
                    @endforeach
                </div>
                {{-- footer right --}}

            </div>
            {{-- container --}}

            <div class="footer-img">
                <img src="https://www.lamolisana.it/wp-content/uploads/2020/06/footer-montagne-bottom.jpg" alt="">
            </div>

        </footer>



    </div>
    {{-- general container --}}

</body>

</html>
