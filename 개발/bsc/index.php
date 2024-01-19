<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
        <main id="content">
            <section class="main_visual">
                <h2 class="blind">메인콘텐츠</h2>
                <div class="main_visual_slide">
                    <div class="itm">
                        <strong>아파트입주청소<small class="lavel"><i>HOT</i></small></strong>
                        <span>신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소</span>
                        <p>신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소를 말하며
                            보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                            구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.</p>
                    </div>
                    <div class="itm">
                        <strong>이사/상가청소</strong>
                        <span>오랫동안 누적된 공간의 묵은 때, 찌든 때, 누적된 먼지와 세균들을 이사하기전에 청소</span>
                        <p>신축 건물은 공사기간 중 쌓인 미세먼지/유해성분들이 곳곳에 산재해 있습니다.
                            입추청소를 맡기시면 유해성분 제거하고 청결한 환경을 만드실 수 있습니다.</p>
                    </div>
                    <div class="itm">
                        <strong>사무실청소</strong>
                        <span>쾌적한 업무 환경을 만들고, 능률적인 업무를 수행하기 위해 반드시 필요한 청소</span>
                        <p>쾌적한 업무 환경을 만들고, 능률적인 업무를 수행하기 위해 반드시 필요한 청소 작업 입니다.
                            사무실청소에 있어서 가장 중요한 점은 빠른 시간 내에 완벽한 작업을 마무리 하는 것이 중요합니다.</p>
                    </div>
                </div>
                <div class="slogan_banner">
                    <img src="<?=G5_THEME_URL;?>/images/slogan.png" alt="<?=$TIT;?>">
                </div>
            </section>
            <section class="main_banner">
                <h2 class="blind">메인콘텐츠베너</h2>
                <div class="inner banner_box">
                    <a href="">
                        <div class="icon_box">
                            <span class="blind">icon</span>
                        </div>
                        <strong>깔끄미소개</strong>
                    </a>
                    <a href="">
                        <div class="icon_box">
                            <span class="blind">icon</span>
                        </div>
                        <strong>아파트청소</strong>
                    </a>
                    <a href="">
                        <div class="icon_box">
                            <span class="blind">icon</span>
                        </div>
                        <strong>사무실청소</strong>
                    </a>
                    <a href="">
                        <div class="icon_box">
                            <span class="blind">icon</span>
                        </div>
                        <strong>청소갤러리</strong>
                    </a>
                    <div class="customer">
                        <a href="tel:051-331-3354 ">051-331-3354</a>
                        <p>부산 김해 양산 기장 아파트입주청소 이사청소<br />
                            믿고 맡길 수 있는 청소 전문업체</p>
                        <span class="material-symbols-outlined icon">
                            record_voice_over
                        </span>
                    </div>
                </div>
            </section>
            <section class="main_content">
                <h2 class="blind">메인링크</h2>
                <div class="inner">
                    <ul class="lnk">
                        <li>
                            <a href="">
                                <div class="img_box">
                                    <img src="<?=G5_THEME_URL;?>/images/main_s011.jpg" alt="<?=$TIT;?>">
                                </div>
                                <strong>부산 아파트입주청소</strong>
                                <p>신축 아파트나 빌라 등 입주 전 상태에서의 실내 청소를 말하며
                                    보양지 제거, 공사먼지 제거, 오염 제거, 시멘트가루 제거 등
                                    구석구석 세밀하게 청소하는 서비스로 가족의 건강을 위해서 입주 전에 꼭 해야 하는 서비스입니다.</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="img_box">
                                    <img src="<?=G5_THEME_URL;?>/images/main_s012.jpg" alt="<?=$TIT;?>">
                                </div>
                                <strong>부산 이사/상가청소</strong>
                                <p>신축 건물은 공사기간 중 쌓인 미세먼지/유해성분들이 곳곳에 산재해 있습니다.
                                    입추청소를 맡기시면 유해성분 제거하고 청결한 환경을 만드실 수 있습니다.</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="img_box">
                                    <img src="<?=G5_THEME_URL;?>/images/main_s013.jpg" alt="<?=$TIT;?>">
                                </div>
                                <strong>부산 사무실청소</strong>
                                <p>쾌적한 업무 환경을 만들고, 능률적인 업무를 수행하기 위해 반드시 필요한 청소 작업 입니다.
                                    사무실청소에 있어서 가장 중요한 점은 빠른 시간 내에 완벽한 작업을 마무리 하는 것이 중요합니다.</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </main>

<?php
include_once(G5_THEME_PATH.'/tail.php');