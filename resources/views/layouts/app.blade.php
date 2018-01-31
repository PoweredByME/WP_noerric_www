<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="icon" href="{{asset('img/logo.jpg')}}">
        <title>{{config('app.name', 'Noerric')}} | {{$page_tab_title}}</title>
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
            
            @media only screen and (max-width: 376px) {
                .lpcd-text{
                    font-size: 36px;
                    
                }
            }

            
        </style>
    </head>
    <body>
        
        <!-- Loading page -->
        <div class="loading-page">
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
        <script src="{{asset('js/scriptJS.js')}}"></script>
        <script>
            
            window.onload = windowOnLoad
            
        </script>
    </body>
</html>
