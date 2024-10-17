<?php
session_start();

if(isset($_SESSION['user_id'])) {
	$user = $_SESSION['user_id'];
        $loginlog = "UPDATE tbl_user_logs SET login_status = 'logged out' WHERE user_id = '$user' ";
	session_destroy();
	unset($_SESSION['user_id']);
	unset($_SESSION['email']);
	unset($_SESSION['username']);
    	header("Location: login.php");
} else {
	header("Location: login.php");
}
?>
<?php
//session_start();
//session_unset();
//session_destroy();
//header('location:../login.php');

?>