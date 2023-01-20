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
            <div id="clientes-slide" class="col-md-8">
                <div class="d-flex">
                    <div class="active">
                        <div class="justify-content-center row">
                            <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/chitotolo.jpg" alt="Logotipo da Sociedade Mineira do Chitotolo" srcset="<?php echo URL_BASE ?>assets/img/clientes/chitotolo.jpg 250w" style="width: 250px;" class="d-block"></div>

                            <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/sistec.jpg" style="width: 250px;" alt="Sistec Angola" srcset="<?php echo URL_BASE ?>assets/img/clientes/sistec.jpg 250w" class="d-block"></div>

                            <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/sodiam.jpg" alt="Logotipo da Sodiam" srcset="<?php echo URL_BASE ?>assets/img/clientes/sodiam.jpg 250w" style="width: 250px;" class="d-block"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="justify-content-center row">
                            <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/noble-group.jpg" alt="Logotipo da Noble Group" srcset="<?php echo URL_BASE ?>assets/img/clientes/noble-group.jpg 250w" style="width: 250px;" class="d-block"></div>

                            <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/inacom.jpg" alt="Logotipo da Inacom" srcset="<?php echo URL_BASE ?>assets/img/clientes/inacom.jpg 250w" style="width: 250px;" class="d-block"></div>

                            <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/angola-prev.jpg" alt="Logotipo da Inacom" srcset="<?php echo URL_BASE ?>assets/img/clientes/angola-prev.jpg 250w" style="width: 250px;" class="d-block"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="justify-content-center row">
                            <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/bollore.jpg" alt="Logotipo da Noble Group" srcset="<?php echo URL_BASE ?>assets/img/clientes/bollore.jpg 250w" style="width: 250px;" class="d-block"></div>

                            <div class="cajicua-container"><img src="<?php echo URL_BASE ?>assets/img/clientes/vtb.jpg" alt="Logotipo da Inacom" srcset="<?php echo URL_BASE ?>assets/img/clientes/vtb.jpg 250w" style="width: 250px;" class="d-block"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 p-5">
                <div class="row text-center justify-content-center align-items-center">
                    <div class="col-sm-8">
                        <h3 class="mt-5 title display-6 fw-normal">Palavra dos nossos clientes</h3>
                        <p class="my-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque cupiditate error voluptatum vel dolore libero asperiores reiciendis iure a, nisi eligendi, ipsa aliquid exercitationem. Numquam aliquam pariatur aut dolores optio.</p>

                        <div class="d-flex flex-column align-items-center">
                            <div class="image">
                                <img src="https://dummyimage.com/1:1x60/0edfff" alt="" class="border border-2 img-fluid rounded-circle">
                            </div>
                            <div class="fs-5 my-2 fw-bold">Lohn Doe</div>
                            <div class="fs-6 fw-normal text-primary">CEO MarkSeller</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php

include('../template/section-energy.php');
include('../footer.php') ?>