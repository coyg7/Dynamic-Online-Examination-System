<?php
session_start();
include("session.php");
error_reporting(1);
require("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

   
    <title>Question Entry Form - Dynamic Online Exam Software</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="css/semantic.min.css"/>


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
                    <img src="images/download.png" height="40px" alt="logoQuiz" >
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
            <div class="col-lg-12"><br><br>
            	
                <h1 align="center">Add Questions</h1><br>
              
                <?php

					if($_SESSION['checkadmin'] == 0)
					{
						$_SESSION['invalidlogin']="true";
						header( 'Location: index.php' );
						exit();
					}
					
					if($_POST[submit]=='Add')
						{
							extract($_POST);
							
							mysql_query("insert into question(question,opt1,opt2,opt3,opt4,ans) values ('$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')",$cn) or die(mysql_error());

							echo "<div class='col-md-12'>
                					<div class='alert alert-success'>
                    					<strong><span class='checkmark icon'></span> Success! Question Added.</strong>
                					</div>   
            					</div>";

							unset($_POST);
						}
				?>
                
                
        		<!-- Registration form - START -->
				<div class="container">
    				<div class="row">
        				<form role="form" method="post">
            				<div class="col-lg-12">
                            
                           		<div class="form-group">
                    				<label for="addque">Enter Question</label>
                    				<div class="input-group">
                        				<textarea name="addque" id="addque" class="form-control" placeholder="Enter Question" rows="10" cols="150" required></textarea>      				
                    				</div>
                				</div>
                                
                				<div class="form-group">
                    				<label for="ans1">Enter Option A</label>
                    				<div class="input-group">
                        				<input type="text" class="form-control" name="ans1" id="ans1" placeholder="Enter Option A" size="150" required>                   				</div>
                				</div>
                                
                				<div class="form-group">
                  					<label for="ans2">Enter Option B</label>
                   					<div class="input-group">
                     			   		<input type="text" class="form-control" id="ans2" name="ans2" placeholder="Enter Option B" size="150" required>                   				</div>
                				</div>
                				<div class="form-group">
                    				<label for="ans3">Enter Option C</label>
                    				<div class="input-group">
                        				<input type="text" class="form-control" id="ans3" name="ans3" placeholder="Enter Option C" size="150" required>									</div>
                				</div>
                				
                                <div class="form-group">
                    				<label for="ans4">Enter Option D</label>
                    				<div class="input-group">
                                    	<input type="text" class="form-control" id="ans4" name="ans4" placeholder="Enter Option D" size="150" required>                       			</div>
                				</div>
                                
                                 <div class="form-group">
                    				<label for="anstrue">Enter Correct Answer</label>
                    				<div class="input-group">
                                    	<select class="form-control" name="anstrue" id="anstrue">
                                        	<option value="a">Option A</option>
                                            <option value="b">Option B</option>
                                            <option value="c">Option C</option>
                                            <option value="d">Option D</option>
                                        </select>
                                     </div>
                				</div>

                				<input type="submit" name="submit" id="submit" value="Add" class="btn btn-info pull-right">
            				</div>
        				</form>
   					 </div>
				</div>
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