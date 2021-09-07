<?php

require('./includes/smartyHeader.php');
require('./classes/dbh.class.php');
require('./classes/search.class.php');


// ================================================
$title = 'Bel Smarty | Bel Japon';
$smarty->assign('title', $title);

// ================================================

// Instantiate new db connection =====================================
$con3 = new Search();
$res3 = $con3->searchRecipe();
//print_r($res);


// assign smarty code for db response ================================
$smarty->assign('res3', $res3);




// smarty DISPLAYS ================================================

$smarty->display('header.tpl');
//$smarty->display('search-form.tpl');
$smarty->display('search-results.tpl');
$smarty->display('footer.tpl');
