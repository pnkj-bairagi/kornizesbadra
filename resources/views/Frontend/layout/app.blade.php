<!DOCTYPE html>
<html lang="en" class="no-js">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <title>Kornizesbadra.com</title>
        <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        
        <link rel="shortcut icon" href="{{asset('assets/frontend')}}/images/favicons/fie/favicon.ico" />
        
        @stack('page-styles')
        <script>
            (function (H) {
                H.className = H.className.replace(/\bno-js\b/, "js");
            })(document.documentElement);
        </script>
        
        <style>
            @font-face {
                font-family: 'Montserrat';
                font-style: normal; 
                font-weight: 700; 
                font-display: swap; 
                src: local('Montserrat Bold'),
                url('{{asset('assets/frontend')}}/fonts/montserrat-v15-latin/montserrat-v15-latin-700.woff2') format('woff2');
                unicode-range: U+0020-007F;
            }
        </style>
        
        <script type="text/javascript">
            var ua = window.navigator.userAgent;
            if (ua.indexOf("MSIE ") > 0 || ua.indexOf("#") > 0 || ua.indexOf("#") > 0) {
                var m = window.location.toString().match(/upgrade-browser/g);
                if (!m || m == null) {
                    window.location = "upgrade-browser";
                }
            }
        </script>
        
        <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/home.css" media="screen,print" />
        
        <script type="text/javascript">
            dataLayer = [];
        </script>
        
        <!-- Google Tag Manager -->
        <noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-NJR434" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript>
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "http://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-NJR434");
        </script>
        <!-- End Google Tag Manager -->
        <script src="https://apis.google.com/js/platform.js?onload=renderBadge" async defer></script>
    </head>
    <body class="home">
        <noscript>
            <div id="js-error" class="page-slice">
                <div class="content-slice">
                    <div class="content-box">
                        <h2>JavaScript Required</h2>
                        <p>
                            We're sorry, but our website needs JavaScript enabled to help you customize and purchase the perfect frame. If you cannot enable JavaScript, we recommend using a different browser or device. If you need
                            assistance, please contact us at (123) 456-7890.
                        </p>
                        <a role="button" class="button btn-sky" href="{{url('/')}}">Try Loading Again</a>
                    </div>
                </div>
            </div>
        </noscript>
        <script>
            if (sessionStorage.getItem("fie_hidebar") !== null) {
                var announcementBar = document.getElementById("announcement-bar");
                announcementBar.classList.add("hide");
            }
        </script>
        
        @include('Frontend.layout.includes.header')
        
        @yield('main-content')
        
        @include('Frontend.layout.includes.footer')
        
        <script>
            var SITE_URL = "{{url('/')}}";
            var REVISION_COUNTER = "478";
            var PAGE_NAME = "home";
            var SUPPORT_PHONE_NUMBER = "(123) 456-7890";
        </script>
        <script defer src="{{asset('assets/frontend')}}/fonts/fontawesome-subset/js/all.min.js"></script>
        <script type="text/javascript" src="{{asset('assets/frontend')}}/js/site-ui.js"></script>
        <script type="text/javascript">
            var profile_data = {
                "1": { profile_face: "0.37500", profile_saw_offset: "0.18750" },
                "2": { profile_face: "0.87500", profile_saw_offset: "1.31250" },
                "3": { profile_face: "0.37500", profile_saw_offset: "0.18750" },
                "4": { profile_face: "1.00000", profile_saw_offset: "1.31250" },
                "5": { profile_face: "1.50000", profile_saw_offset: "2.31250" },
                "6": { profile_face: "0.62500", profile_saw_offset: "0.00000" },
                "7": { profile_face: "1.25000", profile_saw_offset: "2.06250" },
                "8": { profile_face: "0.00000", profile_saw_offset: "0.00000" },
                "9": { profile_face: "0.00000", profile_saw_offset: "0.00000" },
                "10": { profile_face: "1.37500", profile_saw_offset: "2.25000" },
                "11": { profile_face: "1.22710", profile_saw_offset: "2.09375" },
                "12": { profile_face: "1.01038", profile_saw_offset: "1.63150" },
            };
        </script>
        <script type="text/javascript" src="{{asset('assets/frontend')}}/js/canvas-frame.js"></script>
        <script type="text/javascript" src="{{asset('assets/frontend')}}/js/upload.js"></script>
        <script type="text/javascript" src="{{asset('assets/frontend')}}/js/home.js"></script>
        
        @stack('page-scripts')
        
    </body>
</html>