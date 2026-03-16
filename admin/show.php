<?php
include( 'conn.php' );
?>
<!doctype html>
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

</head>

<body>
<div class="card text-center">
  <div class="card-header">
    <div class="card-body">
      <h5 class="card-title"><h1>Appoiments</h1></h5>
    </div>
  </div>
</div>

</div>
<?php $row  = array('id' => '1'); ?>
<!--<?php $Srno = array('i' => '1++');;?>-->
<table class ="styled-table" width="100%" border="1" cellpadding="4">
  <tbody>
  <thead class="styled-table thead">
  <td>Sr.No</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Preffered Date</td>
    <td>Symptoms</td>
    <td>City</td>
    <td>Mob.no</td>
      </thead >
    <?php
    include( 'conn.php' );
    $query = mysqli_query( $conn, "select * from a_point" );
    $sn = 0;
    while ( $row = mysqli_fetch_array( $query ) ) {
      ?>
  <tr>
    <td><?php echo $row['Sr.no']; ?></td>
    <td><?php echo $row['Firstname']; ?></td>
    <td><?php echo $row['Lastname']; ?></td>
    <td><?php echo $row['PD']; ?></td>
    <td><?php echo $row['Symptoms']; ?></td>
    <td><?php echo $row['City']; ?></td>
    <td><?php echo $row['Mob']; ?></td>
  </tr>
  <?php
  }
  ?>
    </tbody>
  
</table>
</body>
</html>
