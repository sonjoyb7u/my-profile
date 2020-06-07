@extends('admin.components.layout')

@section('title', 'EDIT CONTACT | MY PROFILE')

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
                    <li><a href="{{ route('admin.client.index') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>Client</a></li>
                    <li><a href="{{ route('admin.client.edit', [base64_encode($data->id)]) }}"><i class="fa fa-edit"  aria-hidden="true"></i>Edit Client</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row animated fadeInUp">
            <div class="col-sm-10 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                @includeIf('show-message.message')
                <h3 class="section-subtitle"><b>CLIENT FORM</b></h3>
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div style="margin-bottom: 15px;" class="row">
                            <div class="col-xs-6">
                                <h4>Edit Client :</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="{{ route('admin.client.show', [base64_encode($data->id)]) }}" class="btn btn-primary">Show Client</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <form class="form-horizontal" action="{{ route('admin.client.update', [base64_encode($data->id)]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="name" class="col-sm-4 control-label">Client Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="name" class="form-control" id="name" value="{{ $data->name }}" placeholder="Enter Client Name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="comment" class="col-sm-4 control-label">Client Comment</label>
                                        <div class="col-sm-8">
                                            <textarea name="comment" id="comment" cols="30" rows="5" class="form-control">
                                                {{ $data->comment }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image" class="col-sm-4 control-label">Client Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="image" class="form-control" id="image" value="{{ old('image') }}">
                                            <img width="100" height="80" src="{{ asset('uploads/images/client/'.$data->image) }}" alt="{{ $data->image }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-primary">Update Client</button>
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

