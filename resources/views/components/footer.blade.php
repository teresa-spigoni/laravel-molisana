<footer>

    @php
        $pastificioLinks = [
            'Il Pastificio',
            'Grano decorticato a pietra',
            'Il Molise c\'è',
            'Filiera Integrata',
            '100 anni di pasta',
            'Sartoria della pasta',
            'Spaghetto Quadrato',
            'Le persone'
        ];
        $prodottiLinks = [
            'Le Classiche',
            'Le Integrali',
            'Le Speciali',
            'Le Biologiche',
            'Le Gluten-Free',
            'Le Semole',
            'Le Extra Lusso'
        ];
        $collezioneDaChefLinks = [
            'Collezione da Chef',
            'Grandi Cucine',
            'Biologiche',
            'Quadrate'
        ];
    @endphp

    <div class="left">
        <div><img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt=""></div>
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

    <div class="center">
        <h2>PASTIFICIO</h2>
        @foreach ($pastificioLinks as $link)
            <div><a href="#">{{$link}}</a></div>
        @endforeach

        <h2>PRODOTTI</h2>
        @foreach ($prodottiLinks as $link)
            <div><a href="#">{{$link}}</a></div>
        @endforeach
    </div>

    <div class="right">
        <h2>COLLEZIONE DA CHEF</h2>
        @foreach ($collezioneDaChefLinks as $link)
            <div><a href="#">{{$link}}</a></div>
        @endforeach
    </div>

    <div><img src="" alt=""></div>

</footer>