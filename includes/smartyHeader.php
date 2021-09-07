<?php
require_once('./smarty/Smarty.class.php');

$smarty = new Smarty;
$smarty->caching = false;
//$smarty->cache_lifetime = 120;
$smarty->template_dir = './templates';
$smarty->compile_dir = './templates_c';
