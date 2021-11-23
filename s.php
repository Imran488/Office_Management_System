<?php
include 'connection.php';
  if(isset($_POST['submit'])){
	  $uname=mysqli_real_escape_string($conn,$_POST['name']);
	  $pass =mysqli_real_escape_string($conn,$_POST['password']);
	  
	  $sql ="select * from all_registered_members  where Username = '".$uname."'  and Password ='".$pass."'";
	  $res = mysqli_query($conn, $sql);
	  $count = mysqli_num_rows($res);
	  if($count >0)
	  {
		  $_SESSION['staff_user'] = $uname;
		  header('location:staff.php');
	  }
	  else{
		  echo'user not found';
	  }
	  
	  
	  
  }
?>
<html>
<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
<style type="text/css">
body {
    position: fixed;
      left: 0; right: 0; 
    height: 100%;
}
body:before {
    content: "";
    position: absolute;
    background: url(cropped-1920-1080-873130.jpg);
    background-size: cover;
    z-index: -1; /* Keep the background behind the content */
    height: 100%; width: 100%; /* Using Glen Maddern's trick /via @mente */
    /* don't forget to use the prefixes you need */
    transform: scale(3);
    filter: blur(2px);
}
.tab1{
	



	
}

.tab1 td{
	
	padding:14px;
    background-color:black;
    font-family: Yantramanav, sans-serif;
	font-size:17px;
	font-weight:bold;
		
}
.button{
	position:relative;
	cursor:pointer;
	background-color:white;
    color:black;
    border:1px #888;
	font-family: 'Righteous', cursive;
	font-size:17px;
	height:40px;
	width:328px;
 
	
}
}
.button:focus {outline:0;}
.button:hover
{
background-color:#00FFBF;	
color:black;	
transition: all 0.3s;

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


input[type=text]
{  
    padding:2px;
    background-color:#311187;
    height:30px;
    color:white;
	border:none;
	width:300px;
	border-radius:3px;
}

input[type=text]:focus
{   

	color:white;
	background-color:black;
	outline:0;	
}


input[type=password]
{  
    padding:2px;
    background-color:#311187;
    height:30px;
    color:white;
	border:none;
	width:300px;
	border-radius:3px;
}

input[type=password]:focus
{   
     color:white;
	background-color:black;
	outline:0;	
}
.header {
        
         left: 0;
         bottom: 0;
         width: 100%;
         background: #1abc9c;
         color: white;
         text-align: center;
         padding-bottom: 49px;
            }
            .footer {
        
         left: 0;
         bottom: 0;
         width: 100%;
         background: #1abc9c;
         color: white;
         text-align: center;
         margin-top: 100px
    }

</style>
<body>
	<div class="header">
      <h1>Jibon Bima Corporation</h1>
    </div>
<center>
  <form action="" method="POST">
 <table class="tab1">

   <tr>
     <td  style="text-align:center;height:60px;background-color:white;color:black;font-size:20px;font-family: 'Righteous', cursive;padding:0px">Staff Login</td>
    </tr>


   <tr>
      <td style="background-color:#FFC300;"> 
      Username<br>
      <input type="text"  name="name"  > 
      </td>
    </tr>

    <tr>
      <td style="background-color:#FFC300;">
       Password<br>
      <input type="password" name="password">  
	 </td>
    </tr>
  </table>
  <button type='submit' name='submit' class='button'>Login</button><br>
  </form>
</center>  
<div class="footer">
          <p><i>Developed By:Team Nexus</i></p>
</body>
</html>