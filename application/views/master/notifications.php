<?php foreach($exam_syllabus as $row){}?>
<main class="bg_color">

        <div class="hero_single version_2">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10">
                            <h2 style="color:#fff;padding-top: 20px;">BUILD YOUR DREAM JOB HERE</h2>
                            <br/>
                            <a href="<?php echo base_url()?>register" class="btn_1 medium">START NOW</a>
                            
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
        
        <div class="container margin_30_40">
                
            <div class="row">
                <?php include("left_menu1.php");?>

                <div class="col-lg-8">
                    <div class="row" style="border:1px solid #f00053;">
                <div class="col-12" style="background: #f00053">
                    <div class="" style="padding-top: 10px">
                    
                    <h4 title="Tnpsc Career Popular Exams" style="color:#fff;text-transform: uppercase;">notifications</h4>
                    
                </div>
                </div>
                <div class="col-md-12">
                    
                       
                               <div class="container">
            
  <table class="table">
    
    <tbody>
        <?php foreach($exam_notifications as $notifications){?>
      <tr>
        <td ><a style="color:blue;font-size: 18px" href="<?php echo base_url()?>notification_details/<?php echo $notifications->id;?>"><?php echo $notifications->exam_notification_name;?></a><span style="margin-left: 20px">(Posted Date:<?php echo date("d-m-Y", strtotime($notifications->createddate));?>)</span></td>
        
       
       
      </tr>
  <?php } ?>
      
    </tbody>
  </table>
 
</div>
                   
                </div>
                
            </div>
                   
                </div>
               
                <!-- /col -->
            </div>      
        </div>
        <!-- /container -->
        
    </main>
    