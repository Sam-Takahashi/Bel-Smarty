<?php

require('./includes/smartyHeader.php');
require('./classes/dbh.class.php');
require('./classes/recipe.class.php');


// ================================================
$title = 'Bel Smarty | Bel Japon';
$smarty->assign('title', $title);

// ================================================

// Instantiate new db connection =====================================
$con = new Recipe();
$res = $con->getRecipe();
// echo '<pre>';
// print_r($res);
// echo '</pre>';
// die;

// assign smarty code for db response ================================
$smarty->assign('res', $res);




// smarty DISPLAYS ================================================

$smarty->display('header.tpl');
$smarty->display('recipe-list-smarty.tpl');
$smarty->display('footer.tpl');
