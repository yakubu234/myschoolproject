
<?php
include('db.php');
if(isset($_POST['login']))
{
	$e_mail = $_POST['email'];
	$password = $_POST['password'];
	$sel = "SELECT * FROM signup WHERE email ='$e_mail'";
	$result = $conn->query($sel);
	while($row = $result->fetch_assoc())
	{
		$dbpass=$row['password'];
		$patnum = $row['patnum'];
		$type = $row['type'];
	}
	$iscorrect = password_verify($password, $dbpass);
	if($iscorrect)
	{
		if($result->num_rows ===1)
		{
			echo "<script>
			alert('login successful')
			</script>";
			switch ($type) {
				case "patient":
				session_start();
				$_SESSION['logedin'] = true;
				$_SESSION['email']= $e_mail;
				$_SESSION['patnum'] = $patnum;			
				?>
				<meta http-equiv="refresh" content="0;url=user/userpage.php">
				<?php
				break;
				case "admin":
				session_start();
				$_SESSION['logedin'] = true;
				$_SESSION['email']= $e_mail;
				$_SESSION['patnum'] = $patnum;			
				?>
				<meta http-equiv="refresh" content="0;url=admin/index.php">
				<?php
				break;
				case "doctor":
				session_start();
				$_SESSION['logedin'] = true;
				$_SESSION['email']= $e_mail;
				$_SESSION['patnum'] = $patnum;			
				?>
				<meta http-equiv="refresh" content="0;url=secured.php">
				<?php
				break;
			}
			
		}else
		{
			echo "somethign went wrong please try again later";
			exit;
		}
	}else
	{
		echo "please dear &nbsp <b style = 'color:green'>".$e_mail."</b>&nbsp <p style = 'color:red'> The password you entered is not valid</p>"."<br/>".$var;
		
	}
}
?>
<a href ="index.php" >return home</a>