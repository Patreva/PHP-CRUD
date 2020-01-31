<?php
require_once("Include/DB.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert data into a form</title>
	<link rel="stylesheet" href="Include/style.css">
</head>
<body>
		<h2 class="success"><?php echo @$_GET['id'];?></h2>
		<div>
			<fieldset>
				<form action="Viewdata.php" method="GET">
					<input type="text" name="Search" value="" placeholder="Search by name or ssn">
					<input type="submit" name="SearchButton" value="Search Record">
				</form>
			</fieldset>
		</div>
		<?php
if (isset($_GET['SearchButton'])) {
	global $ConnectingDB;
    $Search=$_GET["Search"];
	$sql="SELECT * FROM emp_record WHERE ename=:searCH OR ssn=:searCH";
	$stmt=$ConnectingDB->prepare($sql);
	$stmt->bindvalue(':searCH',$Search);
	$stmt->execute();
    while($DataRows=$stmt->fetch()){
    $ID=$DataRows["id"];
	$Ename=$DataRows["ename"];
	$SSN=$DataRows["ssn"];
	$Department=$DataRows["dept"];
	$Salary=$DataRows["salary"];
	$HomeAddress=$DataRows["homeaddress"];
?>
<div>
	<table width="1000" border="5" align="center">
		<caption> Search Result </caption>
				<tr>
			<th>ID</th>
			<th>Name</th>
			<th>SSN</th>
			<th>Department</th>
			<th>Salary</th>
			<th>HomeAddress</th>
			<th>Search Again</th>
		</tr>
		 <tr>
 	<td> <?php  echo $ID; ?> </td>
 	<td> <?php  echo $Ename; ?> </td>
 	<td> <?php  echo $SSN; ?> </td>
 	<td> <?php  echo $Department; ?> </td>
 	<td> <?php  echo $Salary; ?> </td>
 	<td> <?php  echo $HomeAddress; ?> </td>
 	<td> <a href="Viewdata.php">Search Again</a> </td>
 </tr>
	</table>
</div>
    <?php } }?>


		
	<table width="1000" border="5" align="center">
		<caption>View From Database</caption>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>SSN</th>
			<th>Department</th>
			<th>Salary</th>
			<th>HomeAddress</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>

<?php
global $ConnectingDB;
$sql="SELECT * FROM emp_record";
$stmt=$ConnectingDB->query($sql);
while ($DataRows=$stmt->fetch()) {
	$ID=$DataRows["id"];
	$Ename=$DataRows["ename"];
	$SSN=$DataRows["ssn"];
	$Department=$DataRows["dept"];
	$Salary=$DataRows["salary"];
	$HomeAddress=$DataRows["homeaddress"];
 ?>

 <tr>
 	<td><?php  echo $ID;?></td>
 	<td><?php  echo $Ename;?></td>
 	<td><?php  echo $SSN;?></td>
 	<td><?php  echo $Department;?></td>
 	<td><?php  echo $Salary;?></td>
 	<td><?php  echo $HomeAddress;?></td>
 	<td><a href="Update.php?id=<?php  echo $ID;?>">Update</a></td>
 	<td><a href="Delete.php?id=<?php  echo $ID;?>">Delete</a></td>
 </tr>
<?php } ?>
 	</table>

</body>
</html>