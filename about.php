
<?php include 'includes/header.php';?>
 <?php include 'includes/nav.php';?>

 <?php
    include "includes/dbcon.php";
	$s="SELECT * FROM `page` WHERE `name`='about'  ";
	$r=mysqli_query($connect,$s);
	$page=mysqli_fetch_assoc($r);
?>
 <style>
   #featured-image-1{
    background: url(assets/imgs/pic4.jpg) center center;
    background-size: cover;
    height: 780px;
   }

</style>
            <div id="featured-image-1"></div><!-- #featured -->

            <div id="main-content" class="site-main clearfix">
                <div id="content-wrap">
                    <div id="site-content" class="site-content clearfix">
                        <div id="inner-content" class="inner-content-wrap">
                            <div class="page-content">
								<div id="about" class="row-about-us">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                               
    
                                      
                                                    <div class="cbr-spacer clearfix" data-desktop="140" data-mobi="100" data-smobi="100"></div>
                                                </div><!-- .col-md-12 -->

                                                <div class="col-lg-6 col-md-10">
                                                    <div class="cbr-content-box clearfix" data-padding="" data-mobipadding="" data-margin="-10px 0 0 0" data-mobimargin="-10px 0 0 0">
                                                        <div class="inner">
                                                            <div class="cbr-headings">
                                                                <h2 class="heading style-1 wow pulse" data-wow-duration="0.6s" data-wow-delay="0.2s">What makes we the best ??</h2>
                                                            </div><!-- .cbr-headings -->

                                                            <div class="cbr-spacer clearfix" data-desktop="39" data-mobi="39" data-smobi="39"></div>

                                                            <div class="cbr-text style-1">
                                                                <p class="text-wrap wow pulse" data-wow-duration="0.8s" data-wow-delay="0.2s"><p><?php echo $page['text'];?></p>
                                                            </div><!-- .cbr-text -->

                                                            <div class="cbr-spacer clearfix" data-desktop="60" data-mobi="55" data-smobi="55"></div>


                                                        </div>
                                                    </div><!-- .cbr-content-box -->

                                                    <div class="cbr-spacer clearfix" data-desktop="0" data-mobi="66" data-smobi="66"></div>
                                                </div><!-- .col-lg-6 -->

                                                <div class="col-lg-6 col-md-10">
                                                    <div class="animate-box wow fadeInRightSmall" data-wow-delay="1s" data-wow-duration="1s">
                                                        <div class="half-image margin-left-30">
                                                            <img src="assets/imgs/pic.jpeg" alt="Image">
                                                        </div>
                                                    </div><!-- .animate-box -->
                                                </div><!-- .col-lg-6 -->
                                            </div><!-- .row -->
                                        </div><!-- .container -->
                                    </div><!-- .row-services -->
								
                                        </div><!-- .row -->
                                    </div><!-- .container -->
                                </div><!-- .row-member-post -->

                                

                                
                            </div><!-- .page-content -->
                        </div><!-- #inner-content -->
                    </div><!-- #site-content -->
                </div><!-- #content-wrap -->
            </div><!-- #main-content -->
			
		

                                                <div class="col-md-12">
                                                    <div class="cbr-spacer clearfix" data-desktop="113" data-mobi="73" data-smobi="73"></div>
                                                </div><!-- .col-md-12 -->
                                            </div><!-- .row -->
                                        </div><!-- .container -->
                                    </div><!-- .row-trusted -->
			
									<div class="row-partners gray-bg">
									<div class="cbr-spacer clearfix" data-desktop="110" data-mobi="70" data-smobi="100"></div>

                                </div><!-- .row-partners -->


            
                                <?php include "includes/footer.php"?>