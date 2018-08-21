<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="糕小姐国际烘焙课程<?php echo $name; ?>">
    <meta name="keywords" content="<?php echo $name; ?>,糕小姐国际烘焙课程">
    <!--<meta http-equiv="refresh" content="0;url=/nvasystem/index.php/courseview?id=8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $name; ?>_糕小姐国际烘焙</title>


    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <link rel="icon" type="image/png" href="https://cdn.lendata.net/gao/assets/i/favicon.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="https://cdn.lendata.net/gao/assets/i/app-icon72x72@2x.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $name; ?>"/>
    <link rel="apple-touch-icon-precomposed" href="https://cdn.lendata.net/gao/assets/i/app-icon72x72@2x.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="https://cdn.lendata.net/gao/assets/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#0e90d2">

    <link rel="stylesheet" href="https://cdn.lendata.net/gao/assets/css/amazeui.min.css">
    <!--<link rel="stylesheet" href="https://cdn.lendata.net/gao/assets/css/app.css">-->
    <link rel="stylesheet" href="http://h5.bmoon.cn/gao/app.css">
    <link rel="stylesheet" href="http://h5.bmoon.cn/gao/footer.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="http://h5.bmoon.cn/gao/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdn.lendata.net/gao/css/animate.css">
    <link rel="stylesheet" href="/html/course/new/course.css">
    <!--[if lte IE 9]>
    <meta http-equiv="Refresh" content="1; url=http://lendata.net/no-ie8.html"/>
    <![endif]-->
</head>
<body>

<header class="zx-nav-bar am-topbar-fixed-top">
    <div class="zx-header">
        <div class="zx-header-logo-box am-center">
            <div class="zx-header-logo-image am-fl"><img src="https://cdn.lendata.net/gao/webp/logo-1.png"></div>
            <div class="zx-header-phone-image am-fr am-hide-sm">
                <!--<img src="https://cdn.lendata.net/gao/webp/phone-1.png">-->
                <nav class="zx-nav-bar-box am-center am-hide-sm">
                    <ul class="am-avg-sm-6">
                        <li><a class="am-btn am-btn-danger am-round am-btn-xs am-center zx-nav-bar-btn" href="/">首页</a>
                        </li>
                        <li><a class="am-btn am-btn-danger am-round am-btn-xs am-center zx-nav-bar-btn"
                               href="/html/school">学院实景</a></li>
                        <li><a class="am-btn am-btn-danger am-round am-btn-xs am-center zx-nav-bar-btn"
                               href="/html/course">培训课程</a></li>
                        <li><a class="am-btn am-btn-danger am-round am-btn-xs am-center zx-nav-bar-btn"
                               href="/html/teacher">名师风采</a></li>
                        <li><a class="am-btn am-btn-danger am-round am-btn-xs am-center zx-nav-bar-btn"
                               href="/html/student">学员作品</a></li>
                        <li><a class="am-btn am-btn-danger am-round am-btn-xs am-center zx-nav-bar-btn"
                               href="/html/contact">联系我们</a></li>

                    </ul>
                </nav>
            </div>
            <div class="zx-nav-bar-m am-fr am-show-sm">
                <button class="am-btn zx-nav-bar-m-btn am-btn-success" data-am-offcanvas="{target: '#doc-oc-demo3'}">
                    <span class="am-icon-bars"></span></button>
            </div>
        </div>
    </div>
</header>
<div class="tpl-content-banner-box">
    <div class="am-center tpl-content-banner"><h1 class="tpl-content-banner-title"><?php echo $name; ?></h1>
        <!--<p class="tpl-content-banner-title-p">内容导读 : 原价8860，立减2680，最新优惠价6180 1.甜面团类：香柔面包、奶酪包、甜甜圈、大阪烧、匈牙利培根、紫菜三明治、肉松卷、葱花火腿面包、奶油餐包、玎可墨西哥、奶酥菠萝包、汉堡包...</p>-->
    </div>
