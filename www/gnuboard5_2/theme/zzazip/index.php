<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<center>
<div id="navigation" class="container"><div class="row"><div class="span12">
	<ul class="menu menu1 row sf-menu clearfix">
      <li class="nav1 span3"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=free"><span class="over1"></span><span class="over2"></span><span class="ic1"></span><span class="txt1">01</span><span class="txt2">회사소개</span></a></li>
      <li class="nav2 span3"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=free"><span class="over1"></span><span class="over2"></span><span class="ic1"></span><span class="txt1">02</span><span class="txt2">제공서비스</span></a></li>
      <li class="nav3 span3"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=free"><span class="over1"></span><span class="over2"></span><span class="ic1"></span><span class="txt1">03</span><span class="txt2">전국지점 현황</span></a></li>
      <li class="nav4 span3"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=free"><span class="over1"></span><span class="over2"></span><span class="ic1"></span><span class="txt1">04</span><span class="txt2">운영관련 안내</span></a></li>      										
    </ul>

<div class="slider_wrapper"><div class="row">
        <div class="span3"><div class="logo2">
		<a href="http://sir.kr"><img src="<?php echo G5_THEME_URL ?>/images/logo2.png" alt=""></a>
		</div></div>

		<div class="span9">
			<div id="slider" class="clearfix">
				<div id="camera_wrap">
					<div data-src="<?php echo G5_THEME_URL ?>/images/slide01.jpg"></div>
					<div data-src="<?php echo G5_THEME_URL ?>/images/slide02.jpg"></div>
					<div data-src="<?php echo G5_THEME_URL ?>/images/slide03.jpg"></div>
					<div data-src="<?php echo G5_THEME_URL ?>/images/slide04.jpg"></div>
				</div>	
			</div>
        </div>
</div></div>

    <ul class="menu menu2 row sf-menu clearfix">
      <li class="nav5 span3"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=free"><span class="over1"></span><span class="over2"></span><span class="ic1"></span><span class="txt1">05</span><span class="txt2">support</span></a></li>
      <li class="nav6 span3"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=free"><span class="over1"></span><span class="over2"></span><span class="ic1"></span><span class="txt1">06</span><span class="txt2">clients</span></a></li>
      <li class="nav7 span3"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=free"><span class="over1"></span><span class="over2"></span><span class="ic1"></span><span class="txt1">07</span><span class="txt2">location</span></a></li>
      <li class="nav8 span3"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=free"><span class="over1"></span><span class="over2"></span><span class="ic1"></span><span class="txt1">08</span><span class="txt2">contacts</span></a></li>      										
    </ul>
    <div class="hl1"></div>
</div></div></div>
</div>

<h2 class="sound_only">최신글</h2>

<div class="latest_wr">
<!-- 최신글 시작 { -->

    <?php
    //  최신글
    $sql = " select bo_table
                from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
                where a.bo_device <> 'mobile' ";
    if(!$is_admin)
        $sql .= " and a.bo_use_cert = '' ";
    $sql .= " and a.bo_table not in ('notice', 'gallery') ";     //공지사항과 갤러리 게시판은 제외
    $sql .= " order by b.gr_order, a.bo_order ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
        if ($i%2==1) $lt_style = "margin-left:2%";
        else $lt_style = "";
    ?>
    <div style="float:left;<?php echo $lt_style ?>" class="lt_wr">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', $row['bo_table'], 6, 24);
        ?>
    </div>
    <?php
    }
    ?>
    <!-- } 최신글 끝 -->

</div>

<div class="latest_wr">
    <!--  사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/pic_basic', 'gallery', 6, 23);
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>
<br>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>