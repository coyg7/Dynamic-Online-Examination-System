<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Sign Up - Dynamic Online Exam Software</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    
    <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">
    
     <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--link rel="stylesheet" href="css/semantic.min.css"/-->
    <!--link rel="stylesheet" href="css/font-awesome.css" /-->
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/semantic-ui/1.2.0/semantic.min.css"/>
    <!--link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" /-->
    
    <link rel="stylesheet" href="css/formValidation.css"/>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    
    <script type="text/javascript" src="http://cdn.jsdelivr.net/semantic-ui/1.2.0/semantic.min.js"></script>
	<!--script type="text/javascript" src="js/semantic.min.js"></script-->


    <script type="text/javascript" src="js/formValidation.js"></script>
    <script type="text/javascript" src="js/framework/semantic.js"></script>
 </head>

<body>
<?php include("session.php"); ?>

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
                    <img src="#" width="100" height="50" alt="Quizlogo" >
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav">
                    
                    <li class="pull-right">
                    	<?php include("session.php"); ?>
                    	<a href="#"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            	
                <h1 align="center">Sign Up</h1><br>
        
        		<!-- Registration form start-->
       		  <form id="SignupForm" name="SignupForm" role="form" method="post" action="signup.php"
             >
    
    
    
           			 <div class="col-lg-6 col-md-8 col-md-offset-3">
                		<div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Full Name">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputUSN">Enter USN</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputUSN" id="InputUSN" placeholder="Enter University Seat Number">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="InputGender">Enter Gender</label>
                  <div class="input-group">
                  	<input type="radio" id="InputGenderM" name="InputGender" value="male" checked> Male <br>
                    <input type="radio" id="InputGenderF" name="InputGender" value="female"> Female
                  </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword">Enter Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Enter Password" />
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPasswordConfirm">Re-enter Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="inputPasswordConfirmd" id="inputPasswordConfirm" placeholder="Re-enter Password" />
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputPhone">Enter Phone No.</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="InputPhone" name="InputPhone" placeholder="Enter Phone number">
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
        
        
        
        
        
    
<!-- Registration form - END -->
                
            </div>
        </div>
    </div>
    <!-- /.container -->
    
	
    
    
    
    
    
    
    
    
    
    
    
    
    
    

   
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
   
    
    

</body>

</html>
