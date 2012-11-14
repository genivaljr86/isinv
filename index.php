<?php 
include("header.php");
wp_funcoes();
 ?>
    <title><?php echo $core_nome; ?></title>
  </head>
  <body>
    <div id="header">
    <?php include("topo.php"); ?>
    </div>
    <div id="slider_area">
    	<div id="sl" class="centraliza">
        	<div id="slider">
            	<a href=""><img src="<?php servidor(); ?>images/slider_home/lib_vida_tranq.jpg" alt=""></a>
            	<a href=""><img src="<?php servidor(); ?>images/slider_home/futuro_familia.jpg" alt=""></a>
            	<a href=""><img src="<?php servidor(); ?>images/slider_home/inv_ferram.jpg" alt=""></a>
            </div>
        </div>    
    </div>
    <div id="content">
    	<div id="home" class="centraliza">
        	<div id="calendario">
            	<ul>
            		<li>
                    	<a href=""><strong>12/11</strong> - Palestra sobre indepedencia financeira.</a>
                    </li>
            		<li>
                    	<a href=""><strong>09/12</strong> - Workshop sobre economia no lar.</a>
                    </li>
            		<li>
                    	<a href=""><strong>20/12</strong> Como economizar nas compras de natal.</a>
                    </li>
            	</ul>
                <center>&gt;&gt; <a href="">ver todos</a></center>
            </div>
            <a href=""><img src="<?php servidor(); ?>images/bg_abracont.png" alt="" id="abracont"></a>
            <div id="noticias">
            	<ul>
            <?php  
				query_posts( array( 'posts_per_page'=> 2, 'paged' => 1 ) );
				while (have_posts()): the_post();
			?>
            		<li>
                    	<a href=""><?php the_title(); ?></a><br>
                        <?php echo get_the_date('d/m/Y'); ?>	
                    </li>
             <?php endwhile; ?>	
            	</ul>
                <div style="text-align:right">&gt;&gt; <a href="">ver todos</a></div>
            </div>
            <a href=""><img src="images/bg_chat.png" alt="" id="chat"></a>
            <img src="images/p_title.png" alt="" id="p_title">
            <div id="parceiros"></div>
        </div>
    </div>
    <div id="footer">
    <?php include("footer.php"); ?>
    </div>
  </body>
</html>

