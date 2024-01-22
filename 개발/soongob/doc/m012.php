<?php
$cate_num = 1;
$page_num = 2;
$cate_tit = '순곱이네 스토리';
$page_tit = '체인사업부 찾아오시는길';
include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>

<div class="con_wrap">
    <h3>“이제 순곱이네가 대세”</h3>
    <p>
        순곱이네는 체인사업본부 찾아오시는길
    </p>
    <hr class="default_line icon">
    <div class="map_wrap">
            <!-- * 카카오맵 - 지도퍼가기 -->
            <!-- 1. 지도 노드 -->
            <div id="daumRoughmapContainer1705887473309" class="root_daum_roughmap root_daum_roughmap_landing __map"></div>

            <!--
                2. 설치 스크립트
                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
            -->
            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

            <!-- 3. 실행 스크립트 -->
            <script charset="UTF-8">
                new daum.roughmap.Lander({
                    "timestamp" : "1705887473309",
                    "key" : "2hrri",
                    //"mapWidth" : "640",
                    //"mapHeight" : "360"
                }).render();
            </script>
    </div>
    <div class="default_table_wrap">
    <table class="default_table">
        <caption class="blind">순곱이네 소개</caption>
        <colgroup>
            <col style="max-width: 180px;"/>
            <col style=""/>
        </colgroup>
        <tbody>
            <tr>
                <th>회사명</th>
                <td>(주)배포장프랜차이즈</td>
            </tr>
            <tr>
                <th>대표전화</th>
                <td>051-863-2266</td>
            </tr>
            <tr>
                <th>주소</th>
                <td>부산광역시 부산진구 연수로 18-1 서기빌딩 10층 전관</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>