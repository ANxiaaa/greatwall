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

  <div class="newProducts">
    <div class="swiper-container" id="aboutUsBanner">
      <div class="swiper-wrapper" id="aboutUsBanner-wrapper"></div>
    </div>

    <div class="aboutUsTab">
      <div class="container">
        <div class="tabItem active">
          <a href="<?php echo site_url('New_Products') ?>" class="navName">新品推荐</a>
        </div>
        <div class="tabItem">
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

    <div class="pageContent">
      <div class="container">
        <div class="containerLeft">
          <div class="myClassify">
            <div class="classifyTitle">
              新品推荐
            </div>
            <div class="classifyItem active">2023年</div>
            <div class="classifyItem">早期产品</div>
          </div>
        </div>
        <div class="containerRight">
          <div class="rightTitle">
            <div class="classifyName">
              <span>2023年</span>
            </div>
            <span>(22)</span>
          </div>
          <div class="dataItem">
            <div class="itemLeft">
              <p class="dataName">工业级日式省力钳</p>
              <p class="dataSize">2mx16mm-3mx20mm</p>
              <p class="dataMsg">• 钳体采用60CR-V制造，实验室条件下，刃口剪切寿命显著提升</p>
              <p class="dataMsg">• 特殊热处理技术，使刃口硬度最高可达HRC64，最高可剪切 HRC47的钢丝。</p>
              <div class="dataBtn yellowBtn">
                <span>了解更多</span>
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="itemRight">
              <img class="itemImg" draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
            </div>
          </div>
          <div class="dataItem">
            <div class="itemLeft">
              <p class="dataName">工业级日式省力钳</p>
              <p class="dataSize">2mx16mm-3mx20mm</p>
              <p class="dataMsg">• 钳体采用60CR-V制造，实验室条件下，刃口剪切寿命显著提升</p>
              <p class="dataMsg">• 特殊热处理技术，使刃口硬度最高可达HRC64，最高可剪切 HRC47的钢丝。</p>
              <div class="dataBtn yellowBtn">
                <span>了解更多</span>
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="itemRight">
              <img class="itemImg" draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
            </div>
          </div>
          <div class="dataItem">
            <div class="itemLeft">
              <p class="dataName">工业级日式省力钳</p>
              <p class="dataSize">2mx16mm-3mx20mm</p>
              <p class="dataMsg">• 钳体采用60CR-V制造，实验室条件下，刃口剪切寿命显著提升</p>
              <p class="dataMsg">• 特殊热处理技术，使刃口硬度最高可达HRC64，最高可剪切 HRC47的钢丝。</p>
              <div class="dataBtn yellowBtn">
                <span>了解更多</span>
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="itemRight">
              <img class="itemImg" draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
            </div>
          </div>
          <div class="dataItem">
            <div class="itemLeft">
              <p class="dataName">工业级日式省力钳</p>
              <p class="dataSize">2mx16mm-3mx20mm</p>
              <p class="dataMsg">• 钳体采用60CR-V制造，实验室条件下，刃口剪切寿命显著提升</p>
              <p class="dataMsg">• 特殊热处理技术，使刃口硬度最高可达HRC64，最高可剪切 HRC47的钢丝。</p>
              <div class="dataBtn yellowBtn">
                <span>了解更多</span>
                <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>"
                  alt="">
              </div>
            </div>
            <div class="itemRight">
              <img class="itemImg" draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
            </div>
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
      $('.itemImg').each((index, item) => {
        const itemImg = $(item)
        console.log(item, '222');
        if (itemImg.width() > itemImg.height()) {
          itemImg.css({
            '--height': 'auto',
            '--width': '414px'
          })
        } else {
          itemImg.css({
            '--height': '100%',
            '--width': 'auto'
          })
        }
      })
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