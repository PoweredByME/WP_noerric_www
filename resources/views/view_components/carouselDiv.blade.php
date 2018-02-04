
<div id="carousel-container-div-id" class="carousel-container-div">
    <div class="slider fullscreen" style="position:relative !important">
            <ul class="slides">
                @foreach($carousel_data as $item)
                    <li>
                        <img src="{{asset($item->image)}}">
                        <div class="caption {{$item->cap_align}}">
                        <h1 class="">{{$item->heading}}</h1>
                        <p class="hide-on-small-only light white-text text-lighten-3 container">
                            {{$item->desktop_text}}  
                        </p>
                        <p class="hide-on-med-and-up light white-text text-lighten-3 container">
                            {{$item->mobile_text}}  
                        </p>
                    </div>

                    </li>
                @endforeach
<!--
                <li>
                    <img src="indexPageContent/aboutUsDivContent/img/1.jpg">
                    <div class="caption center-align">
                        <h1 class="about-us-caption-h1" style="font-family: 'Caveat Brush', cursive !important">We. Paint.</h1>
                        <p class="hide-on-small-only light white-text text-lighten-3 container">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p class="hide-on-med-and-up light white-text text-lighten-3 container">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="assets/images/BackImage1.jpg">
                    <div class="caption left-align">
                        <h1 style="font-family: 'Shadows Into Light Two', cursive !important">We. Sketch.</h1>
                        <p class="hide-on-small-only light white-text text-lighten-1 container left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p class="hide-on-med-and-up light white-text text-lighten-1 container left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="indexPageContent/aboutUsDivContent/img/3.jpg"> 
                    <div class="caption right-align">
                      <h1 style="font-family: 'Archivo Black', cursive !important;">Have. Culture.</h1>
                      <p class="hide-on-small-only light white-text text-lighten-1 container right">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p class="hide-on-med-and-up light white-text text-lighten-1 container right">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </li>
                <li>
                    <img src="indexPageContent/aboutUsDivContent/img/4.jpg"> 
                    <div class="caption left-align">
                      <h1 style="font-family: 'Monoton', cursive !important;">Party. ALOT.</h1>
                      <p class="hide-on-small-only light white-text text-lighten-3 container left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p class="hide-on-med-and-up light white-text text-lighten-3 container left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </li> -->
            </ul>
        </div>

    </div>
    
    