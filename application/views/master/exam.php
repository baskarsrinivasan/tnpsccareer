<?php if($exam_syllabus_count=='0'){?>
<div class="" style="background: #44207f;">
            <div class="" >
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-10" style="text-align: center;">
                            <img src="<?php echo base_url();?>assets/img/winner.png" style="margin-top:50px;height:450px">
                            <h2 class="upper" style="color:#fff;padding-top:0px;text-align: center;">Not Found Syllabus</h2>
                           
                            
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
<?php }
else
{
    ?>

<?php foreach($exam_syllabus as $row){

    
$exam_id=$row->exam_id;
}
$ids= $this->uri->segment('2');


?>

<?php foreach($advertising as $ad_row){}?>
    
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
        <div class="container margin_detail">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="box_general">

                         <div>
                            <img  src="<?php echo $row->image;?>"  class="img-fluid" >
                          <?php echo $ad_row->advertising_des?>
                        </div>
                        <div class="main_info_wrapper">
                            
                            <!-- /main_info_wrapper -->
                            

                            <div class="content_more">
                                <?php echo $row->exam_syllabus_des;?>
                            </div>
                            <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f4c9ea0dc8707001906e0e1&product=sop' async='async'></script>
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

    <?php } ?>