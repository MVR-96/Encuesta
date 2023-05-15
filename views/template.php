<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Encuenta</title>

	<!-- Google font -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />

	<!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="pluging/css/encuesta.css"/>

  <!-- css SweetAlert -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5"><b>ENCUESTA DE SATISFACCIÓN</b></h5>
            <form method="post" action="controllers/post.DatosEncuesta.php" id="encuesta">
              <div class="form-floating mb-3">
                <?php include 'modules/pregunta1.php';?>
              </div>

              <div class="form-floating mb-3">
			  	      <?php include 'modules/pregunta2.php';?>
              </div>

              <div class="form-floating mb-3">
			  	      <?php include 'modules/pregunta3.php';?>
              </div>

              <div class="form-floating mb-3">
			  	      <?php include 'modules/pregunta4.php';?>
              </div>

              <div class="form-floating mb-3">
                <?php include 'modules/pregunta5.php';?>
                    </div>

              <div class="form-floating mb-3">
                <?php include 'modules/pregunta6.php';?>
                    </div>

              <div class="form-floating mb-3">
                <?php include 'modules/pregunta7.php';?>
              </div>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" value="Enviar" type="submit" onclick="validarCombo(); validarCombo2(); validarCombo3(); showPopup()">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script> <!-- libreria SweetAlert -->  
  <script src="pluging/js/validaCombo.js"></script>
  <script src="pluging/js/popup.js"></script>
</body>
</html>