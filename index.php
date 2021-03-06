<?php require_once 'layout/header.php' ?>
<style>
    #myVideo {
  position: fixed;
  margin: 0;
  min-width: 1350px;
  min-height: 400px;
}

.project-img img{
        height: 400px;
    }

@media (max-width: 700px){
    #myVideo {
  position: fixed;
  margin: 0;
  min-width: auto;
  min-height: auto;
}
}
</style>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="">

                <video id="myVideo" autoplay loop muted>
                    <source src="assets/img/hero/vid.mp4">
                </video>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s"></span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">advanced</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Construction</h2>
                                        <h2>Construction</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                       <span><a href="services.php">Our Services</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s"></span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">advanced</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Construction</h2>
                                        <h2>Construction</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="services.php">Our Services</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Services Area Start -->
        <div class="services-area1 section-padding30">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-55">
                            <div class="front-text">
                                <h2 class="">Our Services</h2>
                            </div>
                            <span class="back-text">Services</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/s1.jpeg" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="services_details.php?pef">Pipeline Engineering and fabrication</a></h4>
                                <a href="services_details.php?pef" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/s2.jpeg" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="services_details.php?smwf">Sheet metal working and fabrication.</a></h4>
                                <a href="services_details.php?smwf" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/s3.jpeg" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="services_details.php?qplws">Quantity and Production Line Welding Services</a></h4>
                                <a href="services_details.php?qplws" class="more-btn">Read More <i class="ti-plus"></i></a>
                            </div>
                            <div class="service-icon">
                                <img src="assets/img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!-- About Area Start -->
        <section class="support-company-area fix pt-10">
            <div class="support-wrapper align-items-end">
                <div class="left-content">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">Who we are</h2>
                        </div>
                        <span class="back-text">About us</span>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">SEIAG provides high quality commercial, residential, industrial and marine construction etc</p>
                        <p>services and maintenance of both macro, micro environment, physical and biotic environment.</p>
                        <a href="about.php" class="btn red-btn2">read more</a>
                    </div>
                </div>
                <div class="right-content">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/safe_in.png" alt="">
                    </div>
                    <div class="support-img-cap text-center">
                        <span>1959</span>
                        <p>Since</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!-- Project Area Start -->
        <section class="project-area  section-padding30">
            <div class="container">
               <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3">
                                <div class="front-text">
                                    <h2 class="">Our Projects</h2>
                                </div>
                                <span class="back-text">Gallery</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="properties__button">
                                <!--Nav Button  -->
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"> recent </a>
                                        <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Intorior</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Recent</a>
                                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Big building</a>
                                        <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Park</a> -->
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/p1.jpeg" alt="Tunnel of la linea Colombia" >
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="#">Tunnel of la linea Cl</a></h4>
                                                    <!-- <h4><a href="#"></a></h4> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/p2.jpeg" alt="IESS south hospital Quito">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="#">IESS south hospital Quito</a></h4>
                                                    <h4><a href="#"></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/p3.jpeg" alt="Jonava Bridge LTH">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="#">Jonava Bridge LTH</a></h4>
                                                    <h4><a href="#"></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/p4.jpeg" alt="Railway bridge and Trestles WC">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="#">Railway bridge and Trestles WC</a></h4>
                                                    <h4><a href="#"></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/p5.jpg" alt="Delray Beach Boat Ramp">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="#">Delray Beach Boat Ramp</a></h4>
                                                    <h4><a href="#"></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/p6.jpeg" alt="Lemar Shopping mall Usküdar">
                                                </div>
                                                <div class="project-cap">
                                                   <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="#">Lemar Shopping mall Usküdar</a></h4>
                                                    <h4><a href="#"></a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card TWO -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card THREE -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card FUR -->
                            <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card FIVE -->
                            <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.html" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.html">Floride Chemicals</a></h4>
                                                    <h4><a href="project_details.html">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Area End -->

        <!-- CountDown Area Start -->
        <div class="count-area">
            <div class="container">
                <div class="count-wrapper count-bg" data-background="assets/img/gallery/section-bg3.jpg">
                    <div class="row justify-content-center" >
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter">34</span>
                                    </div>
                                    <div class="count-text">
                                        <p>Machinery</p>
                                        <h5>Tools</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter">76</span>
                                    </div>
                                    <div class="count-text">
                                        <p>Machinery</p>
                                        <h5>Tools</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter">08</span>
                                    </div>
                                    <div class="count-text">
                                        <p>Machinery</p>
                                        <h5>Tools</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CountDown Area End -->
        <!-- Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle5 mb-50">
                            <div class="front-text">
                                <h2 class="">Our team</h2>
                            </div>
                            <span class="back-text">experts</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single Tem -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/team/ceo1.jpg" alt="" height="350">
                            </div>
                            <div class="team-caption">
                                <span>MD/CEO/Team leader</span>
                                <h3>LOUIS SCHULZE</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="//s2.q4cdn.com/231488844/files/images/management/2019/mitchell_tom_2019-4-sm.jpg" alt="" height="350">
                            </div>
                            <div class="team-caption">
                                <span>Project Manager</span>
                                <h3>Ethan Welch</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/team/WhatsApp Image 2020-08-16 at 1.40.03 PM (1).jpeg" alt="" height="350">
                            </div>
                            <div class="team-caption">
                                <span>Project Consultant</span>
                                <h3>Fred Taylor</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/team/WhatsApp Image 2020-08-19 at 4.24.59 AM.jpeg" alt="" height="350">
                            </div>
                            <div class="team-caption">
                                <span>Structural Engineer</span>
                                <h3>Li Qiang</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="//s2.q4cdn.com/231488844/files/images/management/2016/keeler_glenn46.jpg" alt="" height="350">
                            </div>
                            <div class="team-caption">
                                <span>Public Relations Officer</span>
                                <h3>Ryan Hammer</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        <!-- Testimonial Start -->
        <div class="testimonial-area t-bg testimonial-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle6 mb-50">
                            <div class="front-text">
                                <h2 class="">Reviews</h2>
                            </div>
                            <span class="back-text">Feedback</span>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-xl-10 col-lg-11 col-md-10 offset-xl-1">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="86px" height="63px">
                                        <path fill-rule="evenodd"  stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)"
                                        d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/>
                                        </svg>
                                        <p>
                                        What Do You Like About Working There?
                                        <br>
                                        I loved the culture and my role...for 16 years, over many countries and business lines
                                        </p>
                                        <p>
                                        What DON'T You Like About Working There?
                                        <br>
                                        No matter how "GOOD" you are. No matter how many promotions you get. You ARE EXPENDABLE. Unless you are the one making the decisions you WILL eventually be Laid off! Let me repeat that..YOU WILL BE LAID OFF.
                                        What Are Your Favorite Benefits/Perks?
                                        travel
                                        </p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                       <div class="founder-text">
                                            <span>Carlos Hernandez</span>
                                            <p></p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="86px" height="63px">
                                        <path fill-rule="evenodd"  stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)"
                                        d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/>
                                        </svg>
                                        <p>
                                        What Do You Like About Working There?
                                        <br>
                                        I worked as a Construction Engineer, so I enjoyed the operations side of the job.
                                        </p>
                                        <p>
                                        What DON'T You Like About Working There?
                                        <br>
                                        Short breaks
                                        </p>
                                        <p>
                                        What Are Your Favorite Benefits/Perks?
                                        <br>
                                        401k and bonus when job ends or the employee gets laid off
                                        </p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                       <div class="founder-text">
                                            <span>Alan Boeckmann</span>
                                            <p></p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->


<?php require_once 'layout/footer.php' ?>