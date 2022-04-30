

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> About Us</title>
    <link rel="stylesheet" href="css/conc.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

.alert-success{
 background-color:green;
 padding:0.1em 0.2em;
 color:white;
}

      @import url('https://fonts.googleapis.com/css2?family=Germania+One&display=swap');
      @import url("https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900");

        
        .font1{
            font-family: 'Germania One', cursive;
        }
        

        header #navigation {
            /* background-color: rgba(48, 47, 47, 0.719);
             */
            /* background: linear-gradient(to right, gray ); */
            
            height: 8vh;
            /* background-image: linear-gradient(to right, #a7e6e6 0%, rgb(22, 159, 223), rgba(15, 73, 182, 0.68)); */
            background-color: rgba(18, 80, 186, 0.626);
            margin: 0;
            padding: 0;
        }

        ul {
            display: flex;
            margin: 0;
            padding: 0;
        }

        ul li {
            display: inline-flex;
            color: black;
            /* color: white; */
            padding-top: 22px;
            padding-left: 30px;
            font-size: large;

        }

        li:link {
            font-style: normal;
        }

        li:hover {
            font-style: italic;
            color: rgb(234, 161, 34);
            cursor: pointer;
            color: white
        }

        /* header {
            font-size: 50px;
            text-align: center;
            text-shadow: 2px 2px;
            color: rgb(0, 68, 255);

        } */

        h2 {
            color: rgba(33, 76, 216, 0.688);
        }

        h2:hover {
            color: rgb(243, 162, 12);
            font-family: 'Germania One', cursive;
            cursor: pointer;
        }

        .overview {
            position: relative;
            font-size: 20px;
            top: -13px;
        }

        p {
            /* cursor: pointer; */
            cursor: default;
            text-indent: 50px;
            text-align: justify;
            text-justify: inter-word;
        }

        p.points {
            /* cursor: pointer; */
            text-indent: 0px;
        }

        img {
            /* position: relative; */
            left: 520px;
            top: 43px;

        }

        /* a:link {
            color: rgb(0, 68, 255);
            text-decoration: none;

        } */
        .content {
            margin: 4px;
            padding: 20px;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .heading {
            text-align: center;
            font-size: xx-large;
        }

        .pic{
            /* overflow: hidden; */
            width: 100vw;
            height: 50vh;
            /* padding-left: 50%;
            padding-right: 50%; */
            margin-left: 25%;
            margin-right: auto;
            float: left;
            /* background-color: dimgrey; */
        }
        a{
            text-decoration: none;
        }
  

      </style>
    </head>
 
   
<body>

  <div class="container">
  <header>
        <nav id="navigation">
            <ul>
               <a href="my_nav.html"><li  id="home">Home</li></a> 
               <a href="indexpigeon.html"><li  id="demo">Demo</li></a>
               <a href="trick/index.html"><li  id="bonus">Bonus</li></a> 
               <a href="about.html"><li  id="bonus">About-us</li></a>
               <a href="feedback.php"><li id="feedback">Feedback</li></a>
               <a href="contactus.php"><li id="contact">Contact</li></a>
            </ul>
        
        </nav>


    </header>
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">PES University,Ring Road Campus</div>
          <div class="text-two">100 Feet Ring Road,BSK 3rd Stage,Bangalore-560085</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 8553978962</div>
          <div class="text-two">+91 9845650259</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">pigeonofficial@gmail.com</div>
          <div class="text-two">pigeonholeofficial312022@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
</br>
			<?php
				if (isset($_GET["sent"])) {
					echo 
					'<div class="alert alert-success" >
                         
                        <center> <strong>SENT!! </strong><p> Thank you for your message. We will get back to you as soon as possible.</p>
                    </div>'
					;
				}
			?>
     
        <form action="contact.php" method="post">
        <div class="input-box">
          <input type="text" name="names" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message " name="message" required></textarea>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Send Now" >
        </div>
      </form>
      
  
    </div>
   
    </div>
<center>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124451.16877297484!2d77.5294621581014!3d12.90135373293779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3e468d8d36d3%3A0x694d74f6ac640acf!2sPES%20University!5e0!3m2!1sen!2sin!4v1649439980625!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
  width="700"
                        height="200"
                    
                        frameborder="0"
                        style="border:0;"
                        allowfullscreen=""
                        aria-hidden="false"
                        tabindex="0">
                </iframe>
            
  </div>
 
          
  
</body>
</html>
