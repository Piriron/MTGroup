<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
</head>
<body>
	
	<?php $page = 'home'; include 'includes/navbar.php';?>

	<!--- Image Slider -->
	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="img/banner1.jpg"></div>
			<div class="carousel-item"><img src="img/banner2.jpg"></div>
			<div class="carousel-item"><img src="img/banner3.jpg"></div>
		</div>
	</div>
	<!--- End Image Slider -->

	<!--- Complete Bootstrap Course -->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>Sobre nosotros</h2>
				<p class="lead">Somos una web especializada en la musica con el fin de clasificarla y guiar a los niños junto con sus padres el aprendizaje de instrumentos musicales que sean mas de su gusto y asi poder despertar su interes a traves de clases, mentorias musicales y coach</p>
			</div>
		</div>
	</div>
	<!--- Complete Bootstrap Course -->

	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">Nuestros Servicios</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/coaching.png">
						<h3>Coaching</h3>
						<p>Guía a desarrollar plenamente en el mundo de la música, adaptándose a nuevas tendencias y cumpliendo las metas del coachee (alumno)</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/profesor.jpg">
						<h3>Clases</h3>
						<p> Se les enseñará, se les darán consejos y se les acompañará, además de entregarles la plataforma necesaria para llevar su música a donde ellos quieran hacerlo.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/mentoria.jpg">
						<h3>Mentoria</h3>
						<p>Las mentorías versan sobre industria musical, derechos de autor, el proceso creativo, organización de grandes eventos, los conciertos en directo o la imagen y marca personal, entre otros temas.</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<div class="container">
	<h2 class="text-center pt-5 pb-3">Team</h2>
        <br><br>
        <div class="row justify-content-center text-center">
    
        <div class="row mt-5">
        <div class="col-12 text-center mt-5">
        </div>

    </div>
    
    <div class="col-md-2">
    
<div class="card">
    <img class="card-img-top" src="img/1.png" alt="">
    <div class="card-body">
        <h4 class="card-title">Eyliana Pérez</h4>
        <p class="card-text">Profesora de Instrumento de Cuerda</p>
        <a>eylianaperez@gmail.com</a>
    </div>
</div>

</div>
<div class="col-md-2">
    
<div class="card">
    <img class="card-img-top" src="img/2.jpg" alt="">
    <div class="card-body">
        <h4 class="card-title">Manu López</h4>
        <p class="card-text">Profesor de Instrumento de Viento</p>
        <a>manulopez@gmail.com</a>
    </div>
</div>

</div><div class="col-md-2">
    
    <div class="card">
        <img class="card-img-top" src="img/3.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title">Ale Brukman</h4>
            <p class="card-text">Profesor de Instrumento de Percusión</p>
            <a>alebrukman@gmail.com</a>
        </div>
    </div>
    
    </div><div class="col-md-2">
    
    <div class="card">
        <img class="card-img-top" src="img/4.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title">Eddie Warboy</h4>
            <p class="card-text">Profesor de Instrumento Electrónico</p>
            <a>eddiewarboy@gmail.com</a>
        </div>
    </div>
    
    </div><div class="col-md-2">
    
    <div class="card">
        <img class="card-img-top" src="img/5.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title">Christian Vib</h4>
            <p class="card-text">Profesor de Canto</p>
            <br>
            <a>christianvib@gmail.com</a>
        </div>
    </div>
    
    </div>
	<!--- End Two Column Section -->
	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/scripts.php'; ?>

</body>
</html>
