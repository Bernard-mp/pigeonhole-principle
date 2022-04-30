
<?php
$host= 'localhost';
$dbuser = 'root';
$dbpass= '';
$dbname= 'bernard';


$connection = mysqli_connect($host, $dbuser, $dbpass, $dbname);

$names = $_POST['names'];
$email = $_POST['email'];
$message = $_POST['message'];

if (isset($_POST['submit'])) {
	
	$sql = "INSERT INTO contacts(names, email, message)
    VALUES ('$names','$email','$message')";

   


    try {
        $query=mysqli_query($connection,$sql);
      header('Location:contactus.php?sent');
      // echo "DONE!!";

      }

     catch (Exception $e) {
        $e->getMessage();
        echo "Error";
    }	

}


?>