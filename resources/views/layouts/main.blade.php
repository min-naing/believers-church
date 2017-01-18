<!DOCTYPE html>
<!--[if IE 7]>					<html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if IE 9]>					<html class="ie9 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>

    @include('partials._meta')

    <title>@yield('title')</title>

    @include('partials._styles')

    @yield('styles')

    @include('partials._header_script')

    @yield('header_script')

</head>
<body class="color-1 h-style-1 text-1">

<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

<header id="header">

    <div class="container">

        <!-- - - - - - - - - - - - Logo - - - - - - - - - - - - - -->

        <a href="index.html" id="logo">
            <h1>Believers Church Myanmar</h1>
        </a><!--/ #logo-->

        <!-- - - - - - - - - - - end Logo - - - - - - - - - - - - -->

        <!-- - - - - - - - - - - - Event Holder - - - - - - - - - - - - - -->

        <div class="event-holder clearfix">
            <b>next event in:</b>
            <span class="event-numbers">05</span>
            <span class="event-text">days</span>
            <span class="event-numbers">07</span>
            <span class="event-text">hr</span>
            <span class="event-numbers">25</span>
            <span class="event-text">min</span>
            <span class="event-numbers">35</span>
            <span class="event-text">sec</span>
        </div><!--/ .event-holder-->

        <!-- - - - - - - - - - - end Event Holder - - - - - - - - - - - - -->

        <div class="clear"></div>

        <!-- - - - - - - - - - - - - Navigation - - - - - - - - - - - - - - -->

        @include('partials._nav_church')

        <!-- - - - - - - - - - - - end Navigation - - - - - - - - - - - - - -->

    </div><!--/ .container-->

</header><!--/ #header-->

<!-- - - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - - -->

@yield('slider')

<!-- - - - - - - - - - - - - end Slider - - - - - - - - - - - - - - -->


<!-- - - - - - - - - - - - - - Main - - - - - - - - - - - - - - - - -->


    @yield('content')


<!-- - - - - - - - - - - - - end Main - - - - - - - - - - - - - - - - -->


<!-- - - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

@include('partials._footer_church')

<!-- - - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

<!-- - - - - - - - - - - - - Bottom Footer - - - - - - - - - - - - - - -->

<footer id="bottom-footer" class="clearfix">

    <div class="container">

        <div class="copyright">Copyright © 2012  ·  72coder  ·  All rights reserved</div>

    </div><!--/ .container-->

</footer><!--/ #bottom-footer-->

<!-- - - - - - - - - - - - - end Bottom Footer - - - - - - - - - - - - - -->

@include('partials._footer_script')


</body>
</html>
