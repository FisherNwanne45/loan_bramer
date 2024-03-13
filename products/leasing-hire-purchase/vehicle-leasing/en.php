<?php
include('../../../resources/config.php');
        $result = $conn->query("SELECT * FROM site");
        if(!$result->num_rows > 0){ echo '<h2 style="text-align:center;">No Data Found</h2>'; }
        while($row = $result->fetch_assoc())
        {
      ?>
<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from www/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 03:20:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <meta charset="UTF-8">

    <link rel="icon" type="image/png" href="../../../frontend/img/favi/fav-icon.ico" />



   

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="<?php echo $row['name']; ?> is a leading finance company in <?php echo $row['country']; ?> whose purpose is uplifting the lives of people with simple act of love.">

<meta name="title" content="">

<meta http-equiv="X-UA-Compatible" content="IE=edge">







   

    

    

    

   

    

    <meta name="keywords" content="leading finance company in <?php echo $row['country']; ?>, fixed deposits, vehicle leasing, buy a vehicle, get a loan, fixed deposit rates">

    

  


    <title>Our Solutions - <?php echo $row['name']; ?></title>



    



    <meta property="og:title" content="<?php echo $row['name']; ?>" />

    <meta property="og:type" content="website" />

    <meta property="og:site_name" content="<?php echo $row['name']; ?>" />

    <meta property="og:description" content="<?php echo $row['name']; ?> is a leading finance company in <?php echo $row['country']; ?> whose purpose is uplifting the lives of people with simple act of love." />

    <meta property="og:url" content="../../../index.php" />

    <meta property="og:image" content="../../../frontend/img/og-cc.png" />

    <meta property="og:image:type" content="image/png" />

    <meta property="og:image:width" content="1200" />

    <meta property="og:image:height" content="630" />

    <meta name="twitter:card" content="<?php echo $row['name']; ?>">
    <meta name="twitter:site" content="<?php echo $row['name']; ?>">
    <meta name="twitter:title" content="<?php echo $row['name']; ?>">
    <meta name="twitter:description" content="<?php echo $row['name']; ?> is a leading finance company in <?php echo $row['country']; ?> whose purpose is uplifting the lives of people with simple act of love.">
    <meta name="twitter:creator" content="<?php echo $row['name']; ?>">
    <meta name="twitter:image" content="../../../frontend/img/og-cc.png">



    <link rel="stylesheet" href="../../../frontend/css/bootstrap.min.css">



<link rel="stylesheet" href="../../../frontend/css/material-design-iconic-font.min.css">



<link href="../../../frontend/css/google_font.css" rel="stylesheet">



<link rel="stylesheet" href="../../../frontend/css/owl.carousel.min.css" crossorigin="anonymous" />



<link rel="stylesheet" href="../../../frontend/css/aos.css" />




<script src="../../../frontend/js/jquery-3.6.0.js" crossorigin="anonymous"></script>


<script src="../../../frontend/js/owl.carousel.min.js" crossorigin="anonymous">



</script>



<script src="../../../frontend/js/fontawasome.js" crossorigin="anonymous"></script>







<link rel="stylesheet" href="../../../frontend/css/style4818.css?v=79">



<link rel="stylesheet" href="../../../frontend/css/responsive8e0e.css?v=8">







<script src="../../../frontend/js/recaptcha_api.js"></script>

    
    

    
</head>

<body>  

     
    
    
   

    
    <nav id="header" class="navbar navbar-expand-lg navbar-light fixed-top bg-light shadow">







    <div class="container">







      <a class="logo-img" aria-current="page" href="../../../en.php"><img src="../../../frontend/img/english_logo.png" alt="logo"></a>





<!--

        <button class="navbar-toggler collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">

            <span class="navbar-toggler-icon"></span>

            <div class="close-icon py-1">✖</div>

        </button>

-->

        

        

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">

      <span class="navbar-toggler-icon"></span>

    </button>





<!--

      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">



        <div class="hamburger-toggle">

            <div class="hamburger">

            <span></span>

            <span></span>

            <span></span>

            </div>

        </div>

      </button>

-->

        

      <div class=" main-nav w-100">







      <div class=" d-flex justify-content-end top-bar align-items-center">







        <div class="top_item contactDetails">







          <a href="tel:<?php echo $row['phone']; ?>">Call Us : <?php echo $row['phone']; ?></a>







          <a href="mailTo:<?php echo $row['email']; ?>">Email : <span  ><?php echo $row['email']; ?></span></a>







        </div>







        <!-- <div class="top_item">







          <a class="translate-links" id="translate-english" href="#">English</a>|







          <a class="translate-links" id="translate-sinhala" href="#">සිංහල</a>|







          <a class="translate-links" id="translate-tamil" href="#">தமிழ்</a>







        </div> -->







        <div class="top_item search-module">







            <form class="d-flex" action="search-result/en" method="get">



              



              <div class="input-group search-main">







                  <input class="form-control border-0 mr-2" value="" required minlength="4" name="keywords" type="search" placeholder="Search" aria-label="Search">







                  <button class="btn btn-primary " type="submit"><i class="fas fa-search"></i></button>







              </div>







          </form>







        </div>







       <!--  <div class="top_item">







        







             







              <a class="headr-ctr" href="../../../contact-us/en">Get a Quote</a>







            







            </div> -->



        <div class="top_item lang-switcher d-flex">

          <a class="translate-links"   href="https://<?php echo $row['apply']; ?>">New Application </a>
          <a class="translate-links"   href="../../../track.php">Track Status</a> 

        </div>



        <!--<div class="top_item login-button">-->

        <!--  <a class="onlineBanking-links" href="#"><i class="fas fa-user-lock"></i> Login <i class="fas fa-caret-down"></i></a>-->
        <!--  <ul class="login-dropdown">-->
        <!--    <li><a target="_blank" href="online-banking-web/digital-online"><img src="https://xiteb.biz/projects/commercial-c-v-12/public/uploads/upby_rc/ccl-digital-banking.svg" alt="CCL Digital Banking"> CCL Digital Banking</a></li>-->
        <!--    <li><a href="#"><img src="https://xiteb.biz/projects/commercial-c-v-12/public/uploads/upby_rc/download-ccl-wallet.svg" alt="Download CCL Wallet"> Download CCL Wallet</a></li>-->
        <!--    <li><a href="#"><img src="https://xiteb.biz/projects/commercial-c-v-12/public/uploads/upby_rc/online-mobile-loan.svg" alt="Online Mobile Loan"> Online Mobile Loan</a></li>-->
        <!--    <li><a href="#"><img src="https://xiteb.biz/projects/commercial-c-v-12/public/uploads/upby_rc/ccl-sales-portal.svg" alt="CCL Sale's Portal"> CCL Sale's Portal</a></li>-->
        <!--  </ul>-->

        <!--</div>-->







       















      </div>







      <div class="collapse navbar-collapse justify-content-end" id="navbar-content">















        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">







          <li class="nav-item">







            <a class="nav-link   " href="../../../en.php">HOME</a>







          </li>







          







          <li class="nav-item">







            <a class="nav-link " href="../../../about-us/profile/en.php">ABOUT</a>







          </li>







          <li class="nav-item dropdown dropdown-mega position-static">







            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">YOUR NEEDS</a>







            <div class="dropdown-menu shadow">







              <div class="mega-content">







                <div class="container-fluid">







                  <div class="row menu-y-need">





<!--



                    <div class="col-12 col-sm-4 col-md-3 py-4">







                      <h5><?php echo $row['name']; ?>.</h5>







                      <p><?php echo $row['name']; ?> was established on the 4th of October 1982 following its incorporation under the Companies Act No. 17 of 1982 as a Private Limited Liability Company in <?php echo $row['country']; ?>’s hill capital, Kandy, as <?php echo $row['name']; ?> (Pvt) Ltd. Subsequently, it was registered as a Public Limited Liability Company under the provisions of the above Act on the 16th of December 1989 as <?php echo $row['name']; ?> Ltd.</p>







                    </div>



-->





                        






                          







                       <div class="col-sm-12 py-lg-4 py-0">







                          <div class="row"> 







                          






                          <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                            <div class="row sub-main mb-3">







                              <div class="col-3 p-0 px-md-2">







                                <img class="w-100" src="../../../uploads/your_needs_en/YourNeedIcon1_1645451076.svg" alt="yourNeeds">







                              </div>







                              <div class="col-9">







                                <h5>Need A Leasing?</h5>







                                <a class="sub-links  " href="../../../your-needs/need-a-leasing/en.php">View</a>







                                







                              </div>







                            </div>







                          </div>







                          






                          <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                            <div class="row sub-main mb-3">







                              <div class="col-3 p-0 px-md-2">







                                <img class="w-100" src="../../../uploads/your_needs_en/YourNeedIcon2_1652933172.svg" alt="yourNeeds">







                              </div>







                              <div class="col-9">







                                <h5>Need Urgent Cash?</h5>







                                <a class="sub-links  " href="../../../your-needs/need-urgent-cash/en.php">View</a>







                                







                              </div>







                            </div>







                          </div>







                          






                          <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                            <div class="row sub-main mb-3">







                              <div class="col-3 p-0 px-md-2">







                                <img class="w-100" src="../../../uploads/your_needs_en/YourNeedIcon3_1645451215.svg" alt="yourNeeds">







                              </div>







                              <div class="col-9">







                                <h5>Saving For Future?</h5>







                                <a class="sub-links  " href="../../../your-needs/saving-for-future/en.php">View</a>







                                







                              </div>







                            </div>







                          </div>







                          






                          <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                            <div class="row sub-main mb-3">







                              <div class="col-3 p-0 px-md-2">







                                <img class="w-100" src="../../../uploads/your_needs_en/YourNeedIcon4_1645451259.svg" alt="yourNeeds">







                              </div>







                              <div class="col-9">







                                <h5>Business Loan And More?</h5>







                                <a class="sub-links  " href="../../../your-needs/business-loan-and-more/en.php">View</a>







                                







                              </div>







                            </div>







                          </div>







                          






                          </div>







                      </div>















                  </div>







                </div>







              </div>







            </div>







          </li>















          <li class="nav-item dropdown dropdown-mega position-static">







            <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">OUR SOLUTIONS</a>







            <div class="dropdown-menu shadow">







              <div class="mega-content">







                <div class="container-fluid">







                  <div class="row menu-y-need">





<!--



                    <div class="col-12 col-sm-4 col-md-3 py-4">







                      <h5><?php echo $row['name']; ?>.</h5>







                      <p><?php echo $row['name']; ?> was established on the 4th of October 1982 following its incorporation under the Companies Act No. 17 of 1982 as a Private Limited Liability Company in <?php echo $row['country']; ?>’s hill capital, Kandy, as <?php echo $row['name']; ?> (Pvt) Ltd. Subsequently, it was registered as a Public Limited Liability Company under the provisions of the above Act on the 16th of December 1989 as <?php echo $row['name']; ?> Ltd.</p>







                    </div>



-->





                      






                        







<!--<div class="col-sm-8 col-md-9 ">-->



                  <div class="col-sm-12 py-lg-4 py-0">







                    <div class="row"> 







                      






                      <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                        <div class="row sub-main mb-3">







                          <div class="col-3 p-0 px-md-2">







                            <img class="w-100" src="../../../uploads/main_solution_icon_en/MainSolution1_1645451357.svg" alt="solutions">







                          </div>







                          <div class="col-9">







                            <h5>Deposits</h5>







                            






                              <a class="sub-links " href="../../../products/deposits/fixed-deposit/en.php">Fixed Deposit</a>







                            






                            







                          </div>







                        </div>







                      </div>







                      






                      <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                        <div class="row sub-main mb-3">







                          <div class="col-3 p-0 px-md-2">







                            <img class="w-100" src="../../../uploads/main_solution_icon_en/MainSolution2_1645451419.svg" alt="solutions">







                          </div>







                          <div class="col-9">







                            <h5>Leasing &amp; Hire Purchase</h5>







                            






                              <a class="sub-links " href="../../../products/leasing-hire-purchase/auto-loan/en.php">Auto Loan</a>







                            




 




                            






                              <a class="sub-links " href="../../../products/leasing-hire-purchase/vehicle-leasing/en.php">Vehicle Leasing</a>







                            






                            







                          </div>







                        </div>







                      </div>







                      






                      <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                        <div class="row sub-main mb-3">







                          <div class="col-3 p-0 px-md-2">







                            <img class="w-100" src="../../../uploads/main_solution_icon_en/MainSolution3_1645451461.svg" alt="solutions">







                          </div>







                          <div class="col-9">







                            <h5>Loan</h5>







                            






                              <a class="sub-links " href="../../../products/loan/educational-loans/en.php">Educational Loans</a>







                            






                              <a class="sub-links " href="../../../products/loan/gold-loan/en.php">Gold Loan</a>







                            






                            







                          </div>







                        </div>







                      </div>







                      






                      <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                        <div class="row sub-main mb-3">







                          <div class="col-3 p-0 px-md-2">







                            <img class="w-100" src="../../../uploads/main_solution_icon_en/MainSolution4_1645451490.svg" alt="solutions">







                          </div>







                          <div class="col-9">







                            <h5>Microfinance</h5>







                            






                              <a class="sub-links " href="../../../products/microfinance/micro-loan/en.php">Micro Loan</a>







                            






                              <a class="sub-links " href="../../../products/microfinance/sme-loan/en.php">SME Loan</a>







                            






                              <a class="sub-links " href="../../../products/microfinance/consumer-loan/en.php">Consumer Loan</a>







                            






                            







                          </div>







                        </div>







                      </div>







                      






                      <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                        <div class="row sub-main mb-3">







                          <div class="col-3 p-0 px-md-2">







                            <img class="w-100" src="../../../uploads/main_solution_icon_en/MainSolution5_1645451523.svg" alt="solutions">







                          </div>







                          <div class="col-9">







                            <h5>Revolving Business Loan</h5>







                            






                              <a class="sub-links " href="../../../products/revolving-business-loan/revolving-business-loan/en.php">Revolving Business Loan</a>







                            






                            







                          </div>







                        </div>







                      </div>







                      






                    </div>



                  </div>







                  </div>







                </div>







              </div>







            </div>







          </li>























          <li class="nav-item">







            






            <a class="nav-link " href="../../../help/downloads/annual-reports/en.php">TESTIMONIALS</a>







          </li>






 







         
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link " href="../../../communicated/en">Communicate</a>-->
          <!--</li>-->


         



          <li class="nav-item">







            <a class="nav-link " href="../../../contact-us/en.php">CONTACT US</a>







          </li>























          







          







        </ul>







        







      </div>







    </div>







    </div>







  </nav>























 
    


<div class="main-header-img">

    <img class="w-100" src="../../../uploads/sub_solution_en/SubSolution14_1650449636.jpg" alt="Breadcrumb Banner">

    <div class="inner-topic">

        <h3>Vehicle Leasing </h3>

        <div class="bredcrumb">

            <a href="../../../en.php">Home</a><i class="fas fa-chevron-right"></i> <a href="#">Our Solutions</a><i class="fas fa-chevron-right"></i>

            <a href="en.php">Vehicle Leasing</a>

        </div>



    </div>

    <div class="black-strip"></div>

</div>



<div class="abt-single mt-4">

    <div class="container">

        <h2 class="sub-page-topic py-3">Vehicle Leasing</h2>

        <div class="row">

            <p>The decision to buy a vehicle is one of the most important investment decisions you make in your life. That is why you need to choose a financial institution that you can trust to fulfil your leasing needs.<br />
<br />
<?php echo $row['name']; ?> offers the most convenient vehicle leasing solutions for you. We ensure that you receive the most efficient service at the shortest time possible with the minimum documentation work involved.<br />
<br />
If you are acquiring a brand new vehicle or a used vehicle, our leasing facilities will offer you the best rates in <?php echo $row['country']; ?>. Whenever you are ready to buy a three-wheeler, a motorbike or a four-wheel automobile, look no further as the <?php echo $row['name']; ?> is prepared to support you with a hassle free service.</p>

        </div>

    </div>

</div>



<!-- section tab -->

<div class="py-4">

    <div class="container custom-tabs-m">

        <ul class="nav nav-tabs" id="myTab" role="tablist">

            

            
                
                <li class="nav-item" role="presentation">

                    <button class="nav-link  active  px-5" id="benefits-tab" data-bs-toggle="tab" data-bs-target="#benefits" type="button" role="tab" aria-controls="benefits" >Benefits</button>

                </li>

                
            
                
                <li class="nav-item" role="presentation">

                    <button class="nav-link  px-5" id="eligibility-tab" data-bs-toggle="tab" data-bs-target="#eligibility" type="button" role="tab" aria-controls="eligibility" >Eligibility</button>

                </li>

                
            
      

        </ul>



        <!-- description -->

        <div class="tab-content" id="myTabContent">

            
                
                    <div class="tab-pane fade  show active   py-4" id="benefits" role="tabpanel" aria-labelledby="benefits-tab">

                        <ul><li style="line-height: 1.8; margin-top: 12pt; margin-bottom: 12pt;"><span style="font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;">Ability to go for flexible tenors.</span></li><li style="line-height: 1.8; margin-top: 12pt; margin-bottom: 12pt;"><span style="font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;">Reasonable tariffs and charges in the market.</span></li><li style="line-height: 1.8; margin-top: 12pt; margin-bottom: 12pt;"><span style="font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;">Repayment facility at any <?php echo $row['name']; ?> branch.</span></li><li style="line-height: 1.8; margin-top: 12pt; margin-bottom: 12pt;"><span style="font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;">Fast approval and efficient service.</span></li></ul>

                    </div>

                
            
                
                    <div class="tab-pane fade   py-4" id="eligibility" role="tabpanel" aria-labelledby="eligibility-tab">

                        <ul><li style="line-height: 1.8; margin-top: 12pt; margin-bottom: 12pt;"><span style="font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;">Must be a <?php echo $row['country']; ?> citizen between the age limit 18 - 60 years.</span></li><li style="line-height: 1.8; margin-top: 12pt; margin-bottom: 12pt;"><span style="font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline;">Having provable regular monthly income.</span></li></ul>

                    </div>

                
                

        

        </div>

        

        <div class="more_about">
        
    </div>



    </div>

</div>



 

      <!-- ======= Footer ======= -->

<footer id="footer">



    

    <div class="footer-top">

      <div class="container">

        <div class="row">

    

          <div class="col-lg-3 col-md-12 footer-contact">

            <div class="w-100 text-center">

              <a class="log_a d-block" href="../../../en.php"><img class="logo" src="../../../frontend/img/black_english_logo.png" alt="logo"></a>

            </div>

            <p class="pt-2">

              <?php echo $row['name']; ?>, a well-established brand in the Financial Services Industry of <?php echo $row['country']; ?>, has been one of the most sorted out financial service providers for the past decade.

              

            </p><div class="row social-media">

          <div class="col-md-12 socil-links text-center">

            <div class="socil-links-m align-items-center">

                <p class="s-mdeia">Join Our Community</p>

                <div class="socil-icons">

                 <!--  <a target="_blank" href="#https://www.facebook.com/comcreditlk/"><i class="fab fa-facebook-f"></i></a>

                  <a target="_blank" href="#https://www.instagram.com/commercialcredit_/"><i class="fab fa-instagram"></i></a>

                 <a target="_blank" href="#https://lk.linkedin.com/company/commercial-credit-limited"><i class="fab fa-linkedin-in"></i></a>

                  <a target="_blank" href="#https://youtube.com/channel/UC6Rw7R8REmTE0p3OTXAfyCg"><i class="fab fa-youtube"></i></a>

                  <!-- <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>

                  <a target="_blank" href="#"><i class="fab fa-whatsapp"></i></a> -->

  

  

                </div>

              </div>

              

          </div>

        </div>

        

          </div>

    

          <div class="col-lg-3 col-md-4 col-sm-6 footer-links useful">

            <h4>Useful Links</h4>

            <ul>

              <li><i class="fas fa-chevron-right"></i> <a href="../../../en.php">Home</a></li>

              <li><i class="fas fa-chevron-right"></i> <a href="../../../about-us/profile/en.php">About</a></li>

              
              
              

                  <li><i class="fas fa-chevron-right"></i> <a href="../../../about-us/careers/en.php">Careers</a></li>

                    

              <li><i class="fas fa-chevron-right"></i> <a href="../../../terms-and-condtion/en.php">Terms of Services</a></li>

              <li><i class="fas fa-chevron-right"></i> <a href="../../../privacy-policy/en.php">Privacy Policy</a></li>

            </ul>

          </div>

    

          <div class="col-lg-3 col-md-4 col-sm-6 footer-links solu">

            <h4>Solutions</h4>

            <ul>

              
                
                

                
                  <li><i class="fas fa-chevron-right"></i> <a href="../../../products/deposits/fixed-deposit/en.php">Fixed Deposit</a></li> 

                
                
              
                
                

                
                  <li><i class="fas fa-chevron-right"></i> <a href="../../../products/leasing-hire-purchase/auto-loan/en.php">Auto Loan</a></li> 

                
                
                

                
                
                

                
                
              
                
                

                
                  <li><i class="fas fa-chevron-right"></i> <a href="../../../products/loan/educational-loans/en.php">Educational Loans</a></li> 

                
                
                

                
                
              
                
                

                
                  <li><i class="fas fa-chevron-right"></i> <a href="../../../products/microfinance/micro-loan/en.php">Micro Loan</a></li> 

                
                
                

                
                
                

                
                
              
                
                

                
                  <li><i class="fas fa-chevron-right"></i> <a href="../../../products/revolving-business-loan/revolving-business-loan/en.php">Revolving Business Loan</a></li> 

                
                
              
            </ul>

          </div>

    

          <div class="col-lg-3 col-md-4 footer-links contact">

            <h4>Contacts </h4>

            <ul>

               <li><i class="fas fa-phone-alt"></i> <a href="tel:<?php echo $row['phone']; ?>"> <?php echo $row['phone']; ?> </a></li>



                <li><i class="far fa-envelope-open"></i><a href="mailTo:<?php echo $row['email']; ?>"><span><?php echo $row['email']; ?></span></a></li>

              <!--<li><i class="fas fa-map-marker-alt"></i> <a href="#"><?php echo $row['name']; ?>-->

              <!--  No.165 Kynsey Rd, Borella,<br>-->

              <!--  Colombo 08,<?php echo $row['country']; ?> <br></a></li>-->

                <li><i class="fas fa-map-marker-alt"></i> <a target="_blank" href="#">

                  <?php echo $row['name']; ?><br />
 
<?php echo $row['addr']; ?>, <?php echo $row['country']; ?>

                  

              </a></li>

             

            </ul>

            <!-- <p>

              <strong><i class="fas fa-mobile-alt"></i></strong> <?php echo $row['phone']; ?><br>

              

              <strong><i class="far fa-envelope-open"></i></strong> <?php echo $row['email']; ?><br>

              <strong><i class="fas fa-map-marker-alt"></i></strong><?php echo $row['name']; ?>

              No.165 Kynsey Rd, Borella,<br>

              Colombo 08,<?php echo $row['country']; ?> <br>

             

             </p> -->

            <!-- <div class="social-links mt-3">

              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>

              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>

              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>

              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>

            </div> -->

              

            <br>

            <form class="subscriptionForm" id="subscriptionForm" action="contact/subscribe" method="POST" autocomplete="off"> 

            <input type="hidden" name="_token" value=" ">
            <div class="input-group">

                <input type="email" required name="subscribe_email" value="" class="form-control" placeholder="Your E-mail" aria-label="Your Email" aria-describedby="button-addon2">

                <div class="input-group-append">

                  <button class="btn footer-btn" type="submit" id="button-addon2"> Subscribe </button>

                </div>

              </div>

              

              
            </form>

          </div>

    

        </div>

          <div class="col-md-12 disclaimer">

            <small class="d-block text-center text-light"><?php echo $row['footer']; ?></small>

          </div>

  

        <!-- <div class="row social-media">

          <div class="col-md-12 socil-links text-center">

            <div class="socil-links-m align-items-center">

                <p class="s-mdeia">Join Our Community</p>

                <div class="socil-icons">

                  <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>

                  <a target="_blank" href="#"><i class="fab fa-whatsapp"></i></a>

                  <a target="_blank" href="https://www.youtube.com/user/CommercialCreditSL"><i class="fab fa-youtube"></i></a>

                  <a target="_blank" href="https://www.facebook.com/comcreditlk/"><i class="fab fa-facebook-f"></i></a>

                  <a target="_blank" href="#"><i class="fab fa-skype"></i></a>

                 <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>

  

  

                </div>

              </div>

              

          </div>

        </div> -->

  

      </div>

      

    </div>

    <div class="botombar text-white">

    <div class="container py-2"><div class="row">

      <div class="col-md-8 copyright">

       

        &copy; Copyright <strong><span><?php echo $row['name']; ?></span></strong>. All Rights Reserved

      </div>

      <div class="col-md-4 credits">

      

         <!--<a href="#">Privacy Policy </a> | <a href="#">Terms & Condition </a>-->

         



         <a href="../../../privacy-policy/en.php">Privacy Policy </a> | <a href="../../../terms-and-condtion/en.php">Terms of Services </a>

          
      </div>

    </div></div>

    </div>

    </footer><!-- End Footer -->

    <div id="preloader"></div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- partial -->

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../../frontend/js/bootstrap.bundle.min.js"></script>

    <script  src="../../../frontend/js/script.js"></script>

    <script>

        var url = window.location.href;

        var subUrl = url.substring(0,url.lastIndexOf("index.php"));



        document.getElementById("translate-english").href = subUrl+'/en';

        document.getElementById("translate-sinhala").href = subUrl+'/si';

        document.getElementById("translate-tamil").href = subUrl+'/ta';

        



    </script>




    <script src="../../../frontend/js/aos.js"></script>
  <script>
    AOS.init();
  </script>
    
<script>

    $(document).ready(function () {

      $("#solutio-slider").owlCarousel({

        items: 3,

        navigation: true,

        navigationText: ["", ""],

        autoPlay: true

      });

    });

    </script>

    <script>

      $(document).ready(function() {



// Gets the video src from the data-src on each button



var $videoSrc;  

$('.abt_img').click(function() {

    $videoSrc = $(this).data( "src" );

});

console.log($videoSrc);



  

  

// when the modal is opened autoplay it  

$('#ytModal').on('shown.bs.modal', function (e) {

    

// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get

// $("#video").attr('src',$videoSrc + "&modestbranding=1&showinfo=0" );
$("#video").attr('src',$videoSrc + "?autoplay=1&mute=1&modestbranding=1&showinfo=0&rel=0&origin=http://cclk.lk" ); 

})

  





// stop playing the youtube video when I close the modal

$('#ytModal').on('hide.bs.modal', function (e) {

    // a poor man's stop video

    $("#video").attr('src',$videoSrc); 

}) 

    

    





  

  

// document ready  

});

</script> 


   
</body>


<!-- Mirrored from www/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 03:20:13 GMT -->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/<?php echo $row['tawk']; ?>';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script--></body>

<!-- Mirrored from <?php echo $row['url']; ?>/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Sep 2021 16:26:18 GMT -->
</html>
<?php } ?>