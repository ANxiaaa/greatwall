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

  <div class="branding">
    <div class="swiper-container" id="aboutUsBanner">
      <div class="swiper-wrapper" id="aboutUsBanner-wrapper"></div>
    </div>

    <div class="aboutUsTab">
      <div class="container">
        <div class="tabItem bd">
          <a href="<?php echo site_url('About_US') ?>" class="navName">长城精工</a>
        </div>
        <div class="tabItem bd">
          <a href="<?php echo site_url('News') ?>" class="navName">新闻动态</a>
        </div>
        <div class="tabItem bd">
          <a href="<?php echo site_url('Honors_Certificates') ?>" class="navName">荣誉认证</a>
        </div>
        <div class="tabItem active">
          <a href="<?php echo site_url('Branding') ?>" class="navName">品牌形象</a>
        </div>
      </div>
    </div>

    <div class="store">
      <div class="swiper-container" id="storeBanner">
        <div class="swiper-wrapper" id="storeBanner-wrapper"></div>
      </div>
      <div class="container">
        <div class="swiper-button-next">
          <img draggable="false" src="<?php echo static_file('web/img/homeBannerRight.webp') ?>" alt="">
        </div>
        <div class="swiper-button-prev">
          <img draggable="false" src="<?php echo static_file('web/img/homeBannerLeft.webp') ?>" alt="">
        </div>
      </div>
    </div>

    <div class="showCar" id="showCar">
      <div class="showCarTitle">长城展示车</div>
      <div class="showCarBtnBox"></div>
      <img id="showCarImg" draggable="false" alt="">
    </div>
  </div>

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
        }, 100);
      });
    }
    const searchFn = (e) => {
      if (e.code == 'Enter') {
        console.log(e.target.value);
      }
    }
    $(function () {
      // ---
      fetchData().then(data => {
        const swiperWrapper = $("#aboutUsBanner-wrapper");
        const dom = data.map(item => {
          return `<div class='swiper-slide'>
            <img class="bannerImg" draggable="false" src="/greatwall/bocweb/web/img/banner${item.name}.png" alt="" />
          </div>`
        })
        swiperWrapper.html(dom)
        const mySwiper = new Swiper('#aboutUsBanner', {
          loop: true,
          effect: 'fade',
          autoplay: 5000,
        });
      });
      // ----
      fetchData().then(data => {
        const swiperWrapper = $("#storeBanner-wrapper");
        const dom = data.map(item => {
          return `<div class="swiper-slide">
            <div class="storeItem">
              <div class="storeName">长城精工形象店</div>
              <img class="storeImg" draggable="false" src="/greatwall/bocweb/web/img/banner${item.name}.png" alt="" />
              <div class="shadowBtm"></div>
            </div>
          </div>`
        })
        swiperWrapper.html(dom)
        const mySwiper = new Swiper('#storeBanner', {
          loop: true,
          slidesPerView: 'auto',
          centeredSlides: true,
          prevButton: '.store .swiper-button-prev',
          nextButton: '.store .swiper-button-next',
        });
      });
      // ---
      fetchData().then(data => {
        const showCar = $("#showCar .showCarBtnBox");
        const showCarImg = $('#showCarImg')
        const dom = data.map(item => {
          return `<div class="showCarBtnItem">
            <img draggable="false" src="/greatwall/bocweb/web/img/banner${item.name}.png" alt="" />
          </div>`
        })
        showCar.html(dom)
        showCarImg.attr({ src: '/greatwall/bocweb/web/img/banner1.png' })
        if (showCarImg.width() > showCarImg.height()) {
          showCarImg.css({
            height: 'auto',
            width: 1184
          })
        } else {
          showCarImg.css({
            height: 750,
            width: 'auto'
          })
        }
        const btns = showCar.find('.showCarBtnItem')
        btns.eq(0).addClass('active')
        btns.on('click', function () {
          btns.removeClass('active')
          $(this).addClass('active')
          const img = $(this).find('img')[0];
          if (img.width > img.height) {
            showCarImg.css({
              height: 'auto',
              width: 1184
            })
          } else {
            showCarImg.css({
              height: 750,
              width: 'auto'
            })
          }
          showCarImg.attr({ src: img.src })
        })
      });
    })
  </script>
</body>

</html>