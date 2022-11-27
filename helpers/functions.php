<?php
/**
 * @Author: SUPERMAN
 * @Date:   2022-06-22 12:43:19
 * @Last Modified by:   SUPERMAN
 * @Last Modified time: 2022-07-06 22:58:27
 */

// User Registration
function userRegistration($name, $email, $password, $connection){
	if ($name && $email && $password) {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $date = date("Y-m-d");
        $authKey = generateRandomString();

        $query = "INSERT INTO user_info (name,email,password,user_register,user_activation_key) VALUES ('{$name}','{$email}','{$hash}','{$date}','{$authKey}')";
        mysqli_query($connection, $query);

 		if (mysqli_error($connection)) {
 			header("location: /login?status={1}");
 		}
 		return header("location: /login");
    }
    else{
        return header("location: /login?status={2}");
    }
}


// User Login
function userLogin($email, $password, $connection){
	if ($email && $password) {
		$query = "SELECT id,name,password FROM user_info WHERE email='{$email}'";
		$result = mysqli_query($connection,$query);

		if (mysqli_num_rows($result) > 0) {
			$data = mysqli_fetch_assoc($result);
			$_id = $data['id'];
			$_name = $data['name'];
			$_password = $data['password'];
			if (password_verify($password, $_password)) {
				$status = 6;
				$_SESSION['id'] = $_id;
				$_SESSION['name'] = $_name;
				header("location: /");
				die();
			}
			else{
				$status = 3;
			}
		}else{
			$status = 5;
		}
	}else{
 		$status = 2;
 	}
 	return header("location: /login?status={$status}");
}


// Forgot Password
function forgotPassword($email, $connection){
    require_once('mail.php');

	if($email){
		$query = "SELECT * FROM user_info WHERE email='{$email}'";
		$result = mysqli_query($connection, $query);

		if (mysqli_num_rows($result) == 1) {
			$data = mysqli_fetch_assoc($result);

            $email = $data['email'];
            $name = $data['name'];
            $authKey = $data['user_activation_key'];

            $subject ="Recover You Password";
            $body ="<h3>Hi, <b>{$name}</b><h3>
            <p>If You are Confirm to recover your password to click this link.</p>
            <a href='http://www.graph.view/login?page=rp&&email={$email}&&key={$authKey}'>Chlick Here</a>
            <h4>Best Regards,</h4>
            <h3><b>JOY MOJUMDER</b></h3>";

            $title ="Reset Password";
            sendMail($email, $subject, $body, $title);

            header("location: /login");
		}else{
			header("location: /login?status={$status}");
		}
	}else{
        header("location: /login?status={$status}");
    }
}


// Update Password
function resetPassword($email, $getKey, $password, $connection){

    if($email && $getKey && $password){
        $query = "SELECT * FROM user_info WHERE email='{$email}'";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
            $_email = $data['email'];
            $_key = $data['user_activation_key'];

            if ($getKey == $_key && $email == $_email) {
                $hash = password_hash($password, PASSWORD_BCRYPT);
                $authKey = generateRandomString();
                $query = "UPDATE user_info SET password='".$hash."',user_activation_key='".$authKey."' WHERE email = '$email' AND user_activation_key='$getKey'";

                if (mysqli_query($connection,$query)) {
                    header("location: /login");
                }else {
                  echo "Error updating record: " . mysqli_error($connection);
                }
            }else{
                header("location: /login");
            }
        }else{
            header("location: /login");
        }
    }
    else{
        header("location: /login");
    }
}



// Random Number Generator
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~`!@#$%^&*":;?,.';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


// CSRF Token Generate
function generatye_token(){
    if(!isset($_SESSION['token'])){
        $_SESSION["token"] = bin2hex(random_bytes(32));
    }
    return $_SESSION["token"];
}