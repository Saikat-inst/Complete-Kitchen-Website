 <?php include 'includes/header.php';?>
 <?php include 'includes/nav.php';?>

 <?php
    include "includes/dbcon.php";
	$s="SELECT * FROM `page` WHERE `name`='about'  ";
	$r=mysqli_query($connect,$s);
	$page=mysqli_fetch_assoc($r);
?>
 <style>
    .show_popup{
        cursor:pointer;
    }

   </style>

                  
            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">
                                <div class="dlr-hero-carousel">
                                    <div class="hero-carousel-wrap" data-hero-carousel>
                                        <div class="hero-slide">
                                            <div class="hero-content">
                                                <div class="content-wrap">
                                                    <span class="hero-subtitle" data-nav-title="Creativity & Uniqueness">Commercial</span>
                                                    <h2 class="hero-title">Creativity & <br>Uniqueness</h2>
                                                    <div class="hero-link">
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="hero-image">
                                                <img src="assets/imgs/pic1.jpg" alt="Image">
                                            </div>
                                        </div>

                                        <div class="hero-slide">
                                            <div class="hero-content">
                                                <div class="content-wrap">
                                                    <span class="hero-subtitle" data-nav-title="Latest trends">Commercial</span>
                                                    <h2 class="hero-title">Latest trends</h2>
                                                    <div class="hero-link">
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="hero-image">
                                                 <img src="assets/imgs/pic2.jpg" alt="Image">
                                            </div>
                                        </div>

                                        <div class="hero-slide">
                                            <div class="hero-content">
                                                <div class="content-wrap">
                                                    <span class="hero-subtitle" data-nav-title="Interiors that you'll love">Commercial</span>
                                                    <h2 class="hero-title">Interiors that you'll love</h2>
                                                    <div class="hero-link">
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="hero-image">
                                                <img src="assets/imgs/pic3.jpg" alt="Image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hero-nav-wrap" data-carousel-nav></div>
                                </div><!-- .dlr-hero-carousel -->

                                <div class="row-services gray-bg">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="cbr-spacer clearfix" data-desktop="46" data-mobi="46" data-smobi="46"></div>
                                            </div><!-- .col-md-12 -->

                                            <div class="col-lg-3 col-md-6 no-padding">
                                                <div class="animate-box wow fadeInUpSmall" data-wow-delay="0.4s" data-wow-duration="0.4s">
                                                    <div class="cbr-icon-box text-center style-3 icon-left has-border-right clearfix">
                                                        <div class="icon-wrap">
                                                            <i class="azzuro-icon-support"></i>
                                                        </div>
                                                        <span class="icon"><i class="fa fa-chevron-right"></i></span>
                                                        <h3 class="heading wow rotateInUpLeft">Modular Kitchen in<br>Kolkata</h3>
                                                    </div><!-- .cbr-icon-box -->
                                                </div><!-- .animate-box -->

                                                <div class="cbr-spacer clearfix" data-desktop="0" data-mobi="31" data-smobi="31"></div>
                                            </div><!-- .col-lg-3 -->

                                            <div class="col-lg-3 col-md-6 no-padding">
                                                <div class="animate-box wow fadeInUpSmall" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                                    <div class="cbr-icon-box text-center style-3 icon-left has-border-right clearfix">
                                                        <div class="icon-wrap">
                                                            <i class="azzuro-icon-conversation"></i>
                                                        </div>
                                                        <span class="icon"><i class="fa fa-chevron-right"></i></span>
                                                        <h3 class="heading wow rotateInUpLeft">Dynamic team of <br>industry experts</h3>
                                                    </div><!-- .cbr-icon-box -->
                                                </div><!-- .animate-box -->

                                                <div class="cbr-spacer clearfix" data-desktop="0" data-mobi="31" data-smobi="31"></div>
                                            </div><!-- .col-lg-3 -->

                                            <div class="col-lg-3 col-md-6 no-padding">
                                                <div class="animate-box wow fadeInUpSmall" data-wow-delay="0.8s" data-wow-duration="0.8s">
                                                    <div class="cbr-icon-box text-center style-3 icon-left has-border-right clearfix">
                                                        <div class="icon-wrap">
                                                            <i class="azzuro-icon-customer-support"></i>
                                                        </div>
                                                        <span class="icon"><i class="fa fa-chevron-right"></i></span>
                                                        <h3 class="heading wow rotateInUpLeft">Capable & <br>Experienced</h3>
                                                    </div><!-- .cbr-icon-box -->
                                                </div><!-- .animate-box -->

                                                <div class="cbr-spacer clearfix" data-desktop="0" data-mobi="0" data-smobi="31"></div>
                                            </div><!-- .col-lg-3 -->

                                            <div class="col-lg-3 col-md-6 no-padding">
                                                <div class="animate-box wow fadeInUpSmall" data-wow-delay="1s" data-wow-duration="1s">
                                                    <div class="cbr-icon-box text-center style-3 icon-left clearfix">
                                                        <div class="icon-wrap">
                                                            <i class="azzuro-icon-growth"></i>
                                                        </div>
                                                        <span class="icon"><i class="fa fa-chevron-right"></i></span>
                                                        <h3 class="heading wow rotateInUpLeft">Mix of tradition & <br>modern design</h3>
                                                    </div><!-- .cbr-icon-box -->
                                                </div><!-- .animate-box -->
                                            </div><!-- .col-lg-3 -->

                                            <div class="col-md-12">
                                                <div class="cbr-spacer clearfix" data-desktop="46" data-mobi="46" data-smobi="46"></div>
                                            </div><!-- .col-md-12 -->
                                        </div><!-- .row -->
                                    </div><!-- .container -->
                                </div><!-- .row-services -->


                                <div class="row-about-us">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="cbr-spacer clearfix" data-desktop="140" data-mobi="100" data-smobi="100"></div>
                                            </div><!-- .col-md-12 -->

                                            <div class="col-lg-7 col-md-12">
                                                <div class="testimonials">
                                                    <div class="thumb">
                                                        <div class="animate-box wow fadeInLeftSmall" data-wow-delay="0.6s" data-wow-duration="0.6s">
                                                            <img src="assets/imgs/about3.jpg" alt="Image">
                                                        </div><!-- .animate-box -->
                                                    </div>
                                                </div><!-- .testimonials -->

                                                <div class="cbr-spacer clearfix" data-desktop="0" data-mobi="60" data-smobi="60"></div>
                                            </div><!-- .col-lg-7 -->

                                            <div class="col-lg-5 col-md-8">
                                                <div class="cbr-content-box clearfix" data-padding="" data-mobipadding="" data-margin="-10px 0 0 0" data-mobimargin="-10px 0 0 0">
                                                    <div class="inner">
                                                        <div class="cbr-headings">
                                                            <h2 class="heading style-1 wow pulse" data-wow-duration="1s" data-wow-delay="0.6s">What makes we the best ??</h2>
                                                        </div><!-- .cbr-headings -->

                                                        <div class="cbr-spacer clearfix" data-desktop="39" data-mobi="39" data-smobi="39"></div>

                                                        <div class="cbr-text style-1 wow pulse" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                                            <p class="text-wrap" ><p> <?php echo $page['text']?> </p>

                                                        <div class="cbr-spacer clearfix" data-desktop="54" data-mobi="38" data-smobi="38"></div>

                                                        <div class="animate-box wow fadeInUpSmall" data-wow-delay="0.4s">
                                                            <div class="cbr-list">
                                                                <div class="item-wrap">
                                                                    <span>
                                                                        <span class="icon"><i class="fa fa-chevron-right"></i></span>
                                                                        <span>Guaranteed Work</span>
                                                                    </span>
                                                                </div>
                                                            </div><!-- .cbr-list -->
                                                        </div><!-- .animate-box -->

                                                        <div class="animate-box wow fadeInUpSmall" data-wow-delay="0.6s">
                                                            <div class="cbr-list">
                                                                <div class="item-wrap">
                                                                    <span>
                                                                        <span class="icon"><i class="fa fa-chevron-right"></i></span>
                                                                        <span>Interior Expertise</span>
                                                                    </span>
                                                                </div>
                                                            </div><!-- .cbr-list -->
                                                        </div><!-- .animate-box -->

                                                        <div class="animate-box wow fadeInUpSmall" data-wow-delay="0.8s">
                                                            <div class="cbr-list">
                                                                <div class="item-wrap">
                                                                    <span>
                                                                        <span class="icon"><i class="fa fa-chevron-right"></i></span>
                                                                        <span>Free Consulting</span>
                                                                    </span>
                                                                </div>
                                                            </div><!-- .cbr-list -->
                                                        </div><!-- .animate-box -->

                                                        <div class="animate-box wow fadeInUpSmall" data-wow-delay="1s">
                                                            <div class="cbr-list">
                                                                <div class="item-wrap">
                                                                    <span>
                                                                        <span class="icon"><i class="fa fa-chevron-right"></i></span>
                                                                        <span>Project management</span>
                                                                    </span>
                                                                </div>
                                                            </div><!-- .cbr-list -->
                                                        </div><!-- .animate-box -->
                                                    </div>
                                                </div><!-- .cbr-content-box -->

                                                <div class="cbr-spacer clearfix" data-desktop="62" data-mobi="50" data-smobi="50"></div>

                                                <div class="animate-box wow fadeInUpSmall" data-wow-delay="1.2s">
                                                    <div class="cbr-links style-3">
                                                        <span class="simple-link"><a href="#">About Us</a></span>
                                                    </div>
                                                </div><!-- .animate-box -->
                                            </div><!-- .col-md-5 -->

                                            <div class="col-md-12">
                                                <div class="cbr-spacer clearfix" data-desktop="140" data-mobi="97" data-smobi="97"></div>
                                            </div><!-- .col-md-12 -->
                                        </div><!-- .row -->
                                    </div><!-- .container -->
                                </div><!-- .row-about-us -->

                              <div class="container">
