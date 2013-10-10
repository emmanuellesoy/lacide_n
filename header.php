<!DOCTYPE html>
<html>
    <head>
        <title><?php if(is_home()): bloginfo('name'); else : wp_title(); endif; ?></title>
        <link rel="shortcut icon" href="<?php bloginfo(    'template_directory'  ); ?>/img/favicon.ico">
        <link href="<?php bloginfo('template_url'); ?>/css/normalize.css" type="text/css" rel="stylesheet" />
        <?php if(is_single()){ ?>
            <link href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" rel="stylesheet" />
            <link href="<?php bloginfo('template_url'); ?>/css/cuerpo.css" type="text/css" rel="stylesheet" />
        <?php } else { ?>
            <link href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" rel="stylesheet" />
        <?php } ?>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/prefixfree.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <?php //get_template_part('general/api', 'facebook'); ?>