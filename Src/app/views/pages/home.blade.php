@extends('layouts.default')
@section('metatag')
    <title>AYAM KALASAN</title>

    <meta name="description" content="AYAM KALASAN, it solution, web application" />
    <meta name="keywords" content="AYAM KALASAN, pt.siu,solusi,pt-solusi,pt-solusi, it solution,leading IT and business services companies " />
    <meta name="rating" content="general" />
    <meta name="copyright" content="2015, AYAM KALASAN " />
    <meta name="revisit-after" content="31 Days" />
    <meta name="expires" content="never">
    <meta name="distribution" content="global" />
    <meta name="robots" content="index" />
@stop
@section('header')
<div class="header-carousel">
            <div id="carousel-home" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
<!--               <ol class="carousel-indicators">
                <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-home" data-slide-to="1"></li>
                <li data-target="#carousel-home" data-slide-to="2"></li>
              </ol> -->

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="{{asset('asset/img/slide2.jpg')}}" alt="...">
                  <div class="carousel-caption">
                    <section>
                        <!-- <h2>PT Solusi Integrasi Utama</h2>
                         <p>SOLUSI is one of the leading IT and business services companies, an affiliation with PT.Syslog Infostem Ofirmat founded in 1984.</p>
                         <button type="button" class="btn btn-danger">Action</button> -->
                    </section>
                  </div>
                </div>
               <!--  <div class="item">
                  <img src="asset/img/slide1.jpg" alt="...">
                  <div class="carousel-caption">
                    <section>
                        <h2>PT Solusi Integrasi Utama</h2>
                         <p>SOLUSI is one of the leading IT and business services companies, an affiliation with PT.Syslog Infostem Ofirmat founded in 1984.</p>
                    </section>
                  </div>
                </div>
                <div class="item">
                  <img src="asset/img/slide0.jpg" alt="...">
                  <div class="carousel-caption">
                    <section>
                        <h2>PT Solusi Integrasi Utama</h2>
                         <p>SOLUSI is one of the leading IT and business services companies, an affiliation with PT.Syslog Infostem Ofirmat founded in 1984.</p>
                    </section>
                  </div>
                </div>
                ... -->
              </div>


            </div>
        </div>
@stop
@section('content')
<div class="welcome-to">
            <section>
                <div class="row">
                    <div class="col-md-8 cols-xs-8">
                        <h3 class="font-merahsolusi">Welcome To PT Solusi Integrasi Utama</h3>
                        <p>SOLUSI is one of the leading IT and business services companies, SOLUSI founded in 1997. We have a mission to provide value-added solutions in information technology to its client by understanding their business objectives. We have been successfully partnering with our clients to design, build and deploy solutions, streamline processes, integrate systems, deliver relevant, timely information and extract return on investment. We have been intensively offering total 
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <img src="{{asset('asset/img/TV4.jpg')}}" height="125px" alt="...">
                    </div>
                <div>
            </section>

    </div>
    <div class="home-principal">
            <section>
                <div class="row principal">
                    <div class="col-md-4 col-xs-4">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>
                                    <span class="fa-stack fa-6x logo">
                                        <i class="fa fa-briefcase fa-stack-1x"></i>
                                    </span>
                                </h2>
                            </div>                         
                            <div class="col-md-8">
                                <span class="fa-stack fa-6x judul">
                                    <h2>Commitment</h2>
                                </span>
                            </div>
                        </div>
						<p>Alignment and intimacy with our clients is of out most importance. This helps us identify innovation and transformation opportunities and work with them in supporting their growth and leadership.</p>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>
                                    <span class="fa-stack fa-6x logo">
                                        <i class="fa fa-gears fa-stack-1x"></i>
                                    </span>
                                </h2>
                            </div>                         
                            <div class="col-md-8">
                                <span class="fa-stack fa-6x judul">
                                    <h2>Collaboration</h2>
                                </span>
                            </div>
                        </div>
                        <p>Meaningful creation happens with the collaborative efforts of large numbers of competent individuals demonstrating outstanding teamwork. Open and collaborative culture, driven by mutual respect, has been the ‘secret formula’ to envisioning and creating platforms and application in conjunction with our clients and partners.</p>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>
                                    <span class="fa-stack fa-6x logo">
                                        <i class="fa fa-male fa-stack-1x"></i>
                                    </span>
                                </h2>
                            </div>                         
                            <div class="col-md-8">
                                <span class="fa-stack fa-6x judul">
                                    <h2>Character building</h2>
                                </span>
                            </div>
                        </div>
                        <p>We believe in building world-class professionals. People spend substantial part of their time within the organization At SOLUSI we create an environment which acts as stimulus for building people into leaders in all facets of their lives.</p>
                    </div>
                   
                    
                </div>
            </section>
        
    </div>
    

@stop
