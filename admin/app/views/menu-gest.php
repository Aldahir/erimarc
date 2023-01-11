<h1>Gestor de menus</h1>

<div>
    <ul>
        <li><a href="?ac=novo">Criar Menu</a></li>
        <li><a href="/ac=editar">Editar Existente</a></li>
    </ul>
</div>
<div>
    <?php if( isset( $_REQUEST['ac'] ) && $_REQUEST['ac'] == "novo" ){ ?>
        <h1>Novo menu</h1>
        <form action="" method="post">
            <input type="text" name="menuName" id="menuName">
            <label form="mainMenu"><input type="checkbox" name="mainMenu" id="mainMenu"> Tornar primário este menu</label>
        </form>
    <?php } else if ( $_REQUEST['ac'] == "editar" ) { ?>
        
    <?php } else { ?>
        <div class="display-flex">
            <div class="coluna-1">
                <h4>Paginas</h4>
            </div>

            <div class="coluna-2">
                <h4>Estrutura do menu</h4>
                <div class="draggable">
                    <ul class="draggable-container">
                        <li class="draggable-item">
                            <a href="" class="draggable-action">Início</a>
                        </li>
                        <li class="draggable-item">
                            <a href="" class="draggable-action">Sobre nós</a>
                        </li>
                        <li class="draggable-item">
                            <a href="" class="draggable-action">Contactos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
