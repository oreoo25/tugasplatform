<!DOCTYPE html>
<html>
<head>
    <title>Tampilkan Pesan</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            font-size: 18px;
            line-height: 1.5;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tampilkan Pesan</h1>
        <p><?= $pesan;?></p>
    </div>
</body>
</html>
