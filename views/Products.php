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

  <div class="products">
    <div class="swiper-container" id="aboutUsBanner">
      <div class="swiper-wrapper" id="aboutUsBanner-wrapper"></div>
    </div>

    <div class="aboutUsTab">
      <div class="container">
        <div class="tabItem bd">
          <a href="<?php echo site_url('New_Products') ?>" class="navName">新品推荐</a>
        </div>
        <div class="tabItem active">
          <a href="<?php echo site_url('Products') ?>" class="navName">全线产品</a>
        </div>
        <div class="tabItem">
          <a href="<?php echo site_url('Indusrial_Clients') ?>" class="navName">定制化</a>
        </div>
        <div class="tabItem">
          <a href="<?php echo site_url('Catalog_Download') ?>" class="navName">产品手册下载</a>
        </div>
      </div>
    </div>

    <div class="productsTypeBox">
      <div class="container">
        <div class="typeLeft">
          <div class="typeSearch">
            <input type="text" placeholder="产品检索">
            <div class="typeSearchBtn"></div>
          </div>
          <div class="typeList">
            <div class="typeItem active">
              <div class="typeImgBox">
                <img class="homeIcon" draggable="false" src="<?php echo static_file('web/img/qianzi.webp') ?>" alt="">
              </div>
              <span>测量类</span>
            </div>
            <div class="typeItem">
              <div class="typeImgBox">
                <img class="homeIcon" draggable="false" src="<?php echo static_file('web/img/qianzi.webp') ?>" alt="">
              </div>
              <span>测量类</span>
            </div>
            <div class="typeItem">
              <div class="typeImgBox">
                <img class="homeIcon" draggable="false" src="<?php echo static_file('web/img/qianzi.webp') ?>" alt="">
              </div>
              <span>测量类</span>
            </div>
            <div class="typeItem">
              <div class="typeImgBox">
                <img class="homeIcon" draggable="false" src="<?php echo static_file('web/img/qianzi.webp') ?>" alt="">
              </div>
              <span>测量类</span>
            </div>
            <div class="typeItem">
              <div class="typeImgBox">
                <img class="homeIcon" draggable="false" src="<?php echo static_file('web/img/qianzi.webp') ?>" alt="">
              </div>
              <span>测量类</span>
            </div>
          </div>
        </div>
        <div class="typeRight">
          <div class="bread">
            <span>全线产品 - </span>
            <span class="current">
              <span>旋具类</span>
            </span>
          </div>
          <div class="productList">
            <div class="productItem">
              <div class="productName">超级高挺尼龙包膜钢卷尺</div>
              <div class="productImgBox">
                <img draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
              </div>
              <div class="productSize">
                <p>货号: 18645</p>
                <p>规格: 2mx16mm</p>
              </div>
              <div class="jumpBtn yellowBtn">
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="productItem">
              <div class="productName">超级高挺尼龙包膜钢卷尺</div>
              <div class="productImgBox">
                <img draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
              </div>
              <div class="productSize">
                <p>货号: 18645</p>
                <p>规格: 2mx16mm</p>
              </div>
              <div class="jumpBtn yellowBtn">
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="productItem">
              <div class="productName">超级高挺尼龙包膜钢卷尺</div>
              <div class="productImgBox">
                <img draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
              </div>
              <div class="productSize">
                <p>货号: 18645</p>
                <p>规格: 2mx16mm</p>
              </div>
              <div class="jumpBtn yellowBtn">
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="productItem">
              <div class="productName">超级高挺尼龙包膜钢卷尺</div>
              <div class="productImgBox">
                <img draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
              </div>
              <div class="productSize">
                <p>货号: 18645</p>
                <p>规格: 2mx16mm</p>
              </div>
              <div class="jumpBtn yellowBtn">
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="productItem">
              <div class="productName">超级高挺尼龙包膜钢卷尺</div>
              <div class="productImgBox">
                <img draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
              </div>
              <div class="productSize">
                <p>货号: 18645</p>
                <p>规格: 2mx16mm</p>
              </div>
              <div class="jumpBtn yellowBtn">
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="productItem">
              <div class="productName">超级高挺尼龙包膜钢卷尺</div>
              <div class="productImgBox">
                <img draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
              </div>
              <div class="productSize">
                <p>货号: 18645</p>
                <p>规格: 2mx16mm</p>
              </div>
              <div class="jumpBtn yellowBtn">
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="productItem">
              <div class="productName">超级高挺尼龙包膜钢卷尺</div>
              <div class="productImgBox">
                <img draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
              </div>
              <div class="productSize">
                <p>货号: 18645</p>
                <p>规格: 2mx16mm</p>
              </div>
              <div class="jumpBtn yellowBtn">
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="productItem">
              <div class="productName">超级高挺尼龙包膜钢卷尺</div>
              <div class="productImgBox">
                <img draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
              </div>
              <div class="productSize">
                <p>货号: 18645</p>
                <p>规格: 2mx16mm</p>
              </div>
              <div class="jumpBtn yellowBtn">
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="productItem">
              <div class="productName">超级高挺尼龙包膜钢卷尺</div>
              <div class="productImgBox">
                <img draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
              </div>
              <div class="productSize">
                <p>货号: 18645</p>
                <p>规格: 2mx16mm</p>
              </div>
              <div class="jumpBtn yellowBtn">
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="productItem">
              <div class="productName">超级高挺尼龙包膜钢卷尺</div>
              <div class="productImgBox">
                <img draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
              </div>
              <div class="productSize">
                <p>货号: 18645</p>
                <p>规格: 2mx16mm</p>
              </div>
              <div class="jumpBtn yellowBtn">
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="myPagination" id="pagination"></div>
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