<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="shortcut icon" href="./img/logo1.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>SkyNet</title>
</head>

<!--Navbar-->
<body>
    <header class="menu-principal">
        <main>
             <div class="header-1">
                <div class="logo1">
                    <img src="./img/logo2.png" alt="logo">
                </div> 

            </div>
        </main>
    </header>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li><a href="#sobre-nos">Quem Somos Nós</a></li>
                    <li><a href="#fazemos">O que fazemos</a></li>
                    <li><a href="#projetos">Projetos</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="#localizacao">Localização</a></li>
                    <li><a href="https://www.instagram.com/skynet.dot/">Instagram</a></li>
                </ul>
            </div>
            <div class="busca">
                <input placeholder="Pesquisar" type="text" />
            </div>
        </div>
    </main>

<!--Slide-->
    <div class="col-100">
        <div class="slide-principal">
            <div><img src="/img/slide1.jpeg" class="img-slide"></div>
            <div><img src="/img/slide2.jpeg" class="img-slide"></div>
        </div>

    </div>

<!--Sobre nós e especialidades-->
            <div class="container" data-anime="left">
                    <div class="content texto-sobrenos">
                        <h1 id="sobre-nos">Sobre nós</h1>
                        <p>A SkyNet é uma empresa que foi criada em 2021 por 6 analistas e desenvolvedores. <br> Com o objetivo de proporcionar e oferecer as melhores soluções para o mercado da tecnologia. <br> Esta empresa é direcionada para soluções em informática e desenvolvimento de sistemas. </p>
                    </div>
                
                    <div class="content texto-oquefazemos">
                        <h1 id="fazemos">Nossa especialidade</h1>
                            <ul class="especialidade">
                                <li>Desenvolvimento Web</li>
                                <li>Ui / Ux Design</li>
                                <li>Criação de Back-End / API e Front-End</li>
                                <li>Desenvolvimento para plataformas Android e IOS</li>
                            </ul>
                    </div>
                </div> 
            </div>    

<!--Projetos-->
            <div class="text-sec" data-anime="right">
                <h1>Conheça os nossos serviços</h1>
                <p class="text-meio">Para os desafios do seu negócio conte com uma parceira <strong>focada em resultados</strong>.<br> A SkyNet Solutions busca ser referência no mercado nacional por sua agilidade, acessibilidade e presença. <br> Unimos nosso amor pela tecnologia para juntos inovarmos e criarmos uma relação com nosso cliente para chegarmos mais longe.</p>
                <img src="./img/local.png">
            </div>

            <div class="card-projetos" data-anime="left">
                <div class="content texto-projetos">
                    <h2 id="projetos">Conheça aqui alguns projetos que desenvolvemos:</h2>
                    <main class="card">
                        <section class="card">
                            <div class="icon">
                            <img src="/img/app1.png" alt="Entre em Contato">
                            </div>
                            <h3 class="app-txt">Skoob</h3>
                            <span>Aplicativo Skoob.</span>
                        </section>
                        <section class="card">
                            <div class="icon">
                            <img src="/img/app2.png" alt="Entre em Contato">
                            </div>
                            <h3 class="app-txt">Saraiva</h3>
                            <span>Aplicativo Saraiva.</span>
                        </section>
                        <section class="card">
                            <div class="icon">
                            <img src="/img/app1.png" alt="Entre em Contato">
                            </div>
                            <h3 class="app-txt">Amazon</h3>
                            <span>Aplicativo Amazon.</span>
                        </section>
                        
                    </main>
                </div>
            </div>

<!--Formulário-->          
            <div class="titulo-form" data-anime="right">
                <h1 id="contato">Formulário para contato</h1>
                <p>Caso tenha interesse nos nossos serviços deixe seus dados que entraremos em contato.</p>
                <br>
            </div>
            <div>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			?>
            </div>
            <form data-anime="right">
                <fieldset class="dados">
                    <div class="campo">
                        <label for="nome"><strong>Nome</strong></label>
                        <input type="text" name="nome" id="nome" required>
                        <br>
                    </div>
                    
                    <div class="campo">
                        <label for="email"><strong>E-mail</strong></label>
                        <input type="email" name="email" id="email" required>
                        
                    </div>
                    
                    <div class="campo">
                        <br>
                        <label for="text-area"><strong>Escreva a ideia para a sua empresa:</strong></label>
                        <textarea row="50"  id="ideia" name="ideia"></textarea>
                    </div>
                </fieldset>
                        
                <button class="btn" type="submit" id="bntEnviar">Enviar</button>
            </form>
           
<!--Mapa-->
            <div class="mapa" data-anime="left">
                <h2 id="localizacao">Nossa Localização</h2>
                <p>Estamos Proxímos ao metro Vila Prudente e ao Central Plaza Shopping.</p>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Rua%20Vila%20Prudente,%20Vila%20Prudente,%20S%C3%A3o%20Paulo,%20SP%20-%2003152200&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

<!--Rodapé-->
                <footer id="footer">
                    
                    <div class="rodape-main">
                        <h1>Contato</h1>
                        <p>skynet@Solutions.com</p>
                        <p>4004-3434</p>
                    </div>
                    
                    <div class="copy">
                        <p>Copyright-2021</p>
                    </div>
                </footer>
<!--Scripts-->
                <script type="text/javascript" src="js/scroll_effect.js"></script>
                <script type="text/javascript" src="./js/main2.js"></script>
                <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
                <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                <script type="text/javascript" src="./js/main.js"></script>
</html>
