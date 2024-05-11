<?php
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    $to = "sagmih@outlook.com"; // Seu endereço de e-mail
    $subject = "Novo formulário submetido"; // Assunto do e-mail

    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    // Mensagem do e-mail
    $message = "Nome: $nome\n";
    $message .= "E-mail: $email\n";
    $message .= "Celular: $celular\n";
    $message .= "Mensagem: $mensagem\n";

    // Cabeçalhos do e-mail
    $headers = "From: $nome <$email>" . "\r\n"; // Define o remetente como o nome e o e-mail fornecidos pelo cliente
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar e-mail.";
    }


    // Insere os dados no banco de dados
    $servername = "localhost"; // Nome do servidor MySQL
    $username = "root"; // Nome de usuário padrão do MySQL
    $password = ""; // Senha padrão do MySQL (geralmente vazia ou 'root')
    $database = "formulario"; // Nome do banco de dados

    // Conecta ao banco de dados
    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Prepara a consulta SQL
    $sql = "INSERT INTO formulario (nome, email, celular, mensagem) VALUES ('$nome', '$email', '$celular', '$mensagem')";

    // Executa a consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos no banco de dados com sucesso!";
    } else {
        echo "Erro ao inserir dados no banco de dados: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>





<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- FIM GOOGLE FONTES -->
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- FIM BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="style.css">

    <script src="menu.js" defer></script>

    <title>CORT - FER </title>
</head>

<body>

    <header>

        <div class="interface">
            <div class="logo">
                <a href="#">
                    <img src="images/logo.png" alt="" height="60px">
                </a>
            </div><!--logo-->

            <nav class="menu-desktop">
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#especialidades">Especialidades</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#">Projetos</a></li>
                </ul>
            </nav>

            <div class="btn-contato">
                <a href="https://api.whatsapp.com/send/?phone=5511983506584&text=Ol%C3%A1%21+Gostaria+de+fazer+um+or%C3%A7amento+%EF%BF%BD&type=phone_number&app_absent=0">
                    <button>Contato</button>
                </a>
            </div><!--btn-contato-->

            <div class="btn-abrir-menu" id="btn-menu">
                <i class="bi bi-list"></i>
            </div>

            <div class="menu-mobile" id="menu-mobile">
                <div class="btn-fechar">
                    <i class="bi bi-x-lg"></i>
                </div>

                <nav>
                    <ul>
                        <li><a href="#">Início</a></li>
                        <li><a href="#especialidades" class="scroll-link">Especialidades</a></li>
                        <li><a href="#sobre" class="scroll-link">Sobre</a></li>
                        <li><a href="#">Projetos</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </nav>

            </div><!--menu-mobile-->
            <div class="overlay-menu" id="overlay-menu"></div>
        </div><!--interface-->
    </header>

    <main>
        <section class="topo-do-site">
            <div class="interface">
                <div class="flex">
                    <div class="txt-topo-site">
                        <h1>TRANSFORMANDO IDEIAS EM REALIDADE <span>.</span></h1>
                        <p>Criatividade e inovação andam lado a lado. Com uma combinação única de design impactante,
                            funcionalidade intuitiva e otimização para resultados, estou pronto(a) para criar a presença
                            online dos seus sonhos.</p>

                        <div class="btn-contato">
                            <a href="https://api.whatsapp.com/send/?phone=5511983506584&text=Ol%C3%A1%21+Gostaria+de+fazer+um+or%C3%A7amento+%EF%BF%BD&type=phone_number&app_absent=0">
                                <button>Entre em contato</button>
                            </a>
                        </div>
                    </div><!--txt-topo-site-->

                    <div class="img-topo-site">
                        <img src="images/logo.png" alt="">
                    </div><!--img-topo-site-->
                </div><!--flex-->
            </div><!--interface-->
        </section><!--topo-do-site-->

        <section id="especialidades" class="especiliadades">
            <div class="interface">
                <h2 class="titulo">NOSSA <span>ESPECIALIDADES.</span></h2>
                <div class="flex">
                    <div class="especialidades-box">
                        <i class=""></i>
                        <h3>Calhas & Rufos </h3>
                        <p>Calhas e rufos sob medida para a sua casa, garantindo a proteção contra as intempéries e o
                            escoamento adequado da água, proporcionando segurança e durabilidade para o seu lar.</p>
                    </div><!--especialidades-box-->

                    <div class="especialidades-box">
                        <i class=></i>
                        <h3>Corte & Dobra</h3>
                        <p>Corte em dobra em geral, especializado em chapas de metal. Nossa técnica refinada e
                            equipamentos de última geração garantem precisão e qualidade em cada peça produzida. Conte
                            conosco para soluções sob medida que atendam às exigências específicas do seu projeto.</p>
                    </div><!--especialidades-box-->

                    <div class="especialidades-box">
                        <i class=></i>
                        <h3>Chapas de aço</h3>
                        <p> a base sólida para grandes projetos. Com sua força inigualável e adaptabilidade, a chapa de
                            aço é a escolha confiável para estruturas que exigem resistência e durabilidade.</p>
                    </div><!--especialidades-box-->
                </div><!--flex-->
            </div><!--interface-->
        </section><!--especiliadades-->

        <section id="sobre" class="sobre">
            <div class="interface">
                <div class="flex">
                    <div class="img-sobre">
                        <img src="images/foto.png" alt="" height="250px">
                    </div><!--img-sobre-->

                    <div class="txt-sobre">
                        <h2> <span>CORT - FER </span></h2>
                        <p>Localizada no <strong>Itaim Paulista</strong>, em São Paulo, está comprometida em fornecer os
                            melhores produtos e serviços de corte e dobra em chapas metálicas. .
                            Nosso principal objetivo é garantir a total satisfação dos clientes. Para isso, oferecemos
                            um serviço diferenciado, destacando-nos pela qualidade do corte e dobra, além de contarmos
                            com uma equipe de profissionais altamente qualificados e motivados para superar desafios</p>

                        <p>A disposição para consultas de perfis em:

                            <br>Chapa fina a frio
                            <br> Chapa fina a quente
                            <br>Chapa galvanizada
                            <br>Chapa grossa até 3/16”.
                        </p>
                        <div class="btn-social">
                            <a href="https://www.instagram.com/cortfersp/"><button><i class="bi bi-instagram"></i></button></a>
                            <a href="https://api.whatsapp.com/send/?phone=5511983506584&text=Ol%C3%A1%21+Gostaria+de+fazer+um+or%C3%A7amento+%EF%BF%BD&type=phone_number&app_absent=0"><button><i class="bi bi-whatsapp"></i></button></a>
                            <a href="#"><button><i class="bi bi-linkedin"></i></button></a>
                        </div><!--btn-social-->
                    </div><!--txt-sobre-->
                </div><!--flex-->
            </div><!--interface-->
        </section><!--sobre-->

        <section class="portfolio">
            <div class="interface">
                <h2 class="titulo">MEUS <span>SERVIÇOS.</span></h2>
                <div class="flex">
                    <div class="img-port" style="background-image: url(fotos/calhas.jpeg);">
                        <div class="overlay">Calhas & Rufos</div>
                    </div>
                    <div class="img-port" style="background-image: url(fotos/kit\ portao.jpeg); height: 400px; margin-top: 45px;">
                        <div class="overlay"> KIT BASCULANTE </div>
                    </div>
                    <div class="img-port" style="background-image: url(fotos/longarina.jpeg);">
                        <div class="overlay">Longarina</div>

                        <div class="img-port" style="background-image: url(images/cascata.png);">
                            <div class="overlay">Longarina</div>
                        </div>
                    </div><!--flex-->
                </div><!--interface-->
        </section><!--portfolio-->

        <section class="formulario">
            <div class="interface">
                <h2 class="titulo">CONTATE - NOS <BR>PARA SEU <span>ORÇAMENTO.</span></h2>

                <form action="" method="post">
                    <input type="text" name="nome" id="nome" placeholder="Seu nome completo:" required>
                    <input type="email" name="email" id="email" placeholder="Seu e-mail:" required>
                    <input type="tel" name="celular" id="celular" placeholder="Seu celular:">
                    <textarea name="mensagem" id="mensagem" placeholder="Sua mensagem" required></textarea>
                    <div class="btn-enviar"><input type="submit" value="ENVIAR"></div>
                </form>


            </div><!--interface-->
        </section><!--formulario-->

    </main>

    <footer>
        <div class="interface">
            <div class="line-footer">
                <div class="flex">
                    <div class="logo-footer">
                        <img src="images/logo.png" alt="Logotipo Cort-Fer" height="70px">
                    </div><!--logo-footer-->
                    <div class="btn-social">
                        <a href="https://www.instagram.com/cortfersp/"><button><i class="bi bi-instagram"></i></button></a>
                        <a href="https://api.whatsapp.com/send/?phone=5511983506584&text=Ol%C3%A1%21+Gostaria+de+fazer+um+or%C3%A7amento+%EF%BF%BD&type=phone_number&app_absent=0"><button><i class="bi bi-whatsapp"></i></button></a>
                        <a href="#"><button><i class="bi bi-linkedin"></i></button></a>
                    </div><!--btn-social-->
                </div>
            </div><!--line-footer-->

            <div class="line-footer borda">
                <p><i class="bi bi-envelope-fill"></i> <a href="mailto:cortfer@hotmail.com">cortfer@hotmail.com</a>
                </p>
            </div><!--line-footer-->
        </div><!--interface-->
    </footer>

    <script src="especialiadade.js"></script>
    <script src="sobre.js"></script>

</body>

</html>
