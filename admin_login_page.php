<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
    <?php
	include("head.php");
	include("navbar.php");
	?>
    <script type="text/javascript" src="logvalid.js"></script>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		
    <?php
    include("breadcrumbs.php");
    ?>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body" align="center">
                        <h3 class="card-title">Login</h3>
                            <div class="contact-wrap">
                                <form name="log" method="POST" action="admin_login.php">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="userName">Username</label>
                                                <input type="text" name="userName" id="userName" class="form-control" placeholder="Provide your valid Username">
                                                <div class="container">
                                                    <div class="row container" id="errDivuser1" style="color:red"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="logpass">Password</label>
                                                <input type="password" name="logpass" id="logpass" class="form-control" placeholder="Provide your valid password">
                                                <div class="container">
                                                    <div class="row container" id="errDivpass1" style="color:red"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="submit" name="login" value="login" onclick="loginvalid(event)" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </form>		
                                </div>
                        </div>
                </div>
            </div>
        </div>   
    </div>     
		
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	<script>
    function loginvalid(e) 
    {
					let user = document.forms["log"]["userName"];
					let pass = document.forms["log"]["logpass"];
					let erruser = "";
					let errpass = "";

					if (user.value == "") {
						erruser = erruser + "<br>Enter valid Username";
					}
					
					if (pass.value.trim() == ""){
						errpass = errpass + "<br>Enter valid Password";
					}

				
					if (erruser != "") {
						document.getElementById("errDivuser1").innerHTML = erruser;
						e.preventDefault();
					}
					
					if (errpass != "") {
						document.getElementById("errDivpass1").innerHTML = errpass;
						e.preventDefault();
					}
				
			}
    </script>
	<?php
		include("footer.php");
		include("footer_links.php");
	?>
	</body>
</html>
