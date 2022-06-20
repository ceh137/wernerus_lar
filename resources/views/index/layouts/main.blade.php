<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B4H0P1FCTM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-B4H0P1FCTM');
    </script>
    <title>Werner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--    <link rel="shortcut icon" href="images/favicon.png">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <!--        <link rel="stylesheet" href="css/uikit.min.css" />-->
    <!--        <script src="js/uikit.min.js"></script>-->
    <!--        <script src="js/uikit-icons.min.js"></script>-->
    <link rel="stylesheet" href="{{ asset('css/uikit.css') }}" />
    <script src=" {{asset('js/uikit.js')}}"></script>
    <script src="{{ asset('js/uikit-icons.js') }}"></script>
</head>
<body>
<div  class="tm-page">
    <div class="tm-header-mobile uk-hidden@m">
        <div class="tm-headerbar-top">
            <div class="uk-container uk-flex uk-flex-wrap uk-flex-between hrd-top">
                <div class="uk-logo">
                    <a href="/"> <img alt="" src="images/logo.png"></a>
                </div>
                <div class="uk-flex">
                    <div class="hrd-contacts">
                        <div class="hdr-phone"><a href="tel:88006003055"></a></div>
                    </div>
                    <div class="hdr-login">
                    <a class="login-widget" href="#link"> </a>
                    </div>
                    <nav uk-navbar="" class="uk-navbar">
                        <div class="uk-navbar-right">
                            <a class="uk-navbar-toggle" href="#tm-mobile" uk-toggle="" aria-expanded="false">
                                <div uk-navbar-toggle-icon="" class="uk-icon uk-navbar-toggle-icon"></div>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div id="tm-mobile" uk-offcanvas="" mode="slide" overlay="" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close uk-icon uk-close" type="button" uk-close=""></button>
                <div class="uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
                    <div>
                        <div class="uk-panel">
                            <ul class="uk-nav-default uk-nav-parent-icon uk-nav-parent-icon" uk-nav>
                                <li><a href="{{ route('index') }}" class="menu-item">Главная</a></li>
                                <li><a href="{{ route('about') }}" class="menu-item">о Компании</a></li>
                                <li><a href="{{ route('prices') }}" class="menu-item">Тарифы</a></li>
                                <li><a href="{{ route('docs') }}" class="menu-item">Документы</a></li>
                                <!--								<li><a href="docs.php" class="menu-item">Документы</a></li>-->
                                <li><a href="{{ route('order') }}" class="menu-item">Оформить</a></li>
                                <!--								<li><a href="#link" class="menu-item">Отследить</a></li>-->
                                <li><a href="{{ route('contacts') }}" class="menu-item">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-header uk-visible@m" uk-header>
        <div class="tm-headerbar-top">
            <div class="uk-container uk-flex uk-flex-middle uk-flex-between hrd-top">
                <div class="uk-logo">
                    <a href="/"> <img alt="Доставка грузов" src="/images/logo.png" /></a>
                </div>
                <div class="uk-navbar-container">
                    <div class="uk-container hrd-bottom">
                        <nav class="uk-navbar" uk-navbar>
                            <div class="grid-navbar uk-flex uk-flex-middle">
                                <ul class="uk-navbar-nav uk-flex uk-flex-between">
                                    <li><a href="{{ route('index') }}" class="menu-item">Главная</a></li>
                                    <li><a href="{{ route('about') }}" class="menu-item">о Компании</a></li>
                                    <li><a href="{{ route('prices') }}" class="menu-item">Тарифы</a></li>
                                    <li><a href="{{ route('docs') }}" class="menu-item">Документы</a></li>
                                    <!--								<li><a href="docs.php" class="menu-item">Документы</a></li>-->
                                    <li><a href="{{ route('order') }}" class="menu-item">Оформить</a></li>
                                    <!--								<li><a href="#link" class="menu-item">Отследить</a></li>-->
                                    <li><a href="{{ route('contacts') }}" class="menu-item">Контакты</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <div class="hrd-contacts">
                        <div class="hdr-phone"><a href="tel:88006003055">8 (800) 600-30-55</a></div>
                    </div>
                    <div class="hdr-login">
                        @auth
                            <a class="login-widget" href="{{ route('account') }}"> </a>
                        @endauth
                        @guest
                            <a class="login-widget" href="{{ route('login') }}"> </a>
                            @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        @yield('content')
    </div>
    <div id="section-footer" class="uk-section uk-section-secondary">
        <div class="uk-container">
            <div class="tm-footerbar-top">
                <div class="uk-container uk-flex uk-flex-middle uk-flex-between hrd-top">
                    <div class="uk-logo">
                        <a href="{{ route('index') }}"> <img alt="" src="/images/logo.png" /></a>
                    </div>
                    <div class="uk-navbar-container uk-visible@m">
                        <div class="uk-container hrd-bottom">
                            <nav class="uk-navbar" uk-navbar>
                                <div class="grid-navbar uk-flex uk-flex-middle">
                                    <ul class="uk-navbar-nav uk-flex uk-flex-between">										<li><a href="about.php" class="menu-item">о Компании</a></li>
                                        <li><a href="{{ route('prices') }}" class="menu-item">Тарифы</a></li>
                                        <li><a href="{{ route('docs') }}" class="menu-item">Документы</a></li>
                                        <!--								<li><a href="docs.php" class="menu-item">Документы</a></li>-->
                                        <li><a href="{{ route('order') }}" class="menu-item">Оформить</a></li>
                                        <!--								<li><a href="#link" class="menu-item">Отследить</a></li>-->
                                        <li><a href="{{ route('contacts') }}" class="menu-item">Контакты</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="hrd-contacts">
                            <div class="hdr-phone"><a href="tel:88006003055">8 (800) 600-30-55</a></div>
                        </div>
                        <!--						<div class="hdr-login uk-visible@m"> <a class="login-widget" href="#link">-->
                        <!--						Личный кабинет-->
                        <!--					</a> </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(request()->route()->getName() != 'prices' && request()->route()->getName() != 'contacts')
<script src="{{ asset('js/arrays.js') }}"></script>
<script src="{{ asset('js/ADarrays.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@if(request()->has('from_city'))

<script>
    app.selected_from_city = "<?= request()['from_city'] ?>";
    app.selected_to_city = "<?= request()['to_city'] ?>";
    app.kg = <?= request()['kilos'] ?>;
    app.meters = <?= request()['meters'] ?>;
</script>

@endif
@endif
{{--    <script src="https://unpkg.com/vue@next"></script>--}}


{{--    <script src="vue.js"></script>--}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
{{--    <script src="ahunter-suggest.js"></script>--}}
    <!--<script SRC="props.js"></script>


    <script src="js/timerforindex.js"></script>

    Optional JavaScript; choose one of the two! -->
</body>

</html>
