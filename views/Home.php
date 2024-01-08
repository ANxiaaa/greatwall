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
      <div class="inputBox">
        <img class="search" draggable="false" src="<?php echo static_file('web/img/search.webp') ?>" alt="">
        <input type="text" placeholder="请输入产品关键词" onkeypress="searchFn(event)" />
      </div>
    </div>
    <!-- 地球 -->
    <div class="earth">
      <div class="container">
        <div class="partTitle">
          <div class="topName">
            <img class="topImg" draggable="false" src="<?php echo static_file('web/img/gongsi.webp') ?>" alt="">
            <span>公司介绍</span>
          </div>
          <div class="topTitle">一家集研发、制造、销售、
            服务于一体的国际化五金工具企业</div>
          <p class="numText">1984</p>
          <p class="numMsg">始于1984年</p>
          <p class="numText">80</p>
          <p class="numMsg">业务已遍布全球80多个国家和地区</p>
        </div>
        <div class="earthImgBox">
          <img class="earthImg" draggable="false" src="<?php echo static_file('web/img/earth.png') ?>" alt="">
          <img class="xuxianImg" draggable="false" src="<?php echo static_file('web/img/xuxian.png') ?>" alt="">
        </div>
        <div class="earthContent">
          <p>宁波长城精工实业有限公司，始创于1984年，是一家集研发、制造、销售、服务于一体的国际化五金工具企业,业务已遍布全球80多个国家和地区，为国内外众多大型工业用户提供完善的工具需求解决方案。</p>
          <p>历经数十年风雨，长城精工坚持为国内外工具使用者带来有价值的中高档工具。</p>
          <div class="earthBtn yellowBtn">
            <span>探索更多</span>
            <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- 产品推荐 -->
    <div class="recommendation">
      <div class="container">
        <div class="recommendation-left">
          <div class="partTitle">
            <div class="topName">
              <img class="topImg" draggable="false" src="<?php echo static_file('web/img/gongwenbao.webp') ?>" alt="">
              <span>新品推荐</span>
            </div>
            <div class="topTitle">致力于成为全球优秀的工业级全场景工业需求解决者</div>
          </div>
          <div class="entranceBtn yellowBtn">
            <span>查看全系列产品</span>
            <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>" alt="">
          </div>
          <img class="quantou" draggable="false" src="<?php echo static_file('web/img/quantou.webp') ?>" alt="">
        </div>
        <div class="recommendation-right">
          <div class="rightTitle">
            推荐产品
          </div>
          <div class="recommendationNames">
            <div class="nameItem">工业级日式省力钳</div>
            <div class="nameItem">工业级日式省力钳</div>
            <div class="nameItem">工业级日式省力钳</div>
            <div class="nameItem">工业级日式省力钳</div>
            <div class="nameItem">工业级日式省力钳</div>
            <div class="nameItem">工业级日式省力钳</div>
          </div>
          <div class="swiper-container" id="recommendationSwiper">
            <div class="swiper-wrapper" id="recommendationSwiperWrap">
              <div class="swiper-slide recommendationItem">
                <div class="itemTitle">
                  工业级日式省力钳111
                </div>
                <div class="itemmsg">
                  <div class="msg">工业级日式省力钳工业级日式省力钳工业级日式省力钳</div>
                  <div class="msg">工业级日式省力钳工业级日式省力钳工业级日式省力钳</div>
                  <div class="msg">工业级日式省力钳工业级日式省力钳工业级日式省力钳</div>
                  <div class="msg">工业级日式省力钳工业级日式省力钳工业级日式省力钳</div>
                  <div class="msg">工业级日式省力钳工业级日式省力钳工业级日式省力钳</div>
                </div>
                <div class="itemBtn yellowBtn">
                  <span>了解更多</span>
                  <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                    alt="">
                </div>
                <img class="msgBg" draggable="false" src="<?php echo static_file('web/img/msgBg.webp') ?>" alt="">
                <img class="msgImg" draggable="false" src="<?php echo static_file('web/img/qianzi.webp') ?>" alt="">
              </div>
              <div class="swiper-slide recommendationItem">Slide 2</div>
              <div class="swiper-slide recommendationItem">Slide 3</div>
              <div class="swiper-slide recommendationItem">Slide 4</div>
              <div class="swiper-slide recommendationItem">Slide 5</div>
              <div class="swiper-slide recommendationItem">Slide 6</div>
              <div class="swiper-slide recommendationItem">Slide 7</div>
              <div class="swiper-slide recommendationItem">Slide 8</div>
            </div>
          </div>
          <div class="swiper-button-next">
            <img draggable="false" src="<?php echo static_file('web/img/homeBannerRight.webp') ?>" alt="">
          </div>
          <div class="swiper-button-prev">
            <img draggable="false" src="<?php echo static_file('web/img/homeBannerLeft.webp') ?>" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- 新闻 -->
    <div class="news">
      <div class="container">
        <div class="partTitle">
          <div class="topName">
            <img class="topImg" draggable="false" src="<?php echo static_file('web/img/xwzx.webp') ?>" alt="">
            <span>新闻中心</span>
          </div>
          <div class="topTitle">共同见证长城精工的</div>
        </div>
        <div class="swiper-container" id="newsSwiper">
          <div class="swiper-wrapper" id="newsSwiperWrap">
            <div class="swiper-slide newsItem">
              <div class="newsDate">
                <img class="rili" draggable="false" src="<?php echo static_file('web/img/rili.webp') ?>" alt="">
                <span>2023-10-12</span>
              </div>
              <div class="newsImgBox">
                <img class="newsImg" draggable="false" src="<?php echo static_file('web/img/banner2.png') ?>" alt="">
              </div>
              <div class="newsTitle">长城精工入选国家级专精特新重点“小巨人”企业长城精工入选国家级专精特新重点“小巨人”企业</div>
              <div class="newsMsg">长城精工入选国家级专精特新重点“小巨人”企业长城精工入选国家级专精特新重点“小巨人”企业</div>
              <div class="newsBtn yellowBtn">
                <span>了解更多</span>
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="swiper-slide newsItem">Slide 2</div>
            <div class="swiper-slide newsItem">Slide 3</div>
            <div class="swiper-slide newsItem">Slide 4</div>
            <div class="swiper-slide newsItem">Slide 5</div>
            <div class="swiper-slide newsItem">Slide 6</div>
            <div class="swiper-slide newsItem">Slide 7</div>
            <div class="swiper-slide newsItem">Slide 8</div>
          </div>
        </div>
        <div class="swiper-button-next">
          <img draggable="false" src="<?php echo static_file('web/img/homeBannerRight.webp') ?>" alt="">
        </div>
        <div class="swiper-button-prev">
          <img draggable="false" src="<?php echo static_file('web/img/homeBannerLeft.webp') ?>" alt="">
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
        const swiperWrapper = $("#banner-wrapper");
        const dom = data.map(item => {
          return `<div class='swiper-slide'>
            <img class="bannerImg" draggable="false" src="/greatwall/bocweb/web/img/banner${item.name}.png" alt="" />
          </div>`
        })
        swiperWrapper.html(dom)
        const mySwiper = new Swiper('#banner', {
          prevButton: '#banner .swiper-button-prev',
          nextButton: '#banner .swiper-button-next',
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
          items.removeClass('rotate');
          items[currentIndex.count].classList.add('rotate');
          currentIndex.count++;
          if (currentIndex.count === items.length) {
            currentIndex.count = 0;
          }
        }, 1500);
      })
      // ----
      fetchData().then(data => {
        const recommendationSwiperWrap = $('#recommendationSwiperWrap')
        data.map(item => {

        })
        const swiper = new Swiper('#recommendationSwiper', {
          slidesPerView: 2,
          spaceBetween: 12,
          loop: true,
          nextButton: '.recommendation-right .swiper-button-next',
          prevButton: '.recommendation-right .swiper-button-prev',
          onSlideChangeStart(swiper) {
            // index + 2
            console.log(swiper.activeIndex);
          },
        });
      });
      // ------
      fetchData().then(data => {
        const recommendationSwiperWrap = $('#newsSwiperWrap')
        data.map(item => {

        })
        const swiper = new Swiper('#newsSwiper', {
          slidesPerView: 3,
          loop: true,
          // spaceBetween: true,
          nextButton: '.news .swiper-button-next',
          prevButton: '.news .swiper-button-prev',
          onSlideChangeStart(swiper) {
            // index + 2
            console.log(swiper.activeIndex);

          },
        });
      })
    })
  </script>
</body>

</html>