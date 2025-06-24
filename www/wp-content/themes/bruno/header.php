<html <?php language_attributes(); ?> >

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
        <meta name="description" content="Promovemos a inovação para melhorar os modelos operacionais dos nossos clientes. Acreditamos na transformação digital. Serviços completos de TI." />
        <meta name="keywords" content="Tecnologia, segurança, redes, desenvolvimento, desenvolvimento de sistemas, progamador, desenvolvedor, front-end, back-end, seo, expressões regulares, regex, sql, mysql, zend, facebook, api, layout, designer, artes, arte, planejamento, seo, adwords, adsense, site, website, webmaster, webdeveloper, webdesign, php, html, e-mail, hospedagem, domínio, internet, web, sistema" />
        <meta name="robots" content="index,follow" />
        <meta name="author" content="Cleyson Lago" />
        <title><?php bloginfo('title'); ?><?php echo ' - '; ?><?php bloginfo('description'); ?></title>
        <?php wp_head(); ?>
        
    </head>

    <body <?php body_class(); ?> >

        <?php exibir_menu_alfabetico_artistas(); ?>

        <header>
            <h1>Topo</h1>
        </header>