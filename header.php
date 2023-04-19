<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="customm.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    
<img src="image/hero-shape-1.svg" class="img-bg" alt="">
  <img src="image/hero-shape-2.svg"class="img-bg2" alt="">
  
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand " href="#">
        <img src="image/logo.svg" alt="" class="px-3 light_logo ">
        <img src="image/logo-white.svg" alt="" class="px-3 dark_logo ">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon toggle"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center .custom-navbar {
        width: 200px; /* Change to your desired width */
      }" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link activee " href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Roadmap</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pages
            </a>
            <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
              <li><a class="dropdown-item" href="#">Page 1</a></li>
              <li><a class="dropdown-item" href="#">Page 2</a></li>
              <li><a class="dropdown-item" href="#">Page 3</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Support</a>
          </li>
          
        </ul>
      </div>
      <div class="collapse navbar-collapse justify-content-end mx-4" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <label class="switch margin">
                  <input type="checkbox" id="night-mode-toggle">
                  <span class="slider round light_mode">
                    <i id="sun" class="fa fa-sun-o" aria-hidden="true"></i>
                    <i id="moon"   class="fa fa-moon-o" aria-hidden="true"></i>
                  </span>
                </label>
            </li>
          <li class="nav-item">
            <button class="action_btn ">Login</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  

  <div class="container-fluid mt-5 py-5">
    <div class="row">
      <div class="col-lg-2 "></div>
      <div class="p-5 col-lg-8 my-5 text-center">
        <h1>Tailwind CSS Template for Crypto, ICO and Web3</h1>
        <p>Resize this responsive page to see the effect! Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptates dignissimos voluptatibus commodi dicta sint asperiores rem, quia quaerat consequatur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, dolore.</p> 
      </div>
      <div class="col-lg-2"></div>



      
<?php
include ('footer.php');

?>

</body>
</html>