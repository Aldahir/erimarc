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

// document.addEventListener("mouseover", ()=>{
//     countTo(0, 50, '.views-number');
//     countTo(1000, 1104, '.number', 50);
//     countTo(100, 154, '.recycle-number');
// });

/*let set = document.querySelectorAll('.set');

for (let i=0; i < set.length; i++){
    set[i].addEventListener('mouseenter', (e)=>{ set[i].children[0].classList.add("shadow","border", "border-2"); });
    //set[i].addEventListener('mouseout', (e)=>{ set[i].children[0].classList.remove("shadow","border", "border-2"); });
};*/