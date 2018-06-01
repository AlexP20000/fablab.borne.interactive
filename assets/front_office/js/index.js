"use strict";
// declaring variable which will handle the elements with class 'a' in class 'circle' //
let items = document.querySelectorAll('.circle a');
// math do get the opening effect for the circles 
for(let i = 0, l = items.length; i < l; i++) {
    items[i].style.left = (50 - 35*Math.cos(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";

    items[i].style.top = (50 + 35*Math.sin(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
}
// opens the circles within the 'main circle'
document.querySelector('.menu-button').onclick = function(e) { 
    e.preventDefault();
    document.querySelector('.circle').classList.toggle('open');
    // prevent animation after click //
	if  ($('.menu-button').hasClass('menu-button-animation')) {
     	$('.menu-button').removeClass('menu-button-animation');
    } else {
     	$('.menu-button').addClass('menu-button-animation');
    }
    
};
