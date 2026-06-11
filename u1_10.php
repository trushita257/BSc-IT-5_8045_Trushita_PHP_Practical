<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merged array </title>
</head>

<body>
<?php
    error_reporting(0);
?> 

<form method="get">
    Enter value <br></br>
    <input type="text" name ="uname[0]"><br></br>
    <input type="text" name ="uname[1]"><br></br>
    <input type="text" name ="uname[2]"><br></br>
    <input type="text" name ="uname[3]"><br></br>
    <input type="text" name ="uname[4]"> <br></br>
    <input type="submit" name ="Print" value="Print">
</form>

<?php
    echo "<h3> Array 1:</h3>";
    foreach($a1 as $val)
    {
        echo $val ."<br>";
    }
   
    echo "<h3> Array 2:</h3>";
   $rev = array_reverse($nm);
    foreach($a2 as $val)
    {
        echo $val. "<br>";
    }

    $merged = array_merge($a1 , $a2);
    echo "<h3> Merged array: </h3>" ;
    foreach ($merged as $val)
    {
        echo $val . "<br>";
    }
?>

    
</body>
</html>