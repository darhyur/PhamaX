@extends('layouts.pages')
@section ('back_end')
    class="active"

@endsection

@section('title')

    PHAMAX


@endsection



@section('content')



    <div class="container">
        <br>
        <br>
        <br>
        <br>


            <div class="container">
                <div class="row">
                    <div class="col-dm-3">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"> Admin Access <span class="glyphicon-log-in"></span></button><br>
                    </div>
                    <div class="col-md-3 col-md-offset-6">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">New Admin Access <span class="glyphicon-log-in"></span></button>
                    </div>
                </div>
            <div>
            </div>
            {{--<div class="row">--}}
                {{--<div class="col-md-5 col-md-offset-4">--}}
                    {{--<div class="bottom-message">--}}
                             {{--<p>Tha adverse effect of fake and expired drugs can't be quantify--}}
                            {{--kindly confirm the authenticity of our products on--}}
                            {{--<a href="" ><span style="font-weight:bold">Drug Authentication System</span></a>.before usage </p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}



            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">



                    <div class="panel panel-default">
                        <div class="panel-heading">Admin Login  <button type="button" class="close" data-dismiss="modal">&times;</button></div>



                        <div class="panel-body">

                            <form class="form-horizontal" role="form" method="POST" action="{{ route('backEnd.auth') }}">
                                {!! csrf_field() !!}

                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label class="col-md-3 control-label">Username</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="col-md-3 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{--end of modala--}}


            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog">



                    <div class="panel panel-default">
                        <div class="panel-heading">Create admin access  <button type="button" class="close" data-dismiss="modal">&times;</button></div>



                        <div class="panel-body">

                            <form class="form-horizontal" method="POST" action="{{ route('backEnd.admin.store') }}">
                                {{ csrf_field() }}

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>

                                    </div>

                                @endif


                                <div class="form-group">

                                    {{--<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">--}}
                                    <label for="firstname" class="col-md-4 control-label">First Name</label>

                                    <div class="col-md-6">
                                        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                        {{--@if ($errors->has('firstname'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('firstname') }}</strong>--}}
                                        {{--</span>--}}
                                        {{--@endif--}}
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <label for="lastname" class="col-md-4 control-label">Last Name</label>

                                    <div class="col-md-6">
                                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                        @if ($errors->has('lastname'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label for="username" class="col-md-4 control-label">Username</label>

                                    <div class="col-md-6">
                                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                {{--<div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">--}}
                                {{--<label for="job_title" class="col-md-4 control-label">Job Title</label>--}}

                                {{--<div class="col-md-6">--}}
                                {{--<input id="job_title" type="text" class="form-control" name="job_title" value="{{ old('job_title') }}" required autofocus>--}}

                                {{--@if ($errors->has('job_title'))--}}
                                {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('job_title') }}</strong>--}}
                                {{--</span>--}}
                                {{--@endif--}}
                                {{--</div>--}}
                                {{--</div>--}}


                                <div class="form-group{{ $errors->has('attached_faculty') ? ' has-error' : '' }}">
                                    <label for="attached_faculty" class="col-md-4 control-label">Attached Faculty</label>

                                    <div class="col-md-6">
                                        <input id="attached_faculty" type="text" class="form-control" name="attached_faculty" value="{{ old('attached_faculty') }}" required autofocus>

                                        @if ($errors->has('attached_faculty'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('attached_faculty') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            {{--end of modala--}}



            <div class="welcome">


                <p> PHAMAX </p>

            </div>
            <div class="welcome-sub">
                <p>HOME OF QUALITY AND AFFORDABLE DRUGS</p>


            </div>
            <div class="row">
                <div class="col-md-5 col-md-offset-4">
                    <div class="bottom-message">

                        <p>Tha adverse effect of fake and expired drugs can't be quantify
                            kindly confirm the authenticity of our products on
                            <a href="" ><span style="font-weight:bold">Drug Authentication System</span></a>.before usage </p>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection

