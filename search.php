<?php
$dsn ='mysql:dbname=homework;host=localhost';
$user ='root';
$passwprd ='root';
$dbh = new PDO($dsn,$user,$passwprd);
$dbh->query('SET NAMES utf8');

?>
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
    <form action=""method="POST"class="main">
        <p>検索したいemailを入力してください。</p>
        <input type="text" name="email">
        <input type="submit"value="検索">
    </form>
    
    <?php
    if (!empty($_POST['email'])) {
       $email = $_POST['email'];

       $sql ="SELECT * FROM `homework_db` WHERE `email`='${email}'";
       $stmt=$dbh->prepare($sql);
       $stmt->execute();
       $rec =$stmt->fetch(PDO::FETCH_ASSOC);
       echo($rec["id"])."<br>";
        echo($rec["name"]);
        echo($rec["email"]);
        echo($rec["content"])."<br>";
        echo'<hr>';
    }

    $dbh=null;

    ?>
    
</body>
</html>