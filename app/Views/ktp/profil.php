<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
      padding-top: 50px;
    }
    .card {
      border: none;
      border-radius: 20px;
      box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }
    .card-header {
      background-color: #007bff;
      color: white;
      border-radius: 20px 20px 0 0;
      padding: 20px;
    }
    .card-body {
      padding: 20px;
    }
    .profile-picture {
      border-radius: 20%;
      object-fit: cover;
      border: 5px solid white;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card mt-5">
          <div class="card-header text-center">
            <h4>KTP</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="row mb-3">
                  <div class="col">NIK</div>
                  <div class="col">: 3275121210030001</div>
                </div>
                <div class="row mb-3">
                  <div class="col">Nama</div>
                  <div class="col">: Wilfridus Kester Leandro</div>
                </div>
                <div class="row mb-3">
                  <div class="col">Tempat/Tgl Lahir</div>
                  <div class="col">: Jakarta, 12 Oktober 2003</div>
                </div>
                <div class="row mb-3">
                  <div class="col">Jenis Kelamin</div>
                  <div class="col">: Laki-laki</div>
                </div>
              </div>
              <div class="col text-center">
                <img src="img/andro.jpg" alt="Profile Picture" class="profile-picture" width="200">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
