<?php
   session_start();
   if (isset($_SESSION['login_user']))
   {
    header('location: ./');
   }
?>
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../images/zolokolo.png" id="icon"  />
    </div>

    <!-- Login Form -->
    <form method="POST" action="login.php">
      <input type="text" name="username" id="login" class="fadeIn second"  placeholder="login">
      <input type="password" name="password" id="password" class="fadeIn third" placeholder="password">
      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="changemdp.php">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>
<?php
   
   $db = mysqli_connect("localhost","root","","portfolio");
?>
<?php
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT user_id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: ../panel/index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>