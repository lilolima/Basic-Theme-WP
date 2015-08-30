<?php get_header(); ?>
	<div id="conteudo">
		<div id="artigos">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="artigo">
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
					<p><?php the_content(); ?></p>
				</div>
			<?php endwhile; else: ?>
				<div class="artigo">
					<h2>Nada Encontrado</h2>
					<p>Erro 404</p>
					<p>Artigos não encontrados.</p>
				</div>			
			<?php endif; ?>
			
		</div>
		
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>