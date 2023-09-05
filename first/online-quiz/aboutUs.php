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
/* .banner-img{
    height: 400px;
    width: 100%;
 
  
}
.logo{
  width: 50%;
  display: flex;
} */


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

      <h1>ok</h1>


    

   
</body>
</html>