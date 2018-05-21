@extends('layouts.Adminnn')
@section('back_end_product')
    class="active"
@endsection

@section('title')

    Brand Management

@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class = "col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Product</h4>
                        </div>


                        <div class = "card-body">
                            <form action="{{ route('superadmin.course.update' , ['course' => $course->id]) }}" method="post" novalidate>

                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>

                                    </div>

                                @endif

                                <div class="form-group{{ $errors->has('course_code') ? ' has-error' : '' }}">
                                    <label for="course_code" class="col-md-4 control-label">Course Code</label>

                                    <div class="col-md-6">
                                        <input id="course_code" type="text" class="form-control" name="course_code" value="{{ $course->course_code }}" required autofocus>

                                        @if ($errors->has('course_code'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('course_code') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <br>

                                <div class="form-group{{ $errors->has('course_name') ? ' has-error' : '' }}">
                                    <label for="course_name" class="col-md-4 control-label">course_name</label>

                                    <div class="col-md-6">
                                        <input id="course_name" type="text" class="form-control" name="course_name" value="{{ $course->course_code }}" required autofocus>

                                        @if ($errors->has('course_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('course_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <br>


                                <div class="form-group {{ $errors->has('department') ? ' has-error' : '' }}">
                                    <label for="department" class="col-md-3 control-label">department</label>
                                    <div class="col-md-9">

                                        <select name="department" id="department" class="form-control" required>




                                            <option value="Mechanical Engineering {{ ($course->department == 'Mechanical Engineering')? ' selected': '' }}">Mechanical Engineering</option>
                                            <option value=" {{ ($course->department == 'Petroleum Engineering')? ' selected': '' }}">Petroleum Engineering</option>
                                            <option value=" {{ ($course->department == 'Electrical Engineering ')? ' selected': '' }}">Electrical Engineering</option>
                                            <option value=" {{ ($course->department == 'Physics')? ' selected': '' }}">Physics</option>
                                            <option value=" {{ ($course->department == 'Chemistry')? ' selected': '' }}">Chemistry</option>
                                            <option value=" {{ ($course->department == 'Mathematics')? ' selected': '' }}">Mathematics </option>
                                            <option value=" {{ ($course->department == 'Law')? ' selected': '' }}">Law</option>
                                            <option value=" {{ ($course->department == 'classic')? ' selected': '' }}">Classic</option>
                                            <option value=" {{ ($course->department == 'Adult Education')? ' selected': '' }}">Adult Education </option>
                                            <option value=" {{ ($course->department == 'Teacher Education')? ' selected': '' }}">Teacher Education</option>
                                            <option value=" {{ ($course->department == 'Yoruba')? ' selected': '' }}">Yoruba</option>
                                            <option value=" {{ ($course->department == 'Communication and Language Art')? ' selected': '' }}">Communication and Language Art</option>
                                            <option value="{{ ($course->department == 'General Study Programs')? ' selected': '' }}">General Study Programs</option>
                                        </select>
                                        @if ($errors->has('department'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group {{ $errors->has('faculty') ? ' has-error' : '' }}">
                                    <label for="faculty" class="col-md-3 control-label">faculty</label>
                                    <div class="col-md-9">

                                        <select name="faculty" id="faculty" class="form-control" required>

                                            <option value="Law {{ ($course-> faculty == 'Law')? ' selected': '' }}">Law</option>
                                            <option value="Education {{ ($course-> faculty == 'Education')? ' selected': '' }}">Education</option>
                                            <option value="Technology {{ ($course-> faculty == 'Technology')? ' selected': '' }}">Technology</option>
                                            <option value="Art {{ ($course-> faculty == 'Art')? ' selected': '' }}">Art</option>
                                            <option value="Science {{ ($course-> faculty == 'Science')? ' selected': '' }}">Science</option>
                                        </select>
                                        @if ($errors->has('faculty'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('faculty') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('unit') ? ' has-error' : '' }}">
                                    <label for="unit" class="col-md-3 control-label">unit</label>
                                    <div class="col-md-9">

                                        <select name="unit" id="unit" class="form-control" required>

                                            <option value="1 {{ ($course-> unit == '1')? ' selected': '' }}">1</option>
                                            <option value="2 {{ ($course-> unit == '2')? ' selected': '' }}">2</option>
                                            <option value="3 {{ ($course-> unit == '3')? ' selected': '' }}">3</option>
                                            <option value="4 {{ ($course-> unit == '4')? ' selected': '' }}">4</option>
                                            <option value="5 {{ ($course-> unit == '5')? ' selected': '' }}">5</option>
                                            <option value="6 {{ ($course-> unit == '6')? ' selected': '' }}">6</option>
                                        </select>
                                        @if ($errors->has('unit'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('unit') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group{{ $errors->has('lecturer') ? ' has-error' : '' }}">
                                    <label for="lecturer" class="col-md-4 control-label">Lecturer</label>

                                    <div class="col-md-6">
                                        <input id="lecturer" type="text" class="form-control" name="lecturer" value="{{ $course->lecturer }}" required autofocus>

                                        @if ($errors->has('lecturer'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('lecturer') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>

                                </div>
                            </form>
                            {{--{!! Form::model( $brand, ['route'=>['backEnd.admin.brand.update',$brand->id], 'method'=>'POST', 'files'=> true ])!!}--}}
                            {{--{!! csrf_token() !!}--}}
                            {{--@if($errors->any())--}}
                                {{--<div class = "alert alert-danger">--}}
                                    {{--<ul>--}}
                                        {{--@foreach($errors->all() as $error)--}}
                                            {{--<li>{{$error}}</li>--}}
                                        {{--@endforeach--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--@endif--}}

                            {{--<div group ="form-group">--}}
                                {{--{{Form::label('brand_name','Brand Name')}}--}}
                                {{--{{Form::text('brand_name', null, array('class'=>'form-control'))}}--}}
                            {{--</div><br>--}}


                            {{--<div group ="form-group">--}}
                                {{--{{Form::label('brand_location','Brand Office')}}--}}
                                {{--{{Form::text('brand_location', null, array('class'=>'form-control'))}}--}}
                            {{--</div><br>--}}

                            {{--<div group ="form-group">--}}
                                {{--{{Form::label('description','Description')}}--}}
                                {{--{{Form::longtext('description', null, array('class'=>'form-control'))}}--}}
                            {{--</div><br>--}}


                            {{--<br>--}}

                            {{--<div group ="form-group">--}}
                                {{--{{Form::label('brand_image','Brand Image')}}--}}
                                {{--{{Form::file('brand_image', null, array('class'=>'form-control'))}}--}}
                            {{--</div>--}}

                            {{--{{Form::submit('Create',array('class'=>'btn btn-primary'))}}--}}
                            {{--{!! Form::close()!!}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
