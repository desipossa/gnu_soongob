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

<footer id="footer" class="footer">
            <div class="__customer">
                <div class="inner">
                    <div class="itm">
                        <h3>배달전문점 창업 / 고객 문의</h3>
                        <a href="tel:1533-2256" class="call">
                            1533-2256
                            <strong>
                                <span class="blind">전화걸기</span>
                            </strong>
                        </a>
                    </div>
                    <div class="itm latest">
                        <h3>
                            순곱이네에서 알려드립니다.
                            <a href="" class="lnk">
                                <span class="material-symbols-outlined icon">
                                    chevron_right
                                </span>
                            </a>
                        </h3>
    <?php
    echo latest('theme/basic', 'qa', 4, 18);
    ?>


    <style>
            /* board style */

    .__customer .latest ul li {
        border-bottom: 1px solid #f1f1f1;
        line-height: 40px;
    }

    .__customer .latest ul li span {
        float: right;
    }
    </style>
                    </div>
                    <div class="itm">
                        <form action="" method="get" class="__form" title="체인점 요청">
                            <div class="input">
                                <label for="user">이 름</label><input type="text" name="user" id="user" required
                                    placeholder="이름">
                            </div>
                            <div class="input">
                                <label for="contact">연 락 처</label><input type="text" name="contact" id="contact"
                                    required placeholder="연락처">
                            </div>
                            <div class="input">
                                <label for="location">희 망 지 역</label><input type="text" name="location" id="location"
                                    required placeholder="희망지역">
                            </div>
                            <div class="submit">
                                <button type="submit">체인점 요청</button>
                            </div>
                        </form>
                        <script>
                            $(function () {
                                $('.__form').on('submit', function () {
                                    if ($('#user').val().length < 3) {
                                        alert('이름은 세자 이상 이어야합니다.');
                                        $('#user').focus();
                                        return false;
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
            <address class="bottom">
                <ul class="lnk">
                    <li><a href="">(주)배포장프랜차이즈 소개</a></li>
                    <li><a href="" class="b">개인정보취급방침</a></li>
                    <li><a href="">이메일수집거부</a></li>
                </ul>
                <ul class="inf">
                    <li>(주)배포장프랜차이즈 부산광역시 부산진구 연수로 18-1 서기빌딩 10층 전관</li>
                    <li>대표전화 : 051-863-2266</li>
                    <li>대표자 : 안영근</li>
                    <li>사업자등록번호 : 334-86-02040</li>
                    <li>Fax : 051-863-2255</li>
                    <li>e-mail : an3219yk@hanmail.net</li>
                </ul>
                <div class="copy">
                    &copy; (주)배포장프랜차이즈 All Rights Reserved.
                </div>
            </address>
        </footer>
        <button class="__top">
            <span class="material-symbols-outlined icon">
                chevron_right
            </span>
        </button>
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