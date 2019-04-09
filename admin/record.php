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
	$pnum = $_POST['pnum'];
	$doctor_name = $_POST['doctor_name'];
	$doctor_id = $_POST['doctor_id'];
	$sel = "SELECT * FROM rec ";
	$query = $conn->query($sel);
	if ($query->num_rows > 0) {
		while ($res = $query-> fetch_assoc()) {
			$rec = $res[num];
			$rec = $rec + 1;
			$reciept = "SH".$rec."D"; 
			$ins = "INSERT INTO records VALUES (null,'$doctor_name','$doctor_id','$fname','$lname','$address','$dob','$email','$phone','$info','$pnum','$reciept',null)";
			$query = $conn->query($ins);
			if ($query) {
				$up = "UPDATE rec set num = '$rec'";
				$success = $conn->query($up);
				if ($success) {

					echo "<script>
					alert('inserted successfully')
					</script>";
					?>
					<meta http-equiv="refresh"  content="1;url=addrecord.php" > 
					<?php
				}else{
					echo "<script>
					alert('unable to insert')
					</script>";

					?>
					<meta http-equiv="refresh"  content="1;url=addrecord.php" > 
					<?php
				}
			}
		}
	}
}
// delete action 
// if (isset($_POST['delete'])) {
// 	echo "<script>
// alert('Are you sure you want to delete User')
// 	</script>";
// 	$fname = $_POST['first'];
// 	$lname = $_POST['lname'];
// 	$address = $_POST['address'];
// 	$dob = $_POST['dob'];
// 	$email =$_POST['email'];
// 	$phone = $_POST['phone'];
// 	$info = $_POST['mess'];
// 	$pnum = $_POST['pnum'];
// 	$del = "DELETE FROM signup Where email = '$email' and patnum = '$pnum'";
// 	$query = $conn->query($del);
// 	if ($query) {
// 		echo "<script>
// 		alert)('User Deleted Successfully')
// 		</script>";
// 	}else{
// 		echo "<script>
// 		alert)('Unable to delete user please try again')
// 		</script>";
// 	}
// }
// echo $conn->error;
?>