<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Task №2.a</title>
    <style>
        @font-face {
            font-family: "googleSans";
            src: url("font/GoogleSans-Regular.ttf") format("ttf");
        }

        * {
            font-family: "googleSans", sans-serif;
            font-size: 23px;
        }

        html {
            background: #641d1d;
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

        div * {
            margin-top: 15px;
            min-width: 270px;
            max-width: 270px;
        }

        p {
            margin: 10px auto;
            width: 270px;
            text-align: start;
            color: #944949;
        }
    </style>
</head>
<body>
<div>
    <?php
    $surName = !empty($_POST['surName']) ? $_POST['surName'] : '';
    $name = !empty($_POST['name']) ? $_POST['name'] : '';
    $age = !empty($_POST['age']) ? $_POST['age'] : '1';
    ?>
    <p>Ваша фамилия: <?= $surName ?></p>
    <p>Ваше имя: <?= $name ?></p>
    <p>Ваш возраст: <?= $age ?></p>
</div>
</body>