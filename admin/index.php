<?php !defined('URL_BASE') ? define('URL_BASE', "http://127.0.0.1/erimarc/admin") : null; ?>
<div class="topo" id="topo">
    <header>
        <div class="cp-logo">
            <a href="<?php echo URL_BASE ?>">
                <img src="https://dummyimage.com/200x60/fb8c00/ffffff" alt="Logotipo cPonto">
            </a>
        </div>
        <div class="menu-topo">
            <ul>
                <li><a href="javascript:void(0);" id="">Ver página</a></li>
                <li><a href="javascript:void(0);" id="">Ver página</a></li>
                <li><a href="javascript:void(0);" id="">Ver página</a></li>
                <li><a href="javascript:void(0);" id="">Ver página</a></li>
            </ul>
        </div>
    </header>
</div>

<div class="container">
    <aside>
        <ul class="sidebar-menu">
            <span>Cabeçalho</span>
            <div class="collapse">
                <li><a href="javascript:void(0);" id="refresh">adicionar partes</a></li>
                <li><a href="javascript:void(0);" id="">Paginas</a></li>
            </div>

            <span>Temas</span>
            <div class="collapse">
                <li><a href="javascript:void(0);" id="">Os meus temas</a></li>
                <!-- <li><a href="javascript:void(0);" id=""></a></li> -->
                <li><a href="javascript:void(0);" id="">Galeria</a></li>
            </div>

        </ul>
    </aside>

    <main>
        <iframe src="" class="mypage" frameborder="0"></iframe>
    </main>
</div>

<style>
    * {
        color: rgb(95 95 95);
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12pt;
    }

    a {
        text-decoration: none;
    }

    #topo header {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sidebar-menu,
    html,
    body,
    ul {
        padding: 0;
        margin: 0;
    }

    .menu-topo ul {
        display: flex;
        flex-direction: row;
    }

    .menu-topo ul li {
        margin-left: .6em;
        margin-right: .6em;
    }

    .sidebar-menu {
        list-style: none;
    }

    .sidebar-menu li a {
        display: block;
        padding: 0.3rem .5rem;
    }

    .sidebar-menu span:first-child {
        margin-top: 0;
        border-top-left-radius: 0.2rem;
        border-top-right-radius: 0.2rem;
    }

    .sidebar-menu span:last-child {
        margin-bottom: 0;
        border-bottom-left-radius: 0.2rem;
        border-bottom-right-radius: 0.2rem;
    }

    .sidebar-menu span {
        cursor: default;
        font-weight: bold;
        display: block;
        position: relative;
        padding: 10px 0 10px 10px;
        background-color: #f2f2f2;
        /* border: 1px solid #e8e8e8; */
    }

    .sidebar-menu span:before {
        content: "\2039";
        width: 15px;
        display: flex;
        height: 15px;
        position: absolute;
        right: 10px;
        transform: rotate(-90deg);
        align-items: center;
        align-content: center;
        justify-content: center;
        flex-wrap: nowrap;
        flex-direction: row;
        top: 12px;
        transition: all 1s ease-in-out;
    }

    .collapse {
        display: none;
    }

    aside {
        width: 20%;
        padding: 1rem;
    }

    .spinner {
        position: relative;
        margin: 0 auto;
        width: 80px;
        height: 80px;
        opacity: 0.7;
        display: inline-block;
    }

    .spinner div {
        position: absolute;
        display: block;
        margin: 8px;
        width: 64px;
        height: 64px;
        border: solid 8px;
        border-radius: 50%;
        border-color: orange transparent transparent transparent;
        animation: spin 1.2s cubic-bezier(.5, 0, .5, 1) infinite;
    }

    .spinner div:nth-child(1) {
        animation-delay: -.45s;
    }

    .spinner div:nth-child(2) {
        animation-delay: -.3s;
    }

    .spinner div:nth-child(3) {
        animation-delay: -.15s;
    }

    .container {
        display: flex;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
<script>
    var loading = '<div class="spinner"><div></div><div></div><div></div></div>'
    let m = document.querySelectorAll('.sidebar-menu span');

    m.forEach(e => {
        e.addEventListener("click", (i)=> {
            let x = window.getComputedStyle(i.currentTarget, "::before").content
            console.log(x);

        });
    });

    // let m = 
    document.getElementById("refresh").addEventListener('click', async function() {
        document.querySelector('.mypage').parentNode.innerHTML += (loading);
        /*await fetch('<?php echo URL_BASE ?>/app/views/page.php').then(r => r.text).then(r => {
            document.querySelector('.mypage').setAttribute('src', '<?php echo URL_BASE ?>/app/views/preview.html');
        });*/
    })
</script>