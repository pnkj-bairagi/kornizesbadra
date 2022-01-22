/*
	Minified feedback.js
	Last Modified: Fri, 29 Oct 2021 14:40:46 GMT
*/
var rating=0;function selectStars(rating){$('#feedback-stars .icon-star').removeClass('fa-star');while(rating>0){$('#feedback-stars .icon-star[data-rating='+rating+']').addClass('fa-star');rating--;}}
$(document).ready(function(){$('#feedback-stars .icon-star').hover(function(){$(this).addClass('fa-star').prevAll('.icon-star').addClass('fa-star');},function(){$(this).removeClass('fa-star').prevAll('.icon-star').removeClass('fa-star');$('.icon-star.selected').addClass('fa-star');});$('#feedback-stars .icon-star').click(function(){$('.icon-star').removeClass('selected');rating=Number($(this).data('rating'));selectStars(rating);$('input[name=score]').val(rating);$('span.feedback-error').html('');$(this).addClass('selected').prevAll('.icon-star').addClass('selected');$(this).addClass('fa-star').prevAll('.icon-star').addClass('fa-star');});});