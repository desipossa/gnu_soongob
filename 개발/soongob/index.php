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
        <main id="content" class="main" role="main">
            <section class="main_visual">
                <h2 class="blind">메인콘텐츠</h2>
                <a href="#main_menu" class="wheel">
                    <span class="blind">다음콘텐츠</span>
                </a>
                <div class="main_visual_slide">
                    <div class="itm itm01">
                        <div class="con">
                            <strong>순곱이네 배달전문점 창업주 모집</strong>
                            <p>순곱이네는 오프라인 매장 오픈을 지원하기도 하지만 소규모 배달전문점 창업도 환영합니다.<br />
                                배달전문점 창업도 순곱이네가 하면 다릅니다.</p>
                        </div>
                    </div>
                    <div class="itm itm02">
                        <div class="con">
                            <strong>순곱이네 배달전문점 창업주 모집</strong>
                            <p>순곱이네는 오프라인 매장 오픈을 지원하기도 하지만 소규모 배달전문점 창업도 환영합니다.<br />
                                배달전문점 창업도 순곱이네가 하면 다릅니다.</p>
                        </div>
                    </div>
                    <div class="itm itm03">
                        <div class="con">
                            <strong>순곱이네 배달전문점 창업주 모집</strong>
                            <p>순곱이네는 오프라인 매장 오픈을 지원하기도 하지만 소규모 배달전문점 창업도 환영합니다.<br />
                                배달전문점 창업도 순곱이네가 하면 다릅니다.</p>
                        </div>
                    </div>
                </div>
                <div class="main_visual_slide_arrows">
                    <button class="left">
                        <span class="material-symbols-outlined icon">
                            chevron_left
                        </span>
                    </button>
                    <button class="right">
                        <span class="material-symbols-outlined icon">
                            chevron_right
                        </span>
                    </button>
                </div>
            </section>
            <section id="main_menu" class="main_menu default">
                <div class="tit">
                    <h2>순곱이네 메뉴</h2>
                    <p>순곱이네 음식은본사의 철저한 위생관리 시스템으로 관리되므로<br />
                        위생적이며 안전합니다.
                    </p>
                </div>
                <div class="main_menu_slide" dir="rtl">
                    <figure>
                        <img src="<?=G5_THEME_URL;?>/images/menu_itm01.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?=G5_THEME_URL;?>/images/menu_itm02.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?=G5_THEME_URL;?>/images/menu_itm03.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?=G5_THEME_URL;?>/images/menu_itm04.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?=G5_THEME_URL;?>/images/menu_itm05.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?=G5_THEME_URL;?>/images/menu_itm01.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?=G5_THEME_URL;?>/images/menu_itm02.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?=G5_THEME_URL;?>/images/menu_itm03.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?=G5_THEME_URL;?>/images/menu_itm04.jpg" alt="">
                    </figure>
                    <figure>
                        <img src="<?=G5_THEME_URL;?>/images/menu_itm05.jpg" alt="">
                    </figure>
                </div>
            </section>
            <section class="main_banner default">
                <div class="inner">
                    <div class="tit">
                        <h2>순곱이네 배달전문점 창업주 모집</h2>
                        <p>순곱이네는 오프라인 매장 오픈을 지원하기도 하지만 소규모 배달전문점 창업도 환영합니다.<br />
                            배달전문점 창업도 순곱이네가 하면 다릅니다.</p>
                    </div>
                    <a href="tel:1533-2256" class="lnk">창업문의: 1533-2256</a>
                </div>
            </section>
            <section class="main_content default">
                <h2 class="blind">메인콘텐츠</h2>
                <div class="inner">
                    <div class="itm">
                        <div class="icon">
                            <span class="blind">icon</span>
                        </div>
                        <h3>매출 극대화를 위한 노력</h3>
                        <p>
                            순곱이네는 타 가맹점에서 강요하는
                            로얄티나 광고비가 없으므로
                            저비용 투자에 고효율을 창출할 수 있습니다.
                        </p>
                    </div>
                    <div class="itm">
                        <div class="icon">
                            <span class="blind">icon</span>
                        </div>
                        <h3>본사 차원의 밀착지원</h3>
                        <p>
                            꾸준히 상승하고 있는 순곱이네 매출 노하우를
                            빠짐없이 전수하여 상생의 기반으로 합니다.
                        </p>
                    </div>
                    <div class="itm">
                        <div class="icon">
                            <span class="blind">icon</span>
                        </div>
                        <h3>순곱이네 메뉴 컨셉</h3>
                        <p>
                            우리음식만의 장점인 질리지 않는 맛으로
                            젊은층을 주고객으로 안주와 식사 대용으로 훌륭한 메뉴입니다.
                        </p>
                    </div>
                </div>
            </section>
            <section class="main_solution default">
                <h2 class="blind">메인솔루션</h2>
                <div class="solution_wrap">
                    <div class="con">
                        <div class="slide1">
                            <div class="itm">
                                <h3>매출 극대화를 위한 노력</h3>
                                <p>
                                    순곱이네는 타 가맹점에서 강요하는
                                    로얄티나 광고비가 없으므로
                                    저비용 투자에 고효율을 창출할 수 있습니다.
                                </p>
                            </div>
                            <div class="itm">
                                <h3>본사 차원의 밀착지원</h3>
                                <p>
                                    꾸준히 상승하고 있는 순곱이네 매출 노하우를
                                    빠짐없이 전수하여 상생의 기반으로 합니다.
                                </p>
                            </div>
                            <div class="itm">
                                <h3>순곱이네 메뉴 컨셉</h3>
                                <p>
                                    우리음식만의 장점인 질리지 않는 맛으로
                                    젊은층을 주고객으로 안주와 식사 대용으로 훌륭한 메뉴입니다.
                                </p>
                            </div>
                        </div>
                        <div class="num">01</div>
                    </div>
                    <div class="con">
                        <div class="slide2">
                            <figure>
                                <img src="<?=G5_THEME_URL;?>/images/main_slider_n01.jpg" alt="">
                            </figure>
                            <figure>
                                <img src="<?=G5_THEME_URL;?>/images/main_slider_n02.jpg" alt="">
                            </figure>
                            <figure>
                                <img src="<?=G5_THEME_URL;?>/images/main_slider_n03.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="con">
                        <iframe src="https://www.youtube.com/embed/bz2nks4i8iM" title="순곱이네 광고" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="con">
                        <div class="slide4" dir="rtl">
                            <figure>
                                <img src="<?=G5_THEME_URL;?>/images/main_slider_n01.jpg" alt="">
                            </figure>
                            <figure>
                                <img src="<?=G5_THEME_URL;?>/images/main_slider_n02.jpg" alt="">
                            </figure>
                            <figure>
                                <img src="<?=G5_THEME_URL;?>/images/main_slider_n03.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="main_solution_slide_arrows">
                    <button class="left">
                        <span class="material-symbols-outlined icon">
                            chevron_left
                        </span>
                    </button>
                    <button class="right">
                        <span class="material-symbols-outlined icon">
                            chevron_right
                        </span>
                    </button>
                </div>
            </section>
        </main>

<?php
include_once(G5_THEME_PATH.'/tail.php');