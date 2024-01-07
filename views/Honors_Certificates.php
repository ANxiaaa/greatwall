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

    <div class="honorsCertificates">
        <div class="swiper-container" id="aboutUsBanner">
            <div class="swiper-wrapper" id="aboutUsBanner-wrapper"></div>
        </div>

        <div class="aboutUsTab">
            <div class="container">
                <div class="tabItem bd">
                    <a href="<?php echo site_url('About_US') ?>" class="navName">长城精工</a>
                </div>
                <div class="tabItem bd">
                    <a href="<?php echo site_url('News') ?>" class="navName">新闻动态</a>
                </div>
                <div class="tabItem active">
                    <a href="<?php echo site_url('Honors_Certificates') ?>" class="navName">荣誉认证</a>
                </div>
                <div class="tabItem">
                    <a href="<?php echo site_url('Branding') ?>" class="navName">品牌形象</a>
                </div>
            </div>
        </div>

        <div class="board">
            <div class="swiper-container" id="boardUsBanner">
                <div class="swiper-wrapper" id="boardUsBanner-wrapper"></div>
            </div>
            <div class="swiper-button-next">
                <img draggable="false" src="<?php echo static_file('web/img/homeBannerRight.webp') ?>" alt="">
            </div>
            <div class="swiper-button-prev">
                <img draggable="false" src="<?php echo static_file('web/img/homeBannerLeft.webp') ?>" alt="">
            </div>
        </div>

        <div class="certificate">
            <div class="container">
                <div class="certificateTab" id="certificateTab">
                    <div class="certificateTabItem active" data-index="0">公司荣誉</div>
                    <div class="certificateTabItem" data-index="1">专业认证</div>
                </div>
                <div class="certificateTabContent">
                    <div class="certificateWrap show" id="certificateWrap1"></div>
                    <div class="certificateWrap" id="certificateWrap2"></div>
                </div>
            </div>

            <div class="certificatePopup">

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

        const openCertificatePopup = (index, id) => {
            console.log(index, id);
        }
        $(function () {
            // ----
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
            // ----
            fetchData().then(data => {
                const swiperWrapper = $("#boardUsBanner-wrapper");
                const dom = data.map(item => {
                    return `<div class='swiper-slide'>
                        <div class="boardNameBox">
                            <p class="p1"><span>公司荣誉</span></p>
                            <p class="boardName">专精特新 小巨人 企业</p>
                            <p class="p3">“长城精工”品牌荣获2015年度“天工奖·万贯杯”全工具五金品牌万里行</p>
                        </div>
                        <img class="bannerImg" draggable="false" src="/greatwall/bocweb/web/img/banner${item.name}.png" alt="" />
                    </div>`
                })
                swiperWrapper.html(dom)
                const mySwiper = new Swiper('#boardUsBanner', {
                    loop: true,
                    slidesPerView: 3, centeredSlides: true,
                    prevButton: '.board .swiper-button-prev',
                    nextButton: '.board .swiper-button-next',
                    observer: true,
                    observeParents: true,
                    slideToClickedSlide: true,
                });
            });
            // ----
            const certificateTabs = $('#certificateTab .certificateTabItem')
            const certificateContents = $('.certificateTabContent .certificateWrap')
            certificateTabs.on('click', function () {
                certificateTabs.removeClass('active')
                certificateContents.removeClass('show')
                $(this).addClass('active')
                certificateContents.eq($(this).attr('data-index')).addClass('show')
            })
            fetchData().then(data => {
                const wrap1 = $('#certificateWrap1')
                const wrap2 = $('#certificateWrap2')
                const dom1 = new Array(12).fill(1).map(item => {
                    return `<div class="certificateItem" onclick="openCertificatePopup(1, 555)">
                        <img class="bannerImg" draggable="false"
                            src="/greatwall/bocweb/web/img/banner2.png" alt="" />
                        <div class="certificateNameBox">
                            <div class="certificateName">
                                <p>2019-2022年</p>
                                <p>质量管理体系认证证书</p>
                            </div>
                        </div>
                    </div>`
                })
                const dom2 = new Array(12).fill(1).map(item => {
                    return `<div class="certificateItem" onclick="openCertificatePopup(2, 666)">
                        <img class="bannerImg" draggable="false"
                            src="/greatwall/bocweb/web/img/banner3.png" alt="" />
                        <div class="certificateNameBox">
                            <div class="certificateName">
                                <p>2019-2022年</p>
                                <p>质量管理体系认证证书</p>
                            </div>
                        </div>
                    </div>`
                })
                wrap1.html(dom1)
                wrap2.html(dom2)
            });
        })
    </script>
</body>

</html>