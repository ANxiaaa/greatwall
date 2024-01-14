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

    const paginationBox = $("#pagination")
    if (paginationBox[0]) {
      const totalPages = paginationBox.data("totalPages") || 20;
      const visiblePages = 7;
      const currentSearchParams = new URLSearchParams(window.location.search);
      currentSearchParams.delete('page');
      const urlParams = new URLSearchParams(window.location.search);
      const currentPage = urlParams.get('page') || 1
      const bugou = totalPages <= visiblePages
      const startPage = bugou ? 1 : Math.max(1, currentPage - Math.floor(visiblePages / 2));
      const endPage = bugou ? totalPages : Math.min(totalPages, startPage + visiblePages - 1);

      const html = `
          ${currentPage > 1 && startPage > 1 ? `<div class="myPaginationBtn">
              <a href="?page=${currentPage - 1}&${currentSearchParams.toString()}">&laquo;</a>
          </div>` : ''}
          ${startPage > 1 && startPage > 2 ? `<div class="ellipsis myPaginationBtn">
              <a href="?page=${startPage - 5}&${currentSearchParams.toString()}">...</a>
          </div>` : ''}
          ${Array.from({ length: bugou ? totalPages : endPage - startPage + 1 }, (_, index) => startPage + index)
          .map(page => `<div class="myPaginationBtn">
              <a class="${page == currentPage ? 'active' : ''}" href="?page=${page}&${currentSearchParams.toString()}">${page}</a>
          </div>`).join('')}
          ${endPage < totalPages && endPage < totalPages - 1 ? `<div class="ellipsis myPaginationBtn">
              <a href="?page=${endPage + 1}&${currentSearchParams.toString()}">...</a>
          </div>` : ''}
          ${currentPage < totalPages && endPage < totalPages ? `<div class="myPaginationBtn">
              <a href="?page=${currentPage + 1}&${currentSearchParams.toString()}">&raquo;</a>
          </div>` : ''}`;

      paginationBox.html(html);
    }
    // ---
    $('form').on('submit', function (e) {
      e.preventDefault()
    })
    $('.selectBox').each(function () {
      const selectContainer = $(this);
      const selectInput = selectContainer.find('.selectInput');
      const selectOptions = selectContainer.find('.selectOptions');

      selectInput.click(function (e) {
        e.stopPropagation();
        $('.selectBox .selectOptions').not(selectOptions).hide();
        selectOptions.toggle();
      });

      selectContainer.on('click', '.selectOption', function () {
        const optionValue = $(this).data('value') || $(this).text();
        if (selectInput.val() !== optionValue) {
          selectInput.prev().text($(this).text());
          selectInput.val(optionValue).trigger('change');
        }
        selectOptions.hide();
      });

      $(document).on('click', function (event) {
        if (!selectContainer.is(event.target) && !selectOptions.is(event.target) && selectOptions.has(event.target).length === 0) {
          selectOptions.hide();
        }
      });
    });
  })
</script>