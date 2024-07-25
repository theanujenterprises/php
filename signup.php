
<?php
 $showaleart=false;
 $showerror=false;
 
 if ($_SERVER["REQUEST_METHOD"]=="POST") {
  include "partials/_dbconnect.php";
 $username=$_POST['username'];
 $password=$_POST['password'];
 $cpassword=$_POST['cpassword'];
 if($password==$cpassword){
  $sql="INSERT INTO `userdata` ( `username`, `password`, `dt`) 
  VALUES ('$username', '$password', CURRENT_TIMESTAMP)";
  $result=mysqli_query($conn,$sql);
  if ($result) {
 $showaleart=true;
  }

 }
 else {
  $showerror="password do not match";
     
   }


}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>signup</title>
  </head>
  <body>
    <?php 
    require "partials/_nav.php";
    ?>
    <?php
    if ($showaleart) {
    echo '<div class="alert alert-success" role="alert">
  Your account created successfully!
</div>';
    }
    if ($showerror) {
        echo '<div class="alert alert-danger" role="alert">
'.$showerror.'
</div>';
    }
    ?>

  
   <div class="container">
    <h1>
        signup 
    </h1>
    <form action="/loginsystem/signup.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure password should be same.</div>

  </div>
  
  <button type="submit" class="btn btn-primary">Signup</button>
</form>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

