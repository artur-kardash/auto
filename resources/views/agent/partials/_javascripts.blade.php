<script>
    window.Laravel = { csrfToken: '{{ csrf_token() }}' };
</script>﻿

<script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('js/waves.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('js/custom.min.js')}}"></script>
<!--Style Switcher -->
<script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script>      
      
    (function ($) {
        "use strict";
        var mainApp = {
            initFunction: function () {
                /*MENU
                 ------------------------------------*/
                $('#main-menu').metisMenu();

                $(window).bind("load resize", function () {
                    if ($(this).width() < 768) {
                        $('div.sidebar-collapse').addClass('collapse')
                    } else {
                        $('div.sidebar-collapse').removeClass('collapse')
                    }
                });
            },
            initialization: function () {
                mainApp.initFunction();
            }
        }
        // Initializing ///
        $(document).ready(function () {
            mainApp.initFunction();
        });
    }(jQuery));
    //LISTEN FOR NEW MESSAGE
    var timeout = 1;
</script>

@yield('javascript')