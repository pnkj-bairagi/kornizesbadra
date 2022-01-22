/*
	Minified business.js
	Last Modified: Mon, 12 Oct 2020 18:00:11 GMT
*/
$('.scroll-to-top').click(function(){$('html, body').animate({scrollTop:0},'slow');return false;});var clickTrigger=false;$('#business-contact-form button[type=submit]').on('click',function(e){if(!clickTrigger){clickTrigger=true;e.preventDefault();var this_contact_form=$(this).closest('#business-contact-form');$.ajax({type:"POST",url:SITE_URL+"/ajax.php",dataType:"json",timeout:5000,data:{'action':'business_form_submit','name':this_contact_form.find('input[name=name]').val(),'email_address':this_contact_form.find('input[name=email_address]').val(),'company_name':this_contact_form.find('input[name=company_name]').val(),'phone_number':this_contact_form.find('input[name=phone_number]').val(),'number_of_frames':this_contact_form.find('select[name=number_of_frames]').val(),'message':this_contact_form.find('textarea[name=message]').val()},success:function(result){if(result.fields_missing){this_contact_form.find('.error-msg .text').html('Oh no! One of the fields is still empty. Please fill the form completely and try sending your message again!');this_contact_form.find('.error-msg').show();}
else if(result.message_issue){this_contact_form.find('.error-msg .text').html('Hey, looks like your message is less than ten characters. Can you give us a little more information so we know you\'re not a robot?');this_contact_form.find('.error-msg').show();}
else if(result.form_sent){this_contact_form.find('.error-msg').hide();this_contact_form.find('.success-msg').show().delay(5000).fadeOut(1000);this_contact_form.find('input, textarea, select').val('');gtag_report_conversion();}
clickTrigger=false;}});}});$('#business-contact-form .clear-error').on('click',function(){var this_contact_form=$(this).closest('.contact-form');this_contact_form.find('.error-msg').fadeOut(500);});var interval=null;var slideIndex=1;function changeSlides(n){showSlides(slideIndex+=n);}
function showSlides(n){var slides=$('#review-slider-wrap .review-slider span');if(n>slides.length){slideIndex=1}
if(n<1){slideIndex=slides.length}
$('#review-slider-wrap .review-slider span').each(function(){$(this).fadeOut('slow');});$('#review-slider-wrap .review-slider span').each(function(){var thisSlideNumber=$(this).attr('slide-number');if(thisSlideNumber==slideIndex){$(this).css('display','flex').hide().fadeIn();}else{$(this).fadeOut();}});}
$('.slider-control.left').on('click',function(){changeSlides(-1)});$('.slider-control.right').on('click',function(){changeSlides(1)});$('.slider-control').on('click',function(){clearInterval(interval);});function autoAdvance(){changeSlides(1);}
$(function(){$('#review-slider-wrap .review-slider span').each(function(i){var slideNumber=i+1;$(this).attr('slide-number',slideNumber);});showSlides(slideIndex);interval=setInterval(autoAdvance,5000);});