<?php

$servername = "ls-69e6.eu-west-2.rds.amazonaws.com";
$username = "dbmasteruser";
$password = "EL[Rx";
$database = "wdg";



$con = mysqli_connect($servername, $username, $password, $database);

$result1 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 1");
$data1 = $result1->fetch_all(MYSQLI_ASSOC);

$result11 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 1");
$data11 = $result11->fetch_all(MYSQLI_ASSOC);

$result2 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 2");
$data2 = $result2->fetch_all(MYSQLI_ASSOC);

$result12 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 2");
$data12 = $result12->fetch_all(MYSQLI_ASSOC);


$result3 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 3");
$data3 = $result3->fetch_all(MYSQLI_ASSOC);

$result13 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 3");
$data13 = $result13->fetch_all(MYSQLI_ASSOC);

$result4 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 4");
$data4 = $result4->fetch_all(MYSQLI_ASSOC);

$result14 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 4");
$data14 = $result14->fetch_all(MYSQLI_ASSOC);

$result5 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 5");
$data5 = $result5->fetch_all(MYSQLI_ASSOC);

$result15 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 5");
$data15 = $result15->fetch_all(MYSQLI_ASSOC);

$result6 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 6");
$data6 = $result6->fetch_all(MYSQLI_ASSOC);

$result16 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 6");
$data16 = $result16->fetch_all(MYSQLI_ASSOC);

$result7 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 7");
$data7 = $result7->fetch_all(MYSQLI_ASSOC);

$result17 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 7");
$data17 = $result17->fetch_all(MYSQLI_ASSOC);

$result8 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 8");
$data8 = $result8->fetch_all(MYSQLI_ASSOC);

$result18 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 8");
$data18 = $result18->fetch_all(MYSQLI_ASSOC);

$result9 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 9");
$data9 = $result9->fetch_all(MYSQLI_ASSOC);

$result19 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 9");
$data19 = $result19->fetch_all(MYSQLI_ASSOC);

$result010 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 10");
$data010 = $result010->fetch_all(MYSQLI_ASSOC);

$result0110 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 10");
$data0110 = $result0110->fetch_all(MYSQLI_ASSOC);

$result011 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 11");
$data011 = $result011->fetch_all(MYSQLI_ASSOC);

$result0111 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 11");
$data0111 = $result0111->fetch_all(MYSQLI_ASSOC);

$result012 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 12");
$data012 = $result012->fetch_all(MYSQLI_ASSOC);

$result0112 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 12");
$data0112 = $result0112->fetch_all(MYSQLI_ASSOC);

$result013 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 13");
$data013 = $result013->fetch_all(MYSQLI_ASSOC);

$result0113 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 13");
$data0113 = $result0113->fetch_all(MYSQLI_ASSOC);

$result014 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 14");
$data014 = $result014->fetch_all(MYSQLI_ASSOC);

$result0114 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 14");
$data0114 = $result0114->fetch_all(MYSQLI_ASSOC);

$result015 = mysqli_query($con,"SELECT count FROM likes WHERE ID = 15");
$data015 = $result015->fetch_all(MYSQLI_ASSOC);

$result0115 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 15");
$data0115 = $result0115->fetch_all(MYSQLI_ASSOC);




