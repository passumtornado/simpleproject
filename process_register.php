<?php 
$error = array();

$first_name = trim($_POST['first_name']);
if(empty($first_name)){
	$error[] = 'you forgot to enter your first name';
}
$last_name = trim($_POST['last_name']);
if(empty($last_name)){
	$error[] = 'you forgot to enter your last name';
}
$email = trim($_POST['email']);
if(empty($email)){
	$error[] = 'you forgot to enter your email';
}
$password1 = trim($_POST['password1']);
$password2 = trim($_POST['password2']);
if(!empty($password1)){
	if($password1!==$password2){
		$error[] = 'your password do not match';
	}
	
}else {
	$error[]='you forgot to enter your password';
}
if(empty($error)){
	try{
		$hash_passcode = password_hash($password1, PASSWORD_DEFAULT);
		require ('conn.php');
		$query = "INSERT INTO users(user_id,first_name,last_name,email,password,reg_date) ";
		$query .="VALUES(' ',?,?,?,?, NOW())";
		$q = mysqli_stmt_init($dbcon);
		mysqli_stmt_prepare($q, $query);

		mysqli_stmt_bind_param($q,'ssss',$first_name,$last_name,$email,$hash_passcode);
		mysqli_stmt_execute($q);

		if(mysqli_stmt_affected_rows($q) ==1){
			header ("location: register_thank.php");
			exit();

		}else{
			$errorstring = "<p class='text-center col-sm-8' style='color:red'>"; 
            $errorstring .= "System Error<br />You could not be registered due ";
            $errorstring .= "to a system error. We apologize for any inconvenience.</p>";
            echo "<p class=' text-center col-sm-2 style='color:red'>$errorstring</p>";
           
            // Debugging message below do not use in production
            echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $query . '</p>';
            mysqli_close($dbcon); // Close the database connection.
            echo '<footer class="jumbotron text-center col-sm-12"
                    style="padding-bottom:1px; padding-top:8px;">
                     include("footer.php");
                                       </footer>';
                                      exit();
		}
	}
	catch(Exception $e){
	//print "An exception. Message:".$e->getMessage();
        print('The sytem is busy try later');
	}
	catch(Error $e){
	//print "An exception. Message:".$e->getMessage();
	print('The sytem is busy try later');
}

}else{
	$errorstring = "Error! The following error(s) occurred:<br>";
foreach ($errors as $msg) { // Print each error.
$errorstring .= " - $msg<br>\n";
}
$errorstring .= "Please try again.<br>";
echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
}



?>