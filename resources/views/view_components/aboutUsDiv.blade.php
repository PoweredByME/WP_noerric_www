<div class="about-us-div-container" id="about-us-div">
    
    <div class="aud-content-div center n-hide container">
        <h1>About.</h1>    
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
            {{$about_us_data->less_text}}
        </p>

        <div class="center aud-know-more-btn-div">
            <a href="#modal1" class="modal-trigger">
                <i class="material-icons medium">info</i>
                <br>KNOW MORE
            </a>
        </div>
    </div>

</div>

  <!-- Modal Trigger -->
  

  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer about-us-modal">
    <div class="modal-content" style="border-radius:0px;box-shadow:none">
        <div class="center">
            <img class="aum-img"  src="{{asset('img/front_div_bg.png')}}">
        </div>
        
        <p class="aum-text">
            @foreach($about_us_data->more_text as $item)
                {{$item}} <br><br>
            @endforeach
        </p>
    </div>
    <div class="modal-footer aum-footer">
      <a class="modal-action modal-close btn-flat ">CLOSE</a>
    </div>
  </div>