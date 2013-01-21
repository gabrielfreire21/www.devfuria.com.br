<h1>Um bom começo</h1>

<p><em>PHP é uma linguagem de programação para uso geral</em>. Inicialmente, projetada por Rasmus Lerdorf na década de 1990, tinha
    como objetivo principal contar as visitas que eram realizadas em seu currículo on-line. Atualmente (2012) é utilizada,
    principalmente para construir aplicações web. Entende-se por aplicações web (às vezes abreviado para “webapp” ou
    simplesmente “app´s”) programas ou softwares escritos para rodarem na plataforma web, no modelo cliente/servidor.</p>

<p>Um pequeno site pode se beneficiar de uma linguagem do lado do servidor. Um formulário de envio de contato , um portal
    de internet, um software gerenciador de email (o Gmail da Google ou o e-mail do Yahoo, por exemplo), um site do tipo
    E-comerce e muitos outros sistemas também utilizam-se de linguagem do lado do servidor. Nem toda aplicação web precisa
    ser destinada a Internet. Programas como a Intranet de uma empresa, softwares comerciais e de gestão nem sempre estão
    publicados na Internet, rodam apenas na rede interna da organização.</p>

<p>Em apenas dois parágrafos surgiram termos essenciais e importantes:</p>

<ul>
    <li>Linguagem de programação do lado do servidor</li>
    <li>Modelo cliente/servidor</li>
    <li>Aplicações Web (webapp, app´s)</li>
    <li>Sistemas</li>
    <li>Software</li>
    <li>Programas</li>
</ul>

<p>Outros termos surgirão e com o tempo esses conceitos irão se tornam mais claros e amadurecidos. Por enquanto, é
    aconselhável a não perder muito tempo com eles. <em>Deixe seu celebro, aos poucos, se familiarizar com esse universo e
        foque sua atenção para a liguagem</em>.</p>

<p>O termo "Linguagem de programação do lado do servidor" é uma forma genérica de se referir a linguagem de programação que
    está rodando "lá" no lado do servidor. No caso, estamos considerando a linguagem PHP, mas poderia ser qualquer outra,
    como por exemplo, Python, Pearl, Ruby, Java(JSP), CGI, ASP pura, ASP.net, etc...</p>

<p><em>PHP é uma linguagem de programação interpretada</em>, isto é, seu código fonte não é compilado e executado, mas sim
    interpretado e executado. O código fonte produzido pelo programador é armazenado em um arquivo de texto simples chamado
    de script, normalmente salvo com a extensão “php”, exemplo: “formulario_clientes.php”. Esse scritpt é interpretado e
    executado pelo módulo PHP (no dia-a-dia os profissionais dizem apenas “executado”). Esse módulo roda sobre o servidor
    web denominado Apache. O banco de dados MySql, largamente utilizado com a linguagem PHP, é considerado o par perfeito,
    o casamento do ano, porém é possível utilizar outros banco de dados com a linguagem PHP, como por exemplo, Postgress,
    Oracle,  MongoDB, SqlLite, etc... A arquitetura é ilustrada pela figura 01, o cliente é o computador que consome
    serviços do servidor, normalmente um usuário atrás do navegador web, ele clica em um link com extensão .php, o  servidor
    Apache escuta a “requisição” e aciona o módulo PHP (mod_php). Este por sua vez interpreta (interpretador PHP) o código
    armazenado no servidor (o script) e, se for o caso, através da extensão “php5-mysql” aciona o banco de dados Mysql
    (Servidor MySQL) recuperando algum tipo de dado com valor agregado. Essa informação é embebida por código HTML e
    devolvida de volta ao navegador do cliente gerando, assim, a página HTML resultante.</p>

<div class="imagem">
    <img src="../../imagens/morimoto_apache1.png" alt="funcionamento do servidor web" />
    <p>Figura 01 - Esquema da arquitetura na qual, comumente, é executado os script em PHP.</p>
    <p>Fonte:
        <a href="http://www.hardware.com.br/livros/servidores-linux/entendendo-organizacao-dos-arquivos.html">Morimoto</a>
    </p>
</div>

<p>Não ficou claro esse funcionamento? Tudo bem, é mais um assunto no qual é preciso familiarizar-se para depois
    compreendê-lo, dê tempo ao tempo.</p>

