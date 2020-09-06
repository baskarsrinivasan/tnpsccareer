

<aside class="col-lg-3" id="sidebar_fixed">
                    <div class="filter_col">
                        <div class="inner_bt"><a href="#" class="open_filters"><i class="icon_close"></i></a></div>
                        <div class="filter_type">
                            <h4 style="text-transform: uppercase;padding:10px;margin-top: 30px"><a href="#filter_1" data-toggle="collapse" class="opened"><?php echo $row->exams_name;?></a></h4>
                            <div class="collapse show" id="filter_1">
                                <ul>
                                    <li>
                                        <label class="container_check">

                                            <a href="<?php echo base_url()?>exam/<?php echo $row->exam_id;?>" style="color:#000">Syllabus</a>
                                         
                                        </label>
                                    </li>
                                    <li style="padding: 8px 0 0 0;">
                                        <label class="container_check">

                                            <a href="<?php echo base_url()?>notification/<?php echo $row->exam_id;?>" style="color:#000;">Notifications</a>
                                            
                                            
                                        </label>
                                    </li>
                                    <li style="padding: 8px 0 0 0;">
                                        <label class="container_check">

                                            <a href="<?php echo base_url()?>notification/<?php echo $row->exam_id;?>" style="color:#000;">Current Affairs</a>
                                            
                                            
                                        </label>
                                    </li>
                                      <li style="padding: 8px 0 0 0;">
                                        <label class="container_check">

                                            <a href="" style="color:#000">Study Materials</a>
                                            
                                            
                                        </label>
                                    </li>
                                     <li style="padding: 8px 0 0 0;">
                                        <label class="container_check">

                                            <a href="" style="color:#000">Lessons</a>
                                            
                                            
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- /filter_type -->
                        </div>
                        <!-- /filter_type -->
                      
                        <!-- /filter_type -->
                       
                        <!-- /filter_type -->
                        
                        <!-- /filter_type -->
                       
                    </div>
                </aside>