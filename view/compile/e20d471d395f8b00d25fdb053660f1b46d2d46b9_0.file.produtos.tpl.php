<?php
/* Smarty version 3.1.33, created on 2019-09-18 16:53:54
  from 'C:\xampp\htdocs\loja\loja\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8245028b9da4_53621458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e20d471d395f8b00d25fdb053660f1b46d2d46b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\loja\\view\\produtos.tpl',
      1 => 1568818432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8245028b9da4_53621458 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
.pagination>li>a{
    
    background-color:#000; 
    color: #fff;
}


}


</style>

<hr>

<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
<H4 class="alert alert-danger">Nenhum produto encontrado!!</H4>
<?php }?>
 
    
  
       
    <!--  começa lista de produtos  ---->   
  <section id="produtos" class="row">  
 
		<ul style="list-style: none" >
		    
		    
		  
		                  <div class="row" id="pularliha">
		        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?> 
		           
		        <li class="col-md-4">

		            <div class="thumbnail">

		                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">


		                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" width="200" height="200" alt="" > 

		                    <div class="caption">

		                        <h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4> 

		                        <h3 class="text-center text-danger">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>

		                    </div>

		                </a>

		            </div>


		        </li>

		        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		        
		         </div>
		         
		    
		</ul>
    
    </section>


     <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center>
    <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </center>
    </section><?php }
}
