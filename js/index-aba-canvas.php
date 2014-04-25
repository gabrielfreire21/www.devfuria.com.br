<div class="" style="padding: 30px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li>
                        <a href="<?php echo LINKS_PATH . "/js/?" . Conteudo::SUB_SECAO_CURSO ?>">Curso</a>
                    </li>
                    <li>
                        <a href="<?php echo LINKS_PATH . "/js/?" . Conteudo::SUB_SECAO_RTG ?>">Receitas, Tutoriais e Guia de Referência</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo LINKS_PATH . "/js/?canvas" ?>">Canvas</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<main class="bs-masthead" id="content" role="main">
    <div class="container">
        <h1>Javascript<small> - Canvas</small></h1>
        
        <p>O Canvas é um elemento da especificação HTML5.</p>
        
        <p>Obviamente, junto com o elemento, temos a API Canvas (funções que manipulam o elemento canvas).</p>
        
        <p>O Canvas é uma tela de bitmap que você pode desenhar e dar animação para o que quiser.</p>
        
        <p>O limite é seu conhecimento e sua imaginação.</p>
        
        <p>Então? Vamos quebrar esses limites?</p>
        
    </div>
</main>
<?php
$view->lista->label = $view->lista->retLabelSubsecaoCanvas();
$view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_JS, Conteudo::SUB_SECAO_CANVAS);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include BASE_PATH . VIEWS_PATH . "/lista-secao.php"; ?>
        </div>
    </div>
</div>