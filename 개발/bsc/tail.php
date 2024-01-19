<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php
    if(!defined('_INDEX_')) { 
        include G5_THEME_PATH.'/sub.tail.php';
    }
    ?>

<aside class="aside_customer">
            <h2 class="blind">고객지원</h2>
            <div class="inner">
                <div class="latest">
                    <h3>부산청소 깔끄미청소 알려드립니다.
                        <a href="">
                            <span class="material-symbols-outlined icon">
                                add
                            </span>
                        </a>
                    </h3>

    <?php
    echo latest('theme/basic', 'qa', 5, 40);
    ?>
                </div>
                <div class="map">
                    <h3 class="blind">찾아오시는길</h3>
                    <div class="map_box">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3259.817153288384!2d129.03157768884898!3d35.21102318539128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356894e76e7d1cd9%3A0xb9b08b0e9b5b4bc!2z67aA7IKw6rSR7Jet7IucIOu2geq1rCDrp4zrjZUy66GcIDE0IDMxNO2YuA!5e0!3m2!1sko!2skr!4v1704764501609!5m2!1sko!2skr"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </aside>

        <footer id="footer" class="footer">
            <div class="inner">
                <address>
                    <div class="add">부산광역시 북구 만덕2로 14 상가동 제314호</div>
                    <ul class="contact">
                        <li>대표자 : 전정선</li>
                        <li>사업자등록번호 : 606-11-45081</li>
                        <li>Tel : 051-331-3354</li>
                        <li>e-mail : jjs3354@naver.com</li>
                    </ul>
                    <div class="copy">
                        &copy; 부산아파트입주청소 금맥청소 All Rights Reserved.
                    </div>
                </address>
            </div>
        </footer>
    </div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");