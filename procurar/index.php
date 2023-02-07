<?php include('../header.php');

if (isset($_REQUEST['search'])) :
?>

    <section class="bg-image-alternate mb-5 py-5" style="background-image: linear-gradient(rgba(0,0,0,.6), rgba(0, 0, 0, .6)), url(<?php echo URL_BASE ?>/assets/img/image.png);background-position: center bottom;background-attachment: fixed;background-size: cover;">
        <div class="container">
            <div class="p-5">
                <h2 class="heading-title-main text-white display-4 text-center fw-bold">Você pesquisou por <?php echo ucfirst($_REQUEST['search']) ?></h2>
            </div>
        </div>
    </section>

    <div class="wrapper my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="small text-decoration-none text-dark-red" href="<?php echo URL_BASE ?>">Início</a></li>
                            <li class="breadcrumb-item"><a class="small text-decoration-none text-dark-red" href="<?php echo URL_BASE ?>procurar/">Procurar</a></li>
                            <li class="breadcrumb-item active small" aria-current="page"><?php echo ucfirst($_REQUEST['search']) ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12"></div>
                <div class="col-lg-8 col-md-7 col-sm-12"></div>
            </div>
        </div>
    </div>
    
    <?php else : ?>
        
        <div class="wrapper mt-5">            
            <?php include('../template/section-search.php'); ?>
            <?php include('../template/section-whatsapp.php'); ?>
        </div>

    <?php endif;
include('../footer.php'); ?>