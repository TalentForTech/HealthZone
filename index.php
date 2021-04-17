<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="login">

  <form method="POST" action="dashboard.php" >
    <div class="segment">
    <h1>Sign up</h1>
  </div>
  
  <label>
    <input type="email" placeholder="Email Address"  name="email" id="email"/>
  </label>
  <label>
    <input type="password" placeholder="Password" name="password" id="password"/>
  </label>
  <button class="red" type="submit" name="login1" id="submit"><i class="icon ion-md-lock" name="login1" id="submit"></i> Log in</button>
  
  <div class="segment">
    <button class="unit" type="button"><i class="icon ion-md-arrow-back"></i></button>
    <button class="unit" type="button"><i class="icon ion-md-bookmark"></i></button>
    <button class="unit" type="button"><i class="icon ion-md-settings"></i></button>
  </div>
</form>
 </div>
<?php  
  include_once 'dbh.php';

  if(isset($_POST['login1'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn,$query);

    $check = mysqli_num_rows($result);

    $row = mysqli_fetch_assoc($result);

    if($check>0){
      $_SESSION['username'] = $row['username'];
      header('location:index.php');
    }
    else{
      echo '<script type="text/javascript">alert("Incorrect Details")</script>';
    }
  }

?>
</div>
</body>
</html>




