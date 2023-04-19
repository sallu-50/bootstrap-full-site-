<?php
include ('header.php')

?>

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

  

<div class="container-fluid mt-5 py-5">
    <div class="row">
      <div class="col-lg-2 "></div>
      <div class="p-5 col-lg-8 my-5 text-center">
        <h1>Tailwind CSS Template for Crypto, ICO and Web3</h1>
        <p>Resize this responsive page to see the effect! Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptates dignissimos voluptatibus commodi dicta sint asperiores rem, quia quaerat consequatur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, dolore.</p> 
      </div>
      <div class="col-lg-2"></div>
    </div>
    <div class="d-flex justify-content-center ">
      <div class="bg-warning  text-white borderr" ><i class="fa fa-btc" aria-hidden="true"></i></div>
      <div class="borderr2 text-white" ><i class="fa fa-btc" aria-hidden="true"></i></div>
      <div class="borderr3 text-white "><i class="fa fa-btc" aria-hidden="true"></i></div>
      <div class="borderr4 text-white "><i class="fa fa-btc" aria-hidden="true"></i></div>
      <div class="borderr5 text-white "><i class="fa fa-btc" aria-hidden="true"></i></div>
      <div class="borderr6 text-white "><i class="fa fa-btc" aria-hidden="true"></i></div>
    </div>
    

    <div class="container text-center my-5">
      <button id="show-text-btn" class="btn btn-primary border-0 rounded text-white p-2 px-2">Buy Token 70% Off</button>
      <div id="text" class="alert alert-info w-25 container text-center " role="alert" style="display: none;">
        <span class="">Coming Soon!</span>
        <button id="close-btn" type="button" class="btn-close float-end " aria-label="Close"></button>
        <span id="countdown" class="text-center "></span>
      </div>
      </div>

  </div>
  <hr>

  <div class="text-center my-5 " >
    <h3 class="my-5">Join the 20,000+companies using the our platrorm </h3>
    <div class="page-link ">
        <img src="image/uideck.svg" class=" page-link-img light_img m-3"alt="">
        <img src="image/uideck-white.svg" class=" page-link-img m-3 dark_img "alt="">

        <img src="image/tailgrids.svg"class="page-link-img m-3 light_img" alt="">
        <img src="image/TailGrids-white.svg"class="page-link-img m-3 dark_img " alt="">

        <img src="image/lineicons.svg"class="page-link-img m-3 light_img" alt="">
        <img src="image/LineIcons-white.svg"class="page-link-img m-3 dark_img " alt="">

        <img src="image/ayroui.svg"class="page-link-img m-3 light_img" alt="">
        <img src="image/AyroUI-white.svg"class="page-link-img m-3 dark_img " alt="">

        <img src="image/plainadmin.svg"class="page-link-img m-3 light_img" alt="">
        <img src="image/PlainAdmin-white.svg"class="page-link-img m-3 dark_img " alt="">
    </div>
    
  </div>
  <hr>

  <div class="container">
    <div class="justify-content-center">
      <div class="">
        <table class="table table-bordered bg-light Small shadow" >
          <thead class="text-center bg-success">
            <tr>
              <th>id</th>
              <th>Title</th>
              <th>image</th>
              <th>largeimage</th>
              <th>author</th>
              <th>date</th>
            </tr>
          </thead>
          <tbody class="text-center">
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
  

  <hr>

  <button>hide and show</button>
  <p id="demo"></p>
  <div id="hide" class="my-5 hide">

    <button onclick="countH1()">Count h1 tags</button>
    <div class="text-center py-5">
        <h3 class="text-primary">CRYPTO FEATURE</h3>
        <h1>Best Features</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, vel dolores! Necessitatibus,<br> tempora iusto! Aperiam mollitia doloribus vitae dolorum magni?</p>
    </div>
    <div class="row justify-content-center  my-2 py-5">
        <div class="text-center col-md-4 ">
            <div class=" font-size"><i class="fa fa-archive text-white bg-primary p-3 rounded-circle" aria-hidden="true"></i></div>
            <h1>Safe & Secure</h1>
            <p>Lorem ipsum dolor sit, ametconsectetur adipisicing elit. Saepe, libero? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, iste!</p>
        </div>
        <div class="text-center col-md-4  ">
            <div class="font-size"><i class="fa fa-bandcamp text-white bg-primary p-3 rounded-circle" aria-hidden="true"></i></div>
            <h1>Early Bonus</h1>
            <p>Lorem ipsum dolor sit, ametconsectetur adipisicing elit.Saepe, libero? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, iste!</p>
        </div>
        <div class="text-center col-md-4 ">
            <div class="font-size"><i class="fa fa-window-maximize text-white bg-primary p-3 rounded-circle" aria-hidden="true"></i></div>
            <h1>Universal Access</h1>
            <p>Lorem ipsum dolor sit, ametconsectetur adipisicing elit. Saepe, libero? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, iste!</p>
        </div>
    </div>
    <div class="row justify-content-center my-2 py-5">
        <div class="text-center col-md-4  ">
            <div class="font-size"><i class="fa fa-bandcamp text-white bg-primary p-3 rounded-circle" aria-hidden="true"></i></div>
            <h1>Secure Storage</h1>
            <p>Lorem ipsum dolor sit, ametconsectetur adipisicing elit.Saepe, libero? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, iste!</p>
        </div>
        <div class="text-center col-md-4  ">
            <div class="font-size"><i class="fa fa-window-maximize text-white bg-primary p-3 rounded-circle" aria-hidden="true"></i></div>
            <h1>Low Cost</h1>
            <p>Lorem ipsum dolor sit, ametconsectetur adipisicing elit.Saepe, libero? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, iste!</p>
        </div>
        <div class="text-center col-md-4  ">
            <div class="font-size"><i class="fa fa-archive text-white bg-primary p-3 rounded-circle" aria-hidden="true"></i></div>
            <h1>Several Profit</h1>
            <p>Lorem ipsum dolor sit, ametconsectetur adipisicing elit. Saepe, libero? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, iste!</p>
        </div>
    </div>
  </div>  

