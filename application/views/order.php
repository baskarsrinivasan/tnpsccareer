
<div class="container" style="padding-top:150px; padding-bottom: 50px;">
    <div class="row justify-content-md-center">
        <div class="col-6">
            <div class="card rounded">
                <div style="background-color: #000000;" class="card-header rounded-top">
                    <h3 class="text-center text-white">Pay for this course</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- <img src="<?php echo base_url('Assets/img/course').'/'.$course[0]->image;?>" class="rounded border" alt="" width="100" height="100" class="img-thumbnail" style="border-bottom: solid 1px #dee2e6;"> -->
                        </div>
                        <div class="col-md-8">
                            <!-- <h2><?php echo $course[0]->course_name;?></h2> -->
                        </div>
                    </div>
                    <form action="<?=base_url();?>pgRedirects" method="post">
                        <!-- <input type="hidden" id="CUST_ID" name="CUST_ID" value="CUST001"> -->
                        <input type="hidden" id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" value="Retail">
                        <input type="hidden"  id="CHANNEL_ID" name="CHANNEL_ID" value="WEB">
                        <input type="hidden" id="COURSE_ID" name="COURSE_ID" value="1">
                        <input type="hidden"  id="CUST_ID" name="CUST_ID" value="1">
                        <div class="form-group">

                           <label>Order ID:</label>
                           <input type="text" class="form-control" id="ORDER_ID" name="ORDER_ID" size="20" maxlength="20" autocomplete="off" 

                           tabindex="1" value="<?php echo  "ORDER" . rand(10000,99999999)?>">
                           
                           <div class="form-group">
                               <label>Amount to Pay:</label> ₹ 
                               <input type="text" class="form-control" id="TXN_AMOUNT" name="TXN_AMOUNT" autocomplete="off" tabindex="5" 

                               value="1">
                           </div>
                           <div class="form-group">
                            <input type="submit" name="submit" value="CheckOut" class="btn btn-success btn-lg" style="background-

                            color:#0000FF; margin-left: 37%;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>