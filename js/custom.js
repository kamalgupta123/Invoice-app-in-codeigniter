$(document).ready(function(){
    $('.gst_details').hide();
    $('.gst_number_form').hide();
    $('#captcha_form_div').hide();
    $('#identity').hide();
    $('#verify_otp').hide();
    $('#gst_information').hide();
    $('#template_preview').hide();
    $('#add_sub_user').hide();
    var captcha_status = '';
    var gst = '';
    var number = '';
    $(document).on('click','.previous_page',function(){
        $('.gst_details').show();
        $('.gst_number_form').hide();
    });
    $(document).on('click','.previous_gst_info_page',function(){
        $('.gst_details').show();
        $('#gst_information').hide();
    });
    // $(document).on('click','.next_page',function(){
    //     $('.gst_number_form').hide();
    //     $('#gst_information').show();
    // });
    //
    //
    //
    $(document).on('click','.previous_identity_page',function(){
        $('.gst_details').hide();
        $('#identity').show();
    });


    /////////
    $(document).on('click','.previous_user_page',function(){
        $('#add_sub_user').hide();
        $('#identity').show();
    });
    ///////
    $(document).on('click', '#send_otp',function(e){
        if($("#otp_form").validationEngine('validate')){
            $("#loader").show();
            number = $('#phone_number').val();
            $.ajax({
                type: "POST",
                url: baseUrl + 'invi/send_otp',
                data: {'number': $('#phone_number').val()}, 
                success: function(data){
                    console.log(data);
                    var phoneExists = (data == 'true');
                    if(phoneExists){
                        $("#loader").hide();
                        UIkit.notification("phone number already exists in the database", "danger");
                    }
                    else{
                        $('#phone').hide();
                        $('#verify_otp').show();
                        $("#loader").hide();
                        UIkit.notification("OTP send succesfully", "success");
                    }
                }
            });
            e.preventDefault();
        }
    });
    $(document).on('click', '#verfiy_otp_btn',function(e){
        if($("#verify_otp_form").validationEngine('validate')){
            $("#loader").show();
            $.ajax({
                type: "POST",
                url: baseUrl + 'invi/verify_otp',
                data: {'otp_verify': $('#otp_verify').val()}, 
                success: function(data){
                    console.log(data);
                    var isValiDate = (data == 'true');
                    if(isValiDate){
                        $("#loader").hide();
                        $('#verify_otp').hide();
                        $('#identity').show();
                        UIkit.notification("OTP verified succesfully", "success");
                    }
                    else{
                        $("#loader").hide();
                        UIkit.notification("Otp is not verified, entered otp is incorrect", "danger");
                    }
                }
            });
            e.preventDefault();
        }
    });
    $(document).on("click","#seller_and_purchaser",function(){
        $('#identity').hide();
        $('.gst_details').show();
    });
    //
    //
    ///////
    $(document).on("click","#sub_user",function(){
        $('#identity').hide();
        $('#add_sub_user').show();
    });
    //////
    $(document).on("click","#customer",function(){
        UIkit.notification("This Functionality is not implemented yet, please select Seller & Purchaser to continue", "danger");
    });
    $(document).on("click","#gst_registered_yes",function(){
        $('.gst_details').hide();
        $('.gst_number_form').show();
    });
    $(document).on("click","#gst_registered_no",function(){
        $('.gst_details').hide();
        $('#gst_information').show();
    });
    $(document).on('click', '#gst_btn',function(e){
        $("#loader").show();
        gst = $('#gst').val();
        $.ajax({
            type: "POST",
            url: baseUrl + 'invi/save_gst',
            data: {'gst': $('#gst').val()}, 
            success: function(data){
                console.log(data);
                var gstExists = (data == 'true');
                if(gstExists){
                    $("#loader").hide();
                    UIkit.notification("GST number already exists in the database", "danger");
                }
                else{
                    $("#loader").hide();
                    // $('.gst_number_form').hide();
                    $('#captcha_form_div').show();
                    UIkit.notification("GST number saved succesfully", "success");
                }
            }
        });
        e.preventDefault();
    });
    $(document).ready(function(){
        $('.refreshCaptcha').on('click', function(){
            $.get(baseUrl+'invi/refresh', function(data){
                $('#captImg').html(data);
            });
        });
    });
    $(document).on('submit', '#captcha_form',function(e){
        $("#loader").show();
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: baseUrl + 'invi/verify_captcha',
            async: false,
            data: {'captcha': $('#captcha').val()}, 
            success: function(data){
                var isValiDate = (data == 'true');
                if(isValiDate){
                    $.ajax({
                        type: "GET",
                        url: 'https://www.gstsoftware.com/app/api/v1/compliance/gstins?gstin='+gst,
                        success: function(xml){
                           $("#loader").hide();
                           $('.gst_number_form').hide();
                           UIkit.notification("captcha verified succesfully", "success");
                           $('#gst_information').show();
                           $('.previous_gst_info_page').hide();
                           var gstin = xml.data.gstin;
                           var legalNameOfBusiness = xml.data.legalNameOfBusiness;
                           var constitutionOfBusiness = xml.data.constitutionOfBusiness;
                           var dateOfRegistration = xml.data.dateOfRegistration;
                           var stateJurisdiction = xml.data.stateJurisdiction;
                           $('#trade_name').val(legalNameOfBusiness);
                           $('#address').val(stateJurisdiction);
                           $('#pan').val(gstin.substring(2, 12));
                           $('#state_code').val(gstin.substring(0, 2));
                           $('#constitution_of_buisness').val(constitutionOfBusiness);
                        //    $('#registration').val(dateOfRegistration);
                        //    $('#registration').val(dateOfRegistration);
                           $('#hsn_code').val(gstin);
                        }
                    });
                }
                else{
                    $("#loader").hide();
                    UIkit.notification("You have entered a wrong captcha", "danger");
                }
            }
        });
    });
    $(document).on('submit', '#register_info_form',function(e){
        $("#loader").show();
        e.preventDefault();
        var form = $('#register_info_form')[0]; 
        var formData = new FormData(form);
        formData.append('number', number);
        $.ajax({
            type: "POST",
            url: baseUrl + 'invi/register_info_form',
            data: formData, 
            contentType: false, 
            processData: false, 
            success: function(data){
                var emailExists = (data == 'true');
                if(emailExists){
                    $("#loader").hide();
                    UIkit.notification("email address or phone number already exists in the database", "danger");
                }
                else{
                    $("#loader").hide();
                    UIkit.notification("Form details saved succesfully", "success");
                    // console.log(data);
                    $('#gst_information').hide();
                    $('#template_preview').show();
                }
            }
        });
    });

    $(document).on('click','#submit_template',function(){
        $("#loader").show();
        var selectedTemplateId = $('.select_template:checked').attr('data_id');
        $.ajax({
            type: "POST",
            url: baseUrl + 'invi/save_selected_template',
            data: {'selectedTemplateId' : selectedTemplateId}, 
            success: function(data){
                $("#loader").hide();
                UIkit.notification("Selected template saved succesfully", "success");
                console.log(data);
            }
        });
    });

    /////
    ///////
    /////////
    $(document).on('submit', '#sub_user_register_form',function(e){
        $("#loader").show();
        e.preventDefault();
        var form = $('#sub_user_register_form')[0]; 
        var formData = new FormData(form);
        $.ajax({
            type: "POST",
            url: baseUrl + 'invi/sub_user_register',
            data: formData, 
            contentType: false, 
            processData: false, 
            success: function(data){
                var phoneExists = (data == 'true');
                if(phoneExists){
                    $("#loader").hide();
                    UIkit.notification("phone number already exists in the database", "danger");
                }
                else{
                    $("#loader").hide();
                    UIkit.notification("Sub User registered succesfully", "success");
                }
                console.log(data);
            }
        });
    });

});