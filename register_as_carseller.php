<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="" href="carfavicon.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Register Car</title>
    <style>
      body{
        background-color: #E1D9D1;
      }
    h2{
        background-color: #ff4a4a;
        border-color: black;
        border-style: ridge;
/*        padding: 0px 0px 0px 490px;*/
        text-align: center;
      }
    form{
        font-size: 18px;
        font-weight: 500;
/*        padding: 0px 0px 0px 450px;*/
    }
    
    .mybtnclass{
/*      padding: 0px 0px 0px 330px; */
     text-align: center; 
    }
    button{
      color: #000000;
      background-color: #ff4a4a;
      border: 1px solid lightblue;
      font-weight: 500;
    }

    input {

      font-weight: 500;
      width: 100%;
      box-sizing: border-box;
      margin-bottom: 10px;
    }


        .radio-container {
            display: flex;
            align-items: center;
        }

        input[type="radio"] {
            margin-right: 5px; 
        }

        label {
            margin-right: 15px; 
        }

    @media (min-width: 768px) {
            .myformdiv {
                width: 30%;
                margin: auto;
            }
        }
    </style>
  </head>
  <body class="wholePage">
  <h2>Register for reselling your car</h2>
      <?php
    if(isset($_GET['register']) && $_GET['register'] == 'success'){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are registered on our website as a Car Seller
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
?>

<div class="myformdiv">

 <form action="handleregister.php" method="POST" enctype="multipart/form-data">
 
 <br>
    <label for="carname">Car Name: &nbsp;</label>
  <input type="text" id="carname" name="carname" required> <br> <br>


  <label>Type of Car </label>

  <div class="radio-container"> 
  <input type="radio" id="normal" name="cartype" value="normal">
  <label for="normal">Normal Car</label> 

  <input type="radio" id="luxury" name="cartype" value="luxury">
  <label for="luxury">Luxury Car </label> 

  <input type="radio" id="sports" name="cartype" value="sports">
  <label for="sports">Sports Car</label> <br> <br>
  </div>


  <label for="carprice">Car Price: &nbsp; &nbsp;</label>
  <input type="tel" id="carprice" name="carprice" onkeypress="if(this.value.length==8) return false;"> <br> <br>

  <label for="carspeed">Top Speed: &nbsp; &nbsp;</label>
  <input type = "tel" id="carspeed" name="carspeed" onkeypress="if(this.value.length==3) return false;" required> <br> <br>

 

  <label for="image">Upload Image: &nbsp; &nbsp;</label>
  <input type="file" name="image" id="image" multiple> <br> <br>
  

  

       <div class="mybtnclass"> <button type="submit" value="submit">Submit</button> </div> <br><br>
</form>

</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    
    
  </body>
</html>
