<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Feed</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/ui-kit.css" rel="stylesheet" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/cards.css" rel="stylesheet"/>
        
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />  
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display|Raleway:700,100,400|Roboto:400,700|Playfair+Display+SC:400,700' rel='stylesheet' type='text/css'>
    
    <style>
        .card{
            margin-bottom: 70px;
        }
    </style>
</head>
<body class="index-page sidebar-collapse" style="margin-top: 80px">
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="50">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand nav-logo" href="#"><img src="assets/img/logo-short.png" height="30px" width="30px">
                &nbsp;&verbar;&nbsp;<?php echo $_SESSION["companyName"]?></a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-area-chart"></i>
                            <p>Analytics</p>
                        </a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <p>Messages</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-bell-o"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-cog"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fa fa-sign-out"></i>
                            <p>Log out</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <button class="nav link btn btn-neutral" data-toggle="modal" data-target="#myModal">
                            
                            New Post
                        </button>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
<div class="wrapper">       
    <div class="container">        
        <div class="masonry-container">
        
            <div class="card-box col-md-4 col-sm-6">
                <div class="card card-with-border card-just-text" data-background="color" data-color="black" >
                    <div class="content">
                        <h4 class="title">"In the end we only <b>regret</b> the chances we didn't take."</h4>
                        <p class="description">- Nice Quote</p>
                    </div>
                </div> <!-- end card -->
            </div>           
            
            
            
            <div class="card-box col-md-4 col-sm-6">
                <div class="card">                            
                    <div class="header">
                        <img src="assets/img/lifestyle-8.jpg"/>
                        <div class="filter"></div>
                        
                        <div class="actions">
                            <button class="btn btn-round btn-fill btn-neutral btn-modern">
                                Read Article
                            </button>
                        </div>
                    </div>
                    
                    <div class="content">
                        <h6 class="category">Services</h6>
                        <h4 class="title"><a href="#">Try the new hairstyle from this Barber Shop </a></h4>
                        <p class="description" style="color: #444444; font-weight: 400">When selling products it's always a good idea to go with commanding fonts that are good at showing authority and security. I feel like Raleway and Roboto do just that.</p>
                    </div>                                           
                </div> <!-- end card -->
             </div>
             
             
            <div class="card-box col-md-4 col-sm-6">    
                <div class="card" data-background="image" data-src="assets/img/lifestyle-1.jpg">
                    <div class="header">
                        <div class="category">
                            <h6 class="label label-danger">Cool Tag</h6>    
                        </div>
                    </div>
                    
                    <div class="content">
                        <h4 class="title title-uppercase">
                            <a href="">Here can be some special title for this card</a>
                        </h4>
                        <p class="description">When selling products it's always a good idea to go with commanding fonts that are good at showing authority and security. I feel like Raleway and Roboto do just that.</p>
                    </div>                            
                    <div class="filter">
                        
                    </div>
                </div> <!-- end card -->                    
            </div>
            
            
            <div class="card-box col-md-4 col-sm-6">
                <div class="card">                                            
                    <div class="content">
                        <h6 class="category">Best stories</h6>
                        <h4 class="title"><a href="#">This is a plain Post Card, see for yourself</a></h4>
                        <p class="description" style="color: #444444; font-weight: 400">When selling products it's always a good idea to go with commanding fonts that are good at showing authority and security. I feel like Raleway and Roboto do just that.</p>
                    </div>                                           
                </div> <!-- end card -->
            </div>
                
                
            <div class="card-box col-md-4 col-sm-6">  
                <div class="card">                            
                    <div class="header">
                        <img src="assets/img/beard-1.jpg" />
                    </div>
                    
                    <div class="content">
                        <h6 class="category">News</h6>
                        <h4 class="title">Use this card and see what you can achive</h4>
                        <p class="description" style="color: #444444; font-weight: 400">When selling products it's always a good idea to go with commanding fonts that are good at showing authority and security. I feel like Raleway and Roboto do just that.</p>
                    </div>  
                </div> <!-- end card -->
            </div>
             
            
            
            <div class="card-box col-md-4 col-sm-6">
                <div class="card" data-background="image" data-src="assets/img/lifestyle-2.jpg">
                    <div class="header">
                        <div class="category">
                            <h6 class="label label-warning">Trending Post</h6>    
                        </div>
                    </div>
                    
                    <div class="content">
                        <h4 class="title">Tobias Van Schneider is a German designer raised in Austria...</h4>
                        <p class="description">When selling products it's always a good idea to go with commanding fonts that are good at showing authority and security.</p>
                    </div>                            
                    <div class="filter"></div>
                </div> <!-- end card -->    
            </div>
                 
            
            
            
             
            <div class="card-box col-md-4 col-sm-6">               
                <div class="card card-with-border" data-background="image" data-src="assets/img/fashion-1.jpg">
                    <div class="header">
                    </div>
                    
                    <div class="content text-center">
                        <p class="description">When selling products it's always a good idea to go with commanding fonts that are good at showing authority and security. I feel like Raleway and Roboto do just that.</p>
                    </div>                            
                    <div class="footer text-center">
                         <a href="#" class="btn btn-danger btn-fill btn-round">Read article</a>
                    </div>
                    <div class="filter"></div>
                </div> <!-- end card -->
            </div>
           
           
           
            <div class="card-box col-md-4 col-sm-6">  
                <div class="card card-just-text card-with-border" data-background="image" data-src="assets/img/lifestyle-9.jpg">
                    <div class="content">
                        <h4 class="title title-modern">"I liked nutella, triangles and outerspace way before hipsters."</h4>
                        <p class="description">- Not A Hipster</p>
                    </div>
                    <div class="filter"></div>
                </div> <!-- end card -->                
            </div>
            
            
            <div class="card-box col-md-4 col-sm-6">               
                <div class="card card-with-border" data-background="color" data-color="azure">
                    <div class="header">
                        <div class="icon">
                            <i class="pe-7s-radio"></i>
                        </div>
                    </div>
                    <div class="content text-center">
                        <h4 class="title title-modern">Nicecream.fm</h4>
                        <p class="description">Best vibes in the marketplace. Listen to the best music from '89. I feel like Nicecream and .fm do just that.</p>
                    </div>                      
                    <div class="footer text-center">
                        <button class="btn btn-neutral btn-round btn-fill btn-modern">Listen Now!</button>
                    </div>    
                </div> <!-- end card -->
            </div>





            <div class="card-box col-md-4 col-sm-6">   
                <div class="card card-with-border" data-background="color" data-color="orange">
                    <div class="content">
                        <h6 class="category">Hot Article</h6>
                        <h4 class="title">
                            <a href="#"> Try the new hairstyle from this Barber Shop</a>
                        </h4>
                        <p class="description">When selling products it's always a good idea to go with commanding fonts that are good at showing authority and security. I feel like Raleway and Roboto do just that.</p>
                    </div>                          
                </div> <!-- end card -->
            </div>

            
            
            <div class="card-box col-md-4 col-sm-6">      
                <div class="card text-center" data-background="image" data-src="assets/img/city-2.png">
                    <h4 class="title title-modern">Exclusive Vacation</h4>
                    
                    <div class="content">
                        <div class="price">
                            <h6>From</h6>
                            <h4>2.799<b class="currency">$</b></h4>
                        </div>
                        <p class="description">When selling products it's always a good idea to go with commanding fonts that are good at showing authority and security.</p>      
                    </div> 
                    <div class="filter"></div>
                    <div class="footer btn-center">
                        <button class="btn btn-neutral btn-round btn-fill">Book Now!</button> 
                    </div>                            
                </div> <!-- end card -->    
            </div>
            
            
            

            <div class="card-box col-md-4 col-sm-6">
                <div class="card card-with-border">
                    <div class="header">
                        <div class="icon">
                            <i class="pe-7s-glasses"></i>
                        </div>
                    </div>
                    <div class="content text-center">
                        <h4 class="title text-center">Cool Glasses App</h4>
                        <p class="description"style="color: #444444; font-weight: 400">Here can be a description about the application that is for download. I feel like this app is what I need.</p>                               
                    </div>
                    <div class="footer btn-center">
                        <button class="btn btn-default btn-round btn-fill btn-info btn-modern">Download</button> 
                    </div>                           
                </div> <!-- end card -->
            </div>
            
            
            
            
            
                
            <div class="card-box col-md-4 col-sm-6">
                <div class="card card-just-text card-with-border" data-background="image" data-src="assets/img/music-3.jpg">
                    <div class="content">
                        <div class="filter filter-red"></div>
                        <h4 class="title title-modern">"I like the way you work it
