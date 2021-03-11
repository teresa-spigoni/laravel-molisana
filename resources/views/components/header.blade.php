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
        <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="">
        {{-- logo --}}

        {{-- navbar --}}
        <nav class="header-nav">
            @foreach ($nav as $navItem => $value)
                <div class="header-nav-item"><a href='{{$value['src']}}'>{{$value['titolo']}}</a></div>
            @endforeach
        </nav>
        {{-- navbar --}}

    </div>
    {{-- container --}}
    
</header>