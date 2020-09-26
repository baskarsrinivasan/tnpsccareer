
<main>
	    <div class="hero_single version_2">
	        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
	            <div class="container">
	                <div class="row">
	                  
	                    
	                      
	                   
	                     <div class="col-xl-12 col-lg-12" style="padding-top: 80px;text-align: center;">
	                    	
	                    	<h2 style="color:#fff;" title="BUILD YOUR DREAM JOB HERE">BUILD YOUR DREAM JOB HERE</h2>
	                        
	                        <p style="padding-top: 10px;"><a href="<?php echo base_url()?>register" class="btn_1 medium"  title="Tnpsc Career Start Now">START NOW</a></p>
	                    </div>
	                </div>
	                <!-- /row -->
	            </div>
	        </div>
	    </div>
	    <div class="container margin_60_40">
		<div class="main_title center">
				<span><em></em></span>
				<h2>POPULAR EXAMS</h2>
				
			</div>
			<div class="row add_bottom_15">
				<?php foreach($exams as $row){?>
	        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
	            <div class="strip">
	                <figure style="background: #44207f">
	                    
	                    <!-- <img src="<?php echo $row->image?>" data-src="<?php echo $row->image?>" class="img-fluid lazy" alt=""> -->
	                    <a title="Tnpsc Career <?php echo $row->exams_name?>" href="<?php echo base_url()?>exam/<?php echo $row->id?>" class="strip_info">
	                        <div class="item_title">
	                            <h3><?php echo $row->exams_name?></h3>
	                            
	                        </div>
	                    </a>
	                </figure>
	                
	            </div>
	        </div>
	       
	       <?php } ?>
	    </div>
	    <!-- /row -->

		
		</div>
	   
	    <div class="container">
	    	<div class="main_title center">
				<span><em></em></span>
				<h2>EXAM PREP</h2>
				
			</div>
	    <div class="row">
	        
	        <div class="col-md-6">
	        <div class="row" style="border:1px solid #44207f">
	            <div class="col-12" style="background: #44207f">
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
    	<?php foreach($exam_currentaffairs as $currentaffairs){

    		?>
      <tr>
        <td ><a title="<?php echo $currentaffairs->exam_currentaffairs_name;?>" style="color:#44207f;font-size: 16px" href="<?php echo base_url()?>currentaffairs_details/<?php echo $currentaffairs->id;?>"><?php echo substr($currentaffairs->exam_currentaffairs_name,0,30);?>..</a><span style="margin-left: 20px"></span></td>
        <td>(Posted Date:<?php echo date("d-m-Y", strtotime($currentaffairs->createddate));?>)</td>
       
      </tr>
  <?php } ?>
       <tr>
      	<td></td>
      	<td style="padding-top: 30px"><a class="button_link" href="<?php echo base_url()?>currentaffairs">View More...</a></td>
      </tr>
    </tbody>
    <tfoot>
    	
    	
    </tfoot>
  </table>
  
</div>
	               
	            </div>
	            
	        </div>
	        </div>
	        <div class="col-md-6">
	        <div class="row" style="border:1px solid #44207f;margin-left:10px">
	            <div class="col-12" style="background:#44207f">
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
        <td ><a style="color:#44207f;font-size: 16px" href="<?php echo base_url()?>notification_details/<?php echo $notifications->id;?>"><?php echo substr($notifications->exam_notification_name,0,30);?>..</a><span style="margin-left: 20px"></span></td>
        <td>(Posted Date:<?php echo date("d-m-Y", strtotime($notifications->createddate));?>)</td>
        
       
       
      </tr>
      
  <?php } ?>
      <tr>
      	<td></td>
      	<td style="padding-top: 30px"><a class="button_link1" href="<?php echo base_url()?>notifications">View More...</a></td>
      </tr>
    </tbody>
  </table>
  <div style="text-align: center;"></div>
</div>
	               
	            </div>
	            
	        </div>
	        </div>
	        
	    </div>
	    </div>
	    <div class="bg_gray">
		<div class="container margin_60_40 how">
			<div class="main_title center">
				<span><em></em></span>
				<h2>WHY CHOOSE TNPSC CAREER?</h2>
				
			</div>
			<div class="row justify-content-center align-items-center add_bottom_45">
			    <div class="col-lg-5">
			        <div class="box_about">
			        	<strong>1</strong>
			            <h3>#1 Real-time Exam Prep Community</h3>
			            <p>Interact with other students just like you.</p>
			            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php echo base_url();?>assets/img/arrow_about.png" alt="" class="arrow_1 lazy">
			        </div>
			    </div>
			    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
			        <figure><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php echo base_url();?>assets/img/about_1.svg" alt="" class="img-fluid lazy" width="180" height="180"></figure>
			    </div>
			</div>
			<!-- /row -->
			<div class="row justify-content-center align-items-center add_bottom_45">
			    <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
			        <figure><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php echo base_url()?>assets/img/about_2.svg" alt="" class="img-fluid lazy" width="180" height="180"></figure>
			    </div>
			    <div class="col-lg-5">
			        <div class="box_about">
			        	<strong>2</strong>
			            <h3>Online Mock Tests & Free Quizzes</h3>
			            <p>Get practice set, test series, quizzes for exam preparation.</p>
			            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php echo base_url()?>assets/img/arrow_about.png" alt="" class="arrow_2 lazy">
			        </div>
			    </div>
			</div>
			<!-- /row -->
			<div class="row justify-content-center align-items-center add_bottom_25">
			    <div class="col-lg-5">
			        <div class="box_about">
			        	<strong>3</strong>
			            <h3>Latest Exam Notifications</h3>
			            <p>Stay updated with the upcoming exam announcements.</p>
			        </div>
			    </div>
			    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
			       <figure><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php echo base_url()?>assets/img/about_3.svg" alt="" class="img-fluid lazy" width="180" height="180"></figure>
			    </div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		</div>
	   
	</main>
	<!-- /main -->
