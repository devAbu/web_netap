<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    
    <!--  forcing the browser the render at the most recent version's standards and allowing the site to render in ChromeFrame for those users who have it, without affecting anyone else -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>Sign up | Netap</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/ui-kit.css" rel="stylesheet" />
    	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>

  
    </head>

	  

<body class="login-page sidebar-collapse">
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(assets/img/login.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
				
                    <form >
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="assets/img/logo.png" alt="">
                            </div>
                        </div>

                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="ui-icons location_world"></i>
                                </span>
                                <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="ui-icons location_pin"></i>
                                </span>
                                <input type="text" class="form-control" id="city" name="city" placeholder="City">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input type="password" placeholder="Password" id="password" name="password" class="form-control" />
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input type="password" placeholder="Confirm password" id="rpassword" name="rpassword" class="form-control" />
                            </div>
                        </div>
						<div id="alert" class="alert">
						</div>
		
                        <div class="footer text-center">
                           <input class="btn btn-primary btn-round btn-lg btn-block" id="btnDone" value="Done">
                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="signin.html" class="link">Sign in</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="#ibrahim" class="link">Need Help?</a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>

		<script>
		$("#alert").slideUp();
		$("#btnDone").click(function(){
			$("#alert").removeClass('alert-success').removeClass('alert-danger');
            
			var country = $("#country").val();
			var city = $("#city").val();
			var password = $("#password").val();
            var rpassword = $("#rpassword").val();
			var fullname = $("#fullname").val();
			var age = $("#age").val();
			var occupation = $("#occupation").val();
			var email = $("#email").val();
			
			if (country  == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your country.');
				$("#alert").slideDown(500).delay(2000).slideUp(500);
			}else if(city == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your city.');
				$("#alert").slideDown(500).delay(2000).slideUp(500);
			}else if(password == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please create password.');
				$("#alert").slideDown(500).delay(2000).slideUp(500);
			}else if(password != rpassword){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Passwords dont match!');
				$("#alert").slideDown(500).delay(2000).slideUp(500);
			}else{
				$.ajax({
			
					url: "./server.php?task=register&name="+fullname+"&age="+age+"&occupation="+occupation+"&email="+email+"&country="+country+"&city="+city+"&password="+password,
                    success: function (data) {
						if(data.indexOf("sucess") !== -1){
							window.location.replace("profile-page.php");
						}else{
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Error</strong> Username or Email already exists. Please try another one.');
							$("#alert").slideDown(500).delay(2000).slideUp(500);
						}
                    },
                    error: function (data, err) {
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Problem occured</strong> Please try later.');
							$("#alert").slideDown(500).delay(2000).slideUp(500);
					}
				});
			}
		});
	</script>

        <footer class="footer">
            <div class="container">
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed and developed by
                    <a href="http://www.facebook.com/ibrahim.muzaferija" target="_blank">Ibrahim</a>.
                </div>
            </div>
        </footer>
    </div>
</body>
    
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/js/ui-kit.js" type="text/javascript"></script>
  

</html>
<?php

    $fullname = $_REQUEST['fullname'];
    $age = $_REQUEST['age'];
    $occupation = $_REQUEST['occupation'];
    $email = $_REQUEST['email'];
    

    echo "<input type = 'text' hidden value='$fullname' id='fullname' name='fullname'>";
	echo "<input type = 'text' hidden value='$age' id='age' name='age'>";
    echo "<input type = 'text' hidden value='$occupation' id='occupation' name='occupation'>";
    echo "<input type = 'text' hidden value='$email' id='email' name='email'>";
?>