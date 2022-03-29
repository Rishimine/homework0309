<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Luxurious+Roman&family=M+PLUS+Rounded+1c&family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./reset.css">
    <title>Homework</title>
</head>
<body>
    <header>
        <div class="main">
            <h1>Somewhere with onde.</h1>
        </div>
    </header>
    <section name="post">  
        <div class="text">
            <h1>wondeは、「ゆらぎ」をテーマにしたフレグランスブランドです。</h1>
            <p>わたしたちは、新しい香りの選び方、楽しみ方を提案します。</p>
        </div>
        <div class="text">
            <h1>お問い合わせ</h1>
        </div>
    <form action="second.php" method="POST">
    <div class="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="post">
        <label for="email">email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="post">
        <label for="content">Inquiry</label>
        <textarea name="content" id="content" cols="30" rows="10" required></textarea>
    </div>
    <div class="post">
    <input type="submit" value="Send" id="btn">
    </div>
   
    </form>
    </section>
    <footer>
        <div class="foot">&#9828; Homework</div>
    </footer>
</body>
</html>