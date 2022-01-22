/*
	Minified reviews.js
	Last Modified: Mon, 01 Nov 2021 20:37:22 GMT
*/
var reviews_at_a_time=25;var reviews_loaded=25;var allowed_to_preload_reviews=true;var preloaded_reviews=false;var reviews_remaining=true;var waitForFinalEvent=(function(){var timers={};return function(callback,ms,uniqueId){if(!uniqueId){uniqueId="Don't call this twice without a uniqueId";}
if(timers[uniqueId]){clearTimeout(timers[uniqueId]);}
timers[uniqueId]=setTimeout(callback,ms);};})();const reviewsAJAXOutput=document.getElementById('reviews-ajax-output');const loadMoreButton=document.getElementById('load-more-reviews');function preloadReviews(number){if(!reviews_remaining){return;}
allowed_to_preload_reviews=false;var ajax=new XMLHttpRequest();ajax.open('POST',SITE_URL+'/ajax_smarty.php',true);ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');ajax.onreadystatechange=function(){if(this.readyState==4&&this.status==200){reviews_loaded=reviews_loaded+number;preloaded_reviews=this.responseText;allowed_to_preload_reviews=true;}};var data=new URLSearchParams({'page':'load_more_reviews','start_review':reviews_loaded});ajax.send(data.toString());}
function displayPreloadedReviews(){if(preloaded_reviews){var reviews_content=reviewsAJAXOutput.innerHTML;reviewsAJAXOutput.innerHTML=reviews_content+preloaded_reviews;renderAllFramePreviews();loadMoreButton.classList.remove('loading');preloaded_reviews=false;allowed_to_preload_reviews=true;preloadReviews(reviews_at_a_time);}}
document.addEventListener("DOMContentLoaded",function(event){renderAllFramePreviews();preloadReviews(reviews_at_a_time);loadMoreButton.addEventListener('click',function(){loadMoreButton.classList.add('loading');if(preloaded_reviews){displayPreloadedReviews();}},false);});