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

  <div class="contactUs">
    <div class="swiper-container" id="aboutUsBanner">
      <div class="swiper-wrapper" id="aboutUsBanner-wrapper"></div>
    </div>

    <div class="aboutUsTab">
      <div class="container">
        <div class="tabItem active">
          <a href="<?php echo site_url('Contact_Us') ?>" class="navName">在线留言</a>
        </div>
        <div class="tabItem">
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

    <div class="formWrap">
      <div class="container">
        <div class="formTop">
          <div class="topLeft">选择留言主题：</div>
          <div class="topRight">
            <div data-val="11" class="radioItem active">
              <div class="checkBox">
                <i>✓</i>
              </div>
              <span>咨询</span>
            </div>
            <div data-val="22" class="radioItem">
              <div class="checkBox">
                <i>✓</i>
              </div>
              <span>售后</span>
            </div>
            <div data-val="33" class="radioItem">
              <div class="checkBox">
                <i>✓</i>
              </div>
              <span>意见</span>
            </div>
            <div data-val="44" class="radioItem">
              <div class="checkBox">
                <i>✓</i>
              </div>
              <span>其他</span>
            </div>
          </div>
        </div>
        <div class="formBox">
          <form class="myForm" action="#">
            <div class="formRow">
              <div class="formItem">
                <div class="label">单位名称:</div>
                <div class="inputBox">
                  <input required autocomplete="off" type="text" name="dwmc">
                </div>
              </div>
              <div class="formItem">
                <div class="label">姓名:</div>
                <div class="inputBox">
                  <input autocomplete="off" type="text" name="name">
                </div>
              </div>
            </div>
            <div class="formRow">
              <div class="formItem">
                <div class="label">应用行业:</div>
                <div class="inputBox selectBox">
                  <span class="showValue">请选择</span>
                  <input autocomplete="off" type="text" class="selectInput" readonly name="yyhy" placeholder="请选择">
                  <ul class="selectOptions">
                    <li class="selectOption">选项 1</li>
                    <li class="selectOption">选项 2</li>
                    <li class="selectOption">选项 3</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="formRow">
              <div class="formItem">
                <div class="label">移动电话:</div>
                <div class="inputBox">
                  <input required autocomplete="off" type="text" name="tel">
                </div>
              </div>
              <div class="formItem">
                <div class="label">Email:</div>
                <div class="inputBox">
                  <input autocomplete="off" type="text" name="email">
                </div>
              </div>
            </div>
            <div class="formRow">
              <div class="formItem">
                <div class="label">联系地址:</div>
                <div class="inputBox selectBox">
                  <span class="showValue">请选择</span>
                  <input autocomplete="off" type="text" class="selectInput" id="lxdz" readonly name="lxdz"
                    placeholder="请选择">
                  <ul class="selectOptions">
                    <li class="selectOption">选项 1</li>
                    <li class="selectOption">选项 2</li>
                    <li class="selectOption">选项 3</li>
                  </ul>
                </div>
              </div>
              <div class="formItem">
                <div class="inputBox selectBox">
                  <span class="showValue">请选择</span>
                  <input autocomplete="off" type="text" class="selectInput" readonly id="dizhi" name="dizhi"
                    placeholder="请选择">
                  <ul class="selectOptions">
                    <li class="selectOption">选项 1</li>
                    <li class="selectOption">选项 2</li>
                    <li class="selectOption">选项 3</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="formRow">
              <div class="formItem">
                <div class="inputBox">
                  <div class="label"></div>
                  <input required autocomplete="off" type="text" name="xxdz" placeholder="详细地址">
                </div>
              </div>
            </div>
            <div class="formRow">
              <div class="formItem">
                <div class="label">留言内容:</div>
                <div class="inputBox">
                  <textarea required autocomplete="off" type="text" name="liuyan" placeholder="200字以内"></textarea>
                </div>
              </div>
            </div>
            <button>提交表单</button>
          </form>
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
      const radios = $('.topRight .radioItem')
      let type = radios.eq(0).data('val')
      radios.on('click', function () {
        radios.removeClass('active')
        type = $(this).addClass('active').data('val')
      })
      // ---
      $('#lxdz').on('change', function () {
        $('#dizhi').prev().text('请选择')
        $('#dizhi').next().html(`
          <li class="selectOption" data-value="sss">杭州</li>
          <li class="selectOption" data-value="ddd">绍兴</li>
          <li class="selectOption" data-value="fff">哦哦</li>
        `)
      })
    })
  </script>
</body>

</html>