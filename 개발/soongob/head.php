<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<div id="wrap">
        <header id="header" class="header">
            <div class="header_wrap">
                <div class="right">
                    <h1>
                        <a href="/">
                            <img src="<?=G5_THEME_URL;?>/images/logo.svg" alt="">
                        </a>
                    </h1>
                    <nav class="gnb">
                        <ul class="depth1">
                            <li>
                                <a href="<?=G5_THEME_URL;?>/doc/m011.php">순곱이네 스토리</a>
                                <? include G5_THEME_PATH.'/doc/amenu01.php';?>
                            </li>
                            <li>
                                <a href="<?=G5_THEME_URL;?>/doc/m021.php">순곱이네 메뉴</a>
                                <? include G5_THEME_PATH.'/doc/amenu02.php';?>
                            </li>
                            <li>
                                <a href="<?=G5_THEME_URL;?>/doc/m031.php">순곱이네 창업</a>
                                <? include G5_THEME_PATH.'/doc/amenu03.php';?>
                            </li>
                            <li>
                                <a href="<?=G5_THEME_URL;?>/doc/m041.php">순곱이네 매장</a>
                                <? include G5_THEME_PATH.'/doc/amenu04.php';?>
                            </li>
                        </ul>
                    </nav>
                    <div class="util_area">
                        <strong>창업 / 고객 문의</strong>
                        <a href="tel:1533-2256" class="call">
                            1533-2256
                        </a>
                    </div>
                </div>
                <div class="left">
                    <a href="">
                        <span class="material-symbols-outlined icon">
                            home
                        </span>
                    </a>
                    <a href="">
                        <span class="material-symbols-outlined icon">
                            description
                        </span>
                    </a>
                    <a href="">
                        <span class="material-symbols-outlined icon">
                            alternate_email
                        </span>
                    </a>
                </div>
            </div>
            <button class="__mobile_menu">
                <span class="material-symbols-outlined icon">
                    menu
                </span>
            </button>
        </header>

        <!-- index가 아닐 때에 이걸 보여줘 -->
    <?php
    if(!defined('_INDEX_')) { 
        include G5_THEME_PATH.'/sub.head.php';
    }
    ?>