</div>
<div class="am-center tpl-content-box">
    <nav class="tpl-nav">当前位置 : <a href="/">首页</a>-><a href="/html/course/">培训课程</a>-><span
                style="color:#888"><?php echo $name; ?></span></nav>
    <hr/>

    <!--主要内容-->
    <div class="tpl-content-body ">
        <img src="<?php echo $coursephoto; ?>" width="100%"><!--主图-->
        <div class="course-intro">
            <div class="am-g">
                <div class="am-u-sm-6">
                    <div class="course-intro-g" style="border-radius:0 25px 0 25px;background:#F95645">
                        0基础 0门槛<br>
                        <small>走进糕小姐，成就未来</small>
                    </div>
                </div>
                <div class="am-u-sm-6">
                    <div class="course-intro-g" style="border-radius:25px 0 25px 0;background:#89C997">
                        师资强大 设备完善<br>
                        <small>学技术遇到好老师很重要</small>
                    </div>
                </div>
            </div>
            <br>
            <div class="am-g">
                <div class="am-u-sm-6">
                    <div class="course-intro-g" style="border-radius:25px 0 25px 0;background:#13B5B1">
                        最优惠 最满意<br>
                        <small>全国各地学员都说好</small>
                    </div>
                </div>
                <div class="am-u-sm-6">
                    <div class="course-intro-g" style="border-radius:0 25px 0 25px;background:#313131">
                        开店创业 高薪就业<br>
                        <small>贴心支持 创业就业更可靠</small>
                    </div>
                </div>
            </div>
        </div><!--四方格--><!--
<h2 style="text-align:center;color:orange">课程内容</h2>
<div class="course-intro-p">
<p>	<span class="course-intro-span">C1.甜面团类</span> ：香柔面包、奶酪包、甜甜圈、大阪烧、匈牙利培根、紫菜三明治、肉松卷、葱花火腿面包、奶油餐包、玎可墨西哥、奶酥菠萝包、汉堡包</p>
</div>
<div class="course-intro-p">

<p><span class="course-intro-span">C2.吐司类</span>：全麦吐司、鲜奶吐司、北海道吐司、岩烧乳酪片、三明治、黑糖麻薯吐司、抹茶蜜豆吐司、水果盒吐司、法式吐司、炫心吐司</p>

</div>
<div class="course-intro-p">
<p><span class="course-intro-span">C3.意/美式披萨类</span> ：超薄披萨、脆底披萨、超软披萨</p>

</div>
<div class="course-intro-p">

<p><span class="course-intro-span">C4.丹麦类面包</span> ：原味牛角、双色牛角、火腿芝士牛角、巧克力牛角、水果丹麦、果酱丹麦、手撕面包；</p>

</div>
<div class="course-intro-p">

<p><span class="course-intro-span">C5.欧式面包</span> ：全麦高纤核果面包、抹茶红豆蜜语、阿尔萨斯黑麦啤酒包、列巴、培根芝士熔岩面包、可可麻薯</p>

</div>
<div class="course-intro-p">


<p><span class="course-intro-span">C6.德式咸水面包与总动贝果面包</span> ：巴伐利亚碱水包、蔓越莓贝果面包、贝果三明治；</p>

</div>
<div class="course-intro-p">

<p><span class="course-intro-span">C7.法式长棍</span> ：波兰酵种法棍、凯撒面包、蒜香法棍、法棍三明治</p>

</div>
<div class="course-intro-p">

<p><span class="course-intro-span">C8.圣诞布里欧修面团类</span> ：布里欧修吐司、朗姆辫子面包；</p>

</div>
<div class="course-intro-p">