<h2 class="d-flex justify-content-center align-item-center text-bold" class="animate-box wow fadeInUpSmall" id="our">Our Products</h2>
    
    <div class="row gallery" >
                                                            
                                                     
<?php include "includes/dbcon.php";
  $s="SELECT * FROM `gallery` ORDER BY `id` DESC ";
  $res= mysqli_query($connect,$s);

    while($d=mysqli_fetch_array($res)){
        echo "
        <div class='col-md-3 wow fadeInLeftBig animated' style='margin-bottom:1.3%'>
        <div class='card text-center'>
         <div class='card-block' style='padding:30px'>
         <img src='admin/".$d['path']."'class='show_popup' style='width:100%;height:230px'>
        

         
        </div>

      </div>
      
      </div>
     
         
        ";
    }


?>
  </div>
  </div>
  </div>
  </div>
  


  
<div class="modal popup" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <div class="modal-body text-center">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="font-size:30px;">&times;</span>
        </button>
        <img src='' style='height:400px;width:auto;' id='modal_image'/>
      </div>
    </div>
  </div>
</div>
</div>
<script>
$(document).ready(function(){
  $('.show_popup').click(function(){
    src_val=$(this).attr('src'); 
    $('#modal_image').attr('src',src_val);
    $('.popup').modal('show');
    
    
  })



});
</script>

<?php include "includes/footer.php"?>