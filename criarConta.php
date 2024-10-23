<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revo</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css"> <!-- acessibilidade -->
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


</head>

<body>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <!-- header -->
    <header class="header bg-blue">
        <div class="header-inner text-white text-center">
            <div class="container grid">
                <div class="header-inner-left">
                    <h1>Venha fazer parte<br> <span>Clínica Higia</span></h1>
                    <p class="lead">A melhor para a sua saúde</p>
                    <p class="text text-md">Com uma ligação de 10 minutos você cria o seu convênio conosco e garante o
                        melhor para a sua saúde pelo menor preço</p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-white">Ligar</a>
                        <!--<a href="javascript:void(0);" onclick="window.location.href='<?php echo 'tel:+5511941782793'; ?>'"> Ligar</a>-->

                        <p class='btn btn-light-blue'>
                            <a href="javascript:void(0);"
                                onclick="window.location.href='<?php echo 'https://wa.me/+5511999999999?text=' . urlencode('Olá, gostaria de saber mais sobre seus serviços.'); ?>';">WhatsApp</a>
                        </p>
                    </div>
                </div>
                <div class="header-inner-right">
                    <img src="css/images/header.png">
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <main>
        <!-- about section -->
        <section id="about" class="about py">
            <div class="about-inner">
                <div class="container grid">
                    <div class="about-left text-center">
                        <div class="section-head">
                            <h2>Quem nos somos?</h2>
                            <div class="border-line"></div>
                        </div>
                        <p class="text text-lg">Nós somos a Clínica Médica Higia, uma instituição que trabalha com foco
                            na sua saúde e bem-estar, sempre buscando atender às suas necessidades da melhor forma
                            possível. <br>Nossos especialistas são altamente qualificados e comprometidos, e nossos
                            métodos são seguros e eficazes.</p>
                        <p class='btn btn-white'>
                            <a href="javascript:void(0);"
                                onclick="window.location.href='<?php echo 'https://wa.me/+5511999999999?text=' . urlencode('Olá, gostaria de saber mais sobre seus serviços.'); ?>';">WhatsApp</a>
                        </p>
                    </div>
                    <div class="about-right flex">
                        <div class="img">
                            <img src="css/images/about-img.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- banner one -->
        <section id="banner-one" class="banner-one text-center">
            <div class="container text-white">
                <blockquote class="lead"><i class="fas fa-quote-left"></i> “A saúde é a primeira condição para a
                    felicidade. A felicidade é a primeira condição para a saúde.” <i class="fas fa-quote-right"></i>
                </blockquote>
                <small class="text text-sm">– Henri-Frédéric Amiel </small>
            </div>
        </section>
        <!-- end of banner one -->

        <!-- services section -->
        <section id="services" class="services py">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="lead">O melhor para preservar para sua saúde!</h2>
                    <p class="text text-lg">Cuidando de você com amor, zelo e exelência. </p>
                    <div class="line-art flex">
                        <div></div>
                        <img src="css/images/4-dots.png">
                        <div></div>
                    </div>
                </div>
                <div class="services-inner text-center grid">
                    <article class="service-item">
                        <div class="icon">
                            <img src="css/images/service-icon-1.png">
                        </div>
                        <h3>Acompanhamento completo</h3>
                        <p class="text text-sm">Avaliação detalhada da sua saúde para garantir bem-estar e qualidade de
                            vida com exames precisos, presando pelo seu melhor em cada fase da sua vida!</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                            <img src="css/images/service-icon-2.png">
                        </div>
                        <h3>Tratamento médico</h3>
                        <p class="text text-sm">Tratamentos completos com médicos de diversas especialiddes dedicados a
                            te entregar os melhores resustados para seus exames realizado conosco!</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                            <img src="css/images/service-icon-3.png">
                        </div>
                        <h3>Prioridazando a vida</h3>
                        <p class="text text-sm">Priorizamos a sua saúde? Sim, mas mais do q isso priorizamos a sua vida
                            e vida com qualidade! Aqui fazemos de tudo para te manter muitissimo bem!</p>
                    </article>

                    <article class="service-item">
                        <div class="icon">
                            <img src="css/images/service-icon-4.png">
                        </div>
                        <h3>Melhor atendimento</h3>
                        <p class="text text-sm">Nós temos os melhores atendimentos, com os especialistas da melhor
                            qualidade e que te entregam além de um exelente trabalho, muito amor e carinho!</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- banner two section -->
        <section id="banner-two" class="banner-two text-center">
            <div class="container grid">
                <div class="banner-two-left">
                    <img src="css/images/banner-2-img.png">
                </div>
                <div class="banner-two-right">
                    <p class="lead text-white">Consultar-se com nossa clinica é se consultar com aqueles que amam ver
                        sua satisfação e seu bem estar!</p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-white">Ligar</a>
                        <a href="#" class="btn btn-light-blue">WhatsApp</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of banner two section -->

        <!-- doctors section -->
        <section id="doc-panel" class="doc-panel py">
            <div class="container">
                <div class="section-head">
                    <h2>Alguns e nossos especialistas:</h2>
                </div>

                <div class="doc-panel-inner grid">
                    <div class="doc-panel-item">
                        <div class="img flex">
                            <img src="css/images/doc-1.png" alt="doctor image">
                            <div class="info text-center bg-blue text-white flex">
                                <p class="lead">Samuel Gomes</p>
                                <p class="text-lg">Clínico Geral</p>
                            </div>
                        </div>
                    </div>

                    <div class="doc-panel-item">
                        <div class="img flex">
                            <img src="css/images/doc-2.png" alt="doctor image">
                            <div class="info text-center bg-blue text-white flex">
                                <p class="lead">Elizabeth Machado</p>
                                <p class="text-lg">Cardiologista</p>
                            </div>
                        </div>
                    </div>

                    <div class="doc-panel-item">
                        <div class="img flex">
                            <img src="css/images/doc-3.png" alt="doctor image">
                            <div class="info text-center bg-blue text-white flex">
                                <p class="lead">Tanya Correa</p>
                                <p class="text-lg">Pediatra</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of doctors section -->

        <!-- contact section -->
        <section id="contact" class="contact py">
            <div class="container grid">
                <div class="contact-left">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2384.6268289831164!2d-6.214682984112116!3d53.29621947996855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486709e0c9c80f8f%3A0x92f408d10f2277c2!2sREVO!5e0!3m2!1sen!2snp!4v1636264848776!5m2!1sen!2snp"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="contact-right text-white text-center bg-blue">
                    <div class="contact-head">
                        <h3 class="lead">Fale conosco:</h3>
                        <p class="text text-md">Caso haja alguma duvida sobre nós, mande sua mensagem e respoderemos
                            brevemente pelo seu email.</p>
                    </div>
                    <form>
                        <div class="form-element">
                            <input type="text" class="form-control" placeholder="Nome">
                        </div>
                        <div class="form-element">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-element">
                            <textarea rows="5" placeholder="Mensagem" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-white btn-submit">
                            <i class="fas fa-arrow-right"></i>Enviar
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <!-- end of contact section -->
    </main>
    <!-- custom js -->
    <script src="js/script.js"></script>
</body>

</html>