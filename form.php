<?php

$errname = $passerr = $erremail = $erradd = $errgender =$error = $gender = "";


$con = mysqli_connect("localhost","root","","winter");

if(!$con){
	
	echo "  not connected to  server";
	
	
}
if (isset($_POST['submit'])) 

{
  
	
	//name validation
	$name = valid($_POST["name"]);
	if(empty($name))
	{
		$errname="Username can't be empty";
	}
	
	  elseif(strlen($name)>20){
		
		$errname ="Username is too long";
	}
	
	  elseif(strlen($name)<5){
		
		$errname ="Username is too short";
	}
	
    else
	{
	   $name = valid($_POST["name"]);
	    if (!preg_match("/^[a-zA-Z- ]*$/",$name))
	   { 
        $errname="Username should contain only letters [A-z,a-z]  and space";
	   }
	
	  
	   else
	   {
		   
     $query = mysqli_query($con,"SELECT * FROM all_registered_members WHERE Username = '$name'");
     $num_rows = mysqli_num_rows($query);
     if(($num_rows)>=1){
	
	 $errname ="The name <span style='color:white;'>' ".$name." '</span> already exists in the list.";
	
       }
		  $name = valid($_POST["name"]); 
	   }
	}
   

   //password validation
	
	$password = valid($_POST['password']);
	
	
	     if(empty($password))
	    {
		  $passerr="Please enter password";
	      }
	    else
	   {
		 if(strlen($password)<='7')
	         {
	          $passerr = "Password must contain at least 8 characters";
			 } 
	     elseif(!preg_match("/[0-9]/",$password)) {
         $passerr = "Your password must contain at least 1 number!";
            }
         elseif(!preg_match("/[A-Z]/",$password)) {
          $passerr = "Your password must contain at least 1 capital letter!";
          }
           elseif(!preg_match("/[a-z]/",$password)) {
           $passerr= "Your password must contain at least 1 lowercase letter!";
          }
	 
		   
		   
	   else{
		   
		   $password = $password; 
		   
	   }
	   }

	


	//email validation
	$email = valid($_POST["email"]);
	
	if(empty($email))
	{
		$erremail="Email field can't be empty";
	}

   elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
   {
	   $erremail="Email is not valid";
   }
   
  else
  {
	    $query = mysqli_query($con,"SELECT * FROM all_registered_members WHERE email = '$email'");
      $num_rows = mysqli_num_rows($query);
     if(($num_rows)>=1){
	
	 $erremail ="The email <span style='color:white;'>' ".$email." '</span> already exists in the list.";
	
       }
		else{
	 $email = valid($_POST["email"]);
	   
		}
  }
	
	//address validation
	$address = valid($_POST["address"]);
	if(empty($address))
	{
		$erradd="You must  have  an  address";
	}

	
	else{
		
			$address = valid($_POST["address"]);
	}
	//gender validation
		
    if(empty($_POST["gender"]))
	{
		
		$errgender="Gender is required";
	}
	else
	{
		
		$gender= valid($_POST["gender"]);
	}	
	
if($errname != '' || $passerr != '' || $erremail != '' || $erradd != '' || $errgender != '' ){
	
	
}
else{
	
		$sql ="INSERT INTO all_registered_members (Username,Password,Email,Deg,Gender) VALUES('$name','$password','$email','$address','$gender')";
	if(!mysqli_query($con,$sql))	{
	
	echo "<span class='error'>Something went wrong</span>";
}
else
{
	 echo "<center><div style='position:relative;width:320px;box-shadow:0px 0px 7px  #00ff00;color: #00ff00;background-color:#262626;border-radius:3px;font-size:16px;font-family: Mukta, sans-serif;padding:4px;'>You have successfully registered.</div></center>";
     
  header('refresh:3; url=manager.php'); 
	
}
	
	
	
}
	
}
function valid($data)
{
	
	$data=trim($data);
	$data=htmlspecialchars($data);
	$data=stripslashes($data);
	return $data;
	
	
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


<head>

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
	
	padding:2px;
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
.button:focus {outline:0;}
.button:hover
{
background-color:#00FFBF;	
color:black;	
transition: all 0.3s;

}



.button2{
	

    
	
}
.button2:focus {outline:0;}
.button2:hover
{
	
	
   	cursor:pointer;

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


.errmsg{
	
	
	
	color:red;
	
	border-radius:3px;
	font-size:13px;
	font-family: Mukta, sans-serif;
	
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
</head>
<body>
	<div class="header">
      <h1>Jibon Bima Corporation</h1>
    </div>

<script>


</script>
<center>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" autocomplete="off">





<table class="tab1">

<tr>
<td  style="text-align:center;height:60px;background-color:white;color:black;font-size:20px;font-family: 'Righteous', cursive;padding:0px">NEW Employee</td>
</tr>


<tr>
<td style="background-color:#FFC300;"> 
Username<br><span class='errmsg'><?php echo $errname;?></span><br>
<input type="text"  name="name"  autocomplete="off"/> 

</td>
</tr>

<tr>
<td style="background-color:#FFC300;">

Password<br><span class='errmsg'><?php echo $passerr;?></span><br>

<input type="password" name="password"    autocomplete="on"/>  

</td>
</tr>




<tr>
<td style="background-color:#FFC300;">
Email<br><span class='errmsg'><?php echo $erremail;?></span><br>
<input type="text" name="email"   autocomplete="off"/>
</td>
</tr>


<tr>
<td style="background-color:#FFC300;">
Designation<br><span class='errmsg'><?php echo $erradd;?></span><br>
<input type="text" name="address"  autocomplete="off"/>

</td>
</tr>



<tr>
<td style="background-color:#FFC300;">
<input type="radio" name="gender" value="male"  autocomplete="off" <?php if ($gender != "Female")  "checked"; ?>/><span style="font-family: Yantramanav, sans-serif;">Male</span>
<input type="radio" name="gender" value="female" autocomplete="off"  <?php if ($gender == "Female") "checked"; ?>/><span style="font-family: Yantramanav, sans-serif;font-weight:bold;">Female</span>    
&nbsp;&nbsp;&nbsp;<span  class='errmsg'><?php echo $errgender;?></span>
</td>
</tr>
</table>

<button type='submit' name='submit' class='button'>ADD</button><br>
<a href="index.php">Back to Log in page</a>
</form>
</center>
<div class="footer">
          <p><i>Developed By:Team Nexus</i></p>

</body>

</html>

