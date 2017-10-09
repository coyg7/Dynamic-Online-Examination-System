<?php
session_start();
include("session.php");
error_reporting(1);
require("connect.php");
?>

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
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--link rel="stylesheet" href="css/font-awesome.css" /-->
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/semantic-ui/1.2.0/semantic.min.css"/>
    <link rel="stylesheet" href="css/semantic.min.css"/>
    
    <!--link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" /-->
    
    <link rel="stylesheet" href="css/formValidation.css"/>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    
    <!--script type="text/javascript" src="http://cdn.jsdelivr.net/semantic-ui/1.2.0/semantic.min.js"></script-->
	<script type="text/javascript" src="js/semantic.min.js"></script>


    <script type="text/javascript" src="js/formValidation.js"></script>
    <script type="text/javascript" src="js/framework/semantic.js"></script>
    
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
                    	<a href="#"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<!--JGT-->
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12"><br><br><br>
            <div align="right"><?php include("session.php"); ?></div>
            	
                <h1 align="center">Sign Up</h1><br>
                
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
							
							mysql_query("insert into signupuser(fullname,loginid,usn,email,gender,phoneno,password) values ('$inputfullname','$inputusername','$inputusn','$inputemail','$inputgender','$inputphone','$inputpassword')",$cn) or die(mysql_error());
							
							mysql_query("insert into login(loginid, pass, role) values ('$inputusername','$inputpassword','student')",$cn) or die(mysql_error());

							echo "<div class='col-md-12'>
                					<div class='alert alert-success'>
                    					<strong><span class='checkmark icon'></span> Success! User Added.</strong>
                					</div>   
            					</div>";

							unset($_POST);
						}
					
	
						
				?>
                
                    

       
            
            <form id="SignupForm" class="ui grid form" role="form" method="post"> <!--id="SignupForm" class="ui grid form"--> 
            
            <div class="row field">
                    <label class="four wide column">Username</label>
                    <div class="eight wide column">
                        <div class="ui input icon">
                            <input id="inputusername" name="inputusername" type="text" placeholder="Enter User Name" />
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <label class="four wide column">Full Name</label>
                    <div class="eight wide column">
                        <div class="ui input icon">
                            <input id="inputfullname" name="inputfullname" type="text" placeholder="Enter Full Name" />
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <label class="four wide column">USN</label>
                    <div class="eight wide column">
                        <div class="ui input icon">
                            <input id="inputusn" name="inputusn" type="text" placeholder="Enter University Seat No." />
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <label class="four wide column">Email address</label>
                    <div class="eight wide column">
                        <div class="ui input icon">
                            <input id="inputemail" name="inputemail" type="text" placeholder="Enter Email address" />
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <label class="four wide column">Gender</label>
                    <div class="ten wide column">
                        <div class="ui radio">
                            <input id="inputgender" name="inputgender" type="radio" value="m" /> <label>Male</label>
                        </div>
                        <div class="ui radio">
                            <input id="inputgender" name="inputgender" type="radio" value="f" /> <label>Female</label>
                        </div>
                    </div>
                </div>
                <div class="row field">
                    <label class="four wide column">Phone No.</label>
                    <div class="eight wide column">
                        <div class="ui input icon">
                            <!--span class="input-group-addon">+91</span-->
                            <input id="inputphone" name="inputphone" type="text" placeholder="Enter Phone Number" />
                        </div>
                    </div>
                </div>
                
                
                

                

                <div class="row field">
                    <label class="four wide column">Password</label>
                    <div class="eight wide column">
                        <div class="ui input icon">
                            <input id="inputpassword" name="inputpassword" type="password" placeholder="Password" />
                        </div>
                    </div>
                </div>

                <div class="row field">
                    <label class="four wide column">Confirm password</label>
                    <div class="eight wide column">
                        <div class="ui input icon">
                            <input id="inputconfirmPassword" name="inputconfirmPassword" type="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="eight wide column">
                        <!--input id="submit" name="submit" type="submit" class="ui primary button" value="Add"-->
                        <input type="submit" name="submit" id="submit" value="Add" class="btn btn-info pull-right">
                        </div>
                </div>
            </form>
            
            
        

        
    </div></div></div>
    
    <script type="text/javascript">
$(document).ready(function() {
    $('#SignupForm').formValidation({
        framework: 'semantic',
        icon: {
            valid: 'checkmark icon',
            invalid: 'remove icon',
            validating: 'refresh icon',
            feedback: 'fv-control-feedback'
        },
        err: {
            container: 'tooltip'
        },
        fields: {
			inputusername: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
			
			inputfullname: {
				message: 'Please enter a valid name',
				validators: {
					notEmpty: {
						message: 'The name is required and cannot be empty'
						},
					regexp: {
						regexp: /^[a-zA-z ]+$/,
						message: 'The full name can only consist of alphabets'
						}
					}
				},
				
			inputusn: {
				message: 'Please enter a valid university seat number',
				validators: {
					regexp: {
						regexp: /1[sS][iI][0-5][0-9][a-z][a-z][0-9][0-9][0-9]$/,
						message: 'The usn should follow the pattern 1sixxbrxxx'
						}
					}
				},
				
			inputgender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
			inputphone: {
				message: 'Please enter a valid phone number',
				validators: {
					regexp: {
						regexp: /[7-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/,
						message: 'The phone number should be 10 digit valid indian phone number'
						}
					}
				},
            inputemail: {
                validators: {
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
			
            inputpassword: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    }
                }
            },
            inputconfirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and cannot be empty'
                    },
                    identical: {
                        field: 'inputpassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
            
        }
    });
});
</script>

 <!-- 
  <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

    <!-- Bootstrap Core JavaScript 
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
-->

</body>
</html>