<?php
/* Smarty version 3.1.33, created on 2019-09-25 15:35:45
  from 'C:\xampp\htdocs\loja\loja\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8b6d31717b20_09832131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de416dccf4c26eabdcc6b7709a599c1d0fec15f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\loja\\view\\home.tpl',
      1 => 1569418543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8b6d31717b20_09832131 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo $_smarty_tpl->tpl_vars['IMAGEM1']->value;?>
" alt="...">
      <div class="carousel-caption">
      
      </div>
    </div>
    <div class="item">
      <img src="<?php echo $_smarty_tpl->tpl_vars['IMAGEM2']->value;?>
" alt="...">
      <div class="carousel-caption">
      
      </div>
    </div>
        <div class="item">
      <img src="<?php echo $_smarty_tpl->tpl_vars['IMAGEM3']->value;?>
" alt="...">
      <div class="carousel-caption">
      
      </div>
    </div>
     <div class="item">
      <img src="<?php echo $_smarty_tpl->tpl_vars['IMAGEM4']->value;?>
" alt="...">
      <div class="carousel-caption">
      
      </div>
    </div>
 
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php }
}
