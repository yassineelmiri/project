!function(l){"use strict";var a=l(window),e=l(document),s={},o={},s={init:function(){this.processSlickSlider()},processSlickSlider:function(){var n={dots:!1,infinite:!0,speed:500,fade:!0,cssEase:"linear",autoplay:!0,autoplaySpeed:5e3,swipeToSlide:!0,appendArrows:!1},s={dots:!1,arrows:!0,slidesToShow:4,slidesToScroll:1,infinite:!0,speed:500,autoplay:!1,responsive:[{breakpoint:1200,settings:{slidesToShow:3}},{breakpoint:800,settings:{slidesToShow:2}},{breakpoint:480,settings:{slidesToShow:1}}]};[".post-content-gallery.gallery-slider .image-gallery",".loftocean-popup-sliders .popup-slider.gallery-slider .image-gallery"].forEach(function(s){l(s).length&&l(s).each(function(){var s=l(this),t=l.extend({},n),o=l("<div>",{class:"slider-arrows"});s.after(o),t.appendArrows=o,s.closest(".popup-slider").length&&(t.autoplay=!1),s.cozystaySlickSlider(t)})}),l(".related-posts .related-wrapper").each(function(){l(this).cozystaySlickSlider(s)});var t=l(".post.format-gallery .thumbnail-gallery");t.length&&t.cozystayPostsGallery()}},o={masonry:!1,loaded:!1,init:function(s,t){var o,n=s&&l(s).length?l(s):l(".posts.layout-masonry");l();n.length&&((o=this).masonry=o.masonry&&o.masonry.length?o.masonry.add(n):n,n.data("mobile-mode",!1).each(function(){var s,t=l(this);l(this).find(".posts-wrapper .post").length?(s=[],t.find(".posts-wrapper .post").each(function(){s.unshift(l(this))}),t.data("post-list",s)):t.data("post-list",!1)}),o.loaded||(o.loaded=!0,e.on("resize.cozystay.window",function(){var s=o.isMobileDevice(o.masonry),t=o.masonry.first().data("mobile-mode");s&&!t?o.runMasonryMobileMode(o.masonry):s||o.masonry.each(function(){o.changeMasonryColumnSettings(l(this)),o.resetMasonryPosts(l(this)),o.runMasonryDesktopMode(l(this))})})),o.isMobileDevice(n)?o.runMasonryMobileMode(n):t?o.processDesktopMasonryLayout(n):a.on("load",function(){o.processDesktopMasonryLayout(n)}))},processDesktopMasonryLayout:function(s){var t=this;s.each(function(){t.changeMasonryColumnSettings(l(this)),t.runMasonryDesktopMode(l(this),!0)})},changeMasonryColumnSettings:function(s){768<window.cozystayInnerWidth?window.cozystayInnerWidth<1024?s.data("masonry-column",2):s.data("masonry-column",s.find(".masonry-column").length):s.data("masonry-column",!1)},isMobileDevice:function(s){return s.length&&s.find(".posts-wrapper .post").length&&window.cozystayInnerWidth<768},runMasonryMobileMode:function(s){var t=this;s.data("mobile-mode",!0).each(function(){t.resetMasonryPosts(l(this))}),e.trigger("animation.cozystay.masonry")},resetMasonryPosts:function(s){var t,o;s.data("post-list")&&(t=s.data("post-list"),o=s.find(".masonry-column").data("column-height",0).first(),t.forEach(function(s){o.prepend(s)}),s.data("current",0),o.siblings().addClass("empty"))},runMasonryDesktopMode:function(s,t){t=t?{"trigger-sidebar-resize":!0}:{};s.data("current",0).find(".masonry-column").data("column-height",0),s.data("mobile-mode",!1).cozystayMasonry(t),e.trigger("animation.cozystay.masonry")}};l.fn.cozystayMasonry=function(s){var r=l.extend({},{post:".post",append:!1,"trigger-sidebar-resize":!1},s||{});return l(this).each(function(){var n=l(this),s=r.post;if(n.hasClass("layout-masonry")&&n.find(s).length){for(var a=[],e=n.data("masonry-column")?n.data("masonry-column"):2,i=n.data("current")||0,t=n.find(".masonry-column"),o=0;o<e;o++)a.push(t.eq(o).data("column-height")||0);n.find(".posts-wrapper "+s).each(function(s,t){var t=l(t),o=0;a[i]+=cozystayParseInt(t.outerHeight(!0)),t.addClass("masonry-column-"+i),o=a[i];for(var n=e-1;0<=n;n--)a[n]<=o&&(o=a[n],i=n)}),t.each(function(s,t){var o="masonry-column-"+s;n.find(".post."+o).length&&l(this).append(n.find(".post."+o).removeClass(o).detach()),l(this).data("column-height",a[s]),a[s]?l(this).hasClass("empty")&&l(this).removeClass("empty"):l(this).hasClass("empty")||l(this).addClass("empty")}),n.data("current",i)}}),e.trigger("changed.cozystay.mainContent"),this},l.fn.cozystayPostsGallery=function(){return l(this).each(function(){l(this).cozystaySlickSlider({dots:!0,arrows:!0,slidesToShow:1,slidesToScroll:1,infinite:!0,speed:500,autoplay:!1,autoplaySpeed:5e3,appendArrows:l(this).parents(".featured-img").first().find(".slider-arrows"),appendDots:l(this).parents(".featured-img").first().find(".slider-dots")})})},e.on("cozystay.init",function(){s.init(),o.init()}).on("cozystay.initMasonry",function(s,t){t&&l(t).length&&o.init(t,!0)})}(jQuery);