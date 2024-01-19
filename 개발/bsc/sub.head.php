<?php
if($_GET['bo_table'] == 'gallery') {
    $cate_num = 5;
    $page_num = 1;
    $cate_tit = '고객지원';
    $page_tit = '청소갤러리';
} 
else if($_GET['bo_table'] == 'qa') {
    $cate_num = 6;
    $page_num = 1;
    $cate_tit = '고객지원';
    $page_tit = '문의게시판';
} 
else {
    $cate_num = 1;
    $page_num = 1;
    $cate_tit = '고객지원';
    $page_tit = '깔끄미청소';
}

?>

<main id="content">
            <div id="subpage">
                <div class="top_page">
                    <div class="inner">
                        <span><?=$cate_tit;?></span> / <strong><?=$page_tit;?></strong>
                    </div>
                </div>
                <div class="content_wrap inner">
                    <article class="article">
                        <h2><strong><?=$page_tit;?></strong> / <span><?=$cate_tit;?></span> </h2>
                        <div class="content">