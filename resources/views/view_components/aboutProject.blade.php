<div class="pw-1 hide-on-med-and-down" style='background: url("{{asset($aboutProjectParallax_img)}}")'
    data-parallaxie='{
	    "speed": 0.3
	    "size": "auto"
    }'
></div>

<div class="ipw-1 hide-on-large-only">
    <img src="{{asset($aboutProjectParallax_img)}}">
</div>

    


<div class="about-us-div-container trigger-2" style="background:#f8f8f8;" id="about-project-div">
    
    <div class="aud-content-div aud-content-div-2 center n-hide container">
        <h1>Product.</h1>    
        <h5>
            <span style="font-weight:400">N</span>
            <span style="transition-delay: 0.1s;font-weight:400">O</span>
            <span style="transition-delay: 0.2s">E</span>
            <span style="transition-delay: 0.3s">R</span>
            <span style="transition-delay: 0.4s">R</span>
            <span style="transition-delay: 0.5s">I</span>
            <span style="transition-delay: 0.6s">C</span>
        </h5>    

        
        <p>
            {{$aboutProject_less_text}}
        </p>

        <div class="center aud-know-more-btn-div">
            <a href="about" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Know more about the product Noerric is developing">
                <i class="material-icons medium">settings</i>
                <br>KNOW MORE
            </a>
        </div>
    </div>

</div>



<div class="pw-1 hide-on-med-and-down" style='background: url("{{asset($aboutTeamParallax_img)}}")'
    data-parallaxie='{
	    "speed": 0.2
	    "size": "auto"
    }'
></div>


<div class="ipw-1 hide-on-large-only">
    <img src="{{asset($aboutTeamParallax_img)}}">
</div>












<div class="about-us-div-container trigger-3" style="background:#f8f8f8" id="about-team-div">
    
    <div class="aud-content-div aud-content-div-3 center n-hide container">
        <h1>Team.</h1>    
        <h5>
            <span style="font-weight:400">N</span>
            <span style="transition-delay: 0.1s;font-weight:400">O</span>
            <span style="transition-delay: 0.2s">E</span>
            <span style="transition-delay: 0.3s">R</span>
            <span style="transition-delay: 0.4s">R</span>
            <span style="transition-delay: 0.5s">I</span>
            <span style="transition-delay: 0.6s">C</span>
        </h5>    

        <p>

            {{$aboutTeam_less_text}}
            <br>

            <div class="row img-row">
            @foreach($aboutTeam_img as $item)
                <div class="col l4 m6 s12">
                    <div class="n-hide ti-tile center">
                        <img src="{{asset($item->img)}}" class="ti-img circle tooltipped"  data-position="top" data-delay="50" data-tooltip="Hi! I am a {{trim($item->name)}}, {{trim($item->designation)}} of Noerric.">
                        <p class="ti-name-text">{{trim($item->name)}}</p>
                        <p class="ti-designation-text">{{trim($item->designation)}} | No<span>erric</span></p>
                    </div>
                </div>
            @endforeach
            </div>

            

        </p>



        <div class="center aud-know-more-btn-div">
            <a href="team" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Know more about the people working at Noerric">
                <i class="material-icons medium">group</i>
                <br>KNOW MORE
            </a>
        </div>
    </div>

</div>



<div class="about-us-div-container trigger-4 social-media-div" style="background-image:url({{asset('img/sm_bg.jpg')}})">
<div class="aud-content-div aud-content-div-4 center n-hide container">
        <h1>Connect.</h1>    
        <h5>
            <span style="font-weight:400">N</span>
            <span style="transition-delay: 0.1s;font-weight:400">O</span>
            <span style="transition-delay: 0.2s">E</span>
            <span style="transition-delay: 0.3s">R</span>
            <span style="transition-delay: 0.4s">R</span>
            <span style="transition-delay: 0.5s">I</span>
            <span style="transition-delay: 0.6s">C</span>
        </h5>    

        <p>
            Stay in touch with Noerric on social media and stay up-to-date.
            

            <div class="row img-row">
            @foreach($social_media as $item)
                <div class="col l2 m3 s6">
                    <div class="n-hide sm-tile center">
                        <a href="{{$item->href}}">
                            <img src="{{asset($item->img)}}" class="sm-img tooltipped"  data-position="top" data-delay="50" data-tooltip="{{$item->name}}">
                        </a>
                    </div>
                </div>
            @endforeach
            </div>

            


        </p>
        

    </div>
</div>

