


    <!--====== SLIDER PART START ======-->
    
    <section id="slider-part" class="slider-active">
        <?php if($imagens):?>
            <?php foreach($imagens as $imagem): ?>
        <div class="single-slider bg_cover pt-150" style="background-image: url(upload/fotos_carrosel/<?= $imagem['imagem_nome']?>)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s"></h1>
                            <p data-animation="fadeInUp" data-delay="1.3s"></p>
                            <ul>
                               

                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <?php endforeach; ?>
       <?php endif;?>
    </section>
    <br><br><br>
    <br><br><br>
    <br><br><br>

    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== CATEGORY PART START ======-->
    
    <section id="category-part">
        <div class="container">
            <div class="category pt-40 pb-80">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-text pt-40">
                            <h2>Nossos cursos, confira já!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slied mt-40">
                            <div class="col-lg-4">
                                <a href="https://www.vestibulinhoetec.com.br/unidades-cursos/curso.asp?c=1500">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-1.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Modular:</span>
                                            <span>Desenvolvimento de sistemas</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
            
                            <div class="col-lg-4">
                                <a href="https://www.vestibulinhoetec.com.br/unidades-cursos/curso.asp?c=514">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img style='width:95px'src="images/all-icon/icone-rh.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Modular:</span>
                                            <span>Recursos Humanos</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://www.vestibulinhoetec.com.br/unidades-cursos/curso.asp?c=1326">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-2.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>ETIM</span>
                                            <span>Administração Geral</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://www.vestibulinhoetec.com.br/unidades-cursos/curso.asp?c=1545">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="images/all-icon/ctg-1.png" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>ETIM</span>
                                            <span>Desenvolvimento de sistemas</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            
                        </div> <!-- category slied -->
                    </div>
                </div> <!-- row -->
            </div> <!-- category -->
        </div> <!-- container -->
    </section>
    
    <!--====== CATEGORY PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Sobre Nós</h5>
                        <h2>Bem vindo à Etec Ermelinda Giannini Teixeira </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>ETEC Professora Ermelinda Giannini Teixeira iniciou suas atividades, como sala descentralizada da ETEC de São Roque, na data de 24 de julho de 2008, oferecendo os cursos de logística e informática, ambos nos períodos vespertino e noturno.
                            Em 19 de setembro de 2008, a Etec tornou-se unidade autônoma, contando na Direção com a Professora Roseli Barna Christo de Camargo, com Lisete do Carmo Cardoso Messias na Diretoria de Serviços e Selma Rizzi na Secretaria Acadêmica.
                            Em novembro de 2008, passamos a oferecer, logística, informática e o ensino médio. Atualmente, contamos com uma classe de ensino médio no período matutino, informática (tarde e noite) e logística (tarde e noite, sendo duas classes do primeiro módulo à noite).
                            </p>
                        <a href="http://localhost:8081/etec/public/about" class="main-btn mt-55">Ler Mais</a>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Eventos da Etec</h3>
                        </div> <!-- event title -->
                        <ul>
                            <?php if($news):?>
                                
                                <?php foreach($news as $newsItem): ?>
                            
                                    <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i><?php echo $newsItem['eventos_data'] ?></span>
                                    <h4><?php echo $newsItem['eventos_titulo']?></h4>
                                    <span><i class="fa fa-clock-o"></i><?php echo $newsItem['eventos_informacoes']?></span>
                                    <span><i class="fa fa-map-marker"></i> <?php echo $newsItem['eventos_local']?></span>
                                </div>
                            </li>

                                    <?php endforeach; ?>

                            <?php endif; ?>
                            
                       
                        </ul> 
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="images/about/bg-1.png" alt="About">
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
   
    <!--====== APPLY PART START ======-->
    
    <section id="apply-aprt" class="pb-120">
   
        <div class="container">
       
            <div class="apply">
            
                <div class="row no-gutters">
                <?php if($chamadas): ?>
                        <?php foreach($chamadas as $chamada): ?>
                    <div class="col-lg-6" style="padding-left: 11px; padding-top: 9px;">
                    
                        <div class="apply-cont apply-color-1">
                            <h3><?= $chamada['chamada_titulo'] ?></h3>
                            <a href="<?= $chamada['chamada_link']?>" class="main-btn">Clique para ver mais</a>
                        </div> <!-- apply cont -->
                       
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                       
                    </div> 
                   
                </div>
               
            </div> <!-- row -->
           
            
        </div> <!-- container -->
       
    </section>
    
    <!--====== APPLY PART ENDS ======-->
   
    <!--====== COURSE PART START ======-->
    
    <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Nossos cursos</h5>
                        <h2>Cursos Disponíveis </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                
                <?php if($cursos): ?>
                    <?php foreach($cursos as $curso): ?>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="upload/capas_cursos/<?= $curso['curso_capa']?>" alt="Course">
                            </div>
                            
                        </div>
                        <div class="cont">
                             
                            <span>(<?= $curso['curso_vagas']?> Vagas)</span>
                            <a href="<?= base_url() . '/courses'?>"><h4><?= $curso['curso_nome'] ?></h4></a>
                            <div class="course-teacher">
                                <div class="thum">
                                   <img src="upload/fotos_professores/<?= $curso['curso_professor_foto']?>" alt="teacher">
                                </div>
                                <div class="name">
                                   <h6>Coordenador - <?= $curso['curso_professor'] ?></h6>
                                </div>
                                
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>
    
    <!--====== COURSE PART ENDS ======-->
   
    <!--====== VIDEO FEATURE PART START ======-->
    
    <section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(images/bg_elvis.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="video text-lg-left text-center pt-50">
                        <a class="Video-popup" href="https://www.youtube.com/watch?v=-oZSyTn0nJQ"><i class="fa fa-play"></i></a>
                    </div> <!-- row -->
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3>Nosso Canal no Youtube</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="images/all-icon/f-1.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Fique ligado nos recebimentos de diploma</h4>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="images/all-icon/f-2.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Mostragem de alunos e sala de aulas</h4>
                                      
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="images/all-icon/f-3.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Projetos de Trabalho de Conclusão de curso</h4>
                
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                        </ul>
                    </div> <!-- feature -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="feature-bg"></div> <!-- feature bg -->
    </section><br><br><br><br><br><br><br><br><br><br><br><br>
    


   
    <!--====== PATNAR LOGO PART START ======-->
    
    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/microsoft.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/saopaulo.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/office.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/cps2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/azure.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/teams.png" alt="Logo">
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> 
    
    <!--====== PATNAR LOGO PART ENDS ======-->

