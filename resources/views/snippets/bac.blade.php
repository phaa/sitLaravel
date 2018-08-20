<li <?php if($path == "perfil.php"){  echo $activeSnippet;  } ?> >
    <a href="perfil.php">
        <i class="fas fa-user"></i>
        <p>Perfil</p>
    </a>
</li>

<li <?php if($path == "submissoes.php"){  echo $activeSnippet;  } ?> >
    <a href="submissoes.php">
        <!--i class="fas fa-cloud-upload-alt"></i-->
        <i class="fas fa-paperclip"></i>
        <p>Submissões</p>
    </a>
</li>

<li <?php if($path == "inscricoes.php"){  echo $activeSnippet;  } ?> >
    <!--<a href="inscricoes.php">-->
    <a href="#">
        <i class="fas fa-check"></i>
        <p>Inscrições</p>
    </a>
</li>

<li <?php if($path == "certificados.php"){  echo $activeSnippet;  } ?> >
    <!--<a href="certificados.php">-->
    <a href="#">
        <i class="fas fa-file-alt"></i>
        <p>Certificados</p>
    </a>
</li>

<hr/> <!-- HR padrão -->

<?php if($user['is_voluntario'] == 1): ?>
    <p class="text-center" style="color: #f2545f;">
        Divulgação
    </p>
    <li <?php if($path == "administracao_divulgacao.php"){  echo $activeSnippet;  } ?> >
        <!--<a href="certificados.php">-->
        <a href="administracao_divulgacao.php">
            <i class="fas fa-bullhorn"></i>
            <p>Divulgação</p>
        </a>
    </li>
    <hr/>
<?php endif; ?>

<?php if($user['is_credenciador'] == 1): ?>
    <p class="text-center" style="color: #f2545f;">
        Credenciamento
    </p>
    <li <?php if($path == "credenciamento_participantes.php"){  echo $activeSnippet;  } ?> >
        <a href="credenciamento_participantes.php">
            <i class="far fa-id-badge"></i>
            <p>Participantes</p>
        </a>
    </li>
    <hr />
<?php endif; ?>

<?php if($user['is_avaliador'] == 1): ?>
    <p class="text-center" style="color: #f2545f;">
            Avaliação
    </p>
    <li <?php if($path == "avaliacao_artigo.php"){  echo $activeSnippet;  } ?> >
        <a href="avaliacao_artigo.php">
            <i class="far fa-edit"></i>
            <p>Artigo</p>
        </a>
    </li>
    <li <?php if($path == "avaliacao_minicursos.php"){  echo $activeSnippet;  } ?> >
        <a href="avaliacao_minicursos.php">
            <i class="fas fa-chalkboard-teacher"></i>
            <p>Minicursos</p>
        </a>
    </li>
    <hr />
<?php endif; ?>

<?php if($user['is_admin'] == 1): ?>
    <p class="text-center" style="color: #f2545f;">Administração</p>
    <li <?php if($path == "administracao.php"){  echo $activeSnippet;  } ?> >
        <a href="administracao.php">
            <i class="fas fa-chart-bar"></i>
            <p>Início</p>
        </a>
    </li>
    <li <?php if($path == "administracao_usuarios.php"){  echo $activeSnippet;  } ?> >
        <a href="administracao_usuarios.php">
            <i class="fas fa-users"></i>
            <p>Usuários</p>
        </a>
    </li>
    <li <?php if($path == "administracao_usuarios_externos.php"){  echo $activeSnippet;  } ?> >
        <a href="administracao_usuarios_externos.php">
            <i class="fab fa-mandalorian"></i>
            <p>Usuários Externos</p>
        </a>
    </li>
    <li <?php if($path == "administracao_minicursos.php"){  echo $activeSnippet;  } ?> >
        <a href="administracao_minicursos.php">
            <i class="fas fa-chalkboard-teacher"></i>
            <p>Minicursos</p>
        </a>
    </li>
    <li <?php if($path == "administracao_divulgacao.php"){  echo $activeSnippet;  } ?> >
        <a href="administracao_divulgacao.php">
            <i class="fas fa-bullhorn"></i>
            <p>Divulgação</p>
        </a>
    </li>
    <hr />
<?php endif; ?>
