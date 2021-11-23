<?php include'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<title>PHP CRUD</title>

	<style type="text/css">
		.manageMember {
			width: 50%;
			margin: auto;
		}

		table {
			width: 100%;
			margin-top: 20px;
			
			
			
		}

body:before {
    content: "";
    position: fixed;
    background: url(cropped-1920-1080-873130.jpg);
    background-size: cover;
    z-index: -1;
    height: 100%; width: 100%; 
    transform: scale(3);
    filter: blur(2px);
}

		
button{
			
			font-family: 'Titillium Web', sans-serif;
            font-weight:bold;
			border:none;
			font-size:12px;
			  background-color:#ffff66;
			
		}
		
button:hover{
			
		cursor:pointer;	
		background-color:#ff0066;
		
		}
		


.buttonc{
	text-decoration:none;
	background-color:#ffff99; 
    color: black;
	font-family: 'Marcellus SC', serif;
    border-radius:3px;
	font-size:20px;
    font-weight:bold;
	outline:0;

	
}


.buttonc:hover{
	background-color:#00ff99;
	box-shadow: 3px 3px 3px #1f004d;
	color:black;
}


.buttonedit{
	
           font-family: 'Titillium Web', sans-serif;
            font-weight:bold;
			border:none;
		    background-color:#ffff66;
			font-size:12px;
	
}

.buttonedit:hover{
	
		background-color:#00ff99;
		color:white;
}



th{
	border-color: #262626 #262626;
	border-style: solid ;
	border-top:none;
	border-left:none;
	font-family: 'Lato', sans-serif;
    padding:10px;
	background-color:black;
	color:white;
	font-size:17px;
}

td{
	font-family: 'Raleway', sans-serif;
    background-color:black;
	border-color: #262626 #262626;
	border-style: solid ;
	border-top:none;
    color:#ff0066;
	border-left:none;
	font-size:14px;
	padding:5px;
}
table{
	border:none;
}
.head{
	background-color:#00ff99; 
	width:100px;
	
	padding:5px;
	font-weight:bold;
}

a{
	
	
    color:#74DF00;
    border:1px #888;
	font-family: 'Patrick Hand SC', cursive;
    font-weight:bold;
	font-size:18px;
	text-decoration:none;
}
a:hover{
	
	text-decoration:underline;
	
}
a:link{
	
	color:#74DF00;
}

a:visited{
	
	color:#74DF00;
}


	</style>

</head>
<body>

<div class="manageMember">

  
	<center><h1 class='buttonc' title='Create New Contact'>Client Info</h1></center>
	
	
	</table>
	<table border="1" cellspacing="0" cellpadding="0"  bgcolor='Red'>
		<thead>
			<tr>
				<th>Name</th>
				<th>Birth Date</th>
				<th>Age</th>
				<th>NID</th>
				<th>Bima Type</th>
				<th>Date of Bima</th>
				<th>Amount of Money</th>
				<th>Nominee Name</th>
				<th>DBO ID</th>
				<th>Agent ID</th>
				
			</tr>
		</thead>
		<tbody>
			<?php
			
		
			$sql = "SELECT * FROM client_info";
			$result = $conn->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
					
						<td style='text-align:center;'>".$row['Name']." </td>
						<td style='text-align:center;'>".$row['Birthdate']."</td>
						<td style='text-align:center;'>".$row['Age']."</td>
						<td style='text-align:center;'>0".$row['NID']."</td>
						<td style='text-align:center;'>".$row['Bima']." </td>
						<td style='text-align:center;'>".$row['DateofBima']."</td>
						<td style='text-align:center;'>".$row['AmountofMoney']."</td>
						<td style='text-align:center;'>0".$row['NomineeName']."</td>
						<td style='text-align:center;'>".$row['DBOID']."</td>
						<td style='text-align:center;'>0".$row['AgentID']."</td>
						
					</tr>";
				}
			} else {
				echo "<tr><td colspan='10'><center>No data avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>
	<center><a href="manager.php">Back to manager page</a></center>
</div>

</body>
</html>