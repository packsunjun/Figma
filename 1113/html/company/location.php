<?php include $_SERVER['DOCUMENT_ROOT'] . "/main/header.php"; ?>

<section class="heading-section section section-on-bg">
    <div class="hero-wrapper">
        <div class="hero-holder"></div>
        <div class="hero-mask-gradient"></div>
    </div><!--//hero-wrapper-->
    <div class="container heading-content">
        <h2 class="headline">COMPANY<br>비버텍소개</h2>
        <p class="tagline">PI/ISP 및 ERP/ITO/HRM구축 <br class="hidden-xs">전문컨설팅회사!</p>
    </div>
    <!--//container-->
</section><!--//heading-section-->
<div class="page-nav-space-holder hidden-xs">
    <div id="page-nav-wrapper" class="page-nav-wrapper text-center">
        <div class="container">
            <ul id="page-nav" class="page-nav nav list-inline">
                <li><a href="overview.html">OVERVIEW</a></li>
                <li><a href="vision.html">VISION</a></li>
                <li><a href="history.html">HISTORY</a></li>
                <li><a href="orga.html">ORGAINIZATION</a></li>
                <li><a href="ci.html">CI</a></li>
                <li class="active"><a href="location.html">LOCATION</a></li>
            </ul><!--//page-nav-->
        </div>
    </div><!--//page-nav-wrapper-->
</div><!--//page-nav-space-holder-->

<div class="feature-blocks container">
    <h2 class="block-heading text-center">로고타입 CI </h2>
    <div id="feature-block-1" class="feature-block feature-block-1">
        <!-- 컨텐츠 -->

        <div class="contents">
            <!-- 본사지도-->
            <div class="headline">
                <h2 class="heading-sm">본사</h2>
            </div>
            <div id="daumRoughmapContainer1451979006507" class="root_daum_roughmap root_daum_roughmap_landing"></div>
            <!-- 본사주소정보 -->
            <div class="tag-box tag-box-v3">
                <dl class="dl-horizontal">
                    <dt>주소</dt>
                    <dd>부산광역시 해운대구 센텀동로 99 (재송동, 벽산e센텀클래스원 1311호 ) </dd>
                    <dt>전화 </dt>
                    <dd>051-292-4880 </dd>
                    <dt>팩스 </dt>
                    <dd>051-292-4890 </dd>
                </dl>
            </div>
            <!--//본사주소정보// -->

            <!-- //본사지도//-->
            <div id="map" style="width:100%;height:350px;"></div>
            </script>
            <!-- 서울지도-->
            <div class="headline">
                <h2 class="heading-sm">서울사업소</h2>
            </div>
            <div id="daumRoughmapContainer1588149769132" class="root_daum_roughmap root_daum_roughmap_landing"></div>
            <div class="tag-box tag-box-v3">
                <dl class="dl-horizontal">
                    <dt>주소</dt>
                    <dd>서울특별시 구로구 디지털로29길 38, 201-엔97호(구로동, 에이스테크노타워3차) </dd>
                    <dt>전화 </dt>
                    <dd>02-868-8031 </dd>
                    <dt>팩스 </dt>
                    <dd>02-868-8032 </dd>
                </dl>
            </div>
            <!-- //서울지도//-->
            <div id="map2" style="width:100%;height:350px;"></div> 

            <!-- 창원지도-->
            <div class="headline">
                <h2 class="heading-sm">창원사업소</h2>
            </div>
            <div id="daumRoughmapContainer1451983505555" class="root_daum_roughmap root_daum_roughmap_landing"></div>
            <div class="tag-box tag-box-v3">
                <dl class="dl-horizontal">
                    <dt>주소</dt>
                    <dd>경남 창원시 성산구 완암로 50 (성산동, SK테크노파크 넥스동 814호 MoreBV) </dd>
                    <dt>전화 </dt>
                    <dd>055-607-0717 </dd>
                    <dt>팩스 </dt>
                    <dd>055-607-0718 </dd>
                </dl>
            </div>
            <!-- //창원지도//-->
            <div id="map3" style="width:100%;height:350px;"></div>

        </div>

        <!-- //컨텐츠// -->
    </div>
</div><!--//feature-blocks-->

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d94d8c0ac97269476ebaed4bf62f2a5b"></script>

<script>
    var marker1Position = new kakao.maps.LatLng(35.17611507119578, 129.12583022750744);
    var marker2Position = new kakao.maps.LatLng(37.48452097461033, 126.89331914885656);
    var marker3Position = new kakao.maps.LatLng(35.205599961022614, 128.66373338767585);

    var mapOptions = {
        center: marker1Position,
        level: 3
    };
    var map = new kakao.maps.Map(document.getElementById('map'), mapOptions);

    var marker1 = new kakao.maps.Marker({
        position: marker1Position,
        map: map
    });

    var mapOptions2 = {
        center: marker2Position,
        level: 3
    };
    var map2 = new kakao.maps.Map(document.getElementById('map2'), mapOptions2);

    var marker2 = new kakao.maps.Marker({
        position: marker2Position,
        map: map2
    });

    var mapOptions3 = {
        center: marker3Position,
        level: 3
    };
    var map3 = new kakao.maps.Map(document.getElementById('map3'), mapOptions3);

    var marker3 = new kakao.maps.Marker({
        position: marker3Position,
        map: map3
    });
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/main/footer.php"; ?>