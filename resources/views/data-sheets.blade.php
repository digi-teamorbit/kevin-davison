@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <!-- banner section start here -->
    <!-- Begin: Crousel -->
    <div class="main-slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"  data-interval="false" autoplay="false">
        <!-- Indicators -->
        <!--   <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol> -->
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="{{asset($inner_banner3->image)}}" class="img-responsive" alt="...">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="book-ur-holiday inner-text-hd">
                      <?= html_entity_decode($inner_banner3->description) ?>
                      
                     
                    </div>
                          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Controls -->
      <!--   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>  -->
    </div>

<section class="main-catgry custom-table view-more">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="data-text">
              <h3>{{$cms_dataSheets->name}}</h3>
              <?= html_entity_decode($cms_dataSheets->content) ?>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="appoint">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                  <a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">Sales</a></li>
                  <li role="presentation" class=""><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">Loans</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="home">
              <div class="main-AT-this">
                <div class="mobile-case hvr-pulse-grow">
                  
                  <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12">
                      
                       <div class="saleData">
      <h2>Sale Data Report</h2>
      <table>
        <tbody><tr>
          <th>Item Code</th>
          <th>Emp name</th>
          <th>Product</th>
          <th>Rate</th>
          <th>qty</th> 
        </tr>
        <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
        
      </tbody></table>
    </div>
                      
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="profile">
              <div class="main-AT-this">
                <div class="mobile-case">
                  
                  <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12">
                      
                      <div class="saleData">
      <h2>Sale Data Report</h2>
      <table>
        <tbody><tr>
          <th>Item Code</th>
          <th>Emp name</th>
          <th>Product</th>
          <th>Rate</th>
          <th>qty</th> 
        </tr>
        <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
         <tr>
          <td>100236</td>
          <td>Lorem ipsum sit</td>
          <td>Dolor sit</td>
          <td>154</td>
          <td>10</td>
        </tr>
        
      </tbody></table>
    </div>
                      
                    </div>
                  </div>
                </div>
              </div>
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




