<?php


if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];


    $connect = mysqli_connect("localhost", "root", "", "_tpjalk");
    $sql = "INSERT INTO items (name, email, mess) VALUES ('$name', '$email','$message')";
    $finish = mysqli_query($connect, $sql);

}


?>
<!DOCTYPE html>
<html lang="en">
<title>TP-Jalk Developer Studio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="css/w3style.css">
<link rel="stylesheet" href="css/style.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <h3 class="w3-padding-top-64 w3-center title"><b>TP Jalk</b></h3>
  <h5 class="under-title">Development Studio</h5>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">PORTFOLIO</a> 
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT US</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">SOME NAME</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens --> 
<!--  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  &lt;!&ndash; Photo grid &ndash;&gt;
  <div class="w3-row">
    <div class="w3-third">
      <img src="" style="width:100%" onclick="onClick(this)" alt="A boy surrounded by beautiful nature">
      <img src="" style="width:100%" onclick="onClick(this)" alt="What a beautiful scenery this sunset">
      <img src="" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful">
    </div>

    <div class="w3-third">
      <img src="" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful">
      <img src="" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert">
      <img src="" style="width:100%" onclick="onClick(this)" alt="Nature again.. At its finest!">
    </div>
    
    <div class="w3-third">
      <img src="" style="width:100%" onclick="onClick(this)" alt="Canoeing again">
      <img src="" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing">
      <img src="" style="width:100%" onclick="onClick(this)" alt="What a beautiful day!">
    </div>
  </div>-->

  <!-- Pagination -->
<!--  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>-->
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <!--<img id="img01" class="w3-image">-->
      <p id="caption"></p>
    </div>
  </div>

  <!-- About section -->
  <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="about">
    <h4 class="section-title">About Us</h4>
    <div class="w3-content w3-justify" style="max-width:600px">
      <div class="about">
        <div class="item1 about-item">
          <img src="img/bitmoji.png" alt="">
            <h5>Lorem Ipsum</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium commodi dolorum fugiat hic illum, minima necessitatibus officiis optio repudiandae sapiente sed voluptas voluptatem. Assumenda consequuntur ea eius nemo soluta.</p>
        </div>
         <div class="item2 about-item">
             <img src="img/bitmoji.png" alt="">
             <h5>Lorem Ipsum</h5>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium commodi dolorum fugiat hic illum, minima necessitatibus officiis optio repudiandae sapiente sed voluptas voluptatem. Assumenda consequuntur ea eius nemo soluta.</p>
        </div>
         <div class="item3 about-item">
             <img src="img/bitmoji.png" alt="">
             <h5>Lorem Ipsum</h5>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium commodi dolorum fugiat hic illum, minima necessitatibus officiis optio repudiandae sapiente sed voluptas voluptatem. Assumenda consequuntur ea eius nemo soluta.</p>
        </div>
      </div>
      <hr class="w3-opacity">
      <h4 class="w3-padding-16 section-title">Technical Skills</h4>
      <p class="w3-wide">HTML</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:95%">95%</div>
      </div>
      <p class="w3-wide">CSS</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:85%">85%</div>
      </div>
      <p class="w3-wide">JAVASCRIPT</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:75%">75%</div>
      </div>
      <p class="w3-wide">PHP</p>
      <div class="w3-white">
        <div class="w3-container w3-padding-small w3-center w3-grey" style="width:45%">45%</div>
      </div>
      <hr class="w3-opacity">
      <h4 class="w3-padding-16 section-title">How much we charge</h4>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
            <li class="w3-padding-16">Web Design</li>
            <li class="w3-padding-16">Photography</li>
            <li class="w3-padding-16">5GB Storage</li>
            <li class="w3-padding-16">Mail Support</li>
            <li class="w3-padding-16">
              <h2>$ 10</h2>
              <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <button class="w3-button w3-white w3-padding-large">Sign Up</button>
            </li>
          </ul>
        </div>
        
        <div class="w3-half">
          <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-black w3-xlarge w3-padding-32">Pro</li>
            <li class="w3-padding-16">Web Design</li>
            <li class="w3-padding-16">Photography</li>
            <li class="w3-padding-16">50GB Storage</li>
            <li class="w3-padding-16">Endless Support</li>
            <li class="w3-padding-16">
              <h2>$ 25</h2>
              <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <button class="w3-button w3-white w3-padding-large">Sign Up</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact section -->
  <div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="contact">
    <div class="w3-content" style="max-width:600px">
      <h4 class="w3-center"><b>Contact Us</b></h4>
      <p>Do you want me to photograph you? Fill out the form and fill me in with the details :) I love meeting new people!</p>
      <form action="main.php" method="post" target="_blank" id="myForm">
        <div class="w3-section">
          <label>Full name</label>
          <input class="w3-input w3-border" type="text" name="name" id="name">
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input w3-border" type="email" name="email" id="email">
        </div>
        <div class="w3-section">
          <label>Message</label>
          <input class="w3-input w3-border" type="text" name="message" id="message">
        </div>
        <div class="button-submit">
          <button type="submit" name="submit" class="w3-button w3-black w3-margin-bottom" id="submitFormData()">Send Message</button>
        </div>
      </form>
        <div id="results">

        </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-grey">  
    <div class="w3-row-padding">
      <div class="w3-third">
        <h3>INFO</h3>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>      
      </div>
    
      <div class="w3-third">
        <h3>BLOG POSTS</h3>
        <ul class="w3-ul">
          <li class="w3-padding-16 w3-hover-black">
            <img src="" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Lorem</span><br>
            <span>Sed mattis nunc</span>
          </li>
          <li class="w3-padding-16 w3-hover-black">
            <img src="" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Ipsum</span><br>
            <span>Praes tinci sed</span>
          </li> 
        </ul>
      </div>

      <div class="w3-third">
        <h3>POPULAR TAGS</h3>
        <p>
          <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">London</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">DIY</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Family</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Shopping</span>
          <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Games</span>
        </p>
      </div>
    </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

<!-- End page content -->
</div>


<script src="js/script.js"></script>
</body>
</html>