No diggity, I gotta bag it up."</h4>
                        <p class="description">- Chet Faker</p>                    
                    </div>
                    
                    <div class="filter"></div>
                </div> <!-- end card -->    
            </div>
            
            
            
            <div class="card-box col-md-4 col-sm-6">       
                <div class="card card-with-border" data-background="color" data-color="green">
                    <div class="header">
                        <div class="icon">
                            <i class="pe-7s-gift"></i>
                        </div>
                    </div>
                    <div class="content text-center">
                        <p class="description">Your friend <b>Michael Osborn</b> has sent you a gift card.</p><br>                               
                    </div>
                    <div class="footer btn-center">
                        <button class="btn btn-neutral btn-fill btn-modern">View Gift Details</button> 
                    </div>                           
                </div> <!-- end card -->            
            </div>    
            
            
            
            <div class="card-box col-md-4 col-sm-6">
                <div class="card" data-background="color" data-color="black">                            
                    <div class="header">
                        <img src="assets/img/home-1.jpg"/>
                    </div>
                    
                    <div class="content">
                        <h6 class="category">Interior Design</h6>
                        <h4 class="title"><a href="#">Apartment sold for $1.2 mil.</a></h4>
                        <p class="description">When selling products it's always a good idea to go with commanding fonts that are good at showing authority and security. I feel like Raleway and Roboto do just that.</p>
                    </div>                                           
                </div> <!-- end card -->      
            </div> 
                
                
             
            <div class="card-box col-md-4 col-sm-6">  
                <div class="card text-center" data-background="image" data-src="assets/img/city-1.jpg">
                    <h4 class="title title-modern">Amazing City</h4>
                    
                    <div class="content">
                           <div class="price">
                            <h6>From</h6>
                            <h4>1.499<b class="currency">$</b></h4>
                        </div>      
                    </div> 
                    
                    <div class="footer btn-center">
                        <button class="btn btn-neutral btn-round btn-modern">Buy Ticket</button> 
                    </div>    
                    
                    <div class="filter filter-blue"></div>                       
                </div> <!-- end card -->             
            </div>
            
            <!-- New Post Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">New Post</h4>
                        </div>
                        <div class="modal-body">
                            <textarea class="form-control" placeholder="Title" rows="1"></textarea>
                            <textarea class="form-control" placeholder="Write do you want to promote?" rows="3"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Discard</button>
                            <button type="button" class="btn btn-info btn-simple">Post</button>
                        </div>
                    </div>
                </div>
            </div> <!-- Modal end -->
                              
        </div>
        
    </div> 
    
    
    
</div> <!-- end wrapper -->
<script>
    // ovo sam tek krenuo nesto raditi
    $("#btnPost").click(function(){
        
        var companyName = $("#companyName").val();
        var title = $("#title").val();
        var body = $("#body").val();
        var type = $("#type").val();
        var pictureLink = $("#password").val();
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

<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/cards.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/ui-kit.js" type="text/javascript"></script>
	<script>
    	
    	$().ready(function(){
        	
        	var $container = $('.masonry-container');

            doc_width = $(document).width();
            
            if (doc_width >= 768){
                $container.masonry({
                    itemSelector        : '.card-box',
                    columnWidth         : '.card-box',
                    transitionDuration  : 0
                });   
            } else {
                $('.mas-container').removeClass('mas-container').addClass('row');
            }            
    	});
	</script>
	
</html>