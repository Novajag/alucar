<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="..\stylo.css?v=2">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<title></title>
  <style type="text/css">
    .menu-1{

     right: 20000em;
     transition: 0.4s;
  }
 .menu2-1{
  left: 50px;
  transition: 0.5s;
 }
  .li-m{
    list-style: none;
  } 
  #m1{
     background:#F5F5F5;
     height: 5em;
     width: 11em; 
     transition: 0.5;
  }
  </style>
</head>
<body>
<nav class=" rounded nav-index navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/dashboard/site/inicio.php#"><img src="http://localhost/dashboard/site/img/logo.png" style="width:70px; height: 60px;" ></a>
    <button class="border border-0 navbar-toggler" type="button">
      <span class="material-symbols-outlined">reorder</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         <button onclick="trocarM(m1)" class="btn btn-light boton- p-1 " id="bm-1"> 
          <a class="nav-link active" aria-current="page" href="#"><span class="material-symbols-outlined">person</span></a></button>
          <div class="menu-1 position-absolute contain text-center z-3" style="" id="m1" >
            <div>
              <div class="li-m" >
                <?php
                 $username = $_SESSION['username'];
                 echo "<h6> " . htmlspecialchars($username) . "</h6>"; 
                 ?>
              </div>
              <div class="li-m">
                <a href="http://localhost/dashboard/site/config/fechar.php"><button class="btn btn-dark">fechar Sessão</button></a>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/dashboard/site/musados/agendas1.php#">sua agenda</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" aria-disabled="true">mais procurados</a>
        </li>
      </ul>
      <form action="http://localhost/dashboard/site/musados/agendas.php" method="post" class="d-flex" role="search">
        <input class="form-control me-2" type="texto" name="procurar" placeholder="Procurar" aria-label="Search">
        <button class="btn btn-dark" type="submit">Procurar</button>
      </form>
    </div>
  </div>
</nav>
<script type="text/javascript">
  var m1 = document.getElementById('m1')
 

  function trocarM (m1) {
    if (m1.classList.contains('menu-1')) {
      m1.classList.remove('menu-1');
      m1.classList.add('menu2-1');

    }
     else{
      m1.classList.remove('menu2-1');
      m1.classList.add('menu-1');

     }
    // body...
  }
</script> 
</body>
</html>