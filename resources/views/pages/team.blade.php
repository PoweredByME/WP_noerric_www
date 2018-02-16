@extends('layouts.app')

@section('content')

<div style='background:#404040;display:flex;align-items:center;height:100vh'>
    <div class="center" style="margin:auto;">
        <img src="{{asset('img/front_div_bg.png')}}" style="height:280px; width:280px;">
        <p class="" style="color : #59C2D1; margin-top:16px;">
            THANK YOU FOR YOUR INTEREST IN OUR TEAM.
            <br><br>The information regarding our team will be disclosed soon. <br>
            Stay in touch with us.
            <br>
        </p>
        
        <a class="waves-effect waves-light btn grey" href="index"><i class="material-icons left">home</i>HOME</a>
    </div>
    
</div>

@endsection

