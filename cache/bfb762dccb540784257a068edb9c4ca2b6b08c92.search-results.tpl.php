<?php
/* Smarty version 3.1.39, created on 2021-09-07 15:36:01
  from 'C:\xampp\htdocs\bel-smarty\templates\search-results.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61376ac1ad0bd4_13703622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6299774a07794bd31d910486ef18572ec38f1b8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bel-smarty\\templates\\search-results.tpl',
      1 => 1631019072,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_61376ac1ad0bd4_13703622 (Smarty_Internal_Template $_smarty_tpl) {
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

        <!-- SEARCH FUNCTION -->
        <div id="list">
            <ul id="recipe" class="clearfix">
                                    <li class="brsn">
                        <!-- need to echo link to corresponding page -->
                        <a href="single-recipe.php?id=4">
                            <img src="./img/recipe-img/0707_s.jpg" width="100%" alt="">
                            <p style="min-height: 38px;">
                                ブルサン ペッパーのショコラカヌレサンド

                            </p>
                        </a>
                    </li>
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
