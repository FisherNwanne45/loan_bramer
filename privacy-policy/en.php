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
            content="leading finance company in <?php echo $row['country']; ?>, Funds managements, vehicle leasing, buy a vehicle, get a loan, Funds management rates">






        <title>Privacy Policy - <?php echo $row['name']; ?></title>







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
                                                                        href="../products/loan/capital-investment-fund/en.php">Educational
                                                                        Loans</a>














                                                                    <a class="sub-links "
                                                                        href="../products/loan/start-up/en.php">Gold
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
                src="../uploads/pagebanner_image_upload/2022/01/d67a2075-061a-42ad-8a7e-7d43efe5c216.jpg">
            <div class="inner-topic">
            </div>
            <div class="black-strip"></div>
        </div>
        <section class="second-menu bg-light py-4">
            <div class="container">
                <div class="col-lg-12">
                    <h3 style="">Privacy Policy</h3>
                    <p style="">Last updated: March 19, 2021</p>
                    <p style="">This Privacy Policy describes Our policies and procedures on the collection, use and
                        disclosure of Your information when You use the Service and tells You about Your privacy rights
                        and how the law protects You.</p>
                    <p style="">We use Your Personal data to provide and improve the Service. By using the Service, You
                        agree to the collection and use of information in accordance with this Privacy Policy.</p>
                    <h3 style="margin-top: 40px;">Interpretation and Definitions</h3>
                    <h2 style=""><br></h2>
                    <h3 style="">Interpretation</h3>
                    <p style="">The words of which the initial letter is capitalized have meanings defined under the
                        following conditions. The following definitions shall have the same meaning regardless of
                        whether they appear in singular or in plural.</p>
                    <h3 style="">Definitions</h3>
                    <p style="">For the purposes of this Privacy Policy:</p>
                    <ul style="padding-left: 2rem;">
                        <li style="margin-bottom: 10px;">
                            <p style="">Account&nbsp;means a unique account created for You to access our Service or
                                parts of our Service.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Company&nbsp;(referred to as either "the Company", "We", "Us" or "Our" in this
                                Agreement) refers to <?php echo $row['name']; ?>, <?php echo $row['addr']; ?>.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Cookies&nbsp;are small files that are placed on Your computer, mobile device or
                                any other device by a website, containing the details of Your browsing history on that
                                website among its many uses.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Country&nbsp;refers to: <?php echo $row['country']; ?></p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Device&nbsp;means any device that can access the Service such as a computer, a
                                cellphone or a digital tablet.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Personal Data&nbsp;is any information that relates to an identified or
                                identifiable individual.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Service&nbsp;refers to the Website.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Service Provider&nbsp;means any natural or legal person who processes the data
                                on behalf of the Company. It refers to third-party companies or individuals employed by
                                the Company to facilitate the Service, to provide the Service on behalf of the Company,
                                to perform services related to the Service or to assist the Company in analyzing how the
                                Service is used.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Third-party Social Media Service&nbsp;refers to any website or any social
                                network website through which a User can log in or create an account to use the Service.
                            </p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Usage Data&nbsp;refers to data collected automatically, either generated by the
                                use of the Service or from the Service infrastructure itself (for example, the duration
                                of a page visit).</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Website&nbsp;refers to <?php echo $row['name']; ?>, accessible
                                from&nbsp;<a href="../index.html" rel="external nofollow noopener" target="_blank"
                                    style=""><?php echo $row['url']; ?></a></p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">You&nbsp;means the individual accessing or using the Service, or the company, or
                                other legal entity on behalf of which such individual is accessing or using the Service,
                                as applicable.</p>
                        </li>
                    </ul>
                    <h2 style="margin-top: 40px;">Collecting and Using Your Personal Data</h2>
                    <h3 style=""><span style="color: inherit; font-family: inherit; font-size: 1.75rem;">Types of Data
                            Collected</span><br></h3>
                    <h3 style="">Personal Data</h3>
                    <p style="">While using Our Service, We may ask You to provide Us with certain personally
                        identifiable information that can be used to contact or identify You. Personally identifiable
                        information may include, but is not limited to:</p>
                    <ul style="padding-left: 2rem;">
                        <li style="margin-bottom: 10px;">
                            <p style="">Email address</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Phone number</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Usage Data</p>
                        </li>
                    </ul>
                    <h3 style="">Usage Data</h3>
                    <p style="">Usage Data is collected automatically when using the Service.</p>
                    <p style="">Usage Data may include information such as Your Device's Internet Protocol address (e.g.
                        IP address), browser type, browser version, the pages of our Service that You visit, the time
                        and date of Your visit, the time spent on those pages, unique device identifiers and other
                        diagnostic data.</p>
                    <p style="">When You access the Service by or through a mobile device, We may collect certain
                        information automatically, including, but not limited to, the type of mobile device You use,
                        Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating
                        system, the type of mobile Internet browser You use, unique device identifiers and other
                        diagnostic data.</p>
                    <p style="">We may also collect information that Your browser sends whenever You visit our Service
                        or when You access the Service by or through a mobile device.</p>
                    <h3 style="">Tracking Technologies and Cookies</h3>
                    <p style="">We use Cookies and similar tracking technologies to track the activity on Our Service
                        and store certain information. Tracking technologies used are beacons, tags, and scripts to
                        collect and track information and to improve and analyze Our Service. The technologies We use
                        may include:</p>
                    <ul style="padding-left: 2rem;">
                        <li style="margin-bottom: 10px;">Cookies or Browser Cookies.&nbsp;A cookie is a small file
                            placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate
                            when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to
                            use some parts of our Service. Unless you have adjusted Your browser setting so that it will
                            refuse Cookies, our Service may use Cookies.</li>
                        <li style="margin-bottom: 10px;">Flash Cookies.&nbsp;Certain features of our Service may use
                            local stored objects (or Flash Cookies) to collect and store information about Your
                            preferences or Your activity on our Service. Flash Cookies are not managed by the same
                            browser settings as those used for Browser Cookies. For more information on how You can
                            delete Flash Cookies, please read "Where can I change the settings for disabling, or
                            deleting local shared objects?" available at&nbsp;<a
                                href="https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_"
                                rel="external nofollow noopener" target="_blank"
                                style="">https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_</a>
                        </li>
                        <li style="margin-bottom: 10px;">Web Beacons.&nbsp;Certain sections of our Service and our
                            emails may contain small electronic files known as web beacons (also referred to as clear
                            gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count
                            users who have visited those pages or opened an email and for other related website
                            statistics (for example, recording the popularity of a certain section and verifying system
                            and server integrity).</li>
                    </ul>
                    <p style="">Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on Your
                        personal computer or mobile device when You go offline, while Session Cookies are deleted as
                        soon as You close Your web browser. Learn more about cookies:&nbsp;<a href="#" target="_blank"
                            style="">What Are Cookies?</a>.</p>
                    <p style="">We use both Session and Persistent Cookies for the purposes set out below:</p>
                    <ul style="padding-left: 2rem;">
                        <li style="margin-bottom: 10px;">
                            <p style="">Necessary / Essential Cookies</p>
                            <p style="">Type: Session Cookies</p>
                            <p style="">Administered by: Us</p>
                            <p style="">Purpose: These Cookies are essential to provide You with services available
                                through the Website and to enable You to use some of its features. They help to
                                authenticate users and prevent fraudulent use of user accounts. Without these Cookies,
                                the services that You have asked for cannot be provided, and We only use these Cookies
                                to provide You with those services.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Cookies Policy / Notice Acceptance Cookies</p>
                            <p style="">Type: Persistent Cookies</p>
                            <p style="">Administered by: Us</p>
                            <p style="">Purpose: These Cookies identify if users have accepted the use of cookies on the
                                Website.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">Functionality Cookies</p>
                            <p style="">Type: Persistent Cookies</p>
                            <p style="">Administered by: Us</p>
                            <p style="">Purpose: These Cookies allow us to remember choices You make when You use the
                                Website, such as remembering your login details or language preference. The purpose of
                                these Cookies is to provide You with a more personal experience and to avoid You having
                                to re-enter your preferences every time You use the Website.</p>
                        </li>
                    </ul>
                    <p style="">For more information about the cookies we use and your choices regarding cookies, please
                        visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>
                    <h3 style="">Use of Your Personal Data</h3>
                    <p style="">The Company may use Personal Data for the following purposes:</p>
                    <ul style="padding-left: 2rem;">
                        <li style="margin-bottom: 10px;">
                            <p style="">To provide and maintain our Service, including to monitor the usage of our
                                Service.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">To manage Your Account:&nbsp;to manage Your registration as a user of the
                                Service. The Personal Data You provide can give You access to different functionalities
                                of the Service that are available to You as a registered user.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">For the performance of a contract:&nbsp;the development, compliance and
                                undertaking of the purchase contract for the products, items or services You have
                                purchased or of any other contract with Us through the Service.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">To contact You:&nbsp;To contact You by email, telephone calls, SMS, or other
                                equivalent forms of electronic communication, such as a mobile application's push
                                notifications regarding updates or informative communications related to the
                                functionalities, products or contracted services, including the security updates, when
                                necessary or reasonable for their implementation.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">To provide You&nbsp;with news, special offers and general information about
                                other goods, services and events which we offer that are similar to those that you have
                                already purchased or enquired about unless You have opted not to receive such
                                information.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">To manage Your requests:&nbsp;To attend and manage Your requests to Us.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">For business transfers:&nbsp;We may use Your information to evaluate or conduct
                                a merger, divestiture, restructuring, reorganization, dissolution, or other sale or
                                transfer of some or all of Our assets, whether as a going concern or as part of
                                bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about
                                our Service users is among the assets transferred.</p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">For other purposes: We may use Your information for other purposes, such as data
                                analysis, identifying usage trends, determining the effectiveness of our promotional
                                campaigns and to evaluate and improve our Service, products, services, marketing and
                                your experience.</p>
                        </li>
                    </ul>
                    <p style="">We may share Your personal information in the following situations:</p>
                    <ul style="padding-left: 2rem;">
                        <li style="margin-bottom: 10px;">With Service Providers:&nbsp;We may share Your personal
                            information with Service Providers to monitor and analyze the use of our Service, to contact
                            You.</li>
                        <li style="margin-bottom: 10px;">For business transfers:&nbsp;We may share or transfer Your
                            personal information in connection with, or during negotiations of, any merger, sale of
                            Company assets, financing, or acquisition of all or a portion of Our business to another
                            company.</li>
                        <li style="margin-bottom: 10px;">With Affiliates:&nbsp;We may share Your information with Our
                            affiliates, in which case we will require those affiliates to honor this Privacy Policy.
                            Affiliates include Our parent company and any other subsidiaries, joint venture partners or
                            other companies that We control or that are under common control with Us.</li>
                        <li style="margin-bottom: 10px;">With business partners:&nbsp;We may share Your information with
                            Our business partners to offer You certain products, services or promotions.</li>
                        <li style="margin-bottom: 10px;">With other users:&nbsp;when You share personal information or
                            otherwise interact in the public areas with other users, such information may be viewed by
                            all users and may be publicly distributed outside. If You interact with other users or
                            register through a Third-Party Social Media Service, Your contacts on the Third-Party Social
                            Media Service may see Your name, profile, pictures and description of Your activity.
                            Similarly, other users will be able to view descriptions of Your activity, communicate with
                            You and view Your profile.</li>
                        <li style="margin-bottom: 10px;">With Your consent: We may disclose Your personal information
                            for any other purpose with Your consent.</li>
                    </ul>
                    <h3 style="">Retention of Your Personal Data</h3>
                    <p style="">The Company will retain Your Personal Data only for as long as is necessary for the
                        purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent
                        necessary to comply with our legal obligations (for example, if we are required to retain your
                        data to comply with applicable laws), resolve disputes, and enforce our legal agreements and
                        policies.</p>
                    <p style="">The Company will also retain Usage Data for internal analysis purposes. Usage Data is
                        generally retained for a shorter period of time, except when this data is used to strengthen the
                        security or to improve the functionality of Our Service, or We are legally obligated to retain
                        this data for longer time periods.</p>
                    <h3 style="">Transfer of Your Personal Data</h3>
                    <p style="">Your information, including Personal Data, is processed at the Company's operating
                        offices and in any other places where the parties involved in the processing are located. It
                        means that this information may be transferred to — and maintained on — computers located
                        outside of Your state, province, country or other governmental jurisdiction where the data
                        protection laws may differ than those from Your jurisdiction.</p>
                    <p style="">Your consent to this Privacy Policy followed by Your submission of such information
                        represents Your agreement to that transfer.</p>
                    <p style="">The Company will take all steps reasonably necessary to ensure that Your data is treated
                        securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will
                        take place to an organization or a country unless there are adequate controls in place including
                        the security of Your data and other personal information.</p>
                    <h2 style="">Disclosure of Your Personal Data</h2>
                    <h3 style="">Business Transactions</h3>
                    <p style="">If the Company is involved in a merger, acquisition or asset sale, Your Personal Data
                        may be transferred. We will provide notice before Your Personal Data is transferred and becomes
                        subject to a different Privacy Policy.</p>
                    <h3 style="">Law enforcement</h3>
                    <p style="">Under certain circumstances, the Company may be required to disclose Your Personal Data
                        if required to do so by law or in response to valid requests by public authorities (e.g. a court
                        or a government agency).</p>
                    <h3 style="">Other legal requirements</h3>
                    <p style="">The Company may disclose Your Personal Data in the good faith belief that such action is
                        necessary to:</p>
                    <ul style="padding-left: 2rem;">
                        <li style="margin-bottom: 10px;">Comply with a legal obligation</li>
                        <li style="margin-bottom: 10px;">Protect and defend the rights or property of the Company</li>
                        <li style="margin-bottom: 10px;">Prevent or investigate possible wrongdoing in connection with
                            the Service</li>
                        <li style="margin-bottom: 10px;">Protect the personal safety of Users of the Service or the
                            public</li>
                        <li style="margin-bottom: 10px;">Protect against legal liability</li>
                    </ul>
                    <h3 style="">Security of Your Personal Data</h3>
                    <p style="">The security of Your Personal Data is important to Us, but remember that no method of
                        transmission over the Internet, or method of electronic storage is 100% secure. While We strive
                        to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its
                        absolute security.</p>
                    <h3 style="margin-top: 40px;">Children's Privacy</h3>
                    <p style="">Our Service does not address anyone under the age of 13. We do not knowingly collect
                        personally identifiable information from anyone under the age of 13. If You are a parent or
                        guardian and You are aware that Your child has provided Us with Personal Data, please contact
                        Us. If We become aware that We have collected Personal Data from anyone under the age of 13
                        without verification of parental consent, We take steps to remove that information from Our
                        servers.</p>
                    <p style="">If We need to rely on consent as a legal basis for processing Your information and Your
                        country requires consent from a parent, We may require Your parent's consent before We collect
                        and use that information.</p>
                    <h3 style="margin-top: 40px;">Links to Other Websites</h3>
                    <p style="">Our Service may contain links to other websites that are not operated by Us. If You
                        click on a third party link, You will be directed to that third party's site. We strongly advise
                        You to review the Privacy Policy of every site You visit.</p>
                    <p style="">We have no control over and assume no responsibility for the content, privacy policies
                        or practices of any third party sites or services.</p>
                    <h3 style="margin-top: 40px;">Changes to this Privacy Policy</h3>
                    <p style="">We may update Our Privacy Policy from time to time. We will notify You of any changes by
                        posting the new Privacy Policy on this page.</p>
                    <p style="">We will let You know via email and/or a prominent notice on Our Service, prior to the
                        change becoming effective and update the "Last updated" date at the top of this Privacy Policy.
                    </p>
                    <p style="">You are advised to review this Privacy Policy periodically for any changes. Changes to
                        this Privacy Policy are effective when they are posted on this page.</p>
                    <h3 style="margin-top: 40px;">Contact Us</h3>
                    <p style="">If you have any questions about this Privacy Policy, You can contact us:</p>
                    <ul style="padding-left: 2rem;">
                        <li style="margin-bottom: 10px;">
                            <p style="">By visiting this page on our website:&nbsp;<a href="../contact-us/en.html"
                                    rel="external nofollow noopener" target="_blank"
                                    style=""><?php echo $row['url']; ?>/contact-us/en</a></p>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <p style="">By phone number:&nbsp;<a href="tel:<?php echo $row['phone']; ?>"
                                    style=""><?php echo $row['phone']; ?></a>
                            </p>
                        </li>
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
                                        href="../products/deposits/fixed-deposit/en.php">Funds management</a></li>








                                <li><i class="fas fa-chevron-right"></i> <a
                                        href="../products/leasing-hire-purchase/auto-loan/en.php">Auto Loan</a></li>
















                                <li><i class="fas fa-chevron-right"></i> <a
                                        href="../products/loan/capital-investment-fund/en.php">Capital Investment Fund</a></li>












                                <li><i class="fas fa-chevron-right"></i> <a
                                        href="../products/microfinance/micro-loan/en.php">Debt Refinance</a></li>
















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