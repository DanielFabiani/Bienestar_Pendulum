<?php get_header(); ?>

<main class='container align-items-center'>
    <div class="pagina404 my-5">
            <h1>ERROR 404 PÁGINA NO ENCONTRADA</h1>
            <h6>Haga <a href="<?php echo home_url(); ?>">click aquí</a> para volver a la página principal</h6>
            <img class="img_404" src="<?php echo get_template_directory_uri()?>/assets/img/pagina-error-404.jpg" alt="error 404 pagina no encontrada">
    </div>

</main>

<?php get_footer(); ?>