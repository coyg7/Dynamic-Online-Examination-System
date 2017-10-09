<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="JGT Online Quiz">
    <meta name="author" content="Jagatjyoti G Tuladhar">

    <title>Login - Dynamic Online Exam Software</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/semantic.min.css"/>

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="images/download.png" height="40px" alt="new kushal" >
                </a>
                <h1 style="color:grey" align="center">ONLINE EXAMINATION SYSTEM</h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav">
                    
                    <li class="pull-right">
                         <a href="#"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            	<div align="center">
					<img src="images/download.png" style="border:thick; border-style:solid; border-radius:10px" height="150px">
				</div>
                <h1 align="center">Login Credentials</h1><br>
                
                <div align="center" class="col-lg-6 col-md-2 col-md-offset-3">
                <!--div class="col-lg-5 col-md-push-1"-->
           	<div class="col-md-12">
                <!--div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! Message sent.</strong>
                </div-->
                
                <?php
						if(isset($_SESSION['invalidlogin']))
						{
							echo "<div class='alert alert-danger'>
										<strong> Error! Invalid Login Credential.</strong>
                				</div>";
						}
        		?>        
            </div>
        </div>
        
        		<!-- Registration form start-->
       		  <form role="form" method="post" action="adminlogin.php">
           			 <div align="center" class="col-lg-6 col-md-2 col-md-offset-3">
                		<!--div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div-->
                <div class="form-group">
                    <label for="loginid">Enter Login ID</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="loginid" id="loginid" placeholder="Enter Login" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="pass">Enter Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter Password" required>
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit" value="Login" class="btn btn-info">
            </div>
        </form>        
    
<!-- Registration form - END -->
                
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

</html>
