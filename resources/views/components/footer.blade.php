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