<?php
include('./includes/class-autoload.inc.php');
// require_once('./templates/header.php');
?>
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

        <h2 style="text-align: center; color: red;">RECIPE LIST PAGE(Search function)</h2>


        <!-- SEARCH BAR -->
        <?php
        require_once('search-form.php')
        ?>
        <!-- SEARCH BAR FINISH -->

        <div id="sidenav">
            <!-- <img src="./img/sidebar.svg" alt=""> -->
        </div>

        <!-- page main content -->
        <!-- Display all ブルサン(color=Green) items -->
        <div id="list">
            <ul>
                <?php $con = new Recipe(); 
                // print_r($con->getRecipe());
                // die;
                ?>
                

                <?php if ($con->getRecipe()) : ?>
                    <?php foreach ($con->getRecipe() as $val) : ?>
                        <li class="brsn">
                            <!-- need to echo link to corresponding page -->
                            <a href="single-recipe.php?id=<?= $val['id']; ?>">
                                <img src="./img/recipe-img/<?= $val['image_ref']; ?>" width="100%" alt="">
                                <p style="min-height: 38px;"><?php echo $val['name']; ?></p>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>Nothing to display</p>
                <?php endif; ?>
            </ul>
        </div>

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