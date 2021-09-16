<?php 

$yourName = "Olivia Coronado";       //#1
$number1 = 10;      //#4
$number2 = 5;       //#4
$total = $number1+$number2; //#5

$arrayCodes = array("PHP", "HTML", "JavaScript");





?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="example of meta">
        <meta name=viewpoint content="width=device=width, initial-scale=1.0">
        <title> WDV221 Intro Javascript</title>
        
    </head>

    <body>
        
<?php echo "<h1>PHP Basics </h1>" ?>      <!--#2 -->

<h2>  <?php echo $yourName ?></h2>      <!--#3 -->

    <p>number1 is: <?php echo $number1; ?></p>      <!--#4 -->
    <p>number2 is: <?php echo $number2; ?></p>      <!--#4- -->
    <p>total is: <?php echo $total;?></p>           <!--#5 -->
    <div>The array is: <?php        //#6
    $j = count($arrayCodes); 
    for ($x=0; $x< $j; $x++){
    echo $arrayCodes[$x] . ", ";
}
    
    ?> </div>

        
    </body>
</html>