<div class="row token-dark">
      <div class="col-md-6">
          <div class="">
                
                

                <div class="wrapper">
                  <canvas id="myChart"></canvas>
                </div>
              <div class="wrapper2">
                <canvas id="chart2"></canvas>
              </div>
        </div>
    </div>
      <div class="col-md-6 p-5">
          <h4 class="text-primary">TOKEN</h4>
          <h1>Token Sale</h1>
          <h5 class="my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione laborum doloribus commodi maxime, quae aliquam? Eos molestiae explicabo consequuntur optio!</h5>
          <div class="d-flex">
              <div class=" text-primary rounded-circle p-3 my-1" style="background-color: rgb(35, 71, 185);"></div>
              <div class="px-2 py-2 "> 73% Financial Overhead</div>
          </div>
          <div class="d-flex">
              <div class=" text-primary rounded-circle p-3 my-1" style="background-color: rgb(62, 125, 255);"></div>
              <div class="px-2 py-2 ">55% Financial Overhead</div>
          </div>
          <div class="d-flex">
              <div class=" text-primary rounded-circle p-3 my-1" style="background-color: rgb(139, 166, 255);"></div>
              <div  class="px-2 py-2 ">38% Financial Overhead</div>
          </div>
          <div class="d-flex">
              <div class=" text-primary rounded-circle p-3 my-1" style="background-color: rgb(134, 150, 202);"></div>
              <div  class="px-2 py-2 ">20.93% Financial Overhead</div>
          </div>
      </div>
  </div>


