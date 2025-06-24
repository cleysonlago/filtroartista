<?php
/**
 * Template Name: Single Artista
 */

get_header(); ?>

<div class="main">
    <?php while (have_posts()) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="artista-header">
                <h1 class="artista-title"><?php the_field('nome'); ?></h1>
            </div>
            
            <div class="artista-content">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="artista-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="artista-description">
                    <?php the_field('descricao'); ?>
                </div>
            </div>
            
            <!-- Você pode adicionar campos personalizados aqui -->
            
        </article>

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>