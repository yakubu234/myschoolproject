<?php 
include 'db.php';
if (isset($_POST['submit'])) {
	$fname = $_POST['first'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$email =$_POST['email'];
	$phone = $_POST['phone'];
	$info = $_POST['mess'];
	$state = $_POST['state'];
	$home = $_POST['home'];
	$pat = $_POST['pnum'];
			$ins = "UPDATE signup set first_name = '$fname', email = '$email',phone = '$phone', address = '$address', state = '$state', home = '$home' WHERE patnum = '$pat' AND last_name = '$lname'";
			$query = $conn->query($ins);
				if ($query) {

 	echo "<script>
 	alert('Updated successfully')
 	</script>";
 	?>
 	<meta http-equiv="refresh"  content="1;url=addrecord.php" >
 	<?php
 }else{
 	echo "<script>
 	alert('unable to Update')
 	</script>";
 }
}

// delete query ///
if (isset($_POST['delete'])) {
	echo "<script>
alert('Are you sure you want to delete User')
	</script>";
	$fname = $_POST['first'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$email =$_POST['email'];
	$phone = $_POST['phone'];
	$info = $_POST['mess'];
	$pnum = $_POST['pnum'];
	$del = "DELETE FROM signup Where email = '$email' and patnum = '$pnum'";
	$query = $conn->query($del);
	if ($query) {
		echo "<script>
		alert)('User Deleted Successfully')
		</script>";
	}else{
		echo "<script>
		alert)('Unable to delete user please try again')
		</script>";
	}
}
// echo $conn->error;
?>