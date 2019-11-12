<?php
/* Smarty version 3.1.33, created on 2019-09-17 20:26:25
  from 'C:\xampp\htdocs\loja\loja\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8125511f7389_83528244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '918c96924964d04c91fbf271acbbff7531438332' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\loja\\view\\produtos_info.tpl',
      1 => 1568744781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8125511f7389_83528244 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>

      <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 - Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</h3>
<hr>

<div class="row">
    
  
        <div class="col-md-6 ">

        <img id class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="" > 

    </div>

   
	    <div class="col-md-6 thumbnail">
        
          <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png" alt="">
  <hr>
            
        
        <div class="col-md-6">
           <h3 class="text-center preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>   
            
        </div>
      
        <div class="col-md-6">
            <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                <input type="hidden" name="acao" value="add">
            <button  class="btn btn-success btn-lg">Adicionar ao Carrinho</button>
             </form> 
            
        </div>
           
         
      

     
        
    

    </div>




</div>
        <!-- -->

                  
        <div class="col-md-5 row">
            <hr>
            <h3 class="text-center">Descrição do produto</h3>

            <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
 

        </div>  
            <br>
            <br>

            <br>  
            <br>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php echo '<script'; ?>
 type="text/javascript"> 
        $(window).on('load', function() {
            $('#slider').nivoSlider(); 
        }); 
    <?php echo '</script'; ?>
> 
<?php }
}
