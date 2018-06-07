@extends('admin.layouts.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}">
                        <em class="fa fa-home"></em>
                    </a></li>
                {{--<li><a href="{{ url('admin/reg_user') }}">Data</a></li>--}}
                <li class="active">Add Data</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Data</h1>
            </div>

        </div><!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default articles">
                    <div class="panel-heading">
                        Add Data
                    </div>
                    <form class="" method="POST" action="{{ route('data.add') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <br>
                        @if (\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Illuminate\Support\Facades\Session::get('success') }}</p>
                            </div>
                        @endif


                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Spatial Data</label>
                                <input type="file" name="data" id="data" class="form-control border-input" placeholder="Data" value="{{ old('data') }}">
                                @if ($errors->has('data'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Add Data</button>
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
