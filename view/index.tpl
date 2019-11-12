<!DOCTYPE html>

<html>
    <head>
        <title>{$TITULO_SITE}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{$GET_TEMA}/tema/css/nivo-slider.css">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/mi-slider.css">
          
         <link href="{$GET_TEMA}/tema/css/estilo.css" rel="stylesheet" type="text/css"/>     
        <link href="{$GET_TEMA}/tema/css/footer-with-button-logo.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMA}/tema/contatos/contatos.css" rel="stylesheet" type="text/css"/>
        <script src="{$GET_TEMA}/tema/js/jquery-2.2.1.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/tema/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/tema/contatos/contatos.js" type="text/javascript"></script>
        <!-- meu aquivo pessoal de CSS-->
        <link href="{$GET_TEMA}/tema/css/tema2.css" rel="stylesheet" type="text/css"/>
     <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    </head>



<style type="text/css">
    @media (min-width:240px) and (max-width: 800px)
    {
      #myFooter{
        margin-top: 1500px;
      }
    }




</style>




     <body>
                <!-- começa  o container geral -->
        <div class="container-fluid">
            
            <!-- começa a div topo -->
            <div class="row" id="topo">
                 
                
                <div class="container">
                <img src="{$GET_TEMA}/images/logo3.png" alt=""> 
                       
                </div>    
            
            </div><!-- fim da div topo -->
  

            
            <!-- começa a barra MENU-->
            <div class="row" id="barra-menu">

                <!--começa navBAR-->
                <nav class="navbar navbar-inverse "  >
                     <div class="logo" >
                         
                    <!-- container navBAr-->
                    <div class="container">
                        
                        <!-- header da navbar-->
                        <div class="navbar-header ">
                            <img src="{$GET_TEMA}/images/logo1.png" width="200px" height="20">
                           <!-- botao que mostra e esconde a navbar--> 
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="margin-top: 30px">

                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                        
                        </div><!--fim header navbar-->  
                        
                        <div class="collapse navbar-collapse " id="navbar" >

                            <ul class="nav navbar-nav" style="margin-left: 100px;margin-top: 20px; ">
                                <li><a href="{$GET_SITE_HOME}"><i class="glyphicon glyphicon-home"></i> Home </a> </li>


                                 <li><a href="{$PAG_PRODUTOS}"><i class="glyphicon glyphicon-tag"></i> Produtos </a> </li>
                               
                                <li><a href="{$PAG_MINHACONTA}"><i class="glyphicon glyphicon-user"></i> Minha Conta </a> </li>
                                <li><a href="{$PAG_CARRINHO}"><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho </a> </li>
                                <li><a href="{$PAG_CONTATO}" ><i class="glyphicon glyphicon-envelope"></i> Contato </a> </li>
                                
                                
                               
                                
                            </ul>
                            

                            <form class="navbar-form navbar-right" role="search"style="margin-top: 30px" >
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Digite para buscar" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </form>
                            
                         </div><!-- fim navbar collapse-->   


                    </div> <!--fim container navBar-->
                    
                </nav><!-- fim da navBar-->   
               
             </div> <!-- fim barra menu--> 
  <!---------------------- Botão Whats----------------------->
<div class="whats">
<a href="https://api.whatsapp.com/send?l=pt&amp;phone=5551996349369"><img src="{$GET_TEMA}/images/whats1.png" data-selector="img"></a>
</div>

<!----------------------Fim Botão Whats----------------------->
                 
                
          


     
            <!-- começa DIV conteudo-->
            <div class="row" id="conteudo" >
            
            <div class="container"> 
              
                <!-- coluna da esquerda -->
                <div class="col-md-2" id="lateral">
                    
                <div class="list-group">

                    <span class="list-group-item active"> Categorias</span>
                    
                    <a href="{$PAG_PRODUTOS}" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> Todos</a> 

                    {foreach from=$CATEGORIAS item=C}

                    <a href="{$C.cate_link}" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> {$C.cate_nome}</a> 
                  
                    {/foreach}


                </div><!--fim da list group-->              
                              
                </div> <!-- finm coluna esquerda -->  
                
                <!-- coluna direita CONYEUDO CENTRAL -->
                <div class="col-md-10">
                    
                    
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                        <li><a href="#"> Produtos </a></li>
                        <li><a href="#"> Info </a></li>
                    </ul>   
                    <!-- fim do menu breadcrumb-->             
                    
                  {php}

                  Rotas::get_Pagina();
                  //var_dump(Rotas::$pag);
                  {/php}
                    
                </div>  <!--fim coluna direita-->  
            
            </div>   
                
                
            
                
                
                 
            </div><!-- fim DIV conteudo-->
                </div> <!-- fim do container geral -->
<!---------------------------------------RODAPÉ-------------------------------->

  <!-- Footer -->



  <footer id="myFooter" >
      <div  class="rodape" >
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-4">
                  <h2 class="logo"><a href="#"><img src="{$GET_TEMA}/images/logo1.png" width="200" alt=""></a></h2>
              </div>
              <div class="col-sm-2">
                  <h5>Inicio</h5>
                  <ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="masculino.html">Loja</a></li>
                      <li><a href="sobre.html">Sobre</a></li>
                  </ul>
              </div>
              <div class="col-sm-2">
                  <h5>Sobre-nós</h5>
                  <ul>
                      <li><a href="#">Informações da Empresa</a></li>
                      <li><a href="#">Contato</a></li>
                      <li><a href="#">Blog</a></li>
                  </ul>
              </div>
              
              <div class="col-sm-3">
                  <div class="social-networks">
                      <a href="https://www.instagram.com/armacoes_styleunique/?hl=pt-br" ><img src="{$GET_TEMA}/images/insta_icone.png" ></a>
                      <a href="contato.html"><img src="{$GET_TEMA}/images/contact.png"></a>
                      <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5551991667804" ><img src="{$GET_TEMA}/images/whats_icon.png"></a>
                  </div>
                  <a href="contato.html">
                      <button type="button" class="btn btn-default">Contato</button>
                  </a>
              </div>
          </div>
      </div>
     <center><img src="{$GET_TEMA}/images/eu.png" height="20" width="20">Criação de sites : ivan.honemann@hotmail.com</a><br>
              <img src="{$GET_TEMA}/images/fone.png" height="20" width="20"> Fone : 51 99166-7804</H6></center>
      <div class="footer-copyright">
          <p>© 2019 Copyright - Style Unique</p>
      </div>
  </footer>
  </div>

            
            
            
       
   






    <script src="{$GET_TEMA}/tema/js/jquery.nivo.slider.js"></script>
    
    <script type="text/javascript"> 
        $(window).on('load', function() {
            $('#slider').nivoSlider(); 
        }); 
    </script> 



        
        
    </body>
</html>
