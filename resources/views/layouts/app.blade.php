<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
         <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+39+Text" rel="stylesheet"> 
        <title>{{config('app.name', 'Noerric')}} | {{$page_tab_title}}</title>
        <style>
            
            @font-face {
                font-family: Anurati;
                src: url("fonts/Anurati-Regular.otf") format("opentype");
            }
            
        
            .loading-page{
                position: fixed;
                z-index: 1000;
                background: black;
                height: 100vh;
                width: 100vw;
                display: flex;
                align-items: center;
                transition-property: all;
                transition-duration: 0.3s;
                opacity: 1;
            }
            
            .lp-content-div{
                margin-left: auto;
                margin-right: auto;
                display: flex;
                align-items: center;
            }
            
            .lpcd-text{
                font-family: Anurati;
                font-size: 48px;
                color: #f5f5f6;
            }
            
            .lpcdt-noerric{
                font-size: 18px;
                font-family: sans-serif;
                display: block;
                background: #f5f5f6;
                text-align: center;
                color: black;
            }
            
            .disappear-anime.loading-page{
                opacity: 0;
            }
            
            .disappear.loading-page{
                display: none;
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
            <div class="lp-content-div">
                <p class="lpcd-text">
                    <span>L</span>
                    <span>O</span>
                    <span>A</span>
                    <span>D</span>
                    <span>I</span>
                    <span>N</span>
                    <span>G</span><br>
                    <span class="lpcdt-noerric">NOERRIC</span>
                </p>
            </div>
        </div>
        
        
        @yeild('navbar')
        @yield('content')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>        
        <script>
            
            window.onload = function(){
                $('.loading-page').addClass('disappear-anime');
                setTimeout(function(){$('.loading-page').addClass('disappear');}, 300);
            }
            
        </script>
    </body>
</html>
