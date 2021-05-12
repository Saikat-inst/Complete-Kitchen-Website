<?php include 'includes/header.php';?>
 <?php include 'includes/nav.php';?><!-- #site-header-wrap -->		
 <style>
  .show_popup:hover{
    cursor:pointer;
  }
 </style>

			<div id="featured">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="featured-title" class="text-center">
                                <div id="breadcrumbs">
                                    <div class="breadcrumb-trail">
                                        <a href="#" title="Home" rel="home" class="trail-begin">Home</a> <span class="sep">/</span><span class="trail-end">Services</span>
                                    </div>
                                </div><!-- #breadcrumbs -->

                                <div class="featured-title-inner">
                                    <div class="featured-title-heading-wrap">
                                        <h1 class="featured-title-heading">Gallery</h1>
                                    </div>
                                </div><!-- .featured-title-inner -->
                            </div><!-- #featured-title -->
                        </div><!-- .col-md-12 -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- #featured -->

			            

 
    <div class="container">
    <h2 class=" align-item-center text-bold">Our Products</h2>
    
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