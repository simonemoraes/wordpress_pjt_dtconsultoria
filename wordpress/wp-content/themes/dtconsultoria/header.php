<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?> <!-- Informa ao wordpress onde os scripts e css serao adicionados, sem ele nao existe a adiçao -->

</head>
<body <?php body_class(); ?> >
<header>

    <!-- Inserindo parte de codigo html -->
    <?php get_template_part('template_parts/area_social', 'area-social') ?>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <!-- Habilitando a logo -->
                    <?php
                    if(has_custom_logo()){
                        the_custom_logo();
                    }else{
                        bloginfo('name');
                    }
                    ?>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                if(has_nav_menu('top')){
                    wp_nav_menu( array(
                            'theme_location' => 'top',
                            'menu_class' => 'nav navbar-nav navbar-right',
                            'fallback_cb' => 'false')
                    );
                }
                ?>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</header>


