<?php
if($_GET['bo_table'] == 'gallery') {
    $cate_num = 4;
    $page_num = 1;
    $cate_tit = '고객지원';
    $page_tit = '청소갤러리';
} 
else if($_GET['bo_table'] == 'qa') {
    $cate_num = 4;
    $page_num = 1;
    $cate_tit = '고객지원';
    $page_tit = '문의게시판';
} 

?>

<main id="content" class="main" role="main">
            <div id="subPage">
                <div class="sub_head" style="background-image: url(<?=G5_THEME_URL;?>/images/main_slider_n0<?=$cate_num;?>.jpg);">
                    <div class="tit">
                        <h2><?=$cate_tit;?></h2>
                        <? include G5_THEME_PATH.'/doc/amenu0'.$cate_num.'.php';?>
                    </div>
                </div>
                <div class="sub_content">
                    <div class="inner">
                        <div class="page_tit">
                            <strong><?=$page_tit;?></strong><span><?=$cate_tit;?></span>
                        </div>