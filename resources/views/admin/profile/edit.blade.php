@extends('admin.components.layout')

@section('title', 'EDIT PROFILE | MY PROFILE')

@section('header')
    @includeIf('admin.components.partials.header')
@endsection

@section('left-sidebar')
    @includeIf('admin.components.partials.left-sidebar')
@endsection

@section('content')
    <div class="content">
        <!-- content HEADER -->
        <!-- ========================================================= -->
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.profile.index') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>Profile</a></li>
                    <li><a href="{{ route('admin.profile.edit', [base64_encode($data->id)]) }}"><i class="fa fa-edit"  aria-hidden="true"></i>Edit Profile</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row animated fadeInUp">
            <div class="col-sm-10 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                @includeIf('show-message.message')
                <h3 class="section-subtitle"><b>PROFILE FORM</b></h3>
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div style="margin-bottom: 15px;" class="row">
                            <div class="col-xs-6">
                                <h4>Edit Profile :</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="{{ route('admin.profile.show', [base64_encode($data->id)]) }}" class="btn btn-primary">Show Profile</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <form class="form-horizontal" action="{{ route('admin.profile.update', [base64_encode($data->id)]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="first_name" class="col-sm-3 control-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $data->first_name }}">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="middle_name" class="col-sm-3 control-label">Middle Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="middle_name" class="form-control" id="middle_name" value="{{ $data->middle_name }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name" class="col-sm-3 control-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $data->last_name }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">Email Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" class="form-control" id="email" value="{{ $data->user['email'] }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="user_name" class="col-sm-3 control-label">User Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="user_name" class="form-control" id="user_name" value="{{ $data->user['user_name'] }}">
                                        </div>
                                    </div>

{{--                                    <div class="form-group">--}}
{{--                                        <label for="password" class="col-sm-3 control-label">Password</label>--}}
{{--                                        <div class="col-sm-9">--}}
{{--                                            <input type="text" name="password" class="form-control" id="password" value="{{ encrypt($data->user['password'], true) }}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="form-group">
                                        <label for="age" class="col-sm-3 control-label">Age</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="age" class="form-control" id="age" value="{{ $data->age }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="gender" class="col-sm-3 control-label">Gender</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="gender" class="form-control" name="gender" value="Male" {{ $data->gender === 'Male' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="gender" class="form-control" name="gender" value="Female" {{ $data->gender === 'Female' ? 'checked' : '' }} disabled="">
                                                <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="gender" class="form-control" name="gender" value="Other" {{ $data->gender === 'Other' ? 'checked' : '' }} disabled="">
                                                <label class="form-check-label" for="inlineCheckbox3">Other</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image" class="col-sm-3 control-label">Profile Image</label>
                                        <div class="col-sm-9">
                                            <span><img width="100" height="80" src="{{ asset('uploads/images/profile/'.$data->image) }}" alt="{{$data->image}}"></span>
                                            <input type="file" name="image" class="form-control" id="image">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="col-sm-3 control-label">Phone Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="phone" class="form-control" id="phone" value="{{ $data->phone }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="address" class="col-sm-3 control-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="address" class="form-control" id="address" value="{{ $data->address }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="bio" class="col-sm-3 control-label">Bio-data</label>
                                        <div class="col-sm-9">
                                            <textarea name="bio" id="bio" cols="30" rows="5" class="form-control">
                                                {{ $data->bio }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

