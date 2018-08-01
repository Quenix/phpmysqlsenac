<?php
    $active = 'home';
    if(isset($_GET['page'])){
        $active = $_GET['page'];
    }

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img id="logo" src="<?= baseUrlPublic('resources/logo.png') ?>" href=""></img>   
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if($active == 'home')echo 'active';  ?>">
                    <a class="nav-link" href="?page=home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if($active == 'produtos')echo 'active';  ?>">
                    <a class="nav-link" href="?page=produtos">Produtos</a>
                </li>

                <li class="nav-item <?php if($active == 'usuarios')echo 'active'; ?>">
                    <a class="nav-link" href="?page=usuarios">Usuários</a>
                </li>
            </ul>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-user"></i>

                    <?=$_SESSION['nome'];?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <!-- <a class="dropdown-item" href="#">Act</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>-->
                    <form action="?page=logout&token=<?=md5(session_id());?>" method="POST" class="dropdown-item">
                        <button type="submit"  class="btn btn-light btn-sm">
                            <i class="fas fa-sign-out-alt"></i>Sair!
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
