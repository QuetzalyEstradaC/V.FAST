<?php
include 'include/conecta.php';
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
            <a class="navbar-brand" href="#">V.FAST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">

          <a class="nav-link active" aria-current="page" href="#">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CATEGORIAS</a>
        </li>
        <li class="nav-item dropdown">

          <a class="nav-link" href="#">NOVEDADES</a>
        </li>
        <li class="nav-item dropdown">
          
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Accion</a></li>
            <li><a class="dropdown-item" href="#">Otra accion</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Algo mas</a></li>
          </ul>
        </li>
        </ul>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="Buscar" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
           <h1> <p style="text-align:center;"> EVENTOS DE TEMPORADA </p> </h1>
           <h5> <p style="text-align:center;"> ¿Quieres un fin de semana increible?</h5>
           <br> <div style="text-align: center;"> <img src="img/coca.jpg"> </div> 

           <br> <h2> <p style="text-align:center;"> ¡Diviertete con tus amigos! </p> </h2>
            <div class="container-card">
    
<br> <div class="card">
        <figure>
            <img src="img/bukis.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Los Buki's</h3>
            <p> sáb, 3 dic, 20:30, Estadio Azteca Calz. de Tlalpan 3465, Sta. Úrsula Coapa, Ciudad de México, CDMX</p>
            <a href="#">Más información</a>
        </div>
    </div>

    <div class="card">
        <figure>
            <img src="img/fest.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Coca Cola Flow Fest</h3>
            <p>Vie, 25 nov 05:00 – dom, 27 nov 02:00 Autódromo Hermanos Rodríguez, Viad. Río de la Piedad S/n, Granjas México, Ciudad de México, CDMX</p>
            <a href="#">Más información</a>
        </div>
    </div>

    <div class="card">
        <figure>
            <img src="img/harry.jpg">
        </figure>
        <div class="contenido-card">
            <h3>Concierto Harry Styles</h3>
            <p>JUEVES, 24 DE NOVIEMBRE DE 2022 A LAS 20:00 Harry Styles, Pits Foro Sol</p>
            <a href="#">Más información</a>
        </div>
    </div>

     <style type="text/css">
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
/*Cards*/
.container-card{
    width: 100%;
    display: flex;
    max-width: 1100px;
    margin: auto;
}
.title-cards{
    width: 100%;
    max-width: 1080px;
    margin: auto;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
    color: black;
}
.card{
    width: 100%;
    margin: 20px;
    border-radius: 6px;
    overflow: hidden;
    background:#fff;
    box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
    transition: all 400ms ease-out;
    cursor: default;
}

.card:hover{
    box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
    transform: translateY(-3%);
}
.card img{
    width: 100%;
    height: 210px;
}
.card .contenido-card{
    padding: 15px;
    text-align: center;
}
.card .contenido-card h3{
    margin-bottom: 15px;
    color: #7a7a7a;
}
.card .contenido-card p{
    line-height: 1.8;
    color: #6a6a6a;
    font-size: 14px;
    margin-bottom: 5px;
}
.card .contenido-card a{
    display: inline-block;
    padding: 10px;
    margin-top: 10px;
    text-decoration: none;
    color: #2fb4cc;
    border: 1px solid #2fb4cc;
    border-radius: 4px;
    transition: all 400ms ease;
    margin-bottom: 5px;
}
.card .contenido-card a:hover{
    background: #2fb4cc;
    color: #fff;
}


.flex-container {
  flex-wrap: wrap;
}

@media only screen and (min-width:320px) and (max-width:768px){
    .container-card1{
        flex-wrap: wrap;
    }
    .card1{
        margin: 15px;
    }
}

    </style>
  </div>
</div>
