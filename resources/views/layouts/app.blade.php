<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>{{config('app.name', 'Noerric')}} | {{$page_tab_title}}</title>

        <!--METADATA-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="discription" content="Noerric Technologies Website">
        <meta name="keywords" content="Noerric, Noerric Technologies, Artificial Intelligence pakistan, pakistan, NUST, AI startup">
        <meta name="author" content="Saad Ahmad">
        <!-- Chrome, Firefox and Opera -->
        <meta name="theme-color" content="#404040">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#404040">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <!--INLINE STYLES-->
        <style>
            
            @font-face {
                font-family: Anurati;
                src: url("fonts/Anurati-Regular.otf") format("opentype");
            }
            
        
            .loading-page{
                position: fixed;
                z-index: 1000;
                background: white;
                height: 100vh;
                width: 100vw;
                display: flex;
                align-items: center;
                transition-property: all;
                transition-duration: 0.4s;
                opacity: 1;
            }
            
            .disappear-anime{
                transform: translateY(-100px);
                opacity: 0;
            }
            
            .disappear{
                display:none;
            }
            
            .lp-content-div{
                margin-left: auto;
                margin-right: auto;
                display: flex;
                align-items: center;
            }
           
            .loading {
                margin-left: auto;
                margin-right: auto;
            }
            .loading-bar {
                display: inline-block;
                width: 4px;
                height: 18px;
                border-radius: 4px;
                animation: loading 1s ease-in-out infinite;
                background-color: #404040;
                transform-origin: top;
            }
            .lb1 {
                animation-delay: 0s;
            }
            .lb2 {
                animation-delay: 0.09s;
            }
            .lb3 {
                animation-delay: .18s;
            }
            .lb4 {
                animation-delay: .27s;
            }
            .lb5 {
                animation-delay: .36s;
            }
            .lb6 {
                animation-delay: 0.45s;
            }
            .lb7 {
                animation-delay: .54s;
            }
            .lb8 {
                animation-delay: .63s;
            }
            .lb9 {
                animation-delay: .72s;
            }

            .loading span{
                margin-right: 4px;
                letter-spacing: 1px;
            }
            @keyframes loading {
                0% {
                    transform: scale(1);
                }
                20% {
                    transform: scale(1, 2.2);
                }
                40% {
                    transform: scale(1);
                }
            }
            
            @media only screen and (max-width: 420px) {
                .lpcd-text{
                    font-size: 36px;
                }

                .scroll-btn {
                    transform: scale(0.8) translateY(24px);
                }

            }



            @-webkit-keyframes ani-mouse {
                0% {
                opacity: 1;
                top: 29%;
                }
                15% {
                opacity: 1;
                top: 50%;
                }
                50% {
                opacity: 0;
                top: 50%;
                }
                100% {
                opacity: 0;
                top: 29%;
                }
            }
            @-moz-keyframes ani-mouse {
                0% {
                opacity: 1;
                top: 29%;
                }
                15% {
                opacity: 1;
                top: 50%;
                }
                50% {
                opacity: 0;
                top: 50%;
                }
                100% {
                opacity: 0;
                top: 29%;
                }
            }
            @keyframes ani-mouse {
                0% {
                opacity: 1;
                top: 29%;
                }
                15% {
                opacity: 1;
                top: 50%;
                }
                50% {
                opacity: 0;
                top: 50%;
                }
                100% {
                opacity: 0;
                top: 29%;
                }
            }
            .scroll-btn {
                display: flex;
                align-items:center;
                position: absolute;
                left: 0;
                right: 0;
                bottom: 24px;
                text-align: center;
                transition-property: : all;
                transition-duration:0.5s;
                opacity:1;
                transform : translateY(0px);
            }

            .n-hide.scroll-btn{
                transform : translateY(100px);
                opacity:0;
            }
            .scroll-btn-p{
                margin-left:0px;
                margin-top:-12px;
                font-family: 'Raleway', sans-serif !important;
                font-size: 12px;
            }
            .scroll-btn > * {
                display: inline-block;
                line-height: 18px;
                font-size: 13px;
                font-weight: normal;
                color: #BAB9B2;
                text-decoration:  none !important;
            }
            .scroll-btn > *:hover,
            .scroll-btn > *:focus,
            .scroll-btn > *.active {
                color: #BAB9B2;
            }
            .scroll-btn > *:hover,
            .scroll-btn > *:focus,
            .scroll-btn > *:active,
            .scroll-btn > *.active {
                opacity: 1;
                filter: alpha(opacity=100);
            }
            .scroll-btn .mouse {
                position: relative;
                display: block;
                width: 35px;
                height: 55px;
                margin: 0 auto 20px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                border: 3px solid #BAB9B2;
                border-radius: 23px;
            }

            

            .scroll-btn .mouse > * {
                position: absolute;
                display: block;
                top: 29%;
                left: 50%;
                width: 8px;
                height: 8px;
                margin: -4px 0 0 -4px;
                background: #BAB9B2;
                border-radius: 50%;
                -webkit-animation: ani-mouse 2.5s linear infinite;
                -moz-animation: ani-mouse 2.5s linear infinite;
                animation: ani-mouse 2.5s linear infinite;
            }
        </style>
        <!--STYLESHEETS-->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="icon" href="{{asset('img/logo.png')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
        
    </head>
    <body style="overflow:auto; width:100%; max-height:100%;padding:0px;margin:0px">
        
        <!-- Loading page -->
        <div class="loading-page" style="overflow:hidden">
            <div class="loading">
                <span>LOADING</span><br>
                <div class="loading-bar lb1"></div>
                <div class="loading-bar lb2"></div>
                <div class="loading-bar lb3"></div>
                <div class="loading-bar lb4"></div>
                <div class="loading-bar lb5"></div>
                <div class="loading-bar lb6"></div>
                <div class="loading-bar lb7"></div>
                <div class="loading-bar lb8"></div>
                <div class="loading-bar lb9"></div>
            </div>
        </div>
        
        
        @yield('content')
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
        <script src="{{asset('js/scriptJS.js')}}"></script>
        <script src="{{asset('js/parallax.js')}}"></script>
        
        <script>
            window.onload = windowOnLoad
        </script>
    </body>
</html>
