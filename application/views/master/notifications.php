<?php foreach($exam_syllabus as $row){}?>
    
    <main class="bg_color">
         <div class="hero_single version_2">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-10">
                            <h2 class="upper" style="color:#fff;padding-top:0px;text-align: center;">Exam Notifications</h2>
                           
                            
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
        <div class="container margin_detail">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="box_general">
                        
                        <div class="main_info_wrapper">
                            
                            <div class="main_info clearfix">
                                <div class="user_desc">
                                    <h3 class="center" style="text-align:center;">Exam Notifications</h3>
                                    
                                </div>
                                
                            </div>
                            

                            <div class="services_list clearfix">
                                                    <ul>
                                                         <?php foreach($exam_notifications as $notifications){?>
                        <li class="upper"><a href="<?php echo base_url()?>notification_details/<?php echo $notifications->id;?>"><i class="icon_compass_alt"></i><span style="padding-left: 5px"/><?php echo $notifications->exam_notification_name;?></a></li>
                    <?php } ?>
                                                       
                                                    </ul>
                                                </div>
                        </div>
                        <!-- /main_info -->
                    </div>
                    <!-- /box_general -->
                                    </div>
                <!-- /col -->
                <?php include("left_menu1.php");?>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->

    