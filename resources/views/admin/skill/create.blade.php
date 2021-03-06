@extends('admin.components.layout')

@section('title', 'CREATE SKILL | MY PROFILE')

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
                    <li><a href="{{ route('admin.skill.create') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>Skill</a></li>
                    <li><a href="{{ route('admin.skill.create') }}"><i class="fa fa-edit"  aria-hidden="true"></i>Create Skill</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row animated fadeInUp">
            <div class="col-sm-10 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                @includeIf('show-message.message')
                <h3 class="section-subtitle"><b>SKILL FORM</b></h3>
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div style="margin-bottom: 15px;" class="row">
                            <div class="col-xs-6">
                                <h4>Create Skill :</h4>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="{{ route('admin.skill.index') }}" class="btn btn-primary">Manage Skill</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <form class="form-horizontal" action="{{ route('admin.skill.store') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="skill_name" class="col-sm-3 control-label">Skill Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="skill_name" class="form-control" id="skill_name" value="{{ old('skill_name') }}" placeholder="Enter Skill Name">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label for="skill_percent" class="col-sm-3 control-label">Skill Percentage</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="skill_percent" class="form-control" id="skill_percent" value="{{ old('skill_percent') }}" placeholder="Enter Skill Percentage">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="skill_color_code" class="col-sm-3 control-label">Skill Color Code</label>
                                        <div class="col-sm-9">
                                            <select name="skill_color_code" id="skill_color_code" class="form-control">
                                                <option value="">Select Skill Color Code</option>
                                                @foreach($color_code as $row)
                                                <option value="{{ $row }}">{{ $row }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary">Add Skill</button>
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


