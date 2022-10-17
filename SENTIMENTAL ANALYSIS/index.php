<?php
include('style.php');
include ('vendor/autoload.php');
Use Sentiment\Analyzer;

$obj =new Analyzer();
$negative='';
$neutral='';
$positive='';
$compound='';

if(isset($_POST['submit'])) {
    $text=$_POST['text'];
    $result=$obj->getSentiment($text);
    $negative=$result['neg'];
    $neutral=$result['neu'];
    $positive=$result['pos'];
    $compound=$result['compound'];
}

?>


<html>
    <head>
        <title>Sentimental Analyzer | -by Sachin Mishra</title>
    </head>
    <body>
        <div class="form">
            <form method="POST">
            <div class="title">Sentimental Analyzer</div>
            <div class="subtitle">Let's analyse your words!</div>
            <div class="input-container ic1">
                <input class="input" type="text" name="text" placeholder=" " />
                <div class="cut"></div>
                <label for="sentence" class="placeholder">Write here...</label>
            </div>
            <input type="submit" class="submit" name="submit" value="Submit" />

            <div class="result">
                Negative = <?php echo $negative ?> <br>
                Neutral = <?php echo $neutral ?> <br>
                Positive = <?php echo $positive ?> <br>
                Compound = <?php echo $compound ?> <br>
            </div>
            </form>
           


        </div>

    </body>
</html>






