<?php
/**
 *
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/math-random-numero-randomico-em-javascript/");
$view->secoes[Conteudo::SECAO_JS]['href'] = "js/?" . "canvas";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/head.php"; ?>
    </head>
    <body class="">
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/nav-top.php"; ?>

        <!-- Matéria -->
        <div class="container">
            <div class="row">

                <!-- Título -->
                <div class="" id="content">
                    <div class="container">
                        <h1>Tamanho das linhas <code>lineWidth</code></h1>
                    </div>
                </div>

                <blockquote>
                    <p>
                        Esse atributo destina-se a definir a espessura das linhas, em pixel, do elemento gráfico criado.
                        Os valores possíveis são os números inteiros. Não sendo definida a espessura com uso desse
                        atributo, o padrão é zero e a linha não será visualizada.
                    </p>
                    <small>Maujor (HTML5 - A linguagem de marcação que revolucionou a web, pag 145)</small>
                </blockquote>

                <p>Errado 2x.</p>

                <p>O valor padrão parece ser 1px e não zero.</p>

                <p>E o valores menores que 1 (fracionários) são válidos também.</p>

                <blockquote>
                    O atributo dá a largura das linhas. Se consultado, ele deve retornar o valor atual. Por definição,
                    zero, valores negativos, infinito e NaN devem ser ignorados, deixando o valor inalterado.
                    <small>
                        Fonte:
                        <a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/the-canvas-element.html#dom-context-2d-linewidth" title="link-externo">whatwg</a>
                    </small>
                </blockquote>

                <p>Consultando o valor de <code>lineWidth</code> ele realmente é por padrão <code>1px</code>.</p>

                <!-- Corpo da matéria -->
                <div class="col-md-12" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>lineWidth</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex01' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex01');
                                    var context = canvas.getContext('2d');

                                    context.moveTo(60, 60);
                                    context.lineTo(240, 60);
                                    context.lineWidth = 2;
                                    context.stroke();
                                </script>

                            </div>
                            <div class="col-md-8">
                                <p></p>

                                <pre><code class="language-javascript">var canvas = document.getElementById('ex01');
var context = canvas.getContext('2d');

context.moveTo(60, 60);
context.lineTo(240, 60);
context.lineWidth = 2;
context.stroke();
</code></pre>
                            </div>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>O tamanho padrão</h2>
                        </div>

                        <p>Parece que o padrão da largura da linha é 1.</p>

                        <p>Quando omitimos a propriedade prevalece o tamanho padrão 1px.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex02' width='300' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex02');
                                    var context = canvas.getContext('2d');

                                    context.beginPath();
                                    context.moveTo(60, 50);
                                    context.lineTo(200, 50);
                                    context.stroke();

                                    context.beginPath();
                                    context.moveTo(60, 60);
                                    context.lineTo(200, 60);
                                    context.lineWidth = 1;
                                    context.stroke();
                                </script>
                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(60, 50);
context.lineTo(200, 50);
context.stroke();

context.beginPath();
context.moveTo(60, 60);
context.lineTo(200, 60);
context.lineWidth = 1;
context.stroke();
</code></pre>
                            </div>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Tamanho menores que 1px</h2>
                        </div>

                        <p>O tamanho menor que 1 funciona.</p>

                        <p>Mas repare que precisamos chamar o método <code>beginPath()</code>, sem ele o esquema não funciona.</p>

                        <p>Repare também que há um degradê na linha.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <canvas id='ex03' width='300' height='150'>Canvas not supported</canvas>
                                <script>
                                    var canvas = document.getElementById('ex03');
                                    var context = canvas.getContext('2d');
                                    context.beginPath();
                                    context.moveTo(60, 50);
                                    context.lineTo(200, 50);
                                    context.lineWidth = 0.1;
                                    context.stroke();

                                    context.beginPath();
                                    context.moveTo(60, 60);
                                    context.lineTo(200, 60);
                                    context.lineWidth = 0.3;
                                    context.stroke();

                                    context.beginPath();
                                    context.moveTo(60, 70);
                                    context.lineTo(200, 70);
                                    context.lineWidth = 0.5;
                                    context.stroke();

                                    context.beginPath();
                                    context.moveTo(60, 80);
                                    context.lineTo(200, 80);
                                    context.lineWidth = 1;
                                    context.stroke();
                                </script>
                            </div>
                            <div class="col-md-8">
                                <pre><code class="language-javascript">var canvas = document.getElementById('ex02');
var context = canvas.getContext('2d');

context.beginPath();
context.moveTo(60, 50);
context.lineTo(200, 50);
context.lineWidth = 0.1;
context.stroke();

context.beginPath();
context.moveTo(60, 60);
context.lineTo(200, 60);
context.lineWidth = 0.3;
context.stroke();

context.beginPath();
context.moveTo(60, 70);
context.lineTo(200, 70);
context.lineWidth = 0.5;
context.stroke();

context.beginPath();
context.moveTo(60, 80);
context.lineTo(200, 80);
context.lineWidth = 1;
context.stroke();
</code></pre>
                            </div>
                        </div>
                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/refers/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>