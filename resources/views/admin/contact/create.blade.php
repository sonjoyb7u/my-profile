@extends('admin.components.layout')

@section('title', 'CREATE CONTACT | MY PROFILE')

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
                    <li><a href="{{ route('admin.contact.index') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>Contact</a></li>
                    <li><a href="{{ route('admin.contact.create') }}"><i class="fa fa-edit"  aria-hidden="true"></i>Create Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row animated fadeInUp">
            <div class="col-sm-10 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                @includeIf('show-message.message')
                <h3 class="section-subtitle"><b>CONTACT FORM</b></h3>
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div style="margin-bottom: 15px;" class="row">
                            <div class="col-xs-6">
                                <h4>Create Contact :</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="{{ route('admin.contact.index') }}" class="btn btn-primary">Manage Contacts</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <form class="form-horizontal" action="{{ route('admin.contact.store') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name" class="col-sm-4 control-label">Visitor Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter Visitor Name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Visitor Email Address</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Enter Visitor Email Address">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="subject" class="col-sm-4 control-label">Visitor Subject </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="subject" class="form-control" id="subject" value="{{ old('subject') }}" placeholder="Enter Visitor Subject">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="message" class="col-sm-4 control-label">Visitor Message </label>
                                        <div class="col-sm-8">
                                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Enter Visitor Message"> {{ old('message') }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-primary">Add Visitor</button>
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



