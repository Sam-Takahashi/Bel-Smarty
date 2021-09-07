<?php
/* Smarty version 3.1.39, created on 2021-09-07 15:50:53
  from 'C:\xampp\htdocs\bel-smarty\templates\recipe-list-smarty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61376e3d57f814_10137450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9368f0c0ff2320275222d7a558986f661fa4668' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bel-smarty\\templates\\recipe-list-smarty.tpl',
      1 => 1631022158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61376e3d57f814_10137450 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="recipe" class="clearfix">
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

        <h2 style="text-align: center; color: red;">RECIPE LIST PAGE(Search function)</h2>



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


        <div id="sidenav">
            <!-- <img src="./img/sidebar.svg" alt=""> -->
        </div>

        <!-- SMARTY page main content -->
        <!-- Display all ブルサン(color=Green) items -->

        <div id="list">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                    <li class="brsn">
                        <a href="single-recipe-smarty.php?id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">
                            <img src="./img/recipe-img/<?php echo $_smarty_tpl->tpl_vars['r']->value['image_ref'];?>
" width="100%" alt="">
                            <p style="min-height: 38px;">
                                <?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>

                            </p>
                        </a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>


    </div>
    <!-- bottom area -->
    <div class="bottom">
        <img src="./img/base_content.png" width="100%" alt="">
    </div>
</div>




<div class="banner">
    <a href="#">
        <img src="./img/bnr_brsn.jpg" width="100%" alt="">
    </a>
</div>

<?php }
}
