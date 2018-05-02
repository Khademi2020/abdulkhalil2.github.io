<!DOCTYPE html>
<html>
<head>

	@include('layout.partials.head')

	
</head>
<body>
	    <div class="background">
        <div class="page">
            <div class="header">
                <a href="index.html" id="logo"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                <ul>
                    <li>
                        <a href="news.html">News</a>
                    </li>
                    <li>
                        <a href="team.html">Team</a>
                    </li>
                    <li>
                        <a href="{{route('login')}}">Login</a>
                    </li>
                    <li>
                        <a href="{{route('user.rigester')}}">Rigeestration</a>
                    </li>
                    @if(Auth::check())
                    <li>
                        <a href="{{route('logout')}}">Logout</a>
                    </li>
                    @else
                                            <li>
                        <a href="about.html">About</a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="body home">


            @yield('content')



            	            </div>
            <div class="footer">
                <div>
                    <ul>
                        <li class="selected">
                            <a href="index.html">Home</a>|
                        </li>
                        <li>
                            <a href="news.html">News</a>|
                        </li>
                        <li>
                            <a href="team.html">Team</a>|
                        </li>
                        <li>
                            <a href="schedule.html">Schedule</a>|
                        </li>
                        <li>
                            <a href="videos.html">Videos</a>|
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                    </ul>
                    <p>
                        &#169; ZZ TIGERS 2023. All Rights Reserved
                    </p>
                </div>
                <div class="connect">
                    <span>Follow Us</span> <a href="http://freewebsitetemplates.com/go/facebook/" id="fb">fb</a> <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a> <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">google+</a> <a href="http://www.freewebsitetemplates.com/misc/contact" id="contact">contact</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>