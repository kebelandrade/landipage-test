<?php

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">

<html>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="http://localhost:8000/index1.php">ITDZ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="http://localhost:8000/home.php">Home <span class="sr-only"></span></a>
            <a class="nav-link" href="http://localhost:8000/login/index.php">Iniciar Sesión</a>
        </div>
    </div>
</nav>

<body>
<section>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style=" height: 720px">
            <div class="carousel-item active">
                <img src="img/brooke-cagle-g1Kr4Ozfoac-unsplash.jpg"
                     style="filter: brightness(0.3)"
                     class="d-block w-100"
                     alt="...">
                <div class="carousel-caption d-none d-md-block"
                     style="height: 750px">
                    <h1>El Instituto Técnico Digital Zolver</h1>
                    <h2>Ofrecemos una plataforma de trabajo estable</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/annie-spratt-QckxruozjRg-unsplash.jpg" class="d-block w-100"
                     style="filter: brightness(0.3)"
                     alt="...">
                <div class="carousel-caption d-none d-md-block" style="height: 750px">
                    <h1>ITDZ</h1>
                    <h2>Con un buen ambiente de trabajo para los alumnos</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/national-cancer-institute-N_aihp118p8-unsplash.jpg" class="d-block w-100"
                     style="filter: brightness(0.3)"
                     alt=" ...">
                <div class="carousel-caption d-none d-md-block" style="height: 750px">
                    <h1>Maestro Capacitados</h1>
                    <h2>Para dar las clases en esta nueva modalidad Online</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


<section>

    <div class="jumbotron">
        <h1 class="display-4">Tenemos plataforma Moodle para las tareas y exámenes</h1>
        <p class="lead">Moodle es una plataforma gratis que ayuda a simplificar los trabajos tanto para
            maestros como estudiantes.</p>
        <hr class="my-4">
        <p>¡Ingresa a Moodle para realizar tus trabajos!</p>
        <a class="btn btn-primary btn-lg" href="http://localhost:8000/login/index.php"
           role="button">Ingresar</a>
    </div>

</section>


<section class="seccion">

    <div class="contenedor">
        <div class="cartas">
            <div class="caja">
                <div class="contenido">
                    <h2>01</h2>
                    <img src="img/student_3540.png" style="height: 120px; width: 129px">
                    <h3>+10,000</h3>
                    <p>Alumnos Inscrito</p>
                </div>
            </div>
        </div>

        <div class="cartas">
            <div class="caja">
                <div class="contenido">
                    <h2>02</h2>
                    <img src="img/12_students.png" style="height: 120px; width: 129px">
                    <h3>+300</h3>
                    <p>Maestros Capacitados.</p>
                </div>
            </div>
        </div>

        <div class="cartas">
            <div class="caja">
                <div class="contenido">
                    <h2>03</h2>
                    <img src="img/School-PNG-Image-File.png" style="height: 119px; width: 129px" alt="">
                    <h3>Fundado en 2001</h3>
                    <p>El Instituto Técnico Digital Zolver fue fundado en 2001, y sigue en pie hasta el momento.</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Acerca de nosotros</h1>
            <p class="lead">Somos una institución técnica que ofrece las carreras técnicas como: Regrigeración,
                Mécanica, Soldadura y Maderas. Estamos en Servicio desde 2009, contamos con más de 2,500 estudiantes
                y más de 300 maestros con dos jornadas.</p>

            <p class="lead"></p>
        </div>
    </div>

</section>

<footer style="display: flex; text-align: center; justify-content: center">
    <p class="lead">ITDZ© 2020</p>
</footer>

</body>

</html>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

<script>
    $('.carousel').carousel({
        interval: 5000
    })
</script>
