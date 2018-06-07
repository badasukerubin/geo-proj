<?php
/**
 * Created by PhpStorm.
 * User: Adewale Toluwani
 * Date: 27/03/2018
 * Time: 01:55 PM
 */
?>

<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                {{--<a href="index.html"><img src="{{ asset('assets/front/img/logo.png') }}" alt="" title="" /></a>--}}
                <a href="index.html" style="font-weight: 900; font-size: 20px; color: white;">GeoServer</a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li style="color:white !important;">Welcome {{ Auth::user()->name }}</li>
                    <li class="menu-active">
                        <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    {{--<li><a href="about.html">About Us</a></li>--}}
                    {{--<li><a href="services.html">Services</a></li>--}}
                    {{--<li><a href="products.html">Products</a></li>--}}
                    {{--<li class="menu-has-children"><a href="">Blog</a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="blog-home.html">Blog Home</a></li>--}}
                            {{--<li><a href="blog-single.html">Blog Single</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="contact.html">Contact</a></li>--}}
                    {{--<li class="menu-has-children"><a href="">Dropdown</a>--}}
                        {{--<ul>--}}
                            {{--<li><a href="elements.html">Elements</a></li>--}}
                            {{--<li><a href="product-details.html">Product Details</a></li>--}}
                            {{--<li class="menu-has-children"><a href="">Level 2</a>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#">Item 1</a></li>--}}
                                    {{--<li><a href="#">Item 2</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->