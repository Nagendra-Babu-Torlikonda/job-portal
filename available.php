
<html lang="en">
	<head>
		<title>Find My Job - Jobs Avilable</title>
		<meta charset="UTF-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<link href="./css/main.css" rel="stylesheet">
		<link rel="stylesheet" 
				href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
				integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
				crossorigin="anonymous">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<style>
			.row2{
				padding: 10px 10px;
				margin: 10px 10px;
			}
			.row2 .product{
				margin-left: auto;
				margin-right: auto;
				text-align: center;
			}
			.row2 .product img{
				height:max-content;
				width: 90%;
			}
			.row2 .product a button{
				margin-bottom: 10px;
				margin-left: 10px;
				margin-right: 10px;
				align-self: center;
				justify-self: center;
			}
			.row1 .product a button{
				margin-right: 50px;
			}
			.row2 .product a{
				vertical-align: baseline;
			}
			h1{
				text-align: center;
			}
			hr{
        		border: 0;
        		height: 3px;
        		background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(9, 84, 132), rgba(0, 0, 0, 0))
			}
            table{
                width:100%;
            }
		</style>
	</head>
	<body>
		<?php include "header.php"?>
	<div class = "body-content">
		<div class = "cont-head">
			<h1>Recruiting Now<h1>
			<hr>
		</div>
        <div class = "container">
            <div class = "post">
                <a href = "post.php"><button>Post Job</button></a>
                <br>
            </div>
        </div>
		<div class="container">
        <table class="styled-table">
    <thead>
        <tr>
            <th>S.No</th>
            <th>Company</th>
            <th>Position</th>
            <th>CTC</th>
            <th>Apply Now</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $server = 'localhost';
        $user = 'root';
        $pass = "";
        $db = 'job';
        
        $conn = mysqli_connect('localhost:3336','root','','job');
        $sql = "SELECT `S.No`, `Company`, `Position`, `CTC` FROM `available`";
        $result = mysqli_query($conn,$sql);
        $i=0;
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                echo "
                <tr>
                <td>".++$i."</td>
                <td>".$row['Company']."</td>
                <td>".$row['Position']."</td>
                <td>".$row['CTC']."</td>
                <td><a href = '#'>apply now</a></td>
                </tr>";
            }
        }
        else{
            echo "";
        }?>
    </tbody>
</table>

			
		</div>
	<?php include "footer.php"?>		
	</body>
</html>

    
</body>
</html>