<div class="container my-5">
    <div class="text-center p-5">
        <h4 class="text-primary">ROADMAP</h4>
        <h1>The Timeline</h1>
        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, at. Lorem, ipsum <br>dolor sit amet consectetur adipisicing elit. Dolorum, alias.</h6>
    </div>
    <div class="row mt-5 container">
      <div class="col-md-6 p-5 rounded febru" style="text-align: end;">
        <h5 class="text-right py-2" >Feb 25,2020</h5>
        <h6 class="text-right py-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, quaerat perspiciatis! Ipsam voluptas quod tempora ullam sunt qui enim consequuntur?</h6>
        <button  class="bg-light border-0 rounded float-right m-2 "><i class="fa fa-btc text-white padding bg-warning rounded-circle" aria-hidden="true"></i> Bitcoin</button>
      </div>
      <div class="col-md-6"></div>
    </div>
    <div class="row container mt-5">
      <div class="col-md-6"></div>
      <div class="col-md-6 p-5 rounded febru">
        <h5>Jan 25,2020</h5>
        <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, quaerat perspiciatis! Ipsam voluptas quod tempora ullam sunt qui enim consequuntur?</h6>
        <button class="bg-light border-0 rounded m-2"><i class="fa fa-bandcamp text-white p-2 bg-primary rounded-circle" aria-hidden="true"></i> Bitcoin</button>
      </div>
      
    </div>
    <div class="row container mt-5">
     <div class="col-md-6  p-5 rounded febru" style="text-align: end;">
      <h5 class="text-right" >mar 25,2020</h5>
      <h6  class="text-right" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, quaerat perspiciatis! Ipsam voluptas quod tempora ullam sunt qui enim consequuntur?</h6>
      <button class="bg-light border-0 rounded m-2" ><i class="fa fa-window-maximize text-white  p-2 bg-primary rounded-circle" aria-hidden="true"></i> Bitcoin</button>
     </div>
     <div class="col-md-6"></div>

    </div>
    <div class="row container mt-5">
      <div class="col-md-6"></div>
      <div class="p-5 col-md-6 rounded febru">
        <h5 class="text-right" >Feb 25,2020</h5>
        <h6 class="text-right ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, quaerat perspiciatis! Ipsam voluptas quod tempora ullam sunt qui enim consequuntur?</h6>
        <button  class="bg-light border-0 rounded mb-5 m-2"><i class="fa fa-btc text-white  padding bg-primary rounded-circle" aria-hidden="true"></i> Bitcoin</button>

      </div>
      
    </div>
    <hr class="horijental2">
  </div>

<div class=" ">
    <div class="p-5 text-center ">
      <h3 class="text-primary">OUR TEAM</h3>
      <h1>Meet our Team</h1>
      <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, at. Lorem, ipsum <br>dolor sit amet consectetur adipisicing elit. Dolorum, alias.</h5>
  </div>
  <div class="d-md-flex justify-content-around my-5">
      <div class="card shadow night-card">
        <img class="p-2 rounded2" src="image/image-01.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="">Matheus Ferrero</h5>
          <p class="text-secondary">Blockchain Developer</p>
              <a href="#" class="text-secondary m-1"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> 
              <a href="#" class="text-secondary m-1"><i class="fa fa-twitter"></i></a>  
              <a href="#" class="text-secondary m-1"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>  
              <a href="#" class="text-secondary m-1"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> 
        </div>
      </div>

      <div class="card shadow night-card">
        <img class="p-2 rounded2" src="image/image-02.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Eva Hudson</h5>
          <p class="title text-secondary">Marketing Expert</p>
              <a href="#" class="text-secondary m-1"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> 
              <a href="#" class="text-secondary m-1"><i class="fa fa-twitter"></i></a>  
              <a href="#" class="text-secondary m-1"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>  
              <a href="#" class="text-secondary m-1"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> 
        </div>
      </div>

      
      <div class="card shadow night-card">
        <img class="p-2 rounded2" src="image/image-03.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Jackie Sanders</h5>
          <p class="title text-secondary">Creative Designer</p>
              <a href="#" class="text-secondary m-1"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> 
              <a href="#" class="text-secondary m-1"><i class="fa fa-twitter"></i></a>  
              <a href="#" class="text-secondary m-1"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>  
              <a href="#" class="text-secondary m-1"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> 
        </div>
      </div>
      <div class="card shadow night-card">
        <img class="p-2 rounded2" src="image/image-04.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Jackie Sanders</h5>
          <p class="title text-secondary">SEO Expert</p>
              <a href="#" class="text-secondary m-1"><i class="fa fa-facebook-square " aria-hidden="true"></i></a> 
              <a href="#" class="text-secondary m-1"><i class="fa fa-twitter "></i></a>  
              <a href="#" class="text-secondary m-1"><i class="fa fa-linkedin-square " aria-hidden="true"></i></a>  
              <a href="#" class="text-secondary m-1"><i class="fa fa-youtube-play " aria-hidden="true"></i></a> 
        </div>
      </div>
  </div>
</div>

