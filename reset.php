<?php include "head.php" ?>
<?php
define("score", 0);
score.session_start(); /* Starts the session */
error_reporting(0);
$cookie_name = "score";
setcookie("score",0);
?>


<head>
    <title>Reset</title>
    <link href="board.css" type="text/css" rel="stylesheet"/>
    <meta http-equiv = "refresh" content = "3; url = gameboard.php" />
</head>
<body>

<h2>Resetting Score... You will be redirected</h2>
</body>
