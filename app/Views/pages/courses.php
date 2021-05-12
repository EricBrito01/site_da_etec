<!--====== SEARCH BOX PART START ======-->

<div class="search-box">
    <div class="serach-form">
        <div class="closebtn">
            <span></span>
            <span></span>
        </div>
        <form action="#">
            <input type="text" placeholder="Search by keyword">
            <button><i class="fa fa-search"></i></button>
        </form>
    </div> <!-- serach form -->
</div>

<!--====== SEARCH BOX PART ENDS ======-->

<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Nossos Cursos</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== COURSES PART START ======-->

<section id="courses-part" class="pt-120 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="courses-top-search">
                    <ul class="nav float-left" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="courses-grid-tab" data-toggle="tab" href="#courses-grid" role="tab" aria-controls="courses-grid" aria-selected="true"><i class="fa fa-th-large"></i></a>
                        </li>
                        <li class="nav-item">
                            <a id="courses-list-tab" data-toggle="tab" href="#courses-list" role="tab" aria-controls="courses-list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                        </li>

                    </ul> <!-- nav -->

                    <div class="courses-search float-right">

                    </div> <!-- courses search -->
                </div> <!-- courses top search -->
            </div>
        </div> <!-- row -->


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                <div class="row course-slied mt-30">
                    <?php if ($cursos) : ?>
                        <?php $c=0;foreach ($cursos as $curso) : ?>

                            <div class="col-lg-4 col-md-6">
                                <div class="singel-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="upload/capas_cursos/<?= $curso['curso_capa'] ?>" alt="Course">
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <h4><?= $curso['curso_nome'] ?></h4><br>
                                        <span><i class="fa fa-clock-o"></i><?= $curso['curso_horario'] ?> - <?= $curso['curso_horario_fim'] ?></span>
                                        <hr>
                                        <div>
                                            <p style="font-size: small;"><?php if (strlen($curso['curso_descricao']) <= 324) {
                                                                                echo $curso['curso_descricao'];
                                                                                $b = 0;
                                                                                echo "<br>";
                                                                            } else {
                                                                                $b = 1;
                                                                                $text = array();
                                                                                $text = str_split($curso['curso_descricao'], 325);
                                                                                echo $text[0];
                                                                                $texto = '';
                                                                            ?> <span id="dots<?= $c ?>">...</span><span id="more<?= $c ?>" style="font-size: small;display:none">

                                                    <?php for ($i = 1; $i < count($text); $i++) {
                                                                                    $texto .= $text[$i];
                                                                                }
                                                                                echo $texto;
                                                                            } ?></span></p>

                                            <?php
                                            if ($b == 1) {
                                                echo "<br><button onclick='mostrar(this.name)' id='mybtn".$c."' name='".$c."' class='btn btn-outline-primary btn-sm'>Ler Mais</button><br>";
                                            }
                                            ?>
                                        </div>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <img src="upload/fotos_professores/<?= $curso['curso_professor_foto'] ?>" alt="teacher">
                                            </div>
                                            <div class="name">
                                                <h6><?= $curso['curso_professor'] ?></h6>
                                            </div>
                                            <div class="admin">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-user"></i><span>Vagas: <?= $curso['curso_vagas'] ?></span></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- singel course -->
                            </div>
                        <?php $c++;
                        endforeach; ?>
                    <?php endif; ?>

                </div> <!--  row  -->
            </div> <!-- singel course -->
        </div>

    </div> <!-- row -->

    </div>
    </div> <!-- tab content -->
    </div>


</section>

<script>
    // var dots = document.getElementById("dots");
    // var moreText = document.getElementById("more");
    // var btnText = document.getElementById("myBtn");


    function mostrar(btn) {
        var more = eval('more'+btn);
        var dots = eval('dots'+btn);
        var mybtn = eval('mybtn'+btn);

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            mybtn.innerHTML = "Ler Mais";
            more.style.display = "none";
        } else {
            dots.style.display = "none";
            mybtn.innerHTML = "Ler Menos";
            more.style.display = "inline";
        }
        // console.log(btn);
    }
</script>

<!--====== COURSES PART ENDS ======-->