<?php
		session_start();
		error_reporting(1);
?>
<?php
		include("session.php");
		extract($_POST);
		if(isset($submit))
		{
			include("connect.php");
			$rs=mysql_query("select * from login where loginid='$loginid' and pass='$pass'",$cn) or die(mysql_error());
			
	
			if(mysql_num_rows($rs)<1)
			{
								
 				$_SESSION['invalidlogin']="true";
				header( 'Location: index.php' );
				exit;
			}
			
			$_SESSION['alogin']="true";
			$_SESSION['checkadmin'] = 0;
			$_SESSION['login']=$loginid;
			
			$row = mysql_fetch_row($rs);
			
			if($row[3]=="admin")
			{
				$_SESSION['checkadmin'] = 1;
				header('Location: adminpage.php');
			}
			
			else
			{	
				header('Location: userpage.php');			
			}
			
			
			
		}
		
		else if(!isset($_SESSION['alogin']))
		{
			$_SESSION['invalidlogin']="true";
			header( 'Location: index.php' );
			exit;
		}
			
?>