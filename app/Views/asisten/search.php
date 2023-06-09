<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .result {
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-top: 20px;
        }

        .result h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .result p {
            margin: 0;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Search</h1>
        <form action="/asisten/search" method="post">
            <?= csrf_field() ?>
            <input type="text" name="key" placeholder="Search..." required>
            <input type="submit" name="submit" value="Search">
        </form>
        <?php
        if (!empty($hasil)) {
            echo '<div class="result">';
            echo '<h2>Hasil Pencarian</h2>';
            echo '<p>Nama: ' . $hasil['NAMA'] . '</p>';
            echo '<p>Praktikum: ' . $hasil['PRAKTIKUM'] . '</p>';
            echo '<p>IPK: ' . $hasil['IPK'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>
