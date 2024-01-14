<header>
  <div class="headerTop">
    <div class="container">
      <div class="container-left">
        <img class="lang" draggable="false" src="<?php echo static_file('web/img/i18n.webp') ?>" alt="">
        <span>中文CN</span>
        <span class="leftLine">/</span>
        <span>英文EN</span>
      </div>
      <div class="container-right">
        <img class="jd" draggable="false" src="<?php echo static_file('web/img/jd.webp') ?>" alt="">
        <span>京东官方商城</span>
        <span class="rightLine"></span>
        <img class="tm" draggable="false" src="<?php echo static_file('web/img/tm.webp') ?>" alt="">
        <span>天猫官方商城</span>
      </div>
    </div>
  </div>

  <div class="headerContent">
    <div class="container">
      <div class="container-left">
        <img class="logo" draggable="false" src="<?php echo static_file('web/img/logo.webp') ?>" alt="">
      </div>
      <div class="container-right">
        <div class="nav">
          <div class="navItem">
            <a href="<?php echo site_url('Home') ?>" class="navName">首页</a>
            <div class="activeLine"></div>
            <div class="navSel">
              <div class="container">
                <div class="navSelItem">
                  <div class="selTitle">品牌形象</div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                </div>
                <div class="navSelItem">
                  <div class="selTitle">品牌形象</div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                </div>
                <div class="navSelItem">
                  <div class="selTitle">品牌形象</div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                </div>
                <div class="navSelItem">
                  <div class="selTitle">品牌形象</div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                  <div class="selName">
                    <span>手册下载</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="navItem">
            <a href="<?php echo site_url('New_Products') ?>" class="navName">产品中心</a>
          </div>
          <div class="navItem">
            <a href="<?php echo site_url('About_US') ?>" class="navName">关于我们</a>
          </div>
          <div class="navItem">
            <a href="<?php echo site_url('Contact_Us') ?>" class="navName">品牌形象</a>
          </div>
        </div>
        <img class="search" draggable="false" src="<?php echo static_file('web/img/search.webp') ?>" alt="">
      </div>
    </div>
  </div>
</header>

<script>
  $.fn.useTable = function (options) {
    const settings = $.extend({
      // row / col
      type: 'row',
      columns: [],
      data: [],
      onClick: null
    }, options);

    const generateRowTable = () => {
      const tableHTML = `
        <table class="${settings.type}">
          <thead>
            <tr>
              ${settings.columns.map(column => `
                <th style="${typeof column.width == 'number' ? '--width: ' + column.width + 'px' : 'width: ' + column.width}; text-align: ${column.headerAlign || 'center'}">${column.label}</th>
              `).join('')}
            </tr>
          </thead>
          <tbody>
            ${settings.data.map(row => `
              <tr>
                ${settings.columns.map(column => `
                  <td class="table-cell" style="text-align: ${column.align || 'center'}" data-key="${column.key}">${row[column.key]}</td>
                `).join('')}
              </tr>
            `).join('')}
          </tbody>
        </table>
      `;

      return tableHTML;
    };

    const generateColTable = () => {
      const tableHTML = `
        <table class="${settings.type}">
          <tbody>
            ${settings.data.map(row => `
              <tr>
                <th>${row.label}</th>
                <td class="table-cell" data-key="${row.key}">${row.value}</td>
              </tr>
            `).join('')}
          </tbody>
        </table>
    `;

      return tableHTML;
    };

    const $tableContainer = $(this);
    $tableContainer.html(settings.type == 'col' ? generateColTable() : generateRowTable());

    $tableContainer.find('.table-cell').on('click', function () {
      const key = $(this).data('key');
      const rowIndex = $(this).parent().index();
      const rowData = settings.data[rowIndex];

      settings.onClick?.(key, rowData, rowIndex);
    });
  };
</script>