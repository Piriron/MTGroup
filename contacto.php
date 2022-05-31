<!DOCTYPE html>
<html lang="en">
<link href="css/contacto.css" rel="stylesheet" type="text/css">
<head>
	<?php include 'includes/head.php';?>
</head>
<body>

    <?php $page= 'contacto'; include 'includes/navbar.php';?>

    <div class="row mt-5">
        <div class="col-12 text-center mt-5">
            <h3>Contacto</h3>
        </div>
    </div>


    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
            </section>
        </section>

        <form action="" class="form_contact">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="names">

                <label for="phone">Telefono / Celular</label>
                <input type="text" id="phone">

                <label for="email">Correo electronico *</label>
                <input type="text" id="email">

                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje"></textarea>

                <input type="button" value="Enviar Mensaje" id="btnSend">
            </div>
        </form>

    </section>


    <?php include 'includes/footer.php'; ?>

	<?php include 'includes/scripts.php'; ?>

	<script src="js/contacto.js"></script>
</body>
</html>