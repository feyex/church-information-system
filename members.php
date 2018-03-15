<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>LSI | MEMBERS</title>
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
          <h2><span>MEMBERS</span> </h2>
          <marquee><b> <font color="blink">Become One Body With Us By Registering As A Member! We Love You!</b></marquee> 
          <div class="clr"></div>
          <p>  Being a member of Living Spring International is not our goal! Its all about you fellowshiping with God and be closer to him.<br> 
          The Lord Jesus Christ actually encouraged fellowshiping together!.That is why we see in the bible that he went into the temple to teach and goes around preaching the Word!!. The saviour  encouraged his disciples to fellowship together even after he is no longer around.<br>
          Fellowship with us today and register with us today so we can keep adequate record of our members and dat way we get to know each other well! </p>
          
        </div>
      <center>  <img src="images/all.jpg" height="200" width="500" alt=""> </center>
        <div class="article">
          <div class="clr"></div>
          <div class="comment"> 
            <p><center><strong><font color="#FF0000"> Already a Registered Member? If not! Please fill the form below</font></strong></center></p>
          </div>
          
        </div>
        
         <?php
	 
 $connection =mysql_connect ("localhost", "root", "");
$dbc =mysql_select_db("church" ,$connection);


$name = $phone =$email =$facebook =$gender = $age=$marital= $address = $service = "";
$namEr=$phoneEr=$emailEr=$faceEr=$genEr=$ageEr=$maritEr=$addEr=$servEr="";




if(isset($_POST['old']))
{
if (empty($_POST['name']))
{

$namEr="name is required";
}
else {
	$name=$_POST['name'];
	// check if it contains letters and whitespaces.
	if (!preg_match("/^[a-zA-Z ]*$/",$name))
	{
	$namEr="Only white space allowed";
	}
	}
	
if (empty ($_POST['phone']))
{
$phoneEr="phone no is required";	
}
else {
	$phone=$_POST['phone'];
	// check if it contains inly integers.
	if (!filter_var($phone,FILTER_VALIDATE_INT))
	{
	$phoneEr="Invalid phone no format";
	}
	}



if (empty ($_POST['email']))
{
$emailEr="email is required";	
}
else {
	$email=$_POST['email'];
	// check if it contains inly integers.
	if (!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
	$emailEr="Invalid email format";
	}
	}
	
	if (empty($_POST['facebook'])) {
    $facebook = "";
  } else {
    $facebook = $_POST['facebook'];
  }


 if (empty($_POST["gender"])) {
    $genEr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }
  
if (empty($_POST["age"])) {
    $age = "";
  } else {
    $age =($_POST["age"]);
  }

if (empty($_POST["marital"])) {
    $maritEr = "marital status is required";
  } else {
    $marital = $_POST["marital"];
  }



if (empty($_POST["address"])) {
    $addEr = "your address is required";
  } else {
    $address =$_POST["address"];
  }
  
  $service=($_POST['service']);


if($name !='' && $phone !='' && $gender !='' &&$age !='' &&$marital !='' &&$address !='' &&$service !='')
{



$query="insert into main(name, phone, email, facebook, gender, age, marital, address, service, registration_date) values ('$name', '$phone', '$email', '$facebook', '$gender','$age', '$marital', '$address', '$service', NOW() ) " ;
		
	$result=mysql_query($query) or die (mysql_error ($connection));
	//$query =("insert into main(name, phone, email, facebook, gender, age, marital, address, service, registration_date) values ('$name', '$phone', '$email', '$facebook', '$gender','$age', '$marital', '$address', '$service', NOW() ) "); //or die(mysqli_error());
	
	//Run the query
    //$result=mysqli_query($connection,$query) or die (mysqli_error ($connection));

	echo "<span> <font color='blink'> You are now registered </font></span>";
	}
	else{
	echo "<p><font color='blink'>Some fields are missing!!!  <br /> Registration incomplete </font></p>";
	}
}

	
	mysql_close($connection);
?> 
        <div class="article">
          <h2><span>WELCOME</span></h2>
          <div class="clr"></div>
          <form action="members.php" method="post" id="leavereply">
            <ol>
              <li>
                <label for="name">Name</label>
                <input id="name" name="name" class="text"  value="<?php echo $name; ?>" />
				<span class="error">* <?php echo $namEr; ?> </span>
              </li>
              <li>
                <label for="phone">Phone Number</label>
                <input id="phone" name="phone" class="text" 	/> 
				<span class="error">* <?php echo $phoneEr; ?> </span>
              </li>
              <li>
                <label for="email">Email Address</label>
                <input id="email" name="email" class="text"  	/>
<span class="error">* <?php echo $emailEr; ?> </span>              </li>
              <li>
                <label for="facebook">Facebook ID</label>
                <input id="facebook" name="facebook" class="text"  />																		
              </li>
              <li>
                <label for="gender">Gender</label>
                <input type="radio" name="gender" value="M" />Male
                <input type="radio" name ="gender" Value="F" />Female
				<span class="error">* <?php echo $genEr; ?> </span>
              </li>
              <li>
              <label>Age:<select name="age"><option value="0-19">under 20</option><option value="20-40">between 20 and 40</option>  <option value="40-100">40 and above</option></select></label>
				
			 </li>
              
              <li>
              <label for="marital">Marital Status:</label>
              <input type="radio" name="marital" value="M" />Married
                <input type="radio" name ="marital" Value="S" />Single
                <input type="radio" name="marital" value="D" />Divorced
                <input type="radio" name ="marital" Value="W" />Widowed
         <span class="error">* <?php echo $maritEr; ?> </span>               
              </li>
    
              <li>
                <label for="message">Address</label>
                <textarea id="message" name="address" rows="8" cols="50" ></textarea>
<span class="error">* <?php echo $addEr; ?> </span>			  </li>
              
              <li>
                 <label for="service">Service Unit:</label>
                 <select name="service">
                 <option value="choir">Praise Unit</option>
				  <option value="usher">Ushering Unit</option>
                   <option value="prayer">Prayer Unit</option>
                    <option value="prot">Protocol Unit</option>
                     <option value="school">Sunday School Teachers </option>
                     <option value="technical">Technical Unit</option>
                     <option value="security">Security Unit</option>
                     </select>
              </li>
              <li>
                <input type="image" value="submit" name="submit" id="submit" src="images/submit.gif" class="send" />
                <input type="hidden" name="old" value="submit" id="hiddenField" />
                <div class="clr"></div>
              <p><span class="error">* required field.</span></p>
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