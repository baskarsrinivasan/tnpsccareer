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
        
        <div class="container margin_30_40">
                
            <div class="row">
                
<?php include("left_menu.php");?>
                <div class="col-lg-8" style="background:#fff;margin-left: 20px;padding:40px 30px;border:1px solid #ccc">
                    <p class="center"><?php if($row->document!='') { ?>
                            <a class="download upper" href="<?php echo $row->document;?>" download>
 <i class="icon_folder_download"></i> Download Syllabus
</a>
<?php } ?></p>
                    <p style="text-align:center"><img  src="<?php echo $row->image;?>" width="300px" class="center" ></p>
                    <?php echo $row->exam_syllabus_des;?>
                </div>
                <aside class="col-lg-1" id="sidebar_fixed">
                   
                </aside>
                <!-- /col -->
            </div>      
        </div>
        <!-- /container -->
        
    </main>
    