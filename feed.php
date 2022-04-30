
<?php
$host= 'localhost';
$dbuser = 'root';
$dbpass= '';
$dbname= 'bernard';


$connection = mysqli_connect($host, $dbuser, $dbpass, $dbname);

$names = $_POST['names'];
$email = $_POST['email'];
$message = $_POST['message'];
$exp = $_POST['experience'];

if (isset($_POST['submit'])) {
	
    try {
	$sql = "INSERT INTO feed(name, email, comment,exp)
    VALUES ('$names','$email','$message','$exp')";

   


        $query=mysqli_query($connection,$sql);
      header('Location:feedback.php?sent');
      // echo "DONE!!";

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }	

}


?>