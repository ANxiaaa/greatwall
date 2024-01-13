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

  <div class="newsDetail">
    <div class="container">
      <div class="bread">

        <img class="homeIcon" draggable="false" src="<?php echo static_file('web/img/homeIcon.webp') ?>" alt="">
        <span>首页 - 关于我们 -</span>
        <span class="current">新闻动态</span>
      </div>
      <div class="newsTitle">
        中国五交化协会理事长王家生及相关领导一行莅临长城精工考察调研
      </div>
      <div class="newsDate">
        <img class="rili" draggable="false" src="<?php echo static_file('web/img/rili.webp') ?>" alt="">
        <span>2023-10-12</span>
      </div>
      <div class="detailContent">

      </div>
      <a class="changeDetail" href="?id=2">上一篇: 喜讯！长城精工在余姚市制造业高质量发展大会上荣获双项殊荣</a>
      <a class="changeDetail" href="?id=3">下一篇: 长城精工入选“2022年度国家知识产权优势企业”名单
      </a>
    </div>
  </div>
  <?php include_once VIEWPATH . 'inc/footer.php'; ?>
  <?php
  echo static_file('web/js/main.js');
  echo static_file('web/js/swiper/swiper.min.css');
  echo static_file('web/js/swiper/swiper.min.js');
  ?>
  <script>
  </script>
</body>

</html>