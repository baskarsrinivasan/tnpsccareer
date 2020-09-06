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

                <div class="col-lg-8" style="background: #fff">
                   <div class="">
            
            <div class="row" style="border:1px solid #2196f3">
                <div class="col-12" style="background: #2196f3">
                    <div class="" style="padding-top: 10px">
                    
                    <h4 title="Tnpsc Career Popular Exams" style="color:#fff;text-transform: uppercase;">Current Affairs</h4>
                    
                </div>
                </div>
                <div class="col-md-12">
                    
                       
                               <div class="container">
            
  <table class="table">
    <!-- <thead>
    <tr style="color:#000;font-size: 20px">
        <th>DETAILS</th>
        <th>POSTED DATE</th>
      
      </tr>
      </thead> -->
    <tbody>
        <?php foreach($exam_currentaffairs as $currentaffairs){?>
      <tr>
        <td ><a style="color:blue;font-size: 18px" href="<?php echo base_url()?>currentaffairs_details/<?php echo $currentaffairs->id;?>"><?php echo $currentaffairs->exam_currentaffairs_name;?></a><span style="margin-left: 20px">(Posted Date:<?php echo date("d-m-Y", strtotime($currentaffairs->createddate));?>)</span></td>
        <td></td>
       
      </tr>
  <?php } ?>
      
    </tbody>
    <tfoot>
        
        <tr style="text-align:right;">
        <td ></td>
      </tr>
    </tfoot>
  </table>
 
</div>
                   
                </div>
                
            </div>
                </div>
               
            </div>      
        </div>
        <!-- /container -->
        
    </main>
    