<div class="container-fluid ">
  <div class="p-5 text-center">
    <h4>TESTIMONIALS</h4>
    <h1>What Our Client Say's</h1>
    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, at. Lorem, ipsum <br>dolor sit amet consectetur adipisicing elit. Dolorum, alias.</h5>
  </div>
  <div class="d-md-flex">
    
    <div class=" position-relative my-5 mx-3  rounded night-client">
      <img class="position-absolute top-0 end-0 w-50" src="image/hero-shape-2.svg" alt="">
        <div class=" d-flex m-5">
            <img class="rounded" src="image/image-001 (1).jpg" alt="">
            <div  class="mx-2 p-2">
                <h5>Jason Key</h5>
                <h6>CEO & Founder @ CryptoX.</h6>
            </div>
        </div>
        <p class="mx-5">“I believe in lifelong learning and Learn. is a great place to learn from experts. I've learned a lot and recommend it to all my friends and familys.”</p>
        
    </div>
    <div class=" position-relative my-5 mx-3  rounded night-client">
      <img class="position-absolute top-0 end-0 w-50" src="image/hero-shape-2.svg" alt="">
        <div class=" d-flex m-5">
            <img class="rounded" src="image/image-002 (1).jpg" alt="">
            <div  class="mx-2 p-2">
                <h5 >Jason Key</h5>
                <h6 >CEO & Founder @ CryptoX.</h6>
            </div>
        </div>
        <p class="mx-5">“I believe in lifelong learning and Learn. is a great place to learn from experts. I've learned a lot and recommend it to all my friends and familys.”</p>
        
    </div>
  </div>

  <div class="d-md-flex">
    
  <div class=" position-relative my-5 mx-3  rounded night-client">
    <img class="position-absolute top-0 end-0 w-50" src="image/hero-shape-2.svg" alt="">
      <div class=" d-flex m-5">
          <img class="rounded" src="image/image-003 (1).jpg" alt="">
          <div  class="mx-2 p-2">
              <h5>Jason Key</h5>
              <h6>CEO & Founder @ CryptoX.</h6>
          </div>
      </div>
      <p class="mx-5">“I believe in lifelong learning and Learn. is a great place to learn from experts. I've learned a lot and recommend it to all my friends and familys.”</p>
      
  </div>
  <div class=" position-relative my-5 mx-3  rounded night-client">
    <img class="position-absolute top-0 end-0 w-50" src="image/hero-shape-2.svg" alt="">
      <div class=" d-flex m-5">
          <img class="rounded" src="image/image-004 (1).jpg" alt="">
          <div  class="mx-2 p-2">
              <h5 >Jason Key</h5>
              <h6 >CEO & Founder @ CryptoX.</h6>
          </div>
      </div>
      <p class="mx-5">“I believe in lifelong learning and Learn. is a great place to learn from experts. I've learned a lot and recommend it to all my friends and familys.”</p>
      
  </div>
</div>
</div>

<div class="container-fluid row">

  <div class="col-md-6">
    <div class=" mx-5 mt-5">
        <h5 class="text-primary pt-5">DOWNLOAD OUR APP</h5>
        <h1>The choice is yours, we've got you covered</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tristique, nisl ut viverra porttitor, dolor sem lacinia orci, et pretium quam mi a eros sed molestie est.</p>
        <div class=" d-flex">
            <button class="btn btn-dark p-2 m-2"> <i id="apple" class="fa fa-apple m-2" aria-hidden="true"></i> App Store</button>
            <button class="btn  p-2 m-2 border border-2 text-color"> <i id="apple2" class="fa fa-mobile m-2 " aria-hidden="true"></i>play Store</button>
        </div>
    </div>
  </div>

  <div class="col-md-6 my-5 container">
    <div class="rightapp-img">
        <img src="image/app-image-2.png" class="img-fluid" alt="">
    </div>
  </div>

</div>

<div class="container my-5">
  <div class=" text-center py-5">
    <h4 class="text-primary py2">FAQ</h4>
    <h1 class="py-2">Frequently Asked Questions</h1>
    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, at. Lorem, ipsum <br>dolor sit amet consectetur adipisicing elit. Dolorum, alias.</h5>
