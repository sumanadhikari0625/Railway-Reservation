<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="staffforgotstyle.css">
    <title>Forgot Password</title>

</head>
<body>
    <!-- <video autoplay muted loop id="myVideo">
    <source src="download_Trim (online-video-cutter.com)_Trim.mp4" type="video/mp4">
  </video> -->
  <div class="bg-image" style="
   
    background: url('https://i.ytimg.com/vi/KuDn-EWuZew/maxresdefault.jpg');
    -webkit-filter: blur(5px);
    -moz-filter: blur(5px);
    -o-filter: blur(5px);
    -ms-filter: blur(5px);
    filter: blur(5px);
    position: fixed;
    width: 100%;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: -1;
"></div>
  <div class="container">
    <section class="Page-Top" width=100%>
        <!--<marquee behavior="scroll" direction="left" scrollamount="10">-->
            <div class="Heading head">
                <img id="logo" src="favicon.png" alt="logo"height="100" width="120">
                <div class="Heading-Text">Railway Reservation System</div>
            </div>
        
    </section>

          
       <!--  <div class="HeadLine">DTU Railways Reservation System</div>-->
        <marquee style="color: red" behavior="scroll" class="HeadLine"scrollamount="10" direction="left">Due to COVID-19, only special trains are running. Stay Home, Stay Safe!   </marquee>
 
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<br><br><br>
    <form class="background login" action="" method="post">
        <div class="credentials" style="background: lightseagreen"  > 
            <h4 >   Enter your email and we'll send you a link to get back into your account.</h4>
            <div class="username">
                 <input type="text" style="border-color: black"  placeholder="Enter your Email" name="email"> 
            </div>
            <div class="button">
                <input  type="submit" name="loginlink" value="SEND LOGIN LINK" style="margin-left: 70px" style="height: 50%" style="color: white" style="background: black" style="border: 3.5px solid white;">   
                 &nbsp; &nbsp; &nbsp; &nbsp;
                
            &nbsp; &nbsp; &nbsp; &nbsp;
            <br>
            <h4 align=center> -------------------    OR    -------------------</h4>
               
              
              </div>
             
              <!--<a href="register.php">Create new account</a> -->

          <a href="stafflogin.php"  style="color: black;">
            Back to Login
          </a>
           
        </div>
    </form>

    <!-- FOOTER-->

    
</body>
</html>
<?php
session_start();
@$_SESSION['email']=$_POST['email'];
@$_SESSION['loginlink']=$_POST['loginlink'];

$x=1;
$con=mysqli_connect("localhost","root","");
$s=mysqli_select_db($con,"DB");
$t="select * from staff";
$tt=mysqli_query($con,$t);


if(@$_SESSION['loginlink'])
{ 
  while($row=mysqli_fetch_array($tt))
  {
    if(@$_SESSION['email']==$row[4])
    { 
          $x=0;   
          
     //      if($row[7]==NULL)
     //  
     // else
     //   header("location: staffhomepage.php");
      // header("location: index.php");
      echo '<script>alert("We have sent you a mail to reset your password")</script>';
    }
    
  }
    if($x!=0)
      { 
            echo '<script>alert("unregistered email")</script>';
      }
}
?>