?>
<!doctype html>
<html lang="en-US" dir="ltr" data-navigation-type="combo" data-navbar-horizontal-shape="slim">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Home | Computer Science X</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" href="/assets/img/x2-teal.ico" sizes="any" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="/vendors/simplebar/simplebar.min.js"></script>
    <script src="/assets/js/config.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="/assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="/assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="/assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="/assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>var phoenixIsRTL = window.config.config.phoenixIsRTL; if (phoenixIsRTL) { var linkDefault = document.getElementById("style-default"), userLinkDefault = document.getElementById("user-style-default"); linkDefault.setAttribute("disabled", !0), userLinkDefault.setAttribute("disabled", !0), document.querySelector("html").setAttribute("dir", "rtl") } else { var linkRTL = document.getElementById("style-rtl"), userLinkRTL = document.getElementById("user-style-rtl"); linkRTL.setAttribute("disabled", !0), userLinkRTL.setAttribute("disabled", !0) }</script>
    <link href="/vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="/vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="/vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <style>
        li::marker {
            color: #5d8aa8;
            font-size: 16px;
            font-weight: 700
        }

        p {
            font-size: 20px
        }

        @media only screen and (max-width:600px) {
            p {
                font-size: 18px
            }
        }

        a {
            color: teal
        }

        a:hover {
            color: teal
        }

        mark {
            background-color: #31374a;
            color: #fff
        }

        .k2-author {
            border: 2px rgba($gray-600);
            text-align: center;
            border-radius: 10px
        }

        .btn-primary,
        .btn-primary:active,
        .btn-primary:hover,
        .btn-primary:visited {
            background-color: teal !important
        }

        .pagination .active a {
            background-color: teal;
            color: #f5f5f5
        }

        .pagination a:hover {
            background-color: teal;
            color: #f5f5f5
        }

        .pagination a:visited {
            background-color: teal
        }

        .tooltip-inner {
            font-size: 16px
        }
    </style>
    <script defer="defer" src="/static/js/main.183c74cc.js"></script>
    <link href="/static/css/main.1aa64033.css" rel="stylesheet">
</head>

