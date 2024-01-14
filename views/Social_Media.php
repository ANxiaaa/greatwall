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

  <div class="socialMedia">
    <div class="swiper-container" id="aboutUsBanner">
      <div class="swiper-wrapper" id="aboutUsBanner-wrapper"></div>
    </div>

    <div class="aboutUsTab">
      <div class="container">
        <div class="tabItem bd">
          <a href="<?php echo site_url('Contact_Us') ?>" class="navName">在线留言</a>
        </div>
        <div class="tabItem bd">
          <a href="<?php echo site_url('Contact_Info') ?>" class="navName">联系方式</a>
        </div>
        <div class="tabItem active">
          <a href="<?php echo site_url('Social_Media') ?>" class="navName">社交媒体</a>
        </div>
        <div class="tabItem">
          <a href="<?php echo site_url('Policies') ?>" class="navName">售后政策</a>
        </div>
      </div>
    </div>
    <div class="socialWrap">
      <div class="container">
        <div class="qrItem">
          <img class="activeImg" draggable="false" src="<?php echo static_file('web/img/banner2.png') ?>" alt="">
          <p class="qrName">公众号</p>
        </div>
        <div class="qrItem">
          <img class="activeImg" draggable="false" src="<?php echo static_file('web/img/banner2.png') ?>" alt="">
          <p class="qrName">视频号</p>
        </div>
        <div class="qrItem">
          <img class="activeImg" draggable="false" src="<?php echo static_file('web/img/banner2.png') ?>" alt="">
          <p class="qrName">抖 音</p>
        </div>
      </div>
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
    })
  </script>
</body>

</html>