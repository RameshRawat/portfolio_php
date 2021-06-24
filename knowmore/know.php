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
    <link rel="stylesheet" href="know.css">
  <link rel="stylesheet" href="resp.css">

</head>
<body>
    
        
         <div class="nav">
           <p style="color: white; font-size:40px;">THANKS FOR VISITING HERE</p>
          <!-- <li>
            <a href="#html1"></a>
          </li>
          <li>
            <a href="#about1"></a>
          </li>
          <li>
            <a href="#services1"></a>
          </li>
          <li>
            <a href="#contact1"></a>
          </li> -->
        </div> 

        <h1 style="display: flex; justify-content: center; color: chocolate; font-size: 40px; font-weight: bold;">FRONTEND</h1>
        
        <div class="knowparrent">
          <div class="knowchild">
            <h1 style="display: flex; justify-content: center;">HTML</h1>
            <img src="../img/cov.jpg" alt="" data-aos="fade-down-left">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo aperiam odio fugiat. Blanditiis numquam neque atque dignissimos, aliquid autem laudantium totam optio! Quo quos cupiditate veritatis id. Eius, sint magni! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi rem, fugiat doloribus ullam labore reiciendis vel nulla corrupti temporibus quibusdam explicabo odit voluptatum eveniet autem, tenetur, dolorem porro ut. Soluta.</p>

          </div>
          <div class="knowchild">
            <h1 style="display: flex; justify-content: center;">CSS</h1>
            <img src="../img/ty.jpg" alt="" data-aos="flip-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias pariatur enim dicta, itaque iusto in laborum rerum consequuntur cumque consequatur doloremque nihil quos, excepturi voluptatibus magni ipsa quis tempore? Quibusdam maxime cum saepe! Vitae facilis nisi fugiat, magnam odio asperiores?
            </p>
</div>
<div class="knowchild">
<h1 style="display: flex; justify-content: center;">JAVASCRIPT</h1>
<img src="../img/w.jpg" alt="" data-aos="fade-down-right">
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo aperiam odio fugiat. Blanditiis numquam neque atque dignissimos, aliquid autem laudantium totam optio! Quo quos cupiditate veritatis id. Eius, sint magni! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi rem, fugiat doloribus ullam labore reiciendis vel nulla corrupti temporibus quibusdam explicabo odit voluptatum eveniet autem, tenetur, dolorem porro ut. Soluta.</p>
</div>
</div>

<!-- backend  -->

<h1 style="display: flex; justify-content: center; color:chocolate; font-size: 40px; font-weight: bold;">BACKEND</h1>
<div class="secondparrent">
  <div class="secondchild">
    <h1>PHP</h1>
    <img src="../img/man.jpg" alt="" data-aos="fade-down-left">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo veritatis mollitia blanditiis necessitatibus! Aliquam aut iusto possimus nemo veniam, laborum perspiciatis sint nulla dolor magni in. Voluptates architecto neque laboriosam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, dolorem autem.
    
    </div>
<div class="secondchild">
  <h1>MYSQL</h1>
  <img src="../img/y.jpg" alt="" data-aos="fade-down-right">

<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo veritatis mollitia blanditiis necessitatibus! Aliquam aut iusto possimus nemo veniam, laborum perspiciatis sint nulla dolor magni in. Voluptates architecto neque laboriosam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, dolorem autem.</p>

  </div>

</div>

<!-- comment box  -->
<?php 
include '../conn.php';
if(isset($_POST['click'])){
  $username=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['message'];
  $query= "INSERT INTO comment(name, email, message) VALUES ('$username','$email','$subject')";
  $result=mysqli_query($conn,$query);


}
?>

<div class="container">
  <form action="" method="POST">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Enter your name..">

    <label for="lname">Email</label>
    <input type="text" id="gml" name="email" placeholder="Enter your gmail..">

    <label for="subject">Comment</label>
    <textarea id="subject" name="message" placeholder="Write something..." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="click">
  </form>
</div>
<h1 style="display:flex;justify-content:center; color:chocolate; font-size:40px; font-weight:bold;" data-aos="flip-left">COMMENT LIST</h1>

<table>
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
  </tr>
  <?php
$q="select * from comment";
$query=mysqli_query($conn,$q);
while($res=mysqli_fetch_array($query)){
  
 ?>
  <tr>
    <td><?php echo $res['id'];?></td>
    <td><?php echo $res['name'];?></td>
    <td><?php echo $res['email'];?></td>
    <td><?php echo $res['message'];?></td>
  </tr>
  <?php }?>
  
        <!-- script  -->
        <script>
          AOS.init();
        </script>
        
</body>
</html>