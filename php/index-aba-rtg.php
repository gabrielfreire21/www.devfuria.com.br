<div class="" style="padding: 30px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li>
                        <a href="<?php echo LINKS_PATH . "/php/?" . Conteudo::SUB_SECAO_CURSO ?>">Curso</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo LINKS_PATH . "/php/?" . Conteudo::SUB_SECAO_RTG ?>">Receitas, Tutoriais e Guia de Referência</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<main class="bs-masthead" id="content" role="main">
    <div class="container">
        <h1>PHP<small> - Receitas, Tutoriais e Guia de Referência </small></h1>
    </div>
</main>
<?php
$view->lista->label = $view->lista->retLabelRtgSegundoSecao(Conteudo::SECAO_PHP);
$view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_PHP, Conteudo::SUB_SECAO_RTG);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include BASE_PATH . VIEWS_PATH . "/lista-secao.php"; ?>
        </div>
    </div>
</div>