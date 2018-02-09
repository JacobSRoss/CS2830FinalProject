<?php
	
    //here ew are useing sessions to propagate the login

    //we always have to call session_start() to use $_SESSION[] (session)
    if(!session_start()){
        header("Location: error.php");
        exit;
    }

    //checking to see if the user
    $loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];

    if($loggedIn){
        header("Location: home.php");
        exit;
    }


	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
	
		if ($username == "test" && $password == "pass") {
			//setcookie('username', $username);
            //instead of setting a cookie we will set a key/value pair in $_SESSIOn
            
            $_SESSION['loggedin'] = $username;
			header("Location: home.php");
			exit;
		} else {
			$error = 'Error: Incorrect username or password';
			require "login_form.php";
		}		
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "login_form.php";
	}
	
	
?>