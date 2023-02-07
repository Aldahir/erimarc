<?php include('../header.php') ?>

<section class="bg-image-alternate mb-5 py-5" style="background-image: linear-gradient(rgba(0,0,0,.3), rgba(0, 0, 0, .3)), url(<?php echo URL_BASE ?>/assets/img/servicos/image-01.jpg);background-position: center;background-size: cover;">
    <div class="container">
        <div class="p-5">
            <h2 class="heading-title-main text-white display-4 text-center fw-bolder">Nossos serviços</h2>
        </div>
    </div>
</section>

<div class="container pb-lg-5 pb-0">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <p class="fs-5">Com a nossa experiência técnica e conhecimento no setor de proteção de energia, a Erimarc construiu uma reputação de excelência e entrega de serviços inflexíveis.</p>

            <p class="fs-5">Fornecendo o coração do nosso serviço é uma equipe de serviço dedicada, que está disponível 24 horas por dia, 7 dias por semana, para garantir a operação confiável e duradoura dos sistemas de proteção de energia de nossos clientes. Apostamos fortemente na formação contínua da nossa equipa de serviço, não só para garantir a sua competência técnica, mas também a excelência na prestação dos serviços.</p>
        </div>

        <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="image">
                <img src="<?php echo URL_BASE ?>assets/img/servicos/img-1.jpg" alt="" class="img-fluid">
            </div>
            <div class="details">
                <h3 class="fw-bold fs-3 text-center">Manutenção Preventiva Periódica</h3>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="image">
                <img src="<?php echo URL_BASE ?>assets/img/servicos/img-2.jpg" alt="" class="img-fluid">
            </div>
            <div class="details">
                <h3 class="fw-bold fs-3 text-center">Fornecimento e Instalação de UPS's</h3>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="image"><img src="<?php echo URL_BASE ?>assets/img/servicos/img-3.jpg" alt="" class="img-fluid"></div>
            <div class="details">
                <h3 class="fw-bold fs-3 text-center">Manutenção Corretiva</h3>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12 col-md-6">
            <div class="image"><img src="<?php echo URL_BASE ?>assets/img/servicos/img-4.jpg" alt="" class="img-fluid"></div>
            <div class="details">
                <h3 class="fw-bold fs-3 text-center">Visitas de Verificações e Testes nas UPS's</h3>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row bg-light attencion">
        <div class="my-5">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center text-dark">
                <img class="attencion mb-4" style="width: 10em;" src="<?php echo URL_BASE ?>assets/img/atencao.png">
                <h2 class="heading-title-main text-capitalize fs-2 fw-bold">Mantenha seus sistemas <br>de energia de backup sob controle e on-line com a ERIMARC</h2>
                <p class="fs-5">Com uma equipe de especialistas em UPS, garantimos que sua infraestrutura crítica tenha a melhor proteção para as suas necessidades.</p>
            </div>
        </div>
    </div>
</div>

<div class="wrapper m-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="align-items-center cajicua-container d-flex flex-column">
                    <div class="title text-center">
                        <h2 class="display-5 fw-bold">Se preferir, ligue, mande um e-mail <br>ou nos acompanhe nas redes sociais!</h2>
                    </div>
                    <div class="">
                        <p class="fs-3 m-0 my-lg-3 fw-bold"><a href="mailto:comercial@erimarc.co.ao" target="blank" class="nav-link p-0"><i class="fas fa-envelope"></i>&nbsp; comercial@erimarc.co.ao</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 my-5">
                <div class="align-items-center col-lg-12 col-md-12 col-sm-12 d-flex gap-3 justify-content-center text-center">
                    <a href="https://www.facebook.com/erimarc.ao" target="_blank" class="nav-link text-dark-red display-4 fab fa-facebook"></a>
                    <a href="https://www.instagram.com/erimarc.ao" target="_blank" class="nav-link text-dark-red display-4 fab fa-instagram"></a>
                    <a href="https://www.linkedin.com/company/erimarc-angola/" target="_blank" class="nav-link text-dark-red display-4 fab fa-linkedin"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll("#menu .navbar-nav .nav-item")[2].classList.add('active');
</script>


<?php include('../footer.php') ?>