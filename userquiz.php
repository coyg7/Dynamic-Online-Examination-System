<?php
session_start();
error_reporting(1);
require("connect.php");
extract($_POST);
extract($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>

   
    <title>Quiz - Dynamic Online Exam Software</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/semantic.min.css"/>
    
    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">

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
                    
                    <li class="pull-left">
                    	<a href="#" ></a>
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
            	<div align="right"><?php include("session.php"); ?></div>
            	<h1 align="center">Quiz Section</h1><br>
                
                <?php
						//echo "Login1 : " . $login . "<br>Connection : " . $_SESSION['correct'] . "<br>Question : " . $_SESSION['qn'];
						//$query="select * from question";
						
						//$_SESSION['correct'] = 0;

						$rs=mysql_query("select * from question",$cn) or die(mysql_error());
				
						if ($submit == 'Next Question' && isset($ans))
						//if ($submit == 'Next Question')
						{
							//echo "Login2 : " . $login . "<br>Connection : " . $_SESSION['correct'] . "<br>Question : " . $_SESSION['qn'];
								
							mysql_data_seek($rs,$_SESSION['qn']);
							$row = mysql_fetch_row($rs);
							
							if ($ans == $row[5])
							{
								$_SESSION['correct']=$_SESSION['correct']+1;
							}
							$_SESSION['qn'] = $_SESSION['qn']+1;
						}
						
						else if ($submit == 'Get Result' && isset($ans))
						//else if ($submit == 'Get Result')
						{
							mysql_data_seek($rs, $_SESSION['qn']);
							$row = mysql_fetch_row($rs);
							
							//echo "Hello " . $login;
							//echo $_SESSION['correct'];
							
							if ($ans == $row[5])
							{
								$_SESSION['correct']=$_SESSION['correct']+1;
							}
							
							echo "<h1 align='center'>Result</h1><br>";
							$_SESSION['qn'] = $_SESSION['qn']+1;
							echo "<div class='form-group'><label>Total Question : " . $_SESSION['qn'];
							echo "</label><br>";
							echo "<label>True Answer : " .$_SESSION['correct'];
							echo "</label><br>";
							
							$w=$_SESSION['qn']- $_SESSION['correct'];
							echo "<label>Wrong Answer : ". $w;
							echo "</label>";
							echo "<br>";
							 
							mysql_query("insert into result(loginid, result, date) values ('$login', ".$_SESSION['correct'].", '".date("Y-m-d H:i:s")."')") or die(mysql_error());
							
							unset($_SESSION['qn']);
							unset($_SESSION['correct']);
							exit;
						}
						
						$rs=mysql_query("select * from question",$cn) or die(mysql_error());
						
						if ($_SESSION['qn'] > mysql_num_rows($rs)-1)
						{
							unset($_SESSION['qn']);
							echo "<h1 align='center'>No questions in the database..</h1><br>";
							session_destroy();
							exit;
						}
						
						mysql_data_seek($rs, $_SESSION['qn']);
						$row = mysql_fetch_row($rs);
						
						$n = $_SESSION['qn'] + 1;




						?>
						
						
						
	
    
        		<!-- Registration form - START -->
				<div class='container'>
    				<div class='row'>
        				<form role='form' method='post' action='userquiz.php'>
            				<div>
                            
                           		<div class='form-group'>
                    					<label><?php echo "Question No ". $n .  " : $row[0]"?></label>
               	 					</div>             				
                			</div>
                            
                    				<div class="input-group">
                                    	<input type="radio" name="ans" id="ans" value="a"><?php echo "$row[1]"; ?>
                                    </div>
                                    <div class="input-group">    
                                        <input type="radio" name="ans" id="ans" value="b"><?php echo "$row[2]"; ?>
                                    </div>
                                    <div class="input-group">
                                        <input type="radio" name="ans" id="ans" value="c"><?php echo "$row[3]"; ?>
                                    </div>
                                    <div class="input-group">
                                        <input type="radio" name="ans" id="ans" value="d"><?php echo "$row[4]"; ?>
                                    </div>
                                
                <?php            
				if ($_SESSION['qn'] < mysql_num_rows($rs)-1) 
					echo "<input type='submit' name='submit' id='submit' value='Next Question' class='btn btn-info pull-right'>";
				else
					echo "<input type='submit' name='submit' id='submit' value='Get Result' class='btn btn-info pull-right'>";
				?>			
               				
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