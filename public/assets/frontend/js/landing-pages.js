/*
	Minified landing-pages.js
	Last Modified: Fri, 29 Oct 2021 14:40:46 GMT
*/
var interval=null;var slideIndex=1;function changeSlides(n){showSlides(slideIndex+=n);}
function showSlides(n){var slides=$('#review-slider-wrap .review-slider .review-group');if(n>slides.length){slideIndex=1}
if(n<1){slideIndex=slides.length}
$('#review-slider-wrap .review-slider .review-group').each(function(){$(this).fadeOut('slow');});$('#review-slider-wrap .review-slider .review-group').each(function(){var thisSlideNumber=$(this).attr('slide-number');if(thisSlideNumber==slideIndex){$(this).fadeIn();}else{$(this).fadeOut();}});}
$('.slider-control.left').on('click',function(){changeSlides(-1)});$('.slider-control.right').on('click',function(){changeSlides(1)});$('.slider-control').on('click',function(){clearInterval(interval);});function autoAdvance(){changeSlides(1);}
$(function(){$('#review-slider-wrap .review-slider .review-group').each(function(i){var slideNumber=i+1;$(this).attr('slide-number',slideNumber);});showSlides(slideIndex);interval=setInterval(autoAdvance,5000);});$('.starwars-tiles .tile').on('click',function(){if($(this).hasClass('title'))return;$('.starwars-slice .row').removeClass('visible');var day=$(this).data('day'),tab=$('.starwars-slice').find('.row[data-day="'+day+'"]'),contest=tab.find('.contest'),gleamURL;if(contest.is(':empty')){switch(day){case 1:gleamURL='https://gleam.io/vrnZr/star-wars-day-1';break;case 2:gleamURL='https://gleam.io/939JQ/star-wars-day-2';break;case 3:gleamURL='https://gleam.io/js1pN/star-wars-day-3';break;case 4:gleamURL='https://gleam.io/SrKp5/star-wars-day-4';break;case 5:gleamURL='https://gleam.io/S6E7Z/star-wars-day-5';break;}
contest.html('<a class="e-widget no-button" href="'+gleamURL+'" rel="nofollow">Star Wars Day 1</a>');$.getScript('https://js.gleam.io/e.js');}
tab.addClass('visible');$('html, body').animate({scrollTop:0},'slow');});