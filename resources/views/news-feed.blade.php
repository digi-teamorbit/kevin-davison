@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->


    <!-- banner section start here -->
    <!-- Begin: Crousel -->
    <div class="main-slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"  data-interval="false" autoplay="false">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="{{asset($inner_banner2->image)}}" class="img-responsive" alt="...">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="book-ur-holiday inner-text-hd">
                      <?= html_entity_decode($inner_banner2->description) ?>
                      
                     
                    </div>
                          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

<?php

$article_categories = DB::table('article_categories')->get();

 ?>

<section class="articleSite">
  <div class="container">
    <h3>{{$cms_newsFeed->name}}</h3>
    <?= html_entity_decode($cms_newsFeed->content) ?>
    <div class="articleBtn">
      <ul>
        <li class="active"><a href="" >All</a></li>
        @foreach ($article_categories as $category)
        <li><a href="{{url('news-feed/'.$category->id)}}">{{$category->category_name}}</a></li>
        <!-- <li><a href="">Loans</a></li> -->
        <!-- <li><a href="">Development</a></li> -->
        @endforeach
      </ul>
    </div>
    <div class="row">
      @foreach ($articles as $article)
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="article-list-2">
              <div class="row">
                <div class="col-md-7 col-xs-12 col-sm-7">
                  <div class="article-img">
                    <a href="{{route('news_feed_detail',$article->id)}}"><img src="{{asset($article->image)}}" class="img-responsive" alt=""></a>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                  <div class="article-list">
                    <h5>{{date('d/m/Y', strtotime($article->updated_at))}}</h5>
                    <h4 style="width: 100%;">{{$article->title}}</h4>
                    <?= html_entity_decode($truncated = Str::limit($article->description, 100) ) ?>
                  </div>
                </div>
              </div>
            </div>
      </div>
      @endforeach
      <!-- <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="article5-img">
                    <img src="{{asset('images/house1.png')}}" class="img-responsive" alt="">
                  </div>
      </div> -->
    </div>

    <!-- <div class="row">
      <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="article-list-2">
              <div class="row">
                <div class="col-md-5 col-xs-12 col-sm-5">
                  <div class="article-img">
                    <img src="{{asset('images/house2.png')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-7 col-xs-12 col-sm-7">
                  <div class="article-list">
                    <h5>September 9th, 2020</h5>
                    <h4>Joel Freund buys Williamsburg mixed use
building for $1,465,000 </h4>
                    <p>Joel Freund, through the entity Manhattan Corner LLC, purchased a 3 unit mixed use building at 145 Manhattan Ave for $1,465,000 ($366.25/ft & $488,333/unit) from Jeannie Soto.</p>
                    <p>Sky Brook Capital’s Isaac Fried and David Samuels, under the entity 145 Manhattan Funding LP, provided a mortgage of $650,000 to Fruend to finance the transaction.</p>
                    <p>The deal closed on 7/20/2020 and was recorded on 8/4/2020.</p>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="article5-img">
                    <img src="{{asset('images/house1.png')}}" class="img-responsive" alt="">
                  </div>
      </div>
    </div> -->
    <!-- <div class="row">
      <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="article-list-2">
              <div class="row">
                <div class="col-md-5 col-xs-12 col-sm-5">
                  <div class="article-img">
                    <img src="{{asset('images/house3.png')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-7 col-xs-12 col-sm-7">
                  <div class="article-list">
                    <h5>September 9th, 2020</h5>
                    <h4>Joel Freund buys Williamsburg mixed use
building for $1,465,000 </h4>
                    <p>Joel Freund, through the entity Manhattan Corner LLC, purchased a 3 unit mixed use building at 145 Manhattan Ave for $1,465,000 ($366.25/ft & $488,333/unit) from Jeannie Soto.</p>
                    <p>Sky Brook Capital’s Isaac Fried and David Samuels, under the entity 145 Manhattan Funding LP, provided a mortgage of $650,000 to Fruend to finance the transaction.</p>
                    <p>The deal closed on 7/20/2020 and was recorded on 8/4/2020.</p>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="article5-img">
                    <img src="{{asset('images/house1.png')}}" class="img-responsive" alt="">
                  </div>
      </div>
    </div> -->
    <!-- <div class="row">
      <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="article-list-2">
              <div class="row">
                <div class="col-md-5 col-xs-12 col-sm-5">
                  <div class="article-img">
                    <img src="{{asset('images/house1.png')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-7 col-xs-12 col-sm-7">
                  <div class="article-list">
                    <h5>September 9th, 2020</h5>
                    <h4>Joel Freund buys Williamsburg mixed use
