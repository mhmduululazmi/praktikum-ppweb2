<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Selamat Datang Di Perpustakan STT NF</h2>
        <p>Silahkan Isi Buku Tamu Di Bawah Ini</p>
        <hr>

    <form method="POST" action='kunjungan.php'>
  <div class="form-group row">
    <label for="fullname" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa "></i>
          </div>
        </div> 
        <input id="Nama" name="fullname" type="text" class="form-control" aria-describedby="NamaHelpBlock">
      </div> 
      <span id="NamaHelpBlock" class="form-text text-muted">isi nama lengkap kamu</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa "></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" aria-describedby="HelpBlock" class="form-control">
      </div> 
      <span id="HelpBlock" class="form-text text-muted">isi dengan email aktif kamu</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="message" class="col-4 col-form-label">Keperluan</label> 
    <div class="col-8">
      <textarea id="message" name="message" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

</body>
</html>

