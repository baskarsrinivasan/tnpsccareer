<?php foreach($exam_syllabus as $row){}?>
    
    <main class="bg_color">
         <div class="hero_single version_2">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-10">
                            <h2 class="upper" style="color:#fff;padding-top:0px;text-align: center;">Current Affairs</h2>
                           
                            
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
                                    <h3 class="center" style="text-align:center;">Exam Current Affairs</h3>
                                    
                                </div>
                                
                            </div>
                            

                            <div class="services_list clearfix">
                                                    <ul>

                                                        <div class="row">
                                                             <?php foreach($exam_currentaffairs as $currentaffairs){?>
                                                            <div class="col-md-2">
                                                                <a style="color:blue;font-size: 18px" href="<?php echo base_url()?>currentaffairs_details/<?php echo $currentaffairs->id;?>"><?php echo date("d-m-Y", strtotime($currentaffairs->createddate));?></a>
                                                            </div>
                                                             <?php } ?>
                                                        </div>
                                                        
                                                  
    <!-- <thead>
    <tr style="color:#000;font-size: 20px">
        <th>DETAILS</th>
        <th>POSTED DATE</th>
      
      </tr>
      </thead> -->
    
      
    
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

    