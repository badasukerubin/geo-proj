<?php
/**
 * Created by PhpStorm.
 * User: Adewale Toluwani
 * Date: 27/03/2018
 * Time: 01:55 PM
 */
?>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    {{--<form role="search">--}}
        {{--<div class="form-group">--}}
            {{--<input type="text" class="form-control" placeholder="Search">--}}
        {{--</div>--}}
    {{--</form>--}}
    <ul class="nav menu">
        <li class="{{ $page == 'admin' ? 'active' : ''}}"><a href="{{ url('admin') }}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li class="{{ $page == 'reg' ? 'active' : ''}}"><a href="{{ url('admin/reg_user') }}"><em class="fa fa-calendar">&nbsp;</em> Register User</a></li>
        <li class="{{ $page == 'rega' ? 'active' : ''}}"><a href="{{ url('admin/reg_admin') }}"><em class="fa fa-calendar">&nbsp;</em> Register Admins</a></li>
        <li class="{{ $page == 'upload' ? 'active' : ''}}"><a href="{{ url('admin/upload_data') }}"><em class="fa fa-bar-chart">&nbsp;</em> Upload Spatial Data</a></li>
        <li class="{{ $page == 'clear' ? 'active' : ''}}"><a href="{{ url('admin/clear_site') }}"><em class="fa fa-toggle-off">&nbsp;</em> Clear Site</a></li>
        {{--<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>--}}
        {{--<li class="parent "><a data-toggle="collapse" href="#sub-item-1">--}}
                {{--<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>--}}
            {{--</a>--}}
            {{--<ul class="children collapse" id="sub-item-1">--}}
                {{--<li><a class="" href="#">--}}
                        {{--<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1--}}
                    {{--</a></li>--}}
                {{--<li><a class="" href="#">--}}
                        {{--<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2--}}
                    {{--</a></li>--}}
                {{--<li><a class="" href="#">--}}
                        {{--<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3--}}
                    {{--</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        <li><a href="{{ url('admin/logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><em class="fa fa-power-off">&nbsp;</em> Logout</a>
            <form id="logout-form" action="{{  url('admin/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</div>