</div>
<div class="flex-column ">
    <div class=" my-5 mx-5 p-3 rounded night-quetion">
      <div class="question position-relative ">
        <span style="font-size: 20px; font-weight: bold;">How can I participate in the ICO Token sale?</span>
        
        <i class="fa fa-chevron-circle-down icon" style="position: absolute; right: 0; " aria-hidden="true"></i>
        <div class="answer py-3 text-secondary">
          <p>You can participate in the ICO Token sale by following these steps You can participate in the ICO Token sale by following these steps You can participate in the ICO Token sale by following these steps CO Token sale by following these steps You can participate in the ICO Token sale by following these steps...</p>
        </div>
      </div>
    </div> 
        <!--<h4>How can I participate in the ICO Token sale?</h4>
        <i class="fa fa-chevron-circle-down " aria-hidden="true"></i>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita a non officiis dolorum dolores! Incidunt debitis architecto minus accusamus ipsam est laudantium libero doloremque veritatis. Quos libero itaque nostrum blanditiis?</p>
        -->
    
        <div class=" my-5 mx-5 p-3 rounded night-quetion">
          <div class="question position-relative">
            <span style="font-size: 20px; font-weight: bold;">How can I participate in the ICO Token sale?</span>
            
            <i class="fa fa-chevron-circle-down icon" style="position: absolute; right: 0; " aria-hidden="true"></i>
            <div class="answer py-3 text-secondary">
              <p>You can participate in the ICO Token sale by following these steps You can participate in the ICO Token sale by following these steps You can participate in the ICO Token sale by following these steps CO Token sale by following these steps You can participate in the ICO Token sale by following these steps...</p>
            </div>
          </div>
        </div> 
        <div class=" my-5 mx-5 p-3 rounded night-quetion">
          <div class="question position-relative">
            <span style="font-size: 20px; font-weight: bold;">How can I participate in the ICO Token sale?</span>
            
            <i class="fa fa-chevron-circle-down icon" style="position: absolute; right: 0; " aria-hidden="true"></i>
            <div class="answer py-3 text-secondary">
              <p>You can participate in the ICO Token sale by following these steps You can participate in the ICO Token sale by following these steps You can participate in the ICO Token sale by following these steps CO Token sale by following these steps You can participate in the ICO Token sale by following these steps...</p>
            </div>
          </div>
        </div> 
        <div class=" my-5 mx-5 p-3 rounded night-quetion">
          <div class="question position-relative p-3">
            <span class=" " style="font-size: 20px; font-weight: bold; " >How can I participate in the ICO Token sale?</span>
            
            <i class="fa fa-chevron-circle-down icon" style="position: absolute; right: 0; " aria-hidden="true"></i>
            <div class="answer py-3 text-secondary">
              <p>You can participate in the ICO Token sale by following these steps You can participate in the ICO Token sale by following these steps You can participate in the ICO Token sale by following these steps CO Token sale by following these steps You can participate in the ICO Token sale by following these steps...</p>
            </div>
          </div>
        </div> 
</div>
</div>

<div class="container-fluid my-5">
    <div class=" my-5 p-5 text-center">
        <h4 class="text-primary">LATEST NEWS</h4>
        <h1>Recent News & Blogs</h1>
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, at. Lorem, ipsum <br>dolor sit amet consectetur adipisicing elit. Dolorum, alias.</h5>
    </div>
    <div id="card" class=" flex-container">
       

          

    </div>
    
</div>


<div class="container-fluid row  night-contact">
  <div class="my-5 col-md-6  ">
    <h4 class="text-primary m-3 pt-5">CONTACT US</h4>
    <h1 class=" m-3 ">Let's talk about <br>your problem.</h1>

    <div class="row">
        <div class="col-sm-5 m-3">
            <h5>Our Location</h5>
            <h6>401 Broadway, 24th Floor,</h6> 
           <h6>Orchard Cloud View, London</h6>
        </div>
        <div class="col-sm-5 m-3">
            <h5>Email Address</h5>
            <h6>info@yourdomain.com</h6>

            <h6>contact@yourdomain.com</h6>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5 m-3">
            <h4>Phone Number</h4>
            <h6>01324869686</h6>
            <h6> +550 9475 4543</h6>
        </div>
        <div class="col-sm-5 m-3">
            <h5>How Can We Help?</h5>
            <h6>Tell us your problem we will</h6>
            <h6> get back to you ASAP.</h6>
        </div>
    </div>
</div>

