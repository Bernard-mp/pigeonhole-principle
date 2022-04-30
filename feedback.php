<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Feedback</title>
    
    <link rel="stylesheet" href="css/main1.css">
    <style>

.alert-success{
 background-color:green;
 padding:0.1em 0.2em;
 color:white;
 margin: 0%;
}
</style>
</head>
<body>
  
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

  <div class="wrapper">
    <div class="form">
      <h1 class="title">Feed back</h1>
      <?php
      if (isset($_GET["sent"])) {
        echo 
        '<div class="alert alert-success" >
                       
                      <center> <strong>SENT!! </strong><p><center> Thank you for your message. We will get back to you as soon as possible.</p></center>
                  </div>'
        ;
      }
    ?>
      <p> Please provide your valuable feedback below: </p>
      <form action="feed.php" class="myform" method="post">
        <div class="control-from">
          <label for="firstname"> Name *</label>
          <input type="text" id="name" name="names" required>
        </div>


        <div class="control-from">
          <label for="emailaddress">Email Address *</label>
          <input type="email" id="emailaddress" name="email" required>
        </div>

        
          <div>
          <label for="location">Comments </label>
          <textarea class="control-from" type="textarea" name="message" id="comments" placeholder="Your Comments" maxlength="6000" rows="10" cols="40"></textarea>
          </div>
                    
        <div>
            <label class="radio-inline">
                <input type="radio" name="experience" id="radio_experience" value="bad" required >
                Bad 
            </label>
            <label class="radio-inline">
                <input type="radio" name="experience" id="radio_experience" value="average" required>
                Average 
            </label>
            <label class="radio-inline">
                <input type="radio" name="experience" id="radio_experience" value="good" required >
                Good 
            </label>
          </div>

        <div class="button">
          <button type="submit" name ="submit" >Post </button>
        </div>

      </form>
    </div>
  </div>

</body>
</html>
