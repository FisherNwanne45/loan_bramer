<?php
include('../resources/config.php');
        $result = $conn->query("SELECT * FROM site");
        if(!$result->num_rows > 0){ echo '<h2 style="text-align:center;">No Data Found</h2>'; }
        while($row = $result->fetch_assoc())
        {
      ?>
<!DOCTYPE html>

<html lang="en">


    <!-- Mirrored from www/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 03:20:13 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <head>

        <meta charset="UTF-8">

        <link rel="icon" type="image/png" href="../frontend/img/favi/fav-icon.ico" />





        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description"
            content="<?php echo $row['name']; ?> is a leading finance company in <?php echo $row['country']; ?> whose purpose is uplifting the lives of people with simple act of love.">

        <meta name="title" content="">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">



















        <meta name="keywords"
            content="leading finance company in <?php echo $row['country']; ?>, fixed deposits, vehicle leasing, buy a vehicle, get a loan, fixed deposit rates">






        <title>Terms and Conditions - <?php echo $row['name']; ?></title>







        <meta property="og:title" content="<?php echo $row['name']; ?>" />

        <meta property="og:type" content="website" />

        <meta property="og:site_name" content="<?php echo $row['name']; ?>" />

        <meta property="og:description"
            content="<?php echo $row['name']; ?> is a leading finance company in <?php echo $row['country']; ?> whose purpose is uplifting the lives of people with simple act of love." />

        <meta property="og:url" content="../index.php" />

        <meta property="og:image" content="../frontend/img/og-cc.png" />

        <meta property="og:image:type" content="image/png" />

        <meta property="og:image:width" content="1200" />

        <meta property="og:image:height" content="630" />

        <meta name="twitter:card" content="<?php echo $row['name']; ?>">
        <meta name="twitter:site" content="<?php echo $row['name']; ?>">
        <meta name="twitter:title" content="<?php echo $row['name']; ?>">
        <meta name="twitter:description"
            content="<?php echo $row['name']; ?> is a leading finance company in <?php echo $row['country']; ?> whose purpose is uplifting the lives of people with simple act of love.">
        <meta name="twitter:creator" content="<?php echo $row['name']; ?>">
        <meta name="twitter:image" content="../frontend/img/og-cc.png">



        <link rel="stylesheet" href="../frontend/css/bootstrap.min.css">



        <link rel="stylesheet" href="../frontend/css/material-design-iconic-font.min.css">



        <link href="../frontend/css/google_font.css" rel="stylesheet">



        <link rel="stylesheet" href="../frontend/css/owl.carousel.min.css" crossorigin="anonymous" />



        <link rel="stylesheet" href="../frontend/css/aos.css" />




        <script src="../frontend/js/jquery-3.6.0.js" crossorigin="anonymous"></script>


        <script src="../frontend/js/owl.carousel.min.js" crossorigin="anonymous">



        </script>



        <script src="../frontend/js/fontawasome.js" crossorigin="anonymous"></script>







        <link rel="stylesheet" href="../frontend/css/style4818.css?v=79">



        <link rel="stylesheet" href="../frontend/css/responsive8e0e.css?v=8">







        <script src="../frontend/js/recaptcha_api.js"></script>





    </head>

    <body>







        <nav id="header" class="navbar navbar-expand-lg navbar-light fixed-top bg-light shadow">







            <div class="container">







                <a class="logo-img" aria-current="page" href="../en.php"><img src="../frontend/img/english_logo.png"
                        alt="logo"></a>





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







                            <a href="mailTo:<?php echo $row['email']; ?>">Email :
                                <span><?php echo $row['email']; ?></span></a>







                        </div>







                        <!-- <div class="top_item">







          <a class="translate-links" id="translate-english" href="#">English</a>|







          <a class="translate-links" id="translate-sinhala" href="#">සිංහල</a>|







          <a class="translate-links" id="translate-tamil" href="#">தமிழ்</a>







        </div> -->







                        <div class="top_item search-module">







                            <form class="d-flex" action="search-result/en" method="get">







                                <div class="input-group search-main">







                                    <input class="form-control border-0 mr-2" value="" required minlength="4"
                                        name="keywords" type="search" placeholder="Search" aria-label="Search">







                                    <button class="btn btn-primary " type="submit"><i
                                            class="fas fa-search"></i></button>







                                </div>







                            </form>







                        </div>







                        <!--  <div class="top_item">







        







             







              <a class="headr-ctr" href="../contact-us/en">Get a Quote</a>







            







            </div> -->



                        <div class="top_item lang-switcher d-flex">

                            <a class="translate-links" href="https://<?php echo $row['apply']; ?>">New Application </a>
                            <a class="translate-links" href="../track.php">Track Status</a>

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







                                <a class="nav-link   " href="../en.php">HOME</a>







                            </li>















                            <li class="nav-item">







                                <a class="nav-link " href="../about-us/profile/en.php">ABOUT</a>







                            </li>







                            <li class="nav-item dropdown dropdown-mega position-static">







                                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside">YOUR NEEDS</a>







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







                                                                    <img class="w-100"
                                                                        src="../uploads/your_needs_en/YourNeedIcon1_1645451076.svg"
                                                                        alt="yourNeeds">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Need A Leasing?</h5>







                                                                    <a class="sub-links  "
                                                                        href="../your-needs/need-a-leasing/en.php">View</a>















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="../uploads/your_needs_en/YourNeedIcon2_1652933172.svg"
                                                                        alt="yourNeeds">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Need Urgent Cash?</h5>







                                                                    <a class="sub-links  "
                                                                        href="../your-needs/need-urgent-cash/en.php">View</a>















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="../uploads/your_needs_en/YourNeedIcon3_1645451215.svg"
                                                                        alt="yourNeeds">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Saving For Future?</h5>







                                                                    <a class="sub-links  "
                                                                        href="../your-needs/saving-for-future/en.php">View</a>















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="../uploads/your_needs_en/YourNeedIcon4_1645451259.svg"
                                                                        alt="yourNeeds">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Business Loan And More?</h5>







                                                                    <a class="sub-links  "
                                                                        href="../your-needs/business-loan-and-more/en.php">View</a>















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







                                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside">OUR SOLUTIONS</a>







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







                                                                    <img class="w-100"
                                                                        src="../uploads/main_solution_icon_en/MainSolution1_1645451357.svg"
                                                                        alt="solutions">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Deposits</h5>














                                                                    <a class="sub-links "
                                                                        href="../products/deposits/fixed-deposit/en.php">Fixed
                                                                        Deposit</a>






















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="../uploads/main_solution_icon_en/MainSolution2_1645451419.svg"
                                                                        alt="solutions">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Leasing &amp; Hire Purchase</h5>














                                                                    <a class="sub-links "
                                                                        href="../products/leasing-hire-purchase/auto-loan/en.php">Auto
                                                                        Loan</a>
























                                                                    <a class="sub-links "
                                                                        href="../products/leasing-hire-purchase/vehicle-leasing/en.php">Vehicle
                                                                        Leasing</a>






















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="../uploads/main_solution_icon_en/MainSolution3_1645451461.svg"
                                                                        alt="solutions">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Loan</h5>














                                                                    <a class="sub-links "
                                                                        href="../products/loan/educational-loans/en.php">Educational
                                                                        Loans</a>














                                                                    <a class="sub-links "
                                                                        href="../products/loan/gold-loan/en.php">Gold
                                                                        Loan</a>






















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="../uploads/main_solution_icon_en/MainSolution4_1645451490.svg"
                                                                        alt="solutions">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Microfinance</h5>














                                                                    <a class="sub-links "
                                                                        href="../products/microfinance/micro-loan/en.php">Micro
                                                                        Loan</a>














                                                                    <a class="sub-links "
                                                                        href="../products/microfinance/sme-loan/en.php">SME
                                                                        Loan</a>














                                                                    <a class="sub-links "
                                                                        href="../products/microfinance/consumer-loan/en.php">Consumer
                                                                        Loan</a>






















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="../uploads/main_solution_icon_en/MainSolution5_1645451523.svg"
                                                                        alt="solutions">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Revolving Business Loan</h5>














                                                                    <a class="sub-links "
                                                                        href="../products/revolving-business-loan/revolving-business-loan/en.php">Revolving
                                                                        Business Loan</a>






















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














                                <a class="nav-link " href="../help/downloads/annual-reports/en.php">TESTIMONIALS</a>







                            </li>















                            <!--<li class="nav-item">-->
                            <!--  <a class="nav-link " href="../communicated/en">Communicate</a>-->
                            <!--</li>-->






                            <li class="nav-item">







                                <a class="nav-link active" href="../contact-us/en.php">CONTACT US</a>







                            </li>







































                        </ul>















                    </div>







                </div>







            </div>







        </nav>
























        <div class="main-header-img">
            <img class="w-100"
                src="../uploads/pagebanner_image_upload/2022/01/3483fe56-0414-4937-8034-19e1b9821fd6.jpg">
            <div class="inner-topic">
            </div>
            <div class="black-strip"></div>
        </div>
        <section class="second-menu bg-light py-4">
            <div class="container">
                <div class="col-lg-12">
                    <h3 style="margin-block: 0px;">Terms and Conditions</h3>
                    <p style="line-height: 2rem;">Last updated: March 19, 2021</p>
                    <p style="line-height: 2rem;">Please read these terms and conditions carefully before using Our
                        Service.</p>
                    <h3 style="margin-block: 0px;">Interpretation and Definitions Interpretation</h3>
                    <p style="line-height: 2rem;">The words of which the initial letter is capitalized have meanings
                        defined under the following conditions. The following definitions shall have the same meaning
                        regardless of whether they appear in singular or in plural.</p>
                    <h3 style="">Definitions</h3>
                    <p style="line-height: 2rem;">For the purposes of these Terms and Conditions:</p>
                    <ul style="">
                        <li>
                            <p style="line-height: 2rem;">Affiliate&nbsp;means an entity that controls, is controlled by
                                or is under common control with a party, where "control" means ownership of 50% or more
                                of the shares, equity interest or other securities entitled to vote for election of
                                directors or other managing authority.</p>
                        </li>
                        <li>
                            <p style="line-height: 2rem;">Country&nbsp;refers to: <?php echo $row['country']; ?></p>
                        </li>
                        <li>
                            <p style="line-height: 2rem;">Company&nbsp;(referred to as either "the Company", "We", "Us"
                                or "Our" in this Agreement) refers to <?php echo $row['name']; ?>,
                                <?php echo $row['addr']; ?>.</p>
                        </li>
                        <li>
                            <p style="line-height: 2rem;">Device&nbsp;means any device that can access the Service such
                                as a computer, a cellphone or a digital tablet.</p>
                        </li>
                        <li>
                            <p style="line-height: 2rem;">Service&nbsp;refers to the Website.</p>
                        </li>
                        <li>
                            <p style="line-height: 2rem;">Terms and Conditions&nbsp;(also referred as "Terms") mean
                                these Terms and Conditions that form the entire agreement between You and the Company
                                regarding the use of the Service.</p>
                        </li>
                        <li>
                            <p style="line-height: 2rem;">Third-party Social Media Service&nbsp;means any services or
                                content (including data, information, products or services) provided by a third-party
                                that may be displayed, included or made available by the Service.</p>
                        </li>
                        <li>
                            <p style="line-height: 2rem;">Website&nbsp;refers to <?php echo $row['name']; ?>,
                                accessible from&nbsp;<a href="../index.html" rel="external nofollow noopener"
                                    target="_blank" style="transition: all 0.5s ease 0s;"><?php echo $row['url']; ?></a>
                            </p>
                        </li>
                        <li>
                            <p style="line-height: 2rem;">You&nbsp;means the individual accessing or using the Service,
                                or the company, or other legal entity on behalf of which such individual is accessing or
                                using the Service, as applicable.</p>
                        </li>
                    </ul>
                    <h3 style="margin-block: 0px;">Acknowledgment</h3>
                    <p style="line-height: 2rem;">These are the Terms and Conditions governing the use of this Service
                        and the agreement that operates between You and the Company. These Terms and Conditions set out
                        the rights and obligations of all users regarding the use of the Service.</p>
                    <p style="line-height: 2rem;">Your access to and use of the Service is conditioned on Your
                        acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply
                        to all visitors, users and others who access or use the Service.</p>
                    <p style="line-height: 2rem;">By accessing or using the Service You agree to be bound by these Terms
                        and Conditions. If You disagree with any part of these Terms and Conditions then You may not
                        access the Service.</p>
                    <p style="line-height: 2rem;">You represent that you are over the age of 18. The Company does not
                        permit those under 18 to use the Service.</p>
                    <p style="line-height: 2rem;">Your access to and use of the Service is also conditioned on Your
                        acceptance of and compliance with the Privacy Policy of the Company. Our Privacy Policy
                        describes Our policies and procedures on the collection, use and disclosure of Your personal
                        information when You use the Application or the Website and tells You about Your privacy rights
                        and how the law protects You. Please read Our Privacy Policy carefully before using Our Service.
                    </p>
                    <h3 style="margin-block: 0px;">Links to Other Websites</h3>
                    <p style="line-height: 2rem;">Our Service may contain links to third-party web sites or services
                        that are not owned or controlled by the Company.</p>
                    <p style="line-height: 2rem;">The Company has no control over, and assumes no responsibility for,
                        the content, privacy policies, or practices of any third party web sites or services. You
                        further acknowledge and agree that the Company shall not be responsible or liable, directly or
                        indirectly, for any damage or loss caused or alleged to be caused by or in connection with the
                        use of or reliance on any such content, goods or services available on or through any such web
                        sites or services.</p>
                    <p style="line-height: 2rem;">We strongly advise You to read the terms and conditions and privacy
                        policies of any third-party web sites or services that You visit.</p>
                    <h3 style="margin-block: 0px;">Termination</h3>
                    <p style="line-height: 2rem;">We may terminate or suspend Your access immediately, without prior
                        notice or liability, for any reason whatsoever, including without limitation if You breach these
                        Terms and Conditions.</p>
                    <p style="line-height: 2rem;">Upon termination, Your right to use the Service will cease
                        immediately.</p>
                    <h3 style="margin-block: 0px;">Limitation of Liability</h3>
                    <p style="line-height: 2rem;">Notwithstanding any damages that You might incur, the entire liability
                        of the Company and any of its suppliers under any provision of this Terms and Your exclusive
                        remedy for all of the foregoing shall be limited to the amount actually paid by You through the
                        Service or 100 USD if You haven't purchased anything through the Service.</p>
                    <p style="line-height: 2rem;">To the maximum extent permitted by applicable law, in no event shall
                        the Company or its suppliers be liable for any special, incidental, indirect, or consequential
                        damages whatsoever (including, but not limited to, damages for loss of profits, loss of data or
                        other information, for business interruption, for personal injury, loss of privacy arising out
                        of or in any way related to the use of or inability to use the Service, third-party software
                        and/or third-party hardware used with the Service, or otherwise in connection with any provision
                        of this Terms), even if the Company or any supplier has been advised of the possibility of such
                        damages and even if the remedy fails of its essential purpose.</p>
                    <p style="line-height: 2rem;">Some states do not allow the exclusion of implied warranties or
                        limitation of liability for incidental or consequential damages, which means that some of the
                        above limitations may not apply. In these states, each party's liability will be limited to the
                        greatest extent permitted by law.</p>
                    <h3 style="margin-block: 0px;">"AS IS" and "AS AVAILABLE" Disclaimer</h3>
                    <p style="line-height: 2rem;">The Service is provided to You "AS IS" and "AS AVAILABLE" and with all
                        faults and defects without warranty of any kind. To the maximum extent permitted under
                        applicable law, the Company, on its own behalf and on behalf of its Affiliates and its and their
                        respective licensors and service providers, expressly disclaims all warranties, whether express,
                        implied, statutory or otherwise, with respect to the Service, including all implied warranties
                        of merchantability, fitness for a particular purpose, title and non-infringement, and warranties
                        that may arise out of course of dealing, course of performance, usage or trade practice. Without
                        limitation to the foregoing, the Company provides no warranty or undertaking, and makes no
                        representation of any kind that the Service will meet Your requirements, achieve any intended
                        results, be compatible or work with any other software, applications, systems or services,
                        operate without interruption, meet any performance or reliability standards or be error free or
                        that any errors or defects can or will be corrected.</p>
                    <p style="line-height: 2rem;">Without limiting the foregoing, neither the Company nor any of the
                        company's provider makes any representation or warranty of any kind, express or implied: (i) as
                        to the operation or availability of the Service, or the information, content, and materials or
                        products included thereon; (ii) that the Service will be uninterrupted or error-free; (iii) as
                        to the accuracy, reliability, or currency of any information or content provided through the
                        Service; or (iv) that the Service, its servers, the content, or e-mails sent from or on behalf
                        of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other
                        harmful components.</p>
                    <p style="line-height: 2rem;">Some jurisdictions do not allow the exclusion of certain types of
                        warranties or limitations on applicable statutory rights of a consumer, so some or all of the
                        above exclusions and limitations may not apply to You. But in such a case the exclusions and
                        limitations set forth in this section shall be applied to the greatest extent enforceable under
                        applicable law.</p>
                    <h3 style="margin-block: 0px;">Governing Law</h3>
                    <p style="line-height: 2rem;">The laws of the Country, excluding its conflicts of law rules, shall
                        govern this Terms and Your use of the Service. Your use of the Application may also be subject
                        to other local, state, national, or international laws.</p>
                    <h3 style="margin-block: 0px;">Disputes Resolution</h3>
                    <p style="line-height: 2rem;">If You have any concern or dispute about the Service, You agree to
                        first try to resolve the dispute informally by contacting the Company.</p>
                    <h3 style="margin-block: 0px;">For European Union (EU) Users</h3>
                    <p style="line-height: 2rem;">If You are a European Union consumer, you will benefit from any
                        mandatory provisions of the law of the country in which you are resident in.</p>
                    <h3 style="margin-block: 0px;">United States Legal Compliance</h3>
                    <p style="line-height: 2rem;">You represent and warrant that (i) You are not located in a country
                        that is subject to the United States government embargo, or that has been designated by the
                        United States government as a "terrorist supporting" country, and (ii) You are not listed on any
                        United States government list of prohibited or restricted parties.</p>
                    <h3 style="margin-block: 0px;">Severability and Waiver Severability</h3>
                    <p style="line-height: 2rem;">If any provision of these Terms is held to be unenforceable or
                        invalid, such provision will be changed and interpreted to accomplish the objectives of such
                        provision to the greatest extent possible under applicable law and the remaining provisions will
                        continue in full force and effect.</p>
                    <h3 style="">Waiver</h3>
                    <p style="line-height: 2rem;">Except as provided herein, the failure to exercise a right or to
                        require performance of an obligation under this Terms shall not effect a party's ability to
                        exercise such right or require such performance at any time thereafter nor shall be the waiver
                        of a breach constitute a waiver of any subsequent breach.</p>
                    <h3 style="margin-block: 0px;">Translation Interpretation</h3>
                    <p style="line-height: 2rem;">These Terms and Conditions may have been translated if We have made
                        them available to You on our Service. You agree that the original English text shall prevail in
                        the case of a dispute.</p>
                    <h3 style="margin-block: 0px;">Changes to These Terms and Conditions</h3>
                    <p style="line-height: 2rem;">We reserve the right, at Our sole discretion, to modify or replace
                        these Terms at any time. If a revision is material We will make reasonable efforts to provide at
                        least 30 days' notice prior to any new terms taking effect. What constitutes a material change
                        will be determined at Our sole discretion.</p>
                    <p style="line-height: 2rem;">By continuing to access or use Our Service after those revisions
                        become effective, You agree to be bound by the revised terms. If You do not agree to the new
                        terms, in whole or in part, please stop using the website and the Service.</p>
                    <h3 style="margin-block: 0px;">Contact Us</h3>
                    <p style="line-height: 2rem;">If you have any questions about these Terms and Conditions, You can
                        contact us:</p>
                    <ul style="">
                        <li style="">By phone number: <?php echo $row['phone']; ?></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- <?php echo $row['name']; ?> location 

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18840.965692473357!2d79.85502087523814!3d6.911501968689908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x46c8479c38f02dfc!2sCommercial%20Credit%20%26%20Finance%20PLC%2C%20City%20Office!5e0!3m2!1sen!2slk!4v1631275343233!5m2!1sen!2slk" style="width:100%;height:450px;border: 0" allowfullscreen="" loading="lazy"></iframe>-->









        <!-- ======= Footer ======= -->

        <footer id="footer">





            <div class="footer-top">

                <div class="container">

                    <div class="row">



                        <div class="col-lg-3 col-md-12 footer-contact">

                            <div class="w-100 text-center">

                                <a class="log_a d-block" href="../en.php"><img class="logo"
                                        src="../frontend/img/black_english_logo.png" alt="logo"></a>

                            </div>

                            <p class="pt-2">

                                <?php echo $row['name']; ?>, a well-established brand in the Financial Services Industry
                                of <?php echo $row['country']; ?>, has been one of the most sorted out financial service
                                providers for the past decade.



                            </p>
                            <div class="row social-media">

                                <div class="col-md-12 socil-links text-center">

                                    <div class="socil-links-m align-items-center">

                                        <p class="s-mdeia">Join Our Community</p>

                                        <div class="socil-icons">

                                            <!--   <a target="_blank" href="#https://www.facebook.com/comcreditlk/"><i class="fab fa-facebook-f"></i></a>

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

                                <li><i class="fas fa-chevron-right"></i> <a href="../en.php">Home</a></li>

                                <li><i class="fas fa-chevron-right"></i> <a href="../about-us/profile/en.php">About</a>
                                </li>





                                <li><i class="fas fa-chevron-right"></i> <a
                                        href="../about-us/careers/en.php">Careers</a></li>



                                <li><i class="fas fa-chevron-right"></i> <a href="../terms-and-condtion/en.php">Terms of
                                        Services</a></li>

                                <li><i class="fas fa-chevron-right"></i> <a href="../privacy-policy/en.php">Privacy
                                        Policy</a></li>

                            </ul>

                        </div>



                        <div class="col-lg-3 col-md-4 col-sm-6 footer-links solu">

                            <h4>Solutions</h4>

                            <ul>






                                <li><i class="fas fa-chevron-right"></i> <a
                                        href="../products/deposits/fixed-deposit/en.php">Fixed Deposit</a></li>








                                <li><i class="fas fa-chevron-right"></i> <a
                                        href="../products/leasing-hire-purchase/auto-loan/en.php">Auto Loan</a></li>
















                                <li><i class="fas fa-chevron-right"></i> <a
                                        href="../products/loan/educational-loans/en.php">Educational Loans</a></li>












                                <li><i class="fas fa-chevron-right"></i> <a
                                        href="../products/microfinance/micro-loan/en.php">Micro Loan</a></li>
















                                <li><i class="fas fa-chevron-right"></i> <a
                                        href="../products/revolving-business-loan/revolving-business-loan/en.php">Revolving
                                        Business Loan</a></li>




                            </ul>

                        </div>



                        <div class="col-lg-3 col-md-4 footer-links contact">

                            <h4>Contacts </h4>

                            <ul>

                                <li><i class="fas fa-phone-alt"></i> <a href="tel:<?php echo $row['phone']; ?>">
                                        <?php echo $row['phone']; ?> </a></li>



                                <li><i class="far fa-envelope-open"></i><a
                                        href="mailTo:<?php echo $row['email']; ?>"><span><?php echo $row['email']; ?></span></a>
                                </li>

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

                            <form class="subscriptionForm" id="subscriptionForm" action="contact/subscribe"
                                method="POST" autocomplete="off">

                                <input type="hidden" name="_token" value=" ">
                                <div class="input-group">

                                    <input type="email" required name="subscribe_email" value="" class="form-control"
                                        placeholder="Your E-mail" aria-label="Your Email"
                                        aria-describedby="button-addon2">

                                    <div class="input-group-append">

                                        <button class="btn footer-btn" type="submit" id="button-addon2"> Subscribe
                                        </button>

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

                <div class="container py-2">
                    <div class="row">

                        <div class="col-md-8 copyright">



                            &copy; Copyright <strong><span><?php echo $row['name']; ?></span></strong>. All Rights
                            Reserved

                        </div>

                        <div class="col-md-4 credits">



                            <!--<a href="#">Privacy Policy </a> | <a href="#">Terms & Condition </a>-->





                            <a href="../privacy-policy/en.php">Privacy Policy </a> | <a
                                href="../terms-and-condtion/en.php">Terms of Services </a>


                        </div>

                    </div>
                </div>

            </div>

        </footer><!-- End Footer -->

        <div id="preloader"></div>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- partial -->

        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="../frontend/js/bootstrap.bundle.min.js"></script>

        <script src="../frontend/js/script.js"></script>

        <script>
        var url = window.location.href;

        var subUrl = url.substring(0, url.lastIndexOf("index.php"));



        document.getElementById("translate-english").href = subUrl + '/en';

        document.getElementById("translate-sinhala").href = subUrl + '/si';

        document.getElementById("translate-tamil").href = subUrl + '/ta';
        </script>




        <script src="../frontend/js/aos.js"></script>
        <script>
        AOS.init();
        </script>

        <script>
        $(document).ready(function() {

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

                $videoSrc = $(this).data("src");

            });

            console.log($videoSrc);







            // when the modal is opened autoplay it  

            $('#ytModal').on('shown.bs.modal', function(e) {



                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get

                // $("#video").attr('src',$videoSrc + "&modestbranding=1&showinfo=0" );
                $("#video").attr('src', $videoSrc +
                    "?autoplay=1&mute=1&modestbranding=1&showinfo=0&rel=0&origin=http://cclk.lk");

            })







            // stop playing the youtube video when I close the modal

            $('#ytModal').on('hide.bs.modal', function(e) {

                // a poor man's stop video

                $("#video").attr('src', $videoSrc);

            })













            // document ready  

        });
        </script>



    </body>


    <!-- Mirrored from www/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 03:20:13 GMT -->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/<?php echo $row['tawk']; ?>';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    </body>

    <!-- Mirrored from <?php echo $row['url']; ?>/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Sep 2021 16:26:18 GMT -->

</html>
<?php } ?>