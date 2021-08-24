    <?php
    include('./includes/class-autoload.inc.php');
    require_once('./templates/header.php');
    ?>


    <!--Content Body -->
    <div id="recipe" class="clearfix">
        <h2 class="only_pc">
            <img src="./img/listImage.jpg" width="100%" alt="bel recipe">
        </h2>
        <h2 class="only_sp">
            <img src="./img/listImage.png" width="100%" alt="bel recipe">
        </h2>

        <!-- php ID content -->
        <div class="inner">
            <!-- page main content -->
            <!-- Display all ブルサン(color=Green) items -->

            <!-- PHP query db and show data -->
            <?php
            try {
                $con = new PDO("mysql:host=ec2-18-183-186-207.ap-northeast-1.compute.amazonaws.com/;dbname=bel-recipe;port=3306;", 'phpmyadmin', 'damacleaz');
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            $id = $_GET['id'];
            $sql = "SELECT * FROM recipe WHERE id=?";
            $res = $con->prepare($sql);

            $res->bindParam(1, $id);
            $res->execute();


            if ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                // print_r($process);
                // die;
            ?>
                <div class="title">
                    <h3>
                        <!-- change php echo title -->
                        <?= $row['name']; ?>
                    </h3>
                    <p>
                        ブランド:
                        <span class="dot_blue">●</span>
                        キリ&emsp;
                        <span class="dot_red">●</span>
                        ベルキューブ&emsp; 
                        <span class="dot_green">●</span>
                        ブルサン
                    </p>
                </div>

                <h2 style="text-align: center; color: red;">SINGLE PAGE</h2>

                <div id="sidenav">
                    <!-- <img src="./img/sidebar.svg" alt=""> -->
                </div>

                <div id="detail">
                    <div class="mainPhoto">
                        <!-- need to echo db image_ref here -->
                        <img src="./img/<?= $row['image_ref_lrg']; ?>" alt="photo" width="100%">
                    </div>

                    <div class="mainTitle">
                        <!-- need to echo db name here -->
                        <h4 class="brsn">● <?= $row['name']; ?></h4>
                        <p><?= $row['serves']; ?></p>
                    </div>
                    <div class="dtlExp">
                        <h5>材料</h5>
                        <!-- need to echo db ingredients here -->
                        <?= $row['ingredients']; ?>
                        <br><br>

                        <h5>作り方</h5>
                        <span>＜下ごしらえ＞</span>
                        <!-- need to echo db process here -->
                        <ul>
                            <li><?= $row['process_1-1']; ?></li>
                            <li><?= $row['process_1-2']; ?></li>
                            <li><?= $row['process_1-3']; ?></li>
                            <li><?= $row['process_1-4']; ?></li>
                            <li><?= $row['process_1-5']; ?></li>
                            <li><?= $row['process_1-6']; ?></li>
                        </ul>

                        <br>

                        <span>＜手順＞</span>
                        <ol>
                            <li><?= $row['process_2-1']; ?></li>
                            <li><?= $row['process_2-2']; ?></li>
                            <li><?= $row['process_2-3']; ?></li>
                            <li><?= $row['process_2-4']; ?></li>
                            <li><?= $row['process_2-5']; ?></li>
                            <li><?= $row['process_2-6']; ?></li>
                        </ol>

                        <p class="prdbtn">
                            <a href="#">
                                <img src="./img/btn_brsn1.png" alt="" width="100%">
                            </a>
                        </p>
                    </div>
                </div>
            <?php

            }
            ?>
            <!-- end detail -->

            <!-- bottom area -->
            <div class="sline">
                <img src="./img/sline.gif" width="100%" alt="">
            </div>

            <div id="section">
                <p class="backtop">
                    <a href="index.php">
                        <img src="./img/btn_backtop.png" width="100%" alt="ベルレシピTOPへ">
                    </a>
                </p>
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


    <?php
    require_once('./templates/footer.php')
    ?>