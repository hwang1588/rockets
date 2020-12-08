<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$connect_skin_url.'/style.css">', 0);
?>

<div id="current_connect">
    <ul>
    <?php
    for ($i=0; $i<count($list); $i++) {
        $location = conv_content($list[$i]['lo_location'], 0);
        // 최고관리자에게만 허용
        // 이 조건문은 가능한 변경하지 마십시오.
        if ($list[$i]['lo_url'] && $is_admin == 'super') $display_location = "<a href=\"".$list[$i]['lo_url']."\">".$location."</a>";
        else $display_location = $location;
    ?>
        <li>
            <span class="crt crt_num"><?php echo $list[$i]['num'] ?></span>
            <span class="crt crt_name"><?php echo get_member_profile_img($list[$i]['mb_id']); ?><?php echo $list[$i]['name'] ?></span>
            <span class="crt crt_lct"><i class="fa fa-list-alt" aria-hidden="true"></i> <?php echo $display_location ?></span>
        </li>
    <?php
    }
    if ($i == 0)
        echo "<li class=\"empty_li\">현재 접속자가 없습니다.</li>";
    ?>
    </ul>
</div>