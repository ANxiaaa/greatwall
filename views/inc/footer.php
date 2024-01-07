<footer>
  <div class="footer-content">
    <div class="container">
      <div class="logoBox">
        <img class="logo" draggable="false" src="<?php echo static_file('web/img/footerlogo.webp') ?>" alt="">
        <div class="share">
          <div class="shareItem">
            <img class="weixin" draggable="false" src="<?php echo static_file('web/img/weixin.webp') ?>" alt="">
          </div>
          <div class="shareItem">
            <img class="zheshisha" draggable="false" src="<?php echo static_file('web/img/zheshisha.webp') ?>" alt="">
          </div>
          <div class="shareItem">
            <img class="douyin" draggable="false" src="<?php echo static_file('web/img/douyin.webp') ?>" alt="">
          </div>
        </div>
        <img class="cqc" draggable="false" src="<?php echo static_file('web/img/cqc.webp') ?>" alt="">
      </div>
      <div class="btmNav">
        <div class="navBox">
          <div class="navTitle">产品中心</div>
          <div class="navItem">新品推荐</div>
          <div class="navItem">新品推荐</div>
          <div class="navItem">新品推荐</div>
          <div class="navItem">新品推荐</div>
        </div>
        <div class="navBox">
          <div class="navTitle">产品中心</div>
          <div class="navItem">新品推荐</div>
          <div class="navItem">新品推荐</div>
          <div class="navItem">新品推荐</div>
          <div class="navItem">新品推荐</div>
        </div>
        <div class="navBox">
          <div class="navTitle">产品中心</div>
          <div class="navItem">新品推荐</div>
          <div class="navItem">新品推荐</div>
          <div class="navItem">新品推荐</div>
          <div class="navItem">新品推荐</div>
        </div>
      </div>
      <div class="btmTel">
        <div class="telItem">
          <p class="p1">大叔大婶</p>
          <p class="p2">124123dasda12</p>
        </div>
        <div class="telItem">
          <p class="p1">大叔大婶</p>
          <p class="p2">124123dasda12</p>
        </div>
        <div class="telItem">
          <p class="p1">大叔大婶</p>
          <p class="p2">124123dasda12</p>
          <p class="p3">salesagwpstools.com</p>
        </div>
      </div>
    </div>
  </div>
  <div class="footerBtm">
    <div class="container">
      <span>
        <span>Copyright © 2012-2022 All Rights Reserved 浙ICP备14032411号-1浙公网安备</span>
        <span> 网站建设：</span>
        <a href="" target="_blank" rel="noopener noreferrer">博采网络</a>
      </span>
      <span>
        <span>友情链接：</span>
        <a href="" target="_blank" rel="noopener noreferrer">手动工具产品</a>
        <a href="" target="_blank" rel="noopener noreferrer">关于我们</a>
        <a href="" target="_blank" rel="noopener noreferrer">展示中心</a>
        <a href="" target="_blank" rel="noopener noreferrer">中国五金制品协会</a>
      </span>
    </div>
  </div>
</footer>

<script>
  // window.scrollTo({ top: 0, behavior: 'smooth' })
  $(() => {
    $(document.body).on('click', function (e) {
      if ($(e.target).hasClass('popupClose'))
        $(e.target).closest('.popupWrap').removeClass('show')
    })
  })
</script>