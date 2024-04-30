@extends('layouts.master')
@section('title', 'Blog')
@section('content')
<style>
  .p-20 {
    padding: 1.25rem !important;
}
.home-blog-card{

}
 .home-blog-card-img-container {
  width: 100%;
  overflow: hidden;
  cursor: pointer;
}
/* .home-blog-card-img-container:hover img {
  transform: scale(1.1);
} */
.home-blog-card-img-container img {
  width: 100%;
  transition: all 0.5s;
}
.home-blog-card:hover .home-blog-card-img-container img {
  transform: scale(1.1);
}
.home-blog-card-content {
  border: 1px solid #969696;
}
.home-blog-card-heading {
  font-size: 24px;
  font-weight: 700;
  line-height: 42px;
  margin-bottom: 0.8rem;
}
.home-blog-card:hover .home-blog-card-content .home-blog-card-heading {
  color: #ff0b87;
}
.home-blog-card-info {
  color: #969696;
  margin-bottom: 1rem;

}
.home-blog-card-read-more-btn {
  display: inline-block;
  text-decoration: none;
  text-align: center;
  padding: 10px 30px 10px 30px;
  border-radius: 4px;
  background-color: #ff0b87;
  color: #ffffff;
  margin-top: 10px;
  font-weight: 700;
  margin-bottom: 7px;

}
.home-blog-card-read-more-btn:hover {
  color: #fff;
}

</style>
<div class="container mt-80 mb-80">
      
      <div class="row">
      @forelse($blog as $nw)

        <div class="col-md-4 col-12 home-blog-card">
          <div class="home-blog-card-img-container">
            <a href="{{ route('blogs.show', ['title' => Str::slug($nw->title, '_'), 'id' => $nw->id]) }}">
            <img src="/storage/images/blogs/{{ $nw->image_url }}" alt="{{ $nw->title }}" >
            </a>
          </div>
          <div class="home-blog-card-content p-20">
            <h2 class="home-blog-card-heading">
              {{ Str::limit($nw->title,50) }}
            </h2>
            <p class="home-blog-card-info">
            {!! Str::limit(strip_tags($nw->description), 130) !!} 

            </p>
            <div class="home-blog-card-btn">
              <a href="{{ route('blogs.show', ['title' => Str::slug($nw->title, '_'), 'id' => $nw->id]) }}" class="home-blog-card-read-more-btn">Read More</a>
            </div>
          </div>
        </div>
        
        @empty
        <div class="col-md-12 text-center">
                <h3 class="text-danger">
                    Under Construction...
                </h3>
            </div>
            @endforelse
            <div class="col-md-12 mt-3">
                {{ $blog->links() }}
            </div>
      </div>
    </div>

@endsection

