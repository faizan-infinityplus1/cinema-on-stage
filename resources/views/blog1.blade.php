@extends('layouts.master')
@section('page', 'Blog')
@section('extracss')

<link rel="stylesheet" href="{!! asset('assets/css/blog.css')!!}">
@endsection
@section('content')

<section class="course-section__block padding ptb-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9 mb-30 op">
                <div class="course__details_block">
                    <div class="course__figure_img">
                        <img src="/storage/images/blogs/{{ $nw->image_url }}" alt="{{ $nw->title }}" />
                    </div>
                    <div class="course__text_details mt-40">
                        <h2 class="mb-20">{{ $nw->title }}</h2>
                        <p>
                        </p> {!! $nw->description !!}
                        </p>
                    </div>

                </div>

            </div>
            <!--Sidebar-->
            <div class="col-md-3 col-lg-3 mt-sm-60">
                <div class="sidebar-widget">
                    <h4>ALL NEWS</h4>

                    <ul class="categories">
                        @foreach($news as $nw)
                        <li><a href="{{ '/blog/' . Str::slug($nw->title, '_') . '/' . $nw->id }}"><i class="fa fa-chevron-right"></i> {{ $nw->title }}</a></li>

                        @endforeach
                    </ul>
                </div>

            </div>
            <!--Sidebar-->
        </div>

    </div>
</section>
@endsection
