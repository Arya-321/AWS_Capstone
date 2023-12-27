<?php
  function sendDataToLambda(){
    //Get the data from the form
    $UserID = $_POST['UserID'];
    $receiveName = $_POST['receiveName'];
    $status = "processing";
    $SenderName = $_POST['SenderName'];
    $shippingType = $_POST['shippingType'];
    $weightKG = $_POST['weightKG'];
    
    $data = array(
      'UserID' => $UserID,
      'receiveName' => $receiveName,
      'status' => $status,
      'SenderName' => $SenderName,
      'shippingType' => $shippingType,
      'weightKG' => $weightKG
    );
    
    $json_data = json_encode($data);

    return $json_data;
  }
  
  if(isset($_POST['submit'])){
    $api_key = "ogEDwZWQuF2SKvZnMvtq8a88D06rM5Hf53dN3SZR";
    
    $headers = array(
      'Content-Type: application/json',
      'x-api-key: ' . $api_key,
    );

    $json_data = sendDataToLambda();
    $ch = curl_init('https://ffagfklcqd.execute-api.ap-southeast-2.amazonaws.com/experimental/test-input');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    try 
    {
      $result = curl_exec($ch);
      curl_close($ch);
      echo $result;
    } 
    catch (Exception $e) 
    {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    // $result = curl_exec($ch);
    // curl_close($ch);
    // echo $result;
  }


?>


<!DOCTYPE html>
<html>
  <head>
    <title>jQuery Form Example</title>
    <link
      rel="stylesheet"
      href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
    />
    <meta charset="utf-8" />
    <title>FASTER - Logistics Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
      <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
          <div class="d-inline-flex align-items-center text-white">
            <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
            <small class="px-3">|</small>
            <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
          </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <div class="d-inline-flex align-items-center">
            <a class="text-white px-2" href="">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="text-white px-2" href="">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="text-white px-2" href="">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a class="text-white px-2" href="">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="text-white pl-2" href="">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
      <nav
        class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5"
      >
        <a href="index.html" class="navbar-brand ml-lg-3">
          <h1 class="m-0 display-5 text-uppercase text-primary">
            <i class="fa fa-truck mr-2"></i>Faster
          </h1>
        </a>
        <button
          type="button"
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between px-lg-3"
          id="navbarCollapse"
        >
          <div class="navbar-nav m-auto py-0">
            <a href="index.html" class="nav-item nav-link">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="service.html" class="nav-item nav-link">Service</a>
            <a href="price.html" class="nav-item nav-link">Price</a>
            <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                >Pages</a
              >
              <div class="dropdown-menu rounded-0 m-0">
                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                <a href="single.html" class="dropdown-item">Blog Detail</a>
              </div>
            </div>
            <a href="tracking.html" class="nav-item nav-link">Tracking</a>
            <a href="index_tester.html" class="nav-item nav-link active"
              >Input Name</a
            >
          </div>
          <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block"
            >Get A Quote</a
          >
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
      <div class="container text-center py-5">
        <h1 class="text-primary mb-4">Safe & Faster</h1>
        <h1 class="text-white display-3 mb-5">Logistics Services</h1>
      </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-8">
            <h6 class="text-primary text-uppercase font-weight-bold">
              AJAX Form
            </h6>
            <h1 class="mb-4">Processing an AJAX Form</h1>
            <div class="contact-form bg-secondary" style="padding: 30px">
              <div id="success"></div>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" >
                <div class="control-group">
                  <label for="UserID">User ID</label>
                  <input
                    type="text"
                    class="form-control border-0 p-4"
                    id="UserID"
                    name="UserID"
                    placeholder="User ID"
                    required="required"
                    data-validation-required-message="Please enter user id"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <label for="SenderName">Sender Name</label>
                  <input
                    type="text"
                    class="form-control border-0 p-4"
                    id="SenderName"
                    name="SenderName"
                    placeholder="Sender Name"
                    required="required"
                    data-validation-required-message="Please enter the Sender Name"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <label for="receiveName">Receiver Name</label>
                  <input
                    type="text"
                    class="form-control border-0 p-4"
                    id="receiveName"
                    name="receiveName"
                    placeholder="Receiver Name"
                    required="required"
                    data-validation-required-message="Please enter the receiver name"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <label for="SenderName">Shipping Type</label>
                  <select name="shippingType" id="shippingType">
                    <option value="Regular">Regular</option>
                    <option value="Express">Express</option>
                    <option value="Cargo">Cargo</option>
                  </select>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <label for="weightKG">Weight (KG)</label>
                  <input
                    type="number"
                    class="form-control border-0 p-4"
                    id="weightKG"
                    name="weightKG"
                    placeholder="10"
                    required="required"
                    data-validation-required-message="Please enter the Weight (KG)"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div>
                  <button
                    class="btn btn-primary py-3 px-4"
                    type="submit"
                    name="submit"
                    id="submit"
                  >
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
      <div class="row pt-5">
        <div class="col-lg-7 col-md-6">
          <div class="row">
            <div class="col-md-6 mb-5">
              <h3 class="text-primary mb-4">Get In Touch</h3>
              <p>
                <i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York,
                USA
              </p>
              <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
              <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
              <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light btn-social mr-2" href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social mr-2" href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social mr-2" href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
            <div class="col-md-6 mb-5">
              <h3 class="text-primary mb-4">Quick Links</h3>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Home</a
                >
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>About Us</a
                >
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Our Services</a
                >
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a
                >
                <a class="text-white" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Contact Us</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Newsletter</h3>
          <p>
            Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum
            sea tempor magna tempor. Accu kasd sed ea duo ipsum. Dolor duo
            eirmod sea justo no lorem est diam
          </p>
          <div class="w-100">
            <div class="input-group">
              <input
                type="text"
                class="form-control border-light"
                style="padding: 30px"
                placeholder="Your Email Address"
              />
              <div class="input-group-append">
                <button class="btn btn-primary px-4">Sign Up</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
      style="border-color: #3e3e4e !important"
    >
      <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
          <p class="m-0 text-white">
            &copy; <a href="#">Your Site Name</a>. All Rights Reserved.

            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed by <a href="https://htmlcodex.com">HTML Codex</a>
          </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
          <ul class="nav d-inline-flex">
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Privacy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Terms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Help</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Footer End -->
  </body>
</html>
