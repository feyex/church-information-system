<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LSI | Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-colaborate-800.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
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
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Contact</span \> </h2>
          <div class="clr"></div>
          <p>Welcome to Living Spring International Church! A place of joy,happiness and filled with God's prescence. Here you can contact us and send  your prayer request, ask for advice,and other necessary request to us.</p>
        </div>
        <div class="article">
          <h2><span>Send us</span> your request </h2>
          <div class="clr"></div>
          <form action="contact.php" method="post" id="sendemail">
            <ol>
              <li>
                <label for="name">Name</label>
                <input id="name" name="name" class="text" />
              </li>
              <li>
                <label for="email">Email Address</label>
                <input id="email" name="email" class="text" />
              </li>
              <li>
                <label for="phone">Phone No:</label>
                <input id="phone" name="phone" class="text" />
              </li>
              <li>
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="8" cols="50"></textarea>
              </li>
              <li>
                <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                <input type ="hidden"  name="new" value="submit" id="hidden" />
                
                <div class="clr"></div>
              </li>
            </ol>
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
        </div>
        <?php
        $connection =mysqli_connect("localhost","root","");
		$dbc=mysqli_select_db($connection,"church");
		
		
		if(isset($_POST['new']))
		
	{
	$name = $_POST['name'];
	$email= $_POST['email'];
	$phone = $_POST['phone'];
	$message =$_POST['message'];
	
	
	if($name!='' && $phone!='' && $email!='' && $message!='')
	{
	$result="insert into contact (name,email,phone,message,registration_date) values ('$name', '$email','$phone','$message', NOW())";
    $query=mysqli_query($connection,$result) or die (mysqli_error ($connection));
		echo "<span><strong>Thank you!</span> Your request has been gotten and will prayed on!</strong>";
		
	}
	
	else {
		echo "<p><strong> Request not sent! Please try again</strong>
		<br /> Some Fields are missing</p>";
		}
	}
	
	mysqli_close($connection);
        ?>
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
			<li><a href="#">Request Page</a></li>
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