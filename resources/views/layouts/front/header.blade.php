<?php

$article_categories = DB::table('article_categories')->get();

 ?>
<header>
      
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="logo-sec">
              <a href="{{route('home')}}">
                <img src="{{asset($logo->img_path)}}" class="img-responsive">
              </a>
            </div>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <nav class="navbar navbar-default custom-nav">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
              </div>
              <div id="navbar" class="navbar-collapse collapse" data-wow-duration="1s">
                <ul class="nav navbar-nav">
                  <li><a class="{{request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">Home</a></li>
                  <li><a class="{{request()->routeIs('about_us') ? 'active' : '' }}" href="{{route('about_us')}}">About Us</a></li>
                  
                  <li class="dropdown">
                    <a class="{{request()->routeIs('news_feed') ? 'active' : '' }}" href="javascript:void(0)">News Feed <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      @foreach ($article_categories as $category)
                      <li><a href="{{url('news-feed/'.$category->id)}}">{{$category->category_name}}</a></li>
                 <!--      <li><a href="javascript:void(0)">Loans</a></li>
                      <li><a href="javascript:void(0)">Development</a></li> -->
                      @endforeach
                    </ul>
                  </li>
                  <li><a class="{{request()->routeIs('data_sheets') ? 'active' : '' }}" href="{{route('data_sheets')}}">Data Sheets</a></li>
                  <li><a class="{{request()->routeIs('contact_us') ? 'active' : '' }}" href="{{route('contact_us')}}">Contact</a></li>
                  <li><a class="{{request()->routeIs('subscribe') ? 'active' : '' }}" href="{{route('subscribe')}}">Subscribe</a></li>
                  @if (!Auth::guest())
                        <li><a class="{{request()->routeIs('account') ? 'active' : '' }}" href="{{route('account')}}">My Account</a></li> 
                @else
                        <li><a class="{{request()->routeIs('signin') ? 'active' : '' }}" href="{{route('signin')}}">Register</a></li> 
                @endif
                  
                  <li><a  href="#search"><i class="fa fa-search"> </i></a></li>
                </ul>
              </div>
            </nav>
          </div>
          
        </div>
      </div>
    </header>