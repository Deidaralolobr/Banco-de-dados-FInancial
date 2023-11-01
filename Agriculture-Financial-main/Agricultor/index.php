<?php
if (isset($_POST)['submit'])

$nome = $_POST(`nome_user`)
$cpf = $_POST(`cpf_user`)
$telefone = $_POST(`numero_user`)


$res = mysqli_query($conect, *INSERT INTO tb_user  )
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Agriculture Financial</title>
</head>

<body>
    <header>
        <div class="interface">
            <img src="img/Logo.png" alt="logo_header">
            <nav class="menu">
                <ul>
                    <li><a href="#inicio">Inicío</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav><!--menu-->
        </div>
    </header>
    <section class="inicio">
        <div class="texto">
            <h1>Nutrindo suas finanças para um crescimento
                robusto em um mercado agrícola em constante mudança <span>.</span>
            </h1>
            <hr>
        </div>
    </section>
    <br>
    <br id="sobre">
    <section class="sobre">
        <div class="texto_sobre">
            <h1>HÁ MAIS DE 15 ANOS NO MERCADO</h1>
             <p>Nossa missão é alcançar a satisfação total de nossos clientes. Continuaremos a crescer, evoluir e adaptar nossos serviços às necessidades em constante mudança do setor agrícola. Com 15 anos de história e um compromisso inabalável, a Campo Financeiro está pronta para enfrentar os desafios dos próximos 15 anos com a mesma paixão e dedicação que nos trouxeram até aqui. Juntos, cultivaremos sucesso, colheita após colheita.
             </p>
        </div>
    </section>
    <section class="serviços" id="servicos">
        <h2 class="titulo">Nossas Categorias de Serviços</h2>
        <div class="flex">
            <div class="box_svc">
                <i class="bi bi-safe"></i>
                <h3>Investimentos</h3>
                <a href="#contato">
                    <button>Saiba mais <i class="bi bi-arrow-right"></i></button>
                </a>
            </div>
            <div class="box_svc">
                <i class="bi bi-cash-coin"></i>
                <h3>Controle orçamentário</h3>
                <a href="#contato">
                    <button>Saiba mais <i class="bi bi-arrow-right"></i></button>
                </a>
            </div>
            <div class="box_svc">
                <i class="bi bi-modem"></i>
                <h3>Análise financeira</h3>
                <a href="#contato">
                    <button>Saiba mais <i class="bi bi-arrow-right"></i></button>
                </a>
            </div>
        </div>
    </section>
    <section class="contato" id="contato">
        <h2>Vendas e Atendimentos</h2>
        <div class="flex">
            <div class="numeros">
                <span><i class="bi-telephone"></i> (48) 23348890</span>
                <span><i class="bi-whatsapp"></i> (48) 9 9916-4963</span>
                <span><i class="bi-instagram"></i> <a href="#">fs.agriculturefinance</a></span>
                <span><i class="bi-envelope"></i> <a href="#"> agriculturefinanceservices@afs.com</a></span>
            </div>
            <div class="formulario">
                <p>Fale Conosco</p>
                <form action="index.php" method="POST">
                    <input type="text" name="nome" id="" placeholder="Nome Completo" required>
                    <input type="text" name="cpf" id="cpf" placeholder="Seu CPF" required>
                    <input type="tel" name="numero" id="" placeholder="Numero" required>
                    <div class="btn-enviar"><input type="submit" value="ENVIAR"></div>
                </form>
            </div>
        </div>
        <footer>
            <div class="logo-footer">
                <img src="img/Logo.png" alt="logo_footer">
            </div><!--logo-footer-->
            <h1>“Preço é o que você paga, valor é o que você leva”</h1>
            <div class="social">
                <a href="#"><button><i class="bi-whatsapp"></i></button></a>
                <a href="#"><button><i class="bi-instagram"></i></button></a>
            </div>
        </footer>
    </section>
</body>
</html>