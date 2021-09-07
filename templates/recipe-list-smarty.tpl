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
                {foreach $res as $r}
                    <li class="brsn">
                        <a href="single-recipe-smarty.php?id={$r.id}">
                            <img src="./img/recipe-img/{$r.image_ref}" width="100%" alt="">
                            <p style="min-height: 38px;">
                                {$r.name}
                            </p>
                        </a>
                    </li>
                {/foreach}
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

{* ---------------------------------------------------------- *}