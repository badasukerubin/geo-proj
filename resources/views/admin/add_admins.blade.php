@extends('admin.layouts.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li><a href="{{ url('admin/reg_admin') }}">Admins</a></li>
                <li class="active">Add Admins</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Admins</h1>
            </div>

        </div><!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default articles">
                    <div class="panel-heading">
                        Add Admins
                    </div>
                    <form class="" method="POST" action="{{ route('admins.add') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <br>
                        @if (\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Illuminate\Support\Facades\Session::get('success') }}</p>
                            </div>
                        @endif


                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="fullname" id="fullname" class="form-control border-input" placeholder="Fullname" value="{{ old('fullname') }}">
                                @if ($errors->has('fullname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control border-input" placeholder="Email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="password" class="form-control border-input" placeholder="password" value="{{ old('password') }}">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Add Admin</button>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                    </form>
                </div><!--End .articles-->

            </div><!--/.col-->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="back-link">Geoserver by <a href="">Webometrics</a></p>
            </div>
        </div><!--/.row-->
    </div>
@endsection
