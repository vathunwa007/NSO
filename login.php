<?php
// reCAPTCHA secret key
define('SecretKey', '6LcNAcYUAAAAAL6cW1VXoF9BagF3YF1xalGkt8Yv');

// allowed only POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $query_params = [
    'secret' => '6LcNAcYUAAAAAOm51wJMgHvaBCjjiwP43igzZEFm',
    'response' => filter_input(INPUT_POST, 'g-recaptcha-response'),
    'remoteip' => $_SERVER['REMOTE_ADDR']
  ];
  $url = 'https://www.google.com/recaptcha/api/siteverify?' . http_build_query($query_params);
  $result = json_decode(file_get_contents($url), true);

  if ($result['success']) {
    // TODO, when reCAPTCHA verify successfully
  } else {
    // TODO, when reCAPTCHA failed
    die("reCAPTCHA failed");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<style>
.card {

    margin: auto;
    width: 450px;
    margin-top: 200px;
    border-style: solid;
    border-width: 0.5px;
    border-color: gray;
    background-color: #f8f8f8d6;
    padding: 25px 25px 25px 25px;
}

</style>
</head>

<body class="bg-light">

  <div class="container">
  <div class="card">
        <form>
            <div class="form-group">

                <img src="http://www.nso.go.th/sites/2014/_catalogs/masterpage/NSO1/img/logo.png" alt="" srcset="" width="250px" style="display:block;margin: auto;"> <br>
                <div style=" display: inline-block;">
                    <label for="exampleInputEmail1">Username &nbsp;&nbsp;&nbsp;:</label>
                </div>
                <div style=" display: inline-block;">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 290px;">
                </div>
                <small id="emailHelp" class="form-text text-muted">กรุณาใส่ชื่อชื่อ และ รหัสผ่านให้ถูกต้อง.</small>
            </div>

            <div class="form-group" style=" display: inline-block;">
                <label for="exampleInputPassword1">Password &nbsp;&nbsp;&nbsp; :</label>
            </div>
            <div class="form-group" style=" display: inline-block;">
                <input type="password" class="form-control" id="exampleInputPassword1" style="width: 290px;">
            </div>
            <center>
            <div class="col-12 form-group">
            <div class="form-label-group">
              <script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
              <div class="g-recaptcha" data-callback="makeaction" data-sitekey="6LcNAcYUAAAAAL6cW1VXoF9BagF3YF1xalGkt8Yv"></div>
            </div>            </div>
            </center>

            <div class="form-group form-check inlinediv" style="margin-top: 10px;">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember</label>
            </div>
            <div class="inlinediv float-right">
                <button type="submit" class="btn btn-secondary ">Login</button>
            </div>


        </form>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>