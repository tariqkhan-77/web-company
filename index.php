<?php
//php code to send contact form details through an email to the client and the owner of the website.

// //  if (isset($_POST['send'])) {// check if user enter data
//       $mailto = "tarique001.khan@gmail.com"; // owner's e-mail id
//       $from = $_POST['email'];  // visitor's e-mail id
//       $name = $_POST['name']; // visitor's name
//       $subject = $_POST['subject'];
//       $subject2 = "Your Message Submitted Successfully | Tarique Khan"; // this is for visitor
//       $message = "Client Name: ". $name. "Wrote the following message". "\n\n". $_POST['message'];
//       $message2 = "Dear ". $name. "\n\n". "Thank You for contacting us! We'll get back to you soon";// This is for visitor
//       $headers ="from: ". $from; // visitor entered e-mail address
//       $headers2 = "from: ". $mailto; //this will received by the client
//       $result = mail($mailto, $subject, $message, $headers); // this is for the owner
//       $result2 = mail($from, $subject2, $message2, $headers2); // this is for the visitor

//       if ($result) {
//         echo '<script type="text/javascript">alert("Message was sent Successfully, Please check your e-mail.")</script>';
//       } else {
//         echo '<script type="text/javascript">alert("E-mail not sent, Please try again later")</script>';

//       }
//   }

 if (isset($_POST['send'])) {
 
 $mailto="tarique001.khan@gmail.com";
 $subject= $_POST['subject'];
 $body= $_POST['message'];
 $headers= "from: tariqkhan7631@gmail.com";

 if (mail($mailto, $subject, $body, $headers)) {
   echo "E-mail successfully sent to $mailto...";
 }else{
  echo "E-mail sending failed";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="mywebdesigner, web-designer in yavatmal, web-develpor in yavatmal, web-design, website maker">
    <meta name="description" content="Do you want your business visible on Internet, then you are at right place. Please click the url and contact us.">
    <meta name="author" content="Tarique Khan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mywebdesigner</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="web-company.css">

</head>
<body>
    
<!-- header section starts  -->

<header>
    
    <div class="user">
        <img src="images/black_img.png" alt="Developer's Image">        
        <h3 class="name">Tarique Khan</h3>
        <p class="post">Web-developer</p>
    </div>


    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#portfolio">portfolio</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>Tarique obaid Khan</span></h1>
    <p>I started my coding journey almost exactly a year ago and now I'm working full time and doing freelance projects.  You may have noticed from my portfolio, but I'm obsessed with unique, interesting design and user-friendly functionality, so hit me up with your artistic project ideas.
    </p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> name : </span> tarique khan </h3>
        <h3> <span> age : </span> 32 </h3>
        <h3> <span> qualification : </span> certified web-developer </h3>
        <h3> <span> post : </span> web-developer</h3>
        <h3> <span> language : </span> english, hindi, marathi, urdu </h3>
        <a href="download.php?file=tarique_cv"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
    </div>

    <div class="counter">

        <div class="box">
            <span></span>
            <h3>years of experience</h3>
        </div>

        <div class="box">
            <span></span>
            <h3>projects completed</h3>
        </div>

        <div class="box">
            <span></span>
            <h3>happy clients</h3>
        </div>

        <div class="box">
            <span></span>
            <h3>awards won</h3>
        </div>

    </div>

</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> my <span>education</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2006</span>
        <h3>10th</h3>
        <p> from St.Aloysius English Medium School, yavatmal.</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2008</span>
        <h3>12th</h3>
        <p>from Jawaharlal Darda Science Junior College, yavatmal.</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2012</span>
        <h3>graduation</h3>
        <p>from Abasaheb Parvekar Mahavidhyalay, yavatmal.</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2016</span>
        <h3>web-development certifications</h3>
        <p>from hyderabad</p>
    </div>

    <<!--<div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2020</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2021</span>
        <h3>front end development</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
    </div>-->

</div>

</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> my <span>portfolio</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="images/login_page.png" alt="">
    </div>

    <div class="box">
        <img src="images/transparen_login.png" alt="">
    </div>

    <div class="box">
        <img src="images/img3.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/img4.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/img5.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/img6.jpg" alt="">
    </div>

</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> khan_tarique001@yahoo.com </h3>
            <h3> <i class="fas fa-phone"></i> +91-986-050-7977 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> yavatmal, india - 445001. </h3>
        </div>

    </div>

    <form action="" method="POST">

        <input type="text" placeholder="name" name= "name" class="box" required>
        <input type="email" placeholder="email" name="email" class="box" required>
        <input type="text" placeholder="subject" name="subject" class="box" required>
        <textarea name="message" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
        <button type="submit" class="btn" name="send"> send <i class="fas fa-paper-plane"></i> </button>

    </form>

</div>

</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="web-company.js"></script>


</body>
</html>