<?php include('../header.php') ?>

<div class="wrapper m-5">
    <div class="container">
        <div class="my-5">
            <!-- <h2 class="heading-title-main text-capitalize display-4 fw-bolder"><?php echo explode('/', $_SERVER['REQUEST_URI'])[2] ?></h2> -->
            <h2 class="heading-title-main text-capitalize display-4 fw-bolder">Quem somos</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12 col-md-4">
                <img src="https://dummyimage.com/600x450/cb9a00/000000" alt="" class="img-fluid">
            </div>
            <div class="col-lg-7 col-sm-12 col-md-8">
                <p class="mb-3">Empresa de direito angolano constituída por capital 100% nacional com a sede social em Luanda e que atua na área da Assistência Técnica e Prestação de Serviços em Energia Estabilizada (UPS).</p>
                <p class="mb-3">Fornecemos um conjunto integrado de soluções, incluindo fornecimento, manutenções corretivas e preventivas, startups e fornecimento e substituição diversos componentes de UPS's.</p>
                <p class="mb-3">Possuímos uma equipa técnica qualificada e com vasta experiência, organizada numa estrutura flexível e com uma capacidade de resposta rápida e eficiente.</p>
                <p class="mb-3">Somos uma empresa cuja filosofia assenta numa relação profunda com cada cliente, por forma a entender as suas reais necessidades e apoiá-lo na procura de soluções que melhor se adequem à evolução do seu negócio ou actividades.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-image: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.5)), url(https://uploads.ifdesign.de/award_img_346/oex_large/316838_01_schneider_12580b_bw.jpg);background-attachment: fixed;background-position: center;background-size: cover;">
    <div class="row p-5">
        <div class="col-lg-4 col-sm-12 col-md-4 d-flex">
            <div class="bg-light text-white bg-opacity-10 d-flex flex-column justify-content-center p-4 text-white">
                <h2 class="heading-title-main fs-3 fw-bolder text-center">Valores</h2>
                <p class="text-center small">Ética, Respeito, Transparência, Comprometimento e dedicação aos nossos Clientes</p>
            </div>
        </div>

        <div class="col-lg-4 col-sm-12 col-md-4 d-flex">
            <div class="bg-light text-white bg-opacity-10 d-flex flex-column justify-content-center p-4 text-white">
                <h2 class="heading-title-main fs-3 fw-bolder text-center">Visão</h2>
                <p class="text-center small">Ser uma referência no mercado angolano, garantido profissionalismo, qualidade e competência nos nossos serviços de forma a cumprir com todos os compromissos assumidos</p>
            </div>
        </div>

        <div class="col-lg-4 col-sm-12 col-md-4 d-flex">
            <div class="bg-light text-white bg-opacity-10 d-flex flex-column justify-content-center p-4 text-white">
                <h2 class="heading-title-main fs-3 fw-bolder text-center">Missão</h2>
                <p class="text-center small">Prestar sempre um serviço de excelência, garantindo satisfação dos nossos clientes e estabelecendo assim relações de confiança mútua e contínua com os mesmos.</p>
            </div>
        </div>
    </div>
</div>

<div class="m-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-8">
                <p class="mb-3">A Erimarc está fortemente empenhada na implementação de soluções que contribuam para o sucesso dos seus Clientes, pretendendo tornar se na empresa de referência para a concepção, desenho, fornecimento e gestão de soluções de telecomunicações empresariais em Angola.</p>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center set">
                <div class="align-items-center bg-dark-red text-white d-flex flex-column justify-content-center rounded-circle p-3" style="width: 250px;height: 250px;">
                    <img src="https://www.kehua.com/SdwlUploads/Ab/t_about04.png" alt="Tempo de mercado" style="filter:invert(1); width: min-content;">
                    <h2 class="heading-title-main fs-3 fw-bolder text-center"><?php echo date("Y") - date("2015") . " anos" ?></h2>
                    <p class="text-center small">Que fornececmos as melhores marcas de UPS em todo mundo.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center set">
                <div class="align-items-center bg-dark-red text-white d-flex flex-column justify-content-center rounded-circle p-3" style="width: 250px;height: 250px;">
                    <img src="https://www.kehua.com/SdwlUploads/Ab/t_about06.png" alt="Clientes" style="filter:invert(1); width: min-content;">
                    <h2 class="heading-title-main fs-3 fw-bolder text-center">+25 clientes</h2>
                    <p class="text-center small">Temos a honra de trabalhar com as maiores empresas do país.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center set">
                <div class="align-items-center bg-dark-red text-white d-flex flex-column justify-content-center rounded-circle p-3" style="width: 250px;height: 250px;">
                    <img src="https://www.kehua.com/SdwlUploads/Ab/t_about05.png" alt="Number One" style="filter:invert(1); width: min-content;">
                    <h2 class="heading-title-main fs-3 fw-bolder text-center">Nº 1</h2>
                    <p class="text-center small">Somos líder de mercado no ramo e premiados pela qualidade.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../template/section-energy.php') ?>

<?php include('../footer.php') ?>