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
    <title>LISTA DE ESPERA</title>
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
                <h1>📣 Lista de Espera Aberta!</h1>
                <h3>Se você não conseguiu garantir sua vaga no curso "Peraí... Tô Pensando!", não se preocupe! Estamos animados em anunciar que a lista de espera está oficialmente aberta. </h3>
                <!-- <h5>Dias 07/08 e 08/08, ás 20h</h5> -->

                <form class="form-horizontal m-0 p-0 formulario" action="" method="post">
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-md-12 m-0 p-0">
                            <input type="email" name="txtEmail" size="100" maxlength="100" placeholder="Seu melhor email" class="form-control input-md campo_email" require />
                            <input type="text" name="txtTelefone" size="100" maxlength="100" placeholder="Seu melhor telefone" class="form-control input-md campo_email" require />
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

                <img class="logomarca" src="img/alex.png" alt="Alex Born" />
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
                Ao entrar para a lista de espera, você será o primeiro a ser informado sobre futuras oportunidades de inscrição, ofertas exclusivas e conteúdos especiais. Além disso, você receberá dicas valiosas e insights incríveis para começar a transformar sua mente desde já.

Aproveite essa chance de não ficar de fora da próxima turma! As vagas são limitadas e preenchidas por ordem de inscrição, então garanta seu lugar na lista de espera agora mesmo!

Junte-se a nós e vamos juntos trilhar um caminho de autodescoberta, crescimento pessoal e conquistas extraordinárias. Inscreva-se na lista de espera e esteja pronto para embarcar nessa jornada de transformação. 👥🚀

Não perca tempo, clique no botão abaixo e entre para a lista de espera! 👇





                </p>
                <div class="col-12 m-0 p-0">
                    <br>
                    <p>
                        <a href="#topo" class="btn btn-primary btn-lg btn-block botao" type="submit" value="Quero Participar">Quero Participar</a>

                    </p>
                </div>
            </div>





        </div>


       









        


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