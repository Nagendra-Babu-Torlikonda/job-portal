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
    <title>Find My Job - Post a Job</title>
</head>
<body>
  <?php include "header2.php"?>
  <div class = "body-content">
    <div class = "container">
<div class = "login-form">
                <form action= "post.php" method = "post">
                <h1><u>Post a Job</u></h1>
      
                <label for="companyname">Company Name</label>
                <input type="text" placeholder="Company Name" name="company" required />

                <label for="position">Position</label>
                <input type="text" placeholder = "Position" name="position" required />

                <label for="qualification">Qualification</label>
                <select name="qualification" required>
                    <option value="mtech">M.Tech</option>
                    <option value="btech">B.Tech.</option>
                    <option value="inter">Inter</option>
                    <option value="ssc">SSC</option>
                    <option value="any">Any UG Course</option>
                </select>

                <label for="skills">Skills Required</label>
                <input type="text" placeholder="Skills" name="skills" required />

                <label for="languages">Programming Languages</label>
                <input type="text" placeholder="Languages" name="languages" required />
      
                <label for="description">Job Description</label>
                <textarea name = "description"></textarea>

                <label for="ctc">CTC</label>
                <input type="number" placeholder="CTC in LPA" name="ctc" required />
        
                  <p>
                    By posting a job you agree to our
                    <a href="#">Terms & Privacy</a>.
                  </p>
        
                  <div class="buttons">
                    <button type="reset" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn" name="post">post</button>
                  </div>
                </form>
                <?php 
                        $server = 'localhost';
                        $user = 'root';
                        $pass = "";
                        $db = 'job';
                        
                        $conn = mysqli_connect('localhost:3336','root','','job');
                        if ($conn->connect_error){
                            die("Connection Failed".$conn->connect_error);
                        }
                        else
                        {
                            session_start();
                            if (isset($_POST['post']))
                            {
                                $company = $_POST['company'];
                                $position = $_POST['position'];
                                $ctc = $_POST['ctc'];
                                $qualification = $_POST['qualification'];
                                $skills = $_POST['skills'];
                                $languages = $_POST['languages'];
                                $desc = $_POST['description'];

                            
                                $sql = "INSERT INTO `available`(Company, Position, CTC, Qualification, Skills, Languages,Description) 
                                                VALUES ('$company','$position','$ctc','$qualification','$skills','$languages','$desc')";
                                $result = mysqli_query($conn,$sql);
                                echo "<script>alert('Successfully Posted');</script>";
                                header("location:available.php");
                            }
                        }
                        ?>
        
            </div> 
</div>
</div>
    
</body>
</html>