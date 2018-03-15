<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LSI | ADMIN</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-colaborate-800.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<style type="text/css">
body {
	background-color: #f6f6f6;
}
a:hover {
	color: #D6D6D6;
}
a:active {
	color: #D6D6D6;
}

.error {
	color: #FF0000;
}

.tableheader {
background-color: #95BEE6;
color:white;
font-weight:bold;
}
.tablerow {
background-color: #A7D6F1;
color:black;
font-weight:bold;
}
.message {
color: #FF0000;
font-weight: bold;
text-align: center;
width:100%
}

</style>
</head>
<body alink="#D6D6D6">
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">Living Spring <span>International</span> <small><i>In God We Trust</i></small> </a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.html"><span>Home Page</span></a></li>
          <li><a href="gallery.html"><span>Gallery</span></a></li>
          <li><a href="about.html"><span>About Us</span></a></li>
          <li><a href="members.php"><span>Members</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
		   <li><a href="admin.php"><span>Admin</span></a></li>

        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/christmas.jpg" width="960" height="333" alt="" /> </a> <a href="#"><img src="images/9c.jpg" width="960" height="333" alt="" /> </a> <a href="#"><img src="images/2.jpg" width="960" height="333" alt="" /> </a><a href="#"><img src="images/god.jpg" width="960" height="333" alt="" /> </a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
</div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>MEMBERS</span> VIEWING PAGE. </h2>
          <marquee><b> <font color="blink">Become One Body With Us By Registering As A Member! We Love You!</b></marquee> 
          <div class="clr"></div>
          <?php
			 //CODE TO RECOGNIZE THAT USER HAS LOGIN
			 
			 //START THE SESSION
			 session_start();
			
			  ?>
			  
				<table border="0" cellpadding="10" cellspacing="1" width="850" align="center">
				<tr class="tableheader">
				<td align="center">Admin Dashboard</td>
				</tr>
			 	<tr class="tablerow">
				<td>
				<?php
				if($_SESSION["username"]) {
				?>
				Welcome <?php echo $_SESSION["username"]; ?>. Click here to <a href="logout.php" tite="Logout"><b><em>Logout.</b>
				<?php
				}
				?>
			 </td>
			 </tr>
			 </table>
		
          
        </div>
		<div class="clr"></div>
     <!-- <center>  <img src="images/all.jpg" height="200" width="500" alt=""> </center>  -->
        <div class="article">
          <div class="clr"></div>
          <div class="comment"> 
            <p><center>
              <strong><font color="#FF0000">Welcome Admin. Here is a list of all the members of LSI. </font></strong>
            </center>
            </p>
          </div>
          
        </div>
        
        <div class="article">
          
          <div class="clr"></div>
          <form action="admin.php" method="post" id="leavereply">
             
			 
		
		<?php
/*
			 //Make connection to the database to collect records.
				 $connection=mysqli_connect ("localhost", "root", "feyi");
			 	$dbc=mysqli_select_db ($connection,"church");
			//Make the query
			//$query="SELECT * FROM main" ;
			 	$query="SELECT name AS name,phone AS phone,email AS email,facebook AS facebook,gender AS gender,age AS age,marital AS marital,address AS address,service AS service,DATE_FORMAT (registration_date, '%M %d, %Y') AS date FROM main ORDER BY registration_date ASC";
			//run the query
				$r=@mysqli_query ($dbc, $query);
			//Count the no of returned rows.This helps to know if any user has registered.
			/*	$num=mysqli_num_rows ($r);
				if ($num > 0) //if it ran ok
				{
			//Print hoe many users already registered. 
				echo"<p>There are currently $num registered users.</p>\n";  */
			//Table header
			
	/*
	if ($r) {
				echo'<table align ="center" cellpadding="3">
				<tr>
					<td><b>Name</b></td>
					<td><b>Phone</b></td>
					<td><b>Email</b></td>
					<td><b>Facebook</b></td>
					<td><b>Gender</b></td>
					<td><b>Age</b></td>
					<td><b>Marital Status</b></td>
					<td><b>Address</b></td>
					<td><b>Service Unit</b></td>
					<td><b>Registration date</b></td>
					</tr>'	;   
			//Fetch and print all records
				while ($row=mysqli_fetch_array ($r,MYSQLI_ASSOC)) //Ussed to fetch more dan a row of record but if just a row, u use MYSQLI_FETCH_ARRAY ().
				{
				echo '<tr><td>'.$row['name']. '</td><td>'. $row['phone'] . '</td><td>' . $row['email'] . '</td><td>' . $row['facebook'] . '</td><td>' . $row['gender'] . '</td><td>'. $row['age'] . '</td><td>'. $row['marital'] . '</td><td>'. $row['address'] . '</td><td>'. $row['service'] . '</td><td>'. $row['date'] . '</td><tr>';
				}
		 //close the table
			 echo'</table>';
		//Free up the resources
			mysqli_free_result ("$r");
			
			}
			  else { //if no records were returned.
			    echo '<p class="error">There are currently no registered users.</p>';
				    
					
					//Debugging message
					echo '<p>' . mysqli_error($dbc) . //'<br /><br />Query: ' . $query 
					 '</p>';
					}
			mysqli_close ($dbc); //close the connection
			
*/