<body>
    <main class="main" id="top">
        <nav class="navbar navbar-vertical navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                        <li class="nav-item">
                            <div class="nav-item-wrapper"><a class="nav-link label-1 active" href="/index.php"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                                            </svg></span><span class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Home</span></span></div>
                                </a></div>
                            <hr class="navbar-vertical-line" />
                            <p class="navbar-vertical-label">WEB DEVELOPMENT</p>
                            <hr class="navbar-vertical-line" />
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#bootstrap-5" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="bootstrap-5">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon-wrapper"><span
                                                class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                            class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-bootstrap"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377H6.375z" />
                                                <path
                                                    d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H4z" />
                                            </svg></span><span class="nav-link-text">Bootstrap 5 Theme's</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="bootstrap-5">
                                        <li class="collapsed-nav-item-title d-none">Bootstrap 5 Theme's</li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                href="#bootstrap-5-1" data-bs-toggle="collapse" aria-expanded="false"
                                                aria-controls="bootstrap-5-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon-wrapper"><span
                                                            class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                    </div><span class="nav-link-text">Dashly Template Design</span>
                                                </div>
                                            </a>
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#bootstrap-5"
                                                    id="bootstrap-5-1">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="/bootstrap-5/bootstrap-5-1.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">1. Build the code</span></div>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="/bootstrap-5/bootstrap-5-2.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">2. Node.JS Partials</span>
                                                            </div>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="/bootstrap-5/bootstrap-5-3.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">3. Edit the HTML/CSS</span>
                                                            </div>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator"
                                                href="#bootstrap-5-2" data-bs-toggle="collapse" aria-expanded="false"
                                                aria-controls="bootstrap-5-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon-wrapper"><span
                                                            class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                    </div><span class="nav-link-text">Pheonix Template Design</span>
                                                </div>
                                            </a>
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#bootstrap-5"
                                                    id="bootstrap-5-2">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="/bootstrap-5/bootstrap-5-5.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">1. Edit CSS & JS
                                                                    Variables</span></div>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="/bootstrap-5/bootstrap-5-6.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">2. Build The Code</span></div>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="/bootstrap-5/bootstrap-5-7.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">3. Edit HTML/CSS</span></div>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="/bootstrap-5/bootstrap-5-8.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">4. Send Files to Server</span>
                                                            </div>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#php"
                                    role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="php">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon-wrapper"><span
                                                class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                            class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-code" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.854 4.854a.5.5 0 1 0-.708-.708l-3.5 3.5a.5.5 0 0 0 0 .708l3.5 3.5a.5.5 0 0 0 .708-.708L2.707 8zm4.292 0a.5.5 0 0 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708-.708L13.293 8z" />
                                            </svg></span><span class="nav-link-text">PHP</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="php">
                                        <li class="collapsed-nav-item-title d-none">PHP</li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#php-1"
                                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="php-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon-wrapper"><span
                                                            class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                    </div><span class="nav-link-text">PHP & MySQL</span>
                                                </div>
                                            </a>
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#php" id="php-1">
                                                    <li class="nav-item"><a class="nav-link" href="/php/php-1.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">1. HTML Form for User
                                                                    Input</span></div>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link" href="/php/php-2.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">2. '*.php' File
                                                                    Contents</span></div>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link" href="/php/php-3.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">3. AWS MySQL Database</span>
                                                            </div>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link" href="/php/php-4.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">4. Add to Database with
                                                                    PHP</span></div>
                                                        </a></li>
                                                    <li class="nav-item"><a class="nav-link" href="/php/php-5.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">5. Display MySQL Data</span>
                                                            </div>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="navbar-vertical-line" />
                            <p class="navbar-vertical-label">System Administration</p>
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#aws"
                                    role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="aws">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon-wrapper"><span
                                                class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                            class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                                                <path
                                                    d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                                            </svg></span><span class="nav-link-text">Amazon Web Services</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="aws">
                                        <li class="collapsed-nav-item-title d-none">Amazon Web Services</li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#aws-1"
                                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="aws-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon-wrapper"><span
                                                            class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                    </div><span class="nav-link-text">Web Server</span>
                                                </div>
                                            </a>
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#aws" id="aws-1">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="/aws/lamp-server.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">LAMP Tutorial</span></div>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#email"
                                    role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon-wrapper"><span
                                                class="fas fa-caret-right dropdown-indicator-icon"></span></div><span
                                            class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-envelope-at"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                                <path
                                                    d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                            </svg></span><span class="nav-link-text">Email</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="email">
                                        <li class="collapsed-nav-item-title d-none">Email</li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email-1"
                                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="email-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon-wrapper"><span
                                                            class="fas fa-caret-right dropdown-indicator-icon"></span>
                                                    </div><span class="nav-link-text">Configuration</span>
                                                </div>
                                            </a>
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent" data-bs-parent="#email" id="email-1">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="/sys-admin/custom-email.php">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Custom domain email</span>
                                                            </div>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="navbar-vertical-footer"><button
                                    class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span
                                        class="uil uil-left-arrow-to-left fs-8"></span><span
                                        class="uil uil-arrow-from-right fs-8"></span><span
                                        class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-top fixed-top navbar-slim justify-content-between navbar-expand-lg"
            id="navbarComboSlim" data-navbar-top="combo" data-move-target="#navbarVerticalNav">
            <div class="navbar-logo"><button
                    class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                    aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span
                        class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a
                    class="navbar-brand navbar-brand" href="/index.php">WebDevGuides.com</a></div>
            <ul class="navbar-nav navbar-nav-icons flex-row">
                <li class="nav-item">
                    <div class="d-lg-none">
                        <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                                class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                type="checkbox" data-theme-control="phoenixTheme" value="dark" /> <label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                for="themeControlToggle"><span class="d-none d-sm-flex flex-center"
                                    style="height:16px;width:16px"><span class="me-1 icon"
                                        data-feather="moon"></span></span><span class="fs-9 fw-bold">Dark</span></label>
                            <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                for="themeControlToggle"><span class="d-none d-sm-flex flex-center"
                                    style="height:16px;width:16px"><span class="me-1 icon"
                                        data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label>
                        </div>
                    </div>
                    <div class="d-none d-lg-block">
                        <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim"><input
                                class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                type="checkbox" data-theme-control="phoenixTheme" value="dark" /> <label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Switch theme"><span class="d-none d-sm-flex flex-center"
                                    style="height:16px;width:16px"><span class="me-1 icon"
                                        data-feather="moon"></span></span><span class="fs-9 fw-bold">Dark</span></label>
                            <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Switch theme"><span class="d-none d-sm-flex flex-center"
                                    style="height:16px;width:16px"><span class="me-1 icon"
                                        data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="content">

    
            <div class="container p-2 p-sm-2 p-lg-3">

                <div class="row">
                    <h4>Featured Posts</h4>
                    <div class="col-md-4 p-0 p-sm-0 p-lg-2">
                        <article class="card mb-4">
                            <header class="card-header p-2 p-sm-2 p-lg-3">
                                <div class="card-meta"><span class="text-primary">03 Sep 2024</span> in <a
                                        href="/tags/nodejs.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">Node.JS</span></a><a
                                        href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">AWS</span></a></div><a
                                    href="/guides/website-technical.php">


                                    <h4 class="card-title" style="color:teal">How to Build a Website Using Code: A
                                        Technical Guide<?php foreach($data1 as $row): ?>
                                                            <?= htmlspecialchars($row['views']) ?>
                                                        <?php endforeach ?></h4>
                                </a>
                            </header><img class="card-img-top" src="/assets/img/sys-admin/1/sys1.png" alt="...">
                            <div class="card-body p-2 p-sm-2 p-lg-3">


                            <h4>
