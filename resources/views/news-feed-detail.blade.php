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
            <img src="{{asset($inner_banner11->image)}}" class="img-responsive" alt="...">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="book-ur-holiday inner-text-hd">
                      <?= html_entity_decode($inner_banner11->description) ?>
                      
                     
                    </div>
                          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

<section class="newsDeatail">
  <div class="container" style="width: 60%;">
    <div class="article-list">
                    <h5>{{date('d/m/Y', strtotime($article->updated_at))}}</h5>
                    <h4>{{$article->title}}</h4>
                    <?= html_entity_decode($article->description) ?>
                 
                  </div>
                  <div class="articleImgDt">
                    <img src="{{asset($article->image)}}" class="img-responsive" alt="">
                    <?= html_entity_decode($article->map) ?>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.8457129722833!2d-73.96269018522682!3d40.72141284497766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25967f366a429%3A0xbbc56c88917c7885!2s4%20N%209th%20St%20%2315%2C%20Brooklyn%2C%20NY%2011249%2C%20USA!5e0!3m2!1sen!2s!4v1600985921026!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1230.4106102521687!2d-73.96148582785737!3d40.721161841505406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25967f366a429%3A0x96baab69ef89396!2s15%20N%209th%20St%2C%20Brooklyn%2C%20NY%2011249%2C%20USA!5e1!3m2!1sen!2s!4v1600986027090!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                  </div>
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




