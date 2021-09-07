<?php

require('./includes/smartyHeader.php');
require('./classes/dbh.class.php');
require('./classes/single.class.php');


// ================================================
$title = 'Bel Smarty | Bel Japon';
$smarty->assign('title', $title);

// ================================================

// Instantiate new db connection =====================================
$con2 = new Single();
$res2 = $con2->singleRecipe();
//print_r($res);


// assign smarty code for db response ================================
$smarty->assign('res2', $res2);




// smarty DISPLAYS ================================================

$smarty->display('header.tpl');
$smarty->display('single-recipe-smarty.tpl');
$smarty->display('footer.tpl');
