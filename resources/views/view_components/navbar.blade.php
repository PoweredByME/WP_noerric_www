<div class="navbar-fixed">
    <nav class="white nf-div n-hide">
        <div class="navbar-div nav-wrapper">
            <a href="#!" class="brand-logo">
                <span><img class="hide-on-small-only" src="{{asset('img/logo.png')}}" height="48"></span>
                <span><img class="hide-on-med-and-up" src="{{asset('img/logo.png')}}" height="46"></span>
                <span class="hide-on-small-only" style="">No<span style="font-weight:200;padding-left:1px;">erric</span></span>
            </a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                @foreach($navbar_link_data as $item)
                    <li>
                        <a href="{{$item->href}}" style="display:inline-flex; align-items:center">
                            <span style="margin-right:4px;"><i class="material-icons">{{$item->icon}}</i></span>
                            <span>{{$item->text}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</div>

<ul class="side-nav" id="mobile-demo">
    @foreach($navbar_link_data as $item)
        <!--<li>
            <a href="">
                <span style="margin-right:4px;"><i class="material-icons">{{$item->icon}}</i></span>
                <span></span>
            </a>
        </li>-->

        <li><a class="black-text" href="{{$item->href}}" style="font-weight:400"><i class="material-icons">{{$item->icon}}</i>{{$item->text}}</a></li>

    @endforeach
</ul>