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

  <div class="policies">
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
        <div class="tabItem bd">
          <a href="<?php echo site_url('Social_Media') ?>" class="navName">社交媒体</a>
        </div>
        <div class="tabItem active">
          <a href="<?php echo site_url('Policies') ?>" class="navName">售后政策</a>
        </div>
      </div>
    </div>
    <div class="policiesWrap">
      <div class="container">
        <div class="topBorder"></div>
        <div class="policieContent">
          <div class="policieItem">
            <div class="policieTitle">
              <div class="policieNum">一</div>
              <span>产品标准</span>
            </div>
            <div class="policieMsg">① 本公司生产、销售的所有产品均按照有关国际国内标准执行。公司还自订一套比国标，行标更严格．更全面的企业内控检验标淮。
            ② 为确保标淮的实施，本公司拥有工量具系列的各种测试设备，在生产过程和成品入库前，格按照国家标准GB/2828.1-2012的规定抽检或全检。经检验合格的产品，均具有 “检验合格证”</div>
          </div>
          <div class="policieItem">
            <div class="policieTitle">
              <div class="policieNum">二</div>
              <span>产品标准</span>
            </div>
            <div class="policieMsg">① 本公司生产、销售的所有产品均按照有关国际国内标准执行。公司还自订一套比国标，行标更严格．更全面的企业内控检验标淮。
            ② 为确保标淮的实施，本公司拥有工量具系列的各种测试设备，在生产过程和成品入库前，格按照国家标准GB/2828.1-2012的规定抽检或全检。经检验合格的产品，均具有 “检验合格证”</div>
          </div>
          <div class="policieItem">
            <div class="policieTitle">
              <div class="policieNum">三</div>
              <span>产品标准</span>
            </div>
            <div class="policieMsg">① 本公司生产、销售的所有产品均按照有关国际国内标准执行。公司还自订一套比国标，行标更严格．更全面的企业内控检验标淮。
            ② 为确保标淮的实施，本公司拥有工量具系列的各种测试设备，在生产过程和成品入库前，格按照国家标准GB/2828.1-2012的规定抽检或全检。经检验合格的产品，均具有 “检验合格证”</div>
          </div>
          <div class="policieItem">
            <div class="policieTitle">
              <div class="policieNum">十五</div>
              <span>产品标准</span>
            </div>
            <div class="policieMsg">① 本公司生产、销售的所有产品均按照有关国际国内标准执行。公司还自订一套比国标，行标更严格．更全面的企业内控检验标淮。
            ② 为确保标淮的实施，本公司拥有工量具系列的各种测试设备，在生产过程和成品入库前，格按照国家标准GB/2828.1-2012的规定抽检或全检。经检验合格的产品，均具有 “检验合格证”</div>
          </div>
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