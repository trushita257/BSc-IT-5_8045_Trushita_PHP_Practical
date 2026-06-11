<!DOCTYPE html>
<html>
<head>
    <title>Array Example</title>
</head>
<body>

<?php
    error_reporting(0);
?> 

<form method="get">
    Enter value <br></br>
    <input type="text" name ="uname1"><br></br>
    <input type="text" name ="uname2"><br></br>
    <input type="text" name ="uname3"><br></br>
    <input type="text" name ="uname4"><br></br>
    <input type="text" name ="uname5"> <br></br>
    <input type="submit" name ="Print" value="Print">
</form>

<?php
    $nm = array();
    $nm[0]=$_GET['uname1'];
    $nm[1]=$_GET['uname2'];
    $nm[2]=$_GET['uname3'];
    $nm[3]=$_GET['uname4'];
    $nm[4]=$_GET['uname5'];
   
    foreach($nm as $n)
    {
        echo $n. "<br>";
    }
?>
</body>
</html> 
