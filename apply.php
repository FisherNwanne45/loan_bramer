<?php  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

include('resources/config.php'); 

if (isset($_POST['submit'])) {
    // Collect form data
    $desired_loan_amount = $_POST['desired_loan_amount'];
    $annual_income = $_POST['annual_income'];
    $loan_purpose = $_POST['loan_purpose'];
    $name_title = $_POST['name_title'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birth_date_month = $_POST['birth_date_month'];
    $birth_date_day = $_POST['birth_date_day'];
    $birth_date_year = $_POST['birth_date_year'];
    $marital_status = $_POST['marital_status'];
    $emails = $_POST['emails'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $address_line_2 = $_POST['address_line_2'];
    $city = $_POST['city'];
    $state_province = $_POST['state_province'];
    $postal_zip_code = $_POST['postal_zip_code'];
    $years_at_residence = $_POST['years_at_residence'];
    $employer_name = $_POST['employer_name'];
    $employer_first_name = $_POST['employer_first_name'];
    $employer_last_name = $_POST['employer_last_name'];
    $occupation = $_POST['occupation'];
    $years_of_experience = $_POST['years_of_experience'];
    $gross_monthly_income = $_POST['gross_monthly_income'];
    $monthly_rent_mortgage = $_POST['monthly_rent_mortgage'];
    $down_payment_amount = $_POST['down_payment_amount'];
    $comments = $_POST['comments'];
    $consent_credit_check = isset($_POST['consent_credit_check']);
    $agree_info_true = isset($_POST['agree_info_true']);
    $admin_email = $_POST['admin_mail'];
    $sender = $_POST['sender'];
    $pass = $_POST['pass'];

    // Prepare email body
    $body = "LOAN APPLICATION \n";
    $body .= "Desired Loan Amount: $$desired_loan_amount\n";
    $body .= "Annual Income: $$annual_income\n";
    $body .= "Loan Purpose: $loan_purpose\n";
    $body .= "Name: $name_title $first_name $last_name\n";
    $body .= "Date of Birth: $birth_date_month/$birth_date_day/$birth_date_year\n";
    $body .= "Marital Status: $marital_status\n";
    $body .= "Email: $emails\n";
    $body .= "Phone: $phone\n";
    $body .= "Address: $address\n";
    if (!empty($address_line_2)) {
        $body .= "Address Line 2: $address_line_2\n";
    }
    $body .= "City: $city\n";
    $body .= "State/Province: $state_province\n";
    $body .= "Postal/Zip Code: $postal_zip_code\n";
    $body .= "Years at Residence: $years_at_residence\n";
    $body .= "\n_________________________________\n\n";
    $body .= "EMPLOYMENT INFORMATION\n";
    $body .= "Employer: $employer_name\n";
    $body .= "Employer Contact: $employer_first_name $employer_last_name\n";
    $body .= "Occupation: $occupation\n";
    $body .= "Years of Experience: $years_of_experience\n";
    $body .= "Gross Monthly Income: $$gross_monthly_income\n";
    $body .= "Monthly Rent/Mortgage: $$monthly_rent_mortgage\n";
    $body .= "Down Payment Amount: $$down_payment_amount\n";
    $body .= "Comments: $comments\n";
    
    // Check consent checkboxes
    $body .= $consent_credit_check ? "Confirmed consent for credit check.\n" : "Credit check consent not provided.\n";
    $body .= $agree_info_true ? "Confirmed information is true and accurate.\n" : "Confirmation of information accuracy missing.\n";

    // Configure PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = $sender; // SMTP username
        $mail->Password = $pass; // SMTP password
        $mail->SMTPSecure = 'STARTTLS'; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to 

        // Email settings
        $mail->setFrom($sender, "$name_title $first_name $last_name");
        $mail->addAddress($admin_email); // Admin email address
        $mail->addReplyTo($emails); // User's email for reply-to

        // Content
        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = "Loan Application - $first_name $last_name";
        $mail->Body = $body;

        // Send email
        $mail->send();
        echo '<script>window.location="success.php";</script>';
        exit; // Stop further execution after redirect
    } catch (Exception $e) {
        echo "An error occurred while sending the email: {$mail->ErrorInfo}";
        exit; // Stop further execution if sending fails
    }
}

// Fetch data from database
$result = $conn->query("SELECT * FROM site");

while ($row = $result->fetch_assoc()) {
    $results = $conn->query("SELECT * FROM login");

    while ($rw = $results->fetch_assoc()) {
       
   
?>

<!DOCTYPE html>

<html lang="en">


    <!-- Mirrored from www/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 03:20:13 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <head>

        <meta charset="UTF-8">

        <link rel="icon" type="image/png" href="frontend/img/favi/fav-icon.ico" />





        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description"
            content="<?php echo $row['name']; ?> is a leading finance company in <?php echo $row['country']; ?> whose purpose is uplifting the lives of people with simple act of love.">

        <meta name="title" content="">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">



















        <meta name="keywords"
            content="leading finance company in <?php echo $row['country']; ?>, Funds managements, vehicle leasing, buy a vehicle, get a loan, Funds management rates">






        <title>Application - <?php echo $row['name']; ?></title>







        <meta property="og:title" content="<?php echo $row['name']; ?>" />

        <meta property="og:type" content="website" />

        <meta property="og:site_name" content="<?php echo $row['name']; ?>" />

        <meta property="og:description"
            content="<?php echo $row['name']; ?> is a leading finance company in <?php echo $row['country']; ?> whose purpose is uplifting the lives of people with simple act of love." />

        <meta property="og:url" content="index.php" />

        <meta property="og:image" content="frontend/img/og-cc.png" />

        <meta property="og:image:type" content="image/png" />

        <meta property="og:image:width" content="1200" />

        <meta property="og:image:height" content="630" />

        <meta name="twitter:card" content="<?php echo $row['name']; ?>">
        <meta name="twitter:site" content="<?php echo $row['name']; ?>">
        <meta name="twitter:title" content="<?php echo $row['name']; ?>">
        <meta name="twitter:description"
            content="<?php echo $row['name']; ?> is a leading finance company in <?php echo $row['country']; ?> whose purpose is uplifting the lives of people with simple act of love.">
        <meta name="twitter:creator" content="<?php echo $row['name']; ?>">
        <meta name="twitter:image" content="frontend/img/og-cc.png">



        <link rel="stylesheet" href="frontend/css/bootstrap.min.css">



        <link rel="stylesheet" href="frontend/css/material-design-iconic-font.min.css">



        <link href="frontend/css/google_font.css" rel="stylesheet">



        <link rel="stylesheet" href="frontend/css/owl.carousel.min.css" crossorigin="anonymous" />



        <link rel="stylesheet" href="frontend/css/aos.css" />




        <script src="frontend/js/jquery-3.6.0.js" crossorigin="anonymous"></script>


        <script src="frontend/js/owl.carousel.min.js" crossorigin="anonymous">



        </script>



        <script src="frontend/js/fontawasome.js" crossorigin="anonymous"></script>







        <link rel="stylesheet" href="frontend/css/style4818.css?v=79">



        <link rel="stylesheet" href="frontend/css/responsive8e0e.css?v=8">







        <script src="frontend/js/recaptcha_api.js"></script>





    </head>

    <body>







        <nav id="header" class="navbar navbar-expand-lg navbar-light fixed-top bg-light shadow">







            <div class="container">







                <a class="logo-img" aria-current="page" href="en.php"><img src="frontend/img/english_logo.png"
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







        







             







              <a class="headr-ctr" href="contact-us/en">Get a Quote</a>







            







            </div> -->



                        <div class="top_item lang-switcher d-flex">

                            <a class="translate-links" href="https://<?php echo $row['apply']; ?>">New Application </a>
                            <a class="translate-links" href="track.php">Track Status</a>

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







                                <a class="nav-link  active " href="en.php">HOME</a>







                            </li>















                            <li class="nav-item">







                                <a class="nav-link " href="about-us/profile/en.php">ABOUT</a>







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
                                                                        src="uploads/your_needs_en/YourNeedIcon1_1645451076.svg"
                                                                        alt="yourNeeds">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Need A Leasing?</h5>







                                                                    <a class="sub-links  "
                                                                        href="your-needs/need-a-leasing/en.php">View</a>















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="uploads/your_needs_en/YourNeedIcon2_1652933172.svg"
                                                                        alt="yourNeeds">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Need Urgent Cash?</h5>







                                                                    <a class="sub-links  "
                                                                        href="your-needs/need-urgent-cash/en.php">View</a>















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="uploads/your_needs_en/YourNeedIcon3_1645451215.svg"
                                                                        alt="yourNeeds">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Saving For Future?</h5>







                                                                    <a class="sub-links  "
                                                                        href="your-needs/saving-for-future/en.php">View</a>















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="uploads/your_needs_en/YourNeedIcon4_1645451259.svg"
                                                                        alt="yourNeeds">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Business Loan And More?</h5>







                                                                    <a class="sub-links  "
                                                                        href="your-needs/business-loan-and-more/en.php">View</a>















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
                                                                        src="uploads/main_solution_icon_en/MainSolution1_1645451357.svg"
                                                                        alt="solutions">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Deposits</h5>














                                                                    <a class="sub-links "
                                                                        href="products/deposits/fixed-deposit/en.php">Fixed
                                                                        Deposit</a>






















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="uploads/main_solution_icon_en/MainSolution2_1645451419.svg"
                                                                        alt="solutions">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Leasing &amp; Hire Purchase</h5>














                                                                    <a class="sub-links "
                                                                        href="products/leasing-hire-purchase/auto-loan/en.php">Auto
                                                                        Loan</a>
























                                                                    <a class="sub-links "
                                                                        href="products/leasing-hire-purchase/vehicle-leasing/en.php">Vehicle
                                                                        Leasing</a>






















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="uploads/main_solution_icon_en/MainSolution3_1645451461.svg"
                                                                        alt="solutions">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Loan</h5>














                                                                    <a class="sub-links "
                                                                        href="products/loan/capital-investment-fund/en.php">Capital
                                                                        Investment Fund</a>














                                                                    <a class="sub-links "
                                                                        href="products/loan/start-up/en.php">Start up
                                                                        Loan</a>






















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="uploads/main_solution_icon_en/MainSolution4_1645451490.svg"
                                                                        alt="solutions">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Microfinance</h5>














                                                                    <a class="sub-links "
                                                                        href="products/microfinance/micro-loan/en.php">Debt
                                                                        Refinance</a>














                                                                    <a class="sub-links "
                                                                        href="products/microfinance/sme-loan/en.php">Personal
                                                                        Loan</a>














                                                                    <a class="sub-links "
                                                                        href="products/microfinance/consumer-loan/en.php">Consumer
                                                                        Loan</a>






















                                                                </div>







                                                            </div>







                                                        </div>














                                                        <div class="col-sm-4 col-md-3 py-lg-4 py-2 seperation">







                                                            <div class="row sub-main mb-3">







                                                                <div class="col-3 p-0 px-md-2">







                                                                    <img class="w-100"
                                                                        src="uploads/main_solution_icon_en/MainSolution5_1645451523.svg"
                                                                        alt="solutions">







                                                                </div>







                                                                <div class="col-9">







                                                                    <h5>Revolving Business Loan</h5>














                                                                    <a class="sub-links "
                                                                        href="products/revolving-business-loan/revolving-business-loan/en.php">Revolving
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














                                <a class="nav-link " href="help/downloads/annual-reports/en.php">TESTIMONIALS</a>







                            </li>















                            <!--<li class="nav-item">-->
                            <!--  <a class="nav-link " href="communicated/en">Communicate</a>-->
                            <!--</li>-->







                            <li class="nav-item">







                                <a class="nav-link " href="contact-us/en.php">CONTACT US</a>







                            </li>







































                        </ul>















                    </div>







                </div>







            </div>







        </nav>















        <div class="main-header-img">




            <img class="w-100" src="storage/aboutus/profile/ban1.jpg" alt="Breadcrumb Banner">


            <div class="inner-topic">

                <h3> Loan Application</h3>





            </div>

            <div class="black-strip"></div>

        </div>








        <section class="welcome-sec py-4 my-md-5">

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-md-8 welcome-note" data-aos="fade-right" data-aos-offset="0"
                        data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-once="true">


                        <h4> <?php echo $row['name']; ?></h4>

                        <h3>Loan Application Form</h3>
                        <br>





                        <?php if (isset($successMessage)) : ?>
                        <p class="success-message"><?php echo $successMessage; ?></p>
                        <?php elseif (isset($errorMessage)) : ?>
                        <p class="error-message"><?php echo $errorMessage; ?></p>
                        <?php endif; ?>





                        <form method="post" action="">
                            <input type="hidden" name="admin_mail" value="<?php echo $row['email']; ?>">
                            <input type="hidden" name="sender" value="<?php echo $row['email']; ?>">
                            <input type="hidden" name="pass" value="<?php echo $rw['pass']; ?>">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="desired_loan_amount">Desired Loan Amount:</label>
                                    <input class="form-control" type="number" name="desired_loan_amount"
                                        id="desired_loan_amount" required min="0" step="0.01">
                                </div>
                                <div class="col-md-6">
                                    <label for="annual_income">Annual Income:</label>
                                    <input class="form-control border-1 mr-2" type="number" name="annual_income"
                                        id="annual_income" required min="0" step="1">
                                </div>
                            </div><br>
                            <div class="row">
                                <div>
                                    <label for="loan_purpose">Loan Purpose:</label>
                                    <select class="form-control border-1 mr-2" name="loan_purpose" id="loan_purpose"
                                        required>
                                        <option value="">Select Purpose</option>
                                        <option value="Debt Refinancing">Debt Refinancing</option>
                                        <option value="Capital Investment Fund">Capital Investment Fund</option>
                                        <option value="Start Up Loans">Start Up Loans</option>
                                        <option value="Personal Loans">Personal Loans</option>
                                        <option value="Venture Capital">Venture Capital</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div><br>

                            <h4>Contact Information</h4>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="name_title">Title:</label>
                                    <select class="form-control" name="name_title" id="name_title">
                                        <option value="Mr.">Mr.</option>
                                        <option value="Ms.">Ms.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="first_name">First Name:</label>
                                    <input class="form-control" type="text" name="first_name" id="first_name" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="last_name">Last Name:</label>
                                    <input class="form-control" type="text" name="last_name" id="last_name" required>
                                </div>
                            </div><br>
                            <div>
                                <label for="birth_date_month">Date of Birth:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <select class="form-control" name="birth_date_month" id="birth_date_month"
                                            required>
                                            <option value="">Select Month</option>
                                            <?php
  // Loop through all months (1-12)
  for ($month = 1; $month <= 12; $month++) {
    // Get the month name using PHP's date function
    $month_name = date('F', mktime(0, 0, 0, $month, 1));
    // Create the option element with month number as value and month name as label
    echo "<option value='$month'>$month_name</option>";
  }
  ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" name="birth_date_day" id="birth_date_day" required>
                                            <option value="">Select Day</option>
                                            <?php
  // Loop through all days (1-31)
  for ($day = 1; $day <= 31; $day++) {
    // Create the option element with day number as value and label
    echo "<option value='$day'>$day</option>";
  }
  ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" name="birth_date_year" id="birth_date_year"
                                            required>
                                            <option value="">Year</option>
                                            <?php
      // Generate options for birth year (replace with logic for 18+ years)
      for ($year = date("Y") - 18; $year >= 1900; $year--) {
        echo "<option value='$year'>$year</option>";
      }
      ?>
                                        </select>
                                    </div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div>
                                    <label for="marital_status">Marital Status:</label>
                                    <select class="form-control" name="marital_status" id="marital_status" required>
                                        <option value="">Select Status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email">Email:</label>
                                    <input class="form-control" type="email" name="emails" id="emails" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">Phone Number:</label>
                                    <input class="form-control" type="tel" name="phone" id="phone" required>
                                </div>
                            </div><br>

                            <h4>Address Information</h4>
                            <div class="row">
                                <div>
                                    <label for="address">Street Address:</label>
                                    <input class="form-control" type="text" name="address" id="address" required>
                                </div>
                                <div>
                                    <label for="address_line_2">Street Address Line 2 (Optional):</label>
                                    <input class="form-control" type="text" name="address_line_2" id="address_line_2">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="city">City:</label>
                                    <input class="form-control" type="text" name="city" id="city" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="state_province">State/Province:</label>
                                    <input class="form-control" type="text" name="state_province" id="state_province"
                                        required>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="postal_zip_code">Postal/Zip Code:</label>
                                    <input class="form-control" type="text" name="postal_zip_code" id="postal_zip_code"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label for="years_at_residence">Years at Residence:</label>
                                    <select class="form-control" name="years_at_residence" id="years_at_residence"
                                        required>
                                        <option value="">Select Duration</option>
                                        <option value="0-1">0-1 Year</option>
                                        <option value="1-2">1-2 Years</option>
                                        <option value="3-4">3-4 Years</option>
                                        <option value="5+">5+ Years</option>
                                    </select>
                                </div>
                            </div><br>



                            <h4>Employment Information</h4>
                            <div>
                                <label for="employer_name">Employer Name:</label>
                                <input class="form-control" type="text" name="employer_name" id="employer_name"
                                    required>
                            </div><br>
                            <div>
                                <label for="employer_first_name">Employer Contact (First Name):</label>
                                <input class="form-control" type="text" name="employer_first_name"
                                    id="employer_first_name">
                            </div><br>
                            <div>
                                <label for="employer_last_name">Employer Contact (Last Name):</label>
                                <input class="form-control" type="text" name="employer_last_name"
                                    id="employer_last_name">
                            </div><br>
                            <div>
                                <label for="occupation">Occupation:</label>
                                <input class="form-control" type="text" name="occupation" id="occupation" required>
                            </div><br>
                            <div>
                                <label for="years_of_experience">Years of Experience:</label>
                                <select class="form-control" name="years_of_experience" id="years_of_experience"
                                    required>
                                    <option value="">Select Experience</option>
                                    <option value="0-1">0-1 Year</option>
                                    <option value="1-2">1-2 Years</option>
                                    <option value="3-4">3-4 Years</option>
                                    <option value="5+">5+ Years</option>
                                </select>
                            </div><br>
                            <div>
                                <label for="gross_monthly_income">Gross Monthly Income:</label>
                                <input class="form-control" type="number" name="gross_monthly_income"
                                    id="gross_monthly_income" required min="0" step="1">
                            </div><br>
                            <div>
                                <label for="monthly_rent_mortgage">Monthly Rent/Mortgage:</label>
                                <input class="form-control" type="number" name="monthly_rent_mortgage"
                                    id="monthly_rent_mortgage" required min="0" step="1">
                            </div><br>
                            <div>
                                <label for="down_payment_amount">Down Payment Amount (if applicable):</label>
                                <input class="form-control" type="number" name="down_payment_amount"
                                    id="down_payment_amount" min="0" step="0.01">
                            </div><br>
                            <div>
                                <label for="comments">Comments:</label>
                                <textarea class="form-control" name="comments" id="comments"></textarea>
                            </div><br>

                            <div>
                                <input type="checkbox" id="consent_credit_check" name="consent_credit_check" required>
                                <label for="consent_credit_check">I authorize credit check for this
                                    application.</label>
                            </div><br>
                            <div>
                                <input type="checkbox" id="agree_info_true" name="agree_info_true" required>
                                <label for="agree_info_true">I confirm the information provided is true and
                                    accurate.</label>
                            </div><br>
                            <div>
                                <button class="btn footer-btn form-control" type="submit" name="submit">Send
                                    Application
                                    Now</button>
                            </div>
                        </form>

    </body>

</html>


</div>

<div class="col-md-4 >
<div  video-popup" data-aos="fade-left" data-aos-offset="0" data-aos-duration="1000" data-aos-easing="ease-in-out"
    data-aos-once="true">
    <p> You dont have to wait for months for approval. Track your application status online!</p>
    <div class="abt_img">

        <img class="w-100" src="check.gif" alt="abt_img">
        <br>




    </div>


</div>
</div>




</div>



</div>

<!-- Modal -->

<div class="modal fade" id="ytModal" tabindex="-1" role="dialog" aria-hidden="true">

    <!--<div class="modal fade" id="ytModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->

    <div class="modal-dialog" role="document">

        <div class="modal-content">





            <div class="modal-body">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>

                <!-- 16:9 aspect ratio -->

                <div class="ratio ratio-16x9">

                    <iframe class="embed-responsive-item" id="video" allow="autoplay"></iframe>

                </div>



            </div>



        </div>

    </div>

</div>

<!-- end Modal -->

</section>







<!-- ======= Footer ======= -->

<footer id="footer">





    <div class="footer-top">

        <div class="container">

            <div class="row">



                <div class="col-lg-3 col-md-12 footer-contact">

                    <div class="w-100 text-center">

                        <a class="log_a d-block" href="en.php"><img class="logo"
                                src="frontend/img/black_english_logo.png" alt="logo"></a>

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
                                    <!--
                  <a target="_blank" href="https://www.facebook.com/comcreditlk/"><i class="fab fa-facebook-f"></i></a>

                  <a target="_blank" href="https://www.instagram.com/commercialcredit_/"><i class="fab fa-instagram"></i></a>

                 <a target="_blank" href="https://lk.linkedin.com/company/commercial-credit-limited"><i class="fab fa-linkedin-in"></i></a>

                  <a target="_blank" href="https://youtube.com/channel/UC6Rw7R8REmTE0p3OTXAfyCg"><i class="fab fa-youtube"></i></a>

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

                        <li><i class="fas fa-chevron-right"></i> <a href="en.php">Home</a></li>

                        <li><i class="fas fa-chevron-right"></i> <a href="about-us/profile/en.php">About</a>
                        </li>





                        <li><i class="fas fa-chevron-right"></i> <a href="about-us/careers/en.php">Careers</a>
                        </li>



                        <li><i class="fas fa-chevron-right"></i> <a href="terms-and-condtion/en.php">Terms of
                                Services</a></li>

                        <li><i class="fas fa-chevron-right"></i> <a href="privacy-policy/en.php">Privacy
                                Policy</a></li>

                    </ul>

                </div>



                <div class="col-lg-3 col-md-4 col-sm-6 footer-links solu">

                    <h4>Solutions</h4>

                    <ul>






                        <li><i class="fas fa-chevron-right"></i> <a href="products/deposits/fixed-deposit/en.php">Fund
                                Management</a></li>








                        <li><i class="fas fa-chevron-right"></i> <a
                                href="products/leasing-hire-purchase/venture/en.php">Venture Capital</a></li>
















                        <li><i class="fas fa-chevron-right"></i> <a
                                href="products/loan/capital-investment-fund/en.php">Capital Investment Fund</a></li>












                        <li><i class="fas fa-chevron-right"></i> <a href="products/microfinance/micro-loan/en.php">Micro
                                Loan</a></li>
















                        <li><i class="fas fa-chevron-right"></i> <a
                                href="products/revolving-business-loan/revolving-business-loan/en.php">Revolving
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

                    <form class="subscriptionForm" id="subscriptionForm" action="contact/subscribe" method="POST"
                        autocomplete="off">

                        <input type="hidden" name="_token" value="rNfS4e8BMW3EENHhahneSeEZ62syON2JnzohktF0">
                        <div class="input-group">

                            <input type="email" required name="subscribe_email" value="" class="form-control"
                                placeholder="Your E-mail" aria-label="Your Email" aria-describedby="button-addon2">

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





                    <a href="privacy-policy/en.php">Privacy Policy </a> | <a href="terms-and-condtion/en.php">Terms of
                        Services </a>


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
<script src="frontend/js/bootstrap.bundle.min.js"></script>

<script src="frontend/js/script.js"></script>

<script>
var url = window.location.href;

var subUrl = url.substring(0, url.lastIndexOf("index.php"));



document.getElementById("translate-english").href = subUrl + '/en';

document.getElementById("translate-sinhala").href = subUrl + '/si';

document.getElementById("translate-tamil").href = subUrl + '/ta';
</script>




<script src="frontend/js/aos.js"></script>
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
<?php } } ?>