<p><span class="course-intro-span">C9.其他</span> ：广式月饼、三色蛋黄酥、港式蛋挞、葡挞</p>
</div>
<div class="course-day">
<div class="course-day-title am-center">学习内容时间:共 7 天 9大内容组合</div>
<div class="am-g" style="font-size:1.3rem;margin-top:50px;text-align:center">
  <div class="am-u-sm-4">10课时</div>
  <div class="am-u-sm-2"><div class="course-day-content">D1</div></div>
  <div class="am-u-sm-6"><div class="course-day-content">甜面团类</div></div>
</div>
<div class="am-g" style="text-align:center">
  <div class="am-u-sm-4" style="visibility:hidden;">1</div>
  <div class="am-u-sm-2">|</div>
  <div class="am-u-sm-6" style="visibility:hidden;">1</div>
</div>
<div class="am-g" style="font-size:1.3rem;text-align:center">
  <div class="am-u-sm-4">10课时</div>
  <div class="am-u-sm-2"><div class="course-day-content">D2</div></div>
  <div class="am-u-sm-6"><div class="course-day-content">吐司类</div></div>
</div>

<div class="am-g" style="text-align:center">
  <div class="am-u-sm-4" style="visibility:hidden;">1</div>
  <div class="am-u-sm-2">|</div>
  <div class="am-u-sm-6" style="visibility:hidden;">1</div>
</div>
<div class="am-g" style="font-size:1.3rem;text-align:center">
  <div class="am-u-sm-4">10课时</div>
  <div class="am-u-sm-2"><div class="course-day-content">D3</div></div>
  <div class="am-u-sm-6"><div class="course-day-content">意/美式披萨类</div></div>
</div>

<div class="am-g" style="text-align:center">
  <div class="am-u-sm-4" style="visibility:hidden;">1</div>
  <div class="am-u-sm-2">|</div>
  <div class="am-u-sm-6" style="visibility:hidden;">1</div>
</div>
<div class="am-g" style="font-size:1.3rem;text-align:center">
  <div class="am-u-sm-4">10课时</div>
  <div class="am-u-sm-2"><div class="course-day-content">D4</div></div>
  <div class="am-u-sm-6"><div class="course-day-content">意/美式披萨类</div></div>
</div>

<div class="am-g" style="text-align:center">
  <div class="am-u-sm-4" style="visibility:hidden;">1</div>
  <div class="am-u-sm-2">|</div>
  <div class="am-u-sm-6" style="visibility:hidden;">1</div>
</div>
<div class="am-g" style="font-size:1.3rem;text-align:center">
  <div class="am-u-sm-4">10课时</div>
  <div class="am-u-sm-2"><div class="course-day-content">D5</div></div>
  <div class="am-u-sm-6"><div class="course-day-content">意/美式披萨类</div></div>
</div>

<div class="am-g" style="text-align:center">
  <div class="am-u-sm-4" style="visibility:hidden;">1</div>
  <div class="am-u-sm-2">|</div>
  <div class="am-u-sm-6" style="visibility:hidden;">1</div>
</div>
<div class="am-g" style="font-size:1.3rem;text-align:center">
  <div class="am-u-sm-4">10课时</div>
  <div class="am-u-sm-2"><div class="course-day-content">D6</div></div>
  <div class="am-u-sm-6"><div class="course-day-content">意/美式披萨类</div></div>
</div>

<div class="am-g" style="text-align:center">
  <div class="am-u-sm-4" style="visibility:hidden;">1</div>
  <div class="am-u-sm-2">|</div>
  <div class="am-u-sm-6" style="visibility:hidden;">1</div>
</div>
<div class="am-g" style="font-size:1.3rem;text-align:center">
  <div class="am-u-sm-4">10课时</div>
  <div class="am-u-sm-2"><div class="course-day-content">D7</div></div>
  <div class="am-u-sm-6"><div class="course-day-content">意/美式披萨类</div></div>
</div>




