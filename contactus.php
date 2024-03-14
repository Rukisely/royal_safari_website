<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title>Contact Us</title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="contactus.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <header>
    
    
    <div class="logo">
        <a href="index.html">Royal<em>Safari</em></a>
    </div>
    <nav>
        <ul>
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="indx.html">Gallery</a></li>
            <li><a href="contactus.html">Contact us</a></li>
            <li><a href="singup.html">Sign in/up</a></li>
        </ul> 
   
</nav>
</header>

  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one"><a href="https://www.google.com/maps/place/Julius+Nyerere+International+Airport/@-6.8725336,39.2047277,17z/data=!3m1!4b1!4m5!3m4!1s0x185c36258ab12f77:0xdb9d2ef8bf08b4e2!8m2!3d-6.8725389!4d39.2069164">Tanzania</div></a>
          <div class="text-two"><a href="https://www.google.com/maps/place/Nnamdi+Azikiwe+International+Airport/@9.0060558,7.2673137,17z/data=!3m1!4b1!4m5!3m4!1s0x104e7195d1abacc9:0xc905ee88d56fa2ff!8m2!3d9.0060505!4d7.2695024">Nigeria</div></a>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 812 377 0697</div>
          <div class="text-two">+91 734 919 4605</div>
           
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">naijatz@royalsafari.ac.in</div>
        
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any type of queries related to our work, you can send us a message from here. It's our pleasure to help you.</p>
        <form method="GET" action="contactdemo.php">
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text"  name="email" placeholder="Enter your email">
        </div>
        <div class="input-box">
          <input type="text"  name="message" placeholder="Enter your message">
        </div>
        
        <!--<div class="button">
          <input type="button" value="Send Now" >
        </div>-->
        <button type="submit">Send Now</button>
      </form>
    </div>
    </div>
  </div>
</body>
</html>