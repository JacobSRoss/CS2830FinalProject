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
	<title>LoFi Hip Hop</title>
    <link href="app.css" rel="stylesheet" type="text/css">
    <link href="jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script>
     //loading function
        function getContent(){
            
            var xmlHttp = new XMLHttpRequest();
            
            xmlHttp.onreadystatechange = function() {
                if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
                    
                    document.getElementById("loader").style.display = "none";
                    
                    document.getElementById("contentBox").innerHTML = xmlHttp.responseText;
                }
            };
            
            // when a new ajax request is made show the loading icon
            document.getElementById("loader").style.display = "block";
            
            //and clear contentBox
            document.getElementById("contentBox").innerHTML = "";
            
            xmlHttp.open("GET", "responder.php", true);
            xmlHttp.send();
        }
		
        
        // The following JavaScript drives the loading animation
        var tick = 1;
        setInterval(function() {
            var loadNodes = document.querySelectorAll(".loadNode");
            if (tick == 1) {
                backgroundColors = ["#333", "#aaa", "#777"];
                tick = 2;
            }
            else if (tick == 2) {
                backgroundColors = ["#777", "#333", "#aaa"];
                tick = 3
            }
            else {
                backgroundColors = ["#aaa", "#777", "#333"];
                tick = 1;
            }
            loadNodes[0].style.backgroundColor = backgroundColors[0];
            loadNodes[1].style.backgroundColor = backgroundColors[1];
            loadNodes[2].style.backgroundColor = backgroundColors[2];
        }, 200);
    </script>
</head>
<body>
    <div class="ui-widget pageWidget">
        <h1 class="ui-widget-header">LoFi Hip Hop</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/kq7cQNO0gYc" frameborder="0" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/TSD30PDvLYM" frameborder="0" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/xrbrQhpvn8E" frameborder="0" allowfullscreen></iframe>
        
        <p id="contentBox"></p>
        <button class="button" type="button" onclick="getContent()">Get Space Cowboy Tracklist</button>
        <div id="loader">
            <div class="loadNode"></div>
            <div class="loadNode"></div>
            <div class="loadNode"></div>
        </div>
        <div class="ui-widget-content">
            <p><a href='home.php'>Home</a></p>
            <p><a href='logout.php'>Logout</a></p>
        </div>
    </div>
</body>
</html>
