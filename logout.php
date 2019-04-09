<?php
include 'db.php';
echo "<script>
alert('Timeout !')
</script>";
unset($_SESSION['logedin'], $_SESSION['email'], $_SESSION['patnum']);
$_SESSION['logedin'] = false;
session_destroy();
?>
<meta http-equiv="refresh"  content="0;url=index.php" >
<?php
?>