<p>Todo esse processo roda sobre um sistema operacional, podendo ser tanto o Linux como o Windows. Quando utilizamos o Linux,
    diz-se que a arquitetura é a <em>LAMP</em> (Linux, Apache, Mysql e PHP), quando utilizamos o Windows, diz-se que a arquitetura é
    <em>WAMP</em> (Windows, Apache, Mysql e PHP) e quando ela é híbrida, garantindo assim seu funcionamento tanto no windows como no
    Linux, diz-se XAMP, onde o “X” representa o sistema operacional.</p>

<p>Todas as ferramentas apresentadas, com exceção do Microsoft Windows, são <em>Open Source</em>. Trata-se de um movimento mundial
    de centenas de profissionais colaboradores organizados em comunidades que se auto gerenciam, muitos bons frutos são
    produzidos por essas comunidades. Eles estão inundando o mundo com aplicações de código aberto, na qual é possível
    utilizar, alterar, estudar e contribuir com o código fonte. É importante salientar que a utilização do sistema
    operacional Linux trará, ao estudante, um benefício didático muito superior do que se fosse utilizado apenas o sistema
    operacional Windows. Não trata-se de mero preconceito contra os produtos da Microsoft. A principal razão é que o advento
    OpenSource propicia um estudo aprofundado do funcionamento do software, seja ele o sistema operacional, o servidor web
    ou qualquer outro software. Se o leitor não conhece o Linux, não se preocupe, <em>é possível sim aprender e desenvolver em
        PHP utilizando apenas o Windows, mas considere conhecer e entender o sistema Linux</em>.</p>

<p>Para começar a programar em PHP é necessário ter o "ambiente" corretamente instalado e configurado, seja em LAMP ou
    em WAMP. A instalação pode ser uma tarefa simples e básica, se a configuração não for item de preocupação. Mas saber
    configurar o <em>ambiente de desenvolvimento</em> é obrigação do programador. Inicialmente, poderá ser utilizada a configuração
    básica (de fábrica), mas em breve será preciso dominar a configuração dos componentes.</p>

<p>Em contraponto ao ambiente de desenvolvimento, temos o ambiente na qual o software está rodando de verdade. Trata-se do
    <em>ambiente de produção</em> seu correto funcionamento é um fator crítico para a equipe de TI. Os scripts são produzidos e
    testados no ambiente de desenvolvimento e posteriormente publicados (enviados) para o ambiente de produção. Após "subir
    o ambiente é preciso instalar programas auxiliares como um bom editor de código (Netbeans, Eclipse, etc...), um
    controlador de versão (software que controla a versão do código fonte), um navegador de web compatível com o
    "webs standars" (Fire Fox, Google Chrome, etc...), uma interface (API) para o banco de dados, no caso do Mysql é
    utilizado o PhpMyAdmin, bibliotecas que auxiliam na depuração do código como o X-Debug, etc...</p>

<p>A rotina de desenvolvimento, no tocante a codificação, normalmente é esta: com o editor e navegador abertos escrevemos um
    trecho de código e vamos até o navegador e checamos o resultado acionando a tecla F5 (para atualizar a página no
    navegador). Se o código interage com a base de dados, então, mantemos a API do banco de dados aberta para podemos
    observar se o que foi alterado está acontecendo de fato no banco de dados. Assim, repetidamente, vamos tecendo o código
    fonte do sistema a ser construído.</p>

<p>A <em>sintaxe básica</em> pode ser conferida nos trechos de códigos seguintes:</p>

<div class="code">
    <h6>PHP</h6>
    <pre>&lt;?php

# Comentários podem ser feitos em linha ou em bloco:

// comentário em linha

# comentário em linha

/*
* comentário em bloco
*/

/*
comentário em bloco
comentário em bloco
comentário em bloco
*/



/*
* O código PHP é escrito entre as tags "&lt;?php" e  "?&gt;".
*/



/*
* O método echo exibe uma ou mais string.
*/
echo "Eu sou uma string&lt;br /&gt;";
echo "e serei exibida na tela do navegador.&lt;br /&gt;";



/*
* As variáveis começam com o símbolo de cifrão, como no exemplo, "$nome_da_variavel".
*/
$resultado = 1 + 1;
echo "Resultado da soma de 1 + 1 = $resultado";

?&gt;</pre>
</div>

