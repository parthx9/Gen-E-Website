<?php

 //Database Connection
    $user_name = "geneuser";
    $password = "SiliconValley191!(!";
    $database = "geneweb";
    $server = "139.59.54.139";

    // Create connection
    $conn = new mysqli($server, $user_name, $password, $database);

    #Error error_reporting()
    if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
    } 


    $query = "SELECT *  FROM `team-page`";
    $result = $conn->query($query);

    

    while($row = mysqli_fetch_assoc($result))
    {        
        // $data[] = $row; 

        switch ($row["config"]) {

            case 'site_title':
                $site_title = $row["value"];
                break;

            case 'main-title':
                $main_title = $row["value"];
                break;

            case 'team1-name':
                $team1_name = $row["value"];
                break;
           
            case 'team1-desig':
                $team1_desig = $row["value"];
                break;
            
            case 'team2-name':
                $team2_name = $row["value"];
                break;
           
            case 'team2-desig':
                $team2_desig = $row["value"];
                break; 

            case 'team3-name':
                $team3_name = $row["value"];
                break;
           
            case 'team3-desig':
                $team3_desig = $row["value"];
                break; 

            case 'team4-name':
                $team4_name = $row["value"];
                break;
           
            case 'team4-desig':
                $team4_desig = $row["value"];
                break; 

            case 'team5-name':
                $team5_name = $row["value"];
                break;
           
            case 'team5-desig':
                $team5_desig = $row["value"];
                break; 

            case 'team6-name':
                $team6_name = $row["value"];
                break;
           
            case 'team6-desig':
                $team6_desig = $row["value"];
                break; 

            case 'team7-name':
                $team7_name = $row["value"];
                break;
           
            case 'team7-desig':
                $team7_desig = $row["value"];
                break; 

            case 'team8-name':
                $team8_name = $row["value"];
                break;
           
            case 'team8-desig':
                $team8_desig = $row["value"];
                break; 

            case 'team9-name':
                $team9_name = $row["value"];
                break;
           
            case 'team9-desig':
                $team9_desig = $row["value"];
                break; 

            case 'team10-name':
                $team10_name = $row["value"];
                break;
           
            case 'team10-desig':
                $team10_desig = $row["value"];
                break; 

            case 'team11-name':
                $team11_name = $row["value"];
                break;
           
            case 'team11-desig':
                $team11_desig = $row["value"];
                break; 
                                  
 
            case 'form-title':
                $form_title = $row["value"];
                break;

            case 'form-subtitle':
                $form_subtitle = $row["value"];
                break;

            case 'footer-title':
                $footer_title = $row["value"];
                break;

            case 'footer-desc':
                $footer_desc = $row["value"];
                break;
            
            case 'form1':
                $form1 = $row["value"];
                break;

            case 'form2':
                $form2 = $row["value"];
                break;

            case 'form3':
                $form3 = $row['value'];
                break;

            case 'form4':
                $form4 = $row['value'];
                break;

            case 'form-btn':
                $form_btn = $row['value'];
                break;

            case 'footerlink-title':
                $footerlink_title= $row['value'];
                break;

            case 'footerlink-1':
                $footerlink_1= $row['value'];
                break;

            case 'footerlink-2':
                $footerlink_2= $row['value'];
                break;

            case 'footerlink-3':
                $footerlink_3= $row['value'];
                break;

            case 'footerlink-6':
                $footerlink_6= $row['value'];
                break;

            case 'footerlink-4':
                $footerlink_4= $row['value'];
                break;

            case 'footerlink-5':
                $footerlink_5= $row['value'];
                break;

            default:
                # code...
                break;
        }


    }


?>

