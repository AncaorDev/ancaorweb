$(document).ready(function(){
	$('a[href*="#"]').click(function() {
     	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            // target = target.length && target || $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                var targetOffset = target.offset().top;
                $('html,body').animate({scrollTop: targetOffset}, 500);
                return false;
            }
       }
   });
	// animacion();
});

window.onscroll =  function(){
	var scroll = document.documentElement.scrollTop || document.body.scrollTop;
	if ($("#nav-section").attr("data") == "0") {
		var normal = document.getElementsByClassName("normal");
		var tlb = document.getElementById("logo-body");	
		var tf = document.getElementById("text-frase");	
		var x = document.getElementsByTagName("section");
		var tam = 0;
		var rr = "";
		var tar = [];
		for (i = 0; i < x.length ; i++) {
			    tam = tam + x[i].offsetHeight;
			    tar[i] = tam;
			}
		for(i = 0; i < tar.length ; i++) {
			// console.log(parseInt(scroll+3)+"-"+tar[i]);			
			if (parseInt(scroll) >= tar[i]) {
				tlb.classList.remove("animate-left");
				tf.classList.remove("animate-right")
				normal[i].classList.remove("fonty");	
				normal[i+1].classList.add("fonty");
				if (parseInt(i+2) < tar.length) {
					normal[i+2].classList.remove("fonty");
				}
			} else if (parseInt(scroll) < tar[0]){
				for (var i = 0; i < tar.length; i++) {
					// tg.classList.remove("animate-left");
					normal[i].classList.remove("fonty");
					tlb.classList.add("animate-left");
					tf.classList.add("animate-right")
				}
			}
		}
	}
	var nav = document.getElementById("cbc");
	console.log(scroll);
	if (scroll >= 80) {		
		nav.classList.add("fixed");
			// console.log(nav.classList); 
	} else {
		nav.classList.remove("fixed");
	}
}

function animacion(){
	$("#text-logo-body").show(function(){
		$("#text-logo-body").animate({});
	});
}