<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <style>

            .content {
                text-align: center;
            }

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .carousel-box .links > a{
                color: #fff;
            }
            .font-uppercase{
                color: #636b6f;
                padding: 0 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                cursor: pointer;
            }
            .top-left.links.w-100.position-menu-left a {
                color: #fff;
            }
        </style>
    </head>
    <body>
        
        @include("includes.menu")

        <div class="slide">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="1"></li>
                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="2"></li>
                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="3"></li>
                    <li data-target="#carouselExampleSlidesOnly" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block img-bg" src="img/slide0.jpg" alt="First slide">
                        <div class="carousel-box">
                            <div class="title m-b-md">
                                <span class="laraColor">#</span> Laravel
                            </div>
                            <div class="links">
                                <a href="#Documentation">
                                    <span class="laraColor">#</span> Documentation
                                </a>
                                <a href="#Laracasts">
                                    <span class="laraColor">#</span> Laracasts
                                </a>
                                <a href="#News">
                                    <span class="laraColor">#</span> News
                                </a>
                                <a href="#Nova">
                                    <span class="laraColor">#</span> Nova
                                </a>
                                <a href="#Forge">
                                    <span class="laraColor">#</span> Forge
                                </a>
                                <a href="#GitHub">
                                    <span class="laraColor">#</span> GitHub
                                </a>
                            </div>
                        </div>
                        <div class="img-bg textura-de-pontos fixo-topo" style=""></div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-bg" src="img/slide1.jpg" alt="First slide">
                        <div class="carousel-box">
                            <div class="title m-b-md">
                                <span class="laraColor">#</span> Laravel
                            </div>
                            <div class="links">
                                <a href="#Documentation">
                                    <span class="laraColor">#</span> Documentation
                                </a>
                                <a href="#Laracasts">
                                    <span class="laraColor">#</span> Laracasts
                                </a>
                                <a href="#News">
                                    <span class="laraColor">#</span> News
                                </a>
                                <a href="#Nova">
                                    <span class="laraColor">#</span> Nova
                                </a>
                                <a href="#Forge">
                                    <span class="laraColor">#</span> Forge
                                </a>
                                <a href="#GitHub">
                                    <span class="laraColor">#</span> GitHub
                                </a>
                            </div>
                        </div>
                        <div class="img-bg textura-de-pontos fixo-topo" style=""></div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-bg" src="img/slide2.jpg" alt="First slide">
                        <div class="carousel-box">
                            <div class="title m-b-md">
                                <span class="laraColor">#</span> Laravel
                            </div>
                            <div class="links">
                                <a href="#Documentation">
                                    <span class="laraColor">#</span> Documentation
                                </a>
                                <a href="#Laracasts">
                                    <span class="laraColor">#</span> Laracasts
                                </a>
                                <a href="#News">
                                    <span class="laraColor">#</span> News
                                </a>
                                <a href="#Nova">
                                    <span class="laraColor">#</span> Nova
                                </a>
                                <a href="#Forge">
                                    <span class="laraColor">#</span> Forge
                                </a>
                                <a href="#GitHub">
                                    <span class="laraColor">#</span> GitHub
                                </a>
                            </div>
                        </div>
                        <div class="img-bg textura-de-pontos fixo-topo" style=""></div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-bg" src="img/slide3.jpg" alt="First slide">
                        <div class="carousel-box">
                            <div class="title m-b-md">
                                <span class="laraColor">#</span> Laravel
                            </div>
                            <div class="links">
                                <a href="#Documentation">
                                    <span class="laraColor">#</span> Documentation
                                </a>
                                <a href="#Laracasts">
                                    <span class="laraColor">#</span> Laracasts
                                </a>
                                <a href="#News">
                                    <span class="laraColor">#</span> News
                                </a>
                                <a href="#Nova">
                                    <span class="laraColor">#</span> Nova
                                </a>
                                <a href="#Forge">
                                    <span class="laraColor">#</span> Forge
                                </a>
                                <a href="#GitHub">
                                    <span class="laraColor">#</span> GitHub
                                </a>
                            </div>
                        </div>
                        <div class="img-bg textura-de-pontos fixo-topo" style=""></div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-bg" src="img/slide4.jpg" alt="First slide">
                        <div class="carousel-box">
                            <div class="title m-b-md">
                                <span class="laraColor">#</span> Laravel
                            </div>
                            <div class="links">
                                <a href="#Documentation">
                                    <span class="laraColor">#</span> Documentation
                                </a>
                                <a href="#Laracasts">
                                    <span class="laraColor">#</span> Laracasts
                                </a>
                                <a href="#News">
                                    <span class="laraColor">#</span> News
                                </a>
                                <a href="#Nova">
                                    <span class="laraColor">#</span> Nova
                                </a>
                                <a href="#Forge">
                                    <span class="laraColor">#</span> Forge
                                </a>
                                <a href="#GitHub">
                                    <span class="laraColor">#</span> GitHub
                                </a>
                            </div>
                        </div>
                        <div class="img-bg textura-de-pontos fixo-topo" style=""></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="p-lg-5 mt-3" style="color: #000;">
            
            <div class="content">
                <div class="title m-b-md">
                    <span class="laraColor">#</span> Laravel
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-4 p-4">
                    <a target="_blank" id="Documentation" href="https://laravel.com/docs/5.7" class="font-uppercase pl-3 pr-3 link-lista sliding-middle-out" title="Clique para ir direto a pagina!">
                        <span class="laraColor">#</span> Documentation
                    </a>
                    <div class="p-4" style="text-align: justify;">
                        <a target="_blank" href="https://laravel.com/docs/5.7">
                            <img src="img/InstallationLaravelThePHPFrameworkForWebArtisans.png" class="w-100">
                        </a>
                        {{-- <iframe src="https://laravel.com/docs/5.7" class="w-100"></iframe> --}}
                    </div>
                    <a target="_blank" href="https://laravel.com/docs/5.7">
                        <button type="button" class="btn btn-primary botao-laravel w-100">Abrir Site</button>
                    </a>
                </div>
                <div class="col-md-4 p-4">
                    <a target="_blank" id="Laracasts" href="https://laracasts.com" class="font-uppercase pl-3 pr-3 link-lista sliding-middle-out" title="Clique para ir direto a pagina!">
                        <span class="laraColor">#</span> Laracasts
                    </a>
                    <div class="p-4" style="text-align: justify;">
                        <a target="_blank" href="https://laracasts.com">
                            <img src="img/TheBestLaravelandPHPScreencasts.png" class="w-100">
                        </a>
                        {{-- <iframe src="https://laracasts.com" class="w-100"></iframe> --}}
                    </div>
                    <a target="_blank" hrs" href="https://laracasts.com">
                        <button type="button" class="btn btn-primary botao-laravel w-100">Abrir Site</button>
                    </a>
                </div>
                <div class="col-md-4 p-4">
                    <a target="_blank" id="News" href="https://laravel-news.com" class="font-uppercase pl-3 pr-3 link-lista sliding-middle-out" title="Clique para ir direto a pagina!">
                        <span class="laraColor">#</span> News
                    </a>
                    <div class="p-4" style="text-align: justify;">
                        <a target="_blank" href="https://laravel-news.com">
                            <img src="img/LaravelNews.png" class="w-100">
                        </a>
                        {{-- <iframe src="https://laravel-news.com" class="w-100"></iframe> --}}
                    </div>
                    <a target="_blank" href="https://laravel-news.com">
                        <button type="button" class="btn btn-primary botao-laravel w-100">Abrir Site</button>
                    </a>
                </div>
                <div class="col-md-4 p-4">
                    <a target="_blank" id="Nova" href="https://nova.laravel.com" class="font-uppercase pl-3 pr-3 link-lista sliding-middle-out" title="Clique para ir direto a pagina!">
                        <span class="laraColor">#</span> Nova
                    </a>
                    <div class="p-4" style="text-align: justify;">
                        <a target="_blank" href="https://nova.laravel.com">
                            <img src="img/LaravelNovaBeautifullydesignedadministrationpanelforLaravel.png" class="w-100">
                        </a>
                        {{-- <iframe src="https://nova.laravel.com" class="w-100"></iframe> --}}
                    </div>
                    <a target="_blank" href="https://nova.laravel.com">
                        <button type="button" class="btn btn-primary botao-laravel w-100">Abrir Site</button>
                    </a>
                </div>
                <div class="col-md-4 p-4">
                    <a target="_blank" id="Forge" href="https://forge.laravel.com" class="font-uppercase pl-3 pr-3 link-lista sliding-middle-out" title="Clique para ir direto a pagina!">
                        <span class="laraColor">#</span> Forge
                    </a>
                    <div class="p-4" style="text-align: justify;">
                        <a target="_blank" href="https://forge.laravel.com">
                            <img src="img/LaravelForgeInstantPHPServers.png" class="w-100">
                        </a>
                        {{-- <iframe src="https://forge.laravel.com" class="w-100"></iframe> --}}
                    </div>
                    <a target="_blank" href="https://forge.laravel.com">
                        <button type="button" class="btn btn-primary botao-laravel w-100">Abrir Site</button>
                    </a>
                </div>
                <div class="col-md-4 p-4">
                    <a target="_blank" id="GitHub" href="https://github.com/laravel/laravel" class="font-uppercase pl-3 pr-3 link-lista sliding-middle-out" title="Clique para ir direto a pagina!">
                        <span class="laraColor">#</span> GitHub
                    </a>
                    <div class="p-4" style="text-align: justify;">
                        <a target="_blank" href="https://github.com/laravel/laravel">
                            <img src="img/laravelAPHPframeworkforwebartisans.png" class="w-100">
                        </a>
                        {{-- <iframe src="https://github.com/laravel/laravel" class="w-100"></iframe> --}}
                    </div>
                    <a target="_blank" href="https://github.com/laravel/laravel">
                        <button type="button" class="btn btn-primary botao-laravel w-100">Abrir Site</button>
                    </a>
                </div>
            </div>
        </div>

        <footer class="main">
            <div class="links">
                <div class="links">
                    <a href="#Documentation">
                        <span class="laraColor">#</span> Documentation
                    </a>
                    <a href="#Laracasts">
                        <span class="laraColor">#</span> Laracasts
                    </a>
                    <a href="#News">
                        <span class="laraColor">#</span> News
                    </a>
                    <a href="#Nova">
                        <span class="laraColor">#</span> Nova
                    </a>
                    <a href="#Forge">
                        <span class="laraColor">#</span> Forge
                    </a>
                    <a href="#GitHub">
                        <span class="laraColor">#</span> GitHub
                    </a>
                </div>
            </div>
            <p>Pagina Home Laravel</p>
            <p class="less-significant">
                <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=leonardowebster15@gmail.com">
                    Designed by Leonardo Webster R. Silva
                </a>
            </p>
        </footer>

    </body>
</html>