</div>-->
        <?php foreach ($photos_data as $rowb) {
            ?>
            <div class="small_content"><?php echo $rowb['content']; ?></div>
            <h2 style="text-align:center;color:orange;font-size:1.8rem"><?php echo $rowb['name']; ?></h2>

            <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}'>
                <ul class="am-slides">
                    <?php $zxdata = $rowb['url_data'];
                    foreach ($zxdata as $rowc) {
                        ?>
                        <li>
                            <img src="<?php echo $rowc; ?>">

                        </li>
                    <?php } ?>

                </ul>
            </div>

        <?php } ?>

        <br>
        <div class="photos" id="photos" style="display:none">
            <p><img src="/uploads/allimg/20170927/1506514438500929.jpg" title="1506514438500929.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514438860515.jpg" title="1506514438860515.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514439833408.jpg" title="1506514439833408.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514439232354.jpg" title="1506514439232354.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514440587020.jpg" title="1506514440587020.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514440938296.jpg" title="1506514440938296.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514441511762.jpg" title="1506514441511762.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514441261760.jpg" title="1506514441261760.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514441226843.jpg" title="1506514441226843.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514442320875.jpg" title="1506514442320875.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514442623912.jpg" title="1506514442623912.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514444848372.jpg" title="1506514444848372.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514444368850.jpg" title="1506514444368850.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514444934045.jpg" title="1506514444934045.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514446734531.jpg" title="1506514446734531.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514446179001.jpg" title="1506514446179001.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514447616778.jpg" title="1506514447616778.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514448969861.jpg" title="1506514448969861.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514448256863.jpg" title="1506514448256863.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514449877217.jpg" title="1506514449877217.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514449967391.jpg" title="1506514449967391.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514451885489.jpg" title="1506514451885489.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514451289983.jpg" title="1506514451289983.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514451599826.jpg" title="1506514451599826.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514451721063.jpg" title="1506514451721063.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514451328195.jpg" title="1506514451328195.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514452965442.jpg" title="1506514452965442.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514453860785.jpg" title="1506514453860785.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514453796060.jpg" title="1506514453796060.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514453334615.jpg" title="1506514453334615.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514453287854.jpg" title="1506514453287854.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514453534894.jpg" title="1506514453534894.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514454246610.jpg" title="1506514454246610.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514454465569.jpg" title="1506514454465569.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514454530585.jpg" title="1506514454530585.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514454175599.jpg" title="1506514454175599.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514454820779.jpg" title="1506514454820779.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514455485333.jpg" title="1506514455485333.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514455870275.jpg" title="1506514455870275.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514455786566.jpg" title="1506514455786566.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514455200545.jpg" title="1506514455200545.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514455342409.jpg" title="1506514455342409.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514456619246.jpg" title="1506514456619246.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514456411516.jpg" title="1506514456411516.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514456419206.jpg" title="1506514456419206.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514457482980.jpg" title="1506514457482980.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514457667385.jpg" title="1506514457667385.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514457289057.jpg" title="1506514457289057.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514457676704.jpg" title="1506514457676704.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514458744750.jpg" title="1506514458744750.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514458102501.jpg" title="1506514458102501.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514458927726.jpg" title="1506514458927726.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514459819747.jpg" title="1506514459819747.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514459117844.jpg" title="1506514459117844.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514459111935.jpg" title="1506514459111935.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514460349554.jpg" title="1506514460349554.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514461355866.jpg" title="1506514461355866.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514462918628.jpg" title="1506514462918628.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514462321276.jpg" title="1506514462321276.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514463607989.jpg" title="1506514463607989.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514464619587.jpg" title="1506514464619587.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514464674670.jpg" title="1506514464674670.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514465989893.jpg" title="1506514465989893.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514465611696.jpg" title="1506514465611696.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514466572186.jpg" title="1506514466572186.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514466525906.jpg" title="1506514466525906.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514466799724.jpg" title="1506514466799724.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514466599448.jpg" title="1506514466599448.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514467866028.jpg" title="1506514467866028.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514468884744.jpg" title="1506514468884744.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514468319619.jpg" title="1506514468319619.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514470667131.jpg" title="1506514470667131.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514471810091.jpg" title="1506514471810091.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514472779818.jpg" title="1506514472779818.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514472591934.jpg" title="1506514472591934.jpg"/></p>
            <p><img src="/uploads/allimg/20170927/1506514474130793.jpg" title="1506514474130793.jpg"/></p>
            <p>
        </div>


        <div class="am-center" style="margin-top:50px;margin-bottom:30px;width:210px">
            <button type="button" class="am-btn am-btn-success am-btn-goto1" onclick="goto(1)">上课现场</button>
            <button type="button" class="am-btn am-btn-warning am-btn-goto2" onclick="goto(2)">马上咨询</button>
        </div>

        <div class="new_content"><?php echo $content; ?></div>
        <a href="http://z1-pcok6.kuaishangkf.com/bs/im.htm?cas=116885___253445&fi=119315"><img
                    src="https://cdn.lendata.net/gao/webp/content-banner-pc.png" class="am-hide-sm" width="100%">
            <img src="https://cdn.lendata.net/gao/webp/content-banner-m.png" class="am-show-sm" width="100%"></a></div>


    <div class="tpl-content-nav-box">
        <div class="tpl-content-nav-title">其它培训课程</div>
        <hr/>
        <div class="tpl-nav-detail-box">
            <img src='/uploads/170927/3-1F92G11104U7.jpg' class="tpl-nav-img" alt='综合开店创业班'/>
            <div class="tpl-nav-link"><a href="/nvasystem/index.php/courseview?id=12">综合开店创业班</a></div>
            <div class="am-cf"></div>
        </div>
        <div class="tpl-nav-detail-box">
            <img src='/uploads/170927/3-1F92G11454333.jpg' class="tpl-nav-img" alt='高级翻糖班'/>
            <div class="tpl-nav-link"><a href="/nvasystem/index.php/courseview?id=14">高级翻糖班</a></div>
            <div class="am-cf"></div>
        </div>
        <div class="tpl-nav-detail-box">
            <img src='/uploads/170927/3-1F92G12424560.jpg' class="tpl-nav-img" alt='私房蛋糕精品班'/>
            <div class="tpl-nav-link"><a href="/nvasystem/index.php/courseview?id=10">私房蛋糕精品班</a></div>
            <div class="am-cf"></div>
        </div>
        <div class="tpl-nav-detail-box">
            <img src='/uploads/170927/3-1F92G05311605.jpg' class="tpl-nav-img" alt='艺术蛋糕速成班'/>
            <div class="tpl-nav-link"><a href="/nvasystem/index.php/courseview?id=9">艺术蛋糕速成班</a></div>
            <div class="am-cf"></div>
        </div>
        <div class="tpl-nav-detail-box">
            <img src='/uploads/170927/3-1F92G1091G13.jpg' class="tpl-nav-img" alt='烘焙创业精品班'/>
            <div class="tpl-nav-link"><a href="/nvasystem/index.php/courseview?id=11">烘焙创业精品班</a></div>
            <div class="am-cf"></div>
        </div>
        <div class="tpl-nav-detail-box">
            <img src='/uploads/170927/3-1F92G1194Q56.jpg' class="tpl-nav-img" alt='高级欧式面包班'/>
            <div class="tpl-nav-link"><a href="/nvasystem/index.php/courseview?id=16">高级欧式面包班</a></div>
            <div class="am-cf"></div>
        </div>
        <div class="tpl-nav-detail-box">
            <img src='/uploads/170917/3-1F91GP244K9.jpg' class="tpl-nav-img" alt='网红喜茶修炼班'/>
            <div class="tpl-nav-link"><a href="/nvasystem/index.php/courseview?id=17">网红喜茶修炼班</a></div>
            <div class="am-cf"></div>
        </div>
        <div class="tpl-nav-detail-box">
            <img src='/uploads/170927/3-1F92G11621145.jpg' class="tpl-nav-img" alt='高级韩式裱花班'/>
            <div class="tpl-nav-link"><a href="/nvasystem/index.php/courseview?id=15">高级韩式裱花班</a></div>
            <div class="am-cf"></div>
        </div>
        <div class="tpl-nav-detail-box">
            <img src='/uploads/170927/3-1F92G11311G5.jpg' class="tpl-nav-img" alt='法式西点精品班'/>
            <div class="tpl-nav-link"><a href="/nvasystem/index.php/courseview?id=13">法式西点精品班</a></div>
            <div class="am-cf"></div>
        </div>
        <div class="tpl-nav-detail-box">
            <img src='/uploads/170927/3-1F92G05552Y0.jpg' class="tpl-nav-img" alt='高级烘焙面包班'/>
            <div class="tpl-nav-link"><a href="/nvasystem/index.php/courseview?id=8">高级烘焙面包班</a></div>
            <div class="am-cf"></div>
        </div>

    </div>