<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data0114 as $row): ?>
      <?= htmlspecialchars($row['views']) ?>
    <?php endforeach ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></span>


<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data014 as $row): ?>
      <?= htmlspecialchars($row['count']) ?>
    <?php endforeach ?></span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg></span>
</h4>



                                <p class="card-text">In this guide, i'll walk you through the process of creating a
                                    website from scratch and deploying it to an AWS web server.</p>
                                <div class="d-grid gap-2"><a href="/guides/website-technical.php"><button
                                            style="color:teal" class="w-100 btn btn-phoenix-secondary me-1 mb-1"
                                            type="button">Read More</button></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 p-0 p-sm-0 p-lg-2">
                        <article class="card mb-4">
                            <header class="card-header p-2 p-sm-2 p-lg-3">
                                <div class="card-meta"><span class="text-primary">05 Jul 2024</span> in <a
                                        href="/tags/php.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">PHP</span></a><a
                                        href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">AWS</span></a></div><a
                                    href="/php/php-5.php">
                                    <h4 class="card-title" style="color:teal">Creating a Dynamic Like Button with PHP
                                        and MySQL</h4>
                                </a>
                            </header><img class="card-img-top" src="/assets/img/home/home-1.png" alt="...">
                            <div class="card-body p-2 p-sm-2 p-lg-3">

<h4>
<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data11 as $row): ?>
      <?= htmlspecialchars($row['views']) ?>
    <?php endforeach ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></span>


<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data1 as $row): ?>
      <?= htmlspecialchars($row['count']) ?>
    <?php endforeach ?></span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg></span>
</h4>

                                <p class="card-text">In this tutorial, I’ll guide you through building a dynamic webpage
                                    with a like button that increments by +1 each time a user clicks it. The button will
                                    retrieve data from a MySQL database using PHP</p>
                                <div class="d-grid gap-2"><a href="/php/php-5.php"><button style="color:teal"
                                            class="w-100 btn btn-phoenix-secondary me-1 mb-1" type="button">Read
                                            More</button></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 p-0 p-sm-0 p-lg-2">
                        <article class="card mb-4">
                            <header class="card-header p-2 p-sm-2 p-lg-3">
                                <div class="card-meta"><span class="text-primary">20 Jun 2023</span> in <a
                                        href="/tags/nodejs.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">NODE.JS</span></a><a
                                        href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">AWS</span></a></div><a
                                    href="bootstrap-5/bootstrap-5-5.php">
                                    <h4 class="card-title" style="color:teal">How to Edit SCSS/JavaScript Variables in
                                        Your Bootstrap 5 Phoenix Template’s ‘src’ Directory</h4>
                                </a>
                            </header><img class="card-img-top" src="/assets/img/sys-admin/3/sys3-10.png" alt="...">
                            <div class="card-body p-2 p-sm-2 p-lg-3">

                            <h4>
<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data19 as $row): ?>
      <?= htmlspecialchars($row['views']) ?>
    <?php endforeach ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></span>


<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data9 as $row): ?>
      <?= htmlspecialchars($row['count']) ?>
    <?php endforeach ?></span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg></span>
</h4>



                                <p class="card-text">Learn how to customize your Bootstrap 5 Phoenix template by editing
                                    SCSS and JavaScript variables in the ‘src’ directory. This guide walks you through
                                    the process of modifying theme colors, navigation widths, and more to tailor your
                                    admin dashboard to your specific needs. Perfect for developers looking to enhance
                                    their web applications with personalized styling and functionality.</p>
                                <div class="d-grid gap-2"><a href="bootstrap-5/bootstrap-5-5.php"><button
                                            style="color:teal" class="w-100 btn btn-phoenix-secondary me-1 mb-1"
                                            type="button">Read More</button></a></div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <h4>Recent Posts</h4>
                    <div class="col-md-4 p-0 p-sm-0 p-lg-2">
                        <article class="card mb-4">
                            <header class="card-header p-2 p-sm-2 p-lg-3">
                                <div class="card-meta"><span class="text-primary">18 Jul 2024</span> in <a
                                        href="/tags/nodejs.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">Node.JS</span></a><a
                                        href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">AWS</span></a></div><a
                                    href="/bootstrap-5/bootstrap-5-5.php">
                                    <h4 class="card-title" style="color:teal">Phoenix Template Design</h4>
                                </a>
                            </header><img class="card-img-top" src="/assets/img/sys-admin/3/sys3-10.png" alt="...">
                            <div class="card-body p-2 p-sm-2 p-lg-3">


                            <h4>
