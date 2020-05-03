@extends('admin.components.layout')

@section('title', 'CREATE URL-LINK | MY PROFILE')

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
                    <li><a href="{{ route('admin.url-link.create') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>Url-Links</a></li>
                    <li><a href="{{ route('admin.url-link.create') }}"><i class="fa fa-edit"  aria-hidden="true"></i>Create Url-Links</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row animated fadeInUp">
            <div class="col-sm-10 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                @includeIf('show-message.message')
                <h3 class="section-subtitle"><b>URL-LINK FORM</b></h3>
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div style="margin-bottom: 15px;" class="row">
                            <div class="col-xs-6">
                                <h4>Create URL-LINK :</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="{{ route('admin.url-link.index') }}" class="btn btn-primary">Manage Url-Links</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <form class="form-horizontal" action="{{ route('admin.url-link.store') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name" class="col-sm-3 control-label">Url-Link Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter Url-Link Name">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="url_link" class="col-sm-3 control-label">Url-Link Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="url_link" class="form-control" id="url_link" value="{{ old('url_link') }}" placeholder="Enter Url-Link Address">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary">Add Url-Link</button>
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


