<?php foreach($exam_syllabus as $row){}?>
<main class="bg_color">

        <div class="hero_single version_2">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10">
                            <h2 style="color:#fff;padding-top: 20px;">BUILD YOUR DREAM JOB HERE</h2>
                            <br/>
                            <a href="grid-listing-1.html" class="btn_1 medium">START NOW</a>
                            
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
      
       <div class="filters_full version_2">
            <div class="container clearfix">
              
                <a href="#0" class="open_filters btn_filters"><i class="icon_adjust-vert"></i><span>Filters</span></a>
                
                
               
            </div>
          
      
        <!-- /Map -->
        
        <!-- /collapseSearch -->
        </div>
        <!-- /filters_full -->
        <div class="container margin_30_40">
                
            <div class="row">
                
<?php include("left_menu.php");?>
               <div class="col-lg-8" style="background:#fff;padding:40px 30px;border:1px solid #ccc">
                    <div class="row grid_sidebar">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                          <p class="center"><?php if($row->document!='') { ?>
                            <a class="download upper" href="<?php echo $row->document;?>" download>
 <i class="icon_folder_download"></i> Download Syllabus
</a>
<?php } ?></p>
                    <p style="text-align:center"><img  src="<?php echo $row->image;?>" width="300px" class="center" ></p>
                    <?php echo $row->exam_syllabus_des;?>
                  <div class="sharethis-inline-share-buttons"></div>

                        </div>
                        <!-- /strip grid -->
                       
                    </div>
                    <!-- /row -->
                    
                </div>
                
                <!-- /col -->
            </div>      
        </div>
        <!-- /container -->
        
    </main>
    