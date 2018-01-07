<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Jessy Maia Oficial</title>

    <!-- font google -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="js/script.js"></script>

  <link rel="shortcut icon" href="image/icon.png" />

    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">
    <link href="../css/adm.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <nav class="navbar reset navbar-inverse">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed"
                data-toggle="collapse" data-target="#barra-navegacao">
          <span class="sr-only">Alternar Menu</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand" id="title">Jessy Maia</a>
      </div>

      <div class="collapse navbar-collapse" id="barra-navegacao">

        <ul class="nav navbar-nav navbar-right " id="color">
          <p>EDITAR</p>
          <li > <a href="index.php">Home</a> </li>
          <li> <a href="#">Currículo</a> </li>
          <li> <a href="#">Vídeos</a> </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="dropdownFoto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Fotos <span class="caret"></span>
            </a>
              <ul class="dropdown-menu"  aria-labelledby="dropdownFoto">
              <li> <a class="dropdown-item" href="#">Book</a> </li>
              <li> <a class="dropdown-item" href="#">Making Of</a> </li>
              <li> <a class="dropdown-item" href="#">Teatro</a> </li>
            </ul>

          <li> <a href="#">Contato</a> </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Logar  <span class="caret"></span>
            </a>
              <form method="" action="" class="dropdown-menu" id="form_login" aria-labelledby="dropdown">
                <input class="dropdown-item" type="text" value="" placeholder="Login"/>
                <input class="dropdown-item" class="form-control" type="password" value="" placeholder="Senha"/>
                <input type="submit" value="Logar" class="btn btn-primary" >
              </form>
          </li>

        </ul>

      </div>

    </div>
  </nav>

  <?php include "../include/footer.php"?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
</body>
