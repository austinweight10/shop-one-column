$(window).on("load",function(){$(".pdpinfo").hide(),$("body").on("click",".moreinfo",function(){window.location.href="http://localhost:8888/wordpress/#127";jQuery(this).data("id");return jQuery.ajax({url:"http://localhost:8888/wordpress/product/gf-ddfgh-h-gfd-hdfg/",type:"POST",async:!0,data:{},success:function(o){$(".pdpinfo").html(o),$(".woocommerce-Price-amount").appendTo(".in-stock"),$(".pdp-discription").append('<span class="menu-menu-closepdp">close</span>'),$("body").on("click",".menu-menu-closepdp",function(){$(".pdpinfo").delay(500).hide("slide",{direction:"right"},400),$(".pdpinfo").empty(),window.location.href="http://localhost:8888/wordpress/#"}),$(".swiper-container").data("swiper").reInit();new Swiper(".swiper-container",{paginationClickable:!0,loop:!0,direction:"horizontal",nextButton:".swiper-button-next",prevButton:".swiper-button-prev",pagination:".swiper-pagination",paginationClickable:!0})}}),$(".pdpinfo").delay(500).show("slide",{direction:"right"},400),!1})}),$(document).ready(function(){var o=function(){return"http://localhost:8888/wordpress/"===window.location.href?!0:void 0};!o()==!0&&(window.location.href="http://localhost:8888/wordpress/")}),$(window).on("load",function(){$(".checkoutajax").hide(),$(".checkout-button").on("click",function(){$(".cart-menu").hide("slide",{direction:"right"},400),$(".menu-elements-cart").delay(300).queue(function(o){$(".menu-elements-cart").accordion("destroy")});jQuery(this).data("id");return jQuery.ajax({url:"http://localhost:8888/wordpress/checkout/",type:"POST",async:!0,data:{},success:function(o){$(".checkoutajax").html(o),$(".woocommerce-billing-fields").prepend('<span class="menu-menu-closecheckout">close</span>'),$(document).on("click",".menu-menu-closecheckout",function(){console.log("dasffas"),$(".checkoutajax").hide("slide",{direction:"right"},800)})}}),$(".checkoutajax").delay(500).show("slide",{direction:"right"},800),!1})});