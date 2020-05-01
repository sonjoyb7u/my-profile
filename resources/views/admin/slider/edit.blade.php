@extends('admin.components.layout')

@section('title', 'EDIT SLIDER | MY PROFILE')

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
                    <li><a href="{{ route('admin.slider.index') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>Slider</a></li>
                    <li><a href="{{ route('admin.slider.edit', [base64_encode($data->id)]) }}"><i class="fa fa-edit"  aria-hidden="true"></i>Edit Slider</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row animated fadeInUp">
            <div class="col-sm-8 col-md-8 col-md-offset-2">
                @includeIf('show-message.message')
                <h3 class="section-subtitle"><b>SLIDER FORM</b></h3>
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div style="margin-bottom: 15px;" class="row">
                            <div class="col-xs-6">
                                <h4>Edit Slider :</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="{{ route('admin.slider.show', [base64_encode($data->id)]) }}" class="btn btn-primary">Show Slider</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10">
                                <form class="form-horizontal" action="{{ route('admin.slider.update', [base64_encode($data->id)]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="message" class="col-sm-4 control-label">Slider Message</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="message" class="form-control" id="message" value="{{ $data->message }}">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="col-sm-4 control-label">Slider Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="title" class="form-control" id="title" value="{{ $data->title }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="sub-title" class="col-sm-4 control-label">Slider Sub-Title</label>
                                        <div class="col-sm-8">
                                            <textarea name="sub_title" id="sub_title" cols="30" rows="4" class="form-control">
                                                {{ $data->sub_title }}
                                            </textarea>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image" class="col-sm-4 control-label">Category Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="image" class="form-control" id="image">
                                            <span><img width="120" height="70" src="{{ asset('uploads/images/slider/'.$data->image) }}" alt=""></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="start" class="col-sm-4 control-label">Slider Start (Date&Time)</label>
                                        <div style="padding-left: 15px; padding-right: 15px;" class="col-sm-8 input-group date" id="datetimepicker">
                                            <input type="text" name="start" class="form-control" value="{{ $data->start }}" />
                                            <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Slider End (Date&Time)</label>
                                        <div style="padding-left: 15px; padding-right: 15px;" class="col-sm-8 input-group date" id="datetimepicker">
                                            <input type="text" name="end" class="form-control" value="{{ $data->end }}" />
                                            <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-calendar"></span>
                                             </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="url" class="col-sm-4 control-label">Slider Url Link</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="url" class="form-control" id="end" value="{{ $data->url }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-primary">Update Slider</button>
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