building for $1,465,000 </h4>
                    <p>Joel Freund, through the entity Manhattan Corner LLC, purchased a 3 unit mixed use building at 145 Manhattan Ave for $1,465,000 ($366.25/ft & $488,333/unit) from Jeannie Soto.</p>
                    <p>Sky Brook Capital’s Isaac Fried and David Samuels, under the entity 145 Manhattan Funding LP, provided a mortgage of $650,000 to Fruend to finance the transaction.</p>
                    <p>The deal closed on 7/20/2020 and was recorded on 8/4/2020.</p>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="article5-img">
                    <img src="{{asset('images/house1.png')}}" class="img-responsive" alt="">
                  </div>
      </div>
    </div> -->
    <!-- <div class="row">
      <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="article-list-2">
              <div class="row">
                <div class="col-md-5 col-xs-12 col-sm-5">
                  <div class="article-img">
                    <img src="{{asset('images/house2.png')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-7 col-xs-12 col-sm-7">
                  <div class="article-list">
                    <h5>September 9th, 2020</h5>
                    <h4>Joel Freund buys Williamsburg mixed use
building for $1,465,000 </h4>
                    <p>Joel Freund, through the entity Manhattan Corner LLC, purchased a 3 unit mixed use building at 145 Manhattan Ave for $1,465,000 ($366.25/ft & $488,333/unit) from Jeannie Soto.</p>
                    <p>Sky Brook Capital’s Isaac Fried and David Samuels, under the entity 145 Manhattan Funding LP, provided a mortgage of $650,000 to Fruend to finance the transaction.</p>
                    <p>The deal closed on 7/20/2020 and was recorded on 8/4/2020.</p>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
       
                  </div>
      </div> -->

    <!-- <div class="row">
      <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="article-list-2">
              <div class="row">
                <div class="col-md-5 col-xs-12 col-sm-5">
                  <div class="article-img">
                    <img src="{{asset('images/house3.png')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-7 col-xs-12 col-sm-7">
                  <div class="article-list">
                    <h5>September 9th, 2020</h5>
                    <h4>Joel Freund buys Williamsburg mixed use
building for $1,465,000 </h4>
                    <p>Joel Freund, through the entity Manhattan Corner LLC, purchased a 3 unit mixed use building at 145 Manhattan Ave for $1,465,000 ($366.25/ft & $488,333/unit) from Jeannie Soto.</p>
                    <p>Sky Brook Capital’s Isaac Fried and David Samuels, under the entity 145 Manhattan Funding LP, provided a mortgage of $650,000 to Fruend to finance the transaction.</p>
                    <p>The deal closed on 7/20/2020 and was recorded on 8/4/2020.</p>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
      
                  </div>
      </div> -->

    <!-- <div class="row">
      <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="article-list-2">
              <div class="row">
                <div class="col-md-5 col-xs-12 col-sm-5">
                  <div class="article-img">
                    <img src="{{asset('images/house1.png')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-7 col-xs-12 col-sm-7">
                  <div class="article-list">
                    <h5>September 9th, 2020</h5>
                    <h4>Joel Freund buys Williamsburg mixed use
building for $1,465,000 </h4>
                    <p>Joel Freund, through the entity Manhattan Corner LLC, purchased a 3 unit mixed use building at 145 Manhattan Ave for $1,465,000 ($366.25/ft & $488,333/unit) from Jeannie Soto.</p>
                    <p>Sky Brook Capital’s Isaac Fried and David Samuels, under the entity 145 Manhattan Funding LP, provided a mortgage of $650,000 to Fruend to finance the transaction.</p>
                    <p>The deal closed on 7/20/2020 and was recorded on 8/4/2020.</p>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
       
                  </div>
      </div> -->
    

  </div>
</section>








    

<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')

<script>
    $('#Testimonials').owlCarousel({
    
    loop:true,
    slideBy: 1,
    items: 2,
    itemsDesktop : [1199, 2]
    });
    
    </script>
    <script src="js/jQuery.scrollSpeed.js"></script>
    <script>
    $(function() {
    jQuery.scrollSpeed(100, 1200);
    });
    </script>
    <script type="text/javascript">
    $('.most-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
    });
    </script>
    <script>
    $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
    });
    </script>

@endsection




