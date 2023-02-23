@php
 $nav_links = config('navLinks')   
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC daniele</title>
    
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <div class="header-stripe"></div>
        <div class="nav-wrapper">
            <div class="container">
                <nav>
                    <div class="main-nav-logo">
                        <img src="/img/dc-logo.png" alt="dc logo">
                    </div>
                    <div class="nav-list">
                        <ul>
                            @foreach ($nav_links as $nav_link)
                            <li >
                                <a href="{{$nav_link['link']}}" >{{$nav_link['name']}}</a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="input-wrapper">
                            <input type="text" placeholder="Cerca">
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="jumbotron">
        <div class="jumbo-wrapper"></div>
    </section>
    @yield('content')
    <section>
        <div class="bottom-main-wrapper">
            <div class="container">
                <div class="list-wrapper">
                    <ul>  
                        <h2>Titolo 1</h2>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>

                    </ul>
                    <ul>  
                        <h2>Titolo 2</h2>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>

                    </ul>
                    <ul>  
                        <h2>Titolo 3</h2>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>

                    </ul>
                    <ul>  
                        <h2>Titolo 4</h2>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>
                        <li>prova</li>

                    </ul>
                </div>
                <div class="img-wrapper">
                    <img src="./img/dc-logo-bg.png" alt="big dc logo">
                </div>
            </div>
        </div>
    </section>
</body>
</html>