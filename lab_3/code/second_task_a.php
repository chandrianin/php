<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Task №2_a</title>
    <style>
        @font-face {
            font-family: "googleSans";
            src: url("font/GoogleSans-Regular.ttf") format("ttf");
        }

        * {
            font-family: "googleSans", sans-serif;
            font-size: 23px;
        }

        body div {
            width: 300px;

            background: #501010;
            border-radius: 15px;
            display: flex;
            flex-wrap: nowrap;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
        }

        body {
            margin-top: 75px;
            background: #641d1d;
            display: flex;
            flex-wrap: nowrap;
            flex-direction: row;
            align-content: center;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 300px;
            /*height: 400px;*/
            display: flex;
            flex-wrap: nowrap;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
        }

        form * {
            margin-top: 15px;
            min-width: 270px;
            max-width: 270px;
        }

        label {
            width: 270px;
        }

        textarea {
            background: #944949;
            color: #3f0a0a;

            margin: 0;
            min-width: 264px;
            max-width: 264px;
            min-height: 250px;
            max-height: 250px;
            border-radius: 7px;
        }

        textarea::placeholder {
            color: #572020;

        }

        input[type=submit] {
            background: #944949;
            color: #3f0a0a;
            border-radius: 7px;
            margin-bottom: 15px;
        }

        p {
            width: 270px;
            text-align: justify;
            color: #944949;
        }
    </style>
</head>
<body>
<div>
    <form method="post">
        <label>
            <textarea name="inputText" placeholder="Введите любой текст!"></textarea>
        </label>
        <input type="submit">
    </form>
    <?php
    $inputText = !empty($_POST['inputText']) ? $_POST['inputText'] : '';
    $regExp = '/[a-z0-9а-яё.]+/ui';
    $matches = array();
    $count = preg_match_all($regExp, $inputText, $matches);

    ?>
    <p>
        Слов в тексте: <?= $count ?>
    </p>
    <p>
        Длина текста: <?= mb_strlen($inputText) ?>
    </p>
</div>
</body>
</html>