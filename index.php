<?php

$nombre = 200;
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $chiffre = $_POST['chiffre'];
    if (!empty($chiffre)) {
        if ($chiffre > $nombre) {
            $message = '<div class="alert warning-alert">
                            <h3>Trop haut </h3>
                            <a class="close">&times;</a>
                        </div>';
        } elseif ($chiffre < $nombre) {
            $message = '<div class="alert warning-alert">
                            <h3>Trop bas</h3>
                            <a class="close">&times;</a>
                        </div>';
        } else {
            $message = '<div class="alert success-alert">
                            <h3>Nombre trouvée</h3>
                            <a class="close">&times;</a>
                        </div>';
            unset($nombre);
        }
    } else {
            $message = '<div class="alert danger-alert">
                            <h3>Veillez rentrer un nombre</h3>
                            <a class="close">&times;</a>
                        </div>';
    }
}
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeux - Juste Prix</title>

    <link rel="stylesheet" type="text/css" href="css/master.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
    
<div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="contact100-form validate-form"  method="POST">
					<span class="contact100-form-title">
						Juste Prix
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="chiffre" placeholder="Nombre">
						<span class="focus-input100"></span>
					</div>
					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">
							Tester le nombre
						</button>
					</div>
                    <?= $message ?>
				</form>
			</div>
		</div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script> 
$(".close").click(function() {
  $(this)
    .parent(".alert")
    .fadeOut();
});
</script>


</body>
</html>
