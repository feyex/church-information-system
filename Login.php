<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LSI | Admin</title>
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

.tableheader {
background-color: #95BEE6;
color:white;
font-weight:bold;
}
.tablerow {
background-color: #A7D6F1;
color:white;
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
          <li><a href="members.html"><span>Members</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
          <li></li>
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
          <h2><span>ADMIN LOG-IN PAGE</span> </h2>
          <marquee><b> <font color="blink">Welcome Admin! Fill the fields below to continue.</b></marquee> 
          <div class="clr"></div>
          <p>  Welcome to LSI. Here you can view the members registered with the church . <br>  </p>
          
        </div>
      <center>  <img src="images/all.jpg" height="100" width="500" alt=""> </center>
	  
        <div class="article">
          <div class="clr"></div>
          <div class="comment"> 
            <p><center>
              <strong><font color="#FF0000"> Please fill the form below</font></strong>!!!
            </center></p>
          </div>
          
        </div>
        <div class="article">
          <h2><span></span></h2>
          <div class="clr"></div>
          <form action="" method="post" id="leavereply">
           			<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
			   <tr class="tableheader">
              	<td align="center" colspan="2">Enter Login Details</td>
			    </tr>
				<tr class="tablerow">
				  <td align="right"><label for="name">Name</label></td>
			 	  <td> <input type="text" name="username"><?php if (empty($_POST['username']))
			     { $usererror="Insert username";
				 echo $usererror;} ?> </td>
			     </tr>
				 <tr class="tablerow">
			       <td align="right"> <label for="password">Password</label></td>
			  		<td><input type="password" name="password"> <?php if (empty($_POST['password']))
			      {
				    $passerror="Insert password";
					
				   echo $passerror;} ?></td>
			        </tr>
                     <tr class="tableheader">
                       <td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
                <div class="clr"></div>
              
          </form>
		  
		  
		  <?php
		  //Create session
		  	session_start();
			$message ="";
			if (count($_POST) >0) 
			  {
			    $connection=mysqli_connect("localhost","root","");
				$dbc=mysqli_select_db($connection,"church");
				//Make the query
					$query="SELECT * FROM login WHERE username='" . $_POST["username"] . "' and password='" . $_POST["password"] . "'  ";

			//Run the query
				$result=mysqli_query ($connection,$query);
			//output of data 4 a single row
				$row=mysqli_fetch_array($result);
			//check if the input data correspinds to the data in d dbase
			   		  
			      
				if(is_array($row))
				 {
				  $_SESSION["user_id"] =$row["user_id"];
				  $_SESSION["username"] =$row["username"];
				 }
				else{ $message="Invalid username or password!" ;}
				echo '<div class="message">'. $message  .'</div>' ;
				 

			  }
		  
		  		if (isset($_SESSION["user_id"]))
				{
				  header ("Location:admin.php");
				}
		  ?>
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
        </div>
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
			<li><a href="#">Request Page</a></li>          </ul>
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