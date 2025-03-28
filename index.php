<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شحن شدات ببجي مجانًا</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background-color: #f4f4f4; }
        .container { width: 50%; margin: auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        input, button { margin: 10px; padding: 10px; width: 80%; }
    </style>
</head>
<body>

    <div class="container">
        <h1>احصل على شدات ببجي مجانًا!</h1>
        <p>شاهد الإعلانات واجمع النقاط لاستبدالها بشدات ببجي</p>

        <form action="process.php" method="post">
            <input type="text" name="player_id" placeholder="أدخل معرف اللاعب" required>
            <button type="submit">احصل على الشدات</button>
        </form>

        <h2>إعلانات تساعدك في الحصول على الشدات:</h2>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-xxxxxxxxxxxxxxxx"
             data-ad-slot="yyyyyyyyyy"
             data-ad-format="auto"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

    </div>

</body>
</html>
