<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $err = "";
        include '_dbconnect.php';

        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"]; 
        $exists = false;
        if(($password == $cpassword) && $exists == false) {
            $sql = "INSERT INTO `users` (`username`,`password`,`dt`) VALUES ('$username' , '$password' , current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if($result) {
                echo("inserted");
                // session_start();
                // $_SESSION['loggedin'] = true;
                // $_SESSION['username'] = $username;
                header("location: login.php");
                
            }
        }
        else if($password != $cpassword){
            echo("password are not same");
        }
        else {
            echo("username already exits");
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="text-center">Signup to Spotify <img src="myspotify.png" class="img-fluid" alt="Sample image"></h1>
        
        <form action="signup.php" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" aria-describedby="username" id="username" name="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <small id="cpassword" class="form-text text-muted">*please type the same password</small>
              </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
          </form>
    </div>

  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>