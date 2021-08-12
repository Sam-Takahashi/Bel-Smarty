    <?php
    //include('./includes/class-autoload.inc.php');
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


        <div class="inner">
            <div class="title">
                <h3>
                    <!-- change php echo title -->
                    ひとくちチキン南蛮　ブルサンタルタルソースかけ
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

            <!-- page main content -->
            <!-- Display all ブルサン(color=Green) items -->
            <div id="detail">
                <div class="mainPhoto">
                    <!-- need to echo db image_ref here -->
                    <img src="./img/0712.jpg" alt="photo" width="100%">
                </div>

                <div class="mainTitle">
                    <!-- need to echo db name here -->
                    <h4 class="brsn">● ひとくちチキン南蛮　ブルサンタルタルソースかけ</h4>
                    <p>2～3人分</p>
                </div>
                <div class="dtlExp">
                    <h5>材料</h5>
                    <!-- need to echo db ingredients here -->
                    <p>Lorem ipsum dolor,<br> sit amet consectetur adipisicing elit. <br>Reprehenderit, necessitatibus.</p>
                    <br>

                    <h5>作り方</h5>
                    <span>＜下ごしらえ＞</span>
                    <!-- need to echo db process here -->
                    <ul>
                        <li> Lorem ipsum dolor sit.</li>
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Lorem ipsum dolor sit.</li>
                    </ul>

                    <br>

                    <span>＜手順＞</span>
                    <ol>
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Lorem ipsum dolor sit.</li>
                        <li>Lorem ipsum dolor sit.</li>
                    </ol>

                    <p class="prdbtn">
                        <a href="#">
                            <img src="./img/btn_brsn1.png" alt="" width="100%">
                        </a>
                    </p>
                </div>
            </div>
            <!-- end detail -->
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