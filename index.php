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
                <?php query_posts('posts_per_page=3&post_type=pronamic_event'); ?>
                <?php while (have_posts()): the_post(); ?>
            		<li>
                    	<a href=""><strong><?php echo get_the_date('d/m'); ?></strong> - <?php the_title(); ?></a>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_query();?>
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
                    	<a href="<?php servidor(); ?>noticias/p/<?php echo $post->post_name; ?>"><?php the_title(); ?></a><br>
                        <?php echo get_the_date('d/m/Y'); ?>	
                    </li>
             <?php endwhile; ?>	
            	</ul>
                <div style="text-align:right">&gt;&gt; <a href="<?php servidor(); ?>/noticias/">ver todos</a></div>
            </div>
            <a href=""><img src="images/bg_chat.png" alt="" id="chat"></a>
            <img src="images/p_title.png" alt="" id="p_title">
            <div id="parceiros"></div>
            <div id="cotacao">
            	<script src="//www.gmodules.com/ig/ifr?url=http://hosting.gmodules.com/ig/gadgets/file/106578671605549411176/bovespa_gadget.xml&amp;up_lista_codigo=%5EBVSP%2BPETR3.SA%2BVALE3.SA&amp;synd=open&amp;w=215&amp;h=100&amp;&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>
            </div>
        </div>
    </div>
    <div id="footer">
    <?php include("footer.php"); ?>
    </div>
  </body>
</html>

