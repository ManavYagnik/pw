<?php
session_start();
include "../connection.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Now</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css1/bootstrap.min.css">
    <link rel="stylesheet" href="../css1/font-awesome.min.css">
    <link rel="stylesheet" href="../css1/owl.carousel.css">
    <link rel="stylesheet" href="../css1/owl.theme.css">
    <link rel="stylesheet" href="../css1/owl.transitions.css">
    <link rel="stylesheet" href="../css1/animate.css">
    <link rel="stylesheet" href="../css1/normalize.css">
    <link rel="stylesheet" href="../css1/main.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css1/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<style>
    .error-pagewrap {
    min-height: 100vh;
    text-align: center;
    background-color: #343a40!important;
}

.text-center >h3{
    color: white!important;
}
</style>

<body>

	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login-2">
				<h3>Give Feedback</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="" name="form1" method="post">
                            <div class="row">
                            <div class="form-group col-lg-12">
                                    <label>ID</label>
                                    <input type="number" name="id" class="form-control">
                                </div>
                                
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Password</label>
                                    <input type="text" name="text" class="form-control">
                                </div>
                                
                            </div>
                            <div class="text-center" style="margin-top: 10px">
                                <button type="submit" name="submit1" class="btn btn-success loginbtn">Register</button>
                            </div>
                            <div class="alert alert-success" id="success" style="margin-top: 10px; display: none" >
                                <strong>Success!</strong> Registration Successful.
                            </div>
                            <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                                <strong>Already exist!</strong> Username already exists.
                            </div>
                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>

 
    <?php
  $res = mysqli_query($link,"select * from feedback_card ") or die(mysqli_error($link));
  while($row = $res->fetch_assoc()) {
    echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["text"] . "<br>";
}





    if(isset($_POST["submit1"]))
    {
        $count=0;
        $res = mysqli_query($link,"select * from feedback_card where name ='$_POST[name]'") or die(mysqli_error($link));
        $count=mysqli_num_rows($res);
       
        
        if($count>0)
        {
            ?>
            <script type="text/javascript">
                document.getElementById("success").style.display="none";
                document.getElementById("failure").style.display="block";
            </script>
            <?php
        }
        else{
            mysqli_query($link,"insert into feedback_card values('$_POST[id]','$_POST[name]','$_POST[text]')") or die(mysqli_error($link));
            ?>
            <script type="text/javascript">
                document.getElementById("success").style.display="block";
                document.getElementById("failure").style.display="none";

            </script>
            <?php

        }
    }
    // $res = mysqli_query($link,"select * from feedback_card where name ='$_POST[name]'") or die(mysqli_error($link));
    // echo $res;
    ?>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>