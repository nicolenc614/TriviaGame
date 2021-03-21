<html>
<head>
    <title>Questions</title>
    <link href="jeopardy.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<?php include("heads.php");?>
<br><br>


<?php
define("score", 0);
score . session_start();
error_reporting(0);
$id = $_GET['id'];
$cookie_name = "score";
//echo "YOUR SCORE IS " . $_COOKIE[$cookie_name]."<br>";
?>
<div id="box1">
<?php
if ($id == "tables-100") { ?>
<!--    <div id="box1">-->
    <form action="answers.php" method="post">

        <h2>What tag defines a HTML table?</h2><br>

          What is: <br>
        <input type="text" name="tables-100" size="17" maxlength="16" id="tables-100"><br><br>

        <input name="sub" type="submit" value="Submit">

    </form>
    <?php
} elseif ($id == "tables-200") { ?>
    <form action="answer.php" method="post">

        <h2>What tags are used within the table tag?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="tables-200" size="17" maxlength="16" id="tables-200"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>

    <?php
} elseif ($id == "tables-300") { ?>
    <form action="answers.php" method="post">

        <h2>What is a tag that specifies a group of on or more columns in table formatting? </h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="tables-300" size="17" maxlength="16" id="tables-300"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "tables-400") { ?>
    <form action="answers.php" method="post">

        <h2>By default, the text in table header tag is what? </h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="tables-400" size="17" maxlength="16" id="tables-400"><br><br>
        <input name="sub" type="submit" value="Submit">

    </form>
    <?php
} elseif ($id == "tables-500") { ?>
    <form action="answers.php" method="post">

        <h2>What are two attributes define how far rows and columns reach in a table?What tag defines a HTML table?</h2>
        <br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="tables-500" size="17" maxlength="16" id="tables-200"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} //forms
elseif ($id == "forms-100") { ?>
    <form action="answers.php" method="post">

        <h2>What tag is used to create a HTML form?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="forms-100" size="17" maxlength="16" id="forms-100"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "forms-200") { ?>
    <form action="answers.php" method="post">

        <h2>What is the most used form element?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="forms-200" size="17" maxlength="16" id="forms-200"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "forms-300") { ?>
    <form action="answers.php" method="post">

        <h2>What is the function of a radio button?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="forms-300" size="17" maxlength="16" id="forms-300"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "forms-400") { ?>
    <form action="answers.php" method="post">

        <h2>What element is useful for screen-reader users, because the screen-reader will read out loud the label when
            the user focus on the input element?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="forms-400" size="17" maxlength="16" id="forms-400"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "forms-500") { ?>
    <form action="answers.php" method="post">

        <h2>How many input types are there for forms?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="forms-500" size="17" maxlength="16" id="forms-500"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} //image
elseif ($id == "image-100") { ?>
    <form action="answers.php" method="post">

        <h2>What tag defines a HTML image map?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="image-100" size="17" maxlength="16" id="image-100"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "image-200") { ?>
    <form action="answers.php" method="post">

        <h2>What defines the clickable region inside of an image map?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="image-200" size="17" maxlength="16" id="image-200"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "image-300") { ?>
    <form action="answers.php" method="post">

        <h2>What attribute of image element points to an image map?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="image-300" size="17" maxlength="16" id="image-300"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "image-400") { ?>
    <form action="answers.php" method="post">

        <h2>What shape options are there for the clickable region of an image map?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="image-400" size="17" maxlength="16" id="image-400"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif ($id == "image-500") { ?>
    <form action="answers.php" method="post">

        <h2>What container is used for multiple image resources?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="image-500" size="17" maxlength="16" id="image-500"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} //css
elseif (id == "css-100") { ?>
    <form action="answers.php" method="post">

        <h2>What does CSS stand for?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="css-100" size="17" maxlength="16" id="css-100"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif (id == "css-200") { ?>
    <form action="answers.php" method="post">

        <h2>What are the 3 ways CSS can be added to HTML document?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="css-200" size="17" maxlength="16" id="css-200"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif (id == "css-300") { ?>
    <form action="answers.php" method="post">

        <h2>What is the universal selector in CSS that has low specificity?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="css-300" size="17" maxlength="16" id="css-300"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif (id == "css-400") { ?>
    <form action="answers.php" method="post">

        <h2>What is the lowest level in CSS specificity hierarchy?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="css-400" size="17" maxlength="16" id="css-400"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif (id == "css-500") { ?>
    <form action="answers.php" method="post">

        <h2>What is used to override all of element, class, ID selectors, and inline style attributes of CSS
            element?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="css-500" size="17" maxlength="16" id="css-500"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} //media
elseif (id == "media-100") { ?>
    <form action="answers.php" method="post">

        <h2>Images, music, sound videos, records, film, animations, and more are all different formats of what?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="media-100" size="17" maxlength="16" id="media-100"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif (id == "media-200") { ?>
    <form action="answers.php" method="post">

        <h2>What can you look at to tell what type of multimedia a file is?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="media-200" size="17" maxlength="16" id="media-200"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif (id == "media-300") { ?>
    <form action="answers.php" method="post">

        <h2>What tag caused the browser itself to include controls for the multimedia automatically?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="media-300" size="17" maxlength="16" id="image-300"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif (id == "media-400") { ?>
    <form action="answers.php" method="post">

        <h2>How many common audio formats are supported with HTML standard?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="media-400" size="17" maxlength="16" id="media-400"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    <?php
} elseif (id == "media-500") { ?>
    <form action="answers.php" method="post">

        <h2>What are the common video formats that are supported by HTML standard?</h2><br>

        <strong class="column">  What is: <br></strong>
        <input type="text" name="media-500" size="17" maxlength="16" id="media-500"><br><br>
        <input name="sub" type="submit" value="Submit">


    </form>
    </div>
    <?php
}
?>
<?php
echo "<br>YOUR SCORE IS " . $_COOKIE["score"];
?>
</body>
<?php include(bottoms.php)?>
</html>
