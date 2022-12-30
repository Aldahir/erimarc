<?php include('../header.php') ?>

<section class="bg-image-alternate mb-5 py-5" style="background-image: linear-gradient(rgba(0,0,0,.7), rgba(0, 0, 0, .6)), url( https://dummyimage.com/1080x720/ffeaaa/ffffff);background-position: center;background-size: cover;">
    <div class="container">
        <div class="p-5">
            <h2 class="heading-title-main text-white display-4 text-center fw-bolder">Fale connosco</h2>
        </div>
    </div>
</section>

<div class="wrapper m-5">
    <div class="container">
        <div class="my-5">
            <p class="fs-4">Nossos técnicos estão disponíveis 24 horas por dia, nos sete dias da semana para fornecer suporte de UPS para todos os sistemas UPS. Mesmo se você não tiver um contrato, ficaremos felizes em ajudar.</p>
        </div>

        <div class="row">
            <div class="align-items-center col-lg-3 col-md-6 col-sm-12 d-flex pb-3 gap-2 ">
                <div class="align-items-center bg-dark-red d-flex justify-content-center p-3 px-4 rounded-0">
                    <i aria-hidden="true" class="fa-3x fas fa-map-marker-alt"></i>
                </div>
                <div class="d-flex flex-column">
                    <h4 class="fs-6 fw-bolder heading-title-main mb-0 text-start">Endereço</h4>
                    <small class="small">
                        <a href="" class="nav-link small p-0 text-black-50">Av. 21 de janeiro, Bº Morro Bento, Rua do Instituto Metropolitano, Luanda, Angola</a>
                    </small>
                </div>
            </div>
            <div class="align-items-center col-lg-3 col-md-6 col-sm-12 d-flex pb-3 gap-2">
                <div class="align-items-center bg-dark-red d-flex justify-content-center p-3 rounded-0">
                    <i aria-hidden="true" class="fa-3x fas fa-phone-alt"></i>
                </div>
                <div class="d-flex flex-column">
                    <h4 class="fs-6 fw-bolder heading-title-main mb-0 text-start">Telefone</h4>
                    <small class="small text-gray">
                        <a href="tel:+244222743041" class="nav-link small p-0 pt-2 text-black-50">+244 222 743 041</a>
                        <a href="tel:+244928085691" class="nav-link small p-0 text-black-50">+244 928 085 691</a>
                    </small>
                </div>
            </div>
            <div class="align-items-center col-lg-3 col-md-6 col-sm-12 d-flex pb-3 gap-2">
                <div class="align-items-center bg-dark-red d-flex justify-content-center p-3 rounded-0">
                    <i aria-hidden="true" class="fa-3x fas fa-envelope"></i>
                </div>
                <div class="d-flex flex-column">
                    <h4 class="fs-6 fw-bolder heading-title-main mb-0 text-start">E-mail</h4>
                    <small class="small">
                        <a class="nav-link small p-0 pt-2 text-black-50" target="_blank" href="mailto:comercial@erimarc.co.ao">comercial@erimarc.co.ao</a>
                        <a class="nav-link small p-0 text-black-50" target="_blank" href="mailto:vanda.manuel@erimarc.co.ao">vanda.manuel@erimarc.co.ao</a>
                        <a class="nav-link small p-0 text-black-50" target="_blank" href="mailto:carla.ferreira@erimarc.co.ao">carla.ferreira@erimarc.co.ao</a>
                    </small>
                </div>
            </div>
            <div class="align-items-center col-lg-3 col-md-6 col-sm-12 d-flex pb-3 gap-2">
                <div class="align-items-center bg-dark-red d-flex justify-content-center p-3 rounded-0">
                    <i aria-hidden="true" class="fa-3x far fa-clock"></i>
                </div>
                <div class="d-flex flex-column">
                    <h4 class="fs-6 fw-bolder heading-title-main mb-0 text-start">Horários de atendimento</h4>
                    <small class="small pt-2 text-black-50"><span class="small pt-2">Segunda à sexta-feira: 08:00 às 17:00/ Sábado: 08:00-12:00</span></small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="bg-dark-red col-lg-6 col-md-6 col-sm-12 mb-4 mb-lg-0">
                <p class="m-0 mb-4 fs-5 text-white p-lg-5 p-3" style="line-height:2">
                    Quer agendar uma conversa sem compromisso ou emitir alguma opinião sobre nossa perspectiva do mundo corporativo? A <?php echo title ?> atua em todo a capital nacional, com maior relevância e sede em Luanda. Preencha o formulário abaixo e aguarde nosso breve contato. Será um prazer interagir com você!
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <form action="" method="post" class="submit-form p-lg-3">
                    <div class="mb-3"><input type="text" name="username" id="" class="form-control rounded-0 section-light" placeholder="Nome"></div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input type="text" name="empresa" id="" class="form-control rounded-0 section-light" placeholder="Empresa">
                        </div>
                        <div class="col-md-6 ps-lg-0">
                            <input type="text" name="cidade" id="" class="form-control rounded-0 section-light" placeholder="Cidade">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="telefone" id="" class="form-control rounded-0 section-light" placeholder="Telefone">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" id="" class="form-control rounded-0 section-light" placeholder="E-mail">
                    </div>
                    <div class="mb-3 u-form-group u-label-none u-form-group-3">
                        <select name="subject" id="subject" class="form-control rounded-0">
                            <option value="null">Escolha o assunto</option>
                            <?php for ($a = 1; $a <= 6; $a++) { ?>
                                <option value="valor de exemplo <?php echo $a; ?>">Assunto <?php echo $a; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea name="msg" id="" cols="30" rows="4" class="form-control rounded-0" placeholder="Mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn bg-dark-red p-3 rounded-0">Enviar</button>
                </form>
            </div>
            <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="https://dummyimage.com/800x800/f8ee01/ffffff" class="img-fluid" alt="">
            </div> -->
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1550.573841161178!2d13.48683378272187!3d-8.880310696656927!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51fef015c329d7%3A0xf8eb06a384e0eb9d!2sCentralidade%20de%20Cacuaco!5e0!3m2!1spt-PT!2sao!4v1666605308202!5m2!1spt-PT!2sao" style="width:100%; max-width: 100%!important" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<div class="wrapper m-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="align-items-center cajicua-container d-flex flex-column">
                    <div class="title text-center">
                        Se preferir, ligue, mande um e-mail ou nos acompanhe nas redes sociais!
                    </div>
                    <div class="">
                        <p class="m-0 my-lg-3 fw-bold"><a href="mailto:geral@imfcconsulting.com" target="blank" class="nav-link p-0">comercial@erimarc.co.ao</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 my-5">
                <div class="align-items-center col-lg-12 col-md-12 col-sm-12 d-flex gap-3 justify-content-center text-center">
                    <a href="" class="nav-link text-dark-red display-4 fab fa-facebook"></a>
                    <a href="" class="nav-link text-dark-red display-4 fab fa-instagram"></a>
                    <a href="" class="nav-link text-dark-red display-4 fab fa-linkedin"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll("#menu .navbar-nav .nav-item")[4].classList.add('active');
</script>

<?php include('../footer.php') ?>