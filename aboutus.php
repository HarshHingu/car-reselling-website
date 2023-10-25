<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="" href="carfavicon.jpg">
    <title>About us</title>
    <style>
        #titlebar {
            background-color: #e61c51;
            border-color: black;
            border-style: ridge;
            padding: 1rem; 
            font-size: 2.5rem;
            text-align: center; 
        }

        #aboutusid {
            margin: 0;
            font-size: 22px;
            text-align: center; 
        }

        .aboutcontent {
            margin: 0 auto;
            max-width: 800px; 
        }

        #ponetag,
        #pthreetag {
            font-size: 20px;
            font-weight: bolder;
        }

        #ptwotag,
        #pfourtag {
            font-size: 17px;
            font-weight: bold;
        }

       
        body {
            background-color: aquamarine;
            margin: 0; 
        }

        /* Larger screens */
@media screen and (min-width: 768px) {
    #titlebar {
        padding: 1rem 5rem; 
    }
}

/* Medium screens */
@media screen and (max-width: 767px) {
    #titlebar {
        padding: 1rem; 
    }
}

/* Small screens */
@media screen and (max-width: 576px) {
    #titlebar {
        padding: 1rem 2rem; 
    }
    
    #aboutusid {
        font-size: 18px;
    }

    .aboutcontent {
        max-width: 100%; 
        margin: 0 10px; 
    }
}

    </style>
</head>

<body>
    <h3 id="titlebar">Car Reseller website</h3>
    <br>
    <h4 id="aboutusid">About us</h4> <br>
   
    <div class="aboutcontent">
        <p id="ponetag">For Car Sellers</p>
        <p id="ptwotag">We can help you sell your car and help you get the best price in the market for your Car. </p>
        <br>
        <p id="pthreetag">For Car Buyers</p>
        <p id="pfourtag">We are India's Number 1 Car reselling Company. We are in the business of Car reselling.</p>
    </div>
</body>

</html>
