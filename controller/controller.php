<?php 

include('../config/config.php');

if(isset($_REQUEST['signin'])) {
	$name=$_REQUEST['name'] ;
	$contact=$_REQUEST['contact'] ;
	$email=$_REQUEST['email'] ;
	$pass=$_REQUEST['pass'] ;
	$cpass=$_REQUEST['cpass'] ;

	if(empty($name) && empty($contact) && empty($email) ){
		$_SESSION['error'] = "Please fill the blank field";

		header("location:".$siteUrl."/sign_in.php") ;
	}else {
		if($pass == $cpass) {
			$password = md5($pass);
			$sql = mysqli_query($conn , "SELECT * FROM task1 WHERE Email = '$email'");
			if(mysqli_num_rows($sql)>0){
				$_SESSION['error'] = "Your registration already exists";
				header("location:".$siteUrl."/sign_in.php") ;
			} else {
			mysqli_query($conn, "INSERT INTO task1(Name,Email,Contact,) VALUES('$name' , '$email' ,'$contact')") ;
			$_SESSION['success']="Your registration successfully" ;
			header("location:".$siteUrl."/sign_in.php") ;
			}
		}else {
			$_SESSION['error']="Your confirm password did not match" ;
			header("location:".$siteUrl."/sign_in.php") ;
		}
	}
}


?>