<div class="my-5 col-md-6 night-contact-form ">
    <div class=" my-5 ">
      

        <form class="">
          <h2>Send Us Message</h2>
          <div class="form-group mb-3">
            <label for="inputFullName">Full Name</label>
            <input type="text" class="form-control p-3" id="inputFullName" placeholder="Enter your full name">
          </div>
          <div class="form-group mb-3">
            <label for="inputEmail">Email address</label>
            <input type="email" class="form-control p-3" id="inputEmail" placeholder="Enter your email address">
          </div>
          <div class="form-group mb-3">
            <label for="inputMessage">Message</label>
            <textarea class="form-control" id="inputMessage" rows="5" placeholder="Enter your message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100  p-2">Submit</button>
        </form>
        
      
    </div>
</div>
</div>

<div class="container bg-darkk rounded my-5">
    <div class="row">
            <div class="col-md-6 ">
                <h1 class="text-white mt-5 m-2">Newsletter</h1>
                <h4 class="text-white mt-1 m-2 py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit..</h4>
            </div>
            <div class="col-md-6 my-auto">
                <input type="button" value="Enter email address" class="text-start   w-75 p-3 rounded border-0">
            </div>
    </div>
</div>
<?php
include ('footer.php');

?>




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

$(document).ready(function() {
  $.getJSON('https://admin.qolabb.com/api/blog_list', function(data) {
    $.each(data, function(i, item) {
      var card = $('<div>').addClass('card shadow border-0 bg-lightt my-4 rounded flex-item');
      var image = $('<img>').attr('src', item.image).attr('alt', item.title);
      var authorLink = $('<a>').addClass('mx-4 p-2 mt-3 text-decoration-none').attr('href', item.authorLink).html('<i class="fa fa-user px-2" aria-hidden="true"></i>' + item.author);
      var dateLink = $('<a>').addClass('pt-2 mt-3 text-decoration-none ').attr('href', item.dateLink).html('<i class="fa fa-calendar px-2" aria-hidden="true"></i>' + item.date);
      var titleLink = $('<a>').addClass('mx-4 p-2 mt-1 text-decoration-none').attr('href', 'blog_post.html?id=' + item.id).html('<h4>' + item.title + '</h4>');

      var bodyLink = $('<div>').addClass('mx-4 p-2 mt-1');
      var bodyPreview = $('<p>').html(item.body.substring(0, 300)); // Show the first 5 lines (assuming 60 characters per line)
      var bodyFull = $('<p>').html(item.body);
      bodyFull.hide(); // Hide the full body by default

      var toggleLink = $('<a>').addClass('text-primary').html('Show more');
      toggleLink.on('click', function(e) {
        e.preventDefault();
        window.open('blog_post.html?id=' + item.id, '_blank');
      });

     

      bodyLink.append(bodyPreview, toggleLink, bodyFull);

      var linkDiv = $('<div>').addClass('d-flex justify-content-between mx-3');
      linkDiv.append(authorLink, dateLink);

      card.append(image, linkDiv, titleLink, bodyLink);
      $('#card').append(card);
    });
  });
});




$.getJSON('https://admin.qolabb.com/api/blog_list', function(data){
  $.each(data, function(i, item){
    console.log(item.image)
    console.log(item.title)
    console.log(item.author)

  });
  console.table(data)
})

$.get("https://admin.qolabb.com/api/service_list", function(data) {
  $.each(data, function(i,v) {

console.log(v.title);
console.log(v.description);
});

  console.table(data);
});


$(document).ready(function() {
  
  function fetchData() {
    $.get("https://admin.qolabb.com/api/blog_list", function(data) {
      
      $("tbody").empty();
        $.each(data, function(i,item) {
        $("tbody").append("<tr>" +
                          "<td>" + item.id + "</td>" +
                          "<td>" + item.title + "</td>" +
                          "<td>" + item.image + "</td>" +
                          "<td>" + "</td>" +
                          "<td>" + item.author + "</td>" +
                          "<td>" + item.date + "</td>" +
                          "</tr>");
      });
    });
  }
  fetchData();
   setInterval(fetchData, 5000);
});






function countH1() {
  
  const h1Tags = document.querySelectorAll('#hide h1');
  for (let i = 0; i < h1Tags.length; i++) {
    console.log(`${h1Tags[i].innerText}`);
  }
  console.log(`Total h1 tags: ${h1Tags.length}`);
}

const h1Tags = document.querySelectorAll('#hide hll1');
console.log(h1Tags);


