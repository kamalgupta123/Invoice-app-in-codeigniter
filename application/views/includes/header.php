<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        var baseUrl = '<?php echo base_url().'index.php/';?>';
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>INVI</title>
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('uikit-3.0.0-beta.9/css/uikit.min.css')?>">
    <link href="<?php echo base_url('css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/pe-icons.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/prettyPhoto.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/animate.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('jq/js/languages/jquery.validationEngine-en.js'); ?>" type="text/javascript" charset="utf-8"></script>
    <script src="<?php echo base_url('jq/js/jquery.validationEngine.js'); ?>" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="<?php echo base_url('jq/css/validationEngine.jquery.css'); ?>" type="text/css"/>
    <script src="<?php echo base_url('uikit-3.0.0-beta.9/js/uikit.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/html5shiv.js'); ?>"></script>
    <script src="<?php echo base_url('js/respond.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/custom.js'); ?>"></script>
    <![endif]
    <link rel="shortcut icon" href="<?php echo base_url('images/ico/favicon.ico'); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('images/ico/apple-touch-icon-144x144.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('images/ico/apple-touch-icon-114x114.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('images/ico/apple-touch-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" href="<?php echo base_url('images/ico/apple-touch-icon-57x57.png'); ?>">
    <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
    </script>
    <script type = "text/javascript">
        google.charts.load('current', {packages: ['corechart']});     
    </script>
    <script>
    $(document).ready(function(){
        $("#otp_form").validationEngine({
            promptPosition: "topRight:-90"
        });
        $("#verify_otp_form").validationEngine({
            promptPosition: "topRight:-90"
        });
    });
    </script>
    <script type="text/javascript">
    jQuery(document).ready(function($){
	'use strict';
      	 jQuery('body').css({
            'background-image': "linear-gradient(#436987,#bfad9f,#191140)",
            'background-size' : "45% 5% 25%" 
        });
        


		// $("#mapwrapper").gMap({ controls: false,
        //  	scrollwheel: false,
        //  	markers: [{
        //       	latitude:40.7566,
		// 		longitude: -73.9863,
        //   	icon: { image: "{% static 'webapp/images/marker.png' %}",
        //       	iconsize: [44,44],
        //   		iconanchor: [12,46],
        //   		infowindowanchor: [12, 0] } }],
        //   	icon: {
        //       	image: "{% static 'webapp/images/marker.png' %}",
        //      	iconsize: [26, 46],
        //       	iconanchor: [12, 46],
        //       	infowindowanchor: [12, 0] },
        //  	latitude:40.7566,
        //  	longitude: -73.9863,
        //   	zoom: 14 });
    });
    </script>
</head><!--/head-->
<body>
<div id="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top " role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                 <a class="navbar-brand website_logo" href="<?php echo site_url('invi/'); ?>"><img src="<?php echo base_url('images/invi.png'); ?>" height="50" width="150"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                <?php
                    echo $this->session->userdata('user');
                ?>
                <?php if(!$this->session->userdata('user')){ ?>
                    <li><a href="<?php echo site_url('Login/'); ?>">Login</a></li>
                    <li><a href="<?php echo site_url('invi'); ?>">Register</a></li>
                <?php } ?>
                    <!-- <li><a href="{% url 'webapp:services' %}">Services</a></li>
                    <li><a href="{% url 'webapp:portfolio' %}">Portfolio</a></li>
                    <li><a href="{% url 'webapp:blog' %}">Blog</a></li>
                    <li><a href="{% url 'webapp:contact-us' %}">Contact</a></li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{% url 'webapp:projectItem' %}">Project Single</a></li>
                            <li><a href="{% url 'webapp:blogItem' %}">Blog Single</a></li>
                            <li class="active"><a href="{% url 'webapp:noPageFound' %}">404</a></li>
                        </ul>
                    </li> -->
                    <li><span class="search-trigger"><i class="fa fa-search"></i></span></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->