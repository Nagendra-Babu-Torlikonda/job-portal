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
    <title>Find My Job - Sign Up</title>
</head>
<body>
  <?php include "header2.php"?>
  <div class = "body-content">
    <div class = "container">
<div class = "login-form">
                <form action = "connect.php" method = "post">
                <h1><u>Sign Up</u></h1>
                <p>
                  Already have an account? <a href = "login.php">Login</a> in or Sign Up
                </p>
      
                <label for="firstname">First Name</label>
                <input type="text" placeholder="First Name" name="firstname" required />

                <label for="lastname">Last Name</label>
                <input type="text" placeholder="Lastst Name" name="lastname"  />

                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" required />

                <label for="gender">Gender</label>
                <select name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">other</option>
                </select>

                <label for="email">Email</label>
                <input type="text" placeholder="Email" name="email" required />
      
                <label for="psw">Password</label>
                <input
                  type="password"
                  placeholder="Enter Password"
                  name="password"
                  required
                />
      
                <label for="psw-repeat">Confirm Password</label>
                <input
                  type="password"
                  placeholder="Confirm Password"
                  name="password-confirm"
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
                    <button type="submit" class="signupbtn" name="signup">Register</button>
                  </div>
                </form>
        
            </div> 
</div>
</div>
    
</body>
</html>