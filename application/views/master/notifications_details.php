<?php foreach($exam_notification_details as $row){}?>
    
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
                         <div>
                            <img  src="<?php echo $row->image;?>"  class="img-fluid" >
                           <script type="text/javascript" language="javascript">
      var aax_size='728x90';
      var aax_pubname = 'bafa151515-21';
      var aax_src='302';
    </script>
    <script type="text/javascript" language="javascript" src="http://c.amazon-adsystem.com/aax2/assoc.js"></script>
                        </div>
                        <div class="main_info_wrapper">
                            
                            <!-- /main_info_wrapper -->
                            

                            <div class="content_more">
                                <?php echo $row->exam_notification_des;?>
                            </div>
                            <!-- /content_more -->
                            <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f4c9ea0dc8707001906e0e1&product=sop' async='async'></script>
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

    