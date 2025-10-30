<?php
//Importa o autoload do Composer para carregar as rotas.
require __DIR__ . '/../vendor/autoload.php';

// Obtem a URL do navegador.
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($url == "/") {
    require __DIR__ . '/../app/Views/home.php';
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>T1 Flexbox</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="superinfo-bg">
    <div class="superinfo">
<p>Seg / a Sexta - 07:00 às 18:00</p>
<a href="tel:+1436222727"> (14) 3622 2727</a>
<p>Rua Rui Barbosa, 1591, Jaú - SP</p>
    </div>
</div>
<header class="menu-bg">
<div class="menu">
    <div class="menu-logo">
        <a href="#">Depósito Luciana</a>
    </div>
    <nav class="menu-nav">
        <ul>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#produtos">Produtos</a></li>
            <li><a href="#preco">Preço</a></li>
            <li><a href="#qualidade">Qualidade</a></li>
        </ul>
    </nav>
</div>
</header>


<h1 class="introducao">Tudo para sua obra com o melhor custo-benefício<br>Sua construção começa com confiança! </h1>

<section class="sobre" id="sobre">
    <div class="sobre-info">
        <h1>Sobre</h1>
        <p>O Depósito Luciana é a sua loja de materiais para construção de confiança, comprometida em oferecer produtos de alta qualidade e um atendimento ao cliente diferenciado.</P>
            <P>Com anos de experiência no mercado, nossa missão é garantir que cada cliente encontre o que precisa com eficiência, agilidade e atenção personalizada.</p>
    </div>
    <div class="sobre-img">
        <img src="/imgs/foto-empresa.png" alt="Foto da Empresa">
    </div>
     <div class="sobre-img">
        <img src="/imgs/logo.png" alt="Logo da Empresa">
    </div>

</section>

<section class="produtos" id="produtos">
    <h1>Produtos</h1>
    <div class="produtos-container">
        <div class="produtos-item purple">
<h2> Cimento </h2>
<img src="/imgs/cimento.jpg" alt="Cimento">
        </div>
         <div class="produtos-item pink">
<h2> Tijolo </h2>
<img src="/imgs/tijolo.jpg" alt="Tijolo 9 furos ">
        </div>
         <div class="produtos-item blue">
<h2> Cal</h2>
<img src="/imgs/cal.jpg" alt="Cal">
        </div>
    </div>
</section>

<section class="preco" id="preco">
    <div class="preco-item">
        <h2>Bronze</h2>
        <span>R$ 29,99</span>
     <ul>
        <li>- Suporte ao cliente 24 horas </li>
        <li>- Ofertas mensais</li>
        <li>- Programa de troca de pontos por produtos</li>
        <li>- Participação em sorteios de brindes</li>
     </ul>
     <a href="#">Comprar</a>
     </div>

     <div class="preco-item">
        <h2>Prata </h2>
        <span>R$ 64,99</span>
     <ul>
        <li>- Todos os benefícios do Bronze</li>
        <li>- Atendimento prioritário no suporte</li>
        <li>- Descontos exclusivos</li>
        <li>- Frete reduzido acima de um valor mínimo</li>
     </ul>
     <a href="#">Comprar</a>
     </div>

     <div class="preco-item">
        <h2>Ouro</h2>
        <span>R$ 99,99</span>
     <ul>
        <li>- Todos os benefícios do Prata</li>
        <li>- Condições especiais de pagamento </li>
        <li>- Rastreamneto do pedido</li>
        <li>- Atendimento físico prioritário</li>
     </ul>
     <a href="#">Comprar</a>
     </div>
</section>
    
<section class="qualidade" id="qualidade">
    <div class="qualidade-item">
        <h2>Qualidade</h2>
        <p>Trabalhar com marcas confiáveis e produtos duráveis para garantir segurança e excelência.</p>
    </div>

    <div class="qualidade-item">
        <h2>Atendimento </h2>
        <p>Atendimento humanizado buscando tratar cada cliente com atenção, respeito e dedicação.
        </p>
    </div>

    <div class="qualidade-item">
        <h2>Confiança</h2>
        <p>Construir relacionamentos sólidos e transparentes com clientes, fornecedores e colaboradores.</p>
    </div>

    <div class="qualidade-item">
        <h2>Sustentável</h2>
        <p>Adotar práticas responsáveis que contribuam com o meio ambiente e a comunidade.</p>
    </div>

     <div class="qualidade-item">
        <h2>Compromisso</h2>
        <p>Buscar sempre a melhor solução para as necessidades do cliente, com agilidade, comprometimento e responsabilidade.</p>
    </div>

     <div class="qualidade-item">
        <h2>Simplicidade</h2>
        <p>Manter processos práticos e objetivos, facilitando a experiência de compra.</p>
    </div>

</section>

<section class="newsletter">
    <div class="newsletter-info">
        <h1>Notícias</h1>
        <p>Assine e fique por dentro das novidades</p>
    </div>
    <form class="newsletter-form">
        <input type="text" placeholder="Seu email">
        <button type="submit">Assinar</button>
    </form>
</section>

<footer class="footer"> <p>Depósito Luciana © Todos os direitos reservados.</p></footer>
<script src="/js/script.js"></script>
</body>
</html>