@extends('admin.components.layout')

@section('title', 'SHOW PROFILE || MY PROFILE')

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
                    <li><a href="{{ route('admin.profile.index') }}"><i class="fa fa-tasks"></i>Manage Profile</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-2">
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <!--PROFILE-->
                <div>
                    <div class="profile-photo">
                        <img width="170" height="150" alt="User photo" src="{{ asset('uploads/images/profile/'.$data->image) }}" />
                    </div>
                    <div class="user-header-info float-right">
                        <h2 class="user-name">{{ $data->user->full_name }}</h2>
                        <h5 class="user-position">{{ $data->designation }}</h5>
                        <div class="user-social-media">
                            <span class="text-lg"><a target="_blank" href="https://twitter.com/sonjoy_john" class="fa fa-twitter-square"></a> <a target="_blank" href="www.facebook.com/" class="fa fa-facebook-square"></a> <a target="_blank" href="https://github.com/sonjoyb7u" class="fa fa-github-square"></a> <a target="_blank" href="#" class="fa fa-google-plus-square"></a></span>
                        </div>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <!--CONTACT INFO-->
                <div class="panel bg-scale-0 b-primary bt-sm mt-xl">
                    <div class="panel-content">
                        <h4 class=""><b>Contact Information</b></h4>
                        <ul class="user-contact-info ph-sm">
                            <li><b><i class="color-primary mr-sm fa fa-envelope"></i></b> {{ $data->user->email }}/li>
                            <li><b><i class="color-primary mr-sm fa fa-phone"></i></b>{{ $data->phone }}</li>
                            <li><b><i class="color-primary mr-sm fa fa-globe"></i></b>{{ $data->address }}</li>
                            <li class="mt-sm">
                                <p>{{ substr($data->bio, 0, 74) }}</p>
                                <p>{{ substr($data->bio, 75, 326) }}</p>
                                <p>{{ substr($data->bio, 400, 596) }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <!--LIST-->
                <div class="panel  b-primary bt-sm ">
                    <div class="panel-content">
                        <div class="widget-list list-sm list-left-element ">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><i class="fa fa-check color-success"></i></div>
                                        <div class="text">
                                            <span class="title">3 Jobs</span>
                                            <span class="subtitle">Completed</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><i class="fa fa-clock-o color-warning"></i></div>
                                        <div class="text">
                                            <span class="title">3 Projects</span>
                                            <span class="subtitle">working on</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="left-element"><i class="fa fa-envelope color-primary"></i></div>
                                        <div class="text">
                                            <span class="title">Leave a Message</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection





