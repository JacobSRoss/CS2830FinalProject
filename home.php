<?php
	
	//$username = empty($_COOKIE['username']) ? '' : $_COOKIE['username'];
	
    //every time we want to access $_SEWSSION we have to call session_start() on every page
    if(!session_start()){
        header("Location: error.php");
        exit;
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
	<title>Home</title>
    <style>
        #footer {
            font-size: 6pt;
        }
    </style>
    <link href="app.css" rel="stylesheet" type="text/css">
    <link href="jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $(".icons").draggable({
                snap: true,
                stack: ".icons"
            });
        });
	</script>
</head>
<body>
    <div class="ui-widget pageWidget">
        <h1 class="ui-widget-header">Choose your style:</h1>
        <div class="ui-widget-content clear">
            <div>
                <div class="wrappers">
                    <a href="lofi_hiphop.php">
                        <img src="images/lofigif.gif" alt="LoFi Hip Hop" class="icons">
                    </a>
                </div>
                <div>
                    <a href="classic.php">
                        <img src="images/classicgif.gif" alt="Traditional Chinese Music" class="icons">
                    </a>
                </div>
                <div class="wrappers">
                    <a href="jazz.php">
                        <img src="images/jazzgif.gif" alt="Jazz" class="icons">
                    </a>
                </div>
                <div>
                    <a href="rap.php">
                        <img src="images/rapgif.gif" alt="Heartbreak Rap" class="icons">
                    </a>
                </div>
            </div>
            <p><a href='logout.php'>Logout</a></p>
            <p id="footer">Click on one! They are also draggable!</p>
        </div>
    </div>
</body>
</html>
