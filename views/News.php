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

  <div class="news">
    <div class="swiper-container" id="aboutUsBanner">
      <div class="swiper-wrapper" id="aboutUsBanner-wrapper"></div>
    </div>

    <div class="aboutUsTab">
      <div class="container">
        <div class="tabItem bd">
          <a href="<?php echo site_url('About_US') ?>" class="navName">长城精工</a>
        </div>
        <div class="tabItem active">
          <a href="<?php echo site_url('News') ?>" class="navName">新闻动态</a>
        </div>
        <div class="tabItem">
          <a href="<?php echo site_url('Honors_Certificates') ?>" class="navName">荣誉认证</a>
        </div>
        <div class="tabItem">
          <a href="<?php echo site_url('Branding') ?>" class="navName">品牌形象</a>
        </div>
      </div>
    </div>

    <div class="main-content">
      <div class="container">
        <div class="myTab" id="newsTab">
          <div class="myTabItem active" data-index="0">重点信息</div>
          <div class="myTabItem" data-index="1">媒体报道</div>
        </div>
        <div class="mySearchInput">
          <input id="searchInput" type="text" placeholder="请输入您感兴趣的内容！">
          <div class="mySearchBtn"></div>
        </div>
        <div class="myTabContent">
          <div class="myTabWrap show" id="newsWrap1">
            <div class="newsItem">
              <div class="imgBox">
                <img draggable="false" src="<?php echo static_file('web/img/banner5.png') ?>" alt="">
              </div>
              <div class="newsRight">
                <p class="newsTitle">喜讯！长城精工在余姚市制造业高质量发展大会上荣获双项殊荣喜讯！长城精工在余姚市制造业高质量发展大会上荣获双项殊荣</p>
                <p class="newsContent">
                  6月23日，以“厚积薄发，乘势而上”为主题的长城精工2021年度全国经销商大会暨答谢晚宴在上海北虹桥暨答谢晚宴在上海北虹桥暨答谢晚宴在上海北虹桥暨答谢晚宴在上海北虹桥……，这是长城精工继2019年入选工信部第一批专精特新小巨人企业之后，再获殊荣。
                </p>
                <div class="newsDate">
                  <img class="rili" draggable="false" src="<?php echo static_file('web/img/rili.webp') ?>" alt="">
                  <span class="date">2023-10-12</span>
                  <span class="line">｜</span>
                  <span class="more">
                    <span>了解更多</span>
                    <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                      alt="">
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="myTabWrap" id="newsWrap2">222</div>
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
      // ---
      const newsTabs = $('#newsTab .myTabItem')
      const newsContents = $('.myTabContent .myTabWrap')
      const newsPopup1 = $('#newsPopup1 .swiper-wrapper')
      const newsPopup2 = $('#newsPopup2 .swiper-wrapper')
      newsTabs.on('click', function () {
        newsTabs.removeClass('active')
        newsContents.removeClass('show')
        $(this).addClass('active')
        newsContents.eq($(this).attr('data-index')).addClass('show')
      })
    })
  </script>
</body>

</html>