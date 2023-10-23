<!DOCTYPE html>
<html lang="en">
<?php
// print_r($_POST);

session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$status='1';
$email=$_POST['username'];
$password=md5($_POST['Password']);
$sql ="SELECT email,password FROM users WHERE email=:email and password=:password and status=(:status)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> bindParam(':status', $status, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'Profile/index.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details Or Account Not Confirmed');</script>";

}

}




if(isset($_POST['signup']))
{

// die;
$name=$_POST['Name'];
$email=$_POST['Email'];
$password=md5($_POST['Password']);
// $gender="Female";
$mobileno=$_POST['Phone'];
// $designation="";

// if(move_uploaded_file($file_loc,$folder.$final_file))
// 	{
		$image="";
//     }
$notitype='Create Account';
$reciver='Admin';
$sender=$email;

$sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
$querynoti = $dbh->prepare($sqlnoti);
$querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
$querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
$querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
$querynoti->execute();    
    
$sql ="INSERT INTO users(name,email, password, mobile, status) VALUES(:name, :email, :password,  :mobileno,  1)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':name', $name, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
// $query-> bindParam(':gender', $gender, PDO::PARAM_STR);
$query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
// $query-> bindParam(':designation', $designation, PDO::PARAM_STR);
// $query-> bindParam(':image', $image, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script type='text/javascript'>alert('Registration Sucessfull!');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AYUSH - An Interactive Platform for New Startups and Investors .</title>
  <meta name="description"
    content="Explore AYUSH, an interactive platform connecting new startups and investors. Discover opportunities, collaborate, and foster innovation in the startup ecosystem.">
  <meta name="keywords"
    content="AYUSH, Interactive Platform, Startups, Investors, Startup Ecosystem, Collaboration, Innovation, Investment Opportunities, New Ventures, Entrepreneurship">
  <meta name="author" content="Sidak Marwah">
  <meta name="robots" content="index, follow">
  <link rel="stylesheet" href="style.css">
</head>

<body>


  <div id="navbar">
    <div>
      <h1><a href="../index.php" style="color: white; text-decoration:none;">Health Portal</a></h1>
      
      <p id="loginSignUpToggle">Login/SignUp</p>
    </div>
  </div>

  <div id="mainContainer">
    <div id="loginSignup">
      <h1>Log In</h1>
      <form id="loginForm" method="post">
        <label for="username">Username</label>
        <input id="username" type="text" name="username" required>
        <label for="password">Password</label>
        <input type="password" name="Password" id="password" required>
        <input id="login" name="login" type="submit" value="Login">
      </form>
      <p>Not a member? <button id="signupLink" onclick="showSignup()">SignUp..</button></p>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>