!function($){"use strict";$(".product-info, table.cart").addQty();var t=$(".product-thumbnails .first img").attr("src");if($("form.variations_form").on("show_variation",function(e,i){i.image_src?($(".product-gallery-slider .slide.first img, .product-thumbnails .first img").attr("src",i.image_src),$(".product-gallery-slider .slide.first a, .product-thumbnails .first a").attr("href",i.image_link),$(".product-gallery-slider").flickity("select",0)):$(".product-thumbnails .first img").attr("src",t)}),$(".quick-view, .open-quickview").click(function(t){$(this).after('<div class="ux-loading dark"></div>');var e=$(this).attr("data-prod"),i={action:"ux_quickview",product:e};$.post(ajaxURL.ajaxurl,i,function(t){$.magnificPopup.open({removalDelay:300,items:{src:'<div class="product-lightbox">'+t+"</div>",type:"inline"}}),$(".ux-loading").remove(),$(".product-lightbox .product-gallery-slider").flickity({cellAlign:"center",wrapAround:!0,autoPlay:!1,prevNextButtons:!0,percentPosition:!0,imagesLoaded:!0,lazyLoad:1,pageDots:!1,rightToLeft:!1}),setTimeout(function(){$(".product-lightbox form").hasClass("variations_form")&&$(".product-lightbox form.variations_form").wc_variation_form(),$(".product-lightbox form.variations_form").on("show_variation",function(t,e){e.image_src&&($(".product-lightbox .product-gallery-slider .slide.first img").attr("src",e.image_src),$(".product-lightbox .product-gallery-slider .slide.first a").attr("href",e.image_link),$(".product-lightbox .product-gallery-slider").flickity("select",0))}),$(".product-lightbox").addQty()},600)}),t.preventDefault()}),$(".product-gallery-slider").on("cellSelect",function(){var t=$(this).find(".is-selected").outerHeight();t&&$(this).find(".flickity-viewport").css("height",t)}),!/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){var e=$(".product-zoom .easyzoom").easyZoom({loadingNotice:""}),i=e.filter(".product-zoom .easyzoom.first").data("easyZoom");i&&setTimeout(function(){$('select[name*="attribute"]').change(function(){i.swap($(".easyzoom.first img").attr("src"),$(".easyzoom.first a").attr("href"))})},300)}$(".product-gallery-slider").magnificPopup({delegate:"a",type:"image",tLoading:'<div class="ux-loading dark"></div>',removalDelay:300,closeOnContentClick:!0,gallery:{enabled:!0,navigateByImgClick:!1,preload:[0,1]},image:{verticalFit:!1,tError:'<a href="%url%">The image #%curr%</a> could not be loaded.'},callbacks:{beforeOpen:function(){this.st.mainClass="has-product-video"},open:function(){var t=$.magnificPopup.instance,e=$(".product-video-popup").attr("href");e&&(t.items.push({src:e,type:"iframe"}),t.updateItemHTML());var i=$(".mfp-wrap")[0],r=new Hammer(i);r.on("panleft",function(e){e.isFinal&&t.prev()}),r.on("panright",function(e){e.isFinal&&t.next()})}}}),$("a.product-video-popup").click(function(t){$(".product-gallery-slider").find(".first a").click(),setTimeout(function(){var t=$.magnificPopup.instance;t.prev()},10),t.preventDefault()}),$(".zoom-button").click(function(t){$(".product-gallery-slider").find(".is-selected a").click(),t.preventDefault()}),$("body").on("added_to_cart",function(){jQuery(".mini-cart").addClass("active cart-active"),jQuery(".mini-cart").hover(function(){jQuery(".cart-active").removeClass("cart-active")}),setTimeout(function(){jQuery(".cart-active").removeClass("active")},5e3)}),$(".product-thumbnails a").on("click",function(t){t.preventDefault()}),$(".scroll-to-reviews").click(function(t){$(".product-details .tabs-nav li").removeClass("current-menu-item"),$(".product-details .tabs-nav").find("a[href=#panelreviews]").parent().addClass("current-menu-item"),$(".tabs li, .tabs-inner,.panel.entry-content").removeClass("active"),$(".tabs li.reviews_tab, #panelreviews, #tab-reviews").addClass("active"),$(".panel.entry-content").css("display","none"),$("#tab-reviews").css("display","block"),$.scrollTo("#panelreviews",300,{offset:-90}),$.scrollTo(".reviews_tab",300,{offset:-90}),$.scrollTo("#section-reviews",300,{offset:-90}),t.preventDefault()})}(jQuery);