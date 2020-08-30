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
                <?php include("left_menu1.php");?>

                <div class="col-lg-8" style="background:#fff;margin-left: 20px;padding:40px 30px;border:1px solid #ccc">
                    <div class="container">
                <div class="main_title version_2">
                   
                    <h2>Exam Syllabus</h2>
                    
                </div>
                <div class="list_articles add_bottom_25 clearfix">
                    <ul>
                        <?php foreach($exam_syllabus as $row){?>
                        <li>
                            <div class="row">
                            <div class="col-md-9">
                            <a href="<?php echo base_url()?>exam/<?php echo $row->exam_id;?>"><i class="icon_compass_alt"></i><?php echo $row->exam_syllabus_name;?></a>
                        </div>
                        <div class="col-md-3">
<?php if($row->document!='') { ?>
                            <a class="download" href="<?php echo $row->document;?>" download>
 <i class="icon_folder_download"></i> Download Syllabus
</a>
<?php } ?>
</div>
</div>
</li>
                    <?php } ?>
                      
                    </ul>
                </div>
                <!-- /list_articles -->
            </div>
                </div>
                <aside class="col-lg-1" id="sidebar_fixed">
                   
                </aside>
                <!-- /col -->
            </div>      
        </div>
        <!-- /container -->
        
    </main>
    