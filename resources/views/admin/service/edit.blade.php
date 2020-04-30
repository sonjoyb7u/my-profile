@extends('admin.components.layout')

@section('title', 'EDIT SERVICE | MY PROFILE')

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
                    <li><a href="{{ route('admin.service.index') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>Service</a></li>
                    <li><a href="{{ route('admin.service.edit', [base64_encode($data->id)]) }}"><i class="fa fa-edit"  aria-hidden="true"></i>Edit Service</a></li>
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
                                <h4>Edit Service :</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="{{ route('admin.service.index', [base64_encode($data->id)]) }}" class="btn btn-primary">Manage Services</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <form class="form-horizontal" action="{{ route('admin.service.update', [base64_encode($data->id)]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="title" class="col-sm-3 control-label">Service Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" class="form-control" id="title" value="{{ $data->title }}">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="sub_title" class="col-sm-3 control-label">Service Sub-Title</label>
                                        <div class="col-sm-9">
                                            <textarea name="sub_title" id="sub_title" cols="30" rows="3" class="form-control">
                                                {{ $data->sub_title }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="icon_name" class="col-sm-3 control-label">Service Icon class Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="icon_name" class="form-control" id="icon_name" value="{{ $data->icon_name }}" placeholder="Enter Service Icon class Name">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="image" class="col-sm-3 control-label">Choose Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="image" id="image" class="form-control">
                                            <img width="100" height="80" src="{{ asset('uploads/images/service/'.$data->image) }}" alt="{{ $data->image }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary">Update Service</button>
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

