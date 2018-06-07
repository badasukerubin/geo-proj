@extends('admin.layouts.master')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}">
                        <em class="fa fa-home"></em>
                    </a></li>
                <li class="active">Users</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users</h1>
            </div>

        </div><!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default articles">
                    <div class="panel-heading">
                        All Users
                    </div>
                    <div class="content table-responsive table-full-width">
                        <p class="alert-danger" style="padding-left: 5px">
                            @if (session('msg'))
                                {{ session('msg') }}
                            @endif
                        </p>
                        <table class="table table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Full name</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            {{--<th>On/Off</th>--}}
                            <th>IP Address</th>
                            <th>Created at</th>
                            </thead>
                            <tbody>
                            @foreach($user as $users)
                                <tr>
                                    <td>{{ $users->id }}</td>
                                    <td>{{ $users->name }}</td>
                                    <td>{{ $users->phonenumber }}</td>
                                    <td>{{ $users->email }}</td>
                                    {{--<td>--}}
                                        {{--@if($users->isOnline())--}}
                                            {{--<span class="bg-primary">&nbsp;Online&nbsp;</span>--}}
                                        {{--@else--}}
                                            {{--<span class="bg-danger">&nbsp;Offline&nbsp;</span>--}}
                                        {{--@endif--}}
                                    {{--</td>--}}
                                    <td>{{ $users->ip_address }}</td>
                                    <td>{{ date('d M Y h:i:s',strtotime($users->created_at)) }}</td>

                                    {{--<td><a href="" class="btn btn-primary">Edit</a></td>--}}
                                    <td><a class="btn btn-danger" href="{{ url('admin/reg_user/destroy/'.$users->id.'/'.$users->name) }}">Delete</a></td>
                                </tr>
                            @endforeach
                            <td><a href="{{ url('admin/reg_user/add/') }}" class="btn btn-info">Add Users</a></td>
                            </tbody>
                        </table>
                        <div class="pagination">
                            {!! $user->render() !!}
                        </div>
                    </div>
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
