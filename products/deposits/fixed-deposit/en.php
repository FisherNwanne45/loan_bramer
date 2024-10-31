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







            






            <a class="nav-link " href="../../../help/downloads/annual-reports/en.php">TESIMONIALS</a>







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

    <img class="w-100" src="../../../uploads/sub_solution_en/SubSolution5_1650449498.jpg" alt="Breadcrumb Banner">

    <div class="inner-topic">

        <h3>Fixed Deposit </h3>

        <div class="bredcrumb">

            <a href="../../../en.php">Home</a><i class="fas fa-chevron-right"></i> <a href="#">Our Solutions</a><i class="fas fa-chevron-right"></i>

            <a href="en.php">Fixed Deposit</a>

        </div>



    </div>

    <div class="black-strip"></div>

</div>



<div class="abt-single mt-4">

    <div class="container">

        <h2 class="sub-page-topic py-3">Fixed Deposit</h2>

        <div class="row">

            <p>Are you looking for an institute that pays high interest on your Fixed Deposits? Choose <?php echo $row['name']; ?>, a company regulated and monitored by the Central Bank of <?php echo $row['country']; ?> and has won the trust of clients over the past 40 years.<br />
You can start a Fixed Deposit account from an initial deposit as small as <?php echo $row['currency']; ?> 5,000 for a period of 1 month to five years and choose to receive interest monthly or at maturity.</p>

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

                        <ul><li>Ability to gain attractive Interest Rates for your funds.</li></ul><ul><li>Selection possibility of flexible tenor.</li></ul><ul><li>Inculcating the savings habit.</li></ul><ul><li>Offer Loan facilities against FDs.<br></li></ul>

                    </div>

                
            
                
                    <div class="tab-pane fade   py-4" id="eligibility" role="tabpanel" aria-labelledby="eligibility-tab">

                        <ul><li>Being a <?php echo $row['country']; ?> citizen above 18 years of age.</li></ul><ul><li>Should be a mentaly fit person.</li></ul><ul><li>Depositors who are having dual citizenship or residential visa are also welcome.</li></ul><ul><li>Being a Legally recognized or incorporated organization.<br></li></ul>

                    </div>

                
                

        

        </div>

        

        <div class="more_about">
        <p></p>
<h3><span style="color: rgb(99, 99, 99);">Fixed Deposits Rates with effect from 2023-06-13 (Non Senior Citizen Rates)</span></h3><p><br></p><p><br></p>
<table class="table table-bordered" style="text-align: center;">
<tbody>
 <tr>
  <td><b>Period (Months)</b></td>
  <td><b>Monthly</b></td>
  <td><b>AER</b></td>
  <td><b>Maturity</b></td>
  <td><b>AER</b></td>
 </tr>
 <tr>
  <td>1</td>
  <td>-</td>
  <td>-</td>
  <td>18.00%</td>
  <td>19.56%</td>
 </tr>
 <tr>
  <td>2</td>
  <td>15.00%</td>
  <td>16.08%</td>
  <td>16.00%</td>
  <td>17.11%</td>
 </tr>
 <tr>
  <td>3</td>
  <td>17.00%</td>
  <td>18.39%</td>
  <td>20.00%</td>
  <td>21.55%</td>
 </tr>
 <tr>
  <td>4</td>
  <td>16.00%</td>
  <td>17.23%</td>
  <td>17.00%</td>
  <td>17.98%</td>
 </tr>
 <tr>
  <td>5</td>
  <td>16.50%</td>
  <td>17.81%</td>
  <td>17.50%</td>
  <td>18.40%</td>
 </tr>
 <tr>
  <td>6</td>
  <td>16.00%</td>
  <td>17.23%</td>
  <td>17.00%</td>
  <td>17.72%</td>
 </tr>
 <tr>
  <td>7</td>
  <td>16.00%</td>
  <td>17.23%</td>
  <td>17.00%</td>
  <td>17.60%</td>
 </tr>
 <tr>
  <td>8</td>
  <td>16.00%</td>
  <td>17.23%</td>
  <td>17.00%</td>
  <td>17.47%</td>
 </tr>
 <tr>
  <td>9</td>
  <td>16.00%</td>
  <td>17.23%</td>
  <td>17.00%</td>
  <td>17.35%</td>
 </tr>
 <tr>
  <td>10</td>
  <td>16.00%</td>
  <td>17.23%</td>
  <td>17.00%</td>
  <td>17.23%</td>
 </tr>
 <tr>
  <td>11</td>
  <td>16.00%</td>
  <td>17.23%</td>
  <td>17.00%</td>
  <td>17.12%</td>
 </tr>
 <tr>
  <td>12</td>
  <td>17.50%</td>
  <td>18.97%</td>
  <td>18.50%</td>
  <td>18.50%</td>
 </tr>
 <tr>
  <td>18</td>
  <td>16.00%</td>
  <td>17.23%</td>
  <td>17.50%</td>
  <td>16.81%</td>
 </tr>
 <tr>
  <td>24</td>
  <td>13.50%</td>
  <td>14.37%</td>
  <td>16.00%</td>
  <td>14.89%</td>
 </tr>
 <tr>
  <td>36</td>
  <td>12.50%</td>
  <td>13.24%</td>
  <td>15.00%</td>
  <td>13.19%</td>
 </tr>
 <tr>
  <td>48</td>
  <td>11.50%</td>
  <td>12.13%</td>
  <td>13.00%</td>
  <td>11.04%</td>
 </tr>
 <tr>
  <td>60</td>
  <td>11.00%</td>
  <td>11.57%</td>
  <td>13.00%</td>
  <td>10.53%</td>
 </tr>
