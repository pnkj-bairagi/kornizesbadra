/*
	Minified help.js
	Last Modified: Fri, 29 Oct 2021 14:40:46 GMT
*/
var scroll_offset=80;if($('#announcement-header').length){scroll_offset=114;}
$(document).ready(function(){var searchTerms=[];var searchString='';$('.faq-panel').each(function(){var topicTitle=$(this).attr('id');$(this).find('ul.questions-list li').not('ul.questions-list li ul li').each(function(i,elm){var topicQuestion=$(this).find('.question-dropdown').text();var topicID=$(this).find('.question-dropdown').attr('id');var questionTerms=$(this).find('.question-dropdown').data('terms');var questionContent=$(this).find('.answers-content').text();questionContent=questionContent.replace(/\n/g,'');questionContent=questionContent.replace(/"/g,'');questionContent=questionContent.replace(/\s\s+/g,' ');searchString={'id':topicID,'topic':topicTitle,'question':topicQuestion,'terms':questionTerms,'content':questionContent};searchTerms.push(searchString);});}).promise().done(function(){});var helpSearchBoxContainer=$('.help-search-box-container');var helpSearchResults=$('#help-search-results');$('#help-search-box').on('input',function(){var searchQuery=$(this).val();if(searchQuery.length>2){var options={shouldSort:true,keys:["question","content","terms","topic"]};var fuse=new Fuse(searchTerms,options);var result=fuse.search(searchQuery);var resultsFoundHeading=helpSearchResults.find('h3');var resultsList=helpSearchResults.find('ul');var resultCount=result.length;var resultsFoundText;if(resultCount==1){resultsFoundText=resultCount+' Answer Found:';}else if(resultCount==0){resultsFoundText=resultCount+' Answers Found.';}else{resultsFoundText=resultCount+' Answers Found:';}
resultsFoundHeading.html(resultsFoundText);resultsList.text('');$.each(result,function(i)
{var
resultId=result[i].id,resultTopic=result[i].topic,resultQuestion=result[i].question,resultTerms=result[i].terms,resultContent=result[i].content;resultContent=resultContent.substring(0,70);var videoIcon='';if(resultTerms.includes('video')){videoIcon='<i class="fas fa-video" aria-hidden="true"></i>';}
var liContents='<li data-link-id="'+resultId+'"><h4><span class="topic">'+resultTopic+'</span> > <span class="question">'+videoIcon+resultQuestion+'</span></h4><p>'+resultContent+'...</p></li>';resultsList.append(liContents);});helpSearchBoxContainer.addClass('show');helpSearchResults.show();}else{helpSearchBoxContainer.removeClass('show');helpSearchResults.hide();}
$('#help-search-results ul li').on('click',function(event){var answer_id=$(this).data('link-id');var final_answer=$('a#'+answer_id);helpSearchBoxContainer.removeClass('show');helpSearchResults.hide();$('a.question-dropdown').each(function(){if($(this).hasClass('open')){$(this).removeClass('open');$(this).siblings('.answers-content').hide();}});final_answer.trigger('click');$('html, body').animate({scrollTop:final_answer.offset().top-scroll_offset},500);});});$('#help-search-box').focus(function(){var helpSearchBoxText=$('#help-search-box').val().length;if(helpSearchBoxText>=3){helpSearchBoxContainer.addClass('show');helpSearchResults.show();}});$('#clear-search').click(function(event){event.preventDefault();helpSearchBoxContainer.removeClass('show');helpSearchResults.hide();$('#help-search-box').val('');});});$(document).ready(function(){$('ul.questions-list li a.question-dropdown').click(function(event){event.preventDefault();if($(this).hasClass('open')){$(this).siblings('.answers-content').slideUp();}else{$(this).siblings('.answers-content').slideDown();}
$(this).toggleClass('open');});$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');if(target.length){event.preventDefault();$('html, body').animate({scrollTop:target.offset().top-scroll_offset},1000,function(){var $target=$(target);$target.focus();if($target.is(":focus")){return false;}else{$target.attr('tabindex','-1');$target.focus();}});}}});});$.fn.isInViewport=function(){var elementTop=$(this).offset().top-120;var elementBottom=elementTop+$(this).outerHeight();var viewportTop=$(window).scrollTop();var viewportBottom=viewportTop+$(window).height();return elementBottom>viewportTop&&elementTop<viewportBottom;};$(window).on('resize scroll',function(){$('.faq-panel').each(function(){var thisID=$(this).attr('id');var thisOffset=$(this).offset().top-$(window).scrollTop();var thisMenuItem=$('.answers-categories li a.menu-'+thisID);if($(this).isInViewport()&&thisOffset<120){thisMenuItem.addClass('active');}else{thisMenuItem.removeClass('active');}});});function round_num(num,dec){if(!dec||dec==undefined)dec=2;var result=Math.round(parseFloat(num)*Math.pow(10,dec))/Math.pow(10,dec);return(result.toFixed(dec));}
convert=Array();convert[0]={"dec":0,"frac":false,"inc":0};convert[1]={"dec":0.0625,"frac":"1/16","inc":0};convert[2]={"dec":0.125,"frac":"1/8","inc":0};convert[3]={"dec":0.1875,"frac":"3/16","inc":0};convert[4]={"dec":0.25,"frac":"1/4","inc":0};convert[5]={"dec":0.3125,"frac":"5/16","inc":0};convert[6]={"dec":0.375,"frac":"3/8","inc":0};convert[7]={"dec":0.4375,"frac":"7/16","inc":0};convert[8]={"dec":0.5,"frac":"1/2","inc":0};convert[9]={"dec":0.5625,"frac":"9/16","inc":0};convert[10]={"dec":0.625,"frac":"5/8","inc":0};convert[11]={"dec":0.6875,"frac":"11/16","inc":0};convert[12]={"dec":0.75,"frac":"3/4","inc":0};convert[13]={"dec":0.8125,"frac":"13/16","inc":0};convert[14]={"dec":0.875,"frac":"7/8","inc":0};convert[15]={"dec":0.9375,"frac":"15/16","inc":0};convert[16]={"dec":1,"frac":false,"inc":1};$("#exact-conversion").hide();$("#recommended-size").hide();$(document).ready(function(){$(".calculator-input").keyup(function(){width=$("#poster-width").val();height=$("#poster-height").val();var measurement_convert=$('input[name=mesurement-convert]:checked').val();if(measurement_convert=='cm'){width=width*10;height=height*10;}
if(!isNaN(width)&&width>0&&!isNaN(height)&&height>0){width_conv=round_num(parseFloat(width)*0.0393700787,3);height_conv=round_num(parseFloat(height)*0.0393700787,3);$("#exact-conversion").show();$("#recommended-size").show();$("#exact-conversion-text").html(parseFloat(width_conv)+"\" x "+parseFloat(height_conv)+"\"");$("#recommended-size-text").html(calculatorFrameSize(width_conv)+"\" x "+calculatorFrameSize(height_conv)+"\"");}else{$("#exact-conversion").hide();$("#recommended-size").hide();}});$('input[name=mesurement-convert]').click(function(){$('.mesurement-metric').html($(this).val());$(this).attr('checked','checked');$(".calculator-input").trigger('keyup');});});function calculatorFrameSize(number){splitNum=number.split(".");myDecimal=eval("."+splitNum[1]);myObject={"dec":0,"frac":false,"inc":0};for(var key in convert){if(myDecimal<=convert[key].dec){myObject=convert[key];break;}}
splitNum[0]=parseInt(splitNum[0])+parseInt(myObject.inc);return(myObject.frac)?splitNum[0]+" "+myObject.frac:splitNum[0];}
var clickTrigger=false;$('#help-form button[type=submit]').on('click',function(e){if(!clickTrigger){clickTrigger=true;e.preventDefault();var this_contact_form=$('#help-form');$.ajax({type:"POST",url:SITE_URL+"/ajax.php",dataType:"json",timeout:5000,data:{'action':'help_form_submit','name':this_contact_form.find('input[name=name]').val(),'email_address':this_contact_form.find('input[name=email_address]').val(),'phone_number':this_contact_form.find('input[name=phone_number]').val(),'message':this_contact_form.find('textarea[name=message]').val()},success:function(result){if(result.fields_missing){this_contact_form.find('.error-msg .text').html('Oh no! One of the fields is still empty. Please fill the form completely and try sending your message again!');this_contact_form.find('.error-msg').show();}
else if(result.message_issue){this_contact_form.find('.error-msg .text').html('Hey, looks like your message is less than ten characters. Can you give us a little more information so we know you\'re not a robot?');this_contact_form.find('.error-msg').show();}
else if(result.form_sent){this_contact_form.find('.error-msg').hide();this_contact_form.find('.success-msg').show().delay(5000).fadeOut(1000);this_contact_form.find('input, textarea, select').val('');}
clickTrigger=false;}});}});$('#help-form .clear-error').on('click',function(){var this_contact_form=$(this).closest('.contact-form');this_contact_form.find('.error-msg').fadeOut(500);});$(window).load(function(){var url=window.location.href;if(url.slice(-5)!=='/help'){var anchor;if(window.location.hash){anchor=window.location.hash;}else{var nonHash=url.split("/").pop();var cleanedNonHash=(nonHash||'').replace(/\?.+$/,'');anchor='#'+cleanedNonHash;}
if($(anchor).length){var closest_answers_content=$(anchor).closest('.answers-content');if(closest_answers_content.length>0){closest_answers_content.closest('li').find('.question-dropdown').addClass('open');closest_answers_content.closest('li').find('.question-dropdown').siblings('.answers-content').show();}else{$(anchor).addClass('open');$(anchor).siblings('.answers-content').show();}
$('html, body').animate({scrollTop:$(anchor).offset().top-scroll_offset},500);}}});