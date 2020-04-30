@extends('admin.components.layout')

@section('title', 'MANAGE CATEGORY || MY PROFILE')

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
                    <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-list-alt" aria-hidden="true"></i>Category</a></li>
                    <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-tasks"></i>Manage Category</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

        <div class="row animated fadeInUp">
            <div class="col-sm-12 col-md-12">
                @includeIf('show-message.message')
                <h3 class="section-subtitle"><b>MANAGE CATEGORY</b></h3>
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xs-6">
                                <h4 style="margin-bottom: 30px;">My Category :</h4>
                            </div>
                        </div>

                        <!--SEARCHING, ORDENING & PAGING-->
                        <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-bordered table-striped nowrap table-hover" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Category Name</th>
                                    <th>Category Slug</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $row->name  }}
                                        </td>
                                        <td>{{ $row->slug }}</td>
                                        <td>
                                            <input type="checkbox" data-toggle="toggle" data-size="mini" data-onstyle="success" data-on="Active" data-off="Inactive" {{ $row->status === 'active' ? 'checked' : '' }} id="categoryStatus" data-id="{{ $row->id }}">
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('admin.category.show', [base64_encode($row->id)]) }}"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-info btn-sm" href="{{ route('admin.category.edit', base64_encode($row->id)) }}"><i class="fa fa-pencil-square-o"></i></a>
                                            <span style="display: inline-block">
                                                <form action="{{ route('admin.category.delete' , base64_encode($row->id)) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button style="margin-top: -10px;" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Want To Delete Your Category ?')"><i class="fa fa-trash-o"></i></button>
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

@endsection