</div>
<div class="am-cf"></div>
<div class="wave-box">

    <div class="marquee-box marquee-up" id="marquee-box">
        <div class="marquee">
            <div class="wave-list-box" id="wave-list-box1">
                <ul>
                    <li><img height="60" alt="波浪" src="http://h5.bmoon.cn/gao/footer/wave_02.png"></li>
                </ul>
            </div>
            <div class="wave-list-box" id="wave-list-box2">
                <ul>
                    <li><img height="60" alt="波浪" src="http://h5.bmoon.cn/gao/footer/wave_02.png"></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="marquee-box" id="marquee-box3">
        <div class="marquee">
            <div class="wave-list-box" id="wave-list-box4">
                <ul>
                    <li><img height="60" alt="波浪" src="http://h5.bmoon.cn/gao/footer/wave_01.png"></li>
                </ul>
            </div>
            <div class="wave-list-box" id="wave-list-box5">
                <ul>
                    <li><img height="60" alt="波浪" src="http://h5.bmoon.cn/gao/footer/wave_01.png"></li>
                </ul>
            </div>
        </div>
    </div>

</div>
<footer class="zx-footer">
    <div class="zx-footer-box am-center">
        <div class="zx-footer-logo"><img src="https://cdn.lendata.net/gao/webp/logo-1.png"></div>
        <div class="zx-footer-phone"><img src="https://cdn.lendata.net/gao/webp/phone-1.png"></div>
        <div class="am-cf"></div>
        <div class="zx-footer-intro-box">
            <div class="zx-footer-intro-title"><p>糕小姐国际烘焙，就业创业的首选之地</p></div>
            <div class="zx-footer-intro-title" style='font-size:1.5rem;margin-top:20px;'>
                <p>学院地址：福州市仓山区冠浦路140号凤高综合大楼3F<br>全国报名热线：4008-505-969<br>闽ICP备16032112号-1<br>福州糕小姐商贸有限公司</p>
                <p>Copyright© 版权所有 福州糕小姐商贸有限公司<br>技术支持：唐月文化</p>
            </div>
        </div>
        <div class="zx-footer-qr-box am-hide-sm"><img src="https://cdn.lendata.net/gao/webp/qr-code.png"></div>
    </div>
    <div class="am-cf"></div>
