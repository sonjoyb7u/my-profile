@extends('admin.components.layout')

@section('title', 'CREATE SERVICE | MY PROFILE')

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
                    <li><a href="{{ route('admin.service.create') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>Service</a></li>
                    <li><a href="{{ route('admin.service.create') }}"><i class="fa fa-edit"  aria-hidden="true"></i>Create Service</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row animated fadeInUp">
            <div class="col-sm-10 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                @includeIf('show-message.message')
                <h3 class="section-subtitle"><b>SERVICE FORM</b></h3>
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div style="margin-bottom: 15px;" class="row">
                            <div class="col-xs-6">
                                <h4>Create Service :</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="{{ route('admin.service.index') }}" class="btn btn-primary">Manage Service</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <form class="form-horizontal" action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="title" class="col-sm-3 control-label">Service Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" placeholder="Enter Service Name">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="sub_title" class="col-sm-3 control-label">Service Sub-Title</label>
                                        <div class="col-sm-9">
                                            <textarea name="sub_title" id="sub_title" cols="30" rows="3" class="form-control" placeholder="Enter Service Sub-Title">
                                                {{ old('sub_title') }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="icon_name" class="col-sm-3 control-label">Service Icon class Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="icon_name" class="form-control" id="icon_name" value="{{ old('icon_name') }}" placeholder="Enter Service Icon class Name">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="image" class="col-sm-3 control-label">Choose Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary">Add Service</button>
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


