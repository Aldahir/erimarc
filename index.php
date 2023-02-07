<?php

switch (isset($_REQUEST['ac'])) {
    
    case 'procurar':
        $data = json_decode(file_get_contents('php://input'));
        $array = array(
            "term" => $data->search
        );
        echo json_encode($array);
        break;
        
    case 'setCookie':
        $_SESSION['cookies'] = true;
        echo json_encode(array('msg' => 'Successfully', 'status' => 200, 'cookies' => $_SESSION['cookies']));
        break;
    default:
        include('header.php');
        include('template/section-main.php');
        include('template/section-servicos.php');
        include('template/section-gallery.php');
        include('template/section-clients.php');
        include('template/section-contacts.php');
        //include('template/section-whatsapp.php');
        include('footer.php'); ?>

        <script>
            document.querySelectorAll("#menu .navbar-nav .nav-item")[0].classList.add('active');
        </script>

<?php break;
}
