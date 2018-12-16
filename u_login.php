<?php

 if(isset($_POST['submit'])){
	 
    $db=mysqli_connect('localhost','root','','hnidb') or die('unnable to connect ');
	$username=$_POST['uid'];
	$password=$_POST['pwd'];
	echo $username;
	if(!empty($username) && !empty($password)){
	$query="select uid,email,password from user_table where email=" ." '$username' and password='$password'";
	$data=mysqli_query($db,$query) or die('unnable to query');
	$rowcount=mysqli_num_rows($data);
	if($rowcount==1)
	{
		$row=mysqli_fetch_array($data);
		//echo $row;
		//	echo 'success';
		setcookie('user_id',$row['id']);
		setcookie('username',$row['username']);
		header('Location:userhomepage.html');
        
	}
	else{
		echo'<h2> MISMAtch</h2> Sorry,you must enter a valid username and password'.'to log in an access this page.'; 
    }
	}
	else
	{
		echo 'kindly fill the details';
	}
	
   }
   ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
	Login Form
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>
<body >

    <div class="section section-signup page-header" style="background-image: url('./assets/img/city.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
              <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">User Login</h4>
                  
                </div>
                
                <div class="card-body">
                  <div class="input-group">
                    
                  </div>
                  <div class="input-group">
                    &nbsp;&nbsp;&nbsp;
                    <input type="text" id="uid" name="uid" class="form-control" placeholder="ID/Username...">
                  </div>
                  <div class="input-group">
                    &nbsp;&nbsp;&nbsp;
                    <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password...">
                  
                </div>
				<br/><br/>
				<div class="footer text-center">
                  <button type="submit" name ="submit" class="center btn btn-primary btn-link" >LOGIN</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
	<!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="./assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }


    
  </script>
</body>
</html>
