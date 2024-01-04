 function navScroll(ele, select) {

     var preImg = [];
     $('img').each(function (index, el) {
         preImg.push($(el).attr('src'));
     })
     _PreLoadImg(preImg, function () {

         var winS = $(window).scrollTop();
         var navTop = ele.offset().top;

         if (winS > navTop) {
             ele.addClass('on');
         } else {
             ele.removeClass('on');
         }

         $(window).on('scroll resize', function () {

             winS = $(window).scrollTop();
             if (winS > navTop) {
                 ele.addClass('on');
             } else {
                 ele.removeClass('on');
             }

             // var _length = $('.position').length;
             // for(var i = 0;i < _length ; i++){
             //  if($(window).scrollTop()>=$('.position').eq(i).offset().top){
             //      select.removeClass('cur');
             //      select.eq(i).addClass('cur')
             //  }
             // }
             // if ($(document).scrollTop() >= $(document).height() - $(window).height()) {
             //  select.removeClass('cur');
             //  select.last().addClass('cur');
             // }
         });
         // select.on('click',function(){
         //  var i = $(this).index();
         //  $('html,body').stop().animate({scrollTop:$('.position').eq(i).offset().top-ele.outerHeight()+2},500);

         // })

     })
 }

 function scrollno() {
     $(window).scroll(function () {
         var before = $(window).scrollTop();
         $(window).scroll(function () {
             var after = $(window).scrollTop();
             if (before < after && window.innerWidth > 1024 && before > 0) {
                 $('header').addClass('headroom-unpinned');
                 before = after;

                 if (after > 20) {
                     $('header').addClass('down');
                 } else {
                     $('header').removeClass('down');
                 }
             };
             if (before > after && window.innerWidth > 1024) {
                 if (after > 20) {
                     $('header').addClass('down');
                 } else {
                     $('header').removeClass('down');
                 }

                 $('header').removeClass('headroom-unpinned');
                 before = after;
             };
         })
     })
 }