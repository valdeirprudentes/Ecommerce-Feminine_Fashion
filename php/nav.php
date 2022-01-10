<nav class="navbar navbar-light" style="background-color: #ffcbd9;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Feminine Fashion</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="lanc.php">Lançamentos</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="categoria.php?cat=Calça Jeans">Calça Jeans</a></li>
            <li><a href="categoria.php?cat=Blusas">Blusas</a></li>
            <li><a href="categoria.php?cat=Vestidos">Vestidos</a></li>
            <li><a href="categoria.php?cat=Conjuntos">Conjuntos</a></li>
            <li><a href="categoria.php?cat=Saias">Saias</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search" name="frmpesquisa" method="get" action="busca.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar" name="txtBuscar">
        </div>
        <button type="submit" class="btn btn-default">Pesquisar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
        <li><a href="#">Contato</a></li>

        <?php if(empty($_SESSION['ID'])) { ?>  <!-- Se estiver vazio a sessão id, mostrar menu logon-->
        <li><a href="formlogon.php"><span class="glyphicon glyphicon-log-in"></span> Logon</a></li>
        <?php } else {   // Senão estiver vazio a sessão id, verificar...

          if($_SESSION['Status'] == 0) {    // Se a sessão status valer 0 mostrar o nome do usuário
          $consulta_usuario = $cn->query("select nm_usuario from tbl_usuario where cd_usuario = '$_SESSION[ID]'");
          $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
          ?> 
          <li><a href="areauser.php"><span class="glyphicon glyphicon-user"><?php echo $exibe_usuario ['nm_usuario'];?> </a></li>
          <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>

          <?php } else { ?>   <!-- Senão a sessão id só pode valer 1, sendo assim, criar um botão -->
          <li><a href="adm.php"><button class="btn btn-sm btn-danger">Administrador</button></a></li>
          <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>

          <?php } } ?>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>