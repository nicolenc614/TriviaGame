<!DOCTYPE>
<html>
<head>
    <link href="tiles.css" rel="stylesheet" />
    <title>Leaderboard</title>
    <style>
       
        body {
            height: 100vh;
            width: 100vw;
            background: #05404f;
            overflow: hidden;
        }
        .header {
            display: block;
            margin: 2rem 1rem 0 0;
        }
        .header a {
            color: #05404f;
            outline: 0;
            background: #f2f2f2;
            border: 0;
            border-radius: 0.5rem;
            padding: 0.75rem;
            box-sizing: border-box;
            font: 2rem  sans-serif;
        }
        .header p {
            float: left;
            margin-right: 2rem;
            font: 2rem  sans-serif;
            color: white;
        }
        .right {
            float: right;
        }
    </style>
</head>
<?php include("heads.php");?>


<body>
    <h2>Leaderboard</h2>
<div>
    <table>
        <tr>
            <td>Name</td>
            <td>Ranking</td>
            <td>score</td>
        </tr>
  

    <!-- $cookie_name = "score";
        $_COOKIE[$cookie_name];
        $value = (int) $_COOKIE["$cookie_name"];

        setcookie($cookie_name, $value); -->

<?php
include ("answers.php");
score.session.session_start();

$cookie_name = "score";
$cookie_value = 0;
define($cookie_name, $_COOKIE[$cookie_name]);

if ($value != 0) 
{
    $username = $_SESSION['username'];

    file_put_contents($textfile, "\n" .$username. ":". $value, FILE_APPEND);
}

$textfile = file('leaderboard.txt');
$place = 0;

foreach ($textfile as $initialPlace)
{
    $nextFile = (explode(":", $initialPlace)[0]);
    $newValue = (explode(":", $initialPlace)[1]);
    echo $value.'<br>';
}

foreach ($textfile as $formerPlace)
{
    $place++;
    $previousLeader = (explode(":", $formerPlace)[0]);
    $oldValue = (explode(":", $formerPlace)[1]);

    if ($newValue > $oldValue)
    {
        echo "<tr><td>$place</td><td>$newFile</td><td>$newValue</td></tr> ";
	}else {
		echo "<tr><td>$place</td><td>$previousLeader</td><td>$oldValue</td></tr> ";
    }
}
?>

</table>




</div>
</body>
</html>
