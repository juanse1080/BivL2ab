<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="author" content="Grayrids">
  <meta id="csrf_token" name="csrf-token" content="{{ csrf_token() }}">
  <title>BivL2ab</title>

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="icon" type="image/png" href="{{asset('storage/deepsars/blank.svg')}}" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono|Roboto+Slab|Roboto:300,400,500,700" rel="stylesheet" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
  <link rel="stylesheet" href="css/line-icons.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/nivo-lightbox.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/slicknav.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
  <!-- Header Section Start -->
  <header id="hero-area" data-stellar-background-ratio="0.5">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo" style="padding: 10px;">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <!-- <a href="{{route('root')}}" class="navbar-brand">
            <img class="img-fulid" src="{{asset('img/logo.svg')}}" style="max-height:50px;max-width:60px">
          </a> -->
          <a class="navbar-brand">
            <img class="img-fulid" src="{{asset('img/logo.svg')}}" style="max-height:50px;max-width:60px">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lnr lnr-menu"></i>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#deep">DeepSARS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#description">Descripción</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#features">Caracteristicas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#team">Equipo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="#presentacion">Presentación</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="mobile-menu">
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#deep">DeepSARS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#description">Descripción</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#features">Caracteristicas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#team">Equipo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#presentacion">Presentación</a>
        </li>
      </ul>
      <!-- Mobile Menu End -->

    </nav>
    <!-- Navbar End -->
    <!-- <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-10">
          <div class="contents text-center">
            <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">DeepSARS</h1>
            <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">
              Es un sistema de aprendizaje profundo automático para la identificación temprana y seguimiento de pacientes con riesgo de síndrome de distrés respiratorio agudo
            </p>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container" id="deep">
      <div class="row justify-content-md-center">
        <div class="col-md-6">
          <div class="contents">
            <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">DeepSARS</h1>
            <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">
              Es un sistema de aprendizaje profundo automático para la identificación temprana y seguimiento de pacientes con riesgo de síndrome de distrés respiratorio agudo
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contents text-center">
            <div class="card">
              <img class="card-img-top" src="{{asset('storage/deepsars/visorCalor.jpeg')}}" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header Section End -->

  <!-- Start Video promo Section -->
  <!-- <section class="video-promo section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="video-promo-content text-center">
            <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">DeepSARS</h2>
            <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
              Es el fruto del proyecto de investigación del mismo nombre, llevado a cabo por la Universidad Industrial de Santander, la Fundación Oftalmológica de Santander FOSCAL y la Universidad Autónoma de Bucaramanga, con el apoyo del Ministerio de Ciencia, Tecnología e Innovación se logra poner al servicio de la salud de los colombianos este sistema para el diagnóstico de pacientes con Covid - 19, basado en Inteligencia Artificial
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <img class="card-img-top" src="https://bivl2ab.uis.edu.co/storage/deepsars/visor.jpg" />
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <section class="video-promo section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="video-promo-content">
            <!-- <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">DeepSARS</h2> -->

            <!-- <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">
              Es un sistema de aprendizaje profundo automático para la identificación temprana y seguimiento de pacientes con riesgo de síndrome de distrés respiratorio agudo
            </p> -->
            <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
              Fruto del proyecto de investigación del mismo nombre, llevado a cabo por la Universidad Industrial de Santander, la Fundación Oftalmológica de Santander FOSCAL y la Universidad Autónoma de Bucaramanga, con el apoyo del Ministerio de Ciencia, Tecnología e Innovación se logra poner al servicio de la salud de los colombianos este sistema para el diagnóstico de pacientes con Covid - 19, basado en Inteligencia Artificial
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-columns">
            <div class="card" style="background-color: transparent; border: 0">
              <img src="{{asset('storage/deepsars/logo-foscal.png')}}" class="card-img-top" alt="...">
            </div>
            <div class="card" style="background-color: transparent; border: 0">
              <img src="{{asset('storage/deepsars/educacion-logo-uis.png')}}" class="card-img-top" alt="...">
            </div>
            <div class="card" style="background-color: transparent; border: 0">
              <img src="{{asset('storage/deepsars/descarga.png')}}" class="card-img-top" alt="...">
            </div>
            <div class="card" style="background-color: transparent; border: 0">
              <img src="{{asset('storage/deepsars/unab.png')}}" class="card-img-top" alt="...">
            </div>
            <div class="card" style="background-color: transparent; border: 0">
              <img src="{{asset('storage/deepsars/blank.svg')}}" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Video Promo Section -->


  <!-- section news -->

  <!-- <div id="deep" class="section" data-stellar-background-ratio="0.1">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">DeepSARS</h2>
        <hr class="lines">
      </div>
      <div class="row justify-content-md-center mb-5">
        <div class="col-md-6">
          <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
            Es un sistema de aprendizaje profundo automático para la identificación temprana y seguimiento de pacientes con riesgo de síndrome de distrés respiratorio agudo.
          </p>
          <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
            El proyecto DeepSARS es desarrollado por 3 organizaciones, la Universidad Industrial de Santander, la Fundación Oftalmológica de Santander FOSCAL y la Universidad Autónoma de Bucaramanga, con el apoyo del Ministerio de Ciencia, Tecnología e Innovación se logra poner al servicio de la salud de los colombianos este sistema para el diagnóstico de pacientes con Covid - 19, basado en Inteligencia Artificial
          </p>

          <iframe style="width:100%;height:350px;overflow:hidden;" scrolling="no" src="https://bivl2ab.uis.edu.co/storage/deepsars/Portafolio_DeepSARS_02.pdf#zoom=55"></iframe>

        </div>
        <div class="col-md-6">
          <ul class="list-unstyled">
            <li class="media text-dark my-4">
              <div class="icon-deep">
                <i class="fas fa-users-cog"></i>
              </div>
              <div class="media-body">
                Administración de usuarios, asignación de roles y permisos
              </div>
            </li>
            <li class="media text-dark">
              <div class="icon-deep">
                <i class="fas fa-user-injured"></i>
              </div>
              <div class="media-body">
                Administración de pacientes y registro y actualización de su información médica a lo largo de su proceso de diagnóstico
              </div>
            </li>
            <li class="media text-dark my-4">
              <div class="icon-deep">
                <i class="fas fa-eye"></i>
              </div>
              <div class="media-body">
                Visualización y anotación de las imágenes diagnósticas. Diagnóstico de afección por Covid-19 basado en IA y nivel de precisión.
              </div>
            </li>
            <li class="media text-dark">
              <div class="icon-deep">
                <i class="far fa-chart-bar"></i>
              </div>
              <div class="media-body">
                Informe detallado de la efectividad del diagnóstico realizado por los modelos de inteligencia artificial.
              </div>
            </li>
            <li class="media text-dark my-4">
              <div class="icon-deep">
                <i class="fas fa-hands-helping"></i>
              </div>
              <div class="media-body">
                Soporte técnico y médico para los usuarios del sistema
              </div>
            </li>
            <li class="media text-dark">
              <div class="icon-deep">
              <i class="fas fa-lungs-virus"></i>
              </div>
              <div class="media-body">
                Información epidemiológica del COVID-19
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <a href="{{route('news.index')}}" class="btn btn-common">
          ver mas
        </a>
      </div>
    </div>
  </div> -->
  <div id="description" class="section" data-stellar-background-ratio="0.1">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
            La Inteligencia Artificial ha mostrado ser una herramienta de apoyo confiable en el diagnóstico de enfermedades.
          </p>
          <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
            Para el COVID - 19 el mundo requiere de una alternativa que no se vea afectada por la manipulación de las muestras que ayudan a determinar el diagnóstico y que éste diagnóstico pueda ser realizado en estadíos tempranos de la enfermedad.
          </p>
          <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
            DeepSARS es un sistema basado en aprendizaje profundo que través de modelos convolucionales analiza características del pulmón tales como opacidad, consolidación, derrame pleural y edema, mostradas por imágenes de Rayos X y Tomografías computacionales para determinar si un paciente está afectado por COVID 19 o no.
          </p>
        </div>
      </div>
    </div>
  </div>

  <section class="video-promo section" id="features">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Caracteristicas</h2>
        <hr class="lines">
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card-columns">
            <div class="card pointer">
              <a class="page-scroll" href="#administracion">
                <div class="icon-card">
                  <i class="fas fa-users-cog"></i>
                </div>
                <div class="card-body text-dark">
                  Administración de usuarios, asignación de roles y permisos
                </div>
              </a>
            </div>
            <div class="card pointer">
              <a class="page-scroll" href="#paciente">
                <div class="icon-card">
                  <i class="fas fa-user-injured"></i>
                </div>
                <div class="card-body text-dark">
                  Administración de pacientes y registro y actualización de su información médica a lo largo de su proceso de diagnóstico
                </div>
              </a>
            </div>
            <div class="card pointer">
              <a class="page-scroll" href="#show">
                <div class="icon-card">
                  <i class="fas fa-eye"></i>
                </div>
                <div class="card-body text-dark">
                  Visualización y anotación de las imágenes diagnósticas. Diagnóstico de afección por Covid-19 basado en IA y nivel de precisión
                </div>
              </a>
            </div>
            <div class="card pointer">
              <a class="page-scroll" href="#anality">
                <div class="icon-card">
                  <i class="far fa-chart-bar"></i>
                </div>
                <div class="card-body text-dark">
                  Informe detallado de la efectividad del diagnóstico realizado por los modelos de inteligencia artificial
                </div>
              </a>
            </div>
            <div class="card pointer">
              <a class="page-scroll" href="#support">
                <div class="icon-card">
                  <i class="fas fa-hands-helping"></i>
                </div>
                <div class="card-body text-dark">
                  Soporte técnico y médico para los usuarios del sistema
                </div>
              </a>
            </div>
            <div class="card pointer">
              <a class="page-scroll" href="#data">
                <div class="icon-card">
                  <i class="fas fa-lungs-virus"></i>
                </div>
                <div class="card-body text-dark">
                  Información epidemiológica del COVID-19
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="administracion" class="video-promo section" data-stellar-background-ratio="0.1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="video-promo-content">
            <h2 class="wow zoomIn mb-4" data-wow-duration="1000ms" data-wow-delay="100ms">Módulo Administración</h2>

            <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
              Permite la administración de los usuarios de DeepSARS mediante la asignación de roles de acuerdo con la interacción requerida por el usuario con el sistema
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <img src="{{asset('storage/deepsars/administracion.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="paciente" class="section" data-stellar-background-ratio="0.1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <img src="{{asset('storage/deepsars/paciente.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-md-6">
          <div class="video-promo-content">
            <h2 class="wow zoomIn mb-4" data-wow-duration="1000ms" data-wow-delay="100ms">Módulo de Información Médica</h2>

            <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
              Este módulo le permite a la institución de salud administrar los pacientes haciendo su registro y el control de sus antecedentes, signos, síntomas, alteraciones, registro y almacenamiento de ayudas diagnósticas: laboratorio clínico e imágenes diagnósticas.
              Visualilzar el informe de laboratorio guardado
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="show" class="video-promo section" data-stellar-background-ratio="0.1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="video-promo-content">
            <h2 class="wow zoomIn mb-4" data-wow-duration="1000ms" data-wow-delay="100ms">Módulo de Visualización</h2>

            <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
              Ofrece la posibilidad de recorrer los estudios e instancias de imágenes diagnósticas asociadas a un paciente para hacer su análisis, manipular sus propiedades visuales, realizar algunas anotaciones y obtener la predicción del diagnóstico del COVID - 19 utilizando modelos de inteligencia artificial. También permite generar mapas de calor que determinan la zona seleccionada por el modelo para hacer la predicción
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <img class="card-img-top" src="{{asset('storage/deepsars/visor.jpg')}}" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="anality" class="section" data-stellar-background-ratio="0.1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <img src="{{asset('storage/deepsars/19.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-md-6">
          <div class="video-promo-content">
            <h2 class="wow zoomIn mb-4" data-wow-duration="1000ms" data-wow-delay="100ms">Módulo de Analítica IA</h2>

            <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
              Ofrece un informe detallado de la efectividad de la predicción de diagnóstico COVID-19 realizado por los modelos de inteligencia artificial
            </p>
            <div class="card mt-5">
              <img src="{{asset('storage/deepsars/23.png')}}" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="support" class="video-promo section" data-stellar-background-ratio="0.1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="video-promo-content">
            <h2 class="wow zoomIn mb-4" data-wow-duration="1000ms" data-wow-delay="100ms">Módulo de Soporte</h2>

            <h6 class="mb-2 wow zoomIn h4">Soporte Técnico</h6>
            <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
              Permite ayudar al usuario del sistema con cualquier inquietud o inconveniente que se presente en el uso del sistema
            </p>

            <h6 class="mb-2 wow zoomIn h4 mt-2">Soporte Médico</h6>
            <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
              Se ofrece al personal de salud la asistencia de un médico especialista en diagnóstico de pacientes: análisis de las imágenes, el módulo de analítica de datos y los niveles de precisión con que se ha hecho el diagnóstico
            </p>
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <img class="card-img-top" src="{{asset('storage/deepsars/support1.png')}}" />
          </div>
          <div class="card mt-3">
            <img class="card-img-top" src="{{asset('storage/deepsars/soport.png')}}" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="data" class="section" data-stellar-background-ratio="0.1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="card">
            <img src="{{asset('storage/deepsars/25.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="{{asset('storage/deepsars/26.png')}}" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-md-6">
          <div class="video-promo-content">
            <h2 class="wow zoomIn mb-4" data-wow-duration="1000ms" data-wow-delay="100ms">Módulo Epidemiología</h2>

            <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
              Informativo para que el médico pueda ver la evolución de la epidemia de COVID - 19 a nivel nacional, departamental y municipal
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="video-promo section" id="team">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="video-promo-content">
            <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Equipo de desarrollo</h2>
            <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
              El proyecto DeepSARS es desarrollado por 3 organizaciones santandereanas: la Universidad Industrial de Santander, UIS, la Fundación Oftalmológica de SAntander, Foscal, y la escuela de radiología de la Universidad Autónoma de Bucaramanga, UNAB. Cada una desde su disciplina ha aportado el conocimiento de diferentes profesionales
            </p>
            <p style="font-size:10rem" class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">
              El equipo está conformado por 4 investigadores del área de ingeniería, uno del área de la matemática y dos del área de la salud, que cuentan con el apoyo de 13 personas entre radiólogos, médicos, ingenieros biomédicos de sistemas, además de 6 estudiantes de pregrado, dos estudiantes de doctorado y uno de maestría
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-columns">
            <div class="card" style="background-color: transparent; border: 0">
              <img src="{{asset('storage/deepsars/logo-foscal.png')}}" class="card-img-top" alt="...">
            </div>
            <div class="card" style="background-color: transparent; border: 0">
              <img src="{{asset('storage/deepsars/educacion-logo-uis.png')}}" class="card-img-top" alt="...">
            </div>
            <div class="card" style="background-color: transparent; border: 0">
              <img src="{{asset('storage/deepsars/unab.png')}}" class="card-img-top" alt="...">
            </div>
            <div class="card" style="background-color: transparent; border: 0">
              <img src="{{asset('storage/deepsars/blank.svg')}}" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="presentacion" class="section" data-stellar-background-ratio="0.1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <iframe style="width:100%;height:350px;overflow:hidden;" scrolling="no" src="{{asset('storage/deepsars/Portafolio_DeepSARS_02.pdf#zoom=55')}}"></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section Start -->
  <footer>
    <div class="container">
      <div class="row">
        <!-- Footer Links -->
        <div class="col-lg-6 col-sm-6 col-xs-12">
          <div class="copyright">
            <p>All copyrights reserved &copy; 2018 - Designed & Developed by <a rel="nofollow" href="https://uideck.com">UIdeck</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top">
    <i class="lnr lnr-arrow-up"></i>
  </a>

  <div id="loader">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div>

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/jquery-min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mixitup.js"></script>
  <script src="js/nivo-lightbox.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/scrolling-nav.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.vide.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/form-validator.min.js"></script>
  <script src="js/contact-form-script.js"></script>
  <script src="js/main.js"></script>
  <script>
    $('form').submit(function(e) {
      e.preventDefault()
      const email = $('#email').val();
      const password = $('#password').val();
      $.ajax({
        type: 'POST',
        url: "{{route('login')}}",
        data: {
          _token: $('#csrf_token').attr('content'),
          email,
          password
        },
        success: function(data) {
          console.log(data);
          if (data.state) {
            location.pathname = '/home';
          } else {
            $('#email').addClass('is-invalid')
            $('#password').addClass('is-invalid')
            $('#password_error').html(data.msg);
            $('#email_error').html(data.msg);
          }
        },
        error: function() {
          $('#email').addClass('is-invalid')
          $('#password').addClass('is-invalid')
          $('#password').html('Something went wrong. Try again.');
        }
      });
    });
  </script>

</body>

</html>
