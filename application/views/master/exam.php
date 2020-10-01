<?php foreach($exam_syllabus as $row){}?>
    
    <main class="bg_color">
         <div class="hero_single version_2">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-10">
                            <h2 class="upper" style="color:#fff;padding-top:0px;text-align: center;"><?php echo $row->exams_name;?></h2>
                           
                            
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
     
    <script type="text/javascript" language="javascript" src="http://c.amazon-adsystem.com/aax2/assoc.js"></script>
        <div class="container margin_detail">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="box_general">
                         <div>
                            <img  src="<?php echo $row->image;?>"  class="img-fluid" >
                           
                        </div>
                        <div class="main_info_wrapper">
                            
                            <!-- /main_info_wrapper -->
                            

                            <div class="content_more">
                                <?php echo $r->exam_syllabus_des;?>
                            </div>
                            <!-- /content_more -->
                            
                        </div>
                        <!-- /main_info -->
                    </div>
                    <!-- /box_general -->
                                    </div>
                <!-- /col -->
                <?php include("left_menu.php");?>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->

    