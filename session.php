<Table width="100%">
  <tr>
  	<td>
 	 	<?php 
  				@$_SESSION['login']; 
  				error_reporting(1);
  		?>
  
  	</td>
    
    <td>
		<?php
				if(isset($_SESSION['login']))
				{
					//echo "Connected";
					 	if($_SESSION['checkadmin'] == 0)
							{
	 				 			echo "<div align=\"right\"><strong><a href=\"userpage.php\">". $_SESSION['login'];
					 			echo "</a> | <a href=\"signout.php\">Sign Out</a></strong></div>";
							}
						else
						{
								echo "<div align=\"right\"><strong><a href=\"adminpage.php\">". $_SESSION['login'];
					 			echo "</a> | <a href=\"signout.php\">Sign Out</a></strong></div>";
						}
							
				}
	
				else
				{
					echo "&nbsp;";
				}
		?>
	</td>
  </tr>
</table>
