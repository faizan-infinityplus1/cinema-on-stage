@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="row ">

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card bg">
                <div class="card-body">
                    <span class="info-box-icon bg-transparent pull-right">
                        <i class="fa fa-users fa-fw fa-3x theme-color"></i>
                    </span>
                    <div class="info-box-content">
                        <h6 class="info-box-text text-dark"> Blog</h6>
                        <h3 class="text-dark">{{$users}}</h3>
                    </div>
                </div>
                <div class="card-footer bg-dark text-white-all">
                    <a href="{{route('blogs')}}" title="View Details">
                        View Details <i class="fa fa-angle-double-right"></i>
                    </a>
                </div>
            </div>
        </div>


    </div>
</section>
@endsection
