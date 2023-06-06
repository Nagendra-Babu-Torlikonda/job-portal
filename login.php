<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" 
				href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
				integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
				crossorigin="anonymous">
    <title>Find My Job-Login</title>
    <style>
      .body-content{
        margin-top:60px;
      }
    </style>
</head>
<body>
      <?php include "header2.php"?>

<div class = "body-content">
<div class = "container">
  <div class = "login-form">
            <form action="connect.php" method="post">
                <h1>Login</h1>
                <p>
                  Already have an account? Login in or
                  <a href="index-signup.php">Sign Up</a>
                </p>
      
                <label for="email">Email</label>
                <input type="email" placeholder="Enter Email" name="email" required />
      
                <label for="psw">Password</label>
                <input
                  type="password"
                  placeholder="Enter Password"
                  name="password"
                  required
                />
                
                <label>
                    <input
                      type="checkbox"
                      checked="checked"
                      name="remember"
                      style="margin-bottom: 15px"
                    />
                    Remember me
                  </label>
        
                  <p>
                    By creating an account you agree to our
                    <a href="#">Terms & Privacy</a>.
                  </p>
        
                  <div class="buttons">
                    <button type="reset" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn" name = "login">Login</button>
                  </div>
                </form>
            </div>
</div>
</div>

    
</body>
</html>