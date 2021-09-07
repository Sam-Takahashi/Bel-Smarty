<!-- // SQL Query based on search keyword -->
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
                {foreach $res3 as $r3}
                    <li class="brsn">
                        <!-- need to echo link to corresponding page -->
                        <a href="single-recipe-smarty.php?id={$r3.id}">
                            <img src="./img/recipe-img/{$r3.image_ref}" width="100%" alt="">
                            <p style="min-height: 38px;">
                                {$r3.name}
                            </p>
                        </a>
                    </li>
                {/foreach}
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
</div>