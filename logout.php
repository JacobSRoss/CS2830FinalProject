<?php

	if(!session_start()){
        header("Location: error.php");
        exit;
    }

    //destroy all session data and unset all session variables

    $_SESSION = array();

    //if the session was prpagated using a cookie remove that cookie
    if(ini_get("session.use_cookies")){
        $params = session_get_cookie_params();
        setcookie(session_name(), '', 1,
                 $params["path"], $params["domain"],
                 $params["secure"], $params["httponly"]
        );
    }

    //destroy session
    session_destroy();
	
    //redirect back to login
	header("Location: login.php");
	exit;
?>