</footer>
<!-- <footer class="zx-footer">
    <div class="zx-footer-box am-center">
        <div class="zx-footer-logo"><img src="https://cdn.lendata.net/gao/webp/logo-1.png"></div>
        <div class="zx-footer-phone"><img src="https://cdn.lendata.net/gao/webp/phone-1.png"></div>
        <div class="am-cf"></div>
        <div class="zx-footer-intro-box">
            <div class="zx-footer-intro-title"><p>糕小姐国际烘焙，就业创业的首选之地</p></div>
            <div class="zx-footer-intro-p"><p>学院地址：福州市仓山区冠浦路140号凤高综合大楼3F</p>
                <p>全国报名热线：4008-505-969</p>
                <p>闽ICP备16032112号-1</p>
                <p>Copyright© 版权所有 福州糕小姐商贸有限公司</p></div>
        </div>
        <div class="zx-footer-qr-box am-hide-sm"><img src="https://cdn.lendata.net/gao/webp/qr-code.png"></div>
    </div>
    <div class="am-cf"></div>
</footer> -->
<!-- 侧边栏内容 -->
<div id="doc-oc-demo3" class="am-offcanvas">
    <div class="am-offcanvas-bar am-offcanvas-bar-flip">
        <div class="am-offcanvas-content">
            <br>
            <img src="https://cdn.lendata.net/gao/webp/phone-1.png" width="100%">
            <br><br>
            <ul class="am-menu-nav am-avg-sm-1">


                <li><a class="" href="/">网站首页</a></li>
                <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
                <li><a class="" href="/html/school">学院实景</a></li>
                <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
                <li><a class="" href="/html/course">培训课程</a></li>
                <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
                <li><a class="" href="/html/teacher">名师风采</a></li>
                <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
                <li><a class="" href="/html/student">学员作品</a></li>
                <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
                <li><a class="" href="/html/contact">联系我们</a></li>
                <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
            </ul>
            <br>
            <img src="https://cdn.lendata.net/gao/webp/qr-code.png" width="150px;" class="am-fr">
        </div>
    </div>
