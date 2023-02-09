@extends('layouts.default')
@section('content')

<!-- Start Main Banner Area -->
<section class="main-banner-area main-banner-area-four">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="banner-text">
          <h1>Turn Your Documents Into Data With ANDROID AI</h1>
          <p>Advanced system for the best future</p>
          <div class="banner-btn">
            <a class="default-btn" href="https://t.me/AndroidAIPortal">
              JOIN US
            </a>
            <a class="default-btn active popup-youtube" href="https://poocoin.app/tokens/">
              <i class="bx bx-play"></i>
              CHART
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 pr-0">
        <div class="banner-four-main-img">
          <img class="wow fadeInRight" data-wow-delay=".1s" src="{{ asset('img/home-four-banner/home-four-main-img.png') }}" alt="Image">
        </div>
      </div>
    </div>
  </div>
  <div class="over-shape">
    <img src="{{ asset('img/home-one-banner/banner-one-shape/1.png') }}" alt="Image">
    <img src="{{ asset('img/home-one-banner/banner-one-shape/1.png') }}" alt="Image">
    <img src="{{ asset('img/home-one-banner/banner-one-shape/2.png') }}" alt="Image">
    <img src="{{ asset('img/home-one-banner/banner-one-shape/2.png') }}" alt="Image">
    <img src="{{ asset('img/home-one-banner/banner-one-shape/3.png') }}" alt="Image">
  </div>
</section>
<!-- End Main Banner Area -->

<!-- Start Brand Area -->
<div class="brand-area ptb-100">
  <div class="container">
    <div class="brand-wrap owl-carousel owl-theme">
      <div class="single-brand">
        <a href="#">
          <img src="{{ asset('img/brand/1.png') }}" alt="Image">
        </a>
      </div>
      <div class="single-brand">
        <a href="#">
          <img src="{{ asset('img/brand/2.png') }}" alt="Image">
        </a>
      </div>
      <div class="single-brand">
        <a href="#">
          <img src="{{ asset('img/brand/3.png') }}" alt="Image">
        </a>
      </div>
      <div class="single-brand">
        <a href="#">
          <img src="{{ asset('img/brand/4.png') }}" alt="Image">
        </a>
      </div>
      <div class="single-brand">
        <a href="#">
          <img src="{{ asset('img/brand/5.png') }}" alt="Image">
        </a>
      </div>
      <div class="single-brand">
        <a href="#">
          <img src="{{ asset('img/brand/6.png') }}" alt="Image">
        </a>
      </div>
      <div class="single-brand">
        <a href="#">
          <img src="{{ asset('img/brand/7.png') }}" alt="Image">
        </a>
      </div>
    </div>
  </div>
</div>
<!-- End Brand Area -->

<!-- Start About Area -->
<section class="about-area about-area-four pb-100" id="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-img">
          <img src="{{ asset('img/about-img-three.png') }}" alt="Image">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about-content">
          <span>About Us</span>
          <h2>Android AI is the Future of Advanced System</h2>
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <ul>
                <li>
                  <i class="flaticon-checked"></i>
                  Advanced Decision Maker
                </li>
                <li>
                  <i class="flaticon-checked"></i>
                  Unlimited  applications
                </li>
                <li>
                  <i class="flaticon-checked"></i>
                  Advanced ChatBot
                </li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6">
              <ul>
                <li>
                  <i class="flaticon-checked"></i>
                  Advanced Servers
                </li>
                <li>
                  <i class="flaticon-checked"></i>
                  Advanced Liquidity Locker
                </li>
                <li>
                  <i class="flaticon-checked"></i>
                  Optimized stack
                </li>
              </ul>
            </div>
          </div>
          <a class="default-btn" href="#">
            Learn More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Area -->

<!-- Start What We Offer Area -->
<section class="offer-area offer-area-two offer-area-four pt-100 pb-70" id="services">
  <div class="container">
    <div class="section-title home-four-section-title">
      <span>Services</span>
      <h2>Our Professionals Services For You</h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-sm-6">
        <div class="single-offer">
          <i class="flaticon-chip"></i>
          <h3>Robotics & Drones</h3>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="single-offer">
          <i class="flaticon-vr"></i>
          <h3>Virtually Reality</h3>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="single-offer">
          <i class="flaticon-blockchain"></i>
          <h3>Blockchain Project</h3>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="single-offer">
          <i class="flaticon-target"></i>
          <h3>Image Processing</h3>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="single-offer">
          <i class="flaticon-choice"></i>
          <h3>Order Management</h3>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="single-offer">
          <i class="flaticon-deep-learning"></i>
          <h3>Machine Learning</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="offer-shape">
    <img src="{{ asset('img/shape/offer-shape/1.png') }}" alt="Image">
    <img src="{{ asset('img/shape/offer-shape/2.png') }}" alt="Image">
    <img src="{{ asset('img/shape/offer-shape/3.png') }}" alt="Image">
    <img src="{{ asset('img/shape/offer-shape/4.png') }}" alt="Image">
    <img src="{{ asset('img/shape/offer-shape/5.png') }}" alt="Image">
    <img src="{{ asset('img/shape/offer-shape/6.png') }}" alt="Image">
    <img src="{{ asset('img/shape/offer-shape/6.png') }}" alt="Image">
  </div>
</section>
<!-- End What We Offer Area -->

<!-- Start Choose Us Area -->
<section class="choose-ue-area pt-100" id="applications">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <div class="choose-title home-four-section-title">
          <span>APPLICATIONS</span>
          <h2>Our Big Applications</h2>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="choose-content">
          <ul>
            <li>
              <span>01 <i class="flaticon-technical-support"></i></span>
              <h3>Advanced DAPPs</h3>
            </li>
            <li class="ml">
              <span>02 <i class="flaticon-shield"></i></span>
              <h3>Liquidity Locker</h3>
            </li>
            <li class="ml-25">
              <span>03 <i class="flaticon-support"></i></span>
              <h3>Decentralized Applications</h3>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="choose-img">
          <img src="{{ asset('img/choose-img.png') }}" alt="Image">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Choose Us Area -->

