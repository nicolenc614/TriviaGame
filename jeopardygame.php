<!DOCTYPE>
<html>
<head>
    <link href="tiles.css" rel="stylesheet" />
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
<?php error_reporting(0);?>
<?php score.session.session_start();?>
<body>
<?php include("head.php");?>
<div id="gameplay">
    <div class="grid grid-play" style="height:100vh; ">
        <div class="grid-row grid-row-cats" style="">

            <div class="grid-cell " data-row="0" data-col="0">
                <div class="cell">
                    <div class="cell-inner cat-cell">Animals</div>
                </div>
            </div>
            <div class="grid-cell " data-row="0" data-col="1">
                <div class="cell">
                    <div class="cell-inner cat-cell">Foods</div>
                </div>
            </div>
            <div class="grid-cell " data-row="0" data-col="2">
                <div class="cell">
                    <div class="cell-inner cat-cell">Tourism</div>
                </div>
            </div>
            <div class="grid-cell " data-row="0" data-col="3">
                <div class="cell">
                    <div class="cell-inner cat-cell">Music</div>
                </div>
            </div>
            <div class="grid-cell " data-row="0" data-col="4">
                <div class="cell">
                    <div class="cell-inner cat-cell">Movies</div>
                </div>
            </div>
        </div>

        <div class="grid-row grid-row-questions  grid-first-row">
            <div class="cell-group grid-cell" data-row="1" data-col="0">
                <div class="cell points">
                    <div class="value">
                        <!--<a href="card.php" id="tables-1">$100</a>&ndash;&gt;-->
                        <a href='card.php?id=tables-100'>$100</a>





                        <!--                        <div class="value">-->
                        <!--                            <a class="button" href="card.php" id="tables-1">100$</a>-->
                        <!--                        </div>-->

                        <!--                        <div id="popup" class="overlay">-->
                        <!--                            <div class="popup">-->
                        <!--                                <h2>Tables for 100$</h2>-->
                        <!--                                <a class="close" href="#">&times;</a>-->
                        <!--                                <div class="content">-->


                        <!--                                    What tag defines a HTML table?<br>-->

                        <!--                                    <form action="card.php" method="post">-->
                        <!--                                        What is: <input type="text" name="tables-1"><br>-->

                        <!--                                        <input type="submit">-->
                        <!--                                    </form>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->










                    </div>















                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="1" data-col="1">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=image-100'>$100</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="1" data-col="2">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=forms-100'>$100</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="1" data-col="3">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=css-100'>$100</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="1" data-col="4">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=media-100'>$100</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
        </div>

        <div class="grid-row grid-row-questions  grid-second-row">
            <div class="cell-group grid-cell" data-row="2" data-col="0">
                <div class="cell points">
                    <div class="value">
                        <a href='card.php?id=tables-200'>$200</a>
                    </div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="2" data-col="1">
                <div class="cell points">
                    <div class="value">
                        <a href='card.php?id=maps-200'>$200</a>
                    </div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="2" data-col="2">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=forms-200'>$200</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell"  data-row="2" data-col="3">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=css-200'>$200</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="2" data-col="4">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=media-200'>$200</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
        </div>
        <div class="grid-row grid-row-questions ">
            <div class="cell-group grid-cell"  data-row="3" data-col="0">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=tables-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="3" data-col="1">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=image-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="3" data-col="2">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=-forms'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="3" data-col="3">
                <div class="cell points">
                    <div class="value">    <a href='card.php?id=css-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="3" data-col="4">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=media-300'>$300</a></div>
                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
        </div>
        <div class="grid-row grid-row-questions  grid-forth-row">
            <div class="cell-group grid-cell" data-row="4" data-col="0">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=tables-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="4" data-col="1">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=image-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="4" data-col="2">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=forms-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="4" data-col="3">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=css-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="4" data-col="4">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=media-400'>$400</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
        </div>
        <div class="grid-row grid-row-questions grid-last-row ">
            <div class="cell-group grid-cell"data-row="5" data-col="0">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=tables-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="5" data-col="1">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=image-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="5" data-col="2">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=forms-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="5" data-col="3">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=css-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>
            <div class="cell-group grid-cell" data-row="5" data-col="4">
                <div class="cell points">
                    <div class="value"><a href='card.php?id=media-500'>$500</a></div>

                    <div class="question">Question</div>
                    <div class="answer">Answer</div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>