</div>
<!--在这里编写你的代码-->
<div class="c_meau am-hide-sm">
    <div class="fl">
        <h4>关注&amp;咨询<br>
            糕小姐国际烘焙</h4>
        <div class="fl_o">
            <!-- <dl class="fl_o_o">
              <dt> <a href="http://wpa.qq.com/msgrd?v=3&uin=921188899&site=qq&menu=yes" target="_blank"> <img src="https://cdn.lendata.net/gao/xuanfu/images/c_meau_1.png"></a></dt>
              <dd>QQ在线客服1</dd>
            </dl>
            <dl class="fl_o_o">
              <dt> <a href="http://wpa.qq.com/msgrd?v=3&uin=925977957&site=qq&menu=yes" target="_blank"> <img src="https://cdn.lendata.net/gao/xuanfu/images/c_meau_1.png"></a></dt>
              <dd>QQ在线客服2</dd>
            </dl>
            <dl class="fl_o_o">
              <dt> <a href="/" target="_blank"> <img src="https://cdn.lendata.net/gao/xuanfu/images/c_meau_1.png"></a></dt>
              <dd>QQ在线客服3</dd>
            </dl> -->
            <dl class="fl_o_o">
                <dt><a href="/" target="_blank"> <img src="https://cdn.lendata.net/gao/xuanfu/images/c_meau_2.png"> </a>
                </dt>
                <dd>新浪微博</dd>
            </dl>
            <dl class="fl_o_o">
                <dt><img src="https://cdn.lendata.net/gao/xuanfu/images/c_meau_3.png"></dt>
                <dd>微信咨询</dd>
            </dl>

        </div>
        <img src="https://cdn.lendata.net/gao/xuanfu/images/c_meau_7.png" style="margin-top:-15px"></div>
    <div class="fr">
        <div class="fr_o"><img src="https://cdn.lendata.net/gao/xuanfu/images/c_meau_5.png"></div>
        <div class="fr_t"><img src="https://cdn.lendata.net/gao/xuanfu/images/c_meau_6.png"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="xuanfu-left-box am-hide-sm"><img class="animated pulse infinite"
                                             src="https://cdn.lendata.net/gao/webp/free-ad.png" width="100%"
                                             style="margin-bottom:10px;">
    <div class="xuanfu-left-nav">
        <ul class="am-list">
            </li>
            <li ><a href="/nvasystem/index.php/courseview?id=11">烘焙创业精品班</a></li>
            <li><a href="/nvasystem/index.php/courseview?id=18">流行甜品班</a></li>
            <li><a href="/nvasystem/index.php/courseview?id=14">高级翻糖班</a></li>
            <li><a href="/nvasystem/index.php/courseview?id=16">高级软欧班</a></li>
            <li><a href="/nvasystem/index.php/courseview?id=9">艺术蛋糕班</a></li>
            <li><a href="/nvasystem/index.php/courseview?id=15">韩式自然花系班</a></li>
                        <li><a href="/nvasystem/index.php/courseview?id=12">综合开店创业班</a></li>
                        <li><a href="/nvasystem/index.php/courseview?id=10">私房蛋糕精品班</a></li>
            <li><a href="/nvasystem/index.php/courseview?id=13">法式西点班</a></li>
            <li><a href="/nvasystem/index.php/courseview?id=17">时尚水吧饮品班</a></li>
            <li><a href="/nvasystem/index.php/courseview?id=41">星空巧克力班</a></li>
            <li><a href="/nvasystem/index.php/courseview?id=8">高级烘焙面包班</a></li>
        </ul>
    </div>
