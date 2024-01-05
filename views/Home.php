<!DOCTYPE html>
<html>

<head>
  <?php include_once VIEWPATH . 'inc/head.php'; ?>
</head>
<!-- 禁用右键: -->
<!-- <script>
function stop(){return false;}
document.oncontextmenu=stop;
</script> -->

<body>
  <?php include_once VIEWPATH . 'inc/header.php'; ?>
  <div class="home">
    <!-- 轮播图 -->
    <div class="swiper-container" id="banner">
      <div class="swiper-wrapper" id="banner-wrapper"></div>
      <div class="swiper-button-next">
        <img draggable="false" src="<?php echo static_file('web/img/homeBannerRight.webp') ?>" alt="">
      </div>
      <div class="swiper-button-prev">
        <img draggable="false" src="<?php echo static_file('web/img/homeBannerLeft.webp') ?>" alt="">
      </div>
      <div class="banner-progress">
        <div class="progressCount" id="progressCount"></div>
        <div class="progressBar"></div>
      </div>
    </div>
    <!-- 搜索 -->
    <div id="searchBox">
      <div class="overturnBox">
        <img class="overturnBg" draggable="false" src="<?php echo static_file('web/img/overturnBg.webp') ?>" alt="">
        <div class="overturnWrap" id="overturnWrap"></div>
      </div>
    </div>
  </div>
  <div style="height: 2000px;"></div>

  <?php include_once VIEWPATH . 'inc/footer.php'; ?>

  <?php
  echo static_file('web/js/main.js');
  echo static_file('web/js/swiper/swiper.min.css');
  echo static_file('web/js/swiper/swiper.min.js');
  ?>
  <script>
    const fetchData = () => {
      return new Promise(resolve => {
        setTimeout(function () {
          resolve([
            { name: '1' },
            { name: '2' },
            { name: '3' },
            { name: '4' },
            { name: '5' },
            { name: '6' }
          ]);
        }, 1000);
      });
    }
    $(function () {
      fetchData().then(data => {
        const swiperWrapper = $("#banner-wrapper");
        const dom = data.map(item => {
          return `<div class='swiper-slide'>
            <img class="bannerImg" draggable="false" src="/greatwall/bocweb/web/img/banner${item.name}.png" alt="" />
          </div>`
        })
        swiperWrapper.html(dom)
        const mySwiper = new Swiper('#banner', {
          prevButton: '.swiper-button-prev',
          nextButton: '.swiper-button-next',
          loop: true,
          onSlideChangeStart(swiper) {
            const index = swiper.activeIndex % data.length
            $("#progressCount").width(index == 0 ? 184 : 34 + (index - 1) * 30)
          },
        });
      });
      // -------
      fetchData().then(data => {
        const overturnWrap = $('#overturnWrap')
        const dom = data.map(item => {
          return `<img class="overturnItem" draggable="false" src="/greatwall/bocweb/web/img/banner${item.name}.png" alt="" />`
        })
        overturnWrap.html(dom)
        const items = overturnWrap.find('.overturnItem');
        const currentIndex = { count: 1 };
        items[0].classList.add('rotate');
        const timer = setInterval(() => {
          console.log(items, 'itemsitems');
          items.removeClass('rotate');
          items[currentIndex.count].classList.add('rotate');
          currentIndex.count++;
          if (currentIndex.count === items.length) {
            currentIndex.count = 0;
          }
        }, 1500);
      })
    })
  </script>
</body>

</html>