<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=No"/>
<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)" />
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta name="apple-mobile-web-app-title" content="Red Trolley"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>

<link rel="stylesheet" href="jquery/jquery.mobile-1.4.0.min.css" />
<script src="jquery/jquery-1.10.2.js"></script>
<script src="jquery/jquery.mobile-1.4.0.min.js"></script>

<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-touch-icon" href="icon.png">


<?php

if (isset($_POST['Pin18']))
{
exec("sudo python /home/pi/gpiotoggle.py 18");
}
if (isset($_POST['Pin27']))
{
exec("sudo python /home/pi/gpiotoggle.py 27");
}
if (isset($_POST['Pin22']))
{
exec("sudo python /home/pi/gpiotoggle.py 22");
}
if (isset($_POST['Pin24']))
{
exec("sudo python /home/pi/gpiotoggle.py 24");
}


if (isset($_POST['script']))
{
exec("sudo /home/pi/trolley.sh &");
}

?>

</head>

<body>


<div data-role="page" id="pulse" >
<div data-role="header" data-position="fixed" data-theme="b" class="ui-btn-active" class="ui-state-persist" >
        <h1>Trolley Control</h1>


</div><!-- /header -->

<div data-role="content">

<div style="text-align: center;"><img src="trolley.png"height="150" width="150" > </div>
<form target=_self method="POST">

<button name="Pin18">Sound</button>
<button name="Pin27">Hollywood</button>
<button name="Pin22">Los Angeles</button>
<button name="Pin24">Stop</button>
<button name="script">Auto</button>
</form>




</body>
</html>
