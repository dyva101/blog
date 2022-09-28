<?php
    session_start();

    date_default_timezone_set('America/Sao_Paulo');
?>

<div class="card">
    <div class="card-header">
        <h1> Projeto Blog em PHP + MySQL IFSP - DYVA </h1>
    </div>
    <?php if (isset($_SESSION['login'])): ?>
    <div class="card-body text-right">
        Olá <?php echo $_SESSION['login']['usuario']['nome']?>!
        <a href="core/usuario_repositorio.php?acao=logout"
        class="btn btn-link btn-sm" role="button">Sair</a>
    </div>
    <?php endif ?>
</div>