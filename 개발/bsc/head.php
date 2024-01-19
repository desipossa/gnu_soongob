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

<div class="wrap">
        <header id="header" class="header">
            <div class="logo_area">
                <div class="inner">
                    <h1>
                        <a href="/">
                            <img src="<?=G5_THEME_URL;?>/images/logo.png" alt="<?=$TIT;?>">
                        </a>
                    </h1>
                    <nav class="gnb">
                       <? include G5_THEME_PATH.'/nav.php';?>
                    </nav>
                    <button class="mopen">
                        <span class="material-symbols-outlined icon">
                            menu
                        </span>
                    </button>
                </div>
            </div>
            <div class="top_bar">
                <div class="inner">
                    <strong><?=$SLG;?></strong>
                    <a href="/adm/">
                        <span class="material-symbols-outlined icon">
                            pause
                        </span>
                    </a>
                </div>
            </div>
        </header>

        <!-- index가 아닐 때에 이걸 보여줘 -->
    <?php
    if(!defined('_INDEX_')) { 
        include G5_THEME_PATH.'/sub.head.php';
    }
    ?>