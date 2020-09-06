
<main>
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
	    
	   <div class="">
			<div class="container margin_60_40" >
				 <div class=""  style="border:1px solid #fe3349">
	                <div class="" style="background: #fe3349;padding: 10px">
					
					<h4 title="Tnpsc Career Popular Exams" style="color:#fff;text-transform: uppercase;">popular exams</h4>
					
				</div>
	            
				<!-- /main_title -->
				<div class="owl-carousel owl-theme categories_carousel" style="padding: 20px 50px">
					<?php foreach($exams as $row){?>
	                <div class="item_version_2" title="Tnpsc Career" style="border:1px solid #ccc;padding:10px;">
	                    <a title=" <?php echo $row->exams_name?>" href="<?php echo base_url()?>exam/<?php echo $row->id?>">
	                        <figure>
	                           
	                            <img src="<?php echo $row->image?>" data-src="<?php echo $row->image?>" alt="" class="owl-lazy" title="<?php echo $row->exams_name?>">
	                           <!--  <div class="info">
	                                <h3><?php echo $row->exams_name?></h3>
	                               
	                            </div> -->
	                        </figure>
	                    </a>
	                </div>
	                <?php } ?>
	            
	                
	            </div>
	            <!-- /carousel -->
	            </div>
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_gray -->
	    <div class="container margin_60_40">
	        
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
  <div style="text-align: center;"><a class="button_link" href="<?php echo base_url()?>currentaffairs">View More</a></div>
</div>
	               
	            </div>
	            
	        </div>
	        <div class="row" style="border:1px solid #f00053;margin-top: 40px">
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
  <div style="text-align: center;"><a class="button_link1" href="<?php echo base_url()?>notifications">View More</a></div>
</div>
	               
	            </div>
	            
	        </div>
	        <div class="row" style="border:1px solid #000c34;margin-top: 40px">
	            <div class="col-12" style="background: #000c34">
	                <div class="" style="padding-top: 10px">
					
					<h4 title="Tnpsc Career Popular Exams" style="color:#fff;text-transform: uppercase;">syllabus</h4>
					
				</div>
	            </div>
	            <div class="col-md-12">
	                
	                   
	                           <div class="container">
            
  <table class="table">
    
    <tbody>
    	<?php foreach($exam_syllabus as $syllabus){?>
      <tr>
        <td ><a style="color:blue;font-size: 18px" href="<?php echo base_url()?>exam/<?php echo $syllabus->id;?>"><?php echo $syllabus->exam_syllabus_name;?></a></td>
        
       
       
      </tr>
  <?php } ?>
      
    </tbody>
  </table>
  <div style="text-align: center;"><a class="button_link2" href="<?php echo base_url()?>syllabus">View More</a></div>
</div>
	               
	            </div>
	            
	        </div>
	    </div>
	    <!-- /container -->
	    
	    <!-- /bg_gray -->
	    
	    <!--/call_section-->
	</main>
	<!-- /main -->
