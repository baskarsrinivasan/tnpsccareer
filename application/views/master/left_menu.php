
<div class="col-xl-4 col-lg-5">
                    <div class="box_booking">
                        <div class="head">
                            <h3 class="upper" style="padding-top:40px;"><?php echo $row->exams_name;?></h3>
                            
                           
                        </div>
                        <!-- /head -->
                        <div class="main">
                       <div class="services_list clearfix">
                                                    <ul>
                                                        <li><a title="<?php echo $row->exams_name;?> Syllabus" href="<?php echo base_url()?>exam/<?php echo $row->exam_id;?>" style="color:#000">Syllabus</a></li>
                                                        <li><a title="<?php echo $row->exams_name;?> Notifications" href="<?php echo base_url()?>notification/<?php echo $row->exam_id;?>" style="color:#000;">Notifications</a></li>
                                                       
                                                        <li><a title="<?php echo $row->exams_name;?> Current Affairs" href="<?php echo base_url()?>notification/<?php echo $row->exam_id;?>" style="color:#000;">Current Affairs</a></li>
                                                        <li><a title="<?php echo $row->exams_name;?> Study Materials" href="#" style="color:#000">Study Materials</a></li>
                                                        <li><a title="<?php echo $row->exams_name;?> Lessons" href="" style="color:#000">Lessons</a></li>
                                                    </ul>
                                                </div>

                    </div>
                    </div>
                    <!-- /box_booking -->
                  
                   
                </div>

 
