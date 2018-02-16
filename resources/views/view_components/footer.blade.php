
        <footer class="page-footer footer-div">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text" style="display:flex;align-items:center; font-weight:400;">
                  <i class="material-icons medium">phone</i>
                  <span>
                    Contact <br>Us.
                  </span>
                </h5>
                <p class="grey-text text-lighten-4">You can contact us anytime you want and now what kind products we are working on.</p>
                <ul>
                  @foreach($footer->contacts as $item)
                    <a class="grey-text text-lighten-3"  href="{{$item->href}}" style="display:flex; align-items:center;letter-spacing:1px;"><i class="material-icons" style="margin-right:6px;">{{$item->icon}}</i>
                      <span class="tooltipped"  data-position="top" data-delay="50" data-tooltip="{{$item->tooltip}}">
                        {{$item->contact}}
                      <span>
                    </a>
                  @endforeach
                </ul>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">EXPLORE</h5>
                <ul>
                @foreach($navbar_link_data as $item)
                    <li>
                        <a href="{{$item->href}}" class="grey-text text-lighten-3" style="display:inline-flex; align-items:center">
                            <span style="margin-right:4px;"><i class="material-icons">{{$item->icon}}</i></span>
                            <span>{{$item->text}}</span>
                        </a>
                    </li>
                @endforeach
                <a href="#modal2" class="grey-text text-lighten-3 modal-trigger" style="display:inline-flex; align-items:center">
                            <span style="margin-right:4px;"><i class="material-icons">star</i></span>
                            <span>Credits</span>
                </a>
              </ul>

              </div>
            </div>
          </div>
          <div class="footer-copyright fc-div">
            <div class="container">
            © 2018 Copyright | <span style="font-weight:600">No</span>erric
            <a class="grey-text text-lighten-4 right" href="#top-ref-div" style="display:flex;align-items:center">
              GO TO TOP
              <i class="material-icons" style="margin-left:6px">arrow_upward</i>
            </a>
            </div>
          </div>
        </footer>




  <!-- Modal Structure -->
  <div id="modal2" class="modal modal-fixed-footer about-us-modal">
    <div class="modal-content" style="border-radius:0px;box-shadow:none">
        <div class="center">
            <img class="aum-img"  src="{{asset('img/front_div_bg.png')}}">
        </div>
        
        <p class="aum-text  center">
          We thank the following mentions sources for the icon they provided.
          <br><br>
          Icons (Map, YouTube) made by <a href="https://www.flaticon.com/authors/pixel-buddha" title="Pixel Buddha">Pixel Buddha</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
          <br><br>
          Icons (Facebook, Twitter, Instagram, LinkedIn) made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
        </p>
        
        
    </div>
    <div class="modal-footer aum-footer">
      <a class="modal-action modal-close btn-flat ">CLOSE</a>
    </div>
  </div>