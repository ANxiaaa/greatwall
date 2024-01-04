<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="zh-CN" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="博采网络-高端网站建设-https://www.bocweb.cn" />
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<title>长城精工</title>
<link href="<?php echo GLOBAL_URL ?>favicon.ico" rel="shortcut icon">
<script>
    var STATIC_URL = "<?php echo STATIC_URL ?>";
    var GLOBAL_URL = "<?php echo GLOBAL_URL ?>";
    var UPLOAD_URL = "<?php echo UPLOAD_URL ?>";
    var SITE_URL   = "<?php echo SITE_url() ?>";
</script>
<?php
    echo static_file('jquery-3.5.1.min.js');
    echo static_file('web/css/hamburgers.css');
    echo static_file('web/css/video.css');
    echo static_file('web/css/bootstrap.css');
    echo static_file('web/css/boc_reset.css');
    echo static_file('web/css/hover.css');
    echo static_file('web/css/bocami.css');
    echo static_file('web/css/mob.css');

    echo static_file('jquery.easing.1.3.js'); //动画过度效果
    echo static_file('jquery.transit.js'); //css3,JQ调用 看js
    echo static_file('html5.js');//IE（包括IE6）支持HTML5元素方法
    echo static_file('prefixfree.min.js');//CSS3无前缀脚本
    echo static_file('new_bocfe.js');
?>