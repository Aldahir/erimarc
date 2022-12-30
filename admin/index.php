<?php 
!defined('URL_BASE') ? define('URL_BASE', "https://erimarc.co.ao/teste/admin") : null; 
// !defined('URL_BASE') ? define('URL_BASE', "http://127.0.0.1/erimarc/admin") : null; 
?>
<!DOCTYPE html>
<html lang="pt">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>cPonto</title>
   <link rel="stylesheet" href="<?php echo URL_BASE ?>/dist/css/cponto.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
   <div class="container">
      <aside>
         <ul class="sidebar-menu">
            <li class="item active">
               <span style="display: flex;opacity: .5;align-items: center;justify-content:center"><img src="dist/img/dashboard.svg" alt="Icone para páginas" srcset=""></span>
               <a href="javascript:void(0);" id="dashboard">Dashboard</a>
            </li>

            <li class="item" data-target="#pages">
               <span style="display: flex;opacity: .5;align-items: center;justify-content:center"><img src="dist/img/window.svg" alt="Icone para páginas" srcset=""></span>
               <a>Páginas</a>
               <span class="seta"><img src="dist/img/chevron_bottom.svg" alt="Seta para baixo" srcset=""></span>
            </li>
            <div class="collapse hide" id="pages">
               <li><a href="javascript:void(0);" id="newPage">Adicionar página</a></li>
               <li><a href="javascript:void(0);" id="pages">Todas as páginas</a></li>
            </div>

            <li class="item" data-target="#artigos">
               <span style="display: flex;opacity: .5;align-items: center;justify-content:center"><img src="dist/img/window.svg" alt="Icone para páginas" srcset=""></span>
               <a>Artigos</a>
               <span class="seta"><img src="dist/img/chevron_bottom.svg" alt="Seta para baixo" srcset=""></span>
            </li>
            <div class="collapse hide" id="artigos">
               <li><a href="javascript:void(0);" id="newPage">Adicionar artigo</a></li>
               <li><a href="javascript:void(0);" id="pages">Meus artigos</a></li>
            </div>

            <li class="item" data-target="#biblioteca">
               <span style="display: flex;opacity: .5;align-items: center;justify-content:center"><img src="dist/img/briefing.svg" alt="Icone para páginas" srcset=""></span>
               <a>Biblioteca</a>
               <span class="seta"><img src="dist/img/chevron_bottom.svg" alt="Seta para baixo" srcset=""></span>
            </li>
            <div class="collapse hide" id="biblioteca">
               <li><a href="javascript:void(0);" id="newPage">Minha galeria</a></li>
               <li><a href="javascript:void(0);" id="pages">Carregar arquivo</a></li>
            </div>

            <li class="item" data-target="#modelos">
               <span style="display: flex;opacity: .5;align-items: center;justify-content:center"><img src="dist/img/gallery.svg" alt="Icone para páginas" srcset=""></span>
               <a>Modelos</a>
               <span class="seta"><img src="dist/img/chevron_bottom.svg" alt="Seta para baixo" srcset=""></span>
            </li>
            <div class="collapse hide" id="modelos">
               <li><a href="javascript:void(0);" id="">Os meus temas</a></li>
               <li><a href="javascript:void(0);" id="">Galeria</a></li>
               <li><a href="javascript:void(0);" id="">Gestor de menus</a></li>
            </div>

            <li class="item" data-target="#tools">
               <span style="display: flex;opacity: .5;align-items: center;justify-content:center"><img src="dist/img/accept.svg" alt="Icone para páginas" srcset=""></span>
               <a>Ferramentas</a>
               <span class="seta"><img src="dist/img/chevron_bottom.svg" alt="Seta para baixo" srcset=""></span>
            </li>
            <div class="collapse hide" id="tools">
               <li><a href="javascript:void(0);" id="">cP Carrocel Slider</a></li>
               <li class="badge-content"><a href="javascript:void(0);" id="cpeditor">cP Editor</a> <span class="badge">Novo</span></li>
               <li><a href="javascript:void(0);" id="myform">My form</a></li>
            </div>

            <li class="item" data-target="#options">
               <span style="display: flex;opacity: .5;align-items: center;justify-content:center"><img src="dist/img/notification.svg" alt="Icone para páginas" srcset=""></span>
               <a>Opçōes</a>
               <span class="seta"><img src="dist/img/chevron_bottom.svg" alt="Seta para baixo" srcset=""></span>
            </li>
            <div class="collapse hide" id="options">
               <li><a href="javascript:void(0);" id="">Os meus temas</a></li>
               <li><a href="javascript:void(0);" id="">Galeria</a></li>
               <li><a href="javascript:void(0);" id="">Gestor de menus</a></li>
            </div>

            <li class="item">
               <span style="display: flex;opacity: .5;align-items: center;"><img src="dist/img/bull.svg" style="width: 8px;" alt="Icone para páginas" srcset=""></span>
               <a href="javascript:viewItem(URL_BASE+'app/views/preview.html');" id="">Mercado cPonto</a>
            </li>

            <li class="item badge-content">
               <span style="display: flex;opacity: .5;align-items: center;">
                  <img src="dist/img/plugin.svg" alt="Icone para páginas" srcset="">
               </span>
               <a href="javascript:void(0);" id="">Plugins</a>
               <span class="badge">Brevemente</span>
            </li>
         </ul>
      </aside>

      <main></main>
   </div>
   <script src="<?php echo URL_BASE ?>/dist/js/cponto.js"></script>
</body>

</html>