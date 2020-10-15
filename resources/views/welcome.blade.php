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
            <img src="{{asset($banner->image)}}" class="img-responsive" alt="...">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="book-ur-holiday">
                      <h2 class="wow zoomIn" data-wow-duration="2s">{{$banner->title}}</h2>
                      
                        @if (Auth::guest())
                         <a href="{{route('signin')}}">sign up today</a>       
                        @endif
                      
                    </div>
                    <div class="tracked_txt">
                      <p>Tracked for the week of:<span>09/08/20 - 09/11/20</span></p>
                    </div>
                    <div class="numer-div">
                      <ul class="list-inline">
                        <li>
                          <div class="fist-number">
                            <div class="half-number">
                              <h1>11</h1>
                            </div>
                            <h3>Sales</h3>
                          </div>
                        </li>
                        <li>
                          <div class="fist-number">
                            <div class="half-number">
                              <h1>32</h1>
                            </div>
                            <h3>Loans</h3>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    </div>
    
    
    <!-- featured section -->
    <section class="featured-week">
      <div class="container-fluid">
        <div class="row">
          <h3>Featured This Week in NY Deal Report</h3>
          <dir class="col-md-5">
          <div class="featur-one">
            <img src="{{asset($latest_blog->image)}}" class="img-responsive" alt="">
            <?= html_entity_decode($latest_blog->short_detail) ?>
          </div>
          @foreach ($blogs as $blog)

          <?php
          if($blog->id == 1 )
          {?>

          <div class="media">
            <div class="media-left">
              <img src="{{asset($blog->image)}}" alt="">
            </div>
            <div class="media-body">
              <h5>{{$blog->title}}</h5>
              <?= html_entity_decode($blog->short_detail) ?>
            </div>
          </div>
          <!-- <div class="media">
            <div class="media-left">
              <img src="images/f5.png" alt="">
            </div>
            <div class="media-body">
              <h5>Heading Here</h5>
              <p>Lorem ipsum dolor sit amet, con adipiscing elit, sed do eiusmod tempor incint ut labore et dolore magna aliqua. Ut enim ad minim.
              veniam, quiud exercition ull</p>
            </div>
          </div> -->
          
          </dir>

          <?php }else{?>

          <dir class="col-md-5">
          <div class="media">
            <div class="media-left">
              <img src="{{asset($blog->image)}}" alt="">
            </div>
            <div class="media-body">
              <h5>{{$blog->title}}</h5>
              <?= html_entity_decode($blog->short_detail) ?>
            </div>
          </div>
          <!-- <div class="media">
            <div class="media-left">
              <img src="images/f7.png" alt="">
            </div>
            <div class="media-body">
              <h5>Heading Here</h5>
              <p>Lorem ipsum dolor sit amet, con adipiscing elit, sed do eiusmod tempor incint ut labore et dolore magna aliqua. Ut enim ad minim.
              veniam, quiud exercition ull</p>
            </div>
          </div> -->
          <!-- <div class="media">
            <div class="media-left">
              <img src="images/f8.png" alt="">
            </div>
            <div class="media-body">
              <h5>Heading Here</h5>
              <p>Lorem ipsum dolor sit amet, con adipiscing elit, sed do eiusmod tempor incint ut labore et dolore magna aliqua. Ut enim ad minim.
              veniam, quiud exercition ull</p>
            </div>
          </div> -->
          <!-- <div class="media">
            <div class="media-left">
              <img src="images/f4.png" alt="">
            </div>
            <div class="media-body">
              <h5>Heading Here</h5>
              <p>Lorem ipsum dolor sit amet, con adipiscing elit, sed do eiusmod tempor incint ut labore et dolore magna aliqua. Ut enim ad minim.
              veniam, quiud exercition ull</p>
            </div>
          </div> -->
          </dir>

          <?php }
        ?>

          @endforeach
          <dir class="col-md-2 left-img">
          
          </dir>
        </div>
      </div>
    </section>
    <!-- featured section end -->
    <!-- oour feature section -->
    <section class="our-feature-sec">
      <div class="container">
        <div class="row">
          <h3>{{$cms_home1->name}}</h3>
          <?= html_entity_decode($cms_home1->content) ?>
          @foreach ($features as $feature)
          <div class="col-md-3">
            <div class="icon-box">
              <img src="{{asset($feature->image)}}" class="img-responsive" alt="">
              <h5>{{$feature->title}}</h5>
              <?= html_entity_decode($feature->description) ?>
            </div>
          </div>
          @endforeach
          <!-- <div class="col-md-3">
            <div class="icon-box">
              <img src="{{asset('images/icon1.png')}}" class="img-responsive" alt="">
              <h5>Lones</h5>
              <p>Refinances </p>
              <p>Construction Loans</p>
              <p> Loan Modifications</p>
              <p> New Mortgages</p>
              <p> Debt Sales</p>
            </div>
          </div> -->
          <!-- <div class="col-md-3">
            <div class="icon-box">
              <img src="{{asset('images/icon3.png')}}" class="img-responsive" alt="">
              <h5>Development</h5>
              <p> Alt 1 Permits </p>
              <p>Alt 2 Permits</p>
              <p>Demolition Permits </p>
              <p>New Building Permits</p>
            </div>
          </div> -->
          <!-- <div class="col-md-3">
            <div class="icon-box">
              <img src="{{asset('images/icon4.png')}}" class="img-responsive" alt="">
              <h5>Data Sheets</h5>
              <p> Sale Date</p>
              <p>Sale Price</p>
              <p>Property Type</p>
              <p>Property Address & Description</p>
              <p>Mortgage Amount & Lender</p>
              <p>Buyer & Seller Name</p>
              <p>& Much More </p>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!-- oour feature section end -->
    <section class="asset-class">
      <div class="container">
        <div class="row asset-text">
          <div class="col-md-12">
            <h3>{{$cms_home2->name}}</h3>
            <?= html_entity_decode($cms_home2->content) ?>
          </div>
        </div>
        <div class="row">
          @foreach ($assets as $asset)
          <div class="col-md-3">
            <div class="icon-box">
              <img src="{{asset($asset->image)}}" class="img-responsive" alt="">
              <h5>{{$asset->title}}</h5>
              <?= html_entity_decode($asset->description) ?>
            </div>
          </div>
          @endforeach
          <!-- <div class="col-md-3">
            <div class="icon-box">
              <img src="{{asset('images/icon6.png')}}" class="img-responsive" alt="">
              <h5>Mixed Use</h5>
              <p>Retail & Residential </p>
              <p>Retail & Office </p>
            </div>
          </div> -->
          <!-- <div class="col-md-3">
            <div class="icon-box">
              <img src="{{asset('images/icon7.png')}}" class="img-responsive" alt="">
              <h5>Retail
              </h5>
              <p>   Pharmacies</p>
              <p>Fast Food</p>
              <p> Gas Stations </p>
              <p> Auto</p>
              <p> Banks</p>
              <p>Taxpayers</p>
              <p>Shopping Centers </p>
            </div>
          </div> -->
          <!-- <div class="col-md-3">
            <div class="icon-box">
              <img src="{{asset('images/icon8.png')}}" class="img-responsive" alt="">
              <h5>Office/Medical
              </h5>
              <p> Office Buildings</p>
              <p>Medical Office Buildings</p>
              <p> Single Tenant Medical Buildings </p>
            </div>
          </div> -->
        </div>
        <!-- <div class="row">
          <div class="col-md-3">
            <div class="icon-box">
              <img src="{{asset('images/icon9.png')}}" class="img-responsive" alt="">
              <h5>Industrial</h5>
              <p>   Warehouses </p>
              <p>Auto Body Shops</p>
              <p>Fulfillment Centers</p>
              <p>Flex Space </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box">
              <img src="{{asset('images/icon10.png')}}" class="img-responsive" alt="">
              <h5>Development</h5>
              <p> New Development </p>
              <p>Vacant Land</p>
              <p>Teardowns </p>
              <p> Vacant Retail with Air Rights</p>
              <p> Vacant Warehouses with Air Rights </p>
              <p>Vacant Auto Repair Shops with Air Rights </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box">
              <img src="{{asset('images/icon11.png')}}" class="img-responsive" alt="">
              <h5>Commercial Condos</h5>
              <p>Bulk Condo</p>
              <p>Retail Condos</p>
              <p>Condo Buildings </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="icon-box">
              <img src="{{asset('images/icon12.png')}}" class="img-responsive" alt="">
              <h5>Misc</h5>
              <p> Net Leased Schools </p>
              <p>Day Cares</p>
              <p>Hotels </p>
              <p>Self-Storage </p>
              <p>& Much More!</p>
            </div>
          </div>
        </div> -->
      </div>
      
    </section>
    <section class="article-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="article-text-1">
              <h3>{{$cms_home3->name}}</h3>
              <?= html_entity_decode($cms_home3->content) ?>
            </div>
            @foreach ($articles as $article)
            <div class="article-list-2">
              <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                  <div class="article-img">
                    <a href="{{route('news_feed_detail',$article->id)}}"><img src="{{asset($article->image)}}" class="img-responsive" alt=""></a>
                  </div>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-8">
                  <div class="article-list">
                    <h4>{{$article->title}} </h4>
                    <?= html_entity_decode($article->description) ?>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <!-- <div class="article-list-2">
              <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                  <div class="article-img">
                    <img src="{{asset('images/list-2.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-8">
                  <div class="article-list">
                    <h4>Albert Shirian refinances Kips Bay new development for $19,100,000 </h4>
                    <p>      Albert Shirian’s Lions Group borrowed $19,100,000 from Popular Bank to refinance a new development mixed use property located at 227-229 Lexington Ave in Kips Bay, Manhattan. The property was purchased for $3,500,000 in January 2015 and developed into a 37 unit mixed use building.</p>
                    
                    <p>The financing included $3,400,000 in new debt in the form of a gap loan on top of the outstanding loan balance of $15,700,000 from the old mortgage. </p>
                    
                    <p>The loan closed on 7/31/2020 and was recorded on 8/11/2020.</p>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="article-list-2">
              <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                  <div class="article-img">
                    <img src="{{asset('images/list-3.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-8">
                  <div class="article-list">
                    <h4>
                    Hirshmark Capital buys $7,100,000 in debt secured by Hell’s Kitchen condo project
                    </h4>
                    <p>  Mark Levin’s Hirshmark Capital purchased $7,100,000 in debt on a Hell’s Kitchen condo project located at 805 9th Ave from Greenwich, CT based Knighthead Funding. The mortgagors (borrowers), Hashem Dardashtian, Israel Abselet, Daniel Rahimzadeh, and Jon Rahimzadeh, purchased the parcel for $4,000,000 in 2014. On 8/25/2016 they had submitted plans to build a 6-unit, 10,455 square foot condominium building with a proposed sellout price of $18,430,000. The plans call for 1 commercial and 5 residential units.</p>
                    <p>The debt is comprised of a $5,750,000 land loan and a $1,350,000 construction loan. The deal closed on 6/12/2020 and was recorded on 8/11/2020.</p>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="article-list-2">
              <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                  <div class="article-img">
                    <img src="{{asset('images/list-4.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-8">
                  <div class="article-list">
                    <h4>Jason Behfarin gets permit issued to convert use of Williamsburg residential building </h4>
                    <p>Jason Behfarin of 240 Broadway Property LLC, was issued an Alt1 permit to change the use of floors 2-5 of 240 Broadway in Williamsburg. Currently the building contains retail on the ground floor (2 stores) with 24 residential units above. Behfarin will be renovating the existing retail on the ground floor and changing the use on floors 2-5 from residential to office. The building is owned by both Jason Behfarin of G4 Capital Partners and Danny Zelouf. </p>
                    <p>
                    The estimated total cost of the job is $2,000,000. The job was pre-filed in 3/2/2020 and the permit was issued on 7/30/2020. </p>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="article-list-2">
              <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-4">
                  <div class="article-img">
                    <img src="{{asset('images/list-5.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-8 col-xs-12 col-sm-8">
                  <div class="article-list">
                    <h4>Ruben Luna acquires Pelham Parkway retail property for $8,000,000 </h4>
                    <p> Ruben Luna, through the entity 2182 W.P.R. Realty LLC, purchased a single story retail taxpayer located at 2182 White Plains Rd in the Pelham Parkway neighborhood of the Bronx. The building is located just south of the Pelham Pkwy 2 & 5 subway line.</p>
                    
                    <p>Josephine Sperazza has owned the building since the late 1970’s. Her son Michael was the signatory on the deed.</p>
                    
                    <p>Luna did not obtain a mortgage to finance the transaction. The deal went into contract on 6/12/2020, closed on 8/7/2020, and was recorded on 8/13/2020.</p>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <!-- article sec end-->
    
    <section class="main-catgry custom-table">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="data-text">
              <h3>{{$cms_home4->name}}</h3>
              <?= html_entity_decode($cms_home4->content) ?>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="appoint">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                  <a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Sales</a></li>
                  <li role="presentation" class=""><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">Loans</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fade in" id="home">
              <div class="main-AT-this">
                <div class="mobile-case hvr-pulse-grow">
                  
                  <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12">
                      
                      <table id="customers">
                        <tr>
                          <th>Sale Date</th>
                          <th>Address</th>
                          <th>Neighborhood</th>
                          <th>Borough</th>
                          <th>Property Type</th>
                          <th>Building SF</th>
                          <th>Sale price</th>
                          <th>Price/sqft</th>
                          <th>Buyer Name</th>
                          <th>Buyer Name</th>
                        </tr>
                        <tr>
                          <td>8/28/20</td>
                          <td>90-06 Park Lane S</td>
                          <td>Woodhaven</td>
                          <td>Queens</td>
                          <td>Multifamily</td>
                          <td>9,135</td>
                          <td>$2,300,000</td>
                          <td>$252</td>
                          <td>Coy Gordon</td>
                          <td>Gunther Day</td>
                        </tr>
                        <tr>
                          <td>8/20/20</td>
                          <td>116-01 Rockaway Beach Blvd</td>
                          <td> Rockaway Park</td>
                          <td>Queens</td>
                          <td>Retail </td>
                          <td>5,240</td>
                          <td> $1,739,000</td>
                          <td>$332</td>
                          <td>Alex Adjmi</td>
                          <td>Jennifer Windbeck</td>
                          
                          
                        </tr>
                        <tr>
                          <td>8/7/20</td>
                          <td>5623 4th Ave</td>
                          <td>Sunset Park</td>
                          <td>Brooklyn</td>
                          <td>Mixed Use</td>
                          <td>8,556</td>
                          <td>$2,100,000</td>
                          <td>$245</td>
                          <td>Yong Xiang LI</td>
                          <td>Maybelliene Ruotolo</td>
                        </tr>
                        <tr>
                          <td>8/5/20</td>
                          <td>1705 Jerome Ave</td>
                          <td>Morris Heights</td>
                          <td>Bronx</td>
                          <td>Mixed Use</td>
                          <td>9,900</td>
                          <td>$1,993,534</td>
                          <td>$201</td>
                          <td>Manny Chadha</td>
                          <td>Louis Zazzarino</td>
                        </tr>
                        <tr>
                          <td>7/28/20</td>
                          <td>2105 Walton Avenue</td>
                          <td>Fordham Heights</td>
                          <td>Bronx</td>
                          <td>Multifamily</td>
                          <td>51,165</td>
                          <td>$7,000,000</td>
                          <td>$137</td>
                          <td>Rick Herman</td>
                          <td>Martin Kirzner</td>
                        </tr>
                        <tr>
                          <td>8/12/20</td>
                          <td>533-537 Park Ave</td>
                          <td>Bedford Stuyvesant</td>
                          <td>Brooklyn</td>
                          <td>Development Site</td>
                          <td>13,557</td>
                          <td>$5,800,000</td>
                          <td>$427</td>
                          <td>Cheskie Weisz</td>
                          <td>Thomas Hussey</td>
                        </tr>
                        <tr>
                          <td>Thomas Hussey</td>
                          <td>506 E 6th St</td>
                          <td>East Village</td>
                          <td>Manhattan</td>
                          <td>Multifamily</td>
                          <td>6,825</td>
                          <td>$3,950,000</td>
                          <td>$579</td>
                          <td>Abraham Chetrit</td>
                          <td>Michael Catsimalis</td>
                          
                        </tr>
                        <tr>
                          <td>7/28/20</td>
                          <td>319 E 75th St</td>
                          <td>Lenox Hill</td>
                          <td>Manhattan</td>
                          <td>Multifamily</td>
                          <td>11,105</td>
                          <td>$5,250,000</td>
                          <td>$472</td>
                          <td>Tarek Alam & Thomas BiFalco</td>
                          <td>Steven Cohen</td>
                          
                        </tr>
                        <tr>
                          <td>7/8/20</td>
                          <td>82-10 Baxter Avenue</td>
                          <td>Elmhurst</td>
                          <td>Queens</td>
                          <td>Retail</td>
                          <td>24,000</td>
                          <td>$15,000,000</td>
                          <td>$625</td>
                          <td>Mohammad Mujalli</td>
                          <td>Chandra Nisthalal</td>
                          
                        </tr>
                        
                      </table>
                      
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
                      
                      <table id="customers">
                        <tr>
                          <th>Sale Date</th>
                          <th>Address</th>
                          <th>Neighborhood</th>
                          <th>Borough</th>
                          <th>Property Type</th>
                          <th>Building SF</th>
                          <th>Sale price</th>
                          <th>Price/sqft</th>
                          <th>Buyer Name</th>
                          <th>Buyer Name</th>
                        </tr>
                        <tr>
                          <td>8/28/20</td>
                          <td>90-06 Park Lane S</td>
                          <td>Woodhaven</td>
                          <td>Queens</td>
                          <td>Multifamily</td>
                          <td>9,135</td>
                          <td>$2,300,000</td>
                          <td>$252</td>
                          <td>Coy Gordon</td>
                          <td>Gunther Day</td>
                        </tr>
                        <tr>
                          <td>8/20/20</td>
                          <td>116-01 Rockaway Beach Blvd</td>
                          <td> Rockaway Park</td>
                          <td>Queens</td>
                          <td>Retail </td>
                          <td>5,240</td>
                          <td> $1,739,000</td>
                          <td>$332</td>
                          <td>Alex Adjmi</td>
                          <td>Jennifer Windbeck</td>
                          
                          
                        </tr>
                        <tr>
                          <td>8/7/20</td>
                          <td>5623 4th Ave</td>
                          <td>Sunset Park</td>
                          <td>Brooklyn</td>
                          <td>Mixed Use</td>
                          <td>8,556</td>
                          <td>$2,100,000</td>
                          <td>$245</td>
                          <td>Yong Xiang LI</td>
                          <td>Maybelliene Ruotolo</td>
                        </tr>
                        <tr>
                          <td>8/5/20</td>
                          <td>1705 Jerome Ave</td>
                          <td>Morris Heights</td>
                          <td>Bronx</td>
                          <td>Mixed Use</td>
                          <td>9,900</td>
                          <td>$1,993,534</td>
                          <td>$201</td>
                          <td>Manny Chadha</td>
                          <td>Louis Zazzarino</td>
                        </tr>
                        <tr>
                          <td>7/28/20</td>
                          <td>2105 Walton Avenue</td>
                          <td>Fordham Heights</td>
                          <td>Bronx</td>
                          <td>Multifamily</td>
                          <td>51,165</td>
                          <td>$7,000,000</td>
                          <td>$137</td>
                          <td>Rick Herman</td>
                          <td>Martin Kirzner</td>
                        </tr>
                        <tr>
                          <td>8/12/20</td>
                          <td>533-537 Park Ave</td>
                          <td>Bedford Stuyvesant</td>
                          <td>Brooklyn</td>
                          <td>Development Site</td>
                          <td>13,557</td>
                          <td>$5,800,000</td>
                          <td>$427</td>
                          <td>Cheskie Weisz</td>
                          <td>Thomas Hussey</td>
                        </tr>
                        <tr>
                          <td>Thomas Hussey</td>
                          <td>506 E 6th St</td>
                          <td>East Village</td>
                          <td>Manhattan</td>
                          <td>Multifamily</td>
                          <td>6,825</td>
                          <td>$3,950,000</td>
                          <td>$579</td>
                          <td>Abraham Chetrit</td>
                          <td>Michael Catsimalis</td>
                          
                        </tr>
                        <tr>
                          <td>7/28/20</td>
                          <td>319 E 75th St</td>
                          <td>Lenox Hill</td>
                          <td>Manhattan</td>
                          <td>Multifamily</td>
                          <td>11,105</td>
                          <td>$5,250,000</td>
                          <td>$472</td>
                          <td>Tarek Alam & Thomas BiFalco</td>
                          <td>Steven Cohen</td>
                          
                        </tr>
                        <tr>
                          <td>7/8/20</td>
                          <td>82-10 Baxter Avenue</td>
                          <td>Elmhurst</td>
                          <td>Queens</td>
                          <td>Retail</td>
                          <td>24,000</td>
                          <td>$15,000,000</td>
                          <td>$625</td>
                          <td>Mohammad Mujalli</td>
                          <td>Chandra Nisthalal</td>
                          
                        </tr>
                        
                      </table>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
        
      </section>
      <!-- section table start herer  -->
      <section class="">
        <div class="container">
          
          
        </div>
      </section>
      
      <!-- section table END -->
      <!-- what people say sec start -->
      <section class="what-people-say-sec">
        
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="what-text">
                <h3>{{$cms_home5->name}}</h3>
              </div>
              <div class="multiple-items">
                @foreach ($testimonials as $testimonial)
                <div>
                  <div class="item-1">
                    <img src="{{asset($testimonial->image)}}" class="img-responsive" alt="">
                    <?= html_entity_decode($testimonial->comments) ?>
                    <span>- {{$testimonial->name}}</span>
                    <h6>{{$testimonial->verified}}</h6>
                  </div>
                </div>
                @endforeach
                <!-- <div>
                  <div class="item-1">
                    <img src="{{asset('images/what-2.jpg')}}" class="img-responsive deal" alt="">
                    <p>I know I can rely on @NyDealReport to deliver up to date information on closings and refinances in the New York Marketplace.  It's fantastic getting updates throughout the day while at work.  It is great to have a smart, fun and accessible resource at your fingertips.”    </p>
                    <span>- Yoel Sarraf </span>
                    <h6>VCPRE, Director  </h6>
                  </div>
                </div> -->
                <!-- <div>
                  <div class="item-1">
                    <img src="{{asset('images/what-3.jpg')}}" class="img-responsive" alt="">
                    <p>NY Deal Report is a trustworthy investment research source and a formidable tool in the arsenal of every market participant.  Their team cuts through opaque public records to get you the information that matters most.”  </p>
                    <span>- Josh Banilivy</span>
                    <h6>Friedman Roth, Partner</h6>
                  </div>
                </div> -->
                <!-- <div>
                  <div class="item-1">
                    <img src="{{asset('images/what-1.jpg')}}" class="img-responsive" alt="">
                    <p>“Ny Deal Report has been a great resource for seeing market insight & deals that normally would not be shared to the greater market. They definitely help fuel the market & have their pulse on what’s going on in today’s real estate market. Will definitely continue following them more knowledge & insight.” </p>
                    <span>- Josh Banilivy</span>
                    <h6>Friedman Roth, Partner</h6>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        
      </section>
      <!-- what people say sec end -->
      <!-- deal list sec start -->
      <section class="deal-list">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="deal-text">
                <h4 class="email"><a href=""> <img src="{{asset('images/dealer-logo.jpg')}}">@nydealreport</a></h4>
               
              </div>
              <div class="row">
                @foreach ($gallery as $image)
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="deal-img">
                    <img src="{{asset($image->image)}}" class="img-responsive" alt="">
                  </div>
                </div>
                @endforeach
                <!-- <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="deal-img">
                    <img src="{{asset('images/deal-2.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div> -->
                 <!-- <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="deal-img">
                    <img src="{{asset('images/deal-3.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div> -->
                    <!-- <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="deal-img">
                    <img src="{{asset('images/deal-3.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div> -->
              </div>
              <!-- <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="deal-img">
                    <img src="{{asset('images/deal-4.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="deal-img">
                    <img src="{{asset('images/deal-5.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="deal-img">
                    <img src="{{asset('images/deal-6.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="deal-img">
                    <img src="{{asset('images/deal-6.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
              </div> -->
              <!-- <div class="row">
             <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="deal-img">
                    <img src="{{asset('images/deal-7.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
               <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="deal-img">
                    <img src="{{asset('images/deal-8.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="deal-img">
                    <img src="{{asset('images/deal-9.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
                  <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="deal-img">
                    <img src="{{asset('images/deal-6.jpg')}}" class="img-responsive" alt="">
                  </div>
                </div>
              </div> -->

              <div class="mov-circel">
             <div class="load"></div>
              </div>
             <!--  <div class="text-center new-load-btn">
                <a href=""><i class="fa fa-spinner" aria-hidden="true"></i></a>
              </div> -->
              <div class="follow-btn">
                <a href="{{App\Http\Traits\HelperTrait::returnFlag(1962) }}"><i class="fa fa-instagram" aria-hidden="true"></i>Follow us on Instagram</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- deal list sec end -->



<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection


<!-- Newsletter Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
  

  <form action="{{route('newsletterSubmit')}}" method="post">
    @csrf
       <div class="body-content">
         <h2>Subscribe</h2>
         <div class="form-group">
           <input id="email" name="email" type="email" class="form-control"  placeholder="Enter Your Email Address" required="">
         </div>
          <div>
           <button class="subscribe-btn">Subscribe Now <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
</button>
         </div>
       </div>
       </form>
      <div class="modal-footer">
        <!--         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>
@section('css')
<style>

</style>
@endsection

@section('js')



<script>
    $(document).ready(function(){       
   $('#myModal').modal('show');
    }); 
  </script>
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



