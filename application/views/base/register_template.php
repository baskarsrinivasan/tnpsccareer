
<section class="breadcrumb-osahan pt-3 pb-2 position-relative text-center" style="background: linear-gradient(to bottom, #df7625 0%,#c13911 100%);">
    <h1 class="text-white"><?php echo $this->lang->line('Register'); ?></h1>

</section>
<section class="section">
    

    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-register-image"></div>
            <div class="col-md-8 col-lg-6 bg-white">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto pl-5 pr-5">
                                <h3 class="login-heading mb-4"><?php echo $this->lang->line('Create an account'); ?>!</h3>
                                    <?php
                                        if ($this->session->flashdata('alert_success')) {
                                            ?>
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <strong>Success!</strong> <?php echo $this->session->flashdata('alert_success'); ?>
                                            </div>
                                            <?php
                                        }

                                        if ($this->session->flashdata('alert_danger')) {
                                            ?>
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <strong>Error!</strong> <?php echo $this->session->flashdata('alert_danger'); ?>
                                            </div>
                                            <?php
                                        }

                                        if ($this->session->flashdata('alert_warning')) {
                                            ?>
                                            <div class="alert alert-warning alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                <strong>Success!</strong> <?php echo $this->session->flashdata('alert_warning'); ?>
                                            </div>
                                            <?php
                                        }
                                        if (validation_errors()) {
                                            ?>

                                            <?php echo validation_errors(); ?>
                                            <?php
                                        }
                                    ?>
                                    <form action="<?php echo base_url(); ?>auth/register" method="post" enctype="multipart/form-data">
                                        <div class="form-label-group">
                                                <input class="form-control" type="text" id="first_name" name="first_name"
                                                placeholder="<?php echo $this->lang->line('First Name'); ?>">
                                                <label for="first_name"><?php echo $this->lang->line('First Name'); ?></label>
                                        </div>
                                        <div class="form-label-group">
                                            <input class="form-control" type="text" id="last_name" name="last_name"
                                                placeholder="<?php echo $this->lang->line('Last Name'); ?>">

                                                <label for="last_name"><?php echo $this->lang->line('Last Name'); ?></label>
                                        </div>
                                        <div class="form-label-group">
                                            <input class="form-control" type="email" id="email" name="email"
                                                placeholder="<?php echo $this->lang->line('Email Address'); ?>">

                                                <label for="email"><?php echo $this->lang->line('Email Address'); ?></label>
                                        </div>
                                        <div class="form-label-group">
                                            <input class="form-control" id="mobile" type="text" name="mobile"
                                                placeholder="Mobile">

                                                <label for="mobile">Mobile</label>
                                        </div>
                                        
                                        <div class="form-label-group">
                                            <input class="form-control" type="password" id="password" name="password"
                                                placeholder="<?php echo $this->lang->line('Password'); ?>">

                                                <label for="password"><?php echo $this->lang->line('Password'); ?></label>
                                        </div>

                                        <button type="submit" class="btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-3"><?php echo $this->lang->line('Register Account'); ?></button>

                                        <div class="text-center pt-3"><?php echo $this->lang->line('Already have an account'); ?>? 
                                            <a class="font-weight-bold" href="<?php echo site_url('login'); ?>"><?php echo $this->lang->line('Log In'); ?></a>
                                        </div>       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- End Page Title Area -->


<?php
include 'footer.php';
?>