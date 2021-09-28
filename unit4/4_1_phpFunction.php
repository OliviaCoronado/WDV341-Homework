<?php

function choosenString(){
    $my_str1 ='I go to school at DMACC!';
    //$my_str2 ='I go to school at DMACC!     '; check cass-insensitive.
    echo "Number of Characters: " . strlen($my_str1) . "<br>";
    echo "No Whitespace: " . trim($my_str1) . "<br>";       
    echo "lowercase characters: " . strtolower($my_str1) . "<br>";

    $word = "dmacc";
    if(stripos($my_str1, $word) !== false){ //note: Unlike the strpos(), stripos() is case-insensitive.
        echo "Word Found!";
    } else{
        echo "Word Not Found!";
    }
  
};

function usaDateFormat(){
    $date=date_create('tomorrow');
    echo date_format($date,"m/d/Y");
};

function interDateFormate(){
    $date=date_create('tomorrow');
    echo date_format($date,"d/m/Y");
};

function phoneNumFormat(){
    $number = '+1234567890';
$result = sprintf("%s-%s-%s",       //%s-%s-%s to combine the numeric strings 
              substr($number, 2, 3),    // extract the numbers using substr() function in several strings
              substr($number, 5, 3),
              substr($number, 8));
echo("The formatted number is $result.");
};


/*Does not work "money_format"
function numberToCurrency($inNumber) {
    setlocale(LC_MONETARY,"en_US");
    echo money_format("The price is $%i", $inNumber);
  }

function numberToCurrency(){
    $number = "123456";
    $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
    return $formatter->formatCurrency($number, 'USD');
}


*/
function numberToCurrency(){
    $money = "123456";
    echo "$" . number_format($money, 2,'.', ','); 
    
}


        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name=viewpoint content="width=device=width, initial-scale=1.0">
        <title> WDV341 Intro PHP</title>
    <style>
        body {
			width: 900px;
			height: 900px;
			color: black;
			background-color: whitesmoke;/* For browsers that do not support gradients */
			background-image: linear-gradient(to right, #31ee83, #68bd33);

			margin: auto;
			width: 60%;
			border: 5px solid black;
			padding: 10px;
		}
    </style>



    </head>

    <body >
<h1> WDV341 - Intro PHP</h1>
<h2>4-1: Basic Functions</h2>


    <p>1. Create a function that will accept a timestamp and format it into mm/dd/yyyy format.</p>
        <p> What is tomorrows date: <?php echo usaDateFormat()?></p>
        

    <p>2. Create a function that will accept a timestamp and format it into dd/mm/yyyy format to use when working with international dates.</p>
        <p>What is tomorrows date: <?php echo interDateFormate()?></p>

    <p>3. Create a function that will accept a string input.  It will do the following things to the string:</p>
        <ol>A. Display the number of characters in the string</ol>
        <ol>B. Trim any leading or trailing whitespace</ol>
        <ol>C. Display the string as all lowercase characters</ol>
        <ol>D. Will display whether or not the string contains "DMACC" either upper or lowercase</ol>
        <p><?php echo choosenString()?></p>

    <p>4. Create a function that will accept a number and display it as a formatted phone number.   Use 1234567890 for your testing.</p>
        <p><?php echo phoneNumFormat()?></p>


    <p>5. Create a function that will accept a number and display it as US currency with a dollar sign.  Use 123456 for your testing.</p>
    <p><?php numberToCurrency()?></p>


        
    </body>
</html>