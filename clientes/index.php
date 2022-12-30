<?php include('../header.php') ?>
<section class="bg-image-alternate mb-5 py-5" style="background-image: linear-gradient(rgba(0,0,0,.7), rgba(0, 0, 0, .6)), url( https://dummyimage.com/1080x720/ffeaaa/ffffff);background-position: center;background-size: cover;">
    <div class="container">
        <div class="p-5">
            <h2 class="heading-title-main text-white display-4 text-center fw-bolder">Clientes</h2>
        </div>
    </div>
</section>
<div class="wrapper m-5">
    <div class="container">
        <div class="align-content-center justify-content-center row">
            <div id="clientes-slide" class="carousel slide" data-bs-ride="carousel">
                <button type="button" data-bs-target="#clientes-slide" class="carousel-control-prev" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="justify-content-center row">
                            <div class="col-lg-3 col-sm-12 col-md-3">
                                <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/chitotolo.jpg" alt="Logotipo da Sociedade Mineira do Chitotolo" srcset="<?php echo URL_BASE ?>assets/img/clientes/chitotolo.jpg 1233w" class="d-block w-100"></div>
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-3">
                                <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/sistec.jpg" alt="Sistec Angola" srcset="<?php echo URL_BASE ?>assets/img/clientes/sistec.jpg 1233w" class="d-block w-100"></div>
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-3">
                                <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/sodiam.jpg" alt="Logotipo da Sodiam" srcset="<?php echo URL_BASE ?>assets/img/clientes/sodiam.jpg 1233w" class="d-block w-100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="justify-content-center row">
                            <div class="col-lg-3 col-sm-12 col-md-3">
                                <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/noble-group.jpg" alt="Logotipo da Noble Group" srcset="<?php echo URL_BASE ?>assets/img/clientes/noble-group.jpg 1233w" class="d-block w-100"></div>
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-3">
                                <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/inacom.jpg" alt="Logotipo da Inacom" srcset="<?php echo URL_BASE ?>assets/img/clientes/inacom.jpg 1233w" class="d-block w-100"></div>
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-3">
                                <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/angola-prev.jpg" alt="Logotipo da Inacom" srcset="<?php echo URL_BASE ?>assets/img/clientes/angola-prev.jpg 1233w" class="d-block w-100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="justify-content-center row">
                            <div class="col-lg-3 col-sm-12 col-md-3">
                                <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/bollore.jpg" alt="Logotipo da Noble Group" srcset="<?php echo URL_BASE ?>assets/img/clientes/bollore.jpg 1233w" class="d-block w-100"></div>
                            </div>
                            <div class="col-lg-3 col-sm-12 col-md-3">
                                <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/vtb.jpg" alt="Logotipo da Inacom" srcset="<?php echo URL_BASE ?>assets/img/clientes/vtb.jpg 1233w" class="d-block w-100"></div>
                            </div>
                            <!-- <div class="col-3 col-lg-3 col-sm-3 col-md-3">
                                <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/angola-prev.jpg" alt="Logotipo da Inacom" srcset="<?php echo URL_BASE ?>assets/img/clientes/angola-prev.jpg 1233w" class="d-block w-100"></div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <button type="button" data-bs-target="#clientes-slide" class="carousel-control-next" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- <div class="d-flex justify-content-center mt-4 flex-direction-row align-self-center align-items-center mt-5 text-center" style="margin:80px 0">
                <a class="btn btn-animation btn-primary bg-dark-red text-white fw-bold fw-normal py-3 rounded-0" href="https://api.whatsapp.com/send?phone=244926561603">
                    <i class="fab fa-whatsapp"></i>
                    <span class="ms-1">Fale pelo Whatsapp</span>
                </a>
            </div> -->
        </div>
    </div>
</div>

<?php

include('../template/section-energy.php');
include('../footer.php') ?>