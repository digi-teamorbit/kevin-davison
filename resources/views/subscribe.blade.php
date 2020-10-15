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
            <img src="{{asset($inner_banner5->image)}}" class="img-responsive" alt="...">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="book-ur-holiday inner-text-hd">
                      <?= html_entity_decode($inner_banner5->description) ?>
                      
                     
                    </div>
                          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>




<section class="price_tags">
  <div class="container">
  <div class="row">
   <div class="col-md-2 col-sm-2 col-xs-12">
    </div>
    <div class="col-md-8 col-sm-8 col-xs-12">
      <div class="price_tags1">
        <h2>Our Pricing</h2>
      </div>
    </div>
     <div class="col-md-2 col-sm-2 col-xs-12">
    </div>
  </div>
    <div class="row">
     <div class="col-md-2 col-sm-2 col-xs-12">
      </div>
       <div class="col-md-8 col-sm-8 col-xs-12">
       <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="price_tags2">
          <span>{{$cms_sub1->name}}</span>
          <?= html_entity_decode($cms_sub1->content) ?>
          <a href="javascript:void(0)">SUBSCRIPTION</a>
        </div>
      </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="price_tags2">
          <span>{{$cms_sub2->name}}</span>
          <?= html_entity_decode($cms_sub2->content) ?>
          <a href="javascript:void(0)">SUBSCRIPTION</a>
        </div>
      </div>
       </div>
        </div>
         <div class="col-md-2 col-sm-2 col-xs-12">
        </div>
    </div>
  </div>
</section>




<section class="massa">
      <div class="container">
        <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-12">
        </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="asked_frequently">
              <h2>Frequently Asked Questions</h2>
            </div>
            <div class="faqsec">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach ($faqs as $key=>$faq)
                <div class="panel ">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title"> <a class="" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$key}}" aria-expanded="true" aria-controls="collapseOne{{$key}}"><span>{{$faq->id}}</span> {{$faq->question}}</a> </h4>
                  </div>
                  <div id="collapseOne{{$key}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" style="">
                    <div class="panel-body">
                      <?= html_entity_decode($faq->answer) ?>
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- <div class="panel ">
                  <div class="panel-heading" role="tab" id="headingfive">
                    <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive"><span>2</span> Readable content of a page when looking at its layout ? </a> </h4>
                  </div>
                  <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="panel ">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span>3</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit ?</a> </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="panel ">
                  <div class="panel-heading" role="tab" id="headingThree2">
                    <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree"> <span>4</span> Mauris dictum purus ac dui efficitur, sed interdum ligula blandit ?</a> </h4>
                  </div>
                  <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="panel ">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span>5</span> Phasellus eget erat aliquet, egestas odio eget, laoreet augue ?</a> </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="panel ">
                  <div class="panel-heading" role="tab" id="headingseven">
                    <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven"><span>6</span> Ut Cras pharetra velit eu pretium viverra. ?</a> </h4>
                  </div>
                  <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-12">
          </div>
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




