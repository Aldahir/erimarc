function countTo(from = 0, to, element, interval = 100){
    let step = to > from ? 1 : -1;
    
    if(from == to){
        document.querySelector(element).textContent = from;
        return;
    }
    
    let counter = setInterval(function(){
        from += step;
        document.querySelector(element).textContent = from;
        
        if(from == to){
            clearInterval(counter);
        }
    }, interval);
}

document.addEventListener('DOMContentLoaded', ()=>{
    var d = document.querySelector('.accept'), 
    s = document.querySelector('.deny'), 
    cook = document.querySelector('.cookeis');
    
    sessionStorage.getItem("cookie") ? cook.setAttribute("style", "display:none") : cook.setAttribute("style", "display:block");
    
    s.addEventListener('click', function(e){
        cook.setAttribute("style", "display:none");
    });

    d.addEventListener('click', function(e){
        fetch('/erimarc/?ac=setCookie', {
            headers:{
                "Content-Type":"application/json; charset=utf-8",
                "accept":"application/json",
            },
            method:"post",
            body: JSON.stringify({
                "cookies":true
            })
        })
        .then(r=>r.json())
        .then(r=>{
            cook.style.display = "none";
            sessionStorage.setItem('cookie', true);
            
            console.log(r);
        }
        );
        e.preventDefault();
    });
});

let scWidth = window.screen.width;
let scHeight = window.screen.height;
let fivePercent = scWidth / 5;

window.addEventListener('scroll', (e)=>{
    // const rect = document.querySelector('.bg-image-alternate').getBoundingClientRect();
    const rect = document.querySelector('.bg-image-alternate');
    let scrollTop = window.scrollY;
    //console.log(rect);
    // if ( scrollTop ){
    //     countTo(0, 50, '.views-number');
    //     countTo(1000, 1104, '.number', 50);
    //     countTo(100, 154, '.recycle-number');
    // }
});

function closeAttr() {
    document.getElementsByTagName('body')[0].removeAttribute('style');
    document.querySelector('.attr').remove();
}

function cajicuaSearch(){
    // let element = document.querySelector('.cajicua-search');
    let body = document.getElementsByTagName('body')[0];

    let attr = document.createElement('div');
    attr.setAttribute('style', 'top:0;left:0;right:0;/*padding: 14% 30%;*/bottom:0;margin:0 auto;position:fixed;width:100vw;display: flex;height: 100%;z-index: 999999;background-color: rgb(0 0 0 / 54%);backdrop-filter: blur(3px);');
    attr.classList.add('attr','active');
    
    attr.innerHTML = `
        <div class="position-absolute" style="top:5%; right:7%">
            <a href="javascript:closeAttr()" class="fa fa-times fa-2x text-white nav-link" aria-hidden="true"></a>
        </div>
        <div class="m-auto p-5 bg-white" style="width:40vw">
            <form action="" method="post" class="d-flex flex-column align-items-center" name="frm">
                <label for="search"></label>
                <input name="search" class="form-control rounded-0 mb-3" placeholder="Escreve aqui o que deseja procurar">
                <button type="submit" class="btn bg-dark-red mt-3 mt-lg-0 px-lg-4 px-3 rounded-0">Procurar</button>
            </form>
        </div>
    `;
    
    body.style.overflowY = "hidden";
    body.appendChild(attr);
}

// document.addEventListener("mouseover", ()=>{
//     countTo(0, 50, '.views-number');
//     countTo(1000, 1104, '.number', 50);
//     countTo(100, 154, '.recycle-number');
// });

/*let set = document.querySelectorAll('.set');

for (let i=0; i < set.length; i++){
    set[i].addEventListener('mouseenter', (e)=>{ set[i].children[0].classList.add("shadow","border", "border-2"); });
    //set[i].addEventListener('mouseout', (e)=>{ set[i].children[0].classList.remove("shadow","border", "border-2"); });
};

(function(){
    new Progressive({
        el: '#my-body',
        lazyClass: 'lazy',
        removePreview: true,
        scale: true
    }).fire();
})();*/