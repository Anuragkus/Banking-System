
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/navbar.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">    
    <title>Basic Banking System</title>
    <style type="text/css">
    button{
        position: relative;
        display: inline-block;
        padding: 12px 36px;
        margin: 10px 0;
        color: 	#ff0000;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 18px;
        letter-spacing: 2px;
        border-radius: 8px;
        background-color: #9dc5c3;
        background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
    }
    .mycol{
        /* border:2px solid red; */
        background-color:#14DFE7;
    }
    h1{
       font-family: 'Dancing Script', cursive; 
       color:red;
    }
    li{
        font-family: 'Dancing Script', cursive; 
        color: #781e86;
        font-size:22px;
    }
    
    </style>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>
        <!-- Introduction section -->
        <div class="container container-fluid " style="max-width: 100%;">
        <div class="row mycol">
            <div class="col-lg-7 col-md-6 col-sm-4 col-4 col-lg-4 d-flex justify-content-center">
                <div class="text-center align-self-center text-danger"> 
                    <h1>Spark Bank Of India</h1>
                    <li>Best Bank for Transfer money</li>
                    <li>Best Bank for recieve money</li>
                </div>
                
               </div>
            <div class="col-lg-5 col-md-6 col-sm-8 col-8">
                <img class=" img-fluid ms-3" src="img/bank1.jpg">
            </div>
        </div>
      </div>
        </div>
    </div>    
     
    <div class="row activity text-center">

<div class="col-md act">
    <br><br>
    <img src="img/user.png" class="img-fluid">
    <br><br>
    <a href="transfermoney.php"><button class="btn df bg-dark" style=font-size:14px;width:200px;height:50px;>View all Users</button></a>
</div>
<div class="col-md act">
    <br><br>
    <img src="img/tm1.png" class="img-fluid">
    <br><br>
    <a href="transfermoney.php"><button class="btn df bg-dark" style="font-size:15px;width:200px; height:50px;">Transfer Money</button></a>
</div>
<div class="col-md act">
    <img src="img/th.png" class="img-fluid mt-5" >
    <br>
    <a href="transactionhistory.php"><button class="btn df bg-dark" style="font-size:14px; width:200px; height:50px; margin-top:2.4rem" >View Transfer History</button></a>
</div>
</div>
</div>
                

    
    
    <footer class="text-center mt-5 py-2  bg-dark df">
        <p id="ftcol">&copy 2021. Made by <b>Anurag Kushwaha</b> <br> For the Project of  <b>The Sparks Foundation</b></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </div>
</body>

</html>