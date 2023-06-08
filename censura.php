<?php
    $parola = $_GET['parola'];
    $text = $_GET['text'];
    $text_len = strlen($text);
    $text_censurato = str_ireplace($parola, str_repeat("*", strlen($parola)), $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style_php.css">
    <title>Testo censurato</title>
</head>

<body>
    <div>
        <h1>Parola da censurare: <?php echo $parola ?></h1>
        <h1>Lunghezza testo: <?php echo $text_len ?></h1>
        <p><?php echo $text_censurato ?></p>
    </div>

    <form action="index.html">
        <button type="submit">Torna Indietro</button>
    </form>
</body>
</html>