@extends('layouts.master')

@section('content')

<div class="row">
    <div class="sixteen columns clearfix">
        <div class="breadcrumb">
            <a href="index.html" class="first_bc"><span>Home</span></a>
            <a href="about.html" class="last_bc"><span>About us</span></a>
        </div>

        <div class="page_heading"><h1>About Us</h1></div>
    </div>
</div>

<div class="clear"></div>

<div class="row">
    <div class="sixteen columns clearfix">
        <div class="information closable">We currently have an open position for a Web Designer! You can <a href="contact.html" id='tooltip1' original-title="Click to Contact us"><b>CONTACT US</b></a> to find out more or send us your CV! :)</div>
        <p>Pellentesque et consequat diam. Duis vitae ante elit. Ut ut purus in sapien volutpat fermentum. Suspendisse vel ullamcorper enim. Curabitur vel nunc eget dolor pellentesque faucibus. Maecenas odio turpis, auctor nec mollis pulvinar, congue ac tortor. Suspendisse et massa purus, non tincidunt turpis. Pellentesque nec quam at nunc sollicitudin varius sit amet eget sapien.</p>
    </div>
</div>

<!-- Tooltip -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#tooltip1').tipsy({fade: true, gravity: 's'});
    });
</script>
<!-- Tooltip::END -->

<div class="row team_block">
    <div class="four columns">
        <div class="pic">
            <img src="images/user.png"/>
            <h4>George Simpson</h4>
            <p class="team_desc">Founder and CEO</p>
        </div>
    </div>
    <div class="four columns">
        <div class="pic">
            <img src="images/user.png"/>
            <h4>Alexandra Miles</h4>
            <p class="team_desc">Designer</p>
        </div>
    </div>
    <div class="four columns">
        <div class="pic">
            <img src="images/user.png"/>
            <h4>John Silver</h4>
            <p class="team_desc">Developer</p>
        </div>
    </div>
    <div class="four columns">
        <div class="pic">
            <img src="images/user.png"/>
            <h4>Peter Campbell</h4>
            <p class="team_desc">Customer Relations</p>
        </div>
    </div>
</div>


<div class="row">

    <div class="two-thirds column">
        <h2 class="title"><span>Our Mission</span></h2>
        <p>Pellentesque et consequat diam. Duis vitae ante elit. Ut ut purus in sapien volutpat fermentum. Suspendisse vel ullamcorper enim. Curabitur vel nunc eget dolor pellentesque faucibus. Maecenas odio turpis, auctor nec mollis pulvinar, congue ac tortor. Suspendisse et massa purus, non tincidunt turpis. Pellentesque nec quam at nunc sollicitudin varius sit amet eget sapien.</p>
        <p>Integer varius porttitor vestibulum. Vivamus in velit eget enim commodo aliquam nec sed turpis. Nulla non molestie augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
    </div>

    <div class="one-third column">

        <h2 class="title"><span>Client Testimonials</span></h2>

        <!-- Testimonials -->
        <div class="testimonials">
            <div class='carousel_arrows_bgr'></div>
            <ul id="testimonials_carousel">
                <li class="one-third column alpha">
                    <div class="testimonial_quote">
                        <div class="quote_content">
                            <p>Wow, just the template we were looking for! Stunning clean design, element rich, clean code, browser friendly and easy to manage. Keep up the good work BlueOwlCreative!</p>
                            <span class="quote_arrow"></span>
                        </div>
                        <div class="quote_author"><div class="icon_testimonial">Eric Rogers</div><span class="quote_author_description">Developer, COMODO</span>
                        </div>
                    </div>
                </li>
                <li class="one-third column alpha">
                    <div class="testimonial_quote">
                        <div class="quote_content">
                            <p>On extremely short notice, BlueOwlCreative came up with the perfect design I previously envisioned for my company. Thank you for the personal touch, understanding and responsiveness to all our needs!</p>
                            <span class="quote_arrow"></span>
                        </div>
                        <div class="quote_author"><div class="icon_testimonial">Rumiana Gigova</div><span class="quote_author_description">Managing Partner, LuxDresses</span></div>
                    </div>
                </li>
                <li class="one-third column alpha">
                    <div class="testimonial_quote">
                        <div class="quote_content">
                            <p>Awesome theme! Very intuitive to use, clean coded, and easy to customize. Just rated 5 stars! Will recommend to all our partners and friend! Thanks a lot again!</p>
                            <span class="quote_arrow"></span>
                        </div>
                        <div class="quote_author"><div class="icon_testimonial">John Picket</div><span class="quote_author_description">Designer, BlueOwlCreative</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#testimonials_carousel').jcarousel({
                    auto: 4,
                    scroll: 1,
                    wrap: 'last',
                    easing: 'easeInOutExpo',
                    animation: 600
                });
            });
        </script>
        <!-- Testimonials::END -->

    </div>
</div>

@stop
