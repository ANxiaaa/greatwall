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

  <div class="newsSearch">
    <div class="topSearch">
      <div class="container">
        <div class="mySearchInput">
          <input id="searchInput" type="text" placeholder="请输入搜索内容">
          <div class="mySearchBtn">
            <span>搜索</span>
          </div>
        </div>
      </div>
    </div>
    <div class="resultContent">
      <div class="container">
        <div class="resultTitle">
          <span>共搜索到与“<span class="redText">dasdasd</span>”相关信息，共52条</span>
        </div>
        <div class="resultTab">
          <div class="resultTabItem active">
            <span>重点信息(20)</span>
          </div>
          <div class="resultTabItem">
            <span>媒体报道(5)</span>
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
      // ---

    })
  </script>
</body>

</html>