@extends('layouts.default')

@section('metatag')
    <?php if(!isset($id)){ ?>
      <title>Ayam Kalasan | {{ucfirst($category)}}</title>
      <meta name="description" content="AYAM KALASAN, it solution, web application, {{ucfirst($category)}}" />
      <meta name="keywords" content="AYAM KALASAN, {{ucfirst($category)}},  pt.siu,solusi,pt-solusi,pt-solusi, it solution,leading IT and business services companies " />
      <meta name="rating" content="general" />
      <meta name="copyright" content="2015, AYAM KALASAN " />
    <?php }else{
      $row = article::where("id","=",$id)->where("active","=","1")->orderby("sort","asc")->first();
 
      //UPDATE VIEW COUNT
      $article   = article::where("id","=",$id)->first();
      $article->visit_count=$article->visit_count+1;
      $article->save();
   
      ?>        
      <title>AYAM KALASAN | {{ucfirst($category)}} {{ $row->title }}</title>
      <meta name="description" content="AYAM KALASAN, it solution, web application, {{ucfirst($category)}}," />
      <meta name="keywords" content="AYAM KALASAN, {{ucfirst($category)}}, {{ucfirst($category)}} {{ $row->title }},pt.siu,solusi,pt-solusi,pt-solusi, it solution,leading IT and business services companies " />
      <meta name="rating" content="general" />
      <meta name="copyright" content="2015, AYAM KALASAN " />
    <?php }?>
    <meta name="revisit-after" content="31 Days" />
    <meta name="expires" content="never">
    <meta name="distribution" content="global" />
    <meta name="robots" content="index" />
@stop

@section('header')
    <!--      <div class="header-carousel"  style="max-height: 220px;" >
            <div id="carousel-home" style="max-height: 220px;"   class="carousel slide" data-ride="carousel">

              <div class="carousel-inner" style="max-height: 220px;" role="listbox">
                <div class="item active">
                  <img src="asset/img/slide2.jpg" alt="...">
                  <div class="carousel-caption">

                  </div>
                </div>
                
                
              </div>


            </div>
        </div> -->
@stop
@section('menu')


            
                                <?php  
                    if($category=="news")                 
                      $hasil= article::where("category_id","=",$category)->where("active","=","1")->orderby("created_at","desc")->take(5)->get();                     
                    else
                      $hasil= article::where("category_id","=",$category)->where("active","=","1")->orderby("sort","asc")->take(5)->get();                     
                    
                ?>


<div class="col-sm-3">
    <div class="sidebar-nav sidebar-nav-custom">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar2">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-caret-down"></span> &nbsp; 
            <?php if($category=='solution' && isset($id)){ ?>
                {{ $category }}
            <?php }else { ?>
                {{ $category }}
            <?php }?>
          </button>
          <h4><span class="navbar-brand">            
            <?php if($category=='solution' && isset($id)){ ?>
                {{ $category }}
            <?php }else { ?>
                {{ $category }}
            <?php }?>
            </span></h4>
        </div>

        <div class="navbar-collapse collapse" id="navbar2">
          <ul class="nav navbar-nav">
           
            @foreach ($hasil as $row) 
                <li>
                        <div class="col-md-12 " style="padding:5px 5px 5px 15px;"><a href='{{ asset($category.'/'.$row->id) }}'> {{$row->title}} </a></div>
                </li><br>                    
            @endforeach
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>



@stop
@section('content')
    <?php if(!isset($id)){ ?>
                <?php
                  if($category=="news")
                    $row= article::where("category_id","=",$category)->where("active","=","1")->orderby("created_at","desc")->first(); 
                  else
                    $row= article::where("category_id","=",$category)->where("active","=","1")->orderby("sort","asc")->first(); 
                  
                ?>
                <div class="row">
                    <section>
                        <div class="judul">
                            <center><h2>{{ $row->title }}</h2></center>
                        </div>
                    </section>
                </div>


                <div class="row about-container">
                    <section>
                        <div class="col-md-8" >
                              {{ $row->description }}
                        </div>
               
        <?php }else{?>


        
            <?php
        if (!isset($id))
        { $id=0; }
        $row = article::where("id","=",$id)->where("active","=","1")->orderby("sort","asc")->first();
        ?>
                <div class="row">
                    <section>
                        <div class="judul">
                            <center><h2>{{ $row->title }}</h2></center>
                        </div>
                    </section>
                </div>


                <div class="row about-container">
                    <section>
                        <div class="col-md-8" >
                              {{ $row->description }}
                        </div>

      <?php } ?>
                        <div class="col-md-4 div-menu-aboutus">
                            <ul class="ul-menu-aboutus">
                                <b>{{ucfirst($category)}}</b><br><br>
                                <?php
                                  $rows= article::where("category_id","=",$category)->where("active","=","1")->get();
                                ?>

                                @foreach ($rows as $row)
                                  <li><a class="font-merahsolusi" href="/{{ucfirst($category)}}/{{$row->id}}">{{ $row->title }}</a></li>
                                @endforeach 
                            </ul>
                        </div>
                    </section>
                </div>


@stop