<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data19 as $row): ?>
      <?= htmlspecialchars($row['views']) ?>
    <?php endforeach ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></span>


<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data9 as $row): ?>
      <?= htmlspecialchars($row['count']) ?>
    <?php endforeach ?></span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg></span>
</h4>
                                <p class="card-text">Using the Phoenix template as an example. I will be teaching you
                                    how to use your template with Node.JS, edit the templates HTML/CSS code, and uplaod
                                    to your AWS web server running Node.JS</p>
                                <div class="d-grid gap-2"><a href="/bootstrap-5/bootstrap-5-5.php"><button
                                            style="color:teal" class="w-100 btn btn-phoenix-secondary me-1 mb-1"
                                            type="button">Read More</button></a></div>
                            </div>
                        </article>
                        <article class="card mb-4">
                            <header class="card-header p-2 p-sm-2 p-lg-3">
                                <div class="card-meta"><span class="text-primary">20 Jun 2024</span> in <a
                                        href="/tags/php.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">PHP</span></a><a
                                        href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">AWS</span></a></div><a
                                    href="/php/php-3.php">
                                    <h4 class="card-title" style="color:teal">Creating and Connecting to an AWS MySQL
                                        Database Using MySQL Workbench</h4>
                                </a>
                            </header><img class="card-img-top" src="/assets/img/php/php-7x.png" alt="...">
                            <div class="card-body p-2 p-sm-2 p-lg-3">

                            <h4>
<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data14 as $row): ?>
      <?= htmlspecialchars($row['views']) ?>
    <?php endforeach ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></span>


<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data4 as $row): ?>
      <?= htmlspecialchars($row['count']) ?>
    <?php endforeach ?></span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg></span>
</h4>
                                <p class="card-text">Discover the step-by-step process of creating an AWS MySQL Database
                                    and connecting to it using MySQL Workbench. This detailed guide will walk you
                                    through setting up your AWS environment, configuring your MySQL database, and
                                    establishing a secure connection via MySQL Workbench. Perfect for both beginners and
                                    experienced users, this tutorial ensures you can efficiently manage and interact
                                    with your MySQL databases on AWS.</p>
                                <div class="d-grid gap-2"><a href="/php/php-3.php"><button style="color:teal"
                                            class="w-100 btn btn-phoenix-secondary me-1 mb-1" type="button">Read
                                            More</button></a></div>
                            </div>
                        </article>
                        <article class="card mb-4">
                            <header class="card-header p-2 p-sm-2 p-lg-3">
                                <div class="card-meta"><span class="text-primary">20 Jun 2024</span> in <a
                                        href="/tags/php.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">PHP</span></a><a
                                        href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">AWS</span></a></div><a
                                    href="/php/php-4.php">
                                    <h4 class="card-title" style="color:teal">Setting Up Email Functionality on Nginx
                                        Web Server: A Guide with PHP Verification</h4>
                                </a>
                            </header><img class="card-img-top" src="/assets/img/php/php-5x.png" alt="...">
                            <div class="card-body p-2 p-sm-2 p-lg-3">


                            <h4>
<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data15 as $row): ?>
      <?= htmlspecialchars($row['views']) ?>
    <?php endforeach ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></span>


<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data5 as $row): ?>
      <?= htmlspecialchars($row['count']) ?>
    <?php endforeach ?></span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg></span>
