@extends('layouts.Admin')
@section('content-header')
                    <h1>
                        Manage Content {{$categori_id}}
                        <small>manage content</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                        <li class="active">Manage</li>
                    </ol>
@stop
@section('content')


{{ HTML::script(asset('ckeditor/ckeditor.js'))}} 


<style type="text/css">
    .outer-warper-item
    {
        padding: 10px 10px 10px 10px;
        width: 250px;
        height: 500px;
        background: #3b3b3b;
        margin: 5px 5px 5px 5px;
        float: left;
    }
    .outer-warper-item .item
    {
        display: inline-block;
    }   
    .outer-warper-item .item img
    {
        clear: both;
        top:0;
        width: 230px;
        height: 230px;
    }   
    .outer-warper-item .item .penjelasan
    {
        clear: both;
        color: #fff;
        position: relative;
    }   
    .contentwarper2
    {
        width: 100%;
        padding: 0 auto;
        margin: 0 auto;
    }
    .blok-tanggal
    {
    padding: 5px;

    }

    .blok-tanggal-d
    {
        margin-top: 0px;
        margin: 0px;
        font-size: 20pt;
    }
    .blok-tanggal .blok-tanggal-my
    {
        font-size: 8pt;
        margin: 0px;
    }
    .blok-tanggal .section-subheading
    {
        margin-top: 0px;
        margin-bottom: 0px;
    }


</style>

<h4 class="page-header">
    <button type="button" class="btn-app btn btn-default btn-sm" onclick="add();" ><i class="fa fa-plus"></i> Add</button>
    <button type="button" class="btn-app btn btn-default btn-sm" onclick="refreshdata()" ><i class="fa fa-refresh"></i> Refresh</button>
       
</h4>
<div id="pesan"></div>
<div id="divform"></div>
 <form id="frmkategori" >
       <input type="hidden" name="gcategory_id" id="gcategory_id" value="{{$categori_id}}">
 </form>
<div class="" style="margin-left:auto;margin-right:auto;">
        <div class="contentwarper2" style="">
        <div class="content-warper" style="max-width:100%;margin: 0 0 0 0;" >




        <div style="max-width:100%; margin-left:auto; margin-right:auto; float:left; width:100%; padding: 0px 0 0px 0;">
        
            <div id="" style="padding:15px auto 15px auto;margin:15px auto 15px auto;">    

                    <div id="data">

                      <?php 
                           
                            $hasil= article::where("category_id","=","3")->get();
                            $i=1;
                      ?>

   
                        <!-- Carousel items -->
                                @foreach ($hasil as $row) 
                                    <div class='row news-block'>
                                        <div class="col-md-2 blok-tanggal color-RedSolusi font-white">
                                            <div class="col-md-12 blok-tanggal-d">{{ date_format($row->created_at,"d") }}</div>
                                            <div class="col-md-12 blok-tanggal-my">{{ date_format($row->created_at,"M Y") }}</div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 >{{ $row->title }}</h4>
                                                </div>
                                                <div class="timeline-body">
                                                    <p class="text-muted font-black">{{ $row->short_description }}
                                                        <a  href="#AllModal" onclick="ubah({{ $row->id }})">  <!--  class="portfolio-link" data-toggle="modal" -->>
                                                                Read More
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
</div>

                    </div>
            </div>
        </div>
        </div>
        </div>
</div>

