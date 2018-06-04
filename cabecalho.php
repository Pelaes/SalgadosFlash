
<nav class="navbar navbar-expand-xl bg-gradient-primary navbar-dark">
<div class="container">
    <a class="navbar-brand h1" href="index.php">Logotipo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <div class="mr-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a href="cardapio.php" class="nav-link">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Kit Festa</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Equipe</a>
                </li>
            </ul>
        </div>
        <div>
            <?php
            if(isset($_SESSION['logado'])){
                $nome = $_SESSION['logado'];
                echo    '<ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="dados-cadastrais.php" class="btn btn-success btn-block mb-3 mb-xl-0">Bem vindo(a) '.$nome.'</a>
                            </li>
                        </ul>';
            }
            else{
                echo    '<ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="login.php" class="btn btn-success btn-block mb-3 mb-xl-0">Entre ou cadastre-se</a>
                            </li>
                        </ul>';
            }
            ?>
        </div>
        <div class="ml-auto">
            <form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <input class="form-control mr-5 mb-3 mb-xl-0" type="text" required placeholder="Busque algo gostoso">
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-success btn-block ml-xl-4 mb-3 mb-xl-0" type="submit">Buscar</button>
                    </li>
                </ul>
            </form>
        </div>
        <div class="ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="carrinho.php" class="btn btn-outline-success mb-3 mb-xl-0 mx-sm-auto d-block">
                        <img src="imagens/carrinho.png" alt="Carrinho de compras">
                        <?php
                            if(isset($_SESSION['indice'])){
                        ?>
                                <span class="ml-1 badge badge-light"><?php echo $_SESSION['indice']?></span>
                        <?php
                            }
                        ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</nav>