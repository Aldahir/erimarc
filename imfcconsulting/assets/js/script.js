select = function(p) {
    let d = document.querySelector(p);
    return d;
};


// ROLAR A PÁGINA PARA CIMA

var scroll = select("#scroll-to-top");

window.onscroll = (function() {
	//console.log(this.scrollY);
	var topPos = this.scrollY;
	if (topPos > 90) {
		scroll.style.opacity = 0.2;
		scroll.classList.add('active');
		select("header").classList.add('h-aldair');
	} else {
		scroll.classList.remove('active');
		select("header").classList.remove('h-aldair');
	}
}); 

select('.cajicua-search').addEventListener("click", function(e){
	select('.atr').style.display = "flex";
	select("body").setAttribute("style", "overflow-y:hidden");
	
	select('.dialog-search-close-icon').addEventListener("click", function(){closeModal();});
});


/*
let ck = select('[data-toggle="dropdown"]');

$(scroll).click(function() {$('html, body').animate({scrollTop: 0}, 800);return false;});
ck.addEventListener("click", (e)=>{
    const ele = select(".dropdown");
    ele.classList.add('active');

    window.onclick = (x)=>{
        if (e.target != x.target ) closeDropdown();
    };
}); */

select('.menu').classList.add("navbar-nav");

function closeDropdown() {
    const ele = select(".dropdown");
    ele.classList.remove('active');
}

function closeModal() {
	select('.search-field').reset();
    select("body").removeAttribute('style');
    select('.atr').removeAttribute('style');
}