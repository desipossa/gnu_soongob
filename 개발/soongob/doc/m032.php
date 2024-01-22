<?php
$cate_num = 3;
$page_num = 21;
$cate_tit = '순곱이네 창업';
$page_tit = '순곱이네 창업의 절차';
include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>

<div class="con_wrap">
    <h3>“순곱이네 창업의 절차”</h3>
    <p>
        기술 및 경영노하우 전수, 조리교육, 서빙, 접객방법, 서비스 마인드교육, 경영 및 조리연수
    </p>
    <hr class="default_line icon">
    <div class="pocess_wrap">
            <div class="itm on" data-num="01">
                <strong>매장 방문</strong>
                <p>
                순곱이네 인근매장을 방문하셔서
                음식도 드셔보시고 매장 인테리어와 분위기도 살펴보세요.
                </p>
            </div>
            <div class="itm" data-num="02">
                <strong>실무자 상담</strong>
                <p>
                본사 실무자와 전화 및 미팅을 통해, 창업비용, 상권, 순곱이네 프랜차이즈에 대하여 알아봅니다.
                <br/>(정보공개서 제공)
                </p>
            </div>
            <div class="itm" data-num="03">
                <strong>점포 선정</strong>
                <p>
                본사 실무자와 긴밀히 협조하여, 가장 적합한 상권의 점포를 선정합니다.
                </p>
            </div>
            <div class="itm" data-num="04">
                <strong>순곱이네 계약 체결</strong>
                <p>
                정식으로 순곱이네 가맹 계약을 체결합니다. 계약서, 창업 예상비용 등을 확인합니다.
                </p>
            </div>
            <div class="itm" data-num="05">
                <strong>인테리어 미팅</strong>
                <p>
                매장이 결정되면 매장 실측도면과
                인테리어 견적으로 점주님과 본사 실무자가 미팅을 합니다.
                </p>
            </div>
            <div class="itm" data-num="06">
                <strong>인테리어 공사</strong>
                <p>
                본사 실무자의 감리하에,
                내외부 공사를 진행합니다.
                </p>
            </div>
            <div class="itm" data-num="07">
                <strong>교육 진행</strong>
                <p>
                교육은 10일 이상이며, 점주님 포함하여
                2인이 교육을 받으실 수 있습니다.
                </p>
            </div>
            <div class="itm" data-num="08">
                <strong>가오픈</strong>
                <p>
                담당 실무자 2명이
                파견되어 2일 동안 현장에서 오픈준비,
                재교육 및 오픈을 진행 합니다.
                </p>
            </div>
            <div class="itm" data-num="09">
                <strong>그랜드 오픈식</strong>
                <p>
                철저하게 준비하여
                실제로 가게를 오픈 운영합니다.
                </p>
            </div>
    </div>
    <hr class="default_line icon">
    <h3>“경제적인 창업비용”</h3>
    <p>
    타 프랜차이즈 대비 현격하게 차이 나는 합리적인 창업비용으로 가맹점주님과 함께 성장하겠습니다.
    </p>
    <div class="default_table_wrap">
    <table class="default_table">
        <caption class="blind">순곱이네 창업비용” </caption>
        <colgroup>
            <col style="max-width: 180px;"/>
            <col style=""/>
        </colgroup>
        <tbody>
            <tr>
                <th>가맹비</th>
                <td>
                    <p>
                    가맹비 500만원 (부가세별도)<br/>
                    교육비 500만원 (부가세별도)<br/>
                    물품보증금 200만원 (가맹해지시 반환)
                    </p>
                </td>
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

<script>
    $(function(){
        let num = 0;
        function numCreate() {        
            $('#subPage .pocess_wrap .itm').eq(num).addClass('on')
            .siblings().removeClass('on');
            num = num + 1;
            if(num > 8 ) {
                num = 0;
            }
        }
        setInterval(numCreate, 4000);
    })
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>