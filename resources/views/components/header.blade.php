<hearder>

    @php
        $nav = ['Home', 'Prodotti', 'News'];
    @endphp

    <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="">
    <nav class="header-nav">
        @foreach ($nav as $navItem)
            <div class="header-nav-item">{{$navItem}}</div>
        @endforeach
    </nav>
</header>