</h4>
                                <p class="card-text">Learn how to set up email functionality on your Nginx web server
                                    hosted on Amazon Lightsail, and also verify the email with md5 HASH using PHP</p>
                                <div class="d-grid gap-2"><a href="/php/php-4.php"><button style="color:teal"
                                            class="w-100 btn btn-phoenix-secondary me-1 mb-1" type="button">Read
                                            More</button></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 p-0 p-sm-0 p-lg-2">
                        <article class="card mb-4">
                            <header class="card-header p-2 p-sm-2 p-lg-3">
                                <div class="card-meta"><span class="text-primary">05 Jul 2024</span> in <a
                                        href="/tags/php.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">PHP</span></a><a
                                        href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">AWS</span></a></div><a
                                    href="/php/php-5.php">
                                    <h4 class="card-title" style="color:teal">Creating a Dynamic Like Button with PHP
                                        and MySQL</h4>
                                </a>
                            </header><img class="card-img-top" src="/assets/img/home/home-1.png" alt="...">
                            <div class="card-body p-2 p-sm-2 p-lg-3">


                            <h4>
<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data11 as $row): ?>
      <?= htmlspecialchars($row['views']) ?>
    <?php endforeach ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></span>


<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data1 as $row): ?>
      <?= htmlspecialchars($row['count']) ?>
    <?php endforeach ?></span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg></span>
</h4>
                                <p class="card-text">In this tutorial, I’ll guide you through building a dynamic webpage
                                    with a like button that increments by +1 each time a user clicks it. The button will
                                    retrieve data from a MySQL database using PHP</p>
                                <div class="d-grid gap-2"><a href="/php/php-5.php"><button style="color:teal"
                                            class="w-100 btn btn-phoenix-secondary me-1 mb-1" type="button">Read
                                            More</button></a></div>
                            </div>
                        </article>
                        <article class="card mb-4">
                            <header class="card-header p-2 p-sm-2 p-lg-3">
                                <div class="card-meta"><span class="text-primary">20 Jun 2023</span> in <a
                                        href="/tags/php.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">PHP</span></a><a
                                        href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">AWS</span></a></div><a
                                    href="/bootstrap-5/bootstrap-5-8.php">
                                    <h4 class="card-title" style="color:teal">How to send the website files to Node.JS
                                        AWS web server</h4>
                                </a>
                            </header><img class="card-img-top" src="/assets/img/sys-admin/3/sys3-4.png" alt="...">
                            <div class="card-body p-2 p-sm-2 p-lg-3">



                            <h4>
<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data0112 as $row): ?>
      <?= htmlspecialchars($row['views']) ?>
    <?php endforeach ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></span>


<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data012 as $row): ?>
      <?= htmlspecialchars($row['count']) ?>
    <?php endforeach ?></span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg></span>
</h4>
                                <p class="card-text">Learn how to seamlessly transfer your website files to a Node.js
                                    AWS web server. This comprehensive guide covers everything from setting up your AWS
                                    environment to deploying your files using Node.js. Whether you’re a beginner or an
                                    experienced developer, this tutorial will help you efficiently manage your web
                                    server and ensure your website runs smoothly on AWS</p>
                                <div class="d-grid gap-2"><a href="/bootstrap-5/bootstrap-5-8.php"><button
                                            style="color:teal" class="w-100 btn btn-phoenix-secondary me-1 mb-1"
                                            type="button">Read More</button></a></div>
                            </div>
                        </article>
                        <article class="card mb-4">
                            <header class="card-header p-2 p-sm-2 p-lg-3">
                                <div class="card-meta"><span class="text-primary">20 Jun 2023</span> in <a
                                        href="/tags/linux.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">LINUX</span></a><a
                                        href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">AWS</span></a></div><a
                                    href="/aws/lamp-server.php">
                                    <h4 class="card-title" style="color:teal">How to set up a web server for your
                                        website</h4>
                                </a>
                            </header><img class="card-img-top" src="/assets/img/website/web8.png" alt="...">
                            <div class="card-body p-2 p-sm-2 p-lg-3">


                            <h4>
<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data0113 as $row): ?>
      <?= htmlspecialchars($row['views']) ?>
    <?php endforeach ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></span>


<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data013 as $row): ?>
      <?= htmlspecialchars($row['count']) ?>
    <?php endforeach ?></span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg></span>
