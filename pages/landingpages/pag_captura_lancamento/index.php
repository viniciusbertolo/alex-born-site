<?php

include("./back/dados.php");

//recuperar os valores dos campos
obterCampos();

if ($operacao == "QUERO PARTICIPAR") {
    inserir();

    //header("Location:../index.php");

}

?>





<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/logo_cerebro.png" sizes="16x16">
    <meta name="facebook-domain-verification" content="tqk5xmcoj8hsnohb8qoggoq9wkvj2t"   />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T3D6YM5JHY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-T3D6YM5JHY');
    </script>
    <!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '589636400013237');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=589636400013237&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    <title>Domine sua mente!</title>
    <!-- <link rel="stylesheet" href="css/base.css" /> -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/parte1.css" />
    <link rel="stylesheet" href="css/parte2.css" />
    <link rel="stylesheet" href="css/parte3.css" />
    <link rel="stylesheet" href="css/parte4.css" />
    <link rel="stylesheet" href="css/parte5.css" />
    <link rel="stylesheet" href="css/parte6.css" />
    <link rel="stylesheet" href="css/parte7.css" />
    <link rel="stylesheet" href="css/parte8.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <div class="parte1" id="topo">
            <img class="logo" src="img/logo.png" alt="Logo" />


            <div class="logomarca_div_texto">
                <h1>Domine a sua mente!</h1>
                <h3>Descubra a raiz dos seus medos e liberte-se da indecisão. Participe do nosso <span>Evento</span> Gratuito com 02 lives imperdíveis. </h3>
                <h5>Dias 07/08 e 08/08, ás 20h</h5>

                <form class="form-horizontal m-0 p-0 formulario" action="" method="post">
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-md-12 m-0 p-0">
                            <input type="email" name="txtEmail" size="100" maxlength="100" placeholder="Seu melhor email" class="form-control input-md campo_email" require/>
                            <input type="text" name="txtTelefone" size="100" maxlength="100" placeholder="Seu melhor telefone" class="form-control input-md campo_email" require/>
                        </div>

                        <div class="col-12 m-0 p-0">
                            <br>
                            <p>
                                <input class="btn btn-primary btn-lg btn-block botao" type="submit" name="btnOperacao" value="Quero Participar" /> &nbsp; &nbsp;

                            </p>
                        </div>
                    </div>
            </div>

            <div class="logomarca_div">

                <img class="logomarca" src="img/alex.webp" alt="Alex Born" />
            </div>



        </div>
        <div class="parte2">
            <div class="imagem_parte2">
                <img class="img_estrelas" src="img/evento1.webp" alt="Evento 1" />
                <!-- <img class="img_estrelas_tela" src="img/evento1.webp" alt="Imagem de Estrelas" /> -->

            </div>
            <div class="textos">
                <!-- <h2>A EMPRESA</h2>
                <h4>MARCATTI SEGURANÇA EM EVENTOS</h4> -->
                <p>
                    Sente-se preso(a) em um ciclo de indecisão constante? Medos e ansiedades atrapalhando suas decisões importantes? É hora de se libertar!

                    Apresentamos o Evento "Domine a sua mente!", que será realizado no YouTube, no dia 07 e 08 de Agosto, duas lives imperdíveis!
                    Com o neurocientista Alex Born, você embarcará em uma jornada de autoconhecimento para entender suas raízes de medo e desvendar as causas de sua indecisão e ansiedade.



                </p>
                <div class="col-12 m-0 p-0">
                    <br>
                    <p>
                        <a href="#topo" class="btn btn-primary btn-lg btn-block botao" type="submit" value="Quero Participar">Quero Participar</a>

                    </p>
                </div>
            </div>





        </div>


        <main class="parte8">


            <!-- <h2 class="tituloTemas">Porque adquirir um passaporte CineLovers?</h2><br> -->


            <ul class="ul-cards">
                <a href="#" target="_blank">
                    <li style="--accent-color: #e44105">
                        <div class="icon"><i class="fa-solid fa-wrench"></i></div>
                        <div class="title">Aprenda técnicas para explorar suas emoções.</div>
                        <!-- <div class="content">A cada 10 ingressos, um é por nossa conta</div> -->
                    </li>
                </a>
                <a href="#" target="_blank">
                    <li style="--accent-color: #e44105">
                        <div class="icon"><i class="fa-solid fa-crosshairs"></i></div>
                        <div class="title">Identifique padrões limitantes que afetam suas escolhas.</div>
                        <!-- <div class="content">Combos de ingressos com pipoca a partir de R$30,00 e R$20,00 para estudantes.</div> -->
                    </li>
                </a>
                <a href="#" target="_blank">
                    <li style="--accent-color: #e44105">
                        <div class="icon"><i class="fa-solid fa-user-large"></i></div>
                        <div class="title">Compreenda como seus medos impactam suas decisões.</div>
                        <!-- <div class="content">Presenteie quem você ama, dê a ela essa experiência </div> -->
                    </li>
                </a>
                <a href="#" target="_blank">
                    <li style="--accent-color: #e44105">
                        <div class="icon"><i class="fa-solid fa-circle-check"></i></div>
                        <div class="title">Exercícios práticos e insights valiosos para clareza.</div>
                        <!-- <div class="content">Aniversariantes não pagam, venha comemorar com a gente!</div> -->
                    </li>
                </a>
                <a href="#" target="_blank">
                    <li style="--accent-color: #e44105">
                        <div class="icon"><i class="fa-solid fa-unlock"></i></div>
                        <div class="title">Liberte-se da indecisão e enfrente seus medos.</div>
                        <!-- <div class="content">Pegue sua sorte e receba um mimo CineLovers</div> -->
                    </li>
                </a>
                <a href="#" target="_blank">
                    <li style="--accent-color: #e44105">
                        <div class="icon"><i class="fa-solid fa-route"></i></div>
                        <div class="title">Supere as barreiras que te impedem de avançar.</div>
                        <!-- <div class="content">Assista seus filmes favoritos novamente nas telonas!</div> -->
                    </li>
                </a>
                <a href="#" target="_blank">
                    <li style="--accent-color: #e44105">
                        <div class="icon"><i class="fa-solid fa-lightbulb"></i></div>
                        <div class="title">Tome decisões com confiança e autenticidade.</div>
                        <!-- <div class="content">Atravesse um universo jamais visto, e relembre o que te faz sentir bem!</div> -->
                    </li>
                </a>
                <a href="#" target="_blank">
                    <li style="--accent-color: #e44105">
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="title">Ferramentas e estratégias poderosas.</div>
                        <!-- <div class="content">Atravesse um universo jamais visto, e relembre o que te faz sentir bem!</div> -->
                    </li>
                </a>
                <a href="#" target="_blank">
                    <li style="--accent-color: #e44105">
                        <div class="icon"><i class="fa-solid fa-person"></i></div>
                        <div class="title">Enfrente seus medos e reduza a ansiedade.</div>
                        <!-- <div class="content">Atravesse um universo jamais visto, e relembre o que te faz sentir bem!</div> -->
                    </li>
                </a>
                <a href="#" target="_blank">
                    <li style="--accent-color: #e44105">
                        <div class="icon"><i class="fa-solid fa-bullseye"></i></div>
                        <div class="title">Desvende segredos para uma vida livre de indecisões.</div>
                        <!-- <div class="content">Atravesse um universo jamais visto, e relembre o que te faz sentir bem!</div> -->
                    </li>
                </a>
                <a href="#" target="_blank">
                    <li style="--accent-color: #e44105">
                        <div class="icon"><i class="fa-solid fa-trophy"></i></div>
                        <div class="title">Conquiste a liberdade de escolher seu caminho.</div>
                        <!-- <div class="content">Atravesse um universo jamais visto, e relembre o que te faz sentir bem!</div> -->
                    </li>
                </a>


        </main>



        <div class="parte5">
            <div class="textos">
                <!-- <h2>A EMPRESA</h2>
                <h4>MARCATTI SEGURANÇA EM EVENTOS</h4> -->
                <p>
                    Não permita que o medo e a indecisão controlem sua vida! Reserve seu lugar no evento "Domine a sua mente!" que será transmitido no YouTube. Garanta sua participação nesta jornada transformadora.


                </p>
                <div class="col-12 m-0 p-0">
                    <br>
                    <p>
                        <a href="#topo" class="btn btn-primary btn-lg btn-block botao" type="submit" value="Quero Participar">Quero Participar</a>

                    </p>
                </div>
            </div>

        </div>







        <div class="parte7">
            <h1>Conteúdo das lives</h1>
            <div class="container">
                <div class="card">
                    <div class="box">
                        <div class="content">
                            <h2>1</h2>
                            <h3>Conhecendo a sua Própria Mente!</h3>
                            <p>Junte-se a nós nessa live especial e mergulhe no universo fascinante da mente humana.
                            </p>
                            <ul>
                                <li><i class="fa-solid fa-bolt"></i> Descubra os segredos da sua mente</li>
                                <li><i class="fa-solid fa-bolt"></i> Explore os mecanismos de pensamento</li>
                                <li><i class="fa-solid fa-bolt"></i> Entenda como crenças e emoções nos influenciam</li>
                                <li><i class="fa-solid fa-bolt"></i> Cultive uma mente saudável e equilibrada</li>
                                <li><i class="fa-solid fa-bolt"></i> Conecte-se consigo mesmo(a) de forma reveladora</li>
                                <li><i class="fa-solid fa-bolt"></i> Mergulhe em uma jornada de autoconhecimento e crescimento pessoal</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <div class="content">
                            <h2>2</h2>
                            <h3>Como Controlar Sentimentos e Tomar Decisões</h3>
                            <p>Não perca a oportunidade de aprimorar suas habilidades de controle emocional e tomada de decisões.
                            </p>
                            <ul>
                                <li><i class="fa-solid fa-bolt"></i> Descubra os segredos para controlar seus sentimentos</li>
                                <li><i class="fa-solid fa-bolt"></i> Explore técnicas práticas para lidar com emoções intensas</li>
                                <li><i class="fa-solid fa-bolt"></i> Supere a indecisão e aja com assertividade</li>
                                <li><i class="fa-solid fa-bolt"></i> Fortaleça suas habilidades emocionais</li>
                                <li><i class="fa-solid fa-bolt"></i> Tome decisões que impulsionem seu sucesso</li>
                                <li><i class="fa-solid fa-bolt"></i> Conquiste equilíbrio emocional e decisões assertivas</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="parte3">


            <div class="textos"> -->
        <!-- <h2>A EMPRESA</h2>
                <h4>MARCATTI SEGURANÇA EM EVENTOS</h4> -->
        <!-- <p>
                    Imagine-se libertando dos grilhões da indecisão. Visualize-se enfrentando seus medos de frente, superando as barreiras que o(a) têm impedido de seguir em frente. Visualize a sensação de empoderamento ao tomar decisões com confiança e autenticidade, sabendo que está trilhando o caminho certo para o seu crescimento pessoal e profissional.
                    <br><br>
                    Neste evento, você terá acesso a ferramentas poderosas e estratégias eficazes para identificar e enfrentar seus medos, reduzir a ansiedade e tomar decisões com coragem e clareza. Desvende os segredos para uma vida livre de indecisões e conquiste a liberdade de escolher o seu próprio caminho.
                    Não deixe que o medo e a indecisão controlem sua vida por mais tempo! Reserve agora mesmo seu lugar no evento "Domine a sua mente!".
                    <br><br>
                    Clique em “Quero Participar” para se inscrever gratuitamente e garanta sua participação neste evento transformador.


                </p>
                <div class="col-12 m-0 p-0">
                    <br>
                    <p>
                        <a href="#topo" class="btn btn-primary btn-lg btn-block botao" type="submit" value="Quero Participar">Quero Participar</a>

                    </p>
                </div>
            </div>
            <div class="imagem_parte3">
                <img class="img_estrelas" src="img/evento2.webp" alt="Evento 1" /> -->
        <!-- <img class="img_estrelas_tela" src="img/evento1.webp" alt="Imagem de Estrelas" /> -->

        <!-- </div> -->

        <!-- </div> -->
        <div class="parte4">
            <div class="imagem_parte4">
                <img class="img_estrelas" src="img/alex2.webp" alt="Alex 2" />
                <!-- <img class="img_estrelas_tela" src="img/evento1.webp" alt="Imagem de Estrelas" /> -->

            </div>
            <div class="textos">
                <!-- <h2>A EMPRESA</h2>
                <h4>MARCATTI SEGURANÇA EM EVENTOS</h4> -->
                <h1>Conheça o seu mentor</h1>

                <p>
                    Alex Born é especialista em neurociências e comportamento humano, palestrante internacional e autor renomado.

                    Com uma ampla expertise em neurociências, estratégias de mercado e comunicação, Alex Born é reconhecido mundialmente como um dos principais especialistas nessas áreas. Ele introduziu o conceito de NEUROMARKETING no Brasil e realizou pesquisas relevantes nessa área.

                    Com uma carreira internacional, Alex Born já trabalhou em mais de 23 países e alcançou reconhecimento como um dos profissionais mais conceituados em Fitness e Wellness. Ele é presidente do Instituto WeMindy, membro fundador do GIECH e fundador da Editora Livros Inteligentes.

                    Por meio de suas palestras, consultorias e livros, Alex Born tem o objetivo de transformar vidas, oferecendo insights valiosos sobre o cérebro humano e o desenvolvimento pessoal. Junte-se a nós e descubra como dominar sua mente pode impulsionar seu sucesso em todas as áreas da vida.

                </p>
                <div class="col-12 m-0 p-0">
                    <br>
                    <p>
                        <a href="#topo" class="btn btn-primary btn-lg btn-block botao" type="submit" value="Quero Participar">Quero Participar</a>

                    </p>
                </div>
            </div>






        </div>







        </div>
        <div class="parte5">
            <div class="textos">
                <!-- <h2>A EMPRESA</h2>
                <h4>MARCATTI SEGURANÇA EM EVENTOS</h4> -->
                <p>
                    Lembre-se: a mudança começa com você. Junte-se a nós nessa jornada de autodescoberta e superação. Inscreva-se agora mesmo!
                </p>
                <div class="col-12 m-0 p-0">
                    <br>
                    <p>
                        <a href="#topo" class="btn btn-primary btn-lg btn-block botao" type="submit" value="Quero Participar">Quero Participar</a>

                    </p>
                </div>
            </div>






        </div>








        <div class="parte6">
            <div class="textos">
                <!-- <h2>A EMPRESA</h2>
                <h4>MARCATTI SEGURANÇA EM EVENTOS</h4> -->
                <p>
                    Copyright © 2023 | Instituto WeMindy
                    <br>
                    Todos os Direitos Reservados
                </p>
            </div>






        </div>
    </main>


</body>

</html>