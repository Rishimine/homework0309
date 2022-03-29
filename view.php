<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&family=M+PLUS+Rounded+1c&family=Merriweather&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="./sard.css">
    <link rel="stylesheet" href="./reset.css">
    <title>Document</title>
</head>
<body>
<div class="main">
<?php
$dsn = 'mysql:dbname=homework;host=localhost';
$user = 'root';
$password ='root';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$sql ="SELECT * FROM `homework_db` WHERE 1";
$stmt =$dbh->prepare($sql);
$stmt->execute();

while (true) {
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($rec == false) {
       break;
    };
    echo($rec["name"]);
    echo($rec["email"]);
    echo($rec["content"])."<br>";

}

$dbh=null;

?>
   
</div>
 
</body>
</html>
