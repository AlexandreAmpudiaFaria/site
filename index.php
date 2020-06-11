<?php



?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>
<body>

  <div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
      
      <!--<a class="navbar-brand" href="home.php">Hospital Maracaí</a>-->

      <!--<a class="navbar-brand mb-0" href="index.php"><label> <i class="fas fa-hospital-alt"></i> Hospital Maracaí</label></a>-->

      <a class="navbar-brand mb-0" href="index.php"><h4> <i class="fas fa-hospital-alt"></i> Hospital Maracaí</h4></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSite">

        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a href="index.php" class="nav-link"><i class="fas fa-home"></i> Inicio</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toogle" href="#" id="dropdownSite" data-toggle="dropdown" ><i class="fas fa-file-medical-alt"></i> Portal da Transparência</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="despesas.html">Despesas</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="formularioCadastrarCliente.php">Receitas</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="formularioCadastrarCliente.php">Licitações</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="formularioCadastrarCliente.php">Contratos</a>
            </div>
          </li>
          
        </ul>
        
      </div> 

      </br></br>


    </nav>


     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagem1.jpg" class="d-block w-100" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img src="banner.jpg" class="d-block w-100" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img src="http://maracai.sp.gov.br/uploads/noticia/9767791315673970434291538210194422869000192n.jpg" class="d-block w-100" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<nav class="navbar bottom navbar-expand-xl navbar-dark bg-primary custom">
  <!--<a class="navbar-brand" href="#">Associação Hospital Beneficente de Maracai</a>-->
  <h4>Associação Hospital Beneficente de Maracai</h4>
</nav>

    </div>

    

    

</body>
</html>