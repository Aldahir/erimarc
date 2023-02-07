<section id="contactos">
    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center mb-4">
                <h2 class="heading-title-main display-6 fw-normal">Alguma dúvida?</h2>
                <p class="fs-5 mt-4 mb-3">Fale com nossos especialistas em serviços de assistência, manutenção e reparação de UPS</p>
            </div>

            <!-- <div class="col-sm-12 col-md-6 col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1550.573841161178!2d13.48683378272187!3d-8.880310696656927!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51fef015c329d7%3A0xf8eb06a384e0eb9d!2sCentralidade%20de%20Cacuaco!5e0!3m2!1spt-PT!2sao!4v1666605308202!5m2!1spt-PT!2sao" width="600" style="max-width: 100%!important" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
            </div> -->

            <div class="m-auto d-flex justify-content-center flex-column align-content-center col-sm-12 col-md-6 col-lg-6">
                <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="contact7" name="form">
                    <div class="mt-lg-4 u-form-group u-form-name u-label-none">
                        <label for="name-3b9a" class="u-label">Nome completo</label>
                        <input type="text" placeholder="Escreva o seu primeiro e último nome" id="name-3b9a" name="name" class="form-control rounded-0" required="">
                    </div>
                    <div class="mt-lg-4 u-form-email u-form-group u-label-none">
                        <label for="email-3b9a" class="u-label">Email</label>
                        <input type="email" placeholder="Escreva o seu endereço de email válido" id="email-3b9a" name="email" class="form-control rounded-0" required="">
                    </div>
                    <div class="mt-lg-4 u-form-group u-label-none u-form-group-3">
                        <label for="text-f3bd" class="u-label">Assunto</label>
                        <select name="subject" id="subject" class="form-control rounded-0">
                            <option value="null">Escolha o assunto</option>
                            <?php for ($a = 1; $a <= 6; $a++) { ?>
                                <option value="valor de exemplo <?php echo $a; ?>">Assunto <?php echo $a; ?></option>
                            <?php } ?>
                        </select>
                        <!-- <input type="text" placeholder="Assunto" id="text-f3bd" name="text" class="form-control rounded-0"> -->
                    </div>
                    <div class="mt-lg-4 u-form-group u-form-message u-label-none">
                        <label for="message-3b9a" class="u-label">Mensagem</label>
                        <textarea placeholder="Escreva aqui a mensagem" rows="4" cols="50" id="message-3b9a" name="message" class="form-control rounded-0" required=""></textarea>
                    </div>
                    <div class="mt-lg-4 u-align-left u-form-group u-form-submit">
                        <button type="submit" class="btn bg-dark-red mt-3 mt-lg-0 px-lg-4 px-3 rounded-0">Enviar</button>
                    </div>
                    <div class="d-none u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="d-none u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                </form>
            </div>
        </div>
    </div>
</section>