</div>
<div data-am-widget="navbar" class="am-navbar zx-navbar-bottom-copy am-cf am-navbar-default am-show-sm"
     id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4"
        style="background:url(https://cdn.lendata.net/gao/webp/0321-1.png);background-size:1500px;">
        <li>
            <a href="tel:4008505969" class="" style='color: #c8a063;'>
                <span class="am-icon-phone-square"></span>
                <span class="am-navbar-label">免费电话</span>
            </a>
        </li>

        <li>
            <a href="/html/course/" class="" style='color: #c8a063;'>
                <span class="am-icon-graduation-cap"></span>
                <span class="am-navbar-label">课程安排</span>
            </a>
        </li>
        <li>
            <a href="/" class="" style='color: #c8a063;'>
                <img style="height: 75px;width: 55px;padding-bottom: 20px" src="https://cdn.lendata.net/gao/xuanfu/images/header.png">
            </a>
        </li>
        <li>
            <a href="/html/video/" class="" style='color: #c8a063;'>
                <span class="am-icon-play-circle"></span>
                <span class="am-navbar-label">免费视频</span>
            </a>
        </li>
        <li>
            <a href="/html/contact/" class="" style='color: #c8a063;'>
                <span class="am-icon-info"></span>
                <span class="am-navbar-label">关于我们</span>
            </a>
        </li>

    </ul>
</div>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="https://cdn.bmoon.cn/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="https://cdn.lendata.net/gao/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="https://cdn.lendata.net/gao/assets/js/amazeui.min.js"></script>
<script src="http://h5.bmoon.cn/gao/footer.js"></script>
<script src="/html/course/new/course.js"></script>
<!-- Swiper JS -->
<script src="http://h5.bmoon.cn/gao/swiper/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,


    });
</script>
<script type="text/javascript">
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $(".c_meau").stop().show().animate({bottom: '100px'}, 300);
        }
        else {
            $(".c_meau").stop().animate({bottom: '-560px'}, 300);
        }
    });
    $('.c_meau .fr_t').click(function () {
        $('body,html').animate({scrollTop: 0}, 500);
        $(".c_meau").animate({bottom: '-380px', opacity: '0'}, 500);
        return false;
    });
</script>
<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?d427aa9cf8f44c41e9f46da6bcb032fa";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<script type="text/javascript" src="http://z1-pcok6.kuaishangkf.com/bs/ks.j?cI=253445&fI=119315"
        charset="utf-8"></script>
<script>
    function show() {
        document.getElementById("photos").style.display = 'block';
        document.getElementById("show").style.display = 'none';
    }
</script>
</body>
</html>
