<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Task №3</title>
    <style>
        @font-face {
            font-family: "googleSans";
            src: url("../font/GoogleSans-Regular.ttf") format("ttf");
        }

        * {
            font-family: "googleSans", sans-serif;
            font-size: 23px;
        }

        html {
            background: #641d1d;
        }

        body div {
            height: auto;
            width: 300px;
            background: #501010;
            border-radius: 15px;
            display: flex;
            flex-wrap: nowrap;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
        }

        div div {
            width: 600px;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-evenly;
            align-items: flex-start;
        }

        div div p {
            max-width: 200px;
            margin: 10px 10px;
            word-wrap: anywhere;
            text-align: center;
            min-height: 46px;
        }

        body {
            margin-top: 75px;
            background: #641d1d;
            display: flex;
            flex-wrap: nowrap;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
        }

        form {
            width: 300px;
            display: flex;
            flex-wrap: nowrap;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
        }

        form * {
            margin-top: 15px;
            max-width: 270px;
        }

        label {
            width: 270px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            flex-wrap: nowrap;
        }

        textarea {
            background: #944949;
            color: #3f0a0a;

            margin: 5px 0 0 0;
            min-width: 264px;
            max-width: 264px;
            min-height: 250px;
            max-height: 250px;
            border-radius: 7px;
        }

        textarea::placeholder, input::placeholder {
            color: #572020;
        }

        input[type=submit], input[type=email], input[type=text], select {
            background: #944949;
            color: #3f0a0a;
            margin: 5px auto 0 auto;
            border-radius: 7px;
            /*margin-bottom: 15px;*/
        }


        input[type=text] {
            width: 264px;
        }

        select {
            width: 270px;
            margin-bottom: 0;
        }

        option:checked {
            background: #310404;
            color: #944949;
        }

        p, label {
            width: 270px;
            margin: 10px auto;
            text-align: start;
            color: #944949;
        }

        h3 {
            color: #944949;
        }
    </style>
</head>
<body>
<div>
    <form action="./save.php" method="post">
        <label>
            Ваш email:
            <input name="email" required type="email" placeholder="example@web.edu">
        </label>
        <label>
            Категория:
            <select name="category" required>
                <option value="first">Первая категория</option>
                <option value="second">Вторая категория</option>
                <option value="other">Иное</option>
            </select>
        </label>
        <label>
            Заголовок:
            <input name="title" required type="text" placeholder="Абракадабра">
        </label>
        <label>
            Описание:
            <textarea name="description" placeholder="Много разных буковок"></textarea>
        </label>
        <label>
            <input type="submit">
        </label>
    </form>
</div>
<div style="width: 600px">
    <div>
        <h3>Категория</h3>
        <h3>Заголовок</h3>
        <h3>Описание</h3>
    </div>
    <?php
    foreach (array('first', 'second', 'other') as $category) {
        $currentFiles = scandir(__DIR__ . "/categories/$category");
        foreach ($currentFiles as $file) {
            if ($file === "." || $file === "..") {
                continue;
            } else {
                $title = substr($file, 0, strlen($file) - 4);
                $content = file_get_contents(__DIR__ . "/categories/$category/" . "$file");
                echo "<div><p>$category</p><p>$title</p><p>$content</p></div>";
            }
        }
    }
    ?>
</div>
</body>
</html>