<?php get_header(); ?>

<main class='container'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <h1 class='my-3'><?php the_title(); ?></h1>
            <?php the_content(); ?>

        <?php    }
    }?>

    <div class="lista-productos my-5">
        <h2 class='text-center'>PRODUCTOS</h2>
        <div class="row my-5">
            <div class="col-12">
            </div>
        </div>
        
        <div id="resultado-productos" class="row justify-content-center">
        <?php $args = array(
            'post_type' => 'producto',
            'post_per_page' => -1, 
            'order'         => 'ASC',
            'orderby'       => 'title'
        );
        
        $productos = new WP_Query($args);

        if($productos->have_posts()){
            while($productos->have_posts()){
                $productos->the_post();
                ?>

                <div class="col-3 main-img">
                    <figure>
                        <?php the_post_thumbnail('large'); ?>
                    </figure>
                    <h4 class='my-3 text-center'>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title();?>
                        </a>
                    </h4>
                </div>

           <?php }
        }
        ?>
        </div>
    </div>
    
    <!-- Seccion Ultimas novedades (por desarrollar) -->
    <!-- <div class="row">
        <div class="col-12">
            <h1>Novedades</h1>
        </div>
        <div id="resultado-novedades"class="row"></div>
    </div> -->
</main>

<?php get_footer(); ?>