</h4>
                                <p class="card-text">On this page I will be teaching you how to set up an Amazon Web
                                    Services web server and point your domain name (ComputerScienceX.com) to the web
                                    server.</p>
                                <div class="d-grid gap-2"><a href="aws/lamp-server.php"><button style="color:teal"
                                            class="w-100 btn btn-phoenix-secondary me-1 mb-1" type="button">Read
                                            More</button></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 p-0 p-sm-0 p-lg-2">
                        <article class="card mb-4">
                            <header class="card-header p-2 p-sm-2 p-lg-3">
                                <div class="card-meta"><span class="text-primary">20 Jun 2023</span> in <a
                                        href="/tags/nodejs.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">NODE.JS</span></a><a
                                        href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">AWS</span></a></div><a
                                    href="bootstrap-5/bootstrap-5-1.php">
                                    <h4 class="card-title" style="color:teal">How to build (with NPM) your Bootstrap 5
                                        Dashly template's code for Node.JS</h4>
                                </a>
                            </header><img class="card-img-top" src="/assets/img/sys-admin/1/sys1.png" alt="...">
                            <div class="card-body p-2 p-sm-2 p-lg-3">


                            <h4>
<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data16 as $row): ?>
      <?= htmlspecialchars($row['views']) ?>
    <?php endforeach ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></span>


<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data6 as $row): ?>
      <?= htmlspecialchars($row['count']) ?>
    <?php endforeach ?></span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg></span>
</h4>


                                <p class="card-text">On this page I will be teaching you how to edit the HTML/CSS of
                                    your Bootstrap 5 Dashly theme</p>
                                <div class="d-grid gap-2"><a href="/bootstrap-5/bootstrap-5-1.php"><button
                                            style="color:teal" class="w-100 btn btn-phoenix-secondary me-1 mb-1"
                                            type="button">Read More</button></a></div>
                            </div>
                        </article>
                        <article class="card mb-4">
                            <header class="card-header p-2 p-sm-2 p-lg-3">
                                <div class="card-meta"><span class="text-primary">20 Jun 2023</span> in <a
                                        href="/tags/nodejs.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">NODE.JS</span></a><a
                                        href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">AWS</span></a></div><a
                                    href="/bootstrap-5/bootstrap-5-7.php">
                                    <h4 class="card-title" style="color:teal">How to Edit Your Bootstrap 5 Phoenix
                                        Template’s HTML Code</h4>
                                </a>
                            </header><img class="card-img-top" src="/assets/img/sys-admin/3/sys3-13.png" alt="...">
                            <div class="card-body p-2 p-sm-2 p-lg-3">

                            <h4>
<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data0111 as $row): ?>
      <?= htmlspecialchars($row['views']) ?>
    <?php endforeach ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></span>


<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data011 as $row): ?>
      <?= htmlspecialchars($row['count']) ?>
    <?php endforeach ?></span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg></span>
</h4>
                                <p class="card-text">In this comprehensive guide, you’ll learn step-by-step techniques
                                    to customize your template’s HTML code, ensuring your web project stands out</p>
                                <div class="d-grid gap-2"><a href="/bootstrap-5/bootstrap-5-7.php"><button
                                            style="color:teal" class="w-100 btn btn-phoenix-secondary me-1 mb-1"
                                            type="button">Read More</button></a></div>
                            </div>
                        </article>
                        <article class="card mb-4">
                            <header class="card-header p-2 p-sm-2 p-lg-3">
                                <div class="card-meta"><span class="text-primary">18 Jul 2024</span> in <a
                                        href="/tags/nodejs.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">NODE.JS</span></a><a
                                        href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                            style="color:teal;font-size:14px">AWS</span></a></div><a
                                    href="/bootstrap-5/bootstrap-5-6.php">
                                    <h4 class="card-title" style="color:teal">How to Build Your Bootstrap 5 Phoenix
                                        Template in Your Terminal with NPM</h4>
                                </a>
                            </header><img class="card-img-top" src="/assets/img/sys-admin/3/sys3-4.png" alt="...">
                            <div class="card-body p-2 p-sm-2 p-lg-3">


                            <h4>
<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data0110 as $row): ?>
      <?= htmlspecialchars($row['views']) ?>
    <?php endforeach ?></span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg></span>


<span class="badge badge-phoenix fs-8 badge-phoenix-primary"><span class="badge-label"><?php foreach($data010 as $row): ?>
      <?= htmlspecialchars($row['count']) ?>
    <?php endforeach ?></span>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
