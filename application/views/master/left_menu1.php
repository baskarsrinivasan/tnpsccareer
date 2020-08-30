<aside class="col-lg-3" id="sidebar_fixed">
                    <div class="filter_col">
                        <div class="inner_bt"><a href="#" class="open_filters"><i class="icon_close"></i></a></div>
                        <div class="filter_type">
                            <h4 style="text-transform: uppercase;padding:10px;margin-top: 30px"><a href="#filter_1" data-toggle="collapse" class="opened">Exams</a></h4>
                            <div class="collapse show" id="filter_1">
                                <ul>
                                    <?php foreach($exams as $row){?>
                                    <li style="border-bottom:1px solid #ccc">
                                        <label class="container_check">

                                            <a href="<?php echo base_url()?>exam/<?php echo $row->id;?>" style="color:#000"><?php echo $row->exams_name;?></a>
                                         
                                        </label>
                                    </li>
                                   <?php } ?>
                                   
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