@extends('layouts.admin')
@section('title', 'Manage Users')
@section('content')

{{--
<div class="modal fade" id="importCustomersModel" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white-all">
                    <h5 class="modal-title" id="formModal">Import Customers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <form method="POST" role="form" action="{{ route('users.import') }}" class="needs-validation" enctype="multipart/form-data" id="formImportProduct">
@csrf
<div class="modal-body">
    <div class="row">

        <div class="col-md-12">
            <div class="form-group">
                <label for="name">File(Only CSV) <span class="text-danger">*</span></label>

                <div class="col-sm-6" style="padding-left: 0;"><input type="file" name="target_excel" placeholder="Upload File" required></div>

            </div>
        </div>

        <div class="col-md-12">
            <h6 class="text-warning"><i class="fa fa-info-circle"></i> Note * mark fields are
                required</h6>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary btnSubmit"><i class="fa fa-plus"></i>
        Add
    </button>
</div>
</form>
</div>
</div>
</div>
</div>--}}

{{-- <div class="modal fade" id="exportCustomersModel" tabindex="-1" role="dialog" aria-labelledby="formModal"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white-all">
                    <h5 class="modal-title" id="formModal">Export Customers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" role="form" action="{{ route('users.export') }}" class="needs-validation"
enctype="multipart/form-data" id="formImportProduct">
@csrf
<div class="modal-body">
    <div class="row">

        <div class="col-md-12">
            <div class="form-group">
                <label for="name">File(Only CSV) <span class="text-danger">*</span></label>

                <div class="col-sm-6" style="padding-left: 0;"><input type="file" name="target_excel" placeholder="Upload File" required></div>

            </div>
        </div>

        <div class="col-md-12">
            <h6 class="text-warning"><i class="fa fa-info-circle"></i> Note * mark fields are
                required</h6>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary btnSubmit"><i class="fa fa-plus"></i>
        Add
    </button>
</div>
</form>
</div>
</div>
</div>
</div> --}}
<section class="section">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark text-white-all">
            <li class="breadcrumb-item"><a href=""><i class="fas fa-home"></i>
                    Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-list"></i> Blogs</li>
            <li class="breadcrumb-item"><a href="{{route('blogs.add')}}"><i class="fas fa-plus"></i> Add
                    Blogs</a></li>
            {{-- <li class="breadcrumb-item">
                <a href="#importCustomersModel" data-toggle="modal" data-target="#importCustomersModel">
                    <i class="fas fa-plus"></i> Import Customers
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ asset('excel/sample_customers_excel.xlsx') }}" download="">
            <i class="fas fa-download"></i> Download Sample Excel
            </a>
            </li> --}}
            {{-- <li class="breadcrumb-item">
                    <a href="" >
            <i class="fas fa-download"></i> Export Customers Excel
            </a>
            </li> --}}
            {{-- <li class="breadcrumb-item">
                    <a href="" data-toggle="modal" data-target="#exportCustomersModel">
            <i class="fas fa-plus"></i> Export Customers
            </a>
            </li> --}}
        </ol>
    </nav>
    <div class="card">

        <div class="card-header bg-dark text-white-all">
            <h4>Manage Blogs</h4>

            {{--<form action="" method="post">
                @csrf
                <button type="submit" class="btn btn-primary btnSubmit">
                    <i class="fa fa-file-excel-o"></i> Export Excel
                </button>
            </form> --}}
        </div>


        <div class="card-body">
            @if (Session::has('success'))
            <div class="alert alert-success ">
                <span class="close" onclick="this.parentElement.style.display='none';" style="cursor: pointer;">&times;</span>
                {{-- @foreach ($errors->all() as $error) --}}
                <li>
                    <span class="text-white">{{ Session::get('success') }}</span>
                </li>
                {{-- @endforeach --}}
            </div>
            @endif
            @if (Session::has('errors'))
            <div class="alert alert-danger ">
                <span class="close" onclick="this.parentElement.style.display='none';" style="cursor: pointer;">&times;</span>
                {{-- @foreach ($errors->all() as $error) --}}
                <li>
                    <span class="text-white">{{ Session::get('errors') }}</span>
                </li>
                {{-- @endforeach --}}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-hover datatable" style="width:100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @forelse ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>@if($blog->image_url)<a href="/storage/images/blogs/{{ $blog->image_url }}" target="_blank" title="View Image">View Image</a>@else "---"  @endif</td>

                            <td>{{ Str::limit($blog->title, 35) }}</td>
                            <td>{!! $blog->description ? Str::limit($blog->description, 35) : ' --- ' !!}</td>
                            <td>{{ date('d-M-Y', strtotime($blog->created_at)) }}</td>


                            <td>
                                <div class="dropdown d-inline">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('blogs.edit', $blog->id) }}" class="dropdown-item has-icon" title="Edit Detail">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a href="javascript:void(0)" data-role="delete-obj" data-obj-id="{{ $blog->id }}" class="dropdown-item has-icon delete-object" title="Delete Slider">
                                            <i class="fa fa-trash text-danger"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr class="text-center">
                            <td class="text-danger" colspan="9">
                                <h5>No Record Found. </h5>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <form id="formDelete" method="POST" action="{{ route('blogs.delete') }}">
        @csrf
        <input type="hidden" name="user_id" id="user_id">
    </form>
    @endsection
    @section('extrajs')
    <script>
        $(document).ready(function() {
            // setTimeout(function() {
            //     if ($(".alert").is(":visible")) {
            //         $(".alert").fadeOut("fast");
            //     }
            // }, 3000)
            $(".delete-object").click(function() {
                if (window.confirm("Are you sure, You want to Delete ? ")) {
                    $("#user_id").val($(this).attr("data-obj-id"));
                    $(this).attr('disabled', 'disabled');
                    $(this).html('<span class="fa fa-spinner fa-spin"></span> Loading...');
                    $("#formDelete").submit();
                }
            });

        });
    </script>
    @endsection
