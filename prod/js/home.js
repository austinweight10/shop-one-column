setTimeout(function(){function o(){$(".home-page").scrollLeft(($(document).width()-n)/2),$(document).scrollTop(($(document).height()-$(window).height())/2)}function e(){992>n&&n>0&&o(),1600>n&&n>992&&o(),2e3>n&&n>1600&&o(),8e3>n&&n>2e3&&o()}var n=$(window).width();e()},1e3),$(".home-page .product").mouseenter(function(){$(this).find(".producthover").addClass("producthover--show"),$(this).find(".productcontainer").addClass("productcontainer--show")}).mouseleave(function(){$(this).find(".producthover").removeClass("producthover--show"),$(this).find(".productcontainer").removeClass("productcontainer--show")}),$(document).ready(function(){var o="http://localhost:8888/wordpress/",e=function(){return window.location.href===o?!0:void 0};1==!e()&&(window.location.href=o)});var curYPos=0,curXPos=0,curDown=!1;window.addEventListener("mousemove",function(o){curDown===!0&&window.scrollTo(document.body.scrollLeft+(curXPos-o.pageX),document.body.scrollTop+(curYPos-o.pageY))}),window.addEventListener("mousedown",function(o){curDown=!0,curYPos=o.pageY,curXPos=o.pageX}),window.addEventListener("mouseup",function(o){curDown=!1}),document.addEventListener("DOMContentLoaded",function(o){setTimeout(function(){$(".loader").fadeOut(1e3),setTimeout(function(){$(".loader").remove()},2e3)},900)});