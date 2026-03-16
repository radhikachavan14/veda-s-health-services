<?php
	require_once('conn.php');
$query = "select * from a_point"
$result = mysqli_query($conn,$query);
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List</title>
</head>

<body>
	<h1>Appoiments</h1>
	<?php $row  = array('id' => '1'); ?>
	<!--<?php $Srno = array('i' => '1++');;?>-->
	<table  class="table-primary" width="100%" border="1" cellpadding="4">
  <tbody>
    <tr>
      <td>Sr.No</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Preffered Date</td>
      <td>Symptoms</td>
      <td>City</td>
      <td>Mob.no</td>
    </tr>
    	<?php
	  while($row=mysqli_fetch_assoc($result)){
						?>
	                       
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['Firstname']; ?> </td>
							<td><?php echo $row['Lastname']; ?> </td>
							<td><?php echo $row['PD']; ?> </td>
							<td><?php echo $row['Symptoms']; ?> </td>
							<td><?php echo $row['City']; ?> </td>
							<td><?php echo $row['Mob']; ?> </td>
							
							
						</tr>

						<?php
				} ?>
	  

</tbody>
</table>

	
</body>
</html>

