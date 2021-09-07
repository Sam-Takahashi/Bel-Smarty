<?php
/* Smarty version 3.1.39, created on 2021-09-07 15:47:16
  from 'C:\xampp\htdocs\bel-smarty\templates\recipe-list-smarty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61376d649ed843_47543822',
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
  'cache_lifetime' => 120,
),true)) {
function content_61376d649ed843_47543822 (Smarty_Internal_Template $_smarty_tpl) {
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
                                    <li class="brsn">
                        <a href="single-recipe-smarty.php?id=2">
                            <img src="./img/recipe-img/0712_s.jpg" width="100%" alt="">
                            <p style="min-height: 38px;">
                                ひとくちチキン南蛮　ブルサンタルタルソースかけ

                            </p>
                        </a>
                    </li>
                                    <li class="brsn">
                        <a href="single-recipe-smarty.php?id=3">
                            <img src="./img/recipe-img/0710_s.jpg" width="100%" alt="">
                            <p style="min-height: 38px;">
                                ブルサンのエビロールサムギョプサル

                            </p>
                        </a>
                    </li>
                                    <li class="brsn">
                        <a href="single-recipe-smarty.php?id=4">
                            <img src="./img/recipe-img/0707_s.jpg" width="100%" alt="">
                            <p style="min-height: 38px;">
                                ブルサン ペッパーのショコラカヌレサンド

                            </p>
                        </a>
                    </li>
                                    <li class="brsn">
                        <a href="single-recipe-smarty.php?id=5">
                            <img src="./img/recipe-img/0696_s.jpg" width="100%" alt="">
                            <p style="min-height: 38px;">
                                まぐろのブルサンタルタル

                            </p>
                        </a>
                    </li>
                                    <li class="brsn">
                        <a href="single-recipe-smarty.php?id=6">
                            <img src="./img/recipe-img/0690_s.jpg" width="100%" alt="">
                            <p style="min-height: 38px;">
                                ブルサンの秋色ベジピザ

                            </p>
                        </a>
                    </li>
                                    <li class="brsn">
                        <a href="single-recipe-smarty.php?id=7">
                            <img src="./img/recipe-img/0683_s.jpg" width="100%" alt="">
                            <p style="min-height: 38px;">
                                ブルサンのブレッドサラダ

                            </p>
                        </a>
                    </li>
                                    <li class="brsn">
                        <a href="single-recipe-smarty.php?id=8">
                            <img src="./img/recipe-img/0675_s.jpg" width="100%" alt="">
                            <p style="min-height: 38px;">
                                ネギ塩牛タン　ブルサン添え

                            </p>
                        </a>
                    </li>
                                    <li class="brsn">
                        <a href="single-recipe-smarty.php?id=9">
                            <img src="./img/recipe-img/0671_s.jpg" width="100%" alt="">
                            <p style="min-height: 38px;">
                                ブルサン ガーリック＆ハーブと厚切りベーコンのクロスティーニ

                            </p>
                        </a>
                    </li>
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
