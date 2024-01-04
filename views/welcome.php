<!DOCTYPE html>
<html>

<head>
    <?php include_once VIEWPATH . 'inc/head.php'; ?>
    <style type="text/css">


    </style>

</head>
<!-- 禁用右键: -->
<!-- <script>
function stop(){return false;}
document.oncontextmenu=stop;
</script> -->
<?php include_once VIEWPATH . 'inc/header.php'; ?>

<body>
   

    <?php include_once VIEWPATH . 'inc/footer.php'; ?>

    <?php
    echo static_file('web/js/main.js');
    echo static_file('web/js/swiper/swiper.min.css');
    echo static_file('web/js/swiper/swiper.min.js');
    ?>
    <script>
        $(function() {

        })
    </script>
</body>

</html>