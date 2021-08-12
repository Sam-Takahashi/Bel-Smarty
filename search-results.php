<?php
include('./includes/class-autoload.inc.php');
require_once('./templates/header.php');
?>


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
        <!-- SEARCH BAR -->
        <?php
        require_once('./templates/search-form.php')
        ?>
        <!-- SEARCH BAR FINISH -->


        <div id="sidenav">
            <!-- <img src="./img/sidebar.svg" alt=""> -->
        </div>

        <!-- SEARCH FUNCTION -->
        <div id="list">
            <ul id="recipe" class="clearfix">
                <?php

                $con = new PDO("mysql:host=localhost;dbname=bel-recipe;port=3307;", 'root', '');
                // Get the seach keyword
                if (isset($_POST['submit'])) {
                    $str = $_POST["search"];
                    $sth = $con->prepare("SELECT * FROM `recipe` WHERE name LIKE '%$str%' OR process LIKE '%$str%' OR ingredients LIKE '%$str%'");

                    $sth->setFetchMode(PDO::FETCH_OBJ);
                    $sth->execute();


                    // <!-- THIS IS WHERE THE RESULTS ARE SHOWN -->
                    // <!-- page main content -->
                    if ($row = $sth->fetchAll(PDO::FETCH_ASSOC)) {
                        // print_r($row);
                        // die;
                        foreach ($row as $val) {
                ?>
                            <li class="brsn">
                                <!-- need to echo link to corresponding page -->
                                <a href="#">
                                    <img src="./img/recipe-img/<?= $val['image_ref']; ?>" width="100%" alt="">
                                    <p style="min-height: 38px;"><?php echo $val['name']; ?></p>
                                </a>
                            </li>
                <?php
                        }
                    } else {

                        echo "<h3 class='err'>Nothing Found.</h3>";
                    }
                }
                ?>

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


<?php
require_once('./templates/footer.php')
?>