<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Contact | AlGhafoor Salts</title>
      <meta name="keywords" content="AlGhafoor Salts, Buy salt in bulk, buy pakistani salt">
      <meta name="description" content="AlGhafoor Salts is dedicated in providing you with the very best of TABLE SALT and PINK HIMALAYAN SALT.">
      <meta name="author" content="Al-Ghafoor Salts">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <?php
session_start();
    
    $errors = '';
    if(isset($_POST['submit'])){
        if(empty($_POST["name"]) || empty($_POST['email']) || empty($_POST['message'])){
            echo "empty";
        }else{
            $to = "<support@alghafoorint.com>";//<-----Put Your email address here.
            $name = $_POST['name']; 
            $email_address = $_POST['email']; 
            $message = $_POST['message']; 
            $products=$_POST["products"];
            $email_subject = "Contact form submission: $name";
            $email_body = "You have received a new message. ".
            " Here are the details:\n Name: $name \n ".
            "Email: $email_address\n $products \n Message \n $message";
            $headers = "From: $to\n";
            $headers .= "Reply-To: $email_address";
            $done = mail($to,$email_subject,$email_body);
    
            if($done == True){
               echo '<script>alert("Your Mail Sent Successfully")</script>';
            }else{
               echo '<script>alert("Your Mail is not Sent Successfully")</script>';
            }
            
        }
       
    }
    ?>
   </head>
   <!-- body -->
   <body class="main-layout">
      
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                        <ul class="sociel_link">
                         <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                       <div class="top-box">
                       <p ><a href='tel:+923479905282'>+923455841910 </a> | <a href = "mailto: support@alghafoorint.com"> support@alghafoorint.com</a></p>

                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="images/logo.jpg" alt="logo"/></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li > <a href="index.html">Home</a> </li>
                              <li> <a href="about.html">About</a> </li>
                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   Products
                                 </a>
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="salts.html">Salts</a>
                                   <a class="dropdown-item" href="rice.html">Rice</a>
                                 </div>
                               </li>
                              <li class="active"> <a href="contact.php">Contact</a> </li>
                               
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                  <li><a class="buy" href="requestforquote.php">Get Quote</a></li>
               </div>
            </div>
         </div>
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
    <form method="post" name="contact_form"
         action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <div class="row">
            
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <input class="form-control" placeholder="Your name" type="text" name="name"  value="" required>
               </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <input class="form-control" placeholder="Email" type="text" name="email" value=""  required>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                  <div class="input-group mb-3">
                     <select name="products" class="form-control" style="border: #ffc221 solid 2px !important; padding-bottom:0px;" id="inputGroupSelect01">
                        <option selected>Select Product...</option>
                        <option value="Edible White Salt">Edible White Salt</option>
                        <option value="Edible Pink Salt">Edible Pink Salt</option>
                        <option value="Lick Salt">Lick Salt</option>
                        <option value="Bath Salt">Bath Salt</option>
                        <option value="Basmati Rice">Basmati Rice</option>
                        <option value="Sella Rice">Sella Rice</option>
                     </select>
                  </div>
               </div>
            
               <div class="col-md-12">
                  <textarea class="textarea" name="message" placeholder="Message"value=""  required></textarea>
               </div>
               <div class=" col-md-12">
                  <input class="send" type="submit" name="submit" value="Submit">
               </div>
            </div>
      </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
      <!--  footer --> 
      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-md-3">
                     <ul class="sociel">
                         <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>conatct us</h3>
                     <span>Plot#10, new satellite town,<br>
                        Jauharabad, District Khushab, <br>Pakistan<br>
                        <a style="color: white;" href="tel:00923455841910">+92 345-5841910</a> </span>
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>ADDITIONAL LINKS</h3>
                     <ul class="lik">
                         <li> <a href="about.html">About us</a></li>
                         <li> <a href="#">Terms and conditions</a></li>
                         <li> <a href="#">Privacy policy</a></li>
                          <li> <a href="contact.html">Contact us</a></li>
                     </ul>
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>Products</h3>
                      <ul class="lik">
                    <li> <a href="#">Edible Pink Salt</a></li>
                         <li> <a href="#">Edible White Salt</a></li>
                         <li> <a href="#">Lick Salt</a></li>
                         <li> <a href="#">Bath Salt</a></li>
                  </div>
               </div>
                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="contact">
                     <h3>About Us</h3>
                     <span>Al-Ghafoor Salts are Miner, Manufacturer, Supplier & Exporter of
                        	Himalayan Rock Salt Products since 2012. </span>
                  </div>
               </div>
            </div>
         </div>
            <div class="copyright">
               <p>Copyright 2012 - 2020 All Right Reserved By <Span>Al-Ghafoor & Sons</Span>. Powered by <a href="https://siviq.pk">Rapid Services</a>.</p>
            </div>
         
      </div>
      </footr>
      <!-- end footer -->
      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });

         
         
      </script> 
      <script language="JavaScript">
         var frmvalidator  = new Validator("contactform");
         frmvalidator.addValidation("name","req","Please provide your name");
         frmvalidator.addValidation("email","req","Please provide your email");
         frmvalidator.addValidation("email","email",
           "Please enter a valid email address");
         </script>
       
   </body>
</html>