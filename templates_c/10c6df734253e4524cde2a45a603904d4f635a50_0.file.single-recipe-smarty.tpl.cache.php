<?php
/* Smarty version 3.1.39, created on 2021-09-07 15:46:58
  from 'C:\xampp\htdocs\bel-smarty\templates\single-recipe-smarty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61376d527a0461_05380712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10c6df734253e4524cde2a45a603904d4f635a50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bel-smarty\\templates\\single-recipe-smarty.tpl',
      1 => 1631021958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61376d527a0461_05380712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '49707410761376d52795820_07716141';
?>
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


         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res2']->value, 'res');
$_smarty_tpl->tpl_vars['res']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
$_smarty_tpl->tpl_vars['res']->do_else = false;
?>
             <div class="title">
                 <h3>
                     <!-- change php echo title -->
                     <?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>

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
                     <img src="./img/<?php echo $_smarty_tpl->tpl_vars['res']->value['image_ref_lrg'];?>
" alt="photo" width="100%">
                 </div>

                 <div class="mainTitle">
                     <!-- need to echo db name here -->
                     <h4 class="brsn">●
                         <?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>

                     </h4>
                     <p>
                         <?php echo $_smarty_tpl->tpl_vars['res']->value['serves'];?>

                     </p>
                 </div>
                 <div class="dtlExp">
                     <h5>材料</h5>
                     <!-- need to echo db ingredients here -->
                     <p>
                         <?php echo $_smarty_tpl->tpl_vars['res']->value['ingredients'];?>

                     </p>
                     <br><br>

                     <h5>作り方</h5>
                     <span>＜下ごしらえ＞</span>
                     <!-- need to echo db process here -->
                     <ul>
                         <li>
                             <?php echo $_smarty_tpl->tpl_vars['res']->value['process_1']-1;?>

                         </li>
                         <li>
                             <?php echo $_smarty_tpl->tpl_vars['res']->value['process_1']-2;?>

                         </li>
                         <li>
                             <?php echo $_smarty_tpl->tpl_vars['res']->value['process_1']-3;?>

                         </li>
                         <li>
                             <?php echo $_smarty_tpl->tpl_vars['res']->value['process_1']-4;?>

                         </li>
                         <li>
                             <?php echo $_smarty_tpl->tpl_vars['res']->value['process_1']-5;?>

                         </li>
                         <li>
                             <?php echo $_smarty_tpl->tpl_vars['res']->value['process_1']-6;?>

                         </li>
                     </ul>

                     <br>

                     <span>＜手順＞</span>
                     <ol>
                         <li>
                             <?php echo $_smarty_tpl->tpl_vars['res']->value['process_2']-1;?>

                         </li>
                         <li>
                             <?php echo $_smarty_tpl->tpl_vars['res']->value['process_2']-2;?>

                         </li>
                         <li>
                             <?php echo $_smarty_tpl->tpl_vars['res']->value['process_2']-3;?>

                         </li>
                         <li>
                             <?php echo $_smarty_tpl->tpl_vars['res']->value['process_2']-4;?>

                         </li>
                         <li>
                             <?php echo $_smarty_tpl->tpl_vars['res']->value['process_2']-5;?>

                         </li>
                         <li>
                             <?php echo $_smarty_tpl->tpl_vars['res']->value['process_2']-6;?>

                         </li>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
     <!-- bottom area -->
     <div class="bottom">
         <img src="./img/base_content.png" width="100%" alt="">
     </div>
 </div>




 <div class="banner">
     <a href="#">
         <img src="./img/bnr_brsn.jpg" width="100%" alt="">
     </a>
</div><?php }
}
