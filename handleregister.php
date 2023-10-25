<?php  
include 'dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $carname = $_POST['carname'];
    
   
    $cartype = $_POST['cartype'];
    $carprice = $_POST['carprice'];
    $carspeed = $_POST['carspeed'];
    $image = $_FILES['image'];
   
    $filename = $image['name'];
    $filepath = $image['tmp_name'];
    $fileerror = $image['error'];

    if($fileerror == 0){
        $destfile  = 'upload/'.$filename;
        
        move_uploaded_file($filepath, $destfile);
             
        $sql = "INSERT INTO `cardetails` (`name`, `type`, `price`, `speed`,`image`) VALUES ( '$carname','$cartype', '$carprice','$carspeed', '$destfile');";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        move_uploaded_file($_FILES['image']['tmp_name'], "$file");
                        echo("Success inserted Data");
                        header("location: register_as_carseller.php?register=success");
                    }
                    else{
                        echo"Data not inserted";
                        header("location: register_as_carseller.php?register=fail");
                    }
       

    }
    



}
?>