<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="#">Página Pessoal</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="perfil.php">
                        <i class="fas fa-user"></i>
                        <?php
                            //require "../php/utils/utils.php";
                            //$userFirstName = Utils::fullNameToFirstName($user["nome"]);
                        ?>
                        <p>Olá, <?php //echo $userFirstName; ?></p>
                    </a>
                </li>
                <li>
                    <a href="../php/auth/logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Sair</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
