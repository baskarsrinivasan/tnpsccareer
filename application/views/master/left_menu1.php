
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
                                                </div>

                    </div>
                    </div>
                    <!-- /box_booking -->
                  
                   
                </div>

 