$(document).ready(function(){
  $("button").click(function(){
    $("#hide").toggle("slow");
  });
});



//night mode 

const nightModeToggle = document.querySelector('#night-mode-toggle');

nightModeToggle.addEventListener('click', function() {
	document.body.classList.toggle('night-mode');
  $('.light_mode').toggleClass('dark');
  $('.light_logo').toggleClass('hide');
  $('.dark_logo').toggleClass('show');
  $('.light_img').toggleClass('hide');
  $('.dark_img').toggleClass('show');
  
});



//count-down with close 

var showTextBtn = document.getElementById("show-text-btn");
var text = document.getElementById("text");
var closeBtn = document.getElementById("close-btn");
var countdown = document.getElementById("countdown");

showTextBtn.addEventListener("click", function() {
  text.style.display = "block";
  var secondsLeft = 10;
  countdown.innerHTML = secondsLeft;
  var countdownInterval = setInterval(function() {
    secondsLeft--;
    countdown.innerHTML = secondsLeft;
    if (secondsLeft === 0) {
      clearInterval(countdownInterval);
      text.style.display = "none";
    }
  }, 1000);
});

closeBtn.addEventListener("click", function() {
  text.style.display = "none";
});



//faq click an icon and text show 
const icons = document.querySelectorAll('.icon');
const answers = document.querySelectorAll('.answer');

icons.forEach((icon, index) => {
  icon.addEventListener('click', () => {
    answers[index].classList.toggle('show');
  });
});

  // change navbar background color on scroll
$(window).scroll(function() {
  if ($(window).scrollTop() > 0) {
    $('.navbar').addClass('navbar-scrolled');
  } else {
    $('.navbar').removeClass('navbar-scrolled');
  }
});



$(document).ready(function() {
  
  createChart('myChart', myChartData);
  createChart('chart2', myChartData2);
  
  $('.wrapper').hide();

  
    $('#test').click(function(e) {
      e.preventDefault();
				$('.wrapper').toggle();
        $('.wrapper2').toggle();
			});
  });


const myChartData = {
    type: 'doughnut',
    data: {
        labels: ["MONEY MARKET", "FIXED INCOME", "SPECIALTY", "DOMESTIC STOCK", "INTERNATIONAL STOCK", "BROKERAGELINK"],
        datasets: [{
            label: "Test",
            data: [47, 19, 71, 51, 22, 19],
            backgroundColor: [
                'rgba(255, 153, 102, 1)',
                'rgba(198, 201, 202, 1)',
                'rgba(128, 116, 110, 1)',
                'rgba(42, 210, 201, 1)',
                'rgba(97, 71, 103, 1)',
                'rgba(95, 122, 118, 1)'
            ],
            borderColor: [
                'rgba(255, 153, 102, 1)',
                'rgba(198, 201, 202, 1)',
                'rgba(128, 116, 110, 1)',
                'rgba(42, 210, 201, 1)',
                'rgba(97, 71, 103, 1)',
                'rgba(95, 122, 118, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
      
				title: {
					display: true,
					text: "This is your 401(k) account's current asset mix"
				},
      animation: {
					animateScale: true,
					animateRotate: true
				},
      responsive: true,
      maintainAspectRatio: false,
        
      legend: {
					position: 'right',
        labels:{
          boxWidth: 10,
          padding: 12
        }
				},
    }
};

const myChartData2 = {
  type: 'doughnut',
    data: {
        datasets: [{
            label: "Test2",
            data: [ 39.2, 19.6, 20.4, 10.8],
            backgroundColor: [
                'rgba( 35,71, 185)',
                'rgba(62, 125, 255)',
                'rgba(139,166, 255)',
                'rgba(134,150, 202)'
                
            ]
            
           
        }]
    },
    options: {
      
				title: {
					display: true,
					text: "This is your 401(k) account's current asset mix"
				},
      animation: {
					animateScale: true,
					animateRotate: true
				},
      responsive: true,
      maintainAspectRatio: false,
        
      legend: {
					position: 'right',
        labels:{
          boxWidth: 20,
          padding: 12,
        }
				},
    }
};

function createChart(chartId, chartData) {
    const ctx = document.getElementById(chartId);
    const myChart = new Chart(ctx, {
      type: chartData.type,
      data: chartData.data,
      options: chartData.options,
    });
  };




</script>

</body>
</html>