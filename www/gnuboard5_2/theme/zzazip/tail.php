<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>

	<div class="close_menu"><i class="fa fa-times" id="mobile_menu_close"></i></div>


<script type="text/javascript">
<!--
$( document ).ready(function(){
	$( ".mobile_menu > ul > li" ).click(function(){
		$( this ).find('ul').toggle( 100 );
	});

	$( "#mobile_menu_close" ).click(function(){
		$( "#aside" ).animate({"left":"-315px"}, 200);
		$( ".close_menu" ).animate({"left":"-30px"}, 200);
	});

	$( "#mobile_menu_close" ).click(function(){
		$( "#aside" ).animate({"left":"-315px"}, 200);
		$( ".close_menu" ).animate({"left":"-30px"}, 200);
	});
	$( "#mobile_open" ).click(function(){
		$( "#aside" ).animate({"left":"0px"}, 200);
		$( ".close_menu" ).animate({"left":"310px"}, 200);
	});

});
//-->
</script>

        <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>

    </div>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="main">
<div class="row"><div class="span12">
	<footer class="clearfix">
		<div class="bot1">Call: <span>010 1234 5678</span></div>
		<div class="bot2 clearfix"><br>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a> ·
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보처리방침</a> ·
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">서비스이용약관</a>
		</div>
	</footer>
	<div class="copyright">Copyright © GNU.All rights reserved.</div>
</div></div></div>
</div>
<br>






<div id="ft"> 
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
        <script>
        
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
        </script>
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
?>