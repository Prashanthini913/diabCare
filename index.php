<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiabCare</title>

    <!-- FontAwesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> 

    <!-- CSS file link -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</head>
<body>
    <!-- Header Section -->
    <section id="home">

        <div class="container-fluid">  
        
            <nav class="navbar navbar-expand-lg navbar-da rk">
                <a class="navbar-brand h1 logo">diab<span>Care</span></a>
                <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a></li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a></li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Reviews</a></li>
                        </li>
                    </ul>
                    
                    <a class="btn btn-outline-light" href="#appointment" role="button">Make an appointment</a>
                    
                </div>
        </nav>
        <div class="row">
            <div class="col-lg-6">
                <h1>Believe in a Diabetes-free nation.</h1>
                <h3>Visit us now to make a change!</h3>
                <a class="btn btn-outline-light" href="#appointment" role="button">Make an appointment</a>
            </div>
        </div>

    </div>

  </section>

  <!-- About Section     -->
  <section class="about" id="about">
    <div class="container-fluid ">
        <span>About Us</span>
    <div class="row">
        
        <div class="col-lg-6">
            
            <h1>True And Extensive Healthcare For Your Family</h1>
            <h2>DiabCare is a leading, diabetes hospital offering best-in-class medical services for nearly 2 decades. With paramount focus on patient care, patient safety and patient satisfaction, we are committed to offer exemplary medical services going beyond the norm of healthcare.</h2>
            <br>
            <h2>Keeping with our vision, as an institution, we believe in empathy, human care, medical expertise and being social conscious.</h2>
            <br><br><br><br>
            <a class="btn btn-outline-light" href="#appointment" role="button">Make an appointment</a>
            
        
        </div>
        <div class="col-lg-6">
        <img src="images/doc-pic.jpg" class="" alt="doctor" id="doc-pic">
        </div>
    </div>
    </div>
   </section>

   <!-- Services -->
   <section id="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="services-h1">Check your blood sugar level now and get a diagnosis</h1>
                </div>
                <div class="col-lg-6"> 
                    <div class="form-group">
                        <form action="" method="post" id="form" name="dia">
                            <h3 id="services-h3">Enter blood sugar level (mg/dL):</h3> <br>                        
                            <input type="text" name="sugar"  style="margin: 0px 20px;" required>
                            <input type="submit" class="btn btn-outline-dark" name="sub" value="Submit">
                        </form>
                        <?php 
                                include_once "services.php";
                                if(isset($_POST["sub"]))
                                {
                                    $sugar = $_POST["sugar"];

                                    $query = "INSERT INTO sugar_level (sugar) VALUES ($sugar)";
                                    if($sugar>=200) 
                                    {
                                        echo "<h4 class='hfour'>You need immediate assistance and a lot of care!</h4>";
                                        echo "<br>";
                                        echo "<h4 class='hfour'>Get in touch with us now!";
                                        echo "<br>";echo "<br>";
                                        echo "<a class='btn btn-dark' href='appointment' role='button'>Make an appointment</a>";
                                    }
                                }

                        ?>
                    </div>                   
                </div>               
            </div>
        </div>
   </section>

   <!-- Appointment -->
   <section id="appointment">
    

        <!-- <div class="mb-4">
            <h2 class="text-center">Contact us</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="contact.php" method="post">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone Number:</label>
                    <input type="text" name="number" class="form-control">
                </div>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </form>
        </div> -->
        <div class="mx-auto" style="width: 50%;">
            <form id="cform"  style=" padding-top: 100px">
                <div class="mb-3">
                    <label class="form-label formLabel" name="uname">Your name:</label>
                    <input type="text" class="form-control" id="exampleInputName">
                </div>
                <label class="form-label formLabel">Area:</label>
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Select area</option>
                    <option value="1">Adyar</option>
                    <option value="2">KK Nagar</option>
                    <option value="3">Porur</option>
                    <option value="4">Nanganallur</option>
                    <option value="5">West Mambalam</option>
                </select>
                <div class="mb-3">
                    <label class="form-label formLabel" name="number">Contact Number:</label>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Your number" >
                    <button class="btn btn-outline-light" type="button" id="button-addon2" name="otp">Send OTP</button>
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" style="color:#85f4ff">Get a call to confirm timings</label>
                </div>
                
                <button type="submit" class="btn btn-outline-light">Submit</button>
            </form>
            <?php
                if(isset($_POST['otp'])){
                        require('textlocal.class.php');
                        require('credential.php');

                    $textlocal = new Textlocal(false, false, API_KEY);

                    $numbers = array($_POST['number']);
                    $sender = 'TXTLCL';
                    $otp = mt_rand(1000, 9999);
                    $message = 'Hello' . $_POST['uname']. " This is your OTP:". $otp;

                    try {
                        $result = $textlocal->sendSms($numbers, $message, $sender);
                        setcookie('otp', $otp);
                        echo "<p class='formLabel'>OTP sent successfully..!</p>";
                    } catch (Exception $e) {
                        die('Error: ' . $e->getMessage());
                    }
                }
            ?>
        </div>
   </section>



    

   












    <!-- FontAwesome script -->
     <script src="https://kit.fontawesome.com/cd72ef3b0b.js" crossorigin="anonymous"></script>
    
    <!-- JS file link -->
    
    <script src="script.js"></script>
</body>
</html>