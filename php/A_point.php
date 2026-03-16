<?php
include('A_pointhandler.php');
?>
<?php
if(isset($_POST['submit']))
{
$firstname =$_POST["Firstname"];
$lastname =$_POST["Lastname"];
$Preferred_Appointment_Date =$_POST["Ad"];
$Symptoms =$_POST["Symptoms"];
$add =$_POST["Address"];
$Mob =$_POST["mob"];

	$query = mysqli_query($con, "inser into a_point(Firstname,Lastname,Ad,Symptoms,Address,mob)
		values('$firstname','$lastname','$Preferred_Appointment_Date','$Symptoms',$add',$Mob')");
		if($query) { 
			echo "<script>alert(data inserted successfully)</script>";
		} else 
			echo "<script>alert(there is an error)</script>";
	}
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="formstyle.css">
<title>Appointment</title>
</head>
<div class="container">
<div class="box form-box">
<form action="A_pointhandler.php" method="post">
  <div class="field input">
    <label for="Firstname">Firstname:</label>
    <input type="text" name="Firstname" id="Firstname">
	  <label for="Lastname">Lastname:</label>
    <input type="text" name="Lastname" id="Lastname">
  </div>
  <div class="field input">
    <label for="Ad">Preferred Appointment Date</label>
    <input type="date" id="Ad" name="Ad">
  </div>
	  <div class="field input">
    <label for="Symptoms">Symptoms</label>
    <input type="text" name="Symptoms" id="Symptoms" >
  </div>
  <div class="field input">
    <label for="Address">Address</label>
    <input type="text" name="Address" id="Address" >
  </div>
  <div class="field input">
    <label for="Mob">Mob.No</label>
<input type="text" name="Mob" id="Mob" >
  </div>
  <div class="field">
    <input type="submit" class="btn" name="submit" value="submit" >
  </div>
  </div>
  </div>
</form>
</div>
<body>
</body>
</html>