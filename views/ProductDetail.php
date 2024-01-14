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

  <div class="productDetail">
    <div class="breadWrap">
      <div class="container">
        <div class="bread">
          <img class="homeIcon" draggable="false" src="<?php echo static_file('web/img/homeIcon.webp') ?>" alt="">
          <span>首页 - 关羽我们 -</span>
          <span class="current">新闻动态</span>
        </div>
      </div>
    </div>
    <div class="productDetaiWrap">
      <div class="container">
        <div class="detailLeft">
          <div class="productName">
            A65 系列钢卷尺
          </div>
          <div class="productSize">
            2mx16mm-3mx20mm
          </div>
          <div class="introduction">
            <span>产品介绍</span>
          </div>
          <div class="introductionList">
            <p>采用双面印刷尺带 , 符合双面 JIS 一级精度 , 正面大字体 , 反面横排字体 , 方便测量。</p>
            <p>采用双面印刷尺带 , 符合双面 JIS 一级精度 , 正面大字体 , 反面横排字体 , 方便测量。</p>
            <p>采用双面印刷尺带 , 符合双面 JIS 一级精度 , 正面大字体 , 反面横排字体 , 方便测量。</p>
            <p>采用双面印刷尺带 , 符合双面 JIS 一级精度 , 正面大字体 , 反面横排字体 , 方便测量。</p>
          </div>
        </div>
        <div class="detailRight">
          <img class="detailImg" draggable="false" alt="">
        </div>
      </div>
      <div class="downloadWrap">
        <div class="container">
          <div class="downloadBtn">
            <span>产品说明书下载</span>
            <div class="btnRight">
              <img class="downIcon" draggable="false" src="<?php echo static_file('web/img/downIcon.webp') ?>" alt="">
            </div>
          </div>
          <div class="downloadImgWrap">
            <div class="downloadImgItem">
              <img draggable="false" src="<?php echo static_file('web/img/banner3.png') ?>" alt="">
            </div>
            <div class="downloadImgItem">
              <img draggable="false" src="<?php echo static_file('web/img/banner4.png') ?>" alt="">
            </div>
            <div class="downloadImgItem">
              <img draggable="false" src="<?php echo static_file('web/img/qianzi.webp') ?>" alt="">
            </div>
          </div>
          <div class="rightIconBox">
            <img draggable="false" src="<?php echo static_file('web/img/homeBannerRight.webp') ?>" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="tableWrap">
      <div class="container">
        <div class="tableTitle">
          <span>规格参数</span>
        </div>
        <div class="myTable"></div>
      </div>
    </div>
    <div class="recommend">
      <div class="container">
        <div class="recommendTitle">
          相关推荐
        </div>
        <div class="recommendList">
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
              <img class="rightIcon" draggable="false" src="<?php echo static_file('web/img/rightIcon.webp') ?>" alt="">
            </div>
          </div>
          <div class="productItem">2</div>
          <div class="productItem">3</div>
          <div class="productItem">4</div>
          <div class="productItem">5</div>
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
      const detailImg = $('.detailImg')
      detailImg.on('load', () => {
        if (detailImg.width() > detailImg.height()) {
          detailImg.css({
            '--height': 'auto',
            '--width': '680px'
          })
        } else {
          detailImg.css({
            '--height': '430px',
            '--width': 'auto'
          })
        }
      })
      detailImg.attr({ src: '/greatwall/bocweb/web/img/banner1.png' })
      const btns = $('.downloadImgItem')
      btns.on('click', function () {
        btns.removeClass('active')
        $(this).addClass('active')
        const img = $(this).find('img')[0];
        detailImg.attr({ src: img.src })
      })
      // ---
      const data = [
        { label: '货号', value: 'aaa' },
        { label: '齿数', value: 'bbb' },
        { label: '啊啊', value: 'ccc' },
      ];
      $(".myTable").useTable({
        type: 'col',  
        data,
        onClick(key, rowData, rowIndex) {
          console.log(`在第 ${rowIndex} 行点击了字段 ${key}`, rowData);
        }
      });
    })
  </script>
</body>

</html>