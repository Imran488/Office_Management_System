<?php
include 'connection.php';

if(isset($_POST['submit'])){
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $bday =mysqli_real_escape_string($conn,$_POST['date']);
  $age =mysqli_real_escape_string($conn,$_POST['age']);
  $nid =mysqli_real_escape_string($conn,$_POST['nid']);
  $type =mysqli_real_escape_string($conn,$_POST['type']);
  $bimadate =mysqli_real_escape_string($conn,$_POST['dat']);
  $money=mysqli_real_escape_string($conn,$_POST['mon']);
  $nom=mysqli_real_escape_string($conn,$_POST['nom']);
  $id=mysqli_real_escape_string($conn,$_POST['dbo']);
  $agent =mysqli_real_escape_string($conn,$_POST['agent']);
  
  

$sql = "INSERT INTO client_info (Name,Birthdate,Age,NID,Bima,DateofBima,AmountofMoney,NomineeName,DBOID,AgentID )
VALUES ('$name','$bday','$age','$nid','$type','$bimadate','$money','$nom','$id','$agent')";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

}

?>




<!DOCTYPE html>
<html>


<style>

button {
  width: 30%;
  background-color: Green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
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
     body{
        text-align:center;
        background-color: Offwhite;
        background-image:;
        background-repeat: no-repeat;
        background-size: 1370px 700px;
    
      }
     
  

</style>

<body>
  <div class="header">
      <h1>Jibon Bima Corporation</h1>
    </div>
<form action="" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h3 style ="text-align: center">Please Fillup this Form!</h3>
    <h1 style ="text-align: center"> <ul><u>Jibon Bima Offer Letter</u></ul></h1>
    <div>
      <div>
<table>
  
  <label>DBO ID:</label>
<input type ="text" name="dbo"><br><br>

<label>Agent ID:</label>
<input type ="text" name="agent"><br><br>
<label>Name:</label>
<input type="text" name="name"><br><br>

<label>Birthdate:</label>
<input type ="date" name="date"><br><br>

<label>Age:</label>
<input type ="text" name="age"><br><br>

<label>NID Number:</label>
<input type="text" name="nid"><br><br>

<label>Bima Type:</label>
<input type="text" name="type"><br><br>

<label>Date of Bima:</label>
<input type="date" name="dat"><br><br>

<label>Amount of Money:</label>
<input type="text" name="mon"><br><br>

<label>Nominee Name:</label>
<input type="text" name="nom"><br><br>



<button type='submit' name='submit' class='button'>SUBMIT</button><br>
<a href="staff.php">Back to the page</a>
</div>
</div>
</form>
</center>
<div class="footer">
          <p><i>Developed By:Team Nexus</i></p>
      </div>  
</body>
</html>
