<?php
$congra="";
include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $email=$_POST['Destination'];
    $message=$_POST['message'];

    $sql="insert into users2 (name,email,Destination,message) values('$name','$email','$Destination','$message')";
    $result=mysqli_query($con,$sql);
    $congra="Thanks for contacting us!";

    if($result){
        //echo  "Thanks for contacting us!";
        //header ('location:contactus.php');
    }else{
      die(mysqli_error($con)); 
  }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="contactus_style.css">
    <link rel="icon" href="hlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  </head>
  <style>
    body{
      background-color:#656565;
  /* background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(hgt.jpg); */
}
    .nav{
        background-color:black;
        width:101%;
        height:70px;
        background-size:cover;
        margin: -8px;
        margin-right:-10px;
      }
      .nav a{
        margin:auto;
        text-decoration:none;
        margin-left:10px;
        padding:3px;
        line-height:70px;
      }
  </style>
  <body>

  <div class="nav">
    <a href="index.php"  style="color:#fff;font-size:20px;font-family:calibry;">Home</a>
    <a href="about.html" style="color:#fff;font-size:20px;font-family:calibry;">About</a>
    <a href="service.html"style="color:#fff;font-size:20px;font-family:calibry;">Services</a>
    <a href="package.html" style="color:#fff;font-size:20px;font-family:calibry;">Tour Packages</a>
    <a href="contactus.php"style="color:#fff;font-size:20px;font-family:calibry;">contactus</a>                                   
    <a href="contactusinformation.php" style="color:#fff;font-size:20px;font-family:calibry;"class="nav-item nav-link">info.admin</a>
    <a href="contactus.php" style="color:red; font-size:30px;font-family:forte;">Contact us</a>
</div>

  <marquee><p style="font-size:20px; font-weight:bold; color:white;">*For additional information you can call us on these phone numbers:
        +251911861650 &nbsp;+251935480629</p></marquee>
  
    <div class="container">
    
      <h1>Contact Us</h1>
     <h2 style="color: green;"> <?php echo $congra;?> </h2>
      <form action="contactus.php" method="post">
        <label>Name:</label>
        <input type="text" name="name" placeholder="Your Name..." required>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Your E-mail..." required>
        <label>Destination:</label>
        <input type="Destination" name="Destination" placeholder="Your Destination..." required>
        <label>Message:</label>
        <textarea name="message" placeholder="Your Message..." required></textarea>
        <button type="submit" name="submit">Send</button>
      </form>
      <!-- <br>
      <div id="parent"> -->

<!-- <p>FOLLOW US ON SOCIAL MEDIA</p>

				<div id="social_media">


					<a href="https://www.facebook.com/Penel Travel agensy/"><img src="facebook.png" style="width:50px; height:35px;" title="Facebook"></i></a>
          &nbsp; &nbsp; &nbsp; &nbsp; 
          <a href="#"><img src="linkedin.webp" style="width:50px; height:35px;text-decoration:none;" title="Linkedin"></i></a>
          &nbsp; &nbsp; &nbsp; &nbsp; 
          <a href="#"><img src="tiktok.png" style="width:50px; height:35px;text-decoration:none;" title="tiktok"></i></a>
          &nbsp; &nbsp; &nbsp; &nbsp; 
					<a href="#"><img src="twitter.png" style="width:50px; height:35px;" title="twitter"></i></a>
          &nbsp; &nbsp; &nbsp; &nbsp; 
					<a href="#"><img src="insta.webp" style="width:50px; height:35px;" title="Instagram"></i></a>
          &nbsp; &nbsp; &nbsp; &nbsp; 
					<a href="https://t.me/Penel Travel agensy"><img src="teleg.webp" style="width:50px; height:35px;" title="Telegram"></i></a>
          &nbsp; &nbsp; &nbsp; &nbsp; 
          <a href="https://www.youtube.com/@Penel Travel agensy"><img src="youtube.png" style="width:50px; height:35px;" title="Youtube"></i></a>
				</div>

				<p>&copy; 2023 AB-TECH || DESIGNED BY AB-TECH IT SOLUTION</p>

</div> -->
  <!-- <br><p style="font-size:20px; font-weight:bold;">*For additional information you can call us on these phone numbers:</p>
        <h3>+251935480629 &nbsp;
        +251935480629</h3> -->
    </div>
    
  
  </body>
</html>

