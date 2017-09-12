<?php
    session_start();

	$conn=mysql_connect("localhost","root","");
    $db=mysql_select_db("cuet_library",$conn);
	
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$_SESSION['error'] = 0;
	if($user=="noman"&&$pass=="noman")
	{
		header('Location: admin_page.html');
	}

	else if ($user=="sojib"&&$pass=="sojib") {

		header('Location:stuff_page.php');
	}


	else{
		$sql="SELECT status FROM registration where user_name='".$user."' and pass='".$pass."'";

		$result=mysql_query($sql);
		$success = mysql_num_rows($result);
		//echo "1";
		if($success==1){
			 
			while($row = mysql_fetch_array($result))
			{
				if($row['status']=='verified')
				{
					$_SESSION['message'] = "Successfully logged in!";
					header('Location: main_page.php');
				}else{
					$_SESSION['message'] = "You are not verified yet. Please wait until verification.";
					$_SESSION['error'] = 1;
					header('Location: login_view.php');
				}

			}

		}else{

			$_SESSION['message'] = "Invalid username or password";
			$_SESSION['error'] = 1;
			header('Location: login_view.php');
		}
	}	
	
	

	//echo $id;
	
	mysql_close($conn);
?>