
<div class="col-xl-4 col-lg-5">
                    <div class="box_booking">
                        <div class="head">
                            <h3 class="upper" style="padding-top:40px;">Exams</h3>
                            
                           
                        </div>
                        <!-- /head -->
                        <div class="main">
                       <div class="services_list clearfix">
                                                    <ul>
                                                        <?php foreach($exams as $row){?>
                                                        <li><a title="<?php echo $row->exams_name;?> Syllabus" href="<?php echo base_url()?>exam/<?php echo $row->id;?>" style="color:#000"><?php echo $row->exams_name;?></a></li>
                                                        <?php } ?>
                                                       
                                                    </ul>
                                                    <iframe style="width:100%;height:240px;" marginwidth="400px" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ac&ref=tf_til&ad_type=product_link&tracking_id=bafa151515-21&marketplace=amazon&region=IN&placement=9352832167&asins=9352832167&linkId=0ea6a5d9c97607d306390ad059485b01&show_border=true&link_opens_in_new_window=true&price_color=333333&title_color=0066c0&bg_color=ffffff">
    </iframe>
                                                </div>

                    </div>
                    </div>
                    <!-- /box_booking -->
                  
                   
                </div>

 