<p>O PHP obteve, nos anos seguinte à sua criação, a colaboração da dupla Andi Gutmans e Zeev Suraski  evoluíndo de forma
    surpreendente. Atualmente na versão 5 a linguagem conta com uma larga aceitação e utilização em centenas de projetos,
    dos mais simples aos mais complexos. A linguagem possue vasta documentação na Internet e na literatura. Alguns bons
    framework´s foram produzidos como por exemplo o <em>Zend</em>, o Cake, o Codeigniter o Symphony entre outros. A empresa Zend,
    responsável pelo framework de mesmo nome, lidera o mercado de certificações. Há também centenas de bibliotecas que
    auxiliam o desenvolvimento da aplicação, a mais notável é a Pear (não confundir com a linguagem Pearl).</p>

<p>A empresa Netcraft, periodicamente, lança pesquisas que discriminam os servidores web mais utilizados, o Apache sempre
    está na frente, em média 60%, veja figura 02.</p>

<div class="imagem">
    <img src="../../imagens/apache_estatistica01.png" alt="funcionamento do servidor web" />
    <p>Figura 02 - Estatística de servidores web pelo mundo</p>
    <p>
        <a href="http://news.netcraft.com/archives/2012/09/10/september-2012-web-server-survey.html#more-6429">Fonte: Natcraft</a>
    </p>
</div>

<p>Bom... um servidor apache pode rodar outas linguagens alem do PHP, mas veja este outro gráfico:</p>

<div class="imagem">
    <img src="../../imagens/php_estatistica01.png" alt="funcionamento do servidor web" />
    <p>Figura 03 - Linguagens identificadas em quase 7 milhões de domínios.</p>
    <p>
        <a href="http://phpadvent.org/2010/usage-statistics-by-ilia-alshanetsky">Fonte: http://phpadvent.org</a>
    </p>
</div>

<p>"O gráfico acima mostra a repartição das 6 maiores linguagens identificáveis em 6.7 milhões de domínios onde a linguagem
    pôde ser determinada."</p>

<p>PHP não é a melhor linguagem, nem a mais segura. Mas é uma excelente linguagem de programação web.</p>

<p>Seja bem vindo ao mudo do PHP!</p>

<h2>Leituras adicionais sugeridas</h2>

<dl id="leitura_adcionais">
    <dt>Internet</dt>
    <dd>
        <em>Manual oficial do PHP</em>, está aqui não é sugerida, é obrigatória. (dica: digite apenas php.net que o
        navegador redireciona para a url completa).
        <a href="php.net" >http://www.php.net</a>
    </dd>

    <dd>
        <em>Trecho do manual</em> que introduz à programação em PHP.
        <a href="http://www.php.net/manual/pt_BR/getting-started.php" >http://www.php.net/manual/pt_BR/getting-started.php</a>
    </dd>

    <dd>
        <em>Artigo de Henrique Bastos</em> explicando as diferenças sobre linguagem interpretada e compiladas.
        <a href="http://henriquebastos.net/2008/09/06/diferencas-entre-linguagem-compilada-e-linguagem-interpretada" >
            http://henriquebastos.net/2008/09/06/diferencas-entre-linguagem-compilada-e-linguagem-interpretada</a>
    </dd>

    <dd>
        <em>Artigo escrito em 2009</em> na língua inglesa por Dionysios e traduzido pelo portal www.dri.pt. Fala sobre a
        <em>evolução do PHP</em> e como a linguagem se adaptou a realidade das organizações.
        <a href="http://www.dri.pt/pt/noticias/noticias/linguagem_php_solucao_eficaz_para_empresas.html" >
            http://www.dri.pt/pt/noticias/noticias/linguagem_php_solucao_eficaz_para_empresas.html</a>
    </dd>

    <dd>
        Notícia eletrônica falando sobre a <em>importância das aplicações web</em>
        <a href="http://idgnow.uol.com.br/computacao_corporativa/2009/05/27/google-diz-que-a-web-e-o-novo-modelo-de-programacao/" >
            http://idgnow.uol.com.br/computacao_corporativa/2009/05/27/google-diz-que-a-web-e-o-novo-modelo-de-programacao/</a>
    </dd>

    <dt>Livros</dt>
    <dd>
        <em>Nenhum livro sobre PHP</em> é suficientemente básico, conciso e estruturado em uma sequência com começo, meio e fim. Se
        tratando de PHP para iniciantes, infelizmente não conheço nenhum livro na qual seja merecedor de uma indicação. Existe
        uma infinidades de livros bons e nos quais eu farei referência quando for oportuno, mas a abrangência é de intermediário
        para avançado. Aliás, essa foi uma das razões que me motivaram a realizar este projeto O ensino da linguagem de
        programação,  de qualquer linguagem, é muito difuso, disperso, pulverizado e pouco conciso.
    </dd>
</dl>