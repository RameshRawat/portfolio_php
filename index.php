<?php
include './conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  

<!-- link:michalsnik.github.io/aos  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
  <!-- animated effect close link  -->

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="jquery.parallax.css" rel="stylesheet">
    

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- social icon link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <!-- slide show carousel  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- slide show carousel end  -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400&display=swap" rel="stylesheet">
  <!-- google font link end  -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="resp.css">
  <link rel="stylesheet" href="./css/animate.css">
  <link rel="stylesheet" href="./css/owl.carousel.css">
  <link rel="stylesheet" href="./css/owl.theme.green.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <!-- external css end  -->

  <title>Frontend Developer</title>
</head>


<body style="font-family: 'Assistant', sans-serif;">
  <section id="top">
    <!-- nav start  -->
    <div class="nav">
      <li>
        <a href="#home1" data-aos="zoom-in">Home</a>
      </li>
      <li>
        <a href="#about1" data-aos="zoom-in">About</a>
      </li>
      <li>
        <a href="#services1" data-aos="zoom-in">Services</a>
      </li>
      <li>
        <a href="#contact1" data-aos="zoom-in">Contact</a>
      </li>
    </div>
    <!-- nav bar close  -->
    <!-- <div style="width: auto; height: 120px;" id="b1"></div> -->
  </section>
  
  <div class="introduction" style="border-bottom: 2px solid grey;">


    <div class="intro">
      <h1 style="margin-left: 40px;">FRONTEND<span style="color: green;"> DEVELOPER</span></h1>
      <div class="intro12">
        <!-- <h1 style="margin-left: 17px">my introduction</h1> -->
        <img src="img/r.jpg" id="z2" alt=""
          style="height: 200px; width: 200px; margin-left: 100px; border-radius: 120px 120px 50px 20px; box-shadow: -40px -10px 20px rgb(235, 188, 188);">
      </div>

      <div class="myintro1" style="margin-left: 10px;">
        <div>
          <h2>Hi, I'm Ramesh</h2>
          <h4 style="color: green; font-weight: bold;">I,m a passionate web designer from Nepal</h4>
        </div>

        <h2>I am a person who is positive about every aspect of life. There are many things I like to do, to see, and to
          experience.</h2>


        <div class="button1">
          <!-- <a href="#"><input type="submit" value="view cv" style="padding:10px; width: 70px;"></a>
             <a href="#"><input type="submit" value="download directly" style="padding:10px; width: 140px;"></a>
            <a href="#"><input type="submit" value="email" style="padding:10px; width: 70px;"></a> -->
          <a href="fornt.pdf"><button class="buttonhover"><span>View CV</span></button></a>
          <a href="fornt.pdf" target="_blank"><button class="buttonhover"><span>Download</span></button></a>
          <a href="https://www.youtube.com/channel/UCErEAz5TDWUcd4VDxLiCkuA" target="_blank"><button
              class="buttonhover"><span>Subscrible</span></button></a>
        </div>
      </div>
    </div>

    <div class="container">



      <h2><span style="color: green; display: inline;">WEB</span> DESIGNER</h2>




      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/secslide.jpg" alt="Los Angeles" id="z3">
          </div>

          <div class="item">
            <img src="img/q.jpg" alt="Chicago" id="z3">
          </div>

          <div class="item">
            <img src="img/thirdslide.jpg" alt="New york" id="z3">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="color:red;">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next" style="color:red;">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <section>

    <!-- skilled  -->
    <section id="about1">

      <div class="aboutheading">
        <h1 style="font-weight: bold;">about me</h1>
      </div>

      <div class="number1">


        <div class="a1"data-aos="flip-left">
          <img src="img/logo.jpg" class="imgg">
        </div>

        <div class="a12">
          <h1 style="font-size: 24px; font-weight: bold;">WANNA KNOW ME..?</h1>
          <h4 data-aos="fade-in"> Skill of JavaScript, HTML, WordPress and CSS, mySQL and Php. I actually have intensive expertise in
            operating with Adobe Photoshop, creative person, Dreamweaver and InDesign. I actually have used these tools
            to with success produce webpages, banners, ads and advertising materials..</h4>
          <h3>Name:<spans style="color: green;"> Ramesh Rawat</span></h3>
          <h3>Birthday:<spans style="color: green;"> 2057/06/20</span></h3>
          <h3>Faculty:<spans style="color: green;"> BSc.CSIT</span></h3>
          <h3>Campus:<spans style="color: green;"> Amrit Science(ASCOL)</span></h3>

          <a href="./knowmore/know.php"><button class="buttonhover"><span>KnowMore</span></button></a>
        </div>
      </div>

      <!-- my portfolio  -->
      <div class="port">
        <h1 style="color:black; font-size:30px;display: flex;font-weight: bold; justify-content: center;" id="pho">MY
          PORTFOLIO</h1>
     <div class="owl-carousel owl-theme">
        <div class="item"><img src="img/e.jpg" class="portimg" data-aos="fade-down-left"></div>
        <div class="item"><img src="img/q.jpg" class="portimg" data-aos="zoom-in"></div>
        <div class="item"><img src="img/t.jpg" class="portimg" data-aos="fade-down-left"></div>
        <div class="item"><img src="img/ty.jpg" class="portimg" data-aos="zoom-in"></div>
        <div class="item"><img src="img/man.jpg" class="portimg" data-aos="zoom-in"></div>
        <div class="item"><img src="img/y.jpg" class="portimg" data-aos="fade-down-left"></div>
        <div class="item"><img src="img/5.jpg" class="portimg"></div>
        <div class="item"><img src="img/55.jpg" class="portimg"></div>
        <div class="item"><img src="img/5555.jpg" class="portimg"></div>
        <div class="item"><img src="img/head.jpg" class="portimg"></div>
        <div class="item"><img src="img/555.jpg" class="portimg"></div>
        <div class="item"><img src="img/55555.jpg" class="portimg"></div>
        <div class="item"><img src="img/pen.jpg" class="portimg"></div>
        <div class="item"><img src="img/laptop.jpg" class="portimg"></div>
        </div>
        <!-- <img src="img/head.jpg" class="portimg"> -->
        



      </div>
      <script>
        $('.owl-carousel').owlCarousel({
    loop:true,
    navspeed:true,
    items:5,
    margin:10,
    nav:true,
    mousedrag:true,
    touchdrag:true,
    autoplay:1000,
    autoplaytimeout:0,
    autoplayhoverpause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
</script>
<script>
  AOS.init();
</script>
      
    </section>




    <!-- services  -->
    <section id="services1">
      <div class="servicess">




        <div class="wrapper">



          <h2>
            Services</h2>
          <div class="line">
          </div>
          <div class="single-service">
            <div class="social">
              <i class="fa fa-codepen"></i>
            </div>
            <span></span>
            <h3>
              Web Design</h3>
            <p>
              I'm a designer/developer targeted on crafting nice web experiences. coming up with and secret writing are
              my passion since the times I started operating with computers however I found myself into internet
              design/development. I get pleasure from making fantastically designed, intuitive and useful websites.</p>
          </div>
          <div class="single-service">
            <div class="social">
              <i class="fa fa-cogs"></i>
            </div>
            <span></span>
            <h3>
              ui / ux design</h3>
            <p>
               Designer, i will be able to make sure that the user expertise for people victimization websites or
              applications is as economical and pleasant as potential. i will be concerned within the style of digital
              merchandise and services for specific target teams and finish users and can got to perceive motivations.
            </p>
          </div>
          <div class="single-service">
            <div class="social">
              <i class="fa fa-diamond"></i>
            </div>
            <span></span>
            <h3>
              Graphics design</h3>
            <p>
              I am a graphics designer amateur, a travel/adventure lover and .,I don't suppose i'm nearly as good in
              Graphics as i'm in net style however i really like photography. once I am not operating i really like
              hanging around with my camera and capture some sensible snaps. one thing i actually realize myself
              enjoying.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- contact start  -->

   

    <section id="contact1">
      <div class="contacthead">
        <h1>contact me</h1>
      </div>

      <?php 
    include 'conn.php';
    if(isset($_POST['submit'])){
      $username=$_POST['name'];
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
      $query= "INSERT INTO protfol(name, email, subject, message) VALUES ('$username','$email','$subject','$message')";
      $result=mysqli_query($conn,$query);


    }
    ?>


     
<form action="" method="post">
      <div class="contactme">
        <div class="write1">
          <input type="text" name="name" id="yname" placeholder="Your Name">
          <input type="text" name="email" id="yemail" placeholder="Your Email">
          <input type="text" name="subject" id="ysubject" placeholder="Subject">
          <textarea name="message" id="textt" cols="30" rows="10" placeholder=" Your Message"></textarea>
          <button type="submit" class="buttonhover" name="submit" data-aos="zoom-out-up"><span>Send</span></button>
          <!-- <input type="button" name="bttn" value="submit"> -->
        </div>
        
        <div class="write2" data-aos="flip-left">
          <img src="img/contact.jpg">
        

        </div>
      </div>
</form>


    
     

      <!-- <about> start  -->

      <div class="cont">
        <div class="loc">
          <h4 data-aos="zoom-in"><i class="fa fa-phone"> call me</i> </h4>
          <p>9988675434</p>
        </div>

        <div class="loc">
          <h4 data-aos="zoom-in"><i class="fa fa-envelope"> Email</i></h4>
          <p>rameshrawat2464@gmail.com</p>
        </div>

        <div class="loc">
          <h4 data-aos="zoom-in"><i class="fa fa-location-arrow"> location</i></h4>
          <p>kathmandu,Thamel</p>
        </div>
        <div class="footer1">
          <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/home" target="_blank"><i class="fa fa-twitter"></i></a>
          <a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.youtube.com/channel/UCErEAz5TDWUcd4VDxLiCkuA" target="_blank"><i
              class="fa fa-youtube"></i></a>

        </div>

      </div>

      <!-- footer  -->
      <div class="footerhead" style="margin-top: 1px;">
        <h4>@Ramesh2021.All Right Reserved.Designed</h4>
        <a href="#top"><button id="last"
            style="margin-top: 8px;margin-left: 10px;background-color: red;color: white; border-radius: 5px;"><span>Preview
              Top</span></button></a>
      </div>
    </section>

    
</body>
</html>