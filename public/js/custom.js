(function($) {
    "use strict"; // Start of use strict

    // Close Admin Sidebar on Mobile
    jQuery(document).ready(function($) {
        var alterClass = function() {
            var ww = document.body.clientWidth;
            if (ww < 750) {
                $('#accordionSidebar').addClass('toggled');
            } else if (ww >= 751) {
                $('#accordionSidebar').removeClass('toggled');
            };
        };
        $(window).resize(function(){
            alterClass();
        });
        //Fire it when the page first loads:
        alterClass();
    });


})(jQuery); // End of use strict
