<?php
include('conn.php');
if(isset($_POST['submit']))
{
$neg_O =$_POST['neg_O'];
$pov_O =$_POST['pov_O'];
$neg_A = $_POST['neg_A'];
$pov_A = $_POST['pov_A'];
$neg_B = $_POST['neg_B'];
$pov_B = $_POST['pov_B'];
$neg_AB= $_POST['neg_AB']; 
$pov_AB= $_POST['pov_AB'];
	
$sql = "INSERT INTO b1t1 (neg_O, pov_O, neg_A, pov_A, neg_B, pov_B, neg_AB, pov_AB,) 
VALUES ('$neg_O','$pov_O','$neg_A','$pov_A','$neg_B','$pov_B','$neg_AB','$pov_AB')";
if (mysqli_query($conn, $sql)) {
     echo "DONE!!!";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
<html>
<head>
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
<link rel="stylesheet" href="formstyle.css">

<title>B1</title>
</head>
<div class="container">
<div class="box form-box">
<form method="post">
  <div class="field input">
    <label for="neg_O">-O:</label>
    <input type="text" name="neg_O" id="neg_O">
	  <label for="pov_O">+O:</label>
    <input type="text" name="pov_O" id="pov_O">
  </div>
	 <div class="field input">
    <label for="neg_A">-A:</label>
    <input type="text" name="neg_A" id="neg_A">
	  <label for="pov_A">+A:</label>
    <input type="text" name="pov_A" id="pov_A">
  </div>
	 <div class="field input">
    <label for="neg_B">-B:</label>
    <input type="text" name="neg_B" id="neg_B">
	  <label for="pov_B">+b:</label>
    <input type="text" name="pov_B" id="pov_B">
  </div>
	 <div class="field input">
    <label for="neg_AB">-AB:</label>
    <input type="text" name="neg_AB" id="neg_AB">
	  <label for="pov_AB">+AB:</label>
    <input type="text" name="pov_AB" id="pov_AB">
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