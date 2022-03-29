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
<?php
   $name =  htmlspecialchars($_POST['name']);
   $email =  htmlspecialchars($_POST['email']) ;
   $content =  htmlspecialchars($_POST['content']);


   $dsn = 'mysql:dbname=homework;host=localhost';
   $user ='root';
   $password ='root';
   $dbh = new PDO($dsn,$user,$password);
   $dbh->query('SET NAMES utf8');

   $sql ="INSERT INTO `homework_db`(`name`,`email`,`content`)VALUE('${name}','${email}','${content}')";
   $stsm =$dbh->prepare($sql);
   $stsm->execute();

   $dbh = null;
?>
<body>
    <section class="main">
        
        <?php
    
        echo $name .' 様、お問い合せ有難うございます。'.'<br>';
        echo '2~3日以内に'.$email.'までご連絡いたします。'.'<br>';
    
        ?>
    </section>
    
</body>
</html>