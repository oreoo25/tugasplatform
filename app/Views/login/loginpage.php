<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 16px;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #dddddd;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            padding: 12px;
            font-size: 16px;
            border-radius: 4px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="/login/check" method="post">
            <?= csrf_field() ?>
            <label for="usr">Username:</label>
            <input type="text" name="usr" id="usr" />

            <label for="pwd">Password:</label>
            <input type="password" name="pwd" id="pwd" />

            <input type="submit" name="submit" value="Login" />
        </form>
    </div>
</body>
</html>
