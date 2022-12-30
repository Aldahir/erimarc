const URL_BASE = window.location.origin + window.location.pathname ;

console.log(URL_BASE);
function select(element){return document.querySelector(element);}
function go_to(url){ window.location.href = url; }

async function save(params, headers=[]) {
    await fetch(params, headers).then(response=>response.json()).then(response=>{
        return response;
    });
}

var loading = document.createElement('div');
var child = document.createElement('div');
loading.classList.add("spinner");
loading.append(child, child, child);

let parent = document.querySelector('.sidebar-menu');
let itens = document.querySelectorAll('.sidebar-menu .item');
let s = document.querySelectorAll('.collapse');

for (var i = 0; i < itens.length; i++){
    itens[i].addEventListener("click", (e)=>{
        
        let c = document.querySelectorAll('.item.active');
        
        if(c.length > 0){
            c[0].className = c[0].className.replace(" active", "");
        }
        
        e.currentTarget.className += " active";
        
        
        let target = e.currentTarget.getAttribute('data-target');
        target ? openMenu(target) : closeMenu();
    });
}

function openMenu(target){
    closeMenu();
    document.querySelector(`${target}`).classList.remove("hide");
    document.querySelector(`${target}`).classList.add("show");
}

function closeMenu(){
    document.querySelector('.show') ? select(".show").classList.replace("show", "hide") : undefined;
}
async function viewItem(url){
    let container = document.createElement('iframe');
    let main = select("main");
    
    main.innerHTML = "";
    container.classList.add("mypage");
    container.setAttribute("frameborder", 0);
    
    main.appendChild(loading);
    console.log(url);
    await fetch(URL_BASE+'/app/views/page.php').then(r => r.text).then((r) => {
        container.src = url;
        main.appendChild(container);
        loading.remove();
    });
    
}