</tbody>
</table>
<p><br></p>

<p><br></p><p></p><ol><ol></ol></ol><p></p><ul><li>We may consider 0.5% additionally for senior citizens for deposits above 12 months.</li><li>Above mentioned rates are subject to change as company policy without prior notice.</li></ul>
    </div>



    </div>

</div>

    
<div class="container">
    <div class="row my-5 justify-content-center fdcal-section">
       <div class="col-lg-4 col-md-6 p-3 text-light fdcal-bg">
          <h2 class="mb-4 pb-3 border-bottom border-light">Fixed Deposit Calculator</h2>
          <form class="fdcal">
             <div class="form-group">
                <div class="input-group mb-2">
                   <div class="input-group-prepend">
                      <div class="input-group-text"><?php echo $row['currency']; ?></div>
                   </div>
                  
                   <!--<input type="text" class="form-control" data-type="currency" maxlength="10" onkeypress="return onlyNumberKey(event)" id="damount" pattern="[0-9]" placeholder="Deposit Amount">-->
                   <input type="text" class="form-control" autocomplete="off" data-type="currency" maxlength="10" onkeypress="return onlyNumberKey(event)" id="damount" pattern="[0-9]" placeholder="Deposit Amount">
                </div></div>
             <div class="form-group">
                <div class="input-group mb-2">
                   <div class="input-group-prepend">
                      <div class="input-group-text">Period</div>
                   </div>
                   
                   <!--<input type="text" class="form-control" id="pmonths" placeholder="Period (Months)" min="1" max="120" maxlength="3">-->
                   
                    <select class="form-select" id="pmonths" onchange="makeMaturityChange()">
                       <option disabled="" selected="" value="0">Select Period</option>
                       <option class="" value="1">1 Month</option>
                       <option class="" value="3">3 Months</option>
                       <option class="" value="6">6 Months</option>
                       <option class="" value="12">12 Months</option>
                       <option class="" value="24">24 Months</option>
                       <option class="" value="36">36 Months</option>
                       <option class="" value="48">48 Months</option>
                       <option class="" value="60">60 Months</option>
                   </select>
                </div>
             </div>
             <div class="form-group">
                <div class="input-group mb-2">
                   <div class="input-group-prepend">
                      <div class="input-group-text">Rate %</div>
                   </div>
                   
                   <!--<input type="text" class="form-control" id="rppannum" placeholder="Rate per annum" min="1" max="100" maxlength="3">-->
                   <!--<input type="text" class="form-control" id="rppannum" onkeypress="return makeRateSet(event)" placeholder="Rate per annum" min="1" max="100" maxlength="">-->
                   <input type="text" class="form-control" id="rppannum" onblur="checkRateEvent(event)" autocomplete="off" onkeypress="return makeRateSet(event)" placeholder="Rate per annum"  maxlength="5">
                </div>
             </div>
             <div class="form-group">
               <select class="form-select" id="maturityChoose">
                   <option value="Maturity">Maturity</option>
                   <option value="Monthly">Monthly</option>
                   <option value="Quartly">Quartly</option>
                   <option value="BiAnnually">Bi-Annually</option>
                   <option value="Annually">Annually</option>
               </select>
             </div>
             <br>
             <button type="button" class="btn btn-light mb-2" onclick="calculator()">Calculate</button>
             <button type="button" class="btn btn-dark mb-2" onclick="resetCalculator()">Reset</button>
          </form>
       </div>
       <div class="col-lg-5 col-md-6 p-3 fd-result">
           <h3 class="text-dark mainCalculatorDisplayTitle">Annual Interest</h3>
           <h1 class="anninterest" id="annualInterestAmmount"><?php echo $row['currency']; ?> 0.00</h1>
           <h3 class="text-dark mb-4 pb-3 border-bottom border-secondary" id="annualRatePA">at 0% p.a.</h3>
           <div class="row mb-3 notForMonthly">
               <div class="col-sm-6">
                   <p class="text-secondary m-0">Maturity Interest</p>
               </div>
               <div class="col-sm-6">
                   <p class="text-secondary m-0" id="maturityInterest"><?php echo $row['currency']; ?> 0.00</p>
               </div>
           </div>
           <div class="row mb-4 notForMonthly">
               <div class="col-sm-6">
                   <p class="text-secondary m-0">Maturity Amount</p>
               </div>
               <div class="col-sm-6">
                   <p class="text-secondary m-0" id="maturityAmount"><?php echo $row['currency']; ?> 0.00</p>
               </div>
           </div>
           <p class="m-0"><small>* Please note that the amount displayed is an approximate value.</small></p>
           <p class="m-0"><small>* Amount is subjected to change as per the prevailing tax rates.</small></p>
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

            <!--       <a target="_blank" href="#https://www.facebook.com/comcreditlk/"><i class="fab fa-facebook-f"></i></a>

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