<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Timeline CSS -->
        <link rel="stylesheet" href="assets/css/timeline.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="assets/fonts/flaticon.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css?v=2">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">


        <title><?php echo $site_title; ?></title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>
        <!-- Preloader -->
        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area fixed-top">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="assets/img/genie logo-01 2.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav ">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/genie logo-01 3.png" alt="Logo" width="101px" height="101px">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Pages</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Works</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Videos</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Blog</a>
                                </li> 
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-item">
                    <h2><?php echo $main_title; ?></h2>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Team -->
        <section class="team-area team-area-two pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="assets/img/home-one/team8.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3><?php echo $team1_name; ?></h3>
                                <span><?php echo $team1_desig; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="assets/img/home-one/team8.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3><?php echo $team2_name; ?></h3>
                                <span><?php echo $team2_desig; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="assets/img/home-one/team1.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3><?php echo $team3_name; ?></h3>
                                <span><?php echo $team3_desig; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="assets/img/home-one/team2.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3><?php echo $team4_name; ?></h3>
                                <span><?php echo $team4_desig; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="assets/img/home-one/team3.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3><?php echo $team5_name; ?></h3>
                                <span><?php echo $team5_desig; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="assets/img/home-one/team4.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3><?php echo $team6_name; ?></h3>
                                <span><?php echo $team6_desig; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="assets/img/home-one/team5.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3><?php echo $team7_name; ?></h3>
                                <span><?php echo $team7_desig; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="assets/img/home-one/team6.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3><?php echo $team8_name; ?></h3>
                                <span><?php echo $team8_desig; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="assets/img/home-one/team7.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3><?php echo $team9_name; ?></h3>
                                <span><?php echo $team9_desig; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="assets/img/home-one/team8.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3><?php echo $team10_name; ?></h3>
                                <span><?php echo $team10_desig; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <div class="team-top">
                                <img src="assets/img/home-one/team8.jpg" alt="Team">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-instagram-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-bottom">
                                <h3><?php echo $team11_name; ?></h3>
                                <span><?php echo $team11_desig; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team -->

                <!--Request Callback Form-->

        <section class=" callback-course">
            <div class="section-title pt-5">
                <span class="sub-title"><?php echo $form_title ?></span>
                <h2><?php echo $form_subtitle ?></h2>
            </div>
            <form class="container pb-5">
                <div class="form-group row text-center">
                  <label for="name" class="col-sm-2 col-form-label p-1"><?php echo $form1 ?></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="name" >
                  </div>
                  <label for="phone" class="col-sm-2 col-form-label p-1 pl-3"><?php echo $form2 ?></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="phone">
                  </div>
                </div>
                <div class="form-group row text-center">
                  <label for="email" class="col-sm-2 col-form-label p-1"><?php echo $form3 ?></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="email" >
                  </div>
                  <label for="message" class="col-sm-2 col-form-label p-1 pl-3"><?php echo $form4 ?></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="message">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12 p-3 text-center">
                    <button type="Submit" class="btn"><?php echo $form_btn ?></button>
                  </div>
                </div>
              </form>            
        </section>
                <!--Request Callback Form Ends-->

        <!-- Footer -->
        <footer class="pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="footer-item">
                            <div class="footer-logo">
                                <a class="footer-logo-img" href="#">
                                    <img src="assets/img/genie logo-01 2.png" alt="Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="footer-item">
                            <div class="footer-logo">
                                <h3><?php echo $footer_title ?></h3>
                                <p><?php echo $footer_desc ?></p>
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-pinterest-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="footer-item">
                            <div class="footer-link">
                                <h3><?php echo $footerlink_title ?></h3>
                                <ul>
                                    <li>
                                        <a href="index.html" target="_blank"><?php echo $footerlink_1 ?></a>
                                    </li>
                                    <li>
                                        <a href="about.html" target="_blank"><?php echo $footerlink_2 ?></a>
                                    </li>

                                     <li>
                                        <a href="work.html" target="_blank"><?php echo $footerlink_3?></a>
                                    </li>
                                    <li>
                                        <a href="video.html" target="_blank"><?php echo $footerlink_4 ?></a>
                                    </li>
                                    <li>
                                        <a href="blog.html" target="_blank"><?php echo $footerlink_5 ?></a>
                                    </li>
                                    <li>
                                        <a href="contact.html" target="_blank"><?php echo $footerlink_6 ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->



        <!-- Essential JS -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<!-- Form Validator JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Timeline JS -->
        <script src="assets/js/timeline.js"></script>
        <!-- Thumb Slider JS -->
        <script src="assets/js/thumb-slide.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
    </body>

<!-- Mirrored from templates.envytheme.com/moovi/default/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 09:33:39 GMT -->
</html>