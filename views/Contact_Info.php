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

  <div class="contactInfo">
    <div class="swiper-container" id="aboutUsBanner">
      <div class="swiper-wrapper" id="aboutUsBanner-wrapper"></div>
    </div>

    <div class="aboutUsTab">
      <div class="container">
        <div class="tabItem bd">
          <a href="<?php echo site_url('Contact_Us') ?>" class="navName">在线留言</a>
        </div>
        <div class="tabItem active">
          <a href="<?php echo site_url('Contact_Info') ?>" class="navName">联系方式</a>
        </div>
        <div class="tabItem">
          <a href="<?php echo site_url('Social_Media') ?>" class="navName">社交媒体</a>
        </div>
        <div class="tabItem">
          <a href="<?php echo site_url('Policies') ?>" class="navName">售后政策</a>
        </div>
      </div>
    </div>

    <div class="infoWrap">
      <div class="container">
        <div class="indoItem">
          <div class="infoLeft">
            <img class="img" draggable="false" src="<?php echo static_file('web/img/info1.webp') ?>" alt="">
            <img class="activeImg" draggable="false" src="<?php echo static_file('web/img/info1Active.webp') ?>" alt="">
          </div>
          <div class="infoRight">
            <div class="innfoName">
              <span>公司地址</span>
            </div>
            <div class="infoMsg">浙江省余姚市阳明科技工业园区 江丰路1号</div>
          </div>
          <img class="msgBg" draggable="false" src="<?php echo static_file('web/img/msgBg.webp') ?>" alt="">
        </div>
        <div class="indoItem">
          <div class="infoLeft">
            <img class="img" draggable="false" src="<?php echo static_file('web/img/info2.webp') ?>" alt="">
            <img class="activeImg" draggable="false" src="<?php echo static_file('web/img/info2Active.webp') ?>" alt="">
          </div>
          <div class="infoRight">
            <div class="innfoName">
              <span>免费热线</span>
            </div>
            <div class="infoMsg">400-888-8200</div>
          </div>
          <img class="msgBg" draggable="false" src="<?php echo static_file('web/img/msgBg.webp') ?>" alt="">
        </div>
        <div class="indoItem">
          <div class="infoLeft">
            <img class="img" draggable="false" src="<?php echo static_file('web/img/info3.webp') ?>" alt="">
            <img class="activeImg" draggable="false" src="<?php echo static_file('web/img/info3Active.webp') ?>" alt="">
          </div>
          <div class="infoRight">
            <div class="innfoName">
              <span>国内销售</span>
            </div>
            <div class="infoMsg">86-574-62880811</div>
            <div class="infoMsg">ccjg@gwpstools.com</div>
          </div>
          <img class="msgBg" draggable="false" src="<?php echo static_file('web/img/msgBg.webp') ?>" alt="">
        </div>
        <div class="indoItem">
          <div class="infoLeft">
            <img class="img" draggable="false" src="<?php echo static_file('web/img/info1.webp') ?>" alt="">
            <img class="activeImg" draggable="false" src="<?php echo static_file('web/img/info1Active.webp') ?>" alt="">
          </div>
          <div class="infoRight">
            <div class="innfoName">
              <span>出口销售</span>
            </div>
            <div class="infoMsg">86-574-62880818</div>
            <div class="infoMsg">sales@gwpstools.com</div>
          </div>
          <img class="msgBg" draggable="false" src="<?php echo static_file('web/img/msgBg.webp') ?>" alt="">
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