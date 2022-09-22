<?php
include "../inc/config.php";
include "functions.php";
$q=explode("/", $_GET['q']);
$page='main';
$qpage=$q[0];
if(!empty($qpage) && file_exists('view/'.$qpage.'.php')){$page=$qpage;}
include "view/modules/header.php";
include "view/modules/sidebar.php";
include "view/".$page.".php";
include "view/modules/modal.php";
include "view/modules/coupon.php";
include "view/modules/footer.php";
