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
    <script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/ui-kit.js" type="text/javascript"></script>

    </head>

<body class="login-page sidebar-collapse">
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(assets/img/login.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form id="signupForm" class="form" method="post" action="signup-continued.php">
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="assets/img/logo.png" alt="">
                            </div>
                        </div>
                        <form action="" method="post">
                            
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" name="companyName" id="companyName" class="form-control" placeholder="Company name">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="ui-icons location_bookmark"></i>
                                </span>
                                <input type="text" name="description" id="description" class="form-control" placeholder="Short description" >
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="ui-icons text_caps-small"></i>
                                </span>
                                <input type="text" id="location" name="location" class="form-control" placeholder="Location" >
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="ui-icons ui-1_email-85"></i>
                                </span>
                                <input type="email" id="companyEmail" name="companyEmail" class="form-control" placeholder="Company email" >
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="ui-icons text_caps-small"></i>
                                </span>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Choose a password" >
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="ui-icons text_caps-small"></i>
                                </span>
                                <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Confirm password" >
                            </div>
                        </div>
						<div id="alert" class="alert"></div>
						<div class="footer text-center">
                            <input value="Done" id="btnDone" class="btn btn-primary btn-round btn-lg btn-block" >
                        </div>
				        </form>
						
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
        <footer class="footer">
            <div class="container">
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>, Designed and developed by
                    <a href="http://www.facebook.com/ibrahim.muzaferija" target="_blank">Ibrahim</a>.
                </div>
            </div>
        </footer>
    </div>
    <script>
    
    $("#alert").slideUp();
    $("#btnDone").click(function(){
        $("#alert").removeClass('alert-success').removeClass('alert-danger');
        
        var companyName = $("#companyName").val();
        var description = $("#description").val();
        var location = $("#location").val();
        var companyEmail = $("#companyEmail").val();
        var password = $("#password").val();
        var cpassword = $("#cpassword").val();
        
        
			function validateEmail($email) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				return emailReg.test( $email );
			}

			if (companyName  == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter company name.');
				$("#alert").slideDown(500).delay(2000).slideUp(500);
			}else if(description == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter short description.');
				$("#alert").slideDown(500).delay(2000).slideUp(500);
			}else if(location == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter your location.');
				$("#alert").slideDown(500).delay(2000).slideUp(500);
			}else if(companyEmail == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter company email address.');
				$("#alert").slideDown(500).delay(2000).slideUp(500);
			}else if(password == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please choose a password.');
				$("#alert").slideDown(500).delay(2000).slideUp(500);
			}else if(cpassword == ""){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please confirm the password.');
				$("#alert").slideDown(500).delay(2000).slideUp(500);
			}else if(password != cpassword){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Passwords dont match!');
				$("#alert").slideDown(500).delay(2000).slideUp(500);
			}else if(!validateEmail(companyEmail)){
				$("#alert").addClass('alert-danger');
				$("#alert").html('<strong>Error</strong> Please enter validated email address.');
				$("#alert").slideDown(500).delay(2000).slideUp(500);
			}else{
				$.ajax({
			
					url: "./server.php?task=companyRegister&companyName="+companyName+"&description="+description+"&location="+location+"&email="+companyEmail+"&password="+password,
                    success: function (data) {
						if(data.indexOf("sucess") !== -1){
							window.location.replace("company-feed.php");
						}else{
							$("#alert").addClass('alert-danger');
							$("#alert").html('<strong>Error</strong> User already exists. Please choose antoher email adress');
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
</body>
</html>