<div style="clear:both;margin-bottom:20px;"></div>


        <script type="text/javascript">
              function tutupwindow(){
                  $('#divform').html('');
              }

              function add()
              {
                   $('#divform').html('<center>Loading</center>');
                    $.ajax(
                    {
                            type:"Get",
                            url:"/article/create",
                            data:$('#frmkategori').serialize(),
                            cache:false,
                            success : function(msg)
                            { 
                                $('#divform').html(msg);
                             },                
                                error: function(msg) { 
                                $('#divform').html(msg);
                             }
                          }
                    )  
                  
                  $("html, body").animate({ scrollTop: $('#divform').offset().top }, 1000);      
              }   
              function simpan()
              {
                    for ( instance in CKEDITOR.instances )
                        CKEDITOR.instances[instance].updateElement();
                     $('#box-body').append('<div class="overlay"></div>');
                     $('#box-body').append('<div class="loading-img"></div>');
                      $.ajax(
                      {
                            type:"Post",
                            url:"/article",
                            data:$('#frmaddKonten').serialize(),
                            cache:false,
                            success : function(msg)
                            {
                                    
                                    $('#pesan').append(msg);
                                    refreshdata();
                             },                
                                error: function(msg) { 
                                    
                                    $('#pesan').append(msg);
                                    refreshdata();
                             }
                          }
                        )     
              }     
              function refreshdata()
              {
                    $('#data').html('<center>Loading</center>');
                    $.ajax(
                    {
                            type:"Get",
                            url:"/article",
                            data:$('#frmkategori').serialize(),
                            cache:false,
                            success : function(msg)
                            { 
                                $('#data').html(msg);
                             },                
                                error: function(msg) { 
                                $('#data').html(msg);
                             }
                          }
                    )  
                  
                  $("html, body").animate({ scrollTop: $('#data').offset().top }, 1000);    
              }   
              function ubah(id)
              {
                   $('#divform').html('<center>Loading</center>');
                    $.ajax(
                    {
                            type:"Get",
                            url:"/article/"+id,
                            data:$('#frmkategori').serialize(),
                            cache:false,
                            success : function(msg)
                            { 
                                $('#divform').html(msg);
                             },                
                                error: function(msg) { 
                                $('#divform').html(msg);
                             }
                          }
                    )  
                  
                  $("html, body").animate({ scrollTop: $('#divform').offset().top }, 1000);      
              }   
                // function ubah(id)
                // {
                //     $('#divform').html('<center>Loading</center>');
                //     $('#divform').load("/Admin/Module/ModuleArticle?mode=AmbilDetail&ID="+ id);  
                //     $("html, body").animate({ scrollTop: $('#divform').offset().top }, 1000);      
                // }
                function tutupwindow(){
                    $('#edit').html('');
                }

                function tampildata(kategori)
                {
                    $('#data').html('<center>Loading</center>');
                    $('#data').load("../Admin/Module/ModuleArticle?mode=loaddata&kategori="+kategori);  
                    $("html, body").animate({ scrollTop: $('#data').offset().top }, 1000);      
                }

                function update(id){
                    alert(id);
                    for ( instance in CKEDITOR.instances )
                        CKEDITOR.instances[instance].updateElement();
                     $('#box-body').append('<div class="overlay"></div>');
                     $('#box-body').append('<div class="loading-img"></div>');
                      $.ajax(
                      {
                            type:"Post",
                            url:"/article/"+id,
                            data:$('#frmeditKonten').serialize(),
                            cache:false,
                            success : function(msg)
                            {
                                    alert(msg);
                                    $('#pesan').append(msg);
                                    refreshdata();
                             },                
                                error: function(msg) { 
                                    
                                    alert(msg);
                                    $('#pesan').append(msg);
                                    refreshdata();
                             }
                          }
                        ) 
                }

                // function update()
                // {
                //     for ( instance in CKEDITOR.instances )
                //         CKEDITOR.instances[instance].updateElement();



                //      $('#box').append('<div class="overlay"></div>');
                //      $('#box').append('<div class="loading-img"></div>');
                //       $.ajax(
                //             {
                //               type:"post",
                //               url:"/Admin/Module/ModuleArticle",
                //               data:$('#editKonten').serialize(),
                //               cache:false,
                //               success : function(msg)
                //               {
                //                 $('#divform').html('');
                //                 $('#data').empty();
                //                 //alert(msg);
                //                 tampildata($('#kategori').val());
                //                 $('#pesan').append(msg);
                //                 $("html, body").animate({ scrollTop: $('#pesan').offset().top }, 1000); 
                //                  $(msg).appendTo();
                //                      setTimeout(function() {
                //                          $("#pesan").hide('blind', {}, 500)
                //                      }, 5000);
                //                 },                
                //                 error: function(msg) {                        
                //                     $('#divform').html('');
                //                     $('#data').empty();
                //                     //alert(msg);
                //                     tampildata($('#kategori').val());
                //                     $('#pesan').append(msg);
                //                     $("html, body").animate({ scrollTop: $('#pesan').offset().top }, 1000); 
                //                     $(msg).appendTo();
                //                      setTimeout(function() {
                //                          $("#pesan").hide('blind', {}, 500)
                //                      }, 5000);
                //         }
                //             }
                //           ) 
                // }

                function tambah(kategori)
                {
                    $('#divform').html('<center>Loading</center>');
                    $('#divform').load("/Admin/Module/ModuleArticle?mode=Tambah&category_id="+kategori);  
                    $("html, body").animate({ scrollTop: $('#divform').offset().top }, 1000);  
                }

                function simpan2()
                {
                     $('#box-body').appendChild('<div class="overlay"></div>');
                     $('#box-body').appendChild('<div class="loading-img"></div>');
                    for ( instance in CKEDITOR.instances )
                        CKEDITOR.instances[instance].updateElement();
                        $.ajax(
                        {
                              type:"Post",
                              url:"/Admin/Module/ModuleArticle",
                              data:$('#addKonten').serialize(),
                              cache:false,
                              success : function(msg)
                              {
                                $('#divform').html('');
                                $('#data').empty();
                                alert(msg);
                                tampildata($('#kategori').val());
                               }
                            }
                          )
                }

               function hapus(id)
              {
                  var r=confirm("Apakah Anda Yakin ingin menghapus data ini");
                  if(r==true)
                  {
                      $.ajax(
                      {
                            type:"Post",
                            url:"/article/"+id,
                            data:$('#article'+id).serialize(),
                            cache:false,
                            success : function(msg)
                            {
                              alert(msg);
                              refreshdata();
                             }
                          }
                        )
                    }     
              }                   
                // function hapus(id)
                // {
                //     var r=confirm("Apakah Anda Yakin ingin menghapus data ini");
                //     if(r==true)
                //     {
                //         $('#divform').html('<center><img src="../Img/loading.gif"></center>');
                //         $('#divform').load("/Admin/Module/ModuleArticle?Aksi=hapusdata&ID="+ id);  
                //         $("html, body").animate({ scrollTop: $('#divform').offset().top }, 1000); 
                //         tampildata();
                //         }     
                // }
             
        </script>

@stop










