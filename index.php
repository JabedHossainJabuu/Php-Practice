<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php
    echo "Hello <br><br>"; 

    //IF else if else condition <br><br
    $t = date("H");

    if($t<"10"){
        echo "Have a good morning <br><br>";
    }else if($t<"20"){
        echo "Have a good Day <br><br>";
    }else{
        echo "Have a good night <br><br>";
    }

    //for loop
    for($i=0; $i<=10; $i++){
        echo "The number is: $i <br>";
    }
?>
</body>
</html>