//CODE TO DISPLAY DATA FROM DBASE

//Create CONNECTION
  $connection=mysqli_connect("localhost", "root","");
//Check connection
  if (!$connection) {
		die ("connection failed: " . mysqli_connect_error());
	}
  $dbc=mysqli_select_db ($connection,"church");
//Make the query
   $query="SELECT name ,phone ,email ,facebook,gender ,age ,marital ,address ,service ,DATE_FORMAT (registration_date, '%M %d, %Y') AS date FROM main ORDER BY registration_date ASC";

//Run the query
    $result=mysqli_query($connection, $query);
//Check to seee if data has been submotted into the database.
     if (mysqli_num_rows($result) > 0)
	 	{
		 echo'<center>
		 <table border="1" align ="left"  cellpadding="1" cellspacing="2">
				<tr class="tableheader">
					<td><b>Name</b></td>
					<td><b>Phone</b></td>
					<td><b>Email</b></td>
					<td><b>Facebook</b></td>
					<td><b>Gender</b></td>
					<td><b>Age</b></td>
					<td><b>Marital Status</b></td>
					<td><b>Address</b></td>
					<td><b>Service Unit</b></td>
					<td><b>Registration date</b></td>
					</tr>'	;   
		   //Output data of each row
			  while ($row = mysqli_fetch_assoc($result))
			    {
				  echo '<tr class="tablerow"><td>'.$row['name']. '</td><td>'. $row['phone'] . '</td><td>' . $row['email'] . '</td><td>' . $row['facebook'] . '</td><td>' . $row['gender'] . '</td><td>'. $row['age'] . '</td><td>'. $row['marital'] . '</td><td>'. $row['address'] . '</td><td>'. $row['service'] . '</td><td>'. $row['date'] . '</td></tr>';
				}
		  echo "</center>
		  		</table>" ;
		}
		  else {
		  			echo "0 results";
		  		}
		mysqli_close($connection);
			 ?>
			 
			 
			 
          
          </form>
        </div>
      </div>
	  

      
	 
	  
     <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="images/search.gif" class="button_search" type="image" />
          </form>
        </div >
       <div class="clr"></div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="members.php">Service Unit</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="gallery.html">Gallery</a></li>
			<li><a href="Login.php">Admin Log-in</a></li>
			<li><a href="#">Request Page</a></li>>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Featuring</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
            <li>
              Covenant Day Of Escape!</li>
            <li>Special Anointing Service</li>
            <li>An Atmosphere For Great And Mighty Miracles</li>
            <li>Healing </li>
            <li>Worship</li>
            <li>Powerful Praises</li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a></div>
      <div class="col c2">
        <h2><span>Worship With</span> Us</h2>
        <p>Are you looking for a place to worship? Are you looking for a place where the Word of God will come alive in your spirit? Living Spring International is the place to be!</p>
      </div>
      
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>  
        <p class="contact_info"> <span>Address:</span> KM7 OGBA EXPRESS WAY ALONG IKEJA LAGOS NIGERIA. <br />
          <span>Telephone:</span> 07033718271<br />
          <span>Others:</span> 08183698523<br />
          <span>E-mail:</span> <a href="#">feyisewaawotedu@gmail.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright 2016 <a href="#">LCS</a>.</p>
      <p class="rf">Design by Feyex <a href="http://www.feyexweb.com/">Web</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>