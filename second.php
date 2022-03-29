<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&family=M+PLUS+Rounded+1c&family=Merriweather&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="./second.css">
    <link rel="stylesheet" href="./reset.css">
    <title>Document</title>
</head>
<body>
    <section class="text">
        <h1>お問合せ内容のご確認</h1>
     <?php 
    $name = htmlspecialchars($_POST['name']) ;
    $email = htmlspecialchars($_POST['email']) ;
    $content = htmlspecialchars($_POST['content']) ;

   echo 'お名前:'.$name .'様'.'<br>';
   echo 'ご連絡先:'.$email.'<br>';
   echo 'お問合せ:'.'<br>'.$content.'<br>';

   ?> 
   <form action="sard.php" method="POST">
   <input type="hidden" id="name" name="name" value="<?php echo $name?>">
   <input type="hidden" id="name" name="email" value="<?php echo $email?>">
   <input type="hidden" id="name" name="content" value="<?php echo $content?>">
<button type="button" onclick="history.back();" id="bc-btn">BACK</button>
<button type="submit">OK</button>
</form>
   </section>
  
</body>
</html>