</svg></span>
</h4>
                                <p class="card-text">Discover how to efficiently build your Bootstrap 5 Phoenix template
                                    directly in your terminal using NPM. This tutorial covers the essential steps, from
                                    setting up your environment to running build commands, ensuring a smooth and
                                    streamlined development process. Perfect for developers aiming to enhance their
                                    workflow and leverage the full potential of Bootstrap 5 and NPM</p>
                                <div class="d-grid gap-2"><a href="/bootstrap-5/bootstrap-5-6.php"><button
                                            style="color:teal" class="w-100 btn btn-phoenix-secondary me-1 mb-1"
                                            type="button">Read More</button></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Explore Subjects</h4><a class="text-decoration-none"
                                href="/tags/nodejs.php"><span class="badge badge-tag me-2 mb-1"
                                    style="color:teal;font-size:14px">Node.JS</span></a> <a class="text-decoration-none"
                                href="/tags/aws.php"><span class="badge badge-tag me-2 mb-1"
                                    style="color:teal;font-size:14px">AWS</span></a> <a class="text-decoration-none"
                                href="/tags/htmlcss.php"><span class="badge badge-tag me-2 mb-1"
                                    style="color:teal;font-size:14px">HTML/CSS</span></a> <a
                                class="text-decoration-none" href="/tags/linux.php"><span
                                    class="badge badge-tag me-2 mb-1" style="color:teal;font-size:14px">Linux</span></a>
                            <a class="text-decoration-none" href="/tags/bootstrap-5.php"><span
                                    class="badge badge-tag me-2 mb-1" style="color:teal;font-size:14px">Bootstrap
                                    5</span></a> <a class="text-decoration-none" href="/tags/ios-dev.php"><span
                                    class="badge badge-tag me-2 mb-1" style="color:teal;font-size:14px">IOS
                                    Development</span></a> <a class="text-decoration-none" href="#!"><span
                                    class="badge badge-tag me-2 mb-1" style="color:teal;font-size:14px"></span></a> <a
                                class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-1"
                                    style="color:teal;font-size:14px"></span></a> <a class="text-decoration-none"
                                href="#!"><span class="badge badge-tag me-2 mb-1"
                                    style="color:teal;font-size:14px"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <script>var navbarTopStyle = window.config.config.phoenixNavbarTopStyle, navbarTop = document.querySelector(".navbar-top"); "darker" === navbarTopStyle && navbarTop.setAttribute("data-navbar-appearance", "darker"); var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle, navbarVertical = document.querySelector(".navbar-vertical"); navbarVertical && "darker" === navbarVerticalStyle && navbarVertical.setAttribute("data-navbar-appearance", "darker")</script>
            <script src="/vendors/popper/popper.min.js"></script>
            <script src="/vendors/bootstrap/bootstrap.min.js"></script>
            <script src="/vendors/anchorjs/anchor.min.js"></script>
            <script src="/vendors/is/is.min.js"></script>
            <script src="/vendors/fontawesome/all.min.js"></script>
            <script src="/vendors/lodash/lodash.min.js"></script>
            <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
            <script src="/vendors/list.js/list.min.js"></script>
            <script src="/vendors/feather-icons/feather.min.js"></script>
            <script src="/vendors/dayjs/dayjs.min.js"></script>
            <script src="/vendors/leaflet/leaflet.js"></script>
            <script src="/vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
            <script src="/vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
            <script src="/assets/js/phoenix.js"></script>
            <script src="/vendors/echarts/echarts.min.js"></script>
            <script src="/assets/js/ecommerce-dashboard.js"></script>
            <script
                type="module">import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.3/firebase-app.js"; import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.3/firebase-analytics.js"; const firebaseConfig = { apiKey: "AIzaSyCeTjWpTKb8EshKitZG61cqaiE15SNMgH8", authDomain: "csxb-992a6.firebaseapp.com", projectId: "csxb-992a6", storageBucket: "csxb-992a6.appspot.com", messagingSenderId: "515114275261", appId: "1:515114275261:web:12d0c8dc19089ffa9f82d4", measurementId: "G-JD238H9QED" }, app = initializeApp(firebaseConfig), analytics = getAnalytics(app)</script>
        </div>
    </main>
</body>

</html>