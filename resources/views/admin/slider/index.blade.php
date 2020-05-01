@extends('admin.components.layout')

@section('title', 'MANAGE PROJECT || MY PROFILE')

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
                    <li><a href="{{ route('admin.project.index') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>Project</a></li>
                    <li><a href="{{ route('admin.project.index') }}"><i class="fa fa-tasks"></i>Manage Project</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

        <div class="row animated fadeInUp">
            <div class="col-sm-12 col-md-12">
                @includeIf('show-message.message')
                <h3 class="section-subtitle"><b>MANAGE SLIDERS</b></h3>
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4 style="margin-bottom: 30px;">My Sliders :</h4>
                            </div>
                        </div>

                        <!--SEARCHING, ORDENING & PAGING-->
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-bordered table-striped nowrap table-hover" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Slider Message</th>
                                    <th>Slider Title</th>
                                    <th>Slider Sub-title</th>
                                    <th>Slider Image</th>
                                    <th>Slider Start To End (Date&Time)</th>
                                    <th>Slider URL</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $slider->message }}</td>
                                        <td>{{ substr($slider->title, 0, 20) }}</td>
                                        <td>{{ substr($slider->sub_title, 0, 25) }}</td>
                                        <td>
                                            <img width="120" height="60" src="{{ asset('uploads/images/slider/'.$slider->image) }}" alt="{{ $slider->image }}">
                                        </td>
                                        <td>{{ $slider->start . ' ' . '-' . ' ' . $slider->end }}</td>
                                        <td>
                                            <a target="_blank" href="{{ $slider->url }}" class="btn btn-primary btn-sm">Go To Link</a>
                                        </td>
                                        <td>
                                            <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success" data-on="Active" data-off="Inactive" {{ $slider->status === 'active' ? 'checked' : '' }} id="sliderStatus" data-id="{{ $slider->id }}">
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('admin.slider.show', [base64_encode($slider->id)]) }}"><i class="fa fa-eye"></i></a>

                                                <a class="btn btn-info btn-sm" href="{{ route('admin.slider.edit', base64_encode($slider->id)) }}"><i class="fa fa-pencil-square-o"></i></a>
                                        <span style="display: inline-block">
                                            <form action="{{ route('admin.slider.delete', base64_encode($slider->id)) }}" method="post">
                                            @csrf
                                                @method('DELETE')

                                            <button style="margin-top: -10px;" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Want To Delete This Category ?')"><i class="fa fa-trash-o"></i></button>
                                            </form>
                                        </span>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-body">
                <img width="135%" height="auto" id="slider-popup" src="" alt="Slider Image">
            </div>
        </div>
    </div>

@endsection




