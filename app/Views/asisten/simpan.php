<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
        }

        input[type="text"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>PENDAFTARAN ASISTEN PRAKTIKUM</h1>
    <form action="/asisten/simpan" method="post">
        <?= csrf_field() ?>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required><br>

        <label for="nama">NAMA:</label>
        <input type="text" name="nama" id="nama" required><br>

        <label for="praktikum">PRAKTIKUM:</label>
        <input type="text" name="praktikum" id="praktikum" required><br>

        <label for="ipk">IPK:</label>
        <input type="text" name="ipk" id="ipk" required><br><br>

        <input type="submit" value="Simpan">
        
    </form>
</body>
</html>
