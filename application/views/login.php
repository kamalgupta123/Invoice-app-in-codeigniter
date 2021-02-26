<section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title" style="color:#fefeff !important;">Login</h2>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
</section>

<div class="white">
    <div class="container login-form">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <span class="text text-danger"><?php echo isset($error) ? $error : ''; ?></span>
                        <form method="post" action="<?php echo site_url('Login/process'); ?>">
                            <div class="input-group login-userinput">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
                                <input id="txtUser" type="text" class="form-control" name="phone_number" placeholder="Phone Number">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-off"></span></span>
                                <input  id="txtPassword" type="password" class="form-control" name="password" placeholder="Password">
                                <span id="showPassword" class="input-group-btn">
                            </span>  
                            </div>
                            <button class="btn btn-primary btn-block login-button" type="submit"><i class="fa fa-sign-in"></i> Login</button>
                            <div class="checkbox login-options">
                            <center>Forgot your password ?<a href="<?php echo base_url("Login/forget");?>" class="text-primary"> Click here</a></p></center>
                            </div>		
                        </form>			
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</div>