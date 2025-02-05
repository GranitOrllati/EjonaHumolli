<?php 

	include_once('config.php');

	if (isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM users WHERE username=:username";

		$prep = $con->prepare($sql);
		$prep->bindParam(':username',$username);
		$prep->execute();
		$data = $prep->fetch();

		if ($data == false) {
			echo "Username doesnt exist";
					header("Location: incorrect_uname_pass.php");

			

		}else if(password_verify($password, $data['password'])){

			$_SESSION['username'] = $data['username'];
			$_SESSION['name'] = $data['name'];
			$_SESSION['id'] = $data['id'];
			$_SESSION['user_type'] = $data['user_type'];

			if ($data['user_type'] === 'admin') {
            // Code for admin user
            header("Location: admin.php");
        } else {
            // Code for regular user
            header("Location: index.php");
        }


		}else{

			header("Location: incorrect_uname_pass.php");

		}

	}

 ?>
