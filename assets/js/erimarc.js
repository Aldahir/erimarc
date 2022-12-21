var d = document.querySelector('.accept'), cook = document.querySelector('.cookeis');

window.onload = function(){
    console.log(sessionStorage.getItem("cookie"));
    var coo = sessionStorage.getItem("cookie") ? cook.setAttribute("style", "display:none") : cook.setAttribute("style", "display:block");
};

d.addEventListener('click', function(e){
    fetch('/erimarc/app/controller/?ac=setCookie', {
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

function countTo(){
    let from = -50;
    let to = 20;
    let step = to > from ? 1 : -1;
    let interval = 90;

    if(from == to){
        document.querySelector("#output").textContent = from;
        return;
    }

    let counter = setInterval(function(){
        from += step;
        // document.querySelector("#output").textContent = from;
        document.querySelector('.views-number').textContent = from;
        document.querySelector('.charging-number').textContent = from;
        document.querySelector('.recycle-number').innerHTML = from;
        if(from == to){
            clearInterval(counter);
        }
    }, interval);
}

let scWidth = window.screen.width;
let scHeight = window.screen.height;
let fivePercent = scWidth / 5;

window.addEventListener('scroll', (e)=>{
    // const rect = document.querySelector('.bg-image-alternate').getBoundingClientRect();
    const rect = document.querySelector('.bg-image-alternate').get;
    let scrollTop = window.scrollY;
    console.log(rect);
    if ( scrollTop == 822 ){
        countTo();
    }
});