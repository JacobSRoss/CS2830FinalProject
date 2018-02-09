<?php

    if(!session_start()){
        header("Location: error.php");
    }

	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
    if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jazz</title>
    <link href="app.css" rel="stylesheet" type="text/css">
    <link href="jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
</head>
<body>
    <div class="ui-widget pageWidget">
        <h1 class="ui-widget-header">Smooth Jazz</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/meECq9NvPpc" frameborder="0" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/r5hW7Nciuns" frameborder="0" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/gwDoRPcPxtc" frameborder="0" allowfullscreen></iframe>
        <div class="ui-widget-content">
            <p><a href='home.php'>Home</a></p>
            <p><a href='logout.php'>Logout</a></p>
        </div>
    </div>
</body>
</html>
