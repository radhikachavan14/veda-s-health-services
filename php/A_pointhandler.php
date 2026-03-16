<?php
$servername="localhost";
$username="root";
$passward="";
$dbname="appointment";
$con =new  mysqli($servername,$username,$passward,$dbname);
if(!$con){
  die( mysqli_error($con));
}
//echo 'connection successful';
?>




<!--
$servername="localhost";
$username="root";
$passward="";
$dbname="Appointment";
$con =new  mysqli($servername,$username,$passward,$dbname);



if(isset($Firstname)||isset($Lastname)||isset($Preferred_Appointment_Date)||isset($Symptoms)||isset($add)||isset($mob))
{
$Firstname =$_POST["Firstname"];
$Lastname =$_POST["Lastname"];
$Preferred_Appointment_Date =$_POST["Preferred_Appointment_Date"];
$Symptoms =$_POST["Symptoms"];
$add =$_POST["add"];
$Mob =$_POST["add"];
	}	
$con->prepare("inser into Appointment(Firstname,Lastname,Preferred Appointment Date,Symptoms,Address,MobNo)
		values(?,?,?,?,?,?)");
	-->
