@extends('layouts.master')
@section('title', 'Blog')
@section('content')
<style>
    .home-blog-card-img-container {
  width: 100%;
  height: 200px;
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
    padding: 30px 35px 0px 35px;
    height: 400px;
}
.home-blog-card-heading {
  font-size: 24px;
  font-weight: 700;
  line-height: 42px;
}
.home-blog-card:hover .home-blog-card-content .home-blog-card-heading {
  color: #ff0b87;
}
.home-blog-card-info {
  color: #969696;
  margin-top:  54px;
}
.home-blog-card-read-more-btn {
  display: inline-block;
  text-decoration: none;
  text-align: center;
  padding: 10px 30px 10px 30px;
  border-radius: 4px;
  background-color: #FE7302;
  color: #ffffff;
  margin-top: 20px;
  font-weight: 700;
}
.home-blog-card-read-more-btn:hover {
  color: #fff;
}
.home-blog-card-btn{
    margin-top: 46px;
}

</style>
<div class="container mt-80 mb-80">
      <div class="row">
        <div class="col-lg-12">
          <div class="heading-block">
            <h3 class="heading font-bold" style="padding-bottom: 24px">
              Our Blog
            </h3>
            <!-- <p class="sub-heading">
            Behind the word mountains, far from the countries Vokalia and
            Consonantia
          </p> -->
          </div>
        </div>
        <!-- <div class="col-lg-4 mt-20">
        <div class="blog-grid">
          <div class="blog-header">
            <img src="images/550-291-1.jpg" class="img-fluid rounded mb-30" alt="" />
            <div class="blog-meta mb-10">
              <ul class="meta-list">
                <li class="posted-on">
                  <a href="#">
                    <span class="date">23</span>
                    <span class="month">Sep</span>
                  </a>
                </li>
                <li class="posted-in"><a href="#">Technology</a></li>
              </ul>
            </div>
            <h4 class="heading font-bold text-lh-5 mb-10">
              Technology can help you become healthy
            </h4>
          </div>
          <div class="blog-excerpt">
            <p>
              Behind the word mountains, far from the countries Vokalia, there
              live the texts
            </p>
            <a href="blog-artical.php" class="link-primary">Read More..</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-20">
        <div class="blog-grid">
          <div class="blog-header">
            <img src="images/550-291-2.jpg" class="img-fluid rounded mb-30" alt="" />
            <div class="blog-meta mb-10">
              <ul class="meta-list">
                <li class="posted-on">
                  <a href="#">
                    <span class="date">10</span>
                    <span class="month">Oct</span>
                  </a>
                </li>
                <li class="posted-in"><a href="#">Food</a></li>
              </ul>
            </div>
            <h4 class="heading font-bold text-lh-5 mb-10">
              Healthier options for those hunger-pangs
            </h4>
          </div>
          <div class="blog-excerpt">
            <p>
              Behind the word mountains, far from the countries Vokalia, there
              live the texts
            </p>
            <a href="blog-artical.php" class="link-primary">Read More..</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-20">
        <div class="blog-grid">
          <div class="blog-header">
            <img src="images/550-291-3.jpg" class="img-fluid rounded mb-30" alt="" />
            <div class="blog-meta mb-10">
              <ul class="meta-list">
                <li class="posted-on">
                  <a href="#">
                    <span class="date">25</span>
                    <span class="month">Nov</span>
                  </a>
                </li>
                <li class="posted-in"><a href="#">Health Care</a></li>
              </ul>
            </div>
            <h4 class="heading font-bold text-lh-5 mb-10">
              Complete guide to shoulder &amp; neck pain
            </h4>
          </div>
          <div class="blog-excerpt">
            <p>
              Behind the word mountains, far from the countries Vokalia, there
              live the texts
            </p>
            <a href="blog-artical.php" class="link-primary">Read More..</a>
          </div>
        </div>
      </div> -->
      </div>
      <div class="row">
        <div class="col-md-4 col-12 home-blog-card">
          <div class="home-blog-card-img-container">
            <a href="{{route('blog1')}}"></a>
            <img src="./layouts/newimages/Logo.jpg" alt="">
          </div>
          <div class="home-blog-card-content p-20">
            <h2 class="home-blog-card-heading">
              Exploring the Science Behind IVF: How It Works?
            </h2>
            <p class="home-blog-card-info">
              Posted on March 25th, 2024 Do you want to grow your family but
              can’t conceive? If so, you may wonder...
            </p>
            <div class="home-blog-card-btn">
              <a href="{{route('blog1')}}" class="home-blog-card-read-more-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 home-blog-card">
          <div class="home-blog-card-img-container">
            <img src="images/automated-semen-analyser-img-1024x878.jpg" alt="">
          </div>
          <div class="home-blog-card-content p-20">
            <h2 class="home-blog-card-heading">
              Exploring the Science Behind IVF: How It Works?
            </h2>
            <p class="home-blog-card-info">
              Posted on March 25th, 2024 Do you want to grow your family but
              can’t conceive? If so, you may wonder...
            </p>
            <div class="home-blog-card-btn">
              <a href="#" class="home-blog-card-read-more-btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12 home-blog-card">
          <div class="home-blog-card-img-container">
            <img src="images/automated-semen-analyser-img-1024x878.jpg" alt="">
          </div>
          <div class="home-blog-card-content p-20">
            <h2 class="home-blog-card-heading">
              Exploring the Science Behind IVF: How It Works?
            </h2>
            <p class="home-blog-card-info">
              Posted on March 25th, 2024 Do you want to grow your family but
              can’t conceive? If so, you may wonder...
            </p>
            <div class="home-blog-card-btn">
              <a href="#" class="home-blog-card-read-more-btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

