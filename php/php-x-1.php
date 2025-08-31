<?php

$servername = "ls-69e6.eu-west-2.rds.amazonaws.com";
$username = "dbmasteruser";
$password = "EL[Rx";
$database = "wdg";

          
$con = mysqli_connect($servername, $username, $password, $database);
$result = mysqli_query($con,"SELECT count FROM likes WHERE ID = 16");
$data = $result->fetch_all(MYSQLI_ASSOC);

$result2 = mysqli_query($con,"SELECT views FROM likes WHERE ID = 16");
$data2 = $result2->fetch_all(MYSQLI_ASSOC);


if(!isset($_COOKIE['not_unique16'])) {
    setcookie('not_unique16', '1', time() + (86400)); //30 days
    // Establish database connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }
    // SQL query to increment the like count
    $sql = "UPDATE likes SET views = views + 1 WHERE ID = 16";

    // Execute the query and check for errors
    if ($conn->query($sql) === TRUE) {
        echo "Like count updated successfully.";
    } else {
        echo "Error updating like count: " . $conn->error;
    }
}




?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="combo" data-navbar-horizontal-shape="slim">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="article:published_time" content="2024-06-20T23:18:00+00:00">
    <meta property="article:modified_time" content="2024-06-20T23:18:00+00:00">
    <meta name="description" content="On this page you’ll learn how to create an HTML email subscription form to collect user input and store that data in a MySQL database using PHP">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>How to Gather User Input with an HTML Email Subscription Form and Store That Data in a MySQL Database Using PHP | Computer Science X</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">

    <link rel="icon" href="/assets/img/x2-teal.ico" sizes="any" />

    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="/vendors/simplebar/simplebar.min.js"></script>
    <script src="/assets/js/config.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js"></script>

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=667399292e14a3001a2116a0&product=inline-share-buttons' async='async'></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="/assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="/assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="/assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="/assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>

      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
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
    <link href="/vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="/vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="/vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/github-dark.min.css">

    <style> 
        ol {
          font-size: 20px;
        }
        ul {
          font-size: 20px;
        }
        li::marker {
          color: #5D8AA8;
          font-size: 16px;
          font-weight: bold;
        }   
        :root,
        [data-bs-theme="light"] {
    
          ::-moz-selection {
            /* Code for Firefox */
            color: whitesmoke;
            background: teal;
          }
    
          ::selection {
            color: whitesmoke;
            background: teal;
          }
        }
    
        [data-bs-theme="dark"] {
    
          ::-moz-selection {
            /* Code for Firefox */
            color: whitesmoke;
            background: teal;
          }
    
          ::selection {
            color: whitesmoke;
            background: teal;
          }
        }
    
        p {
          font-size: 20px;
        }
    
        @media only screen and (max-width: 600px) {
          p {
            font-size: 18px;
          }
          ol {
            font-size: 18px;
          }
          ul {
            font-size: 18px;
          }
    
        }
    
        a {
          color: teal;
        }
    
        a:hover {
          color: teal;
        }
    
    
        mark {
          background-color: #31374a;
          color: white;
        }
    
        .k2-author {
          border: 2px rgba($gray-600);
          text-align: center;
          padding: ;
          border-radius: 10px;
        }
    
        .btn-primary,
        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary:visited {
          background-color: teal !important;
        }
    
        .pagination .active a {
          background-color: teal;
          color: white;
        }
    
        .pagination a:hover {
          background-color: teal;
          color: white;
        }
    
        .pagination a:visited {
          background-color: teal;
        }
    
        .tooltip-inner {
          font-size: 16px;
        }
      </style>
  </head>


  <body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v20.0&appId=1220173692310791" nonce="eseFJYgQ"></script>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-vertical navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <!-- scrollbar removed-->
          <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">

              <li class="nav-item">

                <div class="nav-item-wrapper"><a class="nav-link label-1" href="/index.php" role="button" data-bs-toggle="" aria-expanded="false">
                  <div class="d-flex align-items-center"><span class="nav-link-icon"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-house" viewBox="0 0 16 16">
                    <path
                      d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                  </svg></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Home</span></span>
                  </div>
                </a>
              </div>

              <hr class="navbar-vertical-line" />

                <!-- label-->
                <p class="navbar-vertical-label">WEB DEVELOPMENT
                </p>
                <hr class="navbar-vertical-line" />
                <!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#bootstrap-5" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="bootstrap-5">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-bootstrap" viewBox="0 0 16 16">
                        <path
                          d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377H6.375z" />
                        <path
                          d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H4z" />
                      </svg></span><span class="nav-link-text">Bootstrap 5 Theme's</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="bootstrap-5">
                      <li class="collapsed-nav-item-title d-none">Bootstrap 5 Theme's
                      </li>




                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#bootstrap-5-1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="bootstrap-5-1">
                          <div class="d-flex align-items-center">
                            <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Dashly Template Design</span>
                          </div>
                        </a>




                        <!-- more inner pages-->
                        <div class="parent-wrapper">
                          <ul class="nav collapse parent" data-bs-parent="#bootstrap-5" id="bootstrap-5-1">
                            <li class="nav-item"><a class="nav-link" href="/bootstrap-5/bootstrap-5-1.php">
                                <div class="d-flex align-items-center"><span class="nav-link-text">1. Build the code</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/bootstrap-5/bootstrap-5-2.php">
                                <div class="d-flex align-items-center"><span class="nav-link-text">2. Node.JS Partials</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/bootstrap-5/bootstrap-5-3.php">
                                <div class="d-flex align-items-center"><span class="nav-link-text">3. Edit the HTML/CSS</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                            </li>

                            
                          </ul>
                        </div>
                      </li>


                      <li class="nav-item"><a class="nav-link dropdown-indicator" href="#bootstrap-5-2" data-bs-toggle="collapse" aria-expanded="false" aria-controls="bootstrap-5-2">
                        <div class="d-flex align-items-center">
                          <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Pheonix Template Design</span>
                        </div>
                      </a>
                      <!-- more inner pages-->
                      <div class="parent-wrapper">
                        <ul class="nav collapse parent " data-bs-parent="#bootstrap-5" id="bootstrap-5-2">
                          <li class="nav-item"><a class="nav-link" href="/bootstrap-5/bootstrap-5-5.php">
                              <div class="d-flex align-items-center"><span class="nav-link-text">1. Edit CSS & JS Variables</span>
                              </div>
                            </a>
                            <!-- more inner pages-->
                          </li>
                          <li class="nav-item"><a class="nav-link" href="/bootstrap-5/bootstrap-5-6.php">
                              <div class="d-flex align-items-center"><span class="nav-link-text">2. Build The Code</span>
                              </div>
                            </a>
                            <!-- more inner pages-->
                          </li>
                          <li class="nav-item"><a class="nav-link" href="/bootstrap-5/bootstrap-5-7.php">
                              <div class="d-flex align-items-center"><span class="nav-link-text">3. Edit HTML/CSS</span>
                              </div>
                            </a>
                            <!-- more inner pages-->
                          </li>
                          <li class="nav-item"><a class="nav-link" href="/bootstrap-5/bootstrap-5-8.php">
                              <div class="d-flex align-items-center"><span class="nav-link-text">4. Send Files to Server</span>
                              </div>
                            </a>
                            <!-- more inner pages-->
                          </li>
                          
                        </ul>
                      </div>
                    </li>

                    </ul></div></div>






                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#php" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="php">
                      <div class="d-flex align-items-center">
                        <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                          fill="currentColor" class="bi bi-code" viewBox="0 0 16 16">
                          <path
                            d="M5.854 4.854a.5.5 0 1 0-.708-.708l-3.5 3.5a.5.5 0 0 0 0 .708l3.5 3.5a.5.5 0 0 0 .708-.708L2.707 8zm4.292 0a.5.5 0 0 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708-.708L13.293 8z" />
                        </svg></span><span class="nav-link-text">PHP</span>
                      </div>
                    </a>
                    <div class="parent-wrapper label-1">
                      <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="php">
                        <li class="collapsed-nav-item-title d-none">PHP
                        </li>
  
  
  
  
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#php-1" data-bs-toggle="collapse" aria-expanded="true" aria-controls="php-1">
                            <div class="d-flex align-items-center">
                              <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">PHP & MySQL</span>
                            </div>
                          </a>
  
  
  
                          <!-- more inner pages-->
                          <div class="parent-wrapper">
                            <ul class="nav collapse parent show" data-bs-parent="#php" id="php-1">
                              <li class="nav-item"><a class="nav-link active" href="/php/php-1.php">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">1. HTML Form for User Input</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              <li class="nav-item"><a class="nav-link" href="/php/php-2.php">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">2. '*.php' File Contents</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              <li class="nav-item"><a class="nav-link" href="/php/php-3.php">
                                  <div class="d-flex align-items-center"><span class="nav-link-text">3. AWS MySQL Database</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              <li class="nav-item"><a class="nav-link" href="/php/php-4.php">
                                <div class="d-flex align-items-center"><span class="nav-link-text">4. Add to Database with PHP</span>
                                </div>
                              </a>
                              <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/php/php-5.php">
                              <div class="d-flex align-items-center"><span class="nav-link-text">5. Display MySQL Data</span>
                              </div>
                            </a>
                            <!-- more inner pages-->
                          </li>
  
                              
                            </ul>
                          </div>
                        </li>
  
  
                        
  
  
  
                      </ul></div></div>
  
  



                <hr class="navbar-vertical-line" />
                <!-- ===============================================-->
                <!--    Multi Level End-->
                <!-- ===============================================-->



                <p class="navbar-vertical-label">System Administration</p>







                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#aws" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="aws">
                  <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                      fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                      <path
                        d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                    </svg></span><span class="nav-link-text">Amazon Web Services</span>
                  </div>
                </a>
                <div class="parent-wrapper label-1">
                  <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="aws">
                    <li class="collapsed-nav-item-title d-none">Amazon Web Services
                    </li>




                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#aws-1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="aws-1">
                        <div class="d-flex align-items-center">
                          <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Web Server</span>
                        </div>
                      </a>




                      <!-- more inner pages-->
                      <div class="parent-wrapper">
                        <ul class="nav collapse parent" data-bs-parent="#aws" id="aws-1">
                          <li class="nav-item"><a class="nav-link" href="/aws/lamp-server.php">
                              <div class="d-flex align-items-center"><span class="nav-link-text">LAMP Tutorial</span>
                              </div>
                            </a>
                            <!-- more inner pages-->
                          </li>


                          
                        </ul>
                      </div>
                    </li>


                    



                  </ul></div></div>











                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                  <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                      fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                      <path
                        d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                      <path
                        d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                    </svg></span><span class="nav-link-text">Email</span>
                  </div>
                </a>
                <div class="parent-wrapper label-1">
                  <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="email">
                    <li class="collapsed-nav-item-title d-none">Email
                    </li>




                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email-1" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email-1">
                        <div class="d-flex align-items-center">
                          <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-text">Configuration</span>
                        </div>
                      </a>




                      <!-- more inner pages-->
                      <div class="parent-wrapper">
                        <ul class="nav collapse parent" data-bs-parent="#email" id="email-1">
                          <li class="nav-item"><a class="nav-link" href="/sys-admin/custom-email.php">
                              <div class="d-flex align-items-center"><span class="nav-link-text">Custom domain email</span>
                              </div>
                            </a>
                            <!-- more inner pages-->
                          </li>


                          
                        </ul>
                      </div>
                    </li>


                

                  </ul></div></div>










                    <div class="navbar-vertical-footer">
                      <button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button>
                    </div>
                  </nav>


      








      </nav>



      <nav class="navbar navbar-top fixed-top navbar-slim justify-content-between navbar-expand-lg" id="navbarComboSlim" data-navbar-top="combo" data-move-target="#navbarVerticalNav">
        <div class="navbar-logo">

          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand navbar-brand" href="/index.php">WebDevGudies.com</a>
        </div>

        <ul class="navbar-nav navbar-nav-icons flex-row">
          <li class="nav-item">
            <div class="d-lg-none"><!--hide on lg and wider screens-->
              <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim">
                <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" />
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="moon"></span></span><span class="fs-9 fw-bold">Dark</span></label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" ><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label>
              </div>
            </div>
            <div class="d-none d-lg-block"><!--hide on screens smaller than lg-->
              <div class="theme-control-toggle fa-ion-wait pe-2 theme-control-toggle-slim">
                <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="phoenixTheme" value="dark" />
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="moon"></span></span><span class="fs-9 fw-bold">Dark</span></label>
                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="d-none d-sm-flex flex-center" style="height:16px;width:16px;"><span class="me-1 icon" data-feather="sun"></span></span><span class="fs-9 fw-bold">Light</span></label>
              </div>
            </div>

          </li>
         


        </ul>
      </nav>














      <div class="content">





          <div class="row g-4">
            <div class="col-md-9 p-0 p-sm-0 p-lg-2">
              <div class="card">
                                    



 
                <div class="card-body p-2 p-sm-2 p-lg-3">

                  <header>
                                  
            



                      <div class="d-none d-lg-block"><!--hide on screens smaller than lg-->
            
                        


            
                    <div class="float-end">
                      <nav aria-label="...">
                        <div class="d-flex justify-content-center">
                          <h6>Page number:</h6>
            
                        </div>
                        <ul class="pagination justify-content-center">
                          <li class="page-item active" aria-current="page">
                            <a class="page-link" href="/php/php-1.php">1 <span class="sr-only"></span></a>
                          </li>
                          <li class="page-item"><a class="page-link" href="/php/php-2.php">2</a></li>
                          
                          <li class="page-item"><a class="page-link" href="/php/php-3.php">3</a></li>
                          <li class="page-item"><a class="page-link" href="/php/php-4.php">4</a></li>
            
                          <li class="page-item"><a class="page-link" href="/php/php-5.php">5</a></li>

                          
            
            
                          
                        </ul>
                      </nav>

            
                  </div>
            </div>






                      <h1 class="display-5">How to Gather User Input with an HTML Email Subscription Form and Store That Data in a MySQL Database Using PHP</h1>
                      <p class="lead">On this page you’ll learn how to create an HTML email subscription form to collect user input and store that data in a MySQL database using PHP</p>
            
            
                      <div class="card-meta">
                        in <a href="/tags/nodejs.php">Node.JS</a>, <a href="/tags/aws.php">AWS</a>
            

                        <div class="float-end">

                        <script>
                  function showCustomer(x) {
                  
                    let result = document.getElementById("GFG");
                  
                   // x.classList.toggle("mystyle");
                            //     result.innerHTML = "Like successfully added";
                  
                    //  x.classList.toggle("btn-phoenix-success");
                  
                    const xhttp = new XMLHttpRequest();
                    xhttp.onload = function() {
                      document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                    xhttp.open("GET", "action-page-6.php?");
                    xhttp.send();
                    result.innerHTML = "Like successfully added";
                  
                  
                  
                  }
                  </script>
                <h2>
                
                

                
                <span class="badge badge-phoenix fs-5 badge-phoenix-primary">
                <h4>

               Page Views: <?php foreach($data2 as $row): ?>
                      <?= htmlspecialchars($row['views']) ?>
                    <?php endforeach ?>
                    </h4>

                </span>                
                

                <button onclick="showCustomer(this)" class="btn btn-phoenix-danger me-1 mb-1" type="button" style="color:teal;"><?php foreach($data as $row): ?>
                      <?= htmlspecialchars($row['count']) ?>
                    <?php endforeach ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                </svg></button>
                


                
                
                
                
                
                </h2>
                <h5 id="GFG"></h5>
                </div>






            <div class="d-lg-none"><!--hide on lg and wider screens-->



              <div class="float-end">



                                  
              <div class="float-end">
                <nav aria-label="...">
                  <div class="d-flex justify-content-center">
                    <h6>Page number:</h6>
      
                  </div>
                  <ul class="pagination justify-content-center">
      
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="/php/php-1.php">1 <span class="sr-only"></span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="/php/php-2.php">2</a></li>
                    
                    <li class="page-item"><a class="page-link" href="/php/php-3.php">3</a></li>
                    <li class="page-item"><a class="page-link" href="/php/php-4.php">4</a></li>
      
                    <li class="page-item"><a class="page-link" href="/php/php-5.php">5</a></li>

                    
      
      
                    
                  </ul>
                </nav>
                <hr class="hr" />
      

      
            </div>
            </div>
                      </div>
            
                      </header>
                      <hr class="hr" />
            
                      <div class="container">
                        <!-- Content here -->
                        <h4>Skip to section:</h4>
                        <ol>
                          <li><a href="#a1" style="color:teal;font-size: 16px;">What are the 'src' and 'public' files used for?</a></li>
                          <li><a href="#a2" style="color:teal;font-size: 16px;">Javscript example</a></li>
                          <li><a href="#a3" style="color:teal;font-size: 16px;">SCSS example</a></li>
                        </ol>
                      </div>
                      
                      <hr class="hr" />

                      <p>On these next pages ill teach you how to create a PHP and MySQL web application that will allow signed up and logged in users to view exclusive content.</p>
                      <p>First, you will need to go to https://github.com/panique/php-login-minimal.git and download this template.</p>
                      <p>Then you will need to setup your AWS lightsail web hosting and database.</p>
                      <p>Next you will need to create the front end. I recommend using bootstrap 5 themes. I have tutorials here on building bootstrap 5 themes with npm.</p>
                      <p>once we have our code built and ready for front end deployment. we can now integrate the 2 pieces of software together</p>
                      <p>I will explain here how to integrate the code using dashly probably as the example</p>



                      
                      <h2></h2>

  <pre class="rounded-3 language-bash tabindex=0">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-filetype-html" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-9.736 7.35v3.999h-.791v-1.714H1.79v1.714H1V11.85h.791v1.626h1.682V11.85h.79Zm2.251.662v3.337h-.794v-3.337H4.588v-.662h3.064v.662zm2.176 3.337v-2.66h.038l.952 2.159h.516l.946-2.16h.038v2.661h.715V11.85h-.8l-1.14 2.596H9.93L8.79 11.85h-.805v3.999zm4.71-.674h1.696v.674H12.61V11.85h.79v3.325Z"/>
</svg>

<button class="btn" data-clipboard-snippet=""><img class="clippy" width="13" src="assets/images/clippy.svg" alt="Copy to clipboard"></button>

<br>
    <code class="language-html">
  &lt;article class="card card-outline mb-4"&gt;
    &lt;div class="card-body"&gt;
      &lt;h4 class="card-title">Sign up for our email subscription&lt;/h4&gt;
        &lt;form method="POST" action="action_page.php"&gt;
          &lt;div class="mb-3"&gt;
            &lt;label for="email">Email:&lt;/label&gt;
            &lt;input type="email" class="form-control" id="email" placeholder="Enter email" name="email" data-ddg-inputtype="identities.emailAddress" data-ddg-autofill="true" style="background-size: auto 24px !important; background-position: right center !important; background-repeat: no-repeat !important; background-origin: content-box !important; !important; transition: background !important;"&gt;
            &lt;div id="emailHelp" class="form-text">We'll never share your email with anyone else.&lt;/div&gt;
          &lt;/div&gt;
          &lt;button type="submit" class="btn btn-primary">Submit&lt;/button&gt;
        &lt;/form&gt;
    &lt;/div&gt;
  &lt;/article&gt;
    </code>
  </pre>
  
  <br>
  

  
  <p>This is a very simple HTML form that gets the user to enter an email address and then it will <strong>'POST'</strong> that data to the <strong>'action_page.php'</strong> file so that we can use/manipulate the data that the user has provided how we want using PHP.</p>
                        
  
  
            
       </div>     
            
          
              </div>


              





                
    
            
            
            
            
            
            
              <div class="float-end">          <a href="/php/php-2.php" style="color:teal; font-size: 20px; " class="rounded float-right"><strong>Next page:</strong> How to gather user input with a HTML email subscription form and store that data in a MySQL Database using PHP</a>
            
              </div>
            
                
                <br><br><br><br><br><br><br><br>
                      
            
            
                <div class="d-lg-none"><!--hide on lg and wider screens-->
                  <br><br><br><br><br>
                
                  <nav aria-label="...">
                    <ul class="pagination justify-content-center">
            
                      <li class="page-item active" aria-current="page">
                        <a class="page-link" href="/php/php-1.php">1 <span class="sr-only"></span></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="/php/php-2.php">2</a></li>
                      
                      <li class="page-item"><a class="page-link" href="/php/php-3.php">3</a></li>
                      <li class="page-item"><a class="page-link" href="/php/php-4.php">4</a></li>
        
                      <li class="page-item"><a class="page-link" href="/php/php-5.php">5</a></li>
  
            
            
                      
                    </ul>
                  </nav>
                </div>

                <div class="d-none d-lg-block"><!--hide on screens smaller than lg-->
            
                  <nav aria-label="...">
                    <ul class="pagination justify-content-center">
  
                      <li class="page-item active" aria-current="page">
                        <a class="page-link" href="/php/php-1.php">1 <span class="sr-only"></span></a>
                      </li>
                      <li class="page-item"><a class="page-link" href="/php/php-2.php">2</a></li>
                      
                      <li class="page-item"><a class="page-link" href="/php/php-3.php">3</a></li>
                      <li class="page-item"><a class="page-link" href="/php/php-4.php">4</a></li>
  
                      <li class="page-item"><a class="page-link" href="/php/php-5.php">5</a></li>
                      <li class="page-item">
                        <a class="page-link" href="/php/php-2.php">Next</a>
                      </li>
  
                      
                    </ul>
                  </nav>
            
                </div>
            
            
                  
            
            </div>
            </article><!-- /.card -->
            
     








<div class="col-md-3 ms-auto p-2 p-sm-2 p-lg-2">

  

  

<aside class="sidebar">
  <div class="card mb-4">
    <div class="card-body">
      <div class="k2-author">

        
      <div class="avatar avatar-5xl">
        <img class="rounded-circle"class="ratio ratio-16x9" src="/assets/img/self1.JPG" alt="" />
      </div>
    
        <br><br>
        <p style="font-size: 13px;" >Date Published <span class="fw-semi-bold text-primary">  <time itemprop="datePublished" datetime="2024-06-20T12:00:00Z">20 Jun 2024</time></span>
          <br>Date Modified <span class="fw-semi-bold text-primary">  <time itemprop="dateModified" datetime="2024-06-20T18:00:00Z">20 Jun 2024</time></span>
          <br>by <span class="fw-semi-bold text-primary"><a href="/about-person/james.php">Admin</a></span><br><strong style="font-size: 14px;">England, United Kingdom</strong></p>


        <h6>Socials:</h6>
        <a href="https://github.com/webdevguidescom" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="GitHub" style="color: teal;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
        </svg></a>

        &nbsp&nbsp
        <a href="https://x.com/webdevguidesx" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Twitter" style="color: teal;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
          <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
        </svg></a>
        
        </div>
         
      
    </div>
  </div><!-- /.card -->
</aside>




<aside class="sidebar sidebar-sticky">
  <div class="card mb-4">
    <div class="card-body">
      <h4 class="card-title">Explore Subjects</h4>


      <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-1" style="color: teal;">Node.JS</span></a>
        <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-1" style="color: teal;">AWS</span></a>
        <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-1" style="color: teal;">HTML/CSS</span></a>
        <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-1" style="color: teal;">Linux</span></a>
        <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-1" style="color: teal;">Bootstrap 5</span></a>
        <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-1" style="color: teal;">IOS Development</span></a>
        <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-1" style="color: teal;"></span></a>
        <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-1" style="color: teal;"></span></a>
        <a class="text-decoration-none" href="#!"><span class="badge badge-tag me-2 mb-1" style="color: teal;"></span></a>

    </div>
  </div><!-- /.card -->

  
  <div class="card mb-4">
    <div class="card-body">
      <h4 class="card-title">Popular Tutorials</h4>
      <a href="/bootstrap-5/bootstrap-5-5.php" class="d-inline-block mt-3">
        <h4 class="h6" style="color:teal;">Phoenix Theme Bootstrap 5 Template Design</h4>
        <img class="card-img" src="/assets/img/bootstrap/1/boot1-1.png" alt="" />
      </a>
      
        <span class="text-primary">01 Jan, 2023</span> in <a href="/tags/nodejs.php">Node.JS</a>, <a href="/tags/aws.php">AWS</a>

        <hr class="hr" />


      <a href="/php/php-1.php" class="d-inline-block mt-3">
        <h4 class="h6" style="color:teal;">How to gather user input with a HTML email subscription form and store that data in a MySQL Database using PHP</h4>
        <img class="card-img" src="/assets/img/poptut-1.png" alt="" />
      </a>
      <span class="text-primary">01 Jan, 2023</span> in <a href="/tags/nodejs.php">Node.JS</a>, <a href="/tags/aws.php">AWS</a>

    </div>
  </div>
  <!-- /.card -->
</aside>

</div>






<!-- ===============================================-->
<!--    Main Content End-->
<!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
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

    <script type="module">

      // Import the functions you need from the SDKs you need
    
      import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.3/firebase-app.js";
    
      import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.3/firebase-analytics.js";
    
      // TODO: Add SDKs for Firebase products that you want to use
    
      // https://firebase.google.com/docs/web/setup#available-libraries
    
    
      // Your web app's Firebase configuration
    
      // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    
      const firebaseConfig = {
    
        apiKey: "AIzaSyCeTjWpTKb8EshKitZG61cqaiE15SNMgH8",
    
        authDomain: "csxb-992a6.firebaseapp.com",
    
        projectId: "csxb-992a6",
    
        storageBucket: "csxb-992a6.appspot.com",
    
        messagingSenderId: "515114275261",
    
        appId: "1:515114275261:web:12d0c8dc19089ffa9f82d4",
    
        measurementId: "G-JD238H9QED"
    
      };
    
    
      // Initialize Firebase
    
      const app = initializeApp(firebaseConfig);
    
      const analytics = getAnalytics(app);
    
    </script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
  
    <script>hljs.highlightAll();</script>

  </body>

</html>