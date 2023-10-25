<?php
  session_start();
  if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == false) {
      header("location: userlogin.php");
      exit();
    }
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

        <link rel="icon" type="" href="carfavicon.jpg">

    <title>Car Reseller</title>
</head>

<body>

    <p id="titlebar">Car reselling website </p>
        <nav class="mynavbar">
        <div class="navbar-custom">
            <ul class="mynavbar-nav">
                
                <li class="nav-items">
                    <a class="mynav-link" href="register_as_carseller.php">Car Seller Registration</a>
                </li>
                <li class="nav-items">
                    <a class="mynav-link" href="aboutus.php">About</a>
                </li>
                <li class="nav-items">
                    <a class="mynav-link" href="contactus.php">Contact</a>
                </li>
                <a href="logout.php" role="button" class="btn btn-primary float-right">Log out</a>
            </ul>
        </div>
    </nav>


    
  
    


     <?php
         include 'dbconnect.php';

    
        // SELECT * FROM `dbinfluencertable` WHERE `category` LIKE 'onetofivethousand'
        $sql= "SELECT * FROM `cardetails`";  
        $result= mysqli_query($conn,$sql);
        $numrows = mysqli_num_rows($result);
        if($numrows > 0){
            while($row = mysqli_fetch_assoc($result)){   
                echo '
                <!-- Data  Box from db  -->
            
                
                
                <!-- 1st box  -->
            
                <div class="musing-flex" style="display: flex; flex-direction: column; align-items: center;">
                
                    <div><img src="'.$row['image'].'" alt="There supposed to be Image here" width="430" height="410">
                    </div>
                      <div>
                        <p class="name-id"> Car Name: '. $row['name'] .'</p>
                        <p class="name-id"> Car Type: '. $row['type'] .'</p>
                        <p class="name-id"> Car Price: '. $row['price'] .'</p>
                        <p class="name-id"> Top Speed: '. $row['speed'] .'</p>
                       
                    </div>
                </div>';                     
    ?>
<?php
}
}

?>


    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">

                        <h3>Contact us</h3><br>
                        <p>Email: contact@carseller.com</p>
                        <p>Phone number: +91 9322394326</p>
                    </div>
                    <div class="col-sm-6 col-md-3 item">

                        <h3>About us</h3>
                        <br>
                        <p>We are India's Number 1 Car reselling Company. We are in the business of Car reselling.</p>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Details</h3>
                        <br>
                        <p>Car Resellers private limited</p>
                        <p>We are a Mumbai, India based company currently serving in India</p>
                    </div>
                </div>
                <p class="copyright">Car Reseller © 2023</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>