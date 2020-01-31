<?php
require_once("Include/DB.php");
if (isset($_POST["Submit"])) {
	if (!empty($_POST["Ename"])&&!empty($_POST["SSN"])) {
		$Ename=$_POST["Ename"];
		$SSN=$_POST["SSN"];
		$Dept=$_POST["Dept"];
		$Salary=$_POST["Salary"];
		$HomeAddress=$_POST["HomeAddress"];
		global $ConnectingDB;
		$sql="INSERT INTO emp_record(ename,ssn,dept,salary,homeaddress)
		VALUES(:ENamE,:ssN,:DEpt,:saLARY,:HOMEADdresS)";
		$stmt=$ConnectingDB->prepare($sql);
		$stmt->bindvalue(':ENamE',$Ename);
		$stmt->bindvalue(':ssN',$SSN);
		$stmt->bindvalue(':DEpt',$Dept);
		$stmt->bindvalue(':saLARY',$Salary);
		$stmt->bindvalue(':HOMEADdresS',$HomeAddress);
		$Execute=$stmt->execute();
		if ($Execute) {
			echo '<span class="success">Record is added succesfully</span>';
		}
	}else{
		echo '<span class="FieldInfoHeading">Please atleast add name and social security number</span>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert data into a form</title>
	<link rel="stylesheet" href="Include/style.css">
</head>
<body>
<?php ?>
<div>
	<form class="" action="Insertdata.php" method="POST">
		<fieldset>
			<span class="FieldInfo">Employee Name:</span>
			<br>
			<input type="text" name="Ename" value="">
			<br>
            <span class="FieldInfo">Social security number:</span>
			<br>
			<input type="text" name="SSN" value="">
			<br>
			<span class="FieldInfo">Department:</span>
			<br>
			<input type="text" name="Dept" value="">
			<br>
		    <span class="FieldInfo">Salary:</span>
			<br>
			<input type="text" name="Salary" value="">
			<br>
			<span class="FieldInfo">Home Address:</span>
			<br>
			<textarea name="HomeAddress" rows="8" cols="80"></textarea>
			<br>
			<input type="submit" name="Submit" value="Submit Your record">
		</fieldset>
	</form>
</div>
</body>
</html>