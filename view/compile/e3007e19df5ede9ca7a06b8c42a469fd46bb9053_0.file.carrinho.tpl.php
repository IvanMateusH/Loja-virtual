<?php
/* Smarty version 3.1.33, created on 2019-09-18 15:43:11
  from 'C:\xampp\htdocs\loja\loja\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d82346fde1b89_70620985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3007e19df5ede9ca7a06b8c42a469fd46bb9053' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\loja\\view\\carrinho.tpl',
      1 => 1568814084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d82346fde1b89_70620985 (Smarty_Internal_Template $_smarty_tpl) {
?>  <h3>Meu Carrinho</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">
    
    <div class="col-md-12 " align="right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="btn btn-info" title="">Comprar Mais</a>
    </div>
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">
         
    </div>
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">
   
    <center>
    <table class="table table-bordered" style="width: 95%">

<!--
        <tr> 
        
            
            <td colspan="6" align="right"><a href="" class="btn btn-success" title="">Comprar Mais</a></td> 
        </tr> -->
       
        <tr class="text-danger bg-danger">
            <td></td> 
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>Quantidade</td> 
            <td>Sub Total R$</td> 
            <td></td> 
            
        </tr>
     
        
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        
        <tr>
            
            <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"> </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
  </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>
            <td> 
                <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                  
                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">    
                    <input type="hidden" name="acao" value="del">    
                    
                    <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                </form>
            </td>
            
            
        </tr>
        
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
            
            <div class="col-md-4 text-right text-danger bg-warning">
            <h4>
               Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

            </h4>
            </div>
            
            <!-- botão de limpar-->
            <div class="col-md-4 ">

                <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                    <input type="hidden" name="acao" value="limpar">
                    <input type="hidden" name="pro_id" value="1">

                    <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-trash"></i> Limpar Tudo</button>
                    <br>

                </form>
                    <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
                     <button class="btn btn-success btn-block" type="submit">  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>
                 </form>

            </div>

            
               <!-- botão finalzar -->
              
          

        </section>
                    <br>
                    
    
                   
           
           <hr>
           
       </form>  
       
       </div>
       
                   
                        
  </section>
       <br>
       <br>
       <br>
       <br><?php }
}
