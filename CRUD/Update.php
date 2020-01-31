<?php
require_once("Include/DB.php");
$SearchQueryParameter=$_GET["id"];
if (isset($_POST["Submit"])) {
		$Ename=$_POST["Ename"];
		$SSN=$_POST["SSN"];
		$Dept=$_POST["Dept"];
		$Salary=$_POST["Salary"];
		$HomeAddress=$_POST["HomeAddress"];
		global $ConnectingDB;
		$sql="UPDATE emp_record SET ename='$Ename', ssn='$SSN', dept='$Dept', salary='$Salary', homeaddress='$HomeAddress' WHERE id='$SearchQueryParameter'";
		$stmt=$ConnectingDB->query($sql);
		$Execute=$stmt->execute();
		if ($Execute) {
			echo '<script>window.open("Viewdata.php?id=Record Updated succesfully", "_self")</script>';
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update data into a form</title>
	<link rel="stylesheet" href="Include/style.css">
</head>
<body> 
	<?php
global $ConnectingDB;
$sql="SELECT * FROM emp_record WHERE id='$SearchQueryParameter'";
$stmt=$ConnectingDB->query($sql);
while ($DataRows=$stmt->fetch()) {
	$ID=$DataRows["id"];
	$Ename=$DataRows["ename"];
	$SSN=$DataRows["ssn"];
	$Department=$DataRows["dept"];
	$Salary=$DataRows["salary"];
	$HomeAddress=$DataRows["homeaddress"];
}
	?>
<div>

	<form class="" action="Update.php?id=<?php echo $SearchQueryParameter; ?>" method="POST">
		<fieldset>
			<span class="FieldInfo">Employee Name:</span>
			<br>
			<input type="text" name="Ename" value="<?php  echo $Ename;?>">
			<br>
            <span class="FieldInfo">Social security number:</span>
			<br>
			<input type="text" name="SSN" value="<?php  echo $SSN;?>">
			<br>
			<span class="FieldInfo">Department:</span>
			<br>
			<input type="text" name="Dept" value="<?php  echo $Department;?>">
			<br>
		    <span class="FieldInfo">Salary:</span>
			<br>
			<input type="text" name="Salary" value="<?php  echo $Salary;?>">
			<br>
			<span class="FieldInfo">Home Address:</span>
			<br>
			<textarea name="HomeAddress" rows="8" cols="80"><?php  echo $HomeAddress;?></textarea>
			<br>
			<input type="submit" name="Submit" value="Submit Your record">
		</fieldset>
	</form>
</div>
</body>
</html>