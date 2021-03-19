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


    $query = "SELECT *  FROM `home-page`";
    $result = $conn->query($query);

     

    while($row = mysqli_fetch_assoc($result))
    {        
        // $data[] = $row; 

        switch ($row["config"]) {

            case 'site_title':
                $site_title = $row["value"];
                break;

            case 'banner1title':
                $banner1title = $row["value"];
                break;
           
            case 'banner1subheadding':
                $banner1subheadding = $row["value"];
                break;

            case 'banner1cta':
                $banner1cta = $row["value"];
                break;

            case 'banner2title':
                $banner2title = $row["value"];
                break;
           
            case 'banner2subheadding':
                $banner2subheadding = $row["value"];
                break;

            case 'banner2cta':
                $banner2cta = $row["value"];
                break;

            case 'banner3title':
                $banner3title = $row["value"];
                break;
           
            case 'banner3subheadding':
                $banner3subheadding = $row["value"];
                break;

            case 'banner3cta':
                $banner3cta = $row["value"];
                break;

            case 'sec1-title':
                $sec1_title = $row["value"];
                break;

            case 'sec1-desc':
                $sec1_desc = $row["value"];
                break;
     
            case 'sec2-title':
                $sec2_title = $row["value"];
                break;

            case 'sec2-desc':
                $sec2_desc = $row["value"];
                break;

            case 'sec2-desc-2':
                $sec2_desc_2 = $row["value"];
                break;

            case 'sec3-title':
                $sec3_title = $row["value"];
                break;

            case 'sec3-subtitle':
                $sec3_subtitle = $row["value"];
                break;

            case 'sec2-btn':
                $sec2_btn = $row["value"];
                break;

            case 'sec4-title':
                $sec4_title = $row["value"];
                break;

            case 'sec4-subtitle':
                $sec4_subtitle = $row["value"];
                break;
            case 'sec5-title':
                $sec5_title = $row["value"];
                break;

            case 'sec5-subtitle':
                $sec5_subtitle = $row["value"];
                break;

            case 'mentor1-name':
                $mentor1_name = $row["value"];
                break;
                
            case 'mentor1-desc':
                $mentor1_desc = $row["value"];
                break;

            case 'mentor2-name':
                $mentor2_name = $row["value"];
                break;

            case 'mentor2-desc':
                $mentor2_desc = $row["value"];
                break;

            case 'mentor3-name':
                $mentor3_name = $row["value"];
                break;

            case 'mentor3-desc':
                $mentor3_desc = $row["value"];
                break;

            case 'mentor4-name':
                $mentor4_name = $row["value"];
                break;

            case 'mentor4-desc':
                $mentor4_desc = $row["value"];
                break;

            case 'mentor5-name':
                $mentor5_name = $row["value"];
                break;
    
            case 'mentor5-desc':
                $mentor5_desc = $row["value"];
                break;

            case 'mentor6-name':
                $mentor6_name = $row["value"];
                break;
    
            case 'mentor6-desc':
                $mentor6_desc = $row["value"];
                break;

            case 'card1-title':
                $card1_title = $row["value"];
                break;

            case 'card1-desc':
                $card1_desc = $row["value"];
                break;

            case 'card2-title':
                $card2_title = $row["value"];
                break;

            case 'card2-desc':
                $card2_desc = $row["value"];
                break;

            case 'card3-title':
                $card3_title = $row["value"];
                break;

            case 'card3-desc':
                $card3_desc = $row["value"];
                break;

            case 'card4-title':
                $card4_title = $row["value"];
                break;

            case 'card4-desc':
                $card4_desc = $row["value"];
                break;

            case 'card5-title':
                $card5_title = $row["value"];
                break;

            case 'card5-desc':
                $card5_desc = $row["value"];
                break;
            
            case 'sec6-title':
                $sec6_title = $row["value"];
                break;

            case 'sec6-subtitle':
                $sec6_subtitle = $row["value"];
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

    // echo "$data";

    



    // $query1 = "SELECT *  FROM `home-page` WHERE `config` LIKE 'site_title'";

    // $q1exec = $conn->query($query1);

    //  if ($q1exec->num_rows > 0) {
    //     while($row = $q1exec->fetch_assoc()) {
    //         $site_title = $row["value"]; 
    //     }
    // } 

    // $query2 = "SELECT *  FROM `home-page` WHERE `config` LIKE 'banner1title'";

    // $execute = $conn->query($query2);

    //  if ($execute->num_rows > 0) {
    //     while($row = $execute->fetch_assoc()) {
    //         $banner1title = $row["value"]; 
    //     }
    // } 

    // $banner1subheadding = "Get gene to help you score extra marks";
    // $banner1cta = "Sign Up";


   

   


?>


<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/moovi/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 09:33:06 GMT -->
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
        <link rel="stylesheet" href="assets/css/style.css?v=73">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css?v=6">

        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"> 

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- <link href="https://fonts.googleapis.com/css2?family=Podkova:wght@400;500;600;700&display=swap" rel="stylesheet"> -->


        <title>
            <?php echo $site_title; ?>
        </title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>
        <!-- Preloader -->
        <!-- <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area fixed-top">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="Logo" width="40px" height="40px">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light pt-0">
                        <a class="navbar-brand pl-3 pt-0 mt-0" href="index.html">
                            <img src="/assets/img/new_logo.png" alt="Logo" width="100" height="50px">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#trustarea" class="nav-link">Why Gen-E</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#courses" class="nav-link">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#register" class="nav-link">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#library" class="nav-link">Library</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#mentors" class="nav-link">Mentors</a>
                                </li> 
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->


        <!-- Banner -->
        <div class="banner">
                <div class="row mt-5 mb-5">
                    <div class="col-md-5">
                        <div class="banner-content">
                            <h1>
                                Preparing you <br> for the Universe
                            </h1>
                            <p>
                                "<?php echo $banner1subheadding ?>"
                            </p>                               
                            <input placeholder="Enter Your Email" type="text"> 
                            <a class="banner-btn" href="#">
                                <?php echo $banner1cta ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 p-0 mt-5 banner-video">
                        <video width="100%" autoplay muted loop >
                            <source src="/assets/img/render%202__20mb.mp4" type="video/ogg">
                        </video>
                    </div>
                </div>
        </div>
        <!-- End Banner -->

        <div class="footer-nav">
            <button class="footer-button btn"> 
                Get Started
            </button>
        </div>

        <img src='/assets/img/lookmore.jpg' width='100%' class='m-0 p-0'>

        <!-- Trust -->
        <section class="trust-area" id='trustarea'>
            <div class="pt-5 pb-4">
                <div class='container'>
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <img src="./assets/img/genie logo-01 2.png">
                        </div>
                        <div class="col-md-8 col-12 mt-4">
                            <div class="trust-content pt-3">
                                <ul class="nav why_us" id="myTab" role="tablist">
                                    <li class="nav-item ">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php echo $sec1_title ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Why us?</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <p class="mb-2">
                                            Education is a consummate journey of learning , unlearning ,discovery and self actualisation…
                                            & Gen-E is your ultimate wish-granting factory into the world of endless magic… a gateway into the magical journey of xyz that education and learning are all about.  An answer to your question of why the Earth rotates around its axis or how the height of Mount Everest is measured. A daunting solution to all why’s & how’s that you have been hankering after for so long. 
                                            <span id="dots">...</span><span id="more">
                                            Gen-E is your lifelong friend that stays with you, helps you, and builds you up to achieve your potential by constantly helping you asses your worsts and bests your strengths and weaknesses and providing tailor-made solutions …… And the best part is you get to choose what you wish to learn from a reservoir of all encompassing courses taught using the most innovative techniques, life changing stories and logics that will cast a spell upon you and leave your inner queries quenched for a lifetime.  
                                            </span>
                                        </p>
                                        <button class="m-0 p-0" style="color: cyan;" onclick="readMore1()" id="myBtn">Read more</button>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <p class="mb-2">
                                            We're your friends, your mentors, your solution. Gen-E is your one of a kind, immersive, experiential, invigorating and thoughtful community of learning, developed by a powerful team of enthusiastic & motivated Indian Youth brewing with innovation knowledge & creativity. 
                                            So when you Enter into the Magical Universe of Gen-E and become a part of a lifelong community of learning, experiencing and innovating we make sure you understand you’re the Alladin of your own kingdom and we, your magical partner “The Genie”. 
                                            <span id="dots2">...</span><span id="more2">
                                            Today’s world is significantly different from the past 20 centuries. We live in an extensive new age - the information age - where most complex calculations are not done by humans but by machines. We live in a highly competitive age, where hard work and intellect aren’t enough to excel. As a thumb rule, we are required to be staggeringly  proficient at a foreign language (English) / at effective communication skills (or something which includes importance of languages and communication), crackerjacks of  software technology and professional skills to stand-out. We live in a competitive age, where the education gained from schools and colleges is simply not enough to survive (focus is on survival whereas it should be on attaining excellence). We need to be the masters , wizards & ace cards of our lives . That’s the plain truth.
                                            
                                            </span>
                                        </p>
                                        <button class="p-0 m-0" style="color: cyan;" onclick="readMore2()" id="myBtn2">Read more</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Trust -->

        <!-- Blog -->
        <section class="blog-area" id="courses">
            <div class=" pt-4 pb-70">
                <div class="container">
                    <div class="section-title">
                        <!-- <span class="sub-title">Gen-E Course Universe</span>
                        <h2><?php echo $sec5_subtitle ?></h2> -->
                    </div>
                    <div class="row about-course">
                        <div class="col-md-4 col-12 ">
                            <h2 class="pb-5">
                                Foundation of English 
                            </h2>
                            <p>
                                3 Hours of Duration
                            </p>
                            <hr width="80%" align="left">
                            <p>
                                16 Amazing Lessons
                            </p>
                            <hr width="80%" align="left">
                            <p>
                                Language: Hinglish (Hindi & English both)
                            </p>
                            <hr width="80%" align="left">
                            <p>
                                Creative | Easy | Interactive
                            </p>
                            <hr width="80%" align="left">
                            <h2 class="pt-3">
                                ₹499/-
                            </h2>
                            <p>
                                limited offer
                            </p>
                            <a href="/payments.html" class="btn text-center">
                                Start Now
                            </a>
                        </div>
                        <div class="col-md-8 col-12 feature-course-video ">
                            <img src="/assets/img/divya_cover.jpg" width="100%">
                        </div>
                </div>
            </div>
        </section>
        <!-- End Blog -->

        



        <!--Register Section-->

        <div class="register" id="register">
            <div>
                <div class="container">
                    <div class="row register-section">
                        <div class="col-12 col-md-8">
                            <div class='col-9 p-0'>
                                <h5>Make a wish & start<br>
                                learning today!</h5>
                            </div>
                            <p class="pb-1">Tell us what you want to learn, Register with us for free.<br>
                            <?php echo $sec2_desc_2 ?><br>
                            </p>
                        </div>
                        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Register Now!</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group row">
                                          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                          <div class="col-sm-10">
                                            <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                          <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                          </div>
                                        </div>
                                      </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 register-button">
                            <button class="btn" data-toggle="modal" data-target="#registerModal"><?php echo $sec2_btn ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Register Section Ends-->

        <!-- All Courses -->
        <section class="all_courses ptb-100">
            <div class="section-title">
                <span class="sub-title ">Our Courses</span>
                <!-- <h2 class="small-heading" ><?php echo $sec4_subtitle ?></h2> -->
            </div>  
            <div class="container">
                <div class="owl-carousel owl-theme course-carousel pt-5 ">
                    <div class="item">
                        <div class="blog-item">
                            <a href='video.html'>
                                <div class="blog-top">
                                    <img width="100%" height="100%" src="/assets/img/subjects/eng1.jpg">
                                    </div>
                                    <div class="blog-bottom">
                                        <h3>
                                            <a href="#"><?php echo $card1_title ?></a>
                                        </h3>
                                        <p>A Life Coach , a passionate Motivational speaker and most importantly an English expert </p>
                                </div>
                            </a>
                        </div>
                    </div>                           
                    <div class="item">
                        <div class="blog-item">
                            <a href="video.html">
                                <div class="blog-top">
                                    <img width="100%" height="100%" src="/assets/img/subjects/maths.jpg">
                                </div>
                                <div class="blog-bottom">
                                    <h3>
                                        <a href="#"><?php echo $card2_title?></a>
                                    </h3>
                                    <p><?php echo $card2_desc ?></p>
                                </div>
                            </a>
                        </div>                   
                    </div>
                    <div class="item">
                        <div class="blog-item">
                            <a href="video.html">
                                <div class="blog-top">
                                    <img width="100%" height="100%" src="/assets/img/subjects/phy.jpg">
                                </div>

                                <div class="blog-bottom">
                                    <h3>
                                        <a href="#"><?php echo $card3_title ?></a>
                                    </h3>
                                    <p><?php echo $card3_desc ?></p>
                                </div>
                            </a>
                        </div>                  
                    </div>
                    <div class="item">
                        <div class="blog-item">
                            <a href='video.html'>
                                <div class="blog-top">
                                    <img width="100%" height="100%" src="/assets/img/subjects/maths.jpg">
                                </div>
                                <div class="blog-bottom">
                                    <h3>
                                        <a href="#"><?php echo $card4_title ?></a>
                                    </h3>
                                    <p><?php echo $card4_desc ?></p>
                                </div>
                            </a>
                        </div> 
                    </div>
                    <div class="item">
                        <div class="blog-item">
                            <a href="video.html">
                                <div class="blog-top">
                                    <img width="100%" height="100%" src="/assets/img/subjects/bio.jpg">
                                </div>
                                <div class="blog-bottom">
                                    <h3>
                                        <a href="#"><?php echo $card5_title ?></a>
                                    </h3>
                                    <p><?php echo $card5_desc ?></p>
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
            </div>
        </section>


        <!-- Week -->
        <section class="week-area" id="library">
            <div class=" pt-100 pb-70">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="sub-title">Best from Our Mentors</span>
                        <h2 class="small-heading"><?php echo $sec3_subtitle ?></h2>
                    </div>
                    <div class="container">
                        <div id="big" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="week-item">
                                    <iframe width="100%" height="720" src="https://www.youtube.com/embed/en72GA4xtX4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="item">
                                <div class="week-item">
                                    <iframe width="100%" height="720" src="https://www.youtube.com/embed/kSqRSTLDM6k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="item">
                                <div class="week-item">
                                    <iframe width="100%" height="720" src="https://www.youtube.com/embed/y3j_Rk78LSk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="item">
                                <div class="week-item">
                                    <iframe width="100%" height="720" src="https://www.youtube.com/embed/s6saTphvV3A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="item">
                                <div class="week-item">
                                    <iframe width="100%" height="720" src="https://www.youtube.com/embed/7GUKs9QSfu0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="item">
                                <div class="week-item">
                                    <iframe width="100%" height="720" src="https://www.youtube.com/embed/UQMqLlKkhs4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div id="thumbs" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="week-item week-video-btn">
                                    <iframe   width="100%" height="280" src="https://www.youtube.com/embed/en72GA4xtX4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="item">
                                <div class="week-item week-video-btn">
                                    <iframe   width="100%" height="280" src="https://www.youtube.com/embed/kSqRSTLDM6k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="item">
                                <div class="week-item week-video-btn">
                                    <iframe  width="100%" height="280" src="https://www.youtube.com/embed/y3j_Rk78LSk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
                                </div>
                            </div>
                            <div class="item">
                                <div class="week-item week-video-btn">
                                    <iframe   width="100%" height="280" src="https://www.youtube.com/embed/s6saTphvV3A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="item">
                                <div class="week-item week-video-btn">
                                    <iframe   width="100%" height="280" src="https://www.youtube.com/embed/7GUKs9QSfu0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="item">
                                <div class="week-item week-video-btn">
                                    <iframe   width="100%" height="280" src="https://www.youtube.com/embed/UQMqLlKkhs4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Week -->


        <!-- Team -->
        <section class="team-area ptb-100" id="mentors">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title "><?php echo $sec4_title ?></span>
                    <h2 class="small-heading" ><?php echo $sec4_subtitle ?></h2>
                </div>

                <div id="mentor1" class="modal pop" role="dialog" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content  modal-dialog-centered">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <!--  -->
                                    <div class="modal-body modal-dialog-centered modal-lg">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="/assets/img/mentors/divya%20maam-min.png">
                                                    <h1>Divya Khanna</h1>
                                                </div>
                                                <div class="col-md-7">
                                                    <p>A Life Coach , a passionate Motivational speaker and most importantly an English expert - Lets introduce to you Ms Divya Khanna who believes life is about waking up with an adrenaline rush and an incredible energy to make the world a better place . Born in a simple yet enthrallingly motivating family , life kept coming to her as a roller coaster ride with each invigorating experience to learn and unlearn form . Having started early at 16, she dreams to lift , encourage , heal and most importantly empower the students and people she comes across and leave them effervescently inspired .  
                                                        She believes each student is special beyond means and deserves to have a trailblazer in his life who holds his hand , discerningly reads beneath the lines  and exude out his ‘special element’ with a marvellous  ease . That’s what she endeavours to become each day . 
                                                        English for her is a language that connects souls than people , makes the world one and is nothing but something whose lucidity can be understood through phenomenal stories and life experiences . She believes in making the people hit back at the basics , speak through a perfect rhythm of words , expressions and body language and know the logic behind each why that perturbs the language learners . 
                                                        
                                                        “The Journey has just begun “ , she says when we ask about Gene with a blazing spark in her eyes and fire in her spunky soul . “ Reaching out to people who can’t reach us is the ultimate goal . “ she quivers with a smile on her face .</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                <div class="row">
                    <div class="col-sm-6 col-6 col-lg-3">
                        <div class="team-item">
                            <a data-toggle="modal" data-target="#mentor1">
                                <div class="team-top">
                                    <img src="/assets/img/divya_mam_01.png" alt="Team">
                                </div>

                                <div class="team-bottom">
                                    <h3 class=""><?php echo $mentor1_name ?></h3>
                                    <span class=""><?php echo $mentor1_desc ?></span>
                                </div>    
                            </a>
                        </div>
                    </div>

                    <div id="mentor2" class="modal pop" role="dialog" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="/assets/img/mentors/sunder%20sir-min.png">
                                            </div>
                                            <div class="col-md-7">
                                                <p>“Only a perfectionist can persuade you to dig deep into the subject and learn the core concepts, to lay a strong foundation." Mr.Sunder is one of those perfectionists. A Mathematician by profession and a perfectionist by passion; He is a man who follows simple living & high thinking while maintaining a high work ethic, deep intellect and dedication towards his students. He is a wizard at his subject and has proven track record of producing Top Rankers in JEE Advanced and other Entrance Examinations. At Gen-E, he is trying to use World-Class technology to reach masses, while turning his dream of creating a world, where no one misses upon Quality Education due to financial constraints. Apart from teaching he loves to invest most of his time in playing & watching cricket along with spending some quality time with his family which includes his two beautiful kids.
                                                    A simpleton with high work ethics & passion for Mathematics, Mr Sunder is a Wizard at his subject who has produced Top Ranks in JEE Advanced & other Engineering Examinations.A  perfect example of simple living & high thinking he is a person with deep intellect & dedication towards his students, he is no less than a perfectionist. He envisions a world where no one misses upon Quality Education due to financial constraints & the idea of being a part of Gen-E is using World-class technology to reach masses and provide them with affordable Education. A die-hard cricket fan, father of 2 beautiful kids he is your go-to man if it is Mathematics which bothers you.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6 col-lg-3">
                        <div class="team-item">
                            <a data-toggle="modal" data-target="#mentor2">
                                <div class="team-top">
                                    <img src="/assets/img/sunder_sir_01.png" alt="Team">
                                </div>
                                <div class="team-bottom">
                                    <h3><?php echo $mentor2_name ?></h3>
                                    <span><?php echo $mentor2_desc ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="mentor3" class="modal pop" role="dialog" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="/assets/img/mentors/aman%20sir-min.png">
                                            </div>
                                            <div class="col-md-7">
                                                <p>“Meet Mr Aman Kharta, a Mathematician, with a degree in {Degree Details} from {College Name} and our Maths Expert at Gen-E. He is someone who doesn’t like to get called as a teacher, rather prefer being a Mathematician who is just sharing his knowledge, to help the kids and the future generation understand the application of different concepts of mathematics in their day to day lives. He has taken this task of mentoring at Gen-E, to carry on his vision of removing the phobia of mathematics from the minds of the students. He has joined Gen-E to turn his vision into a reality by reaching a larger audience and helping them see mathematics as a subject which can solve real-life situations, rather than just a bunch of complex formulas. If we talk about him as a person he loves trekking, playing football & cricket, while enjoying his passion for Maths.”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6 col-lg-3">
                        <div class="team-item">
                            <a data-toggle="modal" data-target="#mentor3">
                                <div class="team-top">
                                    <img src="assets/img/aman_sir_01.png" alt="Team">
                                </div>
                                <div class="team-bottom">
                                    <h3><?php echo $mentor6_name ?></h3>
                                    <span><?php echo $mentor6_desc ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="mentor4" class="modal pop" role="dialog" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="/assets/img/mentors/aditya%20sir.png">
                                            </div>
                                            <div class="col-md-7">
                                                <p>Let us introduce you to our Biology Expert, Mr Aditya Sen Gupta, who holds a {Degree} in {Course name} from {College Name}. He is a joyous, fun-loving, adventurous person who loves nature and is thence the best-suited person to be a subject expert of Biology while excelling in fields like Zoology, Molecular Biology, etc.
                                                    He has a simple but very thoughtful aim of reaching the meritorious students and helping them understand the complicated concepts of Biology in simpler ways. And with Gen-E he is seeing his dream getting fulfilled, where students from all aspects of the society can come together, learn together and excel without any status or class differences. He wants his students to learn from Nature, the Animals the ways of tackling any problem and adapt it in their lives. Apart from being a passionate teacher, he is also a loving soul, who loves to cycle, sing, read, play badminton while maintaining a healthy lifestyle to lead a healthy life.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6 col-lg-3">
                        <div class="team-item">
                            <a data-toggle="modal" data-target="#mentor4">
                                <div class="team-top">
                                    <img src="assets/img/aditya_sir_01.png" alt="Team">
                                </div>
                                <div class="team-bottom">
                                    <h3><?php echo $mentor4_name ?></h3>
                                    <span><?php echo $mentor4_desc ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="mentor2" class="modal pop" role="dialog" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="/assets/img/mentors/sunder%20sir-min.png">
                                                <h1>Sunder</h1>
                                            </div>
                                            <div class="col-md-7">
                                                <p>“Only a perfectionist can persuade you to dig deep into the subject and learn the core concepts, to lay a strong foundation." Mr.Sunder is one of those perfectionists. A Mathematician by profession and a perfectionist by passion; He is a man who follows simple living & high thinking while maintaining a high work ethic, deep intellect and dedication towards his students. He is a wizard at his subject and has proven track record of producing Top Rankers in JEE Advanced and other Entrance Examinations. At Gen-E, he is trying to use World-Class technology to reach masses, while turning his dream of creating a world, where no one misses upon Quality Education due to financial constraints. Apart from teaching he loves to invest most of his time in playing & watching cricket along with spending some quality time with his family which includes his two beautiful kids.
                                                    A simpleton with high work ethics & passion for Mathematics, Mr Sunder is a Wizard at his subject who has produced Top Ranks in JEE Advanced & other Engineering Examinations.A  perfect example of simple living & high thinking he is a person with deep intellect & dedication towards his students, he is no less than a perfectionist. He envisions a world where no one misses upon Quality Education due to financial constraints & the idea of being a part of Gen-E is using World-class technology to reach masses and provide them with affordable Education. A die-hard cricket fan, father of 2 beautiful kids he is your go-to man if it is Mathematics which bothers you.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6 col-lg-3">
                        <div class="team-item">
                            <a data-toggle="modal" data-target="#mentor2">
                                <div class="team-top">
                                    <img src="/assets/img/sunder_sir_01.png" alt="Team">
                                </div>
                                <div class="team-bottom">
                                    <h3><?php echo $mentor2_name ?></h3>
                                    <span><?php echo $mentor2_desc ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="mentor3" class="modal pop" role="dialog" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="/assets/img/mentors/aman%20sir-min.png">
                                                <h1>Aman Kharta/h1>
                                            </div>
                                            <div class="col-md-7">
                                                <p>“Meet Mr Aman Kharta, a Mathematician, with a degree in {Degree Details} from {College Name} and our Maths Expert at Gen-E. He is someone who doesn’t like to get called as a teacher, rather prefer being a Mathematician who is just sharing his knowledge, to help the kids and the future generation understand the application of different concepts of mathematics in their day to day lives. He has taken this task of mentoring at Gen-E, to carry on his vision of removing the phobia of mathematics from the minds of the students. He has joined Gen-E to turn his vision into a reality by reaching a larger audience and helping them see mathematics as a subject which can solve real-life situations, rather than just a bunch of complex formulas. If we talk about him as a person he loves trekking, playing football & cricket, while enjoying his passion for Maths.”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6 col-lg-3">
                        <div class="team-item">
                            <a data-toggle="modal" data-target="#mentor3">
                                <div class="team-top">
                                    <img src="assets/img/aman_sir_01.png" alt="Team">
                                </div>
                                <div class="team-bottom">
                                    <h3><?php echo $mentor6_name ?></h3>
                                    <span><?php echo $mentor6_desc ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="mentor3" class="modal pop" role="dialog" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="/assets/img/mentors/aman%20sir-min.png">
                                                <h1>Aman Kharta</h1>
                                            </div>
                                            <div class="col-md-7">
                                                <p>“Meet Mr Aman Kharta, a Mathematician, with a degree in {Degree Details} from {College Name} and our Maths Expert at Gen-E. He is someone who doesn’t like to get called as a teacher, rather prefer being a Mathematician who is just sharing his knowledge, to help the kids and the future generation understand the application of different concepts of mathematics in their day to day lives. He has taken this task of mentoring at Gen-E, to carry on his vision of removing the phobia of mathematics from the minds of the students. He has joined Gen-E to turn his vision into a reality by reaching a larger audience and helping them see mathematics as a subject which can solve real-life situations, rather than just a bunch of complex formulas. If we talk about him as a person he loves trekking, playing football & cricket, while enjoying his passion for Maths.”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6 col-lg-3">
                        <div class="team-item">
                            <a data-toggle="modal" data-target="#mentor3">
                                <div class="team-top">
                                    <img src="assets/img/aman_sir_01.png" alt="Team">
                                </div>
                                <div class="team-bottom">
                                    <h3><?php echo $mentor6_name ?></h3>
                                    <span><?php echo $mentor6_desc ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team -->

        <!-- Callback Form-->



        <div>
            <section class="callback-form ">
                <div class="section-title pt-3">
                    <span class=" sub-title pt-5"><?php echo $sec6_title ?></span>
                    <h2 class="small-heading"><?php echo $sec6_subtitle ?></h2>
                </div>
        
            <div class='conatiner'>
                <form class=" pb-5">
                <div class="form-group row text-center">
                    <div class="col-sm-2">

                    </div>
                  <!-- <label for="name"  class="col-sm-2 col-form-label p-1"><?php echo $form1 ?></label> -->
                  <div class="col-sm-4">
                    <input type="text" placeholder='Name' class="form-control" id="name" >
                  </div>
                  <!-- <label for="phone"  class="col-sm-2 col-form-label p-1 pl-3"><?php echo $form2?></label> -->
                  <div class="col-sm-4">
                    <input type="text" placeholder='Number' class="form-control" id="phone">
                  </div>
                </div>
                <div class="form-group row text-center">
                    <div class="col-sm-2">

                    </div>
                  <!-- <label for="email" class="col-sm-2 col-form-label p-1"><?php echo $form3 ?></label> -->
                  <div class="col-sm-4">
                    <input type="text" placeholder='E-Mail' class="form-control" id="email" >
                  </div>
                  <!-- <label for="message" class="col-sm-2 col-form-label p-1 pl-3"><?php echo $form4 ?></label> -->
                  <div class="col-sm-4">
                    <input type="text" placeholder='Message' class="form-control" id="message">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12 p-3 text-center">
                    <button type="Submit" class="btn"><?php echo $form_btn ?></button>
                  </div>
                </div>
              </form>            
            </div>
        </section>

        </div>


        
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
                                <h3><?php echo $sec1_title ?></h3>
                                <p><?php echo $sec1_desc?></p>
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
        <script src="/assets/js/jquery-3.5.1.min.js"></script>
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

<!-- Mirrored from templates.envytheme.com/moovi/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 09:33:29 GMT -->
</html>