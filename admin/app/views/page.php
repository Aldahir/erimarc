<?php
    require '../model/cPonto.php';

    $cponto = new cPonto();

    $html = "<h2>Kiss my ass</h2>\t\t<div class=\"bg-white bottom-0 end-0 m-auto p-3 position-absolute shadow start-0 top-0 w-75\" style=\"height:fit-content\">\n
        \t\t\t<div class=\"image\"><img src=\"https://fantastico-ao.agency/wp-content/uploads/2022/06/ic_success.gif\" class=\"img-fluid w-50\"></div>\n
        \t\t\t<div class=\"p-5\">\n
            \t\t\t\t<h1 class=\"mb-5 fs-3 fw-bolder\">Enviada com êxito!</h1>\n
            \t\t\t\t<p class=\"my-4 text-gray\">Agradecemos contacto 🥳.</p>\n
            \t\t\t\t<p class=\"my-4 text-gray\">Responderemos sua mensagem o mais breve possível.</p>\n
            \t\t\t\t<p class=\"my-4 text-gray\">Obrigado.</p>\n
            \t\t\t\t<div class=\"d-flex d-lg-block form-group justify-content-center mb-4\">\n\t\t\t\t\t<button type=\"button\" onclick=\"document.querySelector('.message').remove();\" class=\"btn close btn-primary rounded-0 w-25\">Sair</button>\n</div>\n
        \t\t\t</div>\n
    \t\t</div>
    <div class=\"bg-white bottom-0 end-0 m-auto p-3 position-absolute shadow start-0 top-0 w-75\" style=\"height:fit-content\">
        <div class=\"image\">
            <img src=\"https://fantastico-ao.agency/wp-content/uploads/2022/06/ic_fail.gif\" class=\"img-fluid w-50\">
        </div>
        <div class=\"p-5\">
            <h1 class=\"mb-5 fs-3 fw-bolder\">Falha no envio!</h1>
            <p class=\"my-4 text-gray\">Não foi possível enviar sua mensagem 😢.</p>
            <p class=\"my-4 text-gray\">Por favor tente novamente. Caso o problema persistir por favor contacte-nos pelo whatsapp <a href=\"https://wa.me/244926561603\">926561603</a></p> 
            <div class=\"d-flex d-lg-block form-group justify-content-center mb-4\">
                <button type=\"button\" onclick=\"document.querySelector('.message').remove()\" class=\"btn close btn-primary rounded-0 w-25\">Sair</button>
            </div>
        </div>
    </div>";

    $cponto->render_page("Exemplo", 0, $html);
?>