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
