
<html lang="en">
	<head>
		<title>Find My Job - Home </title>
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
			p{

			}
		</style>
	</head>
	<body>
		<?php include "header.php"?>
	<div class = "body-content">
		<div class = "cont-head">
			<h1>Welcome to Find My Job<h1>
			<hr>
		</div>
		<div class="container">
			<div class = "row">

			<h3>Welcome to online Job Portal. It provides facility to the Job Seeker to search for various jobs as per his qualification. 
			Here Job Seeker can registered himself on the web portal and create his profile along with his educational information.
			 Job Seeker can search various jobs and apply for the Job.</h3>
			 <br>
              <h3>This Portal is also designed for the various employer who required to recruit employees in their organization.
				 Employer can registered himself on the web portal and then he can upload information of various job vacancies in
				  their organization. Employeer can view the applications of Job Seeker and send call latter to the job seekers.</h3>
				  <br>
			</div>

				<div class = "row">
					<div class = "col">
						<div class = "go">
						<a href = "available.php" ><button>Click to see Jobs Available</button></a>
						</div>
					</div>
				</div>
			</div>	
		</div>
	<?php include "footer.php"?>		
	</body>
</html>

    
</body>
</html>