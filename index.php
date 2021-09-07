<?php

require('./includes/smartyHeader.php');

$title = 'Bel Smarty | Bel Japon';
$smarty->assign('title', $title);

// ================================================


//  ================================================

// ================================================
// ================================================
// ================================================
// ================================================
// smarty footer ================================================



// smarty DISPLAYS ================================================

$smarty->display('header.tpl');
//$smarty->display('search-form.tpl');
$smarty->display('recipe-template.tpl');
$smarty->display('footer.tpl');
