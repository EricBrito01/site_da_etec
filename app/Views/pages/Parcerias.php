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

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="6" style="background-image: url(images/banner-parceria.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Parcerias</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Parcerias</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== TEACHERS PART START ======-->

<section id="teachers-page" class="pt-90 pb-120 gray-bg">


    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="images/Logo-Office-365.jpeg" alt="microsoft365">
                    </div>
                    <div class="cont">
                        <a href="http://fatec.sp.gov.br/view/Default.aspx">
                            <h6>Pacote Office 365 </h6>
                        </a>
                    </div>
                </div> <!-- singel teachers -->
            </div>
            <div>

                <div class="singel-teachers mt-30 text-center">

                    <h2> Microsoft 365 (antes Office 365) </h2>
                    <p>

                        ?? uma vers??o online por assinatura da su??te de aplicativos para escrit??rio/produtividade Microsoft Office,
                        focado no trabalho colaborativo simult??neo (co-autoria) de uma grande equipe e na seguran??a,
                        lan??ado em junho de 2011 desenvolvido pela empresa Microsoft. Para usu??rios que n??o utilizam sistemas em nuvem
                        foi lan??ado a vers??o tradicional Office 2019, sem fun????o de atualiza????o autom??tica (chamado de compra avulsa).

                        Tem suporte nos sistemas operacionais Windows, macOS, iOS e Android, A suite inclui vers??es na nuvem do Exchange,
                        Outlook, OneDrive, OneNote, SharePoint, Teams, Yammer, Power BI, Stream, Bookings, Skype, Office Online,
                        vers??es no computador do Publisher e Access e, prote????o contra phishing e ransomware, e atualiza????es autom??ticas
                        peri??dicas.?? utilizada no navegador web, sem a necessidade de instala????o, bastando criar uma conta para uso.

                    </p>
                </div>

            </div>

        </div>
    </div> <!-- row -->
    </div> <!-- container -->
</section>

<div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
    <div class="row course-slied mt-30"> <?php if ($parceiros) : ?>
            <?php foreach ($parceiros as $parceiro) : ?>
                <div class='col-md-2'>
                    <div class='card'>
                        <img class="card-img-top" src="upload/fotos_parcerias/<?= $parceiro['parceiro_foto'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <a href="<?= "https://" . $parceiro['parceiro_link'] ?>">
                                <h5 class="card-title"><?= $parceiro['parceiro_nome'] ?></h5>
                            </a>
                            <p class="card-text"><?= $parceiro['parceiro_descricao'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
</div>
<!--====== TEACHERS PART ENDS ======-->