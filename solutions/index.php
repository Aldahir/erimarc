<?php include('../header.php') ?>

<section class="bg-image-alternate mb-5 py-5" style="background-image: linear-gradient(rgba(0,0,0,.4), rgba(0, 0, 0, .6)), url(<?php echo URL_BASE ?>/assets/img/solucoes/image-02.jpg);background-position: center;background-size: cover;">
    <div class="container">
        <div class="p-5">
            <h2 class="heading-title-main text-white display-4 text-center fw-bolder">O que temos a oferecer</h2>
        </div>
    </div>
</section>

<div class="wrapper my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-8 mt-5 mb-3">
                <p class="fs-5">Para melhor desenvolvimento das técnicas para solução personalizada que melhor se adeque ao problema ou necessidade específica de cada cliente apresentamos alguns dos recursos tecnológicos que usamos.</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="align-items-lg-start align-items-center text-center text-lg-start d-flex flex-column rounded-0 p-3">
                    <img src="<?php echo URL_BASE ?>/assets/img/solucoes/img00.jpg" alt="Tempo de mercado">
                    <h2 class="heading-title-main fs-3 fw-normal my-4">Manutenção preventiva periódica da UPS</h2>
                    <ul class="p-0 m-0 fs-6 text-start">
                        <li>Higienização / Limpeza Total da UPS
                        <li>Leitura e registo dos alarmes</li>
                        <li>Verificação dos parâmetros elétricos e eletrónicos</li>
                        <li>Verificação das condições ambientais do local</li>
                        <li>Análise do estado das baterias</li>
                        <li>Recomendações para acções e/ou melhorias corretivas , etc</li>
                        <li>Relatório final das operações realizadas.</li>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="align-items-lg-start align-items-center text-center text-lg-start d-flex flex-column rounded-0 p-3">
                    <img src="<?php echo URL_BASE ?>/assets/img/solucoes/img01.jpg" alt="Clientes">
                    <h2 class="heading-title-main fs-3 fw-normal my-4">Fornecimento e instalação de UPS</h2>
                    <ul class="p-0 m-0 fs-6 text-start">
                        <li>Instalação completa da UPS partir de um levantamento inicial gratuíto (apenas em Luanda)</li>
                        <li>A instalação poderá ser efectuada desde uma pequena UPS a um grande onde seja necessário proceder à passagem de cablagem, montagem de quadros eléctricos ou montagem de estantes de baterias.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="align-items-lg-start align-items-center text-center text-lg-start d-flex flex-column rounded-0 p-3">
                    <img src="<?php echo URL_BASE ?>/assets/img/solucoes/img03.jpg" alt="Number One">
                    <h2 class="heading-title-main fs-3 fw-normal my-4">Manutenção corretiva de UPS fornecimento e substituição de componentes</h2>
                    <ul class="p-0 m-0 fs-6 text-start">
                        <li>Realizamos diagnósticos e testes, incluindo visita in loco por um técnico especializado analisando todo o sistema UPS (quadro eléctrico, tomadas socorridas, etc);</li>

                        <li>Forncemos e substituimos componentes sujeitos a desgates, como baterias, ventiladores, condensadores, relés entre outros.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center">
                <div class="align-items-lg-start align-items-center text-center text-lg-start d-flex flex-column rounded-0 p-3 w-100">
                    <img src="<?php echo URL_BASE ?>/assets/img/solucoes/img02.jpg" class="img-fluid" alt="Number One">
                    <h2 class="heading-title-main fs-3 fw-normal my-4">Serviços de baterias para UPS</h2>
                    <ul class="p-0 m-0 fs-6 text-start">
                        <li>Fornecimento de Baterias para UPS;</li>
                        <li>Instalação de novos Bancos de Baterias para UPS;</li>
                        <li>Verificação do estado da Bateria</li>
                        <li>Teste de Carga / Descarga;</li>
                        <li>Recomendação de medidas corretivas;</li>
                        <li>Relatório da Intervenção;</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll("#menu .navbar-nav .nav-item")[3].classList.add('active');
</script>

<?php include('../footer.php') ?>