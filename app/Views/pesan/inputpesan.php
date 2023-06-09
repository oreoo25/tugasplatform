<!DOCTYPE html>
<html>
<head>
    <title>Tampilan PHP Keren</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Pesan</h1>
        <form method="post" action="/Pesan/submit" class="row g-2">
            <div class="col-auto">
                <label for="pesan" class="sr-only">Pesan</label>
                <input type="text" name="pesan" class="form-control" id="pesan" placeholder="Masukkan pesan">
            </div>
            <div class="col-auto">
                <input name="button" type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
