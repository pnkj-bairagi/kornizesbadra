/*
	Minified resellers.js
	Last Modified: Fri, 29 Oct 2021 14:40:46 GMT
*/
$('.scroll-to-top').click(function(){$('html, body').animate({scrollTop:$("#get-started").offset().top},'slow');return false;});var text=['a designer','a merchant','a photographer','an artist'];var counter=0;var elem=$("#occupation");setInterval(change,3000);function change(){elem.fadeOut(function(){elem.html(text[counter]);counter++;if(counter>=text.length){counter=0;}
elem.fadeIn();});}