
<main>
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
	    
	   <div class="bg_gray">
			<div class="container margin_60_40">
				<div class="main_title center">
					<span><em></em></span>
					<h2 title="Tnpsc Career Popular Exams">Popular Exams</h2>
					
				</div>
				<!-- /main_title -->
				<div class="owl-carousel owl-theme categories_carousel">
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
			<!-- /container -->
		</div>
		<!-- /bg_gray -->
	    <div class="container margin_60_40">
	        <div class="main_title center">
	            <span><em></em></span>
	            <h2>Popular Exams</h2>
	            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
	        </div>
	        <div class="row add_bottom_15">
	            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
	                <div class="strip">
	                    <figure>
	                        <a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
	                        <img src="<?php echo base_url()?>/assets/img/lazy-placeholder.png" data-src="<?php echo base_url()?>/assets/img/professionals_photos/home_1.jpg" class="img-fluid lazy" alt="">
	                        <a href="detail-page.html" class="strip_info">
	                            <div class="item_title">
	                                <h3>Dr. Maria Cornfield</h3>
	                                <small>Pediatrician, Psychologist ...</small>
	                            </div>
	                        </a>
	                    </figure>
	                    <ul>
	                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Appointment"><i class="icon-users"></i></a></li>
	                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Chat"><i class="icon-chat"></i></a></li>
	                        <li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Video Call"><i class="icon-videocam"></i></a></li>
	                        <li>
	                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            
	            
	        </div>
	        <!-- /row -->
	        <p class="text-center add_bottom_30"><a href="grid-listing-1.html" class="btn_1 medium">Start Searching</a></p>
	        <div class="row">
	            <div class="col-12">
	                <div class="main_title version_2">
	                    <span><em></em></span>
	                    <h2>Weekly Rate Offer</h2>
	                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
	                    <a href="#0">View All</a>
	                </div>
	            </div>
	            <div class="col-md-6">
	                <div class="list_home">
	                    <ul>
	                        <li>
	                            <a href="detail-page.html">
	                                <figure>
	                                    <img src="<?php echo base_url()?>/assets/img/professional_list_placeholder.png" data-src="<?php echo base_url()?>/assets/img/professional_list_1.jpg" alt="" class="lazy">
	                                </figure>
	                                <div class="score"><strong>9.5</strong></div>
	                                <em>Lawyer</em>
	                                <h3>Laura Marting</h3>
	                                <small>8 Patriot Square E2 9NF</small>
	                                <ul>
	                                    <li><span class="ribbon off">-30%</span></li>
	                                    <li>Average price $35</li>
	                                </ul>
	                            </a>
	                        </li>
	                        <li>
	                            <a href="detail-page.html">
	                                <figure>
	                                    <img src="<?php echo base_url()?>/assets/img/professional_list_placeholder.png" data-src="<?php echo base_url()?>/assets/img/professional_list_2.jpg" alt="" class="lazy">
	                                </figure>
	                                <div class="score"><strong>8.0</strong></div>
	                                <em>Teacher</em>
	                                <h3>Anna Smith</h3>
	                                <small>27 Old Gloucester St, 4563</small>
	                                <ul>
	                                    <li><span class="ribbon off">-40%</span></li>
	                                    <li>Average price $30</li>
	                                </ul>
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	            <div class="col-md-6">
	                <div class="list_home">
	                    <ul>
	                        <li>
	                            <a href="detail-page.html">
	                                <figure>
	                                    <img src="<?php echo base_url()?>/assets/img/professional_list_placeholder.png" data-src="<?php echo base_url()?>/assets/img/professional_list_3.jpg" alt="" class="lazy">
	                                </figure>
	                                <div class="score"><strong>9.5</strong></div>
	                                <em>Pediatrician</em>
	                                <h3>Dr. Stefany Lens</h3>
	                                <small>27 Old Gloucester St, 4563</small>
	                                <ul>
	                                    <li><span class="ribbon off">-30%</span></li>
	                                    <li>Average price $20</li>
	                                </ul>
	                            </a>
	                        </li>
	                        <li>
	                            <a href="detail-page.html">
	                                <figure>
	                                    <img src="<?php echo base_url()?>/assets/img/professional_list_placeholder.png" data-src="<?php echo base_url()?>/assets/img/professional_list_4.jpg" alt="" class="lazy">
	                                </figure>
	                                <div class="score"><strong>8.0</strong></div>
	                                <em>Yoga Trainer</em>
	                                <h3>Lucy Clarks</h3>
	                                <small>22 Hertsmere Rd E14 4ED</small>
	                                <ul>
	                                    <li><span class="ribbon off">-50%</span></li>
	                                    <li>Average price $35</li>
	                                </ul>
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- /container -->
	    <div class="bg_gray">
	        <div class="container margin_60_40">
	            <div class="main_title center add_bottom_10">
	                <span><em></em></span>
	                <h2>How does it works?</h2>
	                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
	            </div>
	            <div class="row justify-content-md-center how_2">
	                <div class="col-lg-5 text-center">
	                    <figure>
	                        <img src="<?php echo base_url()?>/assets/data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php echo base_url()?>/assets/img/web_wireframe.svg" alt="" class="img-fluid lazy" width="360" height="380">
	                    </figure>
	                </div>
	                <div class="col-lg-5">
	                    <ul>
	                        <li>
	                            <h3><span>#01.</span> Search for a Professional</h3>
	                            <p>Search over 12.000 verifyed professionals that match your criteria.</p>
	                        </li>
	                        <li>
	                            <h3><span>#02.</span> View Professional Profile</h3>
	                            <p>View professional introduction and read reviews from other customers.</p>
	                        </li>
	                        <li>
	                            <h3><span>#03.</span> Enjoy the Consultation</h3>
	                            <p>Connect with your professional booking an appointment, via chat or video call!</p>
	                        </li>
	                    </ul>
	                    <p class="add_top_30"><a href="grid-listing-1.html" class="btn_1">Start Searching</a></p>
	                </div>
	                <!-- /row -->
	            </div>
	        </div>
	        <!-- /container -->
	    </div>
	    <!-- /bg_gray -->
	    <div class="call_section version_2 lazy" data-bg="url(img/bg_call_section.jpg)">
	        <div class="container clearfix">
	            <div class="col-lg-5 col-md-6 float-right wow">
	                <div class="box_1">
	                    <div class="ribbon_promo"><span>Free</span></div>
	                    <h3>Are you a Professional?</h3>
	                    <p>Join Us to increase your online visibility. You'll have access to even more customers who are looking to professional service or consultation.</p>
	                    <a href="submit-professional.html" class="btn_1">Read more</a>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!--/call_section-->
	</main>
	<!-- /main -->
