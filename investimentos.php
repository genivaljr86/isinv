<?php 
include("header.php"); 

//Obtendo e configurando pagina
$pg2802="";
$pg2802=$_GET["pg"];

if($pg2802==""){
	$pg2802="acoes-opcoes";
}

//Listando as Páginas
$paginas= array();
$paginas["acoes-opcoes"]     ="Ações e Opções";
$paginas["mercado-termo"]    ="Mercado e Termo";
$paginas["contratos-futuros"]="Contratos Futuros";
$paginas["tesouro-direto"]   ="Tesouro Direto";
$paginas["op-estruturadas"]  ="Operações Estruturadas";
$paginas["fundos-indice"]    ="Fundos de Índice";
$paginas["ofertas-publicas"] ="Ofertas Públicas";
$paginas["riscos"]           ="Riscos";

//Redirecionando urls inexistentes
$indice=get_servidor()."investimentos/";
if(!array_key_exists($pg2802, $paginas)){ 
	echo '<script type="text/javascript">location.href="'.$indice.'";</script>';
	}

//Criando o link para o include
$get_pg="./invest_pgs/".$pg2802.".php";

//Criando indice para pg atual do menu
$ind=array_search($pg2802,array_keys($paginas));
$pg_atual[$ind]='class="atual"';

//Criando Figura do Titulo.
$link_title=get_servidor()."images/investimentos/".$pg2802."/title.png";
?>
    <title><?php echo $core_nome; ?> - Investimentos</title>
    <?php 
	?>
  </head>
  <body>
    <div id="header">
    <?php include("topo.php"); ?>
    </div>
    
    <div id="content">
    	<div class="centraliza">
        	<div id="analise" class="pg">
            	<div class="nav">
                	<div id="tit_nav">
                    	HOME :: INVESTIMENTOS :: <br>
                        <span><?php echo $paginas[$pg2802]; ?> </span>
                    </div>
                    <ul>
                    	<li <?php echo $pg_atual[0]; ?>>
                        	<a href="acoes-opcoes"><img src="<?php servidor(); ?>images/investimentos/menu/ac_op.png" alt=""></a>
                        </li>
                    	<li <?php echo $pg_atual[1]; ?>>
                        	<a href="mercado-termo"><img src="<?php servidor(); ?>images/investimentos/menu/merc_term.png" alt=""></a>
                        </li>
                    	<li <?php echo $pg_atual[2]; ?>>
                        	<a href="contratos-futuros"><img src="<?php servidor(); ?>images/investimentos/menu/cont_fut.png" alt=""></a>
                        </li>
                    	<li <?php echo $pg_atual[3]; ?>>
                        	<a href="tesouro-direto"><img src="<?php servidor(); ?>images/investimentos/menu/tes_dir.png" alt=""></a>
                        </li>
                    	<li <?php echo $pg_atual[4]; ?>>
                        	<a href="op-estruturadas"><img src="<?php servidor(); ?>images/investimentos/menu/ope_est.png" alt=""></a>
                        </li>
                    	<li <?php echo $pg_atual[5]; ?>>
                        	<a href="fundos-indice"><img src="<?php servidor(); ?>images/investimentos/menu/fun_ind.png" alt=""></a>
                        </li>
                    	<li <?php echo $pg_atual[6]; ?>>
                        	<a href="ofertas-publicas"><img src="<?php servidor(); ?>images/investimentos/menu/ofe_pub.png" alt=""></a>
                        </li>
                    	<li <?php echo $pg_atual[7]; ?>>
                        	<a href="riscos"><img src="<?php servidor(); ?>images/investimentos/menu/riscos.png" alt=""></a>
                        </li>
                    </ul>
                    <a href=""><img id="sponsor" src="<?php servidor(); ?>images/investimentos/perfil.jpg" alt=""></a>
                </div>
                <div class="conteudo">
                	<div id="title_c">
                    	<img src="<?php echo $link_title; ?>" alt="">
                    </div>
                    <div class="texto">
                    <?php include($get_pg); ?>	
                    </div>
                </div>
            	
            </div>
            <div class="separator"></div>
        </div>
    </div>
    <div id="footer">
    <?php include("footer.php"); ?>
    <?php include("contato_msg.php"); ?>
    </div>
  </body>
</html>