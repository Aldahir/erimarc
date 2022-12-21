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