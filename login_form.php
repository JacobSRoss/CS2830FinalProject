<!DOCTYPE html>
<!-- Final Project for CS2830
    Jacob Ross 
    Pawprint: jsrxr6
    Student Number: 18134516
    Date: 5/5/2017
-->
<html>
<style>
    #title {
        text-align: center;
        color: white;
    }
    #icon {
        height: 200px;
        width: 200px;
    }

</style>
<head>
	<title>Easy Listening</title>
	<link href="app.css" rel="stylesheet" type="text/css">
    <link href="jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script>
        $(function(){
            $("input[type=submit]").button();
        });
    </script>
</head>
<body>
    <h1 id="title">Welcome to Easy Listening</h1>
    <div id="loginWidget" class="ui-widget">
        <h1 class="ui-widget-header">Login</h1>
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        
        <form action="login.php" method="POST">
            
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="username">User name:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <input type="submit" value="Submit">
            </div>
            
        </form>
    </div>
    <div class="pageWidget">
        <img src="images/spongebobgif.gif" alt="Spongebob gif" id="icon">
    </div>
</body>
</html>