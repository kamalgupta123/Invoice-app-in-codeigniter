    
    <div class="modal-busy" id="loader" style="display: none">
        <div class="center-busy" id="test-git">
            <img alt="Loader Unavailable" src="<?php echo base_url("assets/images/loader.gif"); ?>" />
        </div>
    </div>    
    
    <section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title" style="color:#fefeff !important;">Register Here</h2>
                                    <hr>
                                    <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
                <div id="phone">
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" id="otp_form">
                                <div class="form-group">
                                    <label for="phone_number">Enter Your Phone Number : </label>
                                    <br>
                                    <input type="text" name="phone_number" id="phone_number" class="form-control validate[required]" placeholder="Enter your phone number">
                                    <br>
                                    <button class="btn btn-primary" id="send_otp">Send OTP</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="verify_otp">
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" id="verify_otp_form">
                                <div class="form-group">
                                    <label for="otp_verify">Verify OTP</label>
                                    <input type="text" name="otp_verify" id="otp_verify" Placeholder="Enter the OTP you received on mobile" class="form-control validate[required]"><br>
                                </div>
                                <br>
                                <button type="submit" id="verfiy_otp_btn" class="btn btn-primary">Verify OTP</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="identity">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Who are you ?</h3>
                            <hr>     
                        </div>
                    </div>
                    <div class="user">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="radio" name="user" id="seller_and_purchaser">
                                <label for="seller_and_purchaser">&nbsp;&nbsp;&nbsp;Seller & Purchaser</label>
                            </div>
                            <div class="col-lg-4">
                                <input type="radio" name="user" id="sub_user">
                                <label for="sub_user">&nbsp;&nbsp;&nbsp;Sub User</label>
                            </div>
                            <div class="col-lg-4">
                                <input type="radio" name="user" id="customer">
                                <label for="customer">&nbsp;&nbsp;&nbsp;Customer</label>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <br><br>
                </div>
                <div class="gst_details">
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pager">
                                <li class="previous"><a href="#" class="previous_identity_page"><span class="glyphicon glyphicon-circle-arrow-left"></span>     Previous</a></li>
                            </ul>
                        </div>
                        <br>
                        <div class="col-lg-4"><strong><p>Are you registered in GST ?</p></strong></div>
                        <div class="col-lg-4">
                            <input type="radio" name="gst_registered" id="gst_registered_yes"><label for="gst_registered_yes">&nbsp;&nbsp;&nbsp;Yes</label>
                        </div>
                        <div class="col-lg-4">
                            <input type="radio" name="gst_registered" id="gst_registered_no"><label for="gst_registered_no">&nbsp;&nbsp;&nbsp;No</label>
                        </div>
                    </div>
                    <hr>
                    <br><br>
                </div>
                <div class="gst_number_form">
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pager">
                                <li class="previous"><a href="#" class="previous_page"><span class="glyphicon glyphicon-circle-arrow-left"></span>     Previous</a></li>
                            </ul>
                            <br>
                            <form method="post" id="Gst_form">
                                <div class="form-group">
                                    <h3>Please, Provide your GSTIN :</h3><br>
                                    <input type="text" name="gst" id="gst" Placeholder="Enter your number" class="form-control">
                                </div>
                                <br>
                                <input id="gst_btn" type="submit" class="btn btn-primary" value="Submit">
                            </form>
                            <div id="captcha_form_div">
                                <div class="gap"></div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Enter Code :</h4>
                                        <p id="captImg"><?php echo $captchaImg; ?></p>
                                        <a href="javascript:void(0);" class="refreshCaptcha" ><img src="<?php echo base_url().'assets/images/refresh.png'; ?>" height="25" width="25"/></a>
                                        <form method="post" id="captcha_form">
                                            <input type="text" name="captcha" value="" id="captcha" class="form-control"/><br>
                                            <input type="submit" class="btn btn-primary" name="submit" value="SUBMIT"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div id="gst_information">
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pager">
                                <li class="previous"><a href="#" class="previous_gst_info_page"><span class="glyphicon glyphicon-circle-arrow-left"></span>     Previous</a></li>
                            </ul>
                            <br>
                            <h4>Gst Information :</h4>
                            <form id="register_info_form">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="trade_name">Trade Name :</label>
                                            <input type="text" id="trade_name" name="trade_name" class="form-control">
                                            <label for="address">Address :</label>
                                            <input type="text" id="address" name="address" class="form-control">
                                            <label for="pan">PAN :</label>
                                            <input type="text" id="pan" name="pan" class="form-control">
                                            <label for="state_code">State Code:</label>
                                            <input type="text" id="state_code" name="state_code" class="form-control">
                                            <label for="constitution_of_buisness">Constitution of Business:</label>
                                            <input type="text" id="constitution_of_buisness"  name="constitution_of_buisness" class="form-control">
                                            <!-- <label for="registration">Registration:</label>
                                            <input type="text" id="registration" name="registration" class="form-control"> -->
                                            <label for="hsn_code">HSN CODE:</label>
                                            <input type="text" id="hsn_code" name="hsn_code" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="email_address">Email Address:</label>
                                            <input type="text" id="email_address" name="email_address" class="form-control">
                                            <label for="password">Password:</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-off"></i></span>
                                                <input id="password" type="password" name="password" class="form-control validate[required] custom[forPwdUpperCase] custom[forPwdNumber] custom[forPwdSpecial]" placeholder="Password">
                                            </div>
                                            <!-- <input type="text" id="password" name="password" class="form-control validate[required] custom[forPassword]"> -->
                                            <label for="current_location">Current Location:</label>
                                            <input type="text" id="current_location" name="current_location" class="form-control validate[required]">
                                            <label for="business_card">Business card:</label>
                                            <input type="text" id="business_card" name="business_card" class="form-control validate[required]">
                                            <label for="website_link">Website Link:</label>
                                            <input type="text" id="website_link" name="website_link" class="form-control validate[required]">
                                            <h5>Bank Account Details :</h5>
                                            <hr>
                                            <label for="account_no">Account Number:</label>
                                            <input type="text" id="account_no" name="account_no" class="form-control validate[required]">
                                            <label for="ifsc_code">IFSC code:</label>
                                            <input type="text" id="ifsc_code" name="ifsc_code" class="form-control validate[required]">
                                            <label for="bank_name">Bank Name:</label>
                                            <input type="text" id="bank_name" name="bank_name" class="form-control validate[required]">
                                            <label for="account_name">Account Name:</label>
                                            <input type="text" id="account_name" name="account_name" class="form-control validate[required]">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-primary" id="register_submit">
                            </form>
                        </div>
                    </div>
                </div>
                <div id="template_preview">
                    <div class="gap"></div>
                    <div class="row">
                        <div class="container">
                            <h4>CHOOSE TEMPLATE : </h4>
                            <div class="panel panel-default">
                                <br>
                                <br>
                                <div class="panel-body">
                                    <?php 
                                        foreach($templatePreview as $t){
                                            echo "<div class='col-lg-2' style='margin-left:30px;'><img src='".$t->template_image_path."' class='img-thumbnail img-rounded' style='border:5px solid #f8f8f8;    height: 119px;' height='250' width='150'><br><br><input type='checkbox' class='select_template' data_id=".$t->id."><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>".$t->template_name."</strong></span></div>";
                                        }
                                    ?>
                                </div>
                                <br>
                                <br>
                            </div>
                            <button class="btn btn-primary" id="submit_template">Submit Template</button>
                        </div>
                    </div>
                </div>
                <div id="add_sub_user">
                    <div class="gap"></div>
                    <div class="row"></div>
                    <div class="container">
                        <div class="col-lg-12">
                            <ul class="pager">
                                <li class="previous"><a href="#" class="previous_user_page"><span class="glyphicon glyphicon-circle-arrow-left"></span>     Previous</a></li>
                            </ul>
                            <form id="sub_user_register_form">
                                <div class="form-group">
                                    <label for="mobile_number">Enter Sub User Mobile number :</label>
                                    <input type="text" name="mobile_number" id="mobile_number" class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">Register Sub User</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>   
