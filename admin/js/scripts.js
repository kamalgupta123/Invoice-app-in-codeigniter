/*!
    * Start Bootstrap - SB Admin v6.0.2 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    (function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });

    $(document).on('click','.activate',function(){
        var id = $(this).attr('data_id');
        $.ajax({
            type: "POST",
            url: baseUrl + 'index.php/Admin/activate_user',
            data: {'id':id}, 
            success: function(data){
                console.log(data);
                window.location.reload();
            }
        });
    });

    $(document).on('click','.deactivate',function(){
        var id = $(this).attr('data_id');
        $.ajax({
            type: "POST",
            url: baseUrl + 'index.php/Admin/deactivate_user',
            data: {'id':id}, 
            success: function(data){
                console.log(data);
                window.location.reload();
            }
        });
    });

})(jQuery);
