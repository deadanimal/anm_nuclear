<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>RISDA | e-Latihan</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../assets/js/config.js"></script>
    <script src="../../../vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="../../../vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="../../../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>


<body>
    @include('sweet::alert')
    <style>
        .btn-primary,
        .navbar-vertical .btn-purchase,
        .tox .tox-menu__footer .tox-button:last-child,
        .tox .tox-dialog__footer .tox-button:last-child {
            color: #fff;
            background-color: #2CABE1;
            border-color: #2CABE1;
            -webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
            box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
        }

        .btn-primary:hover,
        .navbar-vertical .btn-purchase:hover,
        .tox .tox-menu__footer .tox-button:hover:last-child,
        .tox .tox-dialog__footer .tox-button:hover:last-child {
            color: #fff;
            background-color: #144A73;
            border-color: #144A73;
        }

        .btn-outline-primary {
            color: #2CABE1;
            border-color: #2CABE1;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #144A73;
            border-color: #144A73;
        }

    </style>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>
            <div class="row min-vh-100 bg-100">

                @yield('log')

                <div class="col-6 d-none d-lg-block position-relative">
                    <div class="bg-holder"
                        style="background-image:url(img/Agensi-Nuklear-Malaysia.jpeg);background-position: 50% 20%;">
                    </div>
                    <!--/.bg-holder-->

                </div>
            </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../assets/js/theme.js"></script>

</body>

</html>
