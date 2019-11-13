
 {foreach from=$PRO item=P}

      <h3 class="text-center">{$P.pro_nome} - Ref: {$P.pro_ref}</h3>
<hr>

<div class="row">
    
  
    {*  div da esquerda imagem do produto  *}
    <div class="col-md-6 ">

        <img id class="thumbnail" src="{$P.pro_img}" alt="" > 

    </div>

   
	{*    div da direita info produtos    *}
    <div class="col-md-6 thumbnail">
        
          <img src="{$TEMA}/images/logo-pagseguro.png" alt="">
  <hr>
            
        
        <div class="col-md-6">
           <h3 class="text-center preco">R$ {$P.pro_valor}</h3>   
            
        </div>
      
        <div class="col-md-6">
            <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                <input type="hidden" name="acao" value="add">
            <button  class="btn btn-success btn-lg">Adicionar ao Carrinho</button>
             </form> 
            
        </div>
           
         
      

     
        
    

    </div>




</div>
        <!-- -->

            {*    <!-- descrição do produto-->  *}
      
        <div class="col-md-5 row">
            <hr>
            <h3 class="text-center">Descrição do produto</h3>

            {$P.pro_desc} 

        </div>  
            <br>
            <br>

            <br>  
            <br>

  {/foreach}
      <script type="text/javascript"> 
        $(window).on('load', function() {
            $('#slider').nivoSlider(); 
        }); 
    </script> 
