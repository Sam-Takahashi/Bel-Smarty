<?php
/* Smarty version 3.1.39, created on 2021-09-07 16:34:33
  from 'C:\xampp\htdocs\bel-smarty\templates\search-results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61377879a9b4c9_39397418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6299774a07794bd31d910486ef18572ec38f1b8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bel-smarty\\templates\\search-results.tpl',
      1 => 1631025266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61377879a9b4c9_39397418 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- // SQL Query based on search keyword -->
<!--Content Body -->
<div id="recipe" class="clearfix">
    <h2 class="only_pc">
        <img src="./img/listImage.jpg" width="100%" alt="bel recipe">
    </h2>
    <h2 class="only_sp">
        <img src="./img/listImage.png" width="100%" alt="bel recipe">
    </h2>


    <div class="inner">
        <div class="title">
            <h3>
                <img width="312" src="./img/title_boursin.png" alt="">
            </h3>
            <p>
                <span class="">全 158レシピ<br><br></span>
                ブランド:
                <span class="dot_blue">●</span>
                キリ&emsp;
                <span class="dot_red">●</span>
                ベルキューブ&emsp; 
                <span class="dot_green">●</span>
                ブルサン
            </p>
        </div>
        <h2 style="text-align: center; color: red;">SEARCH RESULTS PAGE</h2>


        <div id="sidenav">
            <!-- <img src="./img/sidebar.svg" alt=""> -->
        </div>
        <!-- SEARCH BAR BRSN-->
        <section class="search-form">
            <div class="">
                <form action="./search-results-smarty.php" method="POST" accept-charset="utf-8">
                    <input type="search" name="search" placeholder="Search for Food.." class="search-input">
                    <input type="submit" name="submit" value="Search" class="search-btn">
                </form>
            </div>
        </section>
        <!-- SEARCH BAR BRSN FINISH -->
        <div id="list">
            <ul id="recipe" class="clearfix">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res3']->value, 'r3');
$_smarty_tpl->tpl_vars['r3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r3']->value) {
$_smarty_tpl->tpl_vars['r3']->do_else = false;
?>
                    <li class="brsn">
                        <!-- need to echo link to corresponding page -->
                        <a href="single-recipe-smarty.php?id=<?php echo $_smarty_tpl->tpl_vars['r3']->value['id'];?>
">
                            <img src="./img/recipe-img/<?php echo $_smarty_tpl->tpl_vars['r3']->value['image_ref'];?>
" width="100%" alt="">
                            <p style="min-height: 38px;">
                                <?php echo $_smarty_tpl->tpl_vars['r3']->value['name'];?>

                            </p>
                        </a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <!-- SEARCH FUNCTION END -->

    </div>
</div>


<!-- bottom area -->
<div class="bottom">
    <img src="./img/base_content.png" width="100%" alt="">
</div>

<div class="banner">
    <a href="#">
        <img src="./img/bnr_brsn.jpg" width="100%" alt="">
    </a>
</div><?php }
}
