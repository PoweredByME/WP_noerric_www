
<div id="carousel-container-div-id" class="carousel-container-div">
    <div class="slider fullscreen" style="position:relative !important">
            <ul class="slides">
                @foreach($carousel_data as $item)
                    <li>
                        <img src="{{asset($item->image)}}">
                        <div class="caption {{$item->cap_align}}">
                            <h1 class="">{{$item->heading}}</h1>
                            <p class="hide-on-small-only light white-text text-lighten-3 container {{$item->text_align}}">
                                {{$item->desktop_text}}  
                            </p>
                            <p class="hide-on-med-and-up light white-text text-lighten-3 container {{$item->text_align}}">
                                {{$item->mobile_text}}  
                            </p>
                        </div>

                    </li>
                @endforeach
            </ul>
    </div>
</div>
    
    