<!-- Start Business Area -->
<section class="business-area business-area-four ptb-100" id="tokenomic">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="business-content">
          <h2>ANDROID AI TOKENOMIC</h2>
        </div>
        <div class="single-business">
          <i class="flaticon-cyber-security"></i>
          <h3>AI Will Automatic Cyber Security Improve</h3>
        </div>
        <div class="single-business">
          <i class="flaticon-promotion"></i>
          <h3>A Community With A Unique Mission</h3>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-6 col-sm-6 counter-nth">
            <div class="single-counter">
              <h2>
                <span class="odometer" data-count="4">00</span> <span class="target">%</span>
              </h2>
              <p>TAX</p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 counter-nth">
            <div class="single-counter">
              <h2>
                <span class="odometer" data-count="4">00</span> <span class="target">%</span>
              </h2>
              <p>MAX BAG</p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 counter-nth">
            <div class="single-counter">
              <h2>
                <span class="odometer" data-count="4">00</span> <span class="target">%</span>
              </h2>
              <p>MAX TRANSACTION</p>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 counter-nth">
            <div class="single-counter">
              <h2>
                <span class="odometer" data-count="5">00</span> <span class="target"> MILLION</span>
              </h2>
              <p>TOTAL SUPPLY</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Business Area -->

<!-- End Case Area -->
<section class="case-area pb-100">
  <div class="container">
    <div class="section-title home-four-section-title">
      <span>Case</span>
      <h2>Our Recent Case Studies</h2>
    </div>
    <div class="row">
      <div class="case-top-wrap owl-carousel owl-theme">
        <div class="case-wrap">
          <div class="single-case">
            <img src="{{ asset('/img/case/1.png') }}" alt="Image">
            <a class="link-icon" href="#"><i class="bx bx-plus"></i></a>
          </div>
          <h3>
            <a href="#">
              Cognitive Architectures
            </a>
          </h3>
        </div>
        <div class="case-wrap">
          <div class="single-case">
            <img src="{{ asset('/img/case/2.png') }}" alt="Image">
            <a class="link-icon" href="#"><i class="bx bx-plus"></i></a>
          </div>
          <h3>
            <a href="#">
              Image Detection
            </a>
          </h3>
        </div>
        <div class="case-wrap">
          <div class="single-case">
            <img src="{{ asset('/img/case/3.png') }}" alt="Image">
            <a class="link-icon" href="#"><i class="bx bx-plus"></i></a>
          </div>
          <h3>
            <a href="#">
              Software Libraries
            </a>
          </h3>
        </div>
        <div class="case-wrap">
          <div class="single-case">
            <img src="{{ asset('/img/case/4.png') }}" alt="Image">
            <a class="link-icon" href="#"><i class="bx bx-plus"></i></a>
          </div>
          <h3>
            <a href="#">
              Architectures Libraries
            </a>
          </h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Case Area -->

<!-- Strat News Area -->
<section class="news-area pt-100 pb-70" id="blogs">
  <div class="container">
    <div class="section-title home-four-section-title">
      <span>News</span>
      <h2>Upcoming Blogs</h2>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="single-news">
          <div class="blog-img">
            <a href="#blogs">
              <img src="{{ asset('/img/blog/1.png') }}" alt="Image">
            </a>
            <div class="dates">
              <span>COMING SOON</span>
            </div>
          </div>
          <div class="news-content-wrap">
            <ul>
              <li>
                <a href="#blogs">
                  <i class="flaticon-user"></i>
                  Admin
                </a>
              </li>
              <li>
                <a href="#blogs">
                  <i class="flaticon-conversation"></i>
                  Comment
                </a>
              </li>
            </ul>
            <a href="#blogs">
              <h3>Is Machine Learning Right For You</h3>
            </a>
            <a class="read-more" href="#blogs">
              Read More
              <i class="bx bx-plus"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="single-news">
          <div class="blog-img">
            <a href="#blogs">
              <img src="{{ asset('/img/blog/2.png') }}" alt="Image">
            </a>
            <div class="dates">
              <span>COMING SOON</span>
            </div>
          </div>
          <div class="news-content-wrap">
            <ul>
              <li>
                <a href="#blogs">
                  <i class="flaticon-user"></i>
                  Admin
                </a>
              </li>
              <li>
                <a href="#blogs">
                  <i class="flaticon-conversation"></i>
                  Comment
                </a>
              </li>
            </ul>
            <a href="#blogs">
              <h3>The State Of Artificial Intelligence</h3>
            </a>
            <a class="read-more" href="#blogs">
              Read More
              <i class="bx bx-plus"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
        <div class="single-news">
          <div class="blog-img">
            <a href="#blogs">
              <img src="{{ asset('/img/blog/3.png') }}" alt="Image">
            </a>
            <div class="dates">
              <span>COMING SOON</span>
            </div>
          </div>
          <div class="news-content-wrap">
            <ul>
              <li>
                <a href="#blogs">
                  <i class="flaticon-user"></i>
                  Admin
                </a>
              </li>
              <li>
                <a href="#blogs">
                  <i class="flaticon-conversation"></i>
                  Comment
                </a>
              </li>
            </ul>
            <a href="#blogs">
              <h3>Our Company Machine Learning </h3>
            </a>
            <a class="read-more" href="#blogs">
              Read More
              <i class="bx bx-plus"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End News Area -->
@stop
