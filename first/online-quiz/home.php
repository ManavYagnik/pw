<?php
session_start();

?>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Home Page</title>
   
<style>
  *{
    box-sizing: border-box;
    margin: 0;
    top: 0;
  }


.navbarhelp{
    width: 100%;
    display: flex;
    margin-right: 60px;
    justify-content: end;
    
    
}

.NAV-TEXT{
  font-weight: bolder;
}


.navbarhelp li{
  padding: 20px;
}

.blue-box {
  margin: 40px;
  /* margin-bottom: -40px; */
  height: 180px;
  background-color: #5A4BDA;
}

#blue_row {
  display: flex;
  justify-content: space-around;
  margin-top: 40px;

}

#feedback_card {
  margin: 40px;
}
/* .banner-img{
    height: 400px;
    width: 100%;
 
  
}
.logo{
  width: 50%;
  display: flex;
} */
.h1_text {
  text-align: center;
  color: white;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <a class="navbar-brand" href="#"> <img src="./img/cwlogo.png" alt="" width="80px" height="80px"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbarhelp">
                  <li class="nav-item">
                    <a class="nav-link active  NAV-TEXT" aria-current="page" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active  NAV-TEXT" aria-current="page" href="aboutUs.php">About Us</a>
                  </li>
                  <li class="nav-item">
                   <a class="nav-link active  NAV-TEXT" aria-current="page" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active  NAV-TEXT" aria-current="page" href="register.php">Registration</a>
                  </li>
                  
              </div>
              
         
        
        </div>

      </nav>


      <div class="banner-img"> <img src="./img/logo-1.png" alt="" width="100%"></div>

      <!-- <div class="navbar-container">

        <div class="logo-container">
          <img src="./images/logo-1.png" alt="">
    
          <button class="hamburger" onclick="togogle_menu()">
            <div id="line1"></div>
            <div id="line2"></div>
            <div id="line3"></div>
          </button>
    
    
    
    
    
    
        </div>
        </label>
        <ul id="menuList">
    
          <li><a href="./index.html">About Us</a></li>
          <li><a href="#">Quality</a></li>
          <li><a href="./product.html">Products</a></li>
          <li><a href="./productgallery.html">Product Gallery</a></li>
          <li><a href="./partnerwithus.html"> Partner With Us</a></li>
          <li><a href="./contactus.html">Contact Us</a></li>
    
    
    
    
        </ul>
    
      </div>

      <div class="home-header"></div> -->

      <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Previous Year Question</h5>
        <p class="card-text">All Latest Previous Year Question Papers.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Test Series</h5>
        <p class="card-text">Attempt Mock Test Zone Wise</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Free Mock</h5>
        <p class="card-text">Ultra Fast Question Solving</p>
      </div>
    </div>
  </div>
</div>
    

<div class="blue-box">
  <div class="h1_text">
    <h2>India's Most Loved Educational Platform</h2>
    <h6>With Physics Wallah, Begin Your Jouney To Success.</h6>
  </div>

  <div class="row-1" id="blue_row">
    <div>
      <h3 style="color:white;font-weight:bold;text-align:center;">10M+</h3>
      <h6 style="color:white;">Happy Students</h6>
    </div>
    <div>
      <h3 style="color:white;font-weight:bold;text-align:center;">31300+</h3>
      <h6 style="color:white;">Video Lectures</h6> 
    </div>
    <div>
      <h3 style="color:white;font-weight:bold;text-align:center;">2500+</h3>
      <h6 style="color:white;">Mock Test</h6>
    </div>
    <div>
      <h3 style="color:white;font-weight:bold;text-align:center;">8L+</h3>
      <h6 style="color:white;">Questions</h6>
    </div>
  </div>  
  
</div>
</div>


<div class="row row-cols-1 row-cols-md-3 g-4" id="feedback_card">
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <p class="card-text">Lodu</p>
        <h5 class="card-title" style="text-align:end;">Card title</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <p class="card-text">lodu</p>        
        <h5 class="card-title" style="text-align:end;">Card title</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <p class="card-text">lodu.</p>
        <h5 class="card-title" style="text-align:end;">Card title</h5>
      </div>
    </div>
  </div>
  
</div>
</body>
</html>