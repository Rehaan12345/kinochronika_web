<?php
 
$ip = $_SERVER['REMOTE_ADDR'];
$host = $_SERVER['REMOTE_HOST'];
 
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];

$to = "info@kinochronika.com"; "yanaste@gmail.com";
$subject = "New Request";

$admin="yanaste@gmai.com";
$header = 'From: "Kinochronika Web Server"' . "\r\n";

$message="
The following comments/request was collected by Kinochronika Films' web server.\n
Primary Contact Name  $name
Email                 $email
 
Comments
--------------------
$comments
--------------------
 
Requesting Host       $ip $host";

$email = "me@example.com";
if (filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
  // The email address is valid
} else {
  // The email address is not valid
}
if (!empty ($_POST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_POST['email'] ;
  
  mail("yanaste@gmail.com", $subject,
  $message, "From:" . $email);
  echo  "<p>Thank you for using our mail form, $name</p>";
  echo "<br> We will reply to $email";
  }
else
//if "email" is not filled out, display the form
  {$email = NULL;
  echo "Please fill your email";
  }

// Create connection
$con=mysqli_connect("localhost","prima","tanya0","tanyacontactmore");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  
mysqli_query($con,"INSERT INTO contactus (name, email, comments)
VALUES ('" . $_POST["name"] ."','". $_POST["email"]."','". $_POST["comments"]."')");


$result = mysqli_query($con,"SELECT * FROM contactus");

while($row = mysqli_fetch_array($result))
  {
 
  }
  
echo "<script type='text/javascript'>alert('submitted successfully!');
window.location = 'index.html';</script>";


mysqli_close($con);
?>

