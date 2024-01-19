</div>
                </div>
            </div>
        </main>

        <script>
            $(function(){
                let num = <?=$cate_num;?>; 
                $('.lnb>ul>li').eq(num-1).addClass('on');
            })
        </script>



<?php echo $_GET['bo_table']?>

<!-- 우선 url 은 'parameter.php?name=철수' 이다.
이때 name 의 값을 가져오는 방법은 다음과 같다.
안녕하세요 <?php echo $_GET['name']?>님 -->