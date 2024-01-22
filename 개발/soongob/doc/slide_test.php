<?php
$cate_num = 4;
$page_num = 1;
$cate_tit = '깔끄미청소';
$page_tit = '사무실청소';
include '../../../common.php';
include_once(G5_THEME_PATH.'/head.php');
?>

<style>

    #sld .slide_test {
        position: relative;
        height: 400px;
        overflow:hidden;
    }

    #sld .slide_test .track {
        position: absolute;
        top:0;
        left:0;
        width: 300%;
        transition: left 0.6s;
    }

    #sld .slide_test .itm {
        float: left;
        width:33.33333333333333%;
        height: 400px;
    }

    #sld .slide_test .itm:nth-child(1) {
        background: #f00;
    }
    #sld .slide_test .itm:nth-child(2) {
        background: #ff0;
    }
    #sld .slide_test .itm:nth-child(3) {
        background: #f0f;
    }
</style>

<div class="inner" id="sld">
    <div class="slide_test">
        <div class="track">
            <div class="itm">01</div>
            <div class="itm">02</div>
            <div class="itm">03</div>
        </div>
    </div>
    <div>00000</div>
</div>

<script>
    $(function(){
        let n = 1;
        function sld() {
            $('#sld .slide_test .track').css({left: -100 * n + '%'});
            n = n + 1;
            if(n>2) {
                n = 0;
            }
        }

        setInterval(sld, 4000);
        
    })
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>