<header>

    @php
        $nav = ['Home', 'Prodotti', 'News'];
    @endphp

    {{-- container --}}
    <div class="container">

        {{-- logo --}}
        <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="">
        {{-- logo --}}

        {{-- navbar --}}
        <nav class="header-nav">
            @foreach ($nav as $navItem)
                <div class="header-nav-item"><a href="#">{{$navItem}}</a></div>
            @endforeach
        </nav>
        {{-- navbar --}}

    </div>
    {{-- container --}}
    
</header>