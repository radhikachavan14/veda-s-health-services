<?php
include('conn.php');
if(isset($_POST['submit']))
{
$Firstname =$_POST["Firstname"];
$Lastname =$_POST["Lastname"];
$Preferred_Appointment_Date =$_POST["PD"];
$Symptoms =$_POST["Symptoms"];
$City =$_POST["City"];
$Mob=$_POST["Mob"];

	
$sql = "INSERT INTO a_point (Firstname, Lastname, PD, Symptoms, City, Mob) VALUES ('$Firstname', '$Lastname', '$Preferred_Appointment_Date', '$Symptoms', '$City', '$Mob')";
if (mysqli_query($conn, $sql)) {
     echo "";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

<html>
<head>
<meta charset="utf-8">
		<title>Veda's Health Service | Emergency Blood Supply </title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="filogo.png" rel="icon">
<link href="filogo.png" rel="apple-touch-icon">
<link href="table.css" rel="stylesheet">
<link href="bootstrap.min.css" rel="stylesheet">	
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="fstyle.css">

</head>
<div class="container">
<div class="box form-box">
<form method="post">
  <div class="field input">
    <label for="Firstname">Firstname:</label>
    <input type="text" name="Firstname" id="Firstname">
	  <label for="Lastname">Lastname:</label>
    <input type="text" name="Lastname" id="Lastname">
  </div>
 <div class="field input">
    <label for="PD">Preferred Appointment Date</label>
    <input type="date" id="PD" name="PD">
  </div>
	  <div class="field input">
    <label for="Symptoms">Symptoms</label>
    <input type="text" name="Symptoms" id="Symptoms" >
  </div>
  <div class="field input">
    <label for="City">City</label>
    <input type="text" name="City" id="City" >
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
<!--------->
<a href="http://localhost/cpe/blood2/admin/show.php" class="btn-get-started">Show List</a>
</div>
<body>
</body>
</html>