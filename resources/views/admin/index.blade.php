@extends('admin.layouts.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>

        </div><!--/.row-->

        <div class="row">
            <a href="{{ url('admin/reg_user') }}">
            <div class="col-md-6">
                <div class="panel panel-teal">
                    <div class="panel-heading dark-overlay">Register User</div>
                    <div class="panel-body">
                        <p>Register the military men.</p>
                    </div>
                </div>
            </div><!--/.col-->
            </a>

            <a href="{{ url('admin/upload_data') }}">
            <div class="col-md-6">
                <div class="panel panel-blue">
                    <div class="panel-heading dark-overlay">Upload Spatial Data</div>
                    <div class="panel-body">
                        <p>Upload the map data</p>
                    </div>
                </div>
            </div><!--/.col-->
            </a>

            <a href="{{ url('admin/clear_site') }}">
            <div class="col-md-6">
                <div class="panel panel-orange">
                    <div class="panel-heading dark-overlay">Clear Site</div>
                    <div class="panel-body">
                        <p>Confirm the Site Clear</p>
                    </div>
                </div>
            </div><!--/.col-->
            </a>

            <a href="{{ url('admin/reg_admin') }}">
            <div class="col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading dark-overlay">Register Admin</div>
                    <div class="panel-body">
                        <p>Register another administrator</p>
                    </div>
                </div>
            </div><!--/.col-->
            </a>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="back-link">Geoserver by <a href="">Webometrics</a></p>
            </div>
        </div><!--/.row-->
    </div>
@endsection
