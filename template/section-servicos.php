<div class="container-fluid my-5 p-0 pt-lg-4 px-lg-5">
    <div class="row text-black text-center">
        <div class="col-12 mb-5 col-lg-12 col-sm-12 col-md-12">
            <h2 class="display-4 fw-bolder" style="letter-spacing: -1px;">O que fazemos</h2>
            <p class='mt-3 fs'>Soluções direcionadas para o seu negócio físico ou digital.</p>
        </div>
    </div>

    <div class="row text-black">
        <?php for ($a = 1; $a <= 4; $a++) { ?>

            <div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-4 services">
                <div class="align-items-end d-flex" style="height: 350px;background-image: url(https://dummyimage.com/240x800/ffeaaa/ffffff);background-position: center;background-size: cover;">
                    <!-- <div class="align-items-end d-flex" style="height: 350px;background-image: url(http://127.0.0.1/aldair/image-exemplo/?s=240x800&c=ffe9aa);background-position: center;background-size: cover;"> -->
                    <div class="text-center" style="height: fit-content;">
                        <div class="pb-3 title">
                            <h2 class="heading-title fs-4 fw-bolder" style="letter-spacing: -1px;">Serviço <?php echo $a; ?></h2>
                        </div>

                        <div class="content text-center">
                            <p class="p-4" style="font-size:10pt">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque molestias delectus quidem sunt, maiores soluta dolores molestiae esse excepturi sapiente repellat alias iure deleniti sit quaerat dolor architecto iusto explicabo!</p>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

        <div class="controls d-flex justify-content-center mt-5">
            <a href="" class="btn bg-dark-red rounded-0 p-3">Ver todos</a>
        </div>
    </div>
</div>

<section class="bg-image-alternate bg-gradient-amc my-5">
    <div class="container text-white py-5">
        <div class="row text-center">
            <div class="col-lg-12 mb-5 mt-3">
                <h2 class="display-5 fw-bolder" style="letter-spacing: -1px;">Lorem ipsum dolor </h2>
            </div>
            <div class="col-lg-4">
                <div class="icon fs-2 mb-3">
                    <i class="fas fa-tv fa-2x"></i>
                </div>
                <h3 class="display-3 fw-normal views-number">37</h3>
                <div class="content">
                    <p class="my-4 fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon fs-2 mb-3">
                    <i class="fas fa-charging-station fa-2x"></i>
                </div>
                <h3 class="display-3 fw-normal charging-number">103</h3>
                <div class="content">
                    <p class="my-4 fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon fs-2 mb-3">
                    <i class="fas fa-recycle fa-2x"></i>
                </div>
                <h3 class="display-3 fw-normal recycle-number">1024</h3>
                <div class="content">
                